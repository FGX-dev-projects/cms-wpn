@section('title', 'Team Members')

@section('breadcrumb', 'Team Members')


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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="#000000" />
															<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="#000000" />
														</svg>
													</span>
                                    <!--end::Svg Icon-->New Member</button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                            </div>
                            <!--end::Group actions-->

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
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Full Name</th>
                                <th class="min-w-125px">Role</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Creation Date</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-semibold">

                            @if($data->isEmpty())
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                                <div class="symbol-label">
                                                    <img src="/assets/media/avatars/300-1.jpg" alt="Loading..." class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-800 text-hover-primary mb-1">Anthony Otto</a>
                                            <span>Lorem ipsum dolor sit amet...</span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <!--end::User=-->

                                    <!--begin::Last login=-->
                                    <td>
                                        <div class="badge badge-light fw-bold">Administrator</div>
                                    </td>
                                    <!--end::Last login=-->
                                    <!--begin::Two step=-->
                                    <td>
                                        <div class="badge badge-light-success fw-bold">Active</div>
                                    </td>
                                    <!--end::Two step=-->
                                    <!--begin::Joined-->
                                    <td>21 Feb 2023, 5:20 pm</td>
                                    <!--begin::Joined-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#edit_modal">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->

                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                                <div class="symbol-label">
                                                    <img src="/assets/media/avatars/300-2.jpg" alt="Loading..." class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-800 text-hover-primary mb-1">Ronel Geber</a>
                                            <span>Lorem ipsum dolor sit amet...</span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <!--end::User=-->

                                    <!--begin::Last login=-->
                                    <td>
                                        <div class="badge badge-light fw-bold">General Manager</div>
                                    </td>
                                    <!--end::Last login=-->
                                    <!--begin::Two step=-->
                                    <td>
                                        <div class="badge badge-light-success fw-bold">Active</div>
                                    </td>
                                    <!--end::Two step=-->
                                    <!--begin::Joined-->
                                    <td>21 Feb 2023, 5:20 pm</td>
                                    <!--begin::Joined-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#edit_modal">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->

                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                                <div class="symbol-label">
                                                    <img src="/assets/media/avatars/300-9.jpg" alt="Loading..." class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-800 text-hover-primary mb-1">Gabriel Rabotlhale</a>
                                            <span>Lorem ipsum dolor sit amet...</span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <!--end::User=-->

                                    <!--begin::Last login=-->
                                    <td>
                                        <div class="badge badge-light fw-bold">Developer</div>
                                    </td>
                                    <!--end::Last login=-->
                                    <!--begin::Two step=-->
                                    <td>
                                        <div class="badge badge-light-success fw-bold">Active</div>
                                    </td>
                                    <!--end::Two step=-->
                                    <!--begin::Joined-->
                                    <td>21 Feb 2023, 5:20 pm</td>
                                    <!--begin::Joined-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#edit_modal">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->

                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                                <div class="symbol-label">
                                                    <img src="/assets/media/avatars/300-5.jpg" alt="Loading..." class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-800 text-hover-primary mb-1">Leon Dope</a>
                                            <span>Lorem ipsum dolor sit amet...</span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <!--end::User=-->

                                    <!--begin::Last login=-->
                                    <td>
                                        <div class="badge badge-light fw-bold">Designer</div>
                                    </td>
                                    <!--end::Last login=-->
                                    <!--begin::Two step=-->
                                    <td>
                                        <div class="badge badge-light-success fw-bold">Active</div>
                                    </td>
                                    <!--end::Two step=-->
                                    <!--begin::Joined-->
                                    <td>21 Feb 2023, 5:20 pm</td>
                                    <!--begin::Joined-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#edit_modal">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->

                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                                <div class="symbol-label">
                                                    <img src="/assets/media/avatars/300-15.jpg" alt="Loading..." class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-800 text-hover-primary mb-1">Denis Martin</a>
                                            <span>Lorem ipsum dolor sit amet...</span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <!--end::User=-->

                                    <!--begin::Last login=-->
                                    <td>
                                        <div class="badge badge-light fw-bold">Designer</div>
                                    </td>
                                    <!--end::Last login=-->
                                    <!--begin::Two step=-->
                                    <td>
                                        <div class="badge badge-light-success fw-bold">Active</div>
                                    </td>
                                    <!--end::Two step=-->
                                    <!--begin::Joined-->
                                    <td>21 Feb 2023, 5:20 pm</td>
                                    <!--begin::Joined-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#edit_modal">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                            @else

                                @foreach($data as $x)

                                    <tr>
                                        <!--begin::Checkbox-->
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <!--end::Checkbox-->
                                        <!--begin::User=-->
                                        <td class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="#">
                                                    <div class="symbol-label">
                                                        <img src="/uploads/members/{{ $x->file }}" alt="Loading..." class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $x->name }}</a>
                                                <span>Lorem ipsum dolor sit amet...</span>
                                            </div>
                                            <!--begin::User details-->
                                        </td>
                                        <!--end::User=-->

                                        <!--begin::Last login=-->
                                        <td>
                                            <div class="badge badge-light fw-bold">{{--{{ $x->role->name }}--}} Update Role</div>
                                        </td>
                                        <!--end::Last login=-->
                                        <!--begin::Two step=-->
                                        <td>
                                            <div class="badge badge-light-success fw-bold">Active</div>
                                        </td>
                                        <!--end::Two step=-->
                                        <!--begin::Joined-->
                                        <td>{{ \Carbon\Carbon::parse($x->created_at )->diffForHumans() }}</td>
                                        <!--begin::Joined-->
                                        <!--begin::Action=-->
                                        <td class="text-end">
                                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
                                                <!--end::Svg Icon--></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#edit_modal">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <form action="{{ route('members.destroy', $x->id) }}" method="POST" id="delete-form-{{ $x->id }}">
                                                        {{ method_field('DELETE') }}
                                                        @csrf
                                                        <a href="javascript:void()" type="submit" class="menu-link px-3" data-kt-users-table-filter="delete_row" onclick="document.getElementById('delete-form-{{ $x->id }}').submit();">Delete</a>
                                                    </form>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                        <!--end::Action=-->
                                    </tr>
                                @endforeach

                            @endif



                           </tbody>
                            <!--end::Table body-->
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

    <!--begin:: Modals -->
    <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-hidden="true" >
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Member</h2>
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
                    <form class="form" action="{{ route('members.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Full Name</label>
                                <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Member Name" value="{{ old('name') }}" />
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Role</label>
                                <select name="role_id" class="form-control form-control-solid mb-3 mb-lg-0">
                                    <option value="" selected disabled>--Please Select Role---</option>
                                    @foreach($roles as $x)
                                    <option value="{{ $x->id }}">{{ $x->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Avatar</label>
                                <input type="file" name="file" class="form-control form-control-solid mb-3 mb-lg-0"  />
                            </div>
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
    </div>
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true" >
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Edit Post Type</h2>
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
    </div>
    <!--end:: Modals -->
@endsection
