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
                <div class="card innercard">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <h2 class="part-Title">New Article</h2>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                               <!--begin::Add user-->
                                <a href="{{ route('posts.index') }}" class="new-artictle-btn">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="#000000" />
                                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="#000000" />
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
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="fv-row mb-7">
                            <label class="required  fs-6 mb-2">Title</label>
                            <input type="text" name="title" id="title" class="form-control form-control-solid mb-3 mb-lg-0 @error('title') is-invalid @enderror" placeholder="" value="{{ old('title') }}" />
                            @error('title')
                            <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required  fs-6 mb-2">Article Content</label>
                            <textarea name="content" id="content">
                                {{ old('content') }}
                            </textarea>
                        </div>
                            
                           
                            <div class="fv-row mb-7">
                                    <label class="required  fs-6 mb-2">Article Date</label>
                                    <input class="form-control form-control-solid @error('article_date') is-invalid @enderror" name="article_date" placeholder="Pick a date" id="kt_datepicker_2"/>
                                @error('article_date')
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



