@section('title', 'Create')


@extends('layouts.app')
@section('content')


    <div class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="h2 mb-0">Members</h1>
            </div>
        </div>

    </div>
    <br>
    <div class="container-fluid">
        <div class="col-12 col-xl-8 col-xxl-9">
            <div class="card rounded-12 shadow-dark-80 border border-gray-50 mb-3 mb-xl-5">
                <div class="d-flex align-items-center px-3 px-md-4 py-3 border-bottom border-gray-200">
                    <h5 class="card-header-title my-2 ps-md-3 font-weight-semibold">Update Member</h5>
                </div>
                <div class="card-body px-0 p-md-4">
                    <form class="px-3 form-style-two" action="{{ route('members.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Country" class="form-label form-label-lg">Country</label>
                                <select class="form-select" id="country_id" name="country_id">
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-6 mb-md-4 pb-3">
                                <label for="Department" class="form-label form-label-lg">Department</label>
                                <select class="form-select" id="department_id" name="department_id">
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Country" class="form-label form-label-lg">Name</label>
                                <input type="text" class="form-control form-control-xl" id="name" name="name" placeholder="Name" value="{{ $data->name }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Title" class="form-label form-label-lg">Title</label>
                                <input type="text" class="form-control form-control-xl" id="title" name="title" placeholder="Title" value="{{ $data->title }}">
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Description" class="form-label form-label-lg">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" >{{ $data->description }}</textarea>
                            </div>
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="File" class="form-label form-label-lg">Photo</label>
                                <input type="file" class="form-control form-control-xl" id="file" name="file" placeholder="file">
                            </div>
                        </div>

                        <div class="text-end py-md-3">
                            <button type="submit" class="btn btn-lg btn-primary px-md-4 mt-lg-3"><span class="px-md-3">Save</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



