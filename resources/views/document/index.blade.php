@section('title', 'Resources')

@section('breadcrumb', 'Manage Resource')

@extends('layouts.app')

@section('content')


   
        
            <div class="row">
                <div class="frame-parent2">
                    <div class="icons-parent" id="frameContainer">
                    <img class="icons" alt="" src="{{ asset('/assets/images/icons.png') }}">
                    <b class="dashboard">Dashboard</b>
                    </div>
                    <div class="icons-group">
                   <img class="icons" alt="" src="{{ asset('/assets/images/icons.png') }}">
                    <b class="dashboard">Manage Resources</b>
                    </div>
                    </div>
                <div class="card art-body" style="border: none !important;">
                    <div style="border: none !important; padding-left:15px;" class="card-header pt-6 justify-content-end">
                        <div class="card-title">
                           
                        </div>
                        
                        <div style="justify-content: end !important;" class="card-toolbar  ">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <button type="button" class="new-part-btn" onclick="location.href='{{ route('document.create') }}'">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 19 19" fill="none">
                                            <g id="Component 2">
                                            <path id="Shape" fill-rule="evenodd" clip-rule="evenodd" d="M8.70833 13.4583C8.70833 13.8956 9.06277 14.25 9.5 14.25C9.93723 14.25 10.2917 13.8956 10.2917 13.4583V10.2917H13.4583C13.8956 10.2917 14.25 9.93723 14.25 9.5C14.25 9.06277 13.8956 8.70833 13.4583 8.70833H10.2917V5.54167C10.2917 5.10444 9.93723 4.75 9.5 4.75C9.06277 4.75 8.70833 5.10444 8.70833 5.54167V8.70833H5.54167C5.10444 8.70833 4.75 9.06277 4.75 9.5C4.75 9.93723 5.10444 10.2917 5.54167 10.2917H8.70833V13.4583Z" fill="white"/>
                                            </g>
                                            </svg>
													</span>
                                    New Resource</button>
                            </div>
                        </div>
                    </div>
        
                    <div class="card-body art-body">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table"  id="kt_table_users">
                            <thead>
                            <tr class="text-start  fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-125px act">Title</th>
                                <th class="min-w-125px act">Last Edited</th>
                                <th class="min-w-125px act">Status</th>
                                <th class="min-w-125px act">Created At</th>
                                <th class="text-end min-w-100px act">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="fw-semibold">
        
                            @if($documents->isEmpty())
                                <tr>
                                    <td style="color: #000 !important">There is currently no data</td>
                                </tr>
        
                            @else
                                @foreach($documents as $x)
                                <tr>
                                    <td class="d-flex align-items-center ">
                                        {{-- <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                                <div class="symbol-label">
                                                    <img src="{{ asset('/uploads/posts/small/' . $x->small_image) }}" alt="" class="w-100" />
                                                </div>
                                            </a>
                                        </div> --}}
                                        <div class="d-flex flex-column data-title">
                                            <span>{{ substr($x->title, 0, 38) }}...</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="badge badge-light up-date fw-bold">{{ \Carbon\Carbon::parse($x->updated_at )->diffForHumans() }}</div>
                                    </td>
                                    <td>
                                        @if($x->is_active == 1)
                                            <div class="badge badge-light-success new-act fw-bold">Active</div>
                                        @else
                                            <div class="badge badge-light-danger fw-bold">In Active</div>
                                        @endif
                                    </td>
                                    <td class="created">{{ \Carbon\Carbon::parse($x->created_at )->diffForHumans() }}</td>
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
                                                <a class="dd" href="{{ route('document.edit', $x->id) }}"><img src="{{ asset('/assets/images/Shape.png') }}" />  Edit Article</a>
                                            </div>
                                            <div class="menu-item">
                                                <form action="{{ route('document.destroy', $x->id) }}" method="POST" id="delete-form-{{ $x->id }}">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <a  class="dd" href="javascript:void(0)" onclick="document.getElementById('delete-form-{{ $x->id }}').submit();"><img style="padding-right:23px;" src="{{ asset('/assets/images/del.png') }}" />  Delete</a>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
    

@endsection



