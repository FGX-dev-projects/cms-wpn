<?php
namespace App\Http\Controllers;

use App\Http\Requests\GalleryCrudRequest;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Models\GalleryImages;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with('images')->get();
        return view('gallery.index', compact('galleries'));
    }

    public function create()
    {
        $galleries = Gallery::with('images')->get();
        return view('gallery.index', compact('galleries'));
    }

    public function store(GalleryCrudRequest $request)
    {
        $data = $request->validated();
        $gallery = Gallery::create(['title' => $data['title'], 'content' => $data['content'] ?? '']);
        

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->move(public_path('uploads/galleries'), $fileName);

                GalleryImages::create([
                    'gallery_id' => $gallery->id,
                    'file_path' => 'uploads/galleries/' . $fileName,
                ]);
            }
        }

        toastr()->success('Gallery created successfully with images!');
        return redirect(route('gallery.index'));
    }

    public function edit($id)
    {
        $gallery = Gallery::with('images')->findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function update(GalleryCrudRequest $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $data = $request->validated();

        $gallery->update(['title' => $data['title'], 'content' => $data['content'] ?? '']);

        if ($request->hasFile('images')) {
            foreach ($gallery->images as $image) {
                File::delete(public_path($image->file_path));
                $image->delete();
            }

            foreach ($request->file('images') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->move(public_path('uploads/galleries'), $fileName);

                GalleryImages::create([
                    'gallery_id' => $gallery->id,
                    'file_path' => 'uploads/galleries/' . $fileName,
                ]);
            }
        }

        toastr()->success('Gallery updated successfully!');
        return redirect(route('gallery.index'));
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        foreach ($gallery->images as $image) {
            File::delete(public_path($image->file_path));
            $image->delete();
        }

        $gallery->delete();
        toastr()->success('Gallery deleted successfully.');
        return redirect(route('gallery.index'));
    }
}
