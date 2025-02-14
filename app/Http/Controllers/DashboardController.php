<?php

namespace App\Http\Controllers;


use App\Models\Branch;
use App\Models\CapePeninsula;
use App\Models\CapeTown;
use App\Models\EasternChapter;
use App\Models\Gallery;
use App\Models\Johannesburg;
use App\Models\KznChapter;
use App\Models\Kznuni;
use App\Models\Members;
use App\Models\PortElizabeth;
use App\Models\Post;
use App\Models\Pretoria;
use App\Models\Promo;
use App\Models\StudentReg;
use App\Models\Trust;
use App\Models\Type;
use App\Models\WesternChapter;
use App\Models\Wits;
use App\Models\Resources;
use App\Models\YoungProfessional;
use DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $types = Type::all();
        $data = Post::latest('updated_at')->get();
        $articles_count = Post::count();
        $resources = Resources::count();
        $gallery_count = Gallery::count();
        $capepen = CapePeninsula::count();
        $capetown = CapeTown::count();
        $easternchap = EasternChapter::count();
        $westernchap = WesternChapter::count();
        $kznchap = KznChapter::count();
        $gautengchap = Members::count();
        $unijoburg = Johannesburg::count();
        $unipretoira = Pretoria::count();
        $uniwits = Wits::count();
        $unipe = PortElizabeth::count();
        $unikzn = Kznuni::count();
        $unistudentreg = StudentReg::count();
        $trust = Trust::count();
        $young_prof = YoungProfessional::count();
        
        $members_count = $capepen + $capetown + $easternchap + $westernchap + 
                   $kznchap + $gautengchap + $unijoburg + $unipretoira + 
                   $uniwits + $unipe + $unikzn + $unistudentreg + $trust + 
                   $young_prof;
        
        
        return view('dashboard.index', compact('data','resources', 'types', 'articles_count', 'members_count', 'gallery_count' ));
    }
    
    public function editInvoiceSection() {
        $content = DB::table('email_content')->where('section_name', 'invoice_section')->first();
        return view('dashboard.edit-invoice-section', compact('content'));
    }
    
    public function updateInvoiceSection(Request $request) {
        $request->validate([
            'content' => 'required',
        ]);
    
        DB::table('email_content')
            ->where('section_name', 'invoice_section')
            ->update([
                'content' => $request->input('content'),
                'updated_at' => now(),
            ]);
    
            return redirect()->route('dashboard.index')->with('success', 'Invoice section updated successfully.');
    }
    public function editInvoiceSectionChap() {
        $content = DB::table('email_content_chap')->where('section_name', 'invoice_section')->first();
        return view('dashboard.edit-invoice-section-chap', compact('content'));
    }
    
    public function updateInvoiceSectionChap(Request $request) {
        $request->validate([
            'content' => 'required',
        ]);
    
        DB::table('email_content_chap')
            ->where('section_name', 'invoice_section')
            ->update([
                'content' => $request->input('content'),
                'updated_at' => now(),
            ]);
    
            return redirect()->route('dashboard.index')->with('success', 'Invoice section updated successfully.');
    }
    
    
        public function exportTable($table)
{
    try {
        // Fetch data from the specified table
        $data = DB::table($table)->get();

        if ($data->isEmpty()) {
            return redirect()->back()->with('error', 'The table has no data to export.');
        }

        // Convert data to array and format dates
        $dataArray = $data->map(function ($item) {
            $item = (array) $item;

             // Remove 'member_group_id' column
             unset($item['member_group_id']);
             unset($item['read_constitution']);
             unset($item['id']);

            // Convert boolean-like columns
            if (isset($item['paid'])) {
                $item['paid'] = $item['paid'] == 1 ? 'Yes' : 'No';
            }
            
            if (isset($item['account_active'])) {
                $item['account_active'] = $item['account_active'] == 1 ? 'Yes' : 'No';
            }
            if (isset($item['member_invoiced'])) {
                $item['member_invoiced'] = $item['member_invoiced'] == 1 ? 'Yes' : 'No';
            }
            if (isset($item['application_approved'])) {
                $item['application_approved'] = $item['application_approved'] == 1 ? 'Yes' : 'No';
            }
        
            // Format created_at and updated_at to only show the date
            if (isset($item['created_at'])) {
                $item['created_at'] = \Carbon\Carbon::parse($item['created_at'])->format('Y-m-d');
            }
            if (isset($item['updated_at'])) {
                $item['updated_at'] = \Carbon\Carbon::parse($item['updated_at'])->format('Y-m-d');
            }
        
            return $item;
        })->toArray();

        // Create CSV header
        $csvData = [];
        $header = array_keys($dataArray[0]);
        $csvData[] = implode(',', $header);

        // Add rows to CSV with proper escaping
        foreach ($dataArray as $row) {
            $escapedRow = array_map(function ($value) {
                return '"' . str_replace('"', '""', $value) . '"';
            }, $row);
            $csvData[] = implode(',', $escapedRow);
        }

        // Convert CSV data to string
        $csvString = implode("\n", $csvData);

        // Create a CSV response
        $fileName = $table . '_export_' . now()->format('Y-m-d_H-i-s') . '.csv';

        return Response::make($csvString, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$fileName\"",
        ]);
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error exporting table: ' . $e->getMessage());
    }
}
}
