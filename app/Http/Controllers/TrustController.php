<?php

namespace App\Http\Controllers;
use App\Models\Trust;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;
use App\Models\MemberGroup;
use App\Http\Requests\CapePenRequest;
use Mail;
use Illuminate\Http\Request;
use Log;


class TrustController extends Controller
{
    public function index(Request $request)
    {
    $query = Trust::query();
    
     // Check if search input is present and not empty
     if ($request->filled('search')) {
        $searchTerm = $request->input('search');
        $query->where('name', 'LIKE', "%{$searchTerm}%")
              ->orWhere('email', 'LIKE', "%{$searchTerm}%");
    }
    
    // Fetch results
    $data = $query->get();
    $memberGroups = MemberGroup::all();

    return view('trust.index', compact('data', 'memberGroups'));
    }

    public function create()
    {
        $data = Trust::all();
        $memberGroups = MemberGroup::all();

        return view('trust.create', compact( 'data', 'memberGroups'));
    }

    public function store(CapePenRequest $request)
    {
        $data = $request->validated();

        $capetown = Trust::create($data);

         // Associate with the selected member group
    $capetown->member_group_id = $request->member_group_id;
    $capetown->save();

        toastr()->success('Member Saved');

        return redirect(route('trust.index'));
    }

    public function edit($id)
    {
        $data = Trust::findOrFail($id);
        $memberGroups = MemberGroup::all();
        
        

        //dd($data);
        return view('trust.edit',compact('data','memberGroups' ));
    }
    
    protected $groupToModelMap;

    public function __construct()
    {
        // Initialize an empty array to avoid uninitialized errors
        $this->groupToModelMap = [];
    }
    
    public function update(CapePenRequest $request, $id)
    {
        $data = $request->all();
        $record = Trust::findOrFail($id);
                // Update the member_group_id with a single value from the dropdown
       if ($request->has('member_group_id')) {
        $data['member_group_id'] = $request->input('member_group_id');
    }

    $record->update($data);

     // Handle duplication logic if group IDs are provided
     if ($request->has('duplicate_to_group_ids') && is_array($request->duplicate_to_group_ids)) {
        foreach ($request->duplicate_to_group_ids as $groupId) {
            // Fetch the model class dynamically from the database
            $memberGroup = MemberGroup::find($groupId);
            if ($memberGroup && class_exists($memberGroup->model_class)) {
                $modelClass = $memberGroup->model_class;

                try {
                    // Duplicate the member into the selected group's table
                    $modelClass::create([
                         'title' => $record->title,
                        'name' => $record->name,
                        'surname' => $record->surname,
                        'email' => $record->email,
                        'cell' => $record->cell,
                        'year_of_study' => $record->year_of_study,
                        'nationality' => $record->nationality,
                        'institution' => $record->institution,
                        'degree' => $record->degree,
                        'read_constitution' => $record->read_constitution,
                        'paid' => $record->paid,
                        'cancel_invoice' => $record->cancel_invoice,
                        'invoice_number'=>$record->invoice_number,
                        'account_active' => $record->account_active,
                        'application_approved' => $record->application_approved,
                    ]);
                } catch (\Exception $e) {
                    Log::error("Duplication failed for group ID {$groupId}: {$e->getMessage()}");
                    toastr()->error('Failed to duplicate to one or more groups');
                }
            } else {
                toastr()->error("Invalid group ID or model class: {$groupId}");
            }
        }
    }

        toastr()->success('Member Updated');

        return redirect()->route('trust.index');
    }

    public function destroy($id)
    {
        $data = Trust::findOrFail($id);
        $data->delete();
        toastr()->info('Member Deleted');
        return redirect()->route('trust.index');
    }
    public function sendInvoices(Request $request)
{
    // Validate that selected_members exists and is an array
    $validated = $request->validate([
        'selected_members' => 'required|array',
        'selected_members.*' => 'exists:trusts,id',
    ]);

    $members = Trust::whereIn('id', $validated['selected_members'])->get();

    foreach ($members as $member) {
        if ($member->email) {
            try {
                // Generate invoice number if not already set
                if (!$member->invoice_number) {
                    $yearMonth = now()->format('Ymd');
                    $latestInvoice = Trust::where('invoice_number', 'LIKE', "{$yearMonth}-%")
                        ->orderByDesc('invoice_number')
                        ->first();

                    $nextNumber = $latestInvoice ? intval(substr($latestInvoice->invoice_number, -2)) + 1 : 1;
                    $formattedNumber = str_pad($nextNumber, 2, '0', STR_PAD_LEFT);
                    $invoiceNumber = "{$yearMonth}-{$formattedNumber}";

                    $member->update(['invoice_number' => $invoiceNumber]);
                }

                // Generate PDF using DomPDF
                $options = new Options();
                $options->set('isHtml5ParserEnabled', true);
                $options->set('isRemoteEnabled', true);

                $dompdf = new Dompdf($options);
                $html = view('emails.university', compact('member'))->render();
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();

                // Save PDF to a temporary location
                $fileName = "invoice_{$member->invoice_number}.pdf";
                $pdfOutput = $dompdf->output();
                $filePath = storage_path("app/public/invoices/{$fileName}");
                Storage::put("public/invoices/{$fileName}", $pdfOutput);

                // Send invoice email using the InvoiceMail Mailable
                Mail::send('emails.university', ['member' => $member], function ($message) use ($member, $filePath, $fileName) {
                    $message->to($member->email)
                        ->subject('Your Invoice')
                        ->attach($filePath, [
                            'as' => $fileName,
                            'mime' => 'application/pdf',
                        ]);
                });

                // Update the 'member_invoiced' field to 1
                $member->update(['member_invoiced' => 1]);

                // Delete the PDF after sending (optional)
                Storage::delete("public/invoices/{$fileName}");
            } catch (\Exception $e) {
                // Log the error or handle it as needed
                \Log::error("Failed to send invoice to member ID: {$member->id}, Error: {$e->getMessage()}");
            }
        }
    }

    return back()->with('success', 'Invoices sent successfully');
}
}
