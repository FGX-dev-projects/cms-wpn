<?php
namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    // Display all videos
    public function index()
    {
        $videos = Video::latest()->get();
        return view('videos.index', compact('videos'));
    }

    // Show create form
    public function create()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    // Store a new video
    public function store(Request $videos)
    {
        $videos->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'video_url' => 'required|url',
        ]);

        Video::create($videos->only(['title', 'content', 'video_url']));

        toastr()->success('Video added successfully.');
        return redirect()->route('videos.index');
    }

    // Show edit form
    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    // Update an existing video
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'video_url' => 'required|url',
        ]);

        $video->update($request->only(['title', 'content', 'video_url']));

        toastr()->success('Video updated successfully.');
        return redirect()->route('videos.index');
    }

    // Delete a video
    public function destroy(Video $video)
    {
        $video->delete();

        toastr()->success('Video deleted successfully.');
        return redirect()->route('videos.index');
    }
}
