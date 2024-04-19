<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mlimani City Cars') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <link rel="stylesheet" href="{{ asset('css/vendor/icofont.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/simple-line-icons.css') }}" />




    <!-- Styles -->
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">
    <link href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper-bundle.min.css') }} " />

    <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}" />
   
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @guest
                @yield('content')
            @else
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    @if (Request::segment(2) || Request::segment(1) !== 'home')
                                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                    @else
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    @endif

                                    @php
                                        $i = 1;
                                    @endphp

                                    @while (Request::segment($i) && Request::segment($i) !== 'home')
                                        @if (Request::segment($i + 1))
                                            <li class="breadcrumb-item"><a
                                                    href="@for ($z = 1; $z <= $i; $z++) /{{ Request::segment($z) }} @endfor">{{ Request::segment($i++) }}</a>
                                            </li>
                                        @else
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ Request::segment($i++) }}</li>
                                        @endif
                                    @endwhile
                                </ol>
                            </nav>
                        </div>

                        @yield('content')
                    </div>
                </div>
            @endguest
        </main>
    </div>
    <!-- Vendors JS -->
    <script src="{{ asset('js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.ajaxchimp.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.2/dist/index.bundle.min.js"></script>

    <!-- Activation JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/mainy.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
