<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillingCrudRequest;
use App\Models\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        $data = Billing::all();
        return view('billing.index', compact('data'));
    }
    public function create()
    {
        {
            $data = Billing::all();
            
            return view('billing.create', compact('data'));
        }
    }
    public function store(BillingCrudRequest $request)
    {
        $data = $request->all();
        if($file = $request->file('file')){
            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;
            $file->move(public_path('uploads/logo/'),$fileName);
            $data['logo'] = $fileName;

        }
        Billing::create($data);
        toastr()->success('Billing Details Saved');
        return redirect(route('billing.index'));
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        $data = Billing::findOrFail($id);
        //dd($data);
        return view('billing.edit',compact('data' ));
    }
    public function update(BillingCrudRequest $request, $id)
    {
        $data = $request->all();

        $record = Billing::findorfail($id);
        if($file = $request->file('file')){
            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;
            $file->move(public_path('uploads/logo/'),$fileName);
            $data['logo'] = $fileName;

        }

        $record->update($data);

        toastr()->success('Billing Details Updated');

        return redirect()->route('billing.index');
    }
    public function destroy($id)
    {
        $data = Billing::findOrFail($id);
        $data->delete();
        toastr()->info('Billing Details Deleted');
        return redirect()->route('billing.index');
    }
}
