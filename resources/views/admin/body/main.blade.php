<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/core/core.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo_1/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
    @stack('css')
</head>
<body>
<div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->

    @include('admin.body.sidebar')

    <!-- partial -->

    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
        @include('admin.body.header')

        <!-- partial -->
        @yield('main')


        <!-- partial:partials/_footer.html -->
        @include('admin.body.footer')

        <!-- partial -->

    </div>
</div>

<!-- core:js -->
<script src="{{asset('admin/assets/vendors/core/core.js')}}"></script>
<script src="{{asset('admin/assets/vendors/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- endinject -->
<script src="{{asset('jquery-3.7.1.min.js')}}"></script>
<!-- plugin js for this page -->
<script src="{{asset('admin/assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin/assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<!-- end plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('admin/assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('admin/assets/js/template.js')}}"></script>
<!-- endinject -->
<!-- custom js for this page -->
<script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
<script src="{{asset('admin/assets/js/datepicker.js')}}"></script>
<script src="{{asset('admin/assets/js/sweet-alert.js')}}"></script>
<!-- end custom js for this page -->
@stack('script')
</body>
</html>
