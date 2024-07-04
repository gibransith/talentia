<!-- JAVASCRIPT -->
<script src="{{ URL::asset('admin-assets/assets/libs/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('admin-assets/assets/libs/metismenujs/metismenujs.min.js') }}"></script>
<script src="{{ URL::asset('admin-assets/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('admin-assets/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Select2 JS -->
<script src="{{ asset('libs/select2/dist/js/select2.full.min.js') }}"></script>

<script src="{{ asset('assets/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/datepicker/i18n/datepicker.es.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('js/talentia.js') }}"></script>
{{-- <script src="{{ URL::asset('js/feather.min.js') }}"></script> --}}
@yield('script')
@yield('script-bottom')


