@section('title', 'Gallery')

@section('breadcrumb', 'Manage Gallary')

@section('page-css')

@extends('layouts.app')

@section('content')
    {{-- <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid mt-4">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title1">
                            Header Image
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">


                                <!--begin::Add user-->
                                <button type="button" class="new-part-btn" data-bs-toggle="modal" data-bs-target="#create_modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 19 19" fill="none">
                                            <g id="Component 2">
                                            <path id="Shape" fill-rule="evenodd" clip-rule="evenodd" d="M8.70833 13.4583C8.70833 13.8956 9.06277 14.25 9.5 14.25C9.93723 14.25 10.2917 13.8956 10.2917 13.4583V10.2917H13.4583C13.8956 10.2917 14.25 9.93723 14.25 9.5C14.25 9.06277 13.8956 8.70833 13.4583 8.70833H10.2917V5.54167C10.2917 5.10444 9.93723 4.75 9.5 4.75C9.06277 4.75 8.70833 5.10444 8.70833 5.54167V8.70833H5.54167C5.10444 8.70833 4.75 9.06277 4.75 9.5C4.75 9.93723 5.10444 10.2917 5.54167 10.2917H8.70833V13.4583Z" fill="white"/>
                                            </g>
                                            </svg>
													</span>
                                    <!--end::Svg Icon-->New Image</button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Title</th>
                                <th class="min-w-125px">Last Edited</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Creation Date</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <tbody>
                            @if($data->isEmpty())
                                <tr>
                                    <td>There is currently no data</td>
                                </tr>
                            @else
                                @foreach($data as $x)
                                <tr>

                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                                <div class="symbol-label">
                                                    <img src="{{ asset('/uploads/promotions/' .$x->image) }}" alt="Loading..." class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <span class="text-hover-primary mb-1 web-site-name">{{ $x->title }}</span>
                                          
                                        </div>
                                    </td>
                                    <td>
                                        <div class="badge badge-light up-date fw-bold">{{ \Carbon\Carbon::parse($x->updated_at )->diffForHumans() }}</div>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success new-act fw-bold">Active</div>
                                    </td>
                                    <td>
                                        <div class="created">{{ \Carbon\Carbon::parse($x->created_at )->diffForHumans() }}</div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#" class="btn actions-btn btn-sm" onclick="toggleActionsPopup(event, {{ $x->id }})">Actions
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="actions-popup" id="actions-popup-{{ $x->id }}">
                                            <div class="menu-item">
                                                <a class="dd" href="{{ route('promotions.edit', $x->id) }}">Edit</a>
                                            </div>
                                            <div class="menu-item">
                                                <form action="{{ route('promotions.destroy', $x->id) }}" method="POST" id="delete-form-{{ $x->id }}">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <a  class="dd" href="javascript:void()" data-kt-users-table-filter="delete_row" onclick="document.getElementById('delete-form-{{ $x->id }}').submit();">Delete</a>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                @endforeach

                            @endif
                            </tbody>

                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div> --}}







    <div class="row">
        <div class="frame-parent2">
            <div class="icons-parent" id="frameContainer">
            <img class="icons" alt="" src="{{ asset('/assets/images/icons.png') }}">
            <b class="dashboard">Dashboard</b>
            </div>
            <div class="icons-group">
           <img class="icons" alt="" src="{{ asset('/assets/images/icons.png') }}">
            <b class="dashboard">Manage Gallery</b>
            </div>
            </div>
        <!--begin::Content-->
        <div >
            <!--begin::Content container-->
            <div >
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title1">
                          
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">


                                <!--begin::Add user-->
                                <button type="button" class="new-part-btn" data-bs-toggle="modal" data-bs-target="#create_modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 19 19" fill="none">
                                            <g id="Component 2">
                                            <path id="Shape" fill-rule="evenodd" clip-rule="evenodd" d="M8.70833 13.4583C8.70833 13.8956 9.06277 14.25 9.5 14.25C9.93723 14.25 10.2917 13.8956 10.2917 13.4583V10.2917H13.4583C13.8956 10.2917 14.25 9.93723 14.25 9.5C14.25 9.06277 13.8956 8.70833 13.4583 8.70833H10.2917V5.54167C10.2917 5.10444 9.93723 4.75 9.5 4.75C9.06277 4.75 8.70833 5.10444 8.70833 5.54167V8.70833H5.54167C5.10444 8.70833 4.75 9.06277 4.75 9.5C4.75 9.93723 5.10444 10.2917 5.54167 10.2917H8.70833V13.4583Z" fill="white"/>
                                            </g>
                                            </svg>
													</span>
                                    <!--end::Svg Icon-->New Gallery</button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Title</th>
                                <th class="min-w-125px">Last Edited</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Creation Date</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <tbody>
                            @if($galleries->isEmpty())
                                <tr>
                                    <td style="color: #000 !important">There is currently no data</td>
                                </tr>
                            @else
                                @foreach($galleries as $x)
                                <tr>

                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                       
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <span class="text-hover-primary mb-1 web-site-name">{{ $x->title }}</span>
                                          
                                        </div>
                                    </td>
                                    <td>
                                        <div class="badge badge-light up-date fw-bold">{{ \Carbon\Carbon::parse($x->updated_at )->diffForHumans() }}</div>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success new-act fw-bold">Active</div>
                                    </td>
                                    <td>
                                        <div class="created">{{ \Carbon\Carbon::parse($x->created_at )->diffForHumans() }}</div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#" class="btn actions-btn btn-sm" onclick="toggleActionsPopup(event, {{ $x->id }})">Actions
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="actions-popup" id="actions-popup-{{ $x->id }}">
                                            <div class="menu-item">
                                                <a class="dd" href="{{ route('gallery.edit', $x->id) }}"> <img src="{{ asset('/assets/images/Shape.png') }}" /> Edit Gallery</a>
                                            </div>
                                            <div class="menu-item">
                                                <form action="{{ route('gallery.destroy', $x->id) }}" method="POST" id="delete-form-{{ $x->id }}">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <a  class="dd" href="javascript:void()" data-kt-users-table-filter="delete_row" onclick="document.getElementById('delete-form-{{ $x->id }}').submit();"> <img style="padding-right:23px;" src="{{ asset('/assets/images/del.png') }}" /> Delete</a>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                @endforeach

                            @endif
                            </tbody>

                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>




   
    <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-hidden="true" >
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="mx-xl-15 part-Title">New Gallery</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																			<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																		</svg>
																	</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
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
                            <label class="required fs-6 mb-2">Description</label>
                            <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
                        </div>
                            
                            
                           
                      
                       
                        <div class="fv-row mb-7">
                            <label class="required fs-6 mb-2">Images</label>
                            <div class="custom-file-input">
                                <input type="file" name="images[]" id="file_path" multiple class="form-control form-control-solid @error('file_path') is-invalid @enderror">
                                <img src="{{ asset('/assets/images/ic_image.png') }}" alt="Add Image">
                                <button class="add-image-btn  file_path" type="button">Add Image</button>
                            </div>
                            @error('file_path')
                                <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
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
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
        </div>
    </div>   





    <!--begin:: Modals -->
    
    {{-- <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true" >
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title"></div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a href="{{ route('promotions.index') }}" class="new-artictle-btn"  >
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
                        <form class="px-3 form-style-two" action="{{ route('promotions.update', $data->id) }}" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            {{ method_field('PATCH') }}
                          
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Title</label>
                                <input type="text" name="title" id="title" class="form-control form-control-solid mb-3 mb-lg-0 @error('title') is-invalid @enderror" placeholder="" value="{{ $data->title }}" />
                                @error('title')
                                <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Short Description </label>
                                <input type="text" name="description" id="description" class="form-control form-control-solid mb-3 mb-lg-0 @error('description') is-invalid @enderror"  value="{{ $data->description }}" />
                                @error('subtitle')
                                <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Article Content</label>
                                <textarea name="content" id="content">
                                {!!   $data->content !!}
                            </textarea>
                            </div>
                            
                         
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Image </label>
                                <input type="file" name="large_image" id="large_image" class="form-control form-control-solid mb-3 mb-lg-0 @error('large_image') is-invalid @enderror" />
                                @error('large_image')
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
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form class="form" action="{{ route('types.store') }}" method="post">
                    @csrf
                    <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Type</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Insert Type" value="{{ old('name') }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
        </div>
    </div> --}}
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



