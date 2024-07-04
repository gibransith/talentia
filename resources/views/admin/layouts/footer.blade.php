<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{URL::asset('admin-assets/assets/images/logo_UMx.png')}}" alt="" height="26" class="me-4">
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    <script>
                        document.write(new Date().getFullYear())

                    </script> &copy; {{env('APP_NAME')}}.
                </div>
            </div>
        </div>
    </div>
</footer>
