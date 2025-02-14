<?php

namespace App\Http\Controllers;
use App\Http\Requests\TypeCrudRequest;
use App\Models\Type;
use Illuminate\Http\Request;


use Toastr;

class TypesController extends Controller
{
    public function index()
    {
        $data = Type::paginate(15);
        return view('types.index', compact('data'));
    }


    public function create()
    {
        return view('types.create');
    }


    public function store(TypeCrudRequest $request)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Please supply post name'
        ]);


        $data = Type::create($request->all());
        toastr()->success('Post type saved.');
        return redirect(route('types.index'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Type::findOrFail($id);

        return view('types.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Type::findOrFail($id);

        $data->update($request->all());
        toastr()->success('message', 'Record Updated');
        return redirect()->route('types.index');
    }

    public function destroy($id)
    {
        $data = Type::findOrFail($id);

        $data->delete();
        toastr()->info('Record Deleted');
        return redirect()->route('types.index');
    }
}
