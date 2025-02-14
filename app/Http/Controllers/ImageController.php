<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use File;

class ImageController extends Controller
{
    public function index()
    {
        $data = Image::latest('updated_at')->get();
        return view('promotions.index', compact('data'));
    }

    public function create()
    {
        return view('promotions.create');
    }

    public function store(ImageRequest $request)
    {

     $data = $request->all();

     if($file = $request->file('image')){

            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/promotions/'),$fileName);

            $data['image'] = $fileName;
        }

        Image::create($data);

        toastr()->success('Data Saved');

        return redirect(route('promotions.index'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Image::findOrFail($id);

        return view('promotions.edit',compact('data'));
    }

    public function update(ImageRequest $request, $id)
    {
        $data = $request->all();

        //dd($data);

        $record = Image::findorfail($id);

        if($file = $request->file('image')){

            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/promotions/'),$fileName);

            $data['image'] = $fileName;
        }

        $record->update($data);

        toastr()->success('message', 'Record Updated');

        return redirect()->route('promotions.index');
    }

    public function destroy($id)
    {
        $data = Image::findOrFail($id);

        $fileName = $data->file;

       File::delete(public_path('uploads/promotions/') . $fileName);

       /*if(File::exists(public_path('uploads/partners/') . $fileName)){
            unlink(public_path('uploads/partners/') . $fileName);
        }*/

        $data->delete();

        toastr()->info('Record Deleted');
        return redirect()->route('promotions.index');
    }
}
