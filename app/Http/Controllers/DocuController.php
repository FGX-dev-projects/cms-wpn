<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceCrudRequest;
use App\Models\Resources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocuController extends Controller
{
    public function index()
    {
        $documents = Resources::all();
        return view('document.index', compact('documents'));
    }

    public function create()
    {
        return view('document.create');
    }

   public function store(ResourceCrudRequest $request)
{
    //dd($request->all());
    $documents = $request->validated();
    
    try {
        if ($file = $request->file('pdf')) {
            $fileName = strtolower(time() . '_' . $file->getClientOriginalName());
            $file->move(public_path('uploads/resources'), $fileName);
            $documents['pdf_path'] = 'uploads/resources/' . $fileName;
        }

        Resources::create($documents);
        toastr()->success('Document uploaded successfully.');
    } catch (\Exception $e) {
        toastr()->error('Failed to upload document: ' . $e->getMessage());
        return redirect()->back()->withInput();
    }

    return redirect(route('document.index'));
}


    public function show(Resources $document)
    {
        return response()->file(storage_path("app/public/{$document->pdf_path}"));
    }

    public function download(Resources $document)
    {
        return response()->download(storage_path("app/public/{$document->pdf_path}"));
    }

    public function edit($id)
    {
        $document = Resources::findOrFail($id);

        //dd($data);
        return view('document.edit',compact('document' ));
    }

    public function update(ResourceCrudRequest $request, $id)
    {
        $document = Resources::findOrFail($id);
        $data = $request->validated();
    
        // Check if a new file was uploaded
        if ($file = $request->file('pdf')) {
            // Delete the old file from public/uploads/resources
            if ($document->pdf_path && file_exists(public_path($document->pdf_path))) {
                unlink(public_path($document->pdf_path));
            }
    
            // Generate a lowercase filename with a timestamp for uniqueness
            $fileName = strtolower(time() . '_' . $file->getClientOriginalName());
    
            // Move the new file to public/uploads/resources directory
            $file->move(public_path('uploads/resources'), $fileName);
    
            // Set the new file path for database storage
            $data['pdf_path'] = 'uploads/resources/' . $fileName;
        }
    
        // Update the document with the new data
        $document->update($data);
        toastr()->success('Document updated successfully.');
    
        return redirect(route('document.index'));
    }
    
    public function destroy($id)
    {
        $document = Resources::findOrFail($id);

        // Delete the file from storage
        if ($document->pdf_path && Storage::disk('public')->exists($document->pdf_path)) {
            Storage::disk('public')->delete($document->pdf_path);
        }

        $document->delete();
        toastr()->info('Document deleted successfully.');

        return redirect(route('document.index'));
    }
    
}
