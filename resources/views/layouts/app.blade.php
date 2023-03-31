<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js">
    </script>
    <!-- this should go after your </body> -->


    {{-- scripts --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="/build/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/build/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/build/assets/vendor/animate-css/vivify.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/build/assets/css/mooli.min.css">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div id="body" class="theme-green">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="mt-3"><img src="assets/images/icon.svg" width="40" height="40" alt="Mooli">
                </div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Theme Setting -->
        <div class="themesetting">
            <a href="javascript:void(0);" class="theme_btn"><i class="fa fa-gear fa-spin"></i></a>
            <ul class="list-group">
                <li class="list-group-item">
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="green" class="active">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                        </li>
                        <li data-theme="timber">
                            <div class="timber"></div>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="amethyst">
                            <div class="amethyst"></div>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <span>Light Sidebar</span>
                    <label class="switch sidebar_light">
                        <input type="checkbox" checked="">
                        <span class="slider round"></span>
                    </label>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <span>Gradient</span>
                    <label class="switch gradient_mode">
                        <input type="checkbox" checked="">
                        <span class="slider round"></span>
                    </label>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <span>Dark Mode</span>
                    <label class="switch dark_mode">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <span>RTL version</span>
                    <label class="switch rtl_mode">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </li>
            </ul>
            <hr>
            <div>
                <a href="https://themeforest.net/user/puffintheme/portfolio" class="btn btn-dark btn-block"
                    target="_blank">Buy this item</a>
                <a href="https://themeforest.net/user/puffintheme/portfolio" target="_blank"
                    class="btn btn-primary theme-bg gradient btn-block">View Portfolio</a>
            </div>
        </div>

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <div id="wrapper">

            <!-- Page top navbar -->
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-left">
                        <div class="navbar-btn">
                            <a href="index.html"><img src="assets/images/icon.svg" alt="Mooli Logo"
                                    class="img-fluid logo"></a>
                            <button type="button" class="btn-toggle-offcanvas"><i
                                    class="fa fa-align-left"></i></button>
                        </div>
                    </div>
                    <div class="navbar-right">
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown hidden-xs">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu"
                                        data-toggle="dropdown">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="notification-dot msg">4</span>
                                    </a>
                                    <ul class="dropdown-menu right_chat email mt-0 animation-li-delay">
                                        <li class="header theme-bg gradient mt-0 text-light">You have 4 New eMail</li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar4.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Dr. James Wert <small
                                                                class="float-right font-12">Just now</small></span>
                                                        <span class="message">Update GitHub</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu"
                                        data-toggle="dropdown">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="notification-dot info">4</span>
                                    </a>
                                    <ul class="dropdown-menu feeds_widget mt-0 animation-li-delay">
                                        <li class="header theme-bg gradient mt-0 text-light">You have 4 New
                                            Notifications</li>
                                        <li>
                                            <a href="#">
                                                <div class="mr-4"><i class="fa fa-thumbs-o-up text-success"></i>
                                                </div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-success">2 New Feedback <small
                                                            class="float-right text-muted font-12">9:22 AM</small></h4>
                                                    <small>It will give a smart finishing to your site</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="fa fa-comments-o"></i></a></li> --}}
                                <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen"
                                        class="icon-menu"><i class="fa fa-arrows-alt"></i></a></li>
                                <li><a href="page-login.html" class="icon-menu"><i class="fa fa-power-off"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Main left sidebar menu -->
            <div id="left-sidebar" class="sidebar light_active">
                <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
                <div class="navbar-brand">
                    {{-- <a href="/"><img src="assets/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"><span>Mooli-Hospital</span></a> --}}
                    <a href="/" class="img-fluid logo"><span style="color:red;">med</span> <span
                            style="color:#e41274;">Hospital</span></a>
                    <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i
                            class="fa fa-close"></i></button>
                </div>
                <div class="sidebar-scroll">
                    <div class="user-account">
                        @if (Auth::check())
                            <div class="user_div">
                                <img src="build/assets/images/user.png" class="user-photo"
                                    alt="User Profile Picture">
                            </div>

                            <div class="dropdown">
                                <span>Buna,</span>
                                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                                    data-toggle="dropdown"><strong>
                                        @if (Auth::check())
                                            {{ Auth::user()->name }}
                                        @endif
                                    </strong></a>
                                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                                    @if (Auth::check() && Auth::user()->role_id == 3)
                                        <li><a href="{{ route('profil-doctor') }}"><i
                                                    class="fa fa-user"></i>Profil</a></li>
                                    @elseif(Auth::check() && Auth::user()->role_id == 2)
                                        <li><a href="{{ route('profil-pacient') }}"><i
                                                    class="fa fa-user"></i>Profil</a></li>
                                    @endif
                                    <li><a href="app-inbox.html"><i class="fa fa-envelope"></i>Messages</a></li>
                                    <li><a href="setting.html"><i class="fa fa-gear"></i>Settings</a></li>
                                    <li class="divider"></li>
                                    @if (Auth::check())
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i>{{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    @endif
                                </ul>
                            </div>
                        @else
                            <a href="{{ route('login') }}">Creaza un cont/Inregistreaza-te</a>
                        @endif
                    </div>
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu animation-li-delay">
                            <li class="header">Hospital</li>
                            <li><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                            <li class="active">
                                <a href="#Doctors" class="has-arrow"><i
                                        class="fa fa-user-md"></i><span>Doctors</span></a>
                                <ul>
                                    <li class="active"><a href="medici">All Doctors</a></li>

                                </ul>
                            </li>
                            {{-- <li><a href="app-calendar.html"><i class="fa fa-calendar"></i> <span>Appointment</span></a></li> --}}
                            @if (Auth::check() && Auth::user()->role_id != 1)
                                <li><i class="fa fa-calendar"></i><a class="dropdown-item"
                                        href="{{ route('programari') }}">Appointments</a>
                            @endif
                            </li>
                            <li>
                                <a href="#Patients" class="has-arrow"><i
                                        class="fa fa-user-circle-o"></i><span>Patients</span></a>
                                <ul>
                                    <li><a href="patients-all.html">All Patient</a></li>
                                    <li><a href="patients-add.html">Add Patient</a></li>
                                    <li><a href="patients-profile.html">Patient Profile</a></li>
                                    <li><a href="patients-invoice.html">Patient Invoices</a></li>
                                </ul>
                            </li>
                            @if (Auth::check() && Auth::user()->role_id == 1)
                                <li class="header">Admin</li>
                                <li><a href="{{ url('adauga-medic') }}">Add Doctors</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>















    <a href="" id="auth">Inregistreaza-te</a>
    @if (Route::has('register'))
        <a href="{{ route('register') }}" id="inregistrare">Creeaza cont</a>
    @endif


    @yield('content')



    <!-- Javascript -->
    <script src="/build/assets/bundles/libscripts.bundle.js"></script>
    <script src="/build/assets/bundles/vendorscripts.bundle.js"></script>

    <!-- Vedor js file and create bundle with grunt  -->


    <!-- Project core js file minify with grunt -->
    <script src="/build/assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>
