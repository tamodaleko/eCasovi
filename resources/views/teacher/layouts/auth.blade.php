<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'eCasovi') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!-- Styles -->
        <link href="{{ asset('css/pages/login/login-1.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    </head>
    
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

                    <!--begin::Aside-->
                    <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(/media/bg/bg-4.jpg);">
                        <div class="kt-grid__item">
                            <a href="#" class="kt-login__logo">
                                <img src="/media/logos/logo-4.png">
                            </a>
                        </div>
                        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
                            <div class="kt-grid__item kt-grid__item--middle">
                                <h3 class="kt-login__title">{{ __('Welcome to eCasovi!') }}</h3>
                                <h4 class="kt-login__subtitle">{{ __('Learn from top online tutors, experts and mentors from around the world.') }}</h4>
                            </div>
                        </div>
                        <div class="kt-grid__item">
                            <div class="kt-login__info">
                                <div class="kt-login__copyright">
                                    &copy 2019 eCasovi
                                </div>
                                <div class="kt-login__menu">
                                    <a href="#" class="kt-link">Privacy</a>
                                    <a href="#" class="kt-link">Legal</a>
                                    <a href="#" class="kt-link">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--begin::Aside-->

                    <!--begin::Content-->
                    <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">
                        @yield('content')
                    </div>
                    <!--end::Content-->
                </div>
            </div>
        </div>

        <!-- end:: Page -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
        </script>

        <!-- Scripts -->
        <script src="{{ asset('plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>
    </body>
</html>
