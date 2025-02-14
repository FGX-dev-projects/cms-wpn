<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use App\Models\Departments;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Requests\MembersCrudRequest;
use File;

class MemberController extends Controller
{
    public function index()
    {
        $data = Member::orderBy('name', 'ASC')->get();
        $roles = Role::all();
        return view('members.index', compact('data', 'roles'));
    }
    public function create()
    {
        $countries = Countries::all();
        $departments = Departments::all();
        return view('members.create', compact('countries', 'departments'));
    }

    public function store(MembersCrudRequest $request)
    {
        $data = $request->all();

        if($file = $request->file('file')){
            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/members/'),$fileName);

            $data['file'] = $fileName;
        }

        Member::create($data);

        toastr()->success('Record Saved');

        return redirect(route('members.index'));
    }

    public function show($id)
    {

    }
    public function edit($id)
    {
        $data = Member::findOrFail($id);

        $countries = Countries::all();

        $departments = Departments::all();

        return view('members.edit',compact('data','countries', 'departments' ));
    }

    public function update(MembersCrudRequest $request, $id)
    {
        $data = $request->all();

        //dd($data);

        $record = Member::findorfail($id);

        if($file = $request->file('file')){

            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/members/'),$fileName);

            $data['file'] = $fileName;
        }

        $record->update($data);

        toastr()->success('message', 'Record Updated');

        return redirect()->route('members.index');
    }

    public function destroy($id)
    {
        $data = Member::findOrFail($id);
        $fileName = $data->file;
        File::delete(public_path('uploads/members/') . $fileName);
        $data->delete();
        toastr()->info('Record Deleted');
        return redirect()->route('members.index');
    }
}

