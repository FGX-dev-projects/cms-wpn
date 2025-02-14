@section('title', 'Create Member')

@section('breadcrumb', 'Create Member')

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
                        <h2 class="part-Title">Member application</h2>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a href="{{ route('members.index') }}" class="new-artictle-btn">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="#000000" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="#000000" />
                                        </svg>
                                    </span> Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <form action="{{ route('members.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <!-- Title -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Title</label>
                                <input type="text" name="title" class="form-control form-control-solid @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Name -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Name</label>
                                <input type="text" name="name" class="form-control form-control-solid @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Surname -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Surname</label>
                                <input type="text" name="surname" class="form-control form-control-solid @error('surname') is-invalid @enderror" value="{{ old('surname') }}">
                                @error('surname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Email</label>
                                <input type="email" name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Cell -->
                            <div class="fv-row mb-7">
                                <label class="required fs-6 mb-2">Cell</label>
                                <input type="text" name="cell" class="form-control form-control-solid @error('cell') is-invalid @enderror" value="{{ old('cell') }}">
                                @error('cell')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Work Telephone -->
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Work Telephone</label>
                                <input type="text" name="work_telephone" class="form-control form-control-solid @error('work_telephone') is-invalid @enderror" value="{{ old('work_telephone') }}">
                                @error('work_telephone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Date of Birth -->
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control form-control-solid @error('date_of_birth') is-invalid @enderror" value="{{ old('date_of_birth') }}">
                                @error('date_of_birth')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Race -->
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Race</label>
                                <input type="text" name="race" class="form-control form-control-solid @error('race') is-invalid @enderror" value="{{ old('race') }}">
                                @error('race')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Company Name -->
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Company Name</label>
                                <input type="text" name="company_name" class="form-control form-control-solid @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}">
                                @error('company_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Postal Address -->
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Postal Address</label>
                                <textarea name="postal_address" class="form-control form-control-solid @error('postal_address') is-invalid @enderror">{{ old('postal_address') }}</textarea>
                                @error('postal_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Professional Qualification</label>
                                <input type="text" name="professional_qualification" class="form-control form-control-solid @error('professional_qualification') is-invalid @enderror" value="{{ old('professional_qualification') }}">
                                @error('professional_qualification')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Position</label>
                                <input type="text" name="position" class="form-control form-control-solid @error('position') is-invalid @enderror" value="{{ old('position') }}">
                                @error('position')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Management Level (If Applicable)</label>
                                <input type="text" name="management_level" class="form-control form-control-solid @error('management_level') is-invalid @enderror" value="{{ old('management_level') }}">
                                @error('management_level')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Please list other Professional, Charitable or Community Organisations of which you are a member or hold a Board position</label>
                                <textarea name="other_organisations" class="form-control form-control-solid @error('other_organisations') is-invalid @enderror">{{ old('other_organisations') }}</textarea>
                                @error('other_organisations')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Please indicate the core business of your company</label>
                                <textarea name="core_business" class="form-control form-control-solid @error('core_business') is-invalid @enderror">{{ old('core_business') }}</textarea>
                                @error('core_business')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Please indicate your core focus within your company</label>
                                <textarea name="core_focus" class="form-control form-control-solid @error('core_focus') is-invalid @enderror">{{ old('core_focus') }}</textarea>
                                @error('core_focus')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Company Name(for invoice)</label>
                                <input type="text" name="invoice_company" class="form-control form-control-solid @error('invoice_company') is-invalid @enderror" value="{{ old('invoice_company') }}">
                                @error('invoice_company')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Invoice Postal Address</label>
                                <textarea name="invoice_address" class="form-control form-control-solid @error('invoice_address') is-invalid @enderror">{{ old('invoice_address') }}</textarea>
                                @error('invoice_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Code</label>
                                <input type="text" name="code" class="form-control form-control-solid @error('code') is-invalid @enderror" value="{{ old('code') }}">
                                @error('code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">VAT Number</label>
                                <input type="text" name="vat_number" class="form-control form-control-solid @error('vat_number') is-invalid @enderror" value="{{ old('vat_number') }}">
                                @error('vat_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="fs-6 mb-2 required">Invoice Email</label>
                                <input type="email" name="invoice_email" class="form-control form-control-solid @error('invoice_email') is-invalid @enderror" value="{{ old('invoice_email') }}">
                                @error('invoice_email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">I have read the constitution</label>
                                <div class="d-flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="read_constitution" value="1" checked>
                                        <label class="form-check-label text-nowrap" for="inlineRadio2" >Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="read_constitution" value="0">
                                        <label class="form-check-label text-nowrap" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Must account be active</label>
                                <div class="d-flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="account_active" value="1" checked>
                                        <label class="form-check-label text-nowrap" for="inlineRadio2" >Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="account_active" value="0">
                                        <label class="form-check-label text-nowrap" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Member Invoiced</label>
                                <div class="d-flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="member_invoiced" value="1" >
                                        <label class="form-check-label text-nowrap" for="inlineRadio2" >Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="member_invoiced" value="0" checked>
                                        <label class="form-check-label text-nowrap" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Application Approved</label>
                                <div class="d-flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="application_approved" value="1" checked>
                                        <label class="form-check-label text-nowrap" for="inlineRadio2" >Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="mapplication_approved" value="0">
                                        <label class="form-check-label text-nowrap" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="fv-row mb-7">
                                <label class="required  fs-6 mb-2">Member Group</label>
                                <select class="form-control form-control-solid mb-3 mb-lg-0 @error('member_group_id') is-invalid @enderror" name="member_group_id">
                                    <option selected disabled >Select Group</option>
                                    @foreach ($memberGroups as $memberGroup )
                                    <option value="{{$memberGroup->id}}">{{$memberGroup->name}}</option>
    
                                    @endforeach
                                  
                                </select>
                                {{-- <input type="text" name="province" id="province" class="form-control form-control-solid mb-3 mb-lg-0 @error('province') is-invalid @enderror" placeholder="Province" value="{{ old('province') }}" /> --}}
                                @error('member_group_id')
                                <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
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
        .catch(error => console.error(error));
</script>
@endsection
