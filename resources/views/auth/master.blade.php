<!doctype html>
<html lang="en">

	<head>


		<meta charset="utf-8" />
		<title>@yield('title')| Talentia</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<meta name="description" content=" " />
		<meta name="keywords" content="" />
		<meta content="HPC" name="author" />

		
		<!-- App favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/images/logo/logo_ico.png') }}">

		<!-- Bootstrap Css -->
		<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"/>
		<!-- Icons Css -->
		<link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" />
		<!-- App Css-->
		<link href="{{ URL::asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" />
		<!-- select2 CSS -->
		<link href="{{ asset('libs/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
		<!--Custom Css-->
		<link href="{{ URL::asset('css/talentia.css') }}" id="custom-style" rel="stylesheet" />

	</head>

	<body>
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


			<div class="main-content">

				<div class="page-content">

					@yield('content')


				</div>
				<!-- End Page-content -->

			</div>
			<!-- end main content-->

		</div>
		<!-- END layout-wrapper -->


		<!-- jQuery -->
		<script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>

		<!-- JAVASCRIPT -->
		<script src="{{ URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


		<!-- Switcher Js -->
		{{--  <script src="{{ URL::asset() }}assets/js/pages/switcher.init.js"></script> --}}
		<script type="text/javascript">
			var preloader=document.getElementById("preloader")
			$(document).ready(function(){
				preloader.style.opacity="0";
				preloader.style.visibility="hidden";
			});
		</script>

		<script src="{{ asset('assets/datepicker/datepicker.min.js') }}"></script>
		<script src="{{ asset('assets/datepicker/i18n/datepicker.es.js') }}"></script>

		<!-- Select2 JS -->
		<script src="{{ asset('libs/select2/dist/js/select2.full.min.js') }}"></script>

		<!-- Custom JS -->
		<script src="{{ asset('js/talentia.js') }}"></script>

	</body>
</html>