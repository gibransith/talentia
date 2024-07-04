@include('layouts/main')

    <head>
        
        
        @include('layouts/title-meta')

        @include('layouts/head-css')

    </head>

    <body >
         
        @include('layouts/body')

        <!-- Begin page -->
        <div>

            @include('layouts/topbar')
            
            <div class="main-content">

                <div class="page-content">

                    <!-- Start home -->
                    <section class="page-title-box">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="text-center text-white">
                                        <h3 class="mb-4">Candidatos que aplicaron a la vacante</h3>
                                        <div class="page-next">
                                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- end home -->

                    <!-- START SHAPE -->
                    <div class="position-relative" style="z-index: 1">
                        <div class="shape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                                <path fill="" fill-opacity="1"
                                    d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- END SHAPE -->


                    <!-- START CANDIDATE-GRID -->
                    <section class="section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="candidate-list-widgets mb-4">
                                        <form action="#">
                                            <div class="row g-2">
                                            </div><!--end row-->
                                        </form><!--end form-->
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-7">
                                    <div>
                                        <h6 class="fs-16 mb-0">Mostrando 1 - 8 de 11 resultados</h6>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-5">
                                    <div class="candidate-list-widgets">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="selection-widget mt-3 mt-md-0">
                                                    <select class="form-select" data-trigger name="choices-single-filter-orderby" id="choices-single-filter-orderby" aria-label="Default select example">
                                                        <option value="df">Por defecto</option>
                                                        <option value="ne">Más nuevo</option>
                                                        <option value="od">Más antiguo</option>
                                                        <option value="rd">Aleatorio</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="selection-widget mt-3 mt-md-0">
                                                    <select class="form-select" data-trigger name="choices-candidate-page" id="choices-candidate-page" aria-label="Default select example">
                                                        <option value="all">Todas</option>
                                                        <option value="4">4 por página</option>
                                                        <option value="8">8 por página</option>
                                                        <option value="12">12 por página</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end candidate-list-widgets-->
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="candidate-list">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box bookmark-post card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0 position-relative">
                                                        <img src="assets/images/user/img-01.jpg" alt="" class="avatar-md rounded">
                                                    </div>
                                                    <div class="ms-3">
                                                       <a href="candidate-details.html" class="primary-link"><h5 class="fs-17">Charles Dickens</h5></a>
                                                    </div>
                                                </div>
                                                <div class="border rounded mb-4">
                                                    <div class="row g-0">
                                                        <div class="col-lg-6">
                                                            <div class="border-end px-3 py-2">
                                                                <p class="text-muted mb-0">Carrera: Comunicación</p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <p class="text-muted">Algunos ejemplos rápidos de texto para construir sobre el título de la tarjeta y llenar el contenido de la tarjeta. Moltin te proporciona la plataforma.</p>
                                                <div class="mt-3">
                                                    <a href="#hireNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2"><i class="mdi mdi-account-check"></i> Contactar</a>
                                                    <a href="candidate-details.html" class="btn btn-soft-primary btn-hover w-100 mt-2"><i class="mdi mdi-eye"></i> Ver Perfil</a>
                                                </div>
                                            </div>
                                        </div> <!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box bookmark-post card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0 position-relative">
                                                        <img src="assets/images/user/img-02.jpg" alt="" class="avatar-md">
                                                    </div>
                                                    <div class="ms-3">
                                                       <a href="candidate-details.html" class="primary-link"><h5 class="fs-17">Gabriel Palmer</h5></a>
                                                    </div>
                                                </div>
                                                <div class="border rounded mb-4">
                                                    <div class="row g-0">
                                                        <div class="col-lg-6">
                                                            <div class="border-end px-3 py-2">
                                                                <p class="text-muted mb-0">Carrera: Diseño</p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <p class="text-muted">Algunos ejemplos rápidos de texto para construir sobre el título de la tarjeta y llenar el contenido de la tarjeta. Moltin te proporciona la plataforma.</p>
                                                <div class="mt-3">
                                                    <a href="#hireNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2"><i class="mdi mdi-account-check"></i> Contactar</a>
                                                    <a href="candidate-details.html" class="btn btn-soft-primary btn-hover w-100 mt-2"><i class="mdi mdi-eye"></i> Ver Perfil</a>
                                                </div>
                                            </div>
                                        </div> <!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0 position-relative">
                                                        <img src="assets/images/user/img-03.jpg" alt="" class="avatar-md">
                                                    </div>
                                                    <div class="ms-3">
                                                       <a href="candidate-details.html" class="primary-link"><h5 class="fs-17">James Lemire</h5></a>
                                                    </div>
                                                </div>
                                                <div class="border rounded mb-4">
                                                    <div class="row g-0">
                                                        <div class="col-lg-6">
                                                            <div class="border-end px-3 py-2">
                                                                <p class="text-muted mb-0">Carrera: Comunicación</p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <p class="text-muted">Algunos ejemplos rápidos de texto para construir sobre el título de la tarjeta y llenar el contenido de la tarjeta. Moltin te proporciona la plataforma.</p>
                                                <div class="mt-3">
                                                    <a href="#hireNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2"><i class="mdi mdi-account-check"></i> Contactar</a>
                                                    <a href="candidate-details.html" class="btn btn-soft-primary btn-hover w-100 mt-2"><i class="mdi mdi-eye"></i> Ver Perfil</a>
                                                </div>
                                            </div>
                                        </div> <!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0 position-relative">
                                                        <img src="assets/images/user/img-04.jpg" alt="" class="avatar-md">
                                                    </div>
                                                    <div class="ms-3">
                                                       <a href="candidate-details.html" class="primary-link"><h5 class="fs-17">Rebecca Swartz</h5></a>
                                                    </div>
                                                </div>
                                                <div class="border rounded mb-4">
                                                    <div class="row g-0">
                                                        <div class="col-lg-6">
                                                            <div class="border-end px-3 py-2">
                                                                <p class="text-muted mb-0">Carrera: Deseño</p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <p class="text-muted">Algunos ejemplos rápidos de texto para construir sobre el título de la tarjeta y llenar el contenido de la tarjeta. Moltin te proporciona la plataforma.</p>
                                                <div class="mt-3">
                                                    <a href="#hireNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2"><i class="mdi mdi-account-check"></i> Contactar</a>
                                                    <a href="candidate-details.html" class="btn btn-soft-primary btn-hover w-100 mt-2"><i class="mdi mdi-eye"></i> Ver Perfil</a>
                                                </div>
                                            </div>
                                        </div> <!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0 position-relative">
                                                        <img src="assets/images/user/img-05.jpg" alt="" class="avatar-md">
                                                    </div>
                                                    <div class="ms-3">
                                                       <a href="candidate-details.html" class="primary-link"><h5 class="fs-17">Betty Richards</h5></a>
                                                    </div>
                                                </div>
                                                <div class="border rounded mb-4">
                                                    <div class="row g-0">
                                                        <div class="col-lg-6">
                                                            <div class="border-end px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <p class="text-muted">Algunos ejemplos rápidos de texto para construir sobre el título de la tarjeta y llenar el contenido de la tarjeta. Moltin te proporciona la plataforma.</p>
                                                <div class="mt-3">
                                                    <a href="#hireNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2"><i class="mdi mdi-account-check"></i> Contactar</a>
                                                    <a href="candidate-details.html" class="btn btn-soft-primary btn-hover w-100 mt-2"><i class="mdi mdi-eye"></i> Ver Perfil</a>
                                                </div>
                                            </div>
                                        </div> <!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box bookmark-post card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0 position-relative">
                                                        <img src="assets/images/user/img-06.jpg" alt="" class="avatar-md">
                                                    </div>
                                                    <div class="ms-3">
                                                       <a href="candidate-details.html" class="primary-link"><h5 class="fs-17">Jeffrey Montgomery</h5></a>
                                                    </div>
                                                </div>
                                                <div class="border rounded mb-4">
                                                    <div class="row g-0">
                                                        <div class="col-lg-6">
                                                            <div class="border-end px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <p class="text-muted">Algunos ejemplos rápidos de texto para construir sobre el título de la tarjeta y llenar el contenido de la tarjeta. Moltin te proporciona la plataforma.</p>
                                                <div class="mt-3">
                                                    <a href="#hireNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2"><i class="mdi mdi-account-check"></i> Contactar</a>
                                                    <a href="candidate-details.html" class="btn btn-soft-primary btn-hover w-100 mt-2"><i class="mdi mdi-eye"></i> Ver Perfil</a>
                                                </div>
                                            </div>
                                        </div> <!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box bookmark-post card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0 position-relative">
                                                        <img src="assets/images/user/img-07.jpg" alt="" class="avatar-md">
                                                    </div>
                                                    <div class="ms-3">
                                                       <a href="candidate-details.html" class="primary-link"><h5 class="fs-17">Brooke Hayes</h5></a>
                                                    </div>
                                                </div>
                                                <div class="border rounded mb-4">
                                                    <div class="row g-0">
                                                        <div class="col-lg-6">
                                                            <div class="border-end px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <p class="text-muted">Algunos ejemplos rápidos de texto para construir sobre el título de la tarjeta y llenar el contenido de la tarjeta. Moltin te proporciona la plataforma.</p>
                                                <div class="mt-3">
                                                    <a href="#hireNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2"><i class="mdi mdi-account-check"></i> Contactar</a>
                                                    <a href="candidate-details.html" class="btn btn-soft-primary btn-hover w-100 mt-2"><i class="mdi mdi-eye"></i> Ver Perfil</a>
                                                </div>
                                            </div>
                                        </div> <!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0 position-relative">
                                                        <img src="assets/images/user/img-08.jpg" alt="" class="avatar-md">
                                                    </div>
                                                    <div class="ms-3">
                                                       <a href="candidate-details.html" class="primary-link"><h5 class="fs-17">Cerys Woods</h5></a>
                                                    </div>
                                                </div>
                                                <div class="border rounded mb-4">
                                                    <div class="row g-0">
                                                        <div class="col-lg-6">
                                                            <div class="border-end px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <p class="text-muted">Algunos ejemplos rápidos de texto para construir sobre el título de la tarjeta y llenar el contenido de la tarjeta. Moltin te proporciona la plataforma.</p>
                                                <div class="mt-3">
                                                    <a href="#hireNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2"><i class="mdi mdi-account-check"></i> Contactar</a>
                                                    <a href="candidate-details.html" class="btn btn-soft-primary btn-hover w-100 mt-2"><i class="mdi mdi-eye"></i> Ver Perfil</a>
                                                </div>
                                            </div>
                                        </div> <!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div class="flex-shrink-0 position-relative">
                                                        <img src="assets/images/user/img-09.jpg" alt="" class="avatar-md">
                                                    </div>
                                                    <div class="ms-3">
                                                       <a href="candidate-details.html" class="primary-link"><h5 class="fs-17">Olivia Murphy</h5></a>
                                                    </div>
                                                </div>
                                                <div class="border rounded mb-4">
                                                    <div class="row g-0">
                                                        <div class="col-lg-6">
                                                            <div class="border-end px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="px-3 py-2">
                                                                <p class="text-muted mb-0"></p>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                                <p class="text-muted">Algunos ejemplos rápidos de texto para construir sobre el título de la tarjeta y llenar el contenido de la tarjeta. Moltin te proporciona la plataforma.</p>
                                                <div class="mt-3">
                                                    <a href="#hireNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2"><i class="mdi mdi-account-check"></i> Contactar</a>
                                                    <a href="candidate-details.html" class="btn btn-soft-primary btn-hover w-100 mt-2"><i class="mdi mdi-eye"></i> Ver Perfil</a>
                                                </div>
                                            </div>
                                        </div> <!--end card-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end candidate-list-->

                            <div class="row mt-5 pt-2">
                                <div class="col-lg-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination job-pagination mb-0 justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                    <i class="mdi mdi-chevron-double-left fs-15"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="mdi mdi-chevron-double-right fs-15"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!--end col-->
                            </div><!-- end row -->

                        </div><!--end container-->
                    </section>
                    <!-- END CANDIDATE-GRID -->

                    <!-- START HIRE-NOW MODAL -->
                    <div class="modal fade" id="hireNow" tabindex="-1" aria-labelledby="hireNow" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-5">
                                    <div class="text-center mb-4">
                                        <h5 class="modal-title" id="staticBackdropLabel">Contactar</h5>
                                    </div>
                                    <div class="position-absolute end-0 top-0 p-3">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="mb-3">
                                        <label for="namrFormControlInput" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="namrFormControlInput" placeholder="Enter your company name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailFormControlInput" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="emailFormControlInput" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-4">
                                        <label for="messageFormControlTextarea" class="form-label">Message</label>
                                        <textarea class="form-control" id="messageFormControlTextarea" rows="4" placeholder="Enter your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- END HIRE-NOW MODAL -->

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

        <!-- Choice Js -->
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

        <!-- Candidate Init Js -->
        <script src="assets/js/pages/candidate.init.js"></script>

        <!-- Job-list Init Js -->
        <script src="assets/js/pages/job-list.init.js"></script>

        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>