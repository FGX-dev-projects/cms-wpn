@section('title', 'Create')


@extends('layouts.app')
@section('content')


    <div class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="h2 mb-0">Service</h1>
            </div>
        </div>

    </div>
    <br>

    <div class="container-fluid">
        <div class="col-12 col-xl-8 col-xxl-9">
            <div class="card rounded-12 shadow-dark-80 border border-gray-50 mb-3 mb-xl-5">
                <div class="d-flex align-items-center px-3 px-md-4 py-3 border-bottom border-gray-200">
                    <h5 class="card-header-title my-2 ps-md-3 font-weight-semibold">Edit {{ $data->name }}</h5>
                </div>
                <div class="card-body px-0 p-md-4">
                    <form class="px-3 form-style-two" action="{{ route('services.update', $data->id) }}" method="post">
                        {{ csrf_field() }}

                        {{ method_field('PATCH') }}

                        <div class="row">
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Country" class="form-label form-label-lg">Name</label>
                                <input type="text" class="form-control form-control-xl" id="name" name="name" placeholder="Department" value="{{ $data->name }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 mb-md-4 pb-3">
                                <label for="Country" class="form-label form-label-lg">Country</label>
                                <select class="form-control form-control-xl" name="country_id">

                                    @if($data->country_id == $data->countries->id)
                                        <option value="{{ $data->countries->id }}"
                                                selected>{{ $data->countries->name }}</option>
                                    @else
                                        <option value="" selected disabled hidden>Select Province</option>
                                    @endif
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
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



