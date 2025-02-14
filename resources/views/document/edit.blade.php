@section('title', 'Edit Resource')

@section('breadcrumb', 'Edit Resource')


@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_content" class="app-content flex-column-fluid mt-4">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card innercard">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title"></div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a href="{{ route('document.index') }}" class="new-artictle-btn"  >
                                    <span class="svg-icon svg-icon-2">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="#000000" />
                                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="#000000" />
                                                        </svg>
                                                    </span>Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-4">
                        <form class="px-3 form-style-two" action="{{ route('document.update', $document->id) }}" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            {{ method_field('PATCH') }}
                            <div class="fv-row mb-7">
                                <h1 class="edit">Edit Resource</h1>
                               
                               
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Title</label>
                                <input type="text" name="title" id="title" class="form-control form-control-solid mb-3 mb-lg-0 @error('title') is-invalid @enderror" placeholder="" value="{{ $document->title }}" />
                                @error('title')
                                <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>
                          
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Upload PDF </label>
                                <div class="custom-file-input2">
                                    <input type="file" name="pdf" id="small_image" class="form-control form-control-solid @error('pdf') is-invalid @enderror">
                                    <img src="{{ asset('/assets/images/upload-file.svg') }}" alt="Add Image">
                                    <button class="add-image-btn2  small_image" type="button">Add PDF</button>
                                </div>
                                @error('pdf')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>
                          
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Display Resource</label>
                                <div class="d-flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_active" value="1" checked>
                                        <label class="form-check-label text-nowrap" for="inlineRadio2" >Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_active" value="0">
                                        <label class="form-check-label text-nowrap" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>

                            <div class="fv-row mb-7">
                                <div class="text-end pt-5">
                                    <a href="javascript:void(0)" class="btn btn-light me-3 act-dis " onclick="history.back()">Discard</a>
                                    <button type="submit" class="act-sub" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
							         <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-js')
    <script src="{{ asset('/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        $("#kt_datepicker_1").flatpickr();
        $("#kt_datepicker_2").flatpickr();

    </script>
@endsection



