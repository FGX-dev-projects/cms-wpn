@section('title', 'Create')


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
                    <h5 class="card-header-title my-2 ps-md-3 font-weight-semibold">Edit Post</h5>
                </div>
                <div class="card-body px-0 p-md-4">
                    <form class="px-3 form-style-two" action="{{ route('posts.update', $data->id) }}" method="post"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}

                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Section" class="form-label form-label-lg">Section</label>
                                <select class="form-select" id="section_id" name="section_id">
                                    @if($data->section_id== $data->sections->id)
                                        <option value="{{ $data->sections->id }}"
                                                selected>{{ $data->sections->name }}</option>
                                    @else
                                        <option value="" selected disabled hidden>Select Section</option>
                                    @endif
                                    @foreach($sections as $section)
                                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Type" class="form-label form-label-lg">Type</label>
                                <select class="form-select" id="type_id" name="type_id">
                                    @if($data->type_id == $data->types->id)
                                        <option value="{{ $data->types->id }}"
                                                selected>{{ $data->types->name }}</option>
                                    @else
                                        <option value="" selected disabled hidden>Select Type</option>
                                    @endif
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Title" class="form-label form-label-lg">Title</label>
                                <input type="text" class="form-control form-control-xl" id="title" name="title"
                                       placeholder="Title" value="{{ $data->title }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="subtitle" class="form-label form-label-lg">Sub Title</label>
                                <input type="text" class="form-control form-control-xl" id="subtitle" name="subtitle"
                                       placeholder="" value="{{ $data->subtitle }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Content" class="form-label form-label-lg">Content</label>
                                <textarea class="form-control" id="content" name="content"
                                          rows="3">{{ $data->content }}</textarea>
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Author" class="form-label form-label-lg">Author</label>
                                <input type="text" class="form-control form-control-xl" id="author" name="author"
                                       placeholder="Author" value="{{ $data->author }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Thumb" class="form-label form-label-lg">Post Image (420 x 600)</label>
                                <input type="file" class="form-control form-control-xl" id="file_small"
                                       name="file_small">
                            </div>
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Active" class="form-label form-label-lg">Active</label>
                                <select class="form-select" id="active" name="active">
                                    <option value="1" @if($data->active == 1) selected @endif>Yes</option>
                                    <option value="0" @if($data->active == 0) selected @endif>No</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Type" class="form-label form-label-lg">Featured</label>
                                <select class="form-select" id="featured" name="featured">
                                    <option value="1" @if($data->featured == 1) selected @endif>Yes</option>
                                    <option value="0" @if($data->featured == 0) selected @endif>No</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <input type="hidden" class="form-control form-control-xl" id="published_date" name="published_date"
                                       placeholder="Published Date" value="{{ $data->published_date }}" >
                            </div>

                            <br>
                            <hr>
                            <br>
                            <br>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="seo_title" class="form-label form-label-lg">Meta Title</label>
                                <input type="text" class="form-control form-control-xl" id="seo_title" name="seo_title"
                                       value="{{ $data->seo_title }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="seo_description" class="form-label form-label-lg">Meta Description</label>
                                <input type="text" class="form-control form-control-xl" id="seo_description" name="seo_description"
                                        value="{{ $data->seo_description }}">
                            </div>

                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="seo_keywords" class="form-label form-label-lg">Meta Keyword</label>
                                <input type="text" class="form-control form-control-xl" id="seo_keywords" name="seo_keywords"
                                       value="{{ $data->seo_keywords }}">
                            </div>
                        </div>

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



