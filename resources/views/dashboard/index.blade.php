@section('title', 'Dashboard')

@section('breadcrumb', 'Content Management System')

@extends('layouts.app')

@section('content')
    <!--begin::Row-->
   
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <div class="container">
            
            
            <div class="row">
             
                    <div class="col-md-4 pt-20">
                        <h2 class="dash-welcome align-self-start ">Welcome To</h2>
                        <h2 class="dash-main-heading">WPN</h2>
                        <h4 class="dash-sub">CMS Dashboard</h4>
                    </div>
                
                <div class="col-md-4">
                    <div class="card card-custom ">
                        <div class="card-body">
                            <div class="card-icon">
                                <img src="{{ asset('/assets/images/bookmark.png')}}" />
                            </div>
                            <div class="d-flex">
                                <div class="card-title p-1">{{ $articles_count }}</div>
                                <div class="col-md-6 p-4">
                                    <div class=" card-subtitle">Published</div>
                                    <div class="csub"> Articles</div>
                                </div>
                            </div>
                           
                           
                            <a href="{{ route('posts.index') }}" class=" dashboard-btn mt-3">Manage News</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom ">
                        <div class="card-body">
                            <div class="card-icon">
                                <img src="{{ asset('/assets/images/promotion.png')}}" />
                            </div>
                            <div class="d-flex">
                                <div class="card-title">{{ $gallery_count }}</div>
                                <div class="col-md-12 p-3">
                                    <div class=" card-subtitle">Published</div>
                                    <div class="csub"> Gallary</div>
                                </div>
                            </div>
                           
                           
                            <a href="{{ route('gallery.index') }}" class=" dashboard-btn mt-3">Manage Gallary</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom ">
                        <div class="card-body">
                            <div class="card-icon">
                                <img src="{{ asset('/assets/images/location.png')}}" />
                            </div>
                            <div class="d-flex">
                                <div class="card-title">{{ $resources }}</div>
                                <div class="col-md-6 p-3">
                                    <div class=" card-subtitle">Published</div>
                                    <div class="csub">Resource</div>
                                </div>
                            </div>
                           
                           
                            <a href="{{ route('document.index') }}" class=" dashboard-btn mt-3"> Manage Resources</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

   
    <div class="row">

        <div class="card art-body" style="border: none !important;">
            <div style="border: none !important; padding-left:15px;" class="card-header justify-content-start">
                <div class="card-title">

                </div>
                <div class="card-toolbar">

                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-start" data-kt-user-table-toolbar="base">
                        <button type="button" class="new-artictle-btn" onclick="location.href='{{ route('posts.create') }}'">
                                <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="#000000" />
															<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="#000000" />
														</svg>
													</span>
                            New Article</button>
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

                    @if($data->isEmpty())
                        <tr>
                            <td style="color: #000 !important">There is currently no data</td>
                        </tr>

                    @else
                        @foreach($data as $x)
                        <tr>
                            <td class="d-flex align-items-center ">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="#">
                                        <div class="symbol-label">
                                            <img src="{{ asset('/uploads/posts/small/' . $x->small_image) }}" alt="" class="w-100" />
                                        </div>
                                    </a>
                                </div>
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
                                        <a class="dd" href="{{ route('posts.edit', $x->id) }}"><img src="{{ asset('/assets/images/Shape.png') }}" /> Edit Article</a>
                                    </div>
                                    <div class="menu-item">
                                        <form action="{{ route('posts.destroy', $x->id) }}" method="POST" id="delete-form-{{ $x->id }}">
                                            {{ method_field('DELETE') }}
                                            @csrf
                                            <a class="dd" href="javascript:void(0)" onclick="document.getElementById('delete-form-{{ $x->id }}').submit();"> <img style="padding-right:23px;" src="{{ asset('/assets/images/del.png') }}" /> Delete</a>
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
 <script>
        
    </script>


@endsection



