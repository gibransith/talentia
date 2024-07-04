@include('layouts/main')

    <head>

        @include('layouts/title-meta')

        @include('layouts/head-css')

    </head>

        @include('layouts/body')

        <!-- Begin page -->
        <div>

            @include('layouts/topbar')
            
            <div class="main-content">

                <div class="page-content">

                    @include('layouts-parts/company-details-parts/page-title') 

                     <!-- START CANDIDATE-DETAILS -->
                    <section class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card side-bar">
                                        @include('layouts-parts/company-details-parts/logo-contacto')

                                        @include('layouts-parts/company-details-parts/informacion-general-perfil')
                                        <!--end card-body-->
                                        @include('layouts-parts/company-details-parts/ubicacion')
                                    </div><!--end card-->
                                </div><!--end col-->
                                
                                <div class="col-lg-8">
                                    <div class="card ms-lg-4 mt-4 mt-lg-0">
                                        <div class="card-body p-4">

                                            @include('layouts-parts/company-details-parts/acerca-de')

                                            @include('layouts-parts/company-details-parts/vacantes-disponibles')
                                        </div><!-- card body end -->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </section>
                    <!-- END CANDIDATE-DETAILS -->

                    <!-- START APPLY MODAL -->
                    <div class="modal fade" id="applyNow" tabindex="-1" aria-labelledby="applyNow" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-5">
                                    <div class="text-center mb-4">
                                        <h5 class="modal-title" id="staticBackdropLabel">Apply For This Job</h5>
                                    </div>
                                    <div class="position-absolute end-0 top-0 p-3">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nameFormControlInput" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="nameFormControlInput" placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailFormControlInput" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="emailFormControlInput" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Enter your message"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="inputGroupFile01">Resume Upload</label>
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Send Application</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- END APPLY MODAL -->

                </div>
                <!-- End Page-content -->

                @include('layouts/footer')

                @include('layouts/switcher')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        @include('layouts/vendor-scripts')


        <!-- Light Box Js -->
        <script src="assets/libs/glightbox/js/glightbox.min.js"></script>

        <script src="assets/js/pages/lightbox.init.js"></script>

        <!-- Masonary Js -->
        <script src="assets/libs/masonry-layout/masonry.pkgd.min.js"></script>

        <!-- Choice Js -->
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>