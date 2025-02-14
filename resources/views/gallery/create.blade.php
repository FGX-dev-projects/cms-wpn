@section('title', 'Create News Article')

@section('breadcrumb', 'Create Article')

@section('page-css')

@endsection


@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid mt-4">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                               <!--begin::Add user-->
                                <a href="{{ route('gallery.index') }}" class="btn btn-light">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="#fff" />
															<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="#fff" />
														</svg>
													</span>
                                    <!--end::Svg Icon-->Back</a>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->

                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Add Form-->
                        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="fv-row mb-7">
                            <label class="required  fs-6 mb-2">Title</label>
                            <input type="text" name="title" id="title" class="form-control form-control-solid mb-3 mb-lg-0 @error('title') is-invalid @enderror" placeholder="" value="{{ old('title') }}" />
                            @error('title')
                            <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="fv-row mb-7">
                            <label class="required  fs-6 mb-2">Description</label>
                            <textarea name="content" id="content">
                                {{ old('content') }}
                            </textarea>
                        </div>
                            
                            
                           
                      
                        <div class="fv-row mb-7">
                            <label class="required fs-6 mb-2">Images </label>
                            <div class="custom-file-input2">
                                <input type="file" name="images[]" multiple id="small_image" class="form-control form-control-solid @error('file_path') is-invalid @enderror">
                                <img src="{{ asset('/assets/images/ic_image.png') }}" alt="Add Image">
                                <button class="add-image-btn2  small_image" type="button">Add Image</button>
                            </div>
                            @error('file_path')
                                <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required  fs-6 mb-2">Display Article</label>
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
                            {{-- <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Display Article</label>
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
                            </div> --}}

                            <div class="row">
                                <hr>
                            </div>

                           

                          

                        <div class="fv-row mb-7">
                            <div class="text-end pt-5">
                                <a href="javascript:void(0)" class="btn btn-light me-3 act-dis" onclick="history.back()">Discard</a>
                                <button type="submit" class="act-sub" data-kt-users-modal-action="submit">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>


                        </div>
                        </form>
                        <!--end::Add Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>

    <!--begin:: Modals -->


    <!--end:: Modals -->
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



