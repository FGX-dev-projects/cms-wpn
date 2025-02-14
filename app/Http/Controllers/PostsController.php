<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Support\Str;
use App\Http\Requests\PostsCrudRequest;
use File;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        $data = Post::latest('updated_at')->get();
        return view('posts.index', compact('data'));
    }
    public function create()
    {
        $data = Post::all();
        
        return view('posts.create', compact( 'data'));
    }
    public function store(PostsCrudRequest $request)
    {
        $data = $request->all();

        
        $data['slug'] = Str::slug($request->get('title'));

       

        if($file = $request->file('small_image')){

            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/posts/small/'),$fileName);

            $data['small_image'] = $fileName;
             
        }

        if($file = $request->file('large_image')){

            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/posts/large/'),$fileName);

            $data['large_image'] = $fileName;
        }

        if($file = $request->file('author_icon')){

            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/posts/author_icon/'),$fileName);

            $data['author_icon'] = $fileName;
        }

        Post::create($data);

        toastr()->success('Post Saved');

        return redirect(route('posts.index'));
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        $data = Post::findOrFail($id);
       
        return view('posts.edit',compact('data'));
    }
    public function update(PostsCrudRequest $request, $id)
    {
        $data = $request->all();

        $record = Post::findorfail($id);

        if($file = $request->file('small_image')){

            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/posts/small/'),$fileName);

            $data['small_image'] = $fileName;
        }

        if($file = $request->file('large_image')){

            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/posts/large/'),$fileName);

            $data['large_image'] = $fileName;
        }

        if($file = $request->file('author_icon')){

            $fileName = strtolower( time() . '_' . $file->getClientOriginalName());;

            $file->move(public_path('uploads/posts/author_icon/'),$fileName);

            $data['author_icon'] = $fileName;
        }

        $record->update($data);

        toastr()->success('Record Updated');

        return redirect()->route('posts.index');
    }
    public function destroy($id)
    {
        $data = Post::findOrFail($id);

        $small = $data->small_image;
        $large = $data->large_image;

        File::delete(public_path('uploads/posts/small/') . $small);
        File::delete(public_path('uploads/posts/large/') . $large);

        $data->delete();

        toastr()->info('Record Deleted');
        return redirect()->route('posts.index');
    }
}
