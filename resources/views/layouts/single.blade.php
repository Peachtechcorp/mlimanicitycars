<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sinp- Single Product Ecommerce HTML Template</title>
    <!-- <meta name="robots" content="noindex, follow" /> -->
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.webp" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <link rel="stylesheet" href="{{ asset('single/css/vendor/icofont.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('single/css/vendor/line-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('single/css/vendor/simple-line-icons.css')}}" />
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="{{ asset('single/css/plugins/swiper-bundle.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('single/css/plugins/magnific-popup.css')}}" />


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('single/css/style.css')}}" />

</head>


<body class="font-poppins text-dark text-sm leading-loose">


    <main>
        @component('components.layouts.header')
        @endcomponent

        @yield('content')

    </main>
    @component('components.layouts.footer')
    @endcomponent




    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{ asset('single/js/vendor/modernizr-3.11.7.min.js')}}"></script>
    <script src="{{ asset('single/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('single/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('single/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('single/js/plugins/popper.min.js')}}"></script>
    <script src="{{ asset('single/js/plugins/tippy-bundle.umd.min.js')}}"></script>
    <script src="{{ asset('single/js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('single/js/plugins/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Activation JS -->
    <script src="{{ asset('single/js/main.js')}}"></script>



</body>

</html>