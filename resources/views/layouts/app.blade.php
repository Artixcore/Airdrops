<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css">
    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/swiper%409/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">

</head>


<body class="body__wrapper">

    <!-- MAIN WRAPPER ================================================== -->

    <div class="main-wrapper">
        @include('front.nav.header')

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif


        @yield('content')

        @include('front.nav.footer')
    </div>



    <!-- JS here -->
    <script src="{{ asset('frontend') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.meanmenu.min.js"></script>
    <script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/../../../cdn.jsdelivr.net/npm/swiper%409/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>


</body>
</html>
