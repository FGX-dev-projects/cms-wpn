<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head><base href=""/>
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/plugins/hover-master/hover-min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/css.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/dash.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/create.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @yield('page-css')
    <style>
        .buttons1 {
    position: relative;
    display: inline-block;
}

.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #ccc;
    z-index: 1000;
    min-width: 150px;
}

.dropdown a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #333;
}
.rotate-90{
    display: inline-block;
    transition: transform 0.3s ease;
}
.rotate-90:focus-within{
    transform: rotate(90deg) !important;
}

.dropdown rotate-90 a:hover {
    background-color: #f4f4f4;
}



.buttons1:hover .dropdown {
    display: block;
}

    </style>
    @toastr_css
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->

<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root main-c" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <div class="container-fluid menu">
            <div class="row w-100 no-gutters">
                <div class="col-12 col-md-3 fcr-colorlogo-wrapper">
                    <img class="fcr-colorlogo-icon " alt="" src="{{ asset('/assets/images/updated_logo.png') }}" id="fCRColorLogoImage">
                </div>
                <div class="col-12 col-md-9 selector d-flex flex-column flex-md-row">
                    <div class="content-management-system mb-2 mb-md-0">Content Management System</div>
                    <div class="frame-parent">
                        <div class="buttons-parent">
                            <div class="buttons1 {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                                <a href="{{ route('dashboard.index') }}" class="content-management-system">Dashboard</a>
                            </div>
                            <div class="buttons1 {{ request()->routeIs('posts.index') ? 'active' : '' }}">
                                <a href="{{ route('posts.index') }}" class="content-management-system">Articles</a>
                            </div>
                           
                            <div class="buttons1 {{ request()->routeIs('document.index') ? 'active' : '' }}">
                                <a href="{{ route('document.index') }}" class="content-management-system">Resources</a>
                            </div>
                            <div class="buttons1 {{ request()->routeIs('gallery.index') ? 'active' : '' }}">
                                <a href="{{ route('gallery.index') }}" class="content-management-system">Gallery</a>
                            </div>
                            <div class="buttons1 {{ request()->routeIs('videos.index') ? 'active' : '' }}">
                                <a href="{{ route('videos.index') }}" class="content-management-system">Videos</a>
                            </div>
                            <div class="buttons1 {{ request()->routeIs('members.index') ? 'active' : '' }}">
                                <a href="#" class="content-management-system">Members <span style="" class="fc2 rotate-90">></span></a>
                                <div class="dropdown" style="height: 800px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                                    <a href="{{ route('trust.index') }}">Trust</a><hr>
                                    <a href="{{ route('studentreg.index') }}">Student Registration</a><hr>
                                    <a href="{{ route('members.index') }}">Gauteng Chapter</a><hr>
                                    <a href="{{ route('easternchap.index') }}">Eastern Cape Chapter</a><hr>
                                    <a href="{{ route('kznchap.index') }}">KZN Chapter</a><hr>
                                    <a href="{{ route('westernchap.index') }}">Western Cape Chapter</a><hr>
                                    <a href="{{ route('capepen.index') }}">Cape Peninsula University of Technology</a><hr>
                                    <a href="{{ route('johannesburg.index') }}">University of Johannesburg</a><hr>
                                    <a href="{{ route('capetown.index') }}">University of Cape Town</a><hr>
                                    <a href="{{ route('pretoria.index') }}">University of Pretoria</a><hr>
                                    <a href="{{ route('kzn.index') }}">University of KZN</a><hr>
                                    <a href="{{ route('wits.index') }}">University of Witwatersrand</a><hr>
                                    <a href="{{ route('upe.index') }}">University of Port Elizabeth</a><hr>
                                    <a href="{{ route('youngprofessional.index') }}">Young Professionals</a><hr>
                                    <a href="{{ route('dashboard.edit-invoice-section') }}">Edit R550 Invoice</a><hr>
                                    <a href="{{ route('dashboard.edit-invoice-section-chap') }}">Edit R1100 Invoice</a><hr>
                                </div>
                            </div>
                            {{-- <div class="buttons1">
                                <a href="https://www.wpn.co.za/" target="_blank" class="content-management-system">Visit Website</a>
                            </div>  --}}
                        </div>
                        {{-- <div class="frame-child"></div>
                        <div class="buttons-parent">
                            <img class="mingcutenotification-line-icon" alt="" src={{ asset('/assets/images/noti.png') }}>
                            <div class="profile-picture">
                                <div class="profile-sm"></div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="frame-parent">
                        <nav class="navbar navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('posts.index') }}">Articles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('resources.index') }}">Resources</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('videos.index') }}">Videos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('billing.index') }}">Billing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('members.index') }}">Members</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
            
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" >
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-6">
                <div id="particles"> </div>
                <!--begin::Toolbar container-->
               
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Wrapper container-->
            <div class="app-container container-xxl">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        
                 
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                
                                @yield('content')
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    <footer class=" text-center text-lg-start">
                        <div class="container p-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                                    <p class="text-white2">© Copyright 2024 | {{ env('APP_NAME') }} | All Rights Reserved</p>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 d-flex justify-content-end">
                                    <ul class="list-unstyled ">
                                        <li class="ms-3 d-flex">
                                            <a href="#" class="text-white2 text-decoration-none">About  </a>
                                            <a href="#" class=" fc2 text-decoration-none pml-5"> >  </a>
                                        </li>
                                        <li class="ms-3 d-flex">
                                            <a href="#" class="text-white2 text-decoration-none">Terms  </a>
                                            <a href="#" class=" fc2 text-decoration-none pml-5"> >  </a>
                                        </li>
                                        <li class="ms-3 d-flex">
                                            <a href="#" class="text-white2 text-decoration-none">Privacy Policy  </a>
                                            <a href="#" class=" fc2 text-decoration-none ml-5"> >  </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--begin::Drawers-->




<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">

    <span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
</div>

<script>var hostUrl = "assets/";</script>

<script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('/assets/js/scripts.bundle.js') }}"></script>
@yield('page-js')
<script src="{{ asset('/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('/assets/js/custom/utilities/modals/users-search.js') }}"></script>


<script>
    document.querySelector('.custom-file-input input[type="file"]').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.custom-file-input img').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
</script>

<script>
    document.querySelector('.custom-file-input2 input[type="file"]').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.custom-file-input2 img').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
</script>


<script>



function toggleActionsPopup(event, id) {
        event.preventDefault();
        const popupId = `actions-popup-${id}`;
        const popup = document.getElementById(popupId);
        const isVisible = popup.style.display === 'block';
        document.querySelectorAll('.actions-popup').forEach(p => p.style.display = 'none'); // Hide any other open popups
        if (!isVisible) {
            const rect = event.target.getBoundingClientRect();
           
            popup.style.display = 'block';
        }
    }

    // Close the popup when clicking outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.actions-btn') && !event.target.closest('.actions-popup')) {
            document.querySelectorAll('.actions-popup').forEach(p => p.style.display = 'none');
        }
    }

    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @endif
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@jquery
@toastr_js
@toastr_render



</body>

</html>
