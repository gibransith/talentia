<!-- jQuery -->
<script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{-- <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script> --}}


<!-- Choice Js -->
{{-- <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script> --}}

<!-- Job Init Js -->
{{-- <script src="{{ asset('assets/js/pages/job-list.init.js') }}"></script>--}}

<!-- Job-Grid Js -->
{{-- <script src="{{ asset('assets/js/pages/job-grid.init.js') }}"></script> --}}

<script src="{{ URL::asset('admin-assets/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Switcher Js -->
{{-- <script src="assets/js/pages/switcher.init.js"></script> --}}
<script type="text/javascript">
	var preloader=document.getElementById("preloader")
	$(document).ready(function(){
		preloader.style.opacity="0";
		preloader.style.visibility="hidden";

		var mybutton = document.getElementById("back-to-top");
	});

	function scrollFunction(){
		100<document.body.scrollTop||100<document.documentElement.scrollTop?mybutton.style.display="block":mybutton.style.display="none"
	}

	function topFunction(){
		document.body.scrollTop=0,document.documentElement.scrollTop=0
	}

</script>

<!-- App Js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<script src="{{ asset('assets/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/datepicker/i18n/datepicker.es.js') }}"></script>

<!-- Select2 JS -->
<script src="{{ asset('libs/select2/dist/js/select2.full.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('js/talentia.js') }}"></script>

@yield('script')
@yield('script-bottom')

<script type="text/javascript">
	@if(Session::has('result'))
		<?php $result =Session::get('result');?>
		notificacion('{{$result['tituloMsg']}}',"{!!$result['mensaje']!!}",'{{$result['tipoMsg']}}');
	@endif
</script>

