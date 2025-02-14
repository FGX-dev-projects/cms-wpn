@extends('layouts.app')

@section('title', 'Create News Article')

@section('breadcrumb', 'Create Article')

@section('page-css')
@endsection

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid mt-4">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card innercard">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <h2 class="part-Title">New Invoice</h2>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a href="{{ route('billing.index') }}" class="new-artictle-btn">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="#000000" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="#000000" />
                                        </svg>
                                    </span>
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <form action="{{ route('billing.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Title -->
                            {{-- <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Title</label>
                                <input type="text" name="title" id="title" class="form-control form-control-solid @error('title') is-invalid @enderror" value="{{ old('title') }}" />
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}

                            <!-- Company Information -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Company Information</label>
                                <textarea name="company_information" id="company_information" class="form-control form-control-solid @error('company_information') is-invalid @enderror" placeholder="" value="{{ $data->company_information }}">{{ $data->company_information }}</textarea>
                                @error('company_information')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Bank Details -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Bank Details</label>
                                <textarea name="bank_details" id="bank_details" class="form-control form-control-solid @error('bank_details') is-invalid @enderror" value="{{$data->bank_details}}">{{$data->bank_details}}</textarea>
                                @error('bank_details')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-solid @error('email') is-invalid @enderror" value="{{ $data->email }}" />
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tax -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Tax Number</label>
                                <input type="text" name="tax" id="tax" class="form-control form-control-solid @error('tax') is-invalid @enderror" value="{{$data->tax}}" />
                                @error('tax')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Year</label>
                                <input type="text" name="year" id="year" class="form-control form-control-solid @error('year') is-invalid @enderror" value="{{$data->year}}" />
                                @error('year')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Logo -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Logo </label>
                                <div class="custom-file-input2">
                                    <input type="file" name="file"  id="file" class="form-control form-control-solid @error('file') is-invalid  @enderror" >
                                    <img src="{{ asset('/assets/images/ic_image.png') }}" alt="Add Image">
                                    <button class="add-image-btn2  logo" type="button">Add Image</button>
                                </div>
                                @error('file')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Year -->
                            

                            <!-- Display Resource -->
                            {{-- <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Display Resource</label>
                                <div class="d-flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_active" value="1" checked>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_active" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="text-end pt-5">
                                <a href="javascript:void(0)" class="btn btn-light me-3 act-dis" onclick="history.back()">Discard</a>
                                <button type="submit" class="act-sub">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@section('page-js')
    <script src="{{ asset('/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script>
       ClassicEditor.create(document.querySelector('#content')).catch(error => console.error(error));
    </script>
@endsection
