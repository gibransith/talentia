<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> @yield('title')| Talentia</title>
    <meta content="Talentia de la Universidad Mondragon" name="description" />
    <meta content="HPC" name="author" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo_ico.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   
    @include('admin.layouts.head')
</head>
<body data-layout="horizontal" data-topbar="dark">

    <!-- Modal DLG -->
    @include('common.modal')

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin.layouts.header')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <!-- Start content -->
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- content -->
            </div>
            @include('admin.layouts.footer')
              <a href="javascript:void(0)" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    {{-- right sidebar file here  --}}
    @include('admin.layouts.right-sidebar')

    @include('admin.layouts.vendor-script')
</body>

</html>
