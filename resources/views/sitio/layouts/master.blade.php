<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title')| Talentia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="HPC" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo_ico.png') }}">

        @include('sitio.layouts.head')        
    </head>

    <body >
         <!-- Modal DLG -->
         @include('common.modal')
         <!--start page Loader -->
         <div id="preloader">
            <div id="status">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
            </div>
        </div>
        <!--end page Loader -->

        <!-- Begin page -->
        <div>
            @include('sitio.layouts.menus.menu')
            <div class="main-content">

                <div class="page-content">

                    @yield('content')





                </div>
                <!-- End Page-content -->


                @include('sitio.layouts.footer')

                <!--start back-to-top-->
                <button onclick="topFunction()" id="back-to-top">
                    <i class="mdi mdi-arrow-up"></i>
                </button>
                <!--end back-to-top-->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        @include('sitio.layouts.footer-script')
    </body>
</html>