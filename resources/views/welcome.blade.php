<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Courses</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    {{-- @vite('resources/js/app.js') --}}
    </head>
    <body>

      {{-- <div id="app"></div> --}}
      <!-- all js include start -->

    {{-- Admin --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('admin/assets/js/main.js')}}"></script>

    {{-- Frontend --}}
    <!-- jQuery -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- jquery -->
    <script src="{{ asset('frontend/js/core.min.js') }}"></script>
    <!-- search -->
    <script src="{{ asset('frontend/search/search.js') }}"></script>
    <!-- custom scripts -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <!-- form plugins js -->
    <script src="{{ asset('frontend/quform/js/plugins.js') }}"></script>
    <!-- form scripts js -->
    <script src="{{ asset('frontend/quform/js/scripts.js') }}"></script>
    <!-- all js include end -->
    </body>
</html>
