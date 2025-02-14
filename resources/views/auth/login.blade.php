<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head><base href="../"/>
    <title>{{ env('APP_NAME') }} | Login - Content Management System</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/plugins/custom/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/auth.css') }}" rel="stylesheet" type="text/css" />
    
    <style>

        body{
            /*background-image: url('/assets/media/auth/bg.jpg')!important;*/
            background-repeat: no-repeat;
            background-position: center center;
            background-color: #BFBFBF;
            position: relative;
            z-index: 1;

        }

        fcr-login-bg {
            background-image: url('/assets/images/home.png');
        }

        .login-overlay{
            position: absolute;
            width:100%;
            height: 100%;
            top:0;
            right:0;
            bottom:0;
            left:0;
           
            z-index: 1;
        }
    
        form{ z-index: 10; position: relative;
        
        }
        video {
            object-fit: cover; // Set the magic
        position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
        }
        .card { background: rgba(255,255,255, 0.8); border-radius: 0!important;}
        .form-control {
            
            background: #fff;
            border: none;
            border-radius: 0;
            box-shadow: none!important;
        }
        .btn.btn-primary{ border-radius: 0!important;}
        .border-gradient {
            background-color: #fff;
        }
        .border-gradient-purple {
            border: 1px solid #BFBFBF;
            border-radius: 12px;
        }

        .bgi-size-cover{
            background-image: url('/assets/images/home.png');
        }


    </style>

    <!--end::Global Stylesheets Bundle-->
</head>
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<div class="d-flex flex-column login-bg flex-root" id="kt_app_root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1 position-relative z-index-3 animated slideInLeft">
            <div class="login-overlay"></div>
           
            <!--begin::Form-->
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-500px p-10">
                    <!--begin::Form-->
                    <form class="form w-100 " method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="login-title fw-bolder mb-3">Log In</h1>
                            <!--end::Title-->
                            <!--begin::Subtitle-->
                         
                            <!--end::Subtitle=-->
                        </div>

                       
                        <!--end::Separator-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Email-->
                            <label class="p-1 login-input-label" for="email">Email</label>
                            <input type="email" placeholder="Email" name="email" autocomplete="off" class="form-control border-gradient border-gradient-purple bg-transparent @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                            <!--end::Email-->
                        </div>
                        <!--end::Input group=-->
                        <div class="fv-row mb-3">
                            <!--begin::Password-->
                            <label class="p-1 login-input-label" for="password">Password</label>
                            <input type="password" placeholder="Password" name="password" autocomplete="off" class="border-gradient border-gradient-purple form-control bg-transparent @error('password') is-invalid @enderror" />
                            <!--end::Password-->
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Wrapper-->
                        
                        <!--end::Wrapper-->
                        <!--begin::Submit button-->
                        <div class="d-grid mt-8 mb-10">
                            <button type="submit" id="kt_sign_in_submit" class="login-btn">
                                <!--begin::Indicator label-->
                                <span class="indicator-label-login">Sign In</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                        </div>
                        
                        <!--end::Submit button-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Form-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-wrap px-5">
                <!--begin::Links-->
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Body-->
        <!--begin::Aside--> 
        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 animated slideInRight fcr-login-bg">
            <!--begin::Content-->
            
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Aside-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('/assets/js/custom/authentication/sign-in/general.js') }}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
