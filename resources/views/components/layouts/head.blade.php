<!DOCTYPE html>

<!-- <html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="http://127.0.0.1:8000/assets/" data-template="vertical-menu-template"> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="light-style customizer-hide light-style layout-navbar-fixed layout-menu-fixed" data-theme="theme-default" data-assets-path="http://127.0.0.1:8000/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coupen</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('assets/img/favicon/favicon.ico')}}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{url('assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/fonts/tabler-icons.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{url('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{url('assets/css/demo.css')}}" />

    <link rel="stylesheet" href="{{url('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/quill/typography.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/quill/katex.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/quill/editor.css')}}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{url('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{url('assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{url('assets/vendor/js/helpers.js')}}"></script>
    <script src="{{url('assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{url('assets/js/config.js')}}"></script>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

     <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/animate-css/animate.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
</head>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
