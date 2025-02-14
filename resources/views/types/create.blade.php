@section('title', 'Post')


@extends('layouts.app')
@section('content')


    <div class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="h2 mb-0">Post</h1>
            </div>
        </div>

    </div>
    <br>

    <div class="container-fluid">
        <div class="col-12 col-xl-8 col-xxl-9">
            <div class="card rounded-12 shadow-dark-80 border border-gray-50 mb-3 mb-xl-5">
                <div class="d-flex align-items-center px-3 px-md-4 py-3 border-bottom border-gray-200">
                    <h5 class="card-header-title my-2 ps-md-3 font-weight-semibold">New Member</h5>
                </div>
                <div class="card-body px-0 p-md-4">
                    <form class="px-3 form-style-two" action="{{ route('posts.store') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Section" class="form-label form-label-lg">Section</label>
                                <select class="form-select" id="section_id" name="section_id">
                                    @foreach($sections as $section)
                                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Type" class="form-label form-label-lg">Type</label>
                                <select class="form-select" id="type_id" name="type_id">
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Title" class="form-label form-label-lg">Title</label>
                                <input type="text" class="form-control form-control-xl" id="title" name="title"
                                       placeholder="Title" value="{{ old('title') }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="subtitle" class="form-label form-label-lg">Sub Title</label>
                                <input type="text" class="form-control form-control-xl" id="subtitle" name="subtitle"
                                       placeholder="" value="{{ old('subtitle') }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Content" class="form-label form-label-lg">Content</label>
                                <textarea class="form-control" id="content" name="content"
                                          rows="3">{{ old('content') }}</textarea>
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Author" class="form-label form-label-lg">Author</label>
                                <input type="text" class="form-control form-control-xl" id="author" name="author"
                                       placeholder="Author" value="{{ old('author') }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Thumb" class="form-label form-label-lg">Post Image (420 x 600)</label>
                                <input type="file" class="form-control form-control-xl" id="file_small"
                                       name="file_small">
                            </div>
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Active" class="form-label form-label-lg">Active</label>
                                <select class="form-select" id="active" name="active">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Type" class="form-label form-label-lg">Featured</label>
                                <select class="form-select" id="featured" name="featured">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Published Date" class="form-label form-label-lg">Published Date</label>
                                <input type="datetime-local" class="form-control form-control-xl" id="published_date" name="published_date"
                                       placeholder="Published Date" value="{{ old('published_date') }}" min="2000-06-01T08:30" max="2026-06-30T16:30" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}">
                            </div>
                            <br>
                            <hr>
                            <br>
                            <br>
                            <div class="col-sm-12 mb-md-4 pb-3">
                            <label for="seo_title" class="form-label form-label-lg">Meta Title</label>
                            <input type="text" class="form-control form-control-xl" id="seo_title" name="seo_title"
                                   placeholder="MFS Africa | Custom meta description if required" value="{{ old('seo_title') }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                            <label for="seo_description" class="form-label form-label-lg">Meta Description</label>
                            <input type="text" class="form-control form-control-xl" id="seo_description" name="seo_description"
                                   placeholder="Short post description if required" value="{{ old('seo_description') }}">
                            </div>

                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="seo_keywords" class="form-label form-label-lg">Meta Keyword</label>
                                <input type="text" class="form-control form-control-xl" id="seo_keywords" name="seo_keywords"
                                       placeholder="Meta Keyword" value="{{ old('seo_keywords') }}">
                            </div>
                        </div>


                        <div class="col-sm-12 mb-md-4 pb-3">


                        <div class="text-end py-md-3">
                            <button type="submit" class="btn btn-lg btn-primary px-md-4 mt-lg-3"><span class="px-md-3">Save</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection



