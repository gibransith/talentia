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
                                        <h3 class="mb-4">Vacantes</h3>
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


                    <!-- START JOB-GRID -->
                    <section class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="card job-grid-box">
                                        <div class="card-body p-4">
                                            <div>
                                                <a href="company-details.html"><img src="assets/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="job-details.html" class="primary-link"><h5 class="fs-17 mb-1">Magento Developer</h5></a>
                                                <p class="text-muted"></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-success-subtle text-success  fs-13 mt-1">$500/ Mes</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-primary-subtle text-primary  fs-13 mt-1">Mín. 1 Año</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="job-grid-content mt-3">
                                                <p class="text-muted">Como diseñador de productos, trabajarás en un Equipo de Entrega de Productos fusionado con talento de UX, ingeniería, producto y datos.</p>
                                                <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
                                                    <p class="text-muted float-start mb-0">Hace 2 minutos</p>
                                                    <div class="text-end">
                                                        <a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary ">Aplica ya <i class="uil uil-angle-right-b"></i></a>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div><!--end card-body-->
                                    </div><!--end job-grid-box-->
                                </div><!--end col-->
                                
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="card job-grid-box bookmark-post">
                                        <div class="card-body p-4">
                                            <div>
                                                <a href="company-details.html"><img src="assets/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="job-details.html" class="primary-link"><h5 class="fs-17 mb-1">Director de Marketing</h5></a>
                                                <p class="text-muted"></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-success-subtle text-success  fs-13 mt-1">$850/ Mes</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-primary-subtle text-primary  fs-13 mt-1">Mín. 3 Años</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="job-grid-content mt-3">
                                                <p class="text-muted">Como diseñador de productos, trabajarás en un Equipo de Entrega de Productos fusionado con talento de UX, ingeniería, producto y datos.</p>
                                                <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
                                                    <p class="text-muted float-start mb-0">Hace 15 días</p>
                                                    <div class="text-end">
                                                        <a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary">Aplica ya <i class="uil uil-angle-right-b"></i></a>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div><!--end card-body-->
                                    </div><!--end job-grid-box-->
                                </div><!--end col-->
                                
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="card job-grid-box">
                                        <div class="card-body p-4">
                                            <div>
                                                <a href="company-details.html"><img src="assets/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="job-details.html" class="primary-link"><h5 class="fs-17 mb-1">Desarrollador Magento</h5></a>
                                                <p class="text-muted"></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-success-subtle text-success  fs-13 mt-1">$780/ Mes</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-primary-subtle text-primary  fs-13 mt-1">0 - 1 Año</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="job-grid-content mt-3">
                                                <p class="text-muted">Como diseñador de productos, trabajarás en un Equipo de Entrega de Productos fusionado con talento de UX, ingeniería, producto y datos.</p>
                                                <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
                                                    <p class="text-muted float-start mb-0">Hace 2 horas</p>
                                                    <div class="text-end">
                                                        <a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary">Aplica ya <i class="uil uil-angle-right-b"></i></a>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div><!--end card-body-->
                                    </div><!--end job-grid-box-->
                                </div><!--end col-->
                                
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="card job-grid-box">
                                        <div class="card-body p-4">
                                            <div>
                                                <a href="company-details.html"><img src="assets/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="job-details.html" class="primary-link"><h5 class="fs-17 mb-1">Líder de Proyecto</h5></a>
                                                <p class="text-muted"></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-success-subtle text-success  fs-13 mt-1">$900/ Mes</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-primary-subtle text-primary  fs-13 mt-1">2 Años</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="job-grid-content mt-3">
                                                <p class="text-muted">Como diseñador de productos, trabajarás en un Equipo de Entrega de Productos fusionado con talento de UX, ingeniería, producto y datos.</p>
                                                <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
                                                    <p class="text-muted float-start mb-0">Hace 30 minutos</p>
                                                    <div class="text-end">
                                                        <a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary">Aplica ya <i class="uil uil-angle-right-b"></i></a>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div><!--end card-body-->
                                    </div><!--end job-grid-box-->
                                </div><!--end col-->                                

                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="card job-grid-box">
                                        <div class="card-body p-4">
                                            <div>
                                                <a href="company-details.html"><img src="assets/images/featured-job/img-05.png" alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="job-details.html" class="primary-link"><h5 class="fs-17 mb-1">Diseñador Gráfico</h5></a>
                                                <p class="text-muted"></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-success-subtle text-success  fs-13 mt-1">$350/ Mes</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-primary-subtle text-primary  fs-13 mt-1">Mín. 0.6 Año</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="job-grid-content mt-3">
                                                <p class="text-muted">Como diseñador de productos, trabajarás dentro de un Equipo de Entrega de Productos fusionado con talento de UX, ingeniería, producto y datos.</p>
                                                <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
                                                    <p class="text-muted float-start mb-0">Hace 2 días</p>
                                                    <div class="text-end">
                                                        <a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary">Aplica ya <i class="uil uil-angle-right-b"></i></a>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div><!--end card-body-->
                                    </div><!--end job-grid-box-->
                                </div><!--end col-->
                                
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="card job-grid-box bookmark-post">
                                        <div class="card-body p-4">
                                            <div>
                                                <a href="company-details.html"><img src="assets/images/featured-job/img-06.png" alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="job-details.html" class="primary-link"><h5 class="fs-17 mb-1">Gerente de Tienda</h5></a>
                                                <p class="text-muted"></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-success-subtle text-success fs-13 mt-1">$950/ Mes</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-primary-subtle text-primary  fs-13 mt-1">Mín. 1.5 Años</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="job-grid-content mt-3">
                                                <p class="text-muted">Como diseñador de productos, trabajarás dentro de un Equipo de Entrega de Productos fusionado con talento de UX, ingeniería, producto y datos.</p>
                                                <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
                                                    <p class="text-muted float-start mb-0">Hace 2 días</p>
                                                    <div class="text-end">
                                                        <a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary">Aplica ya <i class="uil uil-angle-right-b"></i></a>
                                                    </div>
                                                </div>
                                            </div><!--end job-grid-content-->
                                        </div><!--end card-body-->
                                    </div><!--end job-grid-box-->
                                </div><!--end col-->
                                
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="card job-grid-box bookmark-post">
                                        <div class="card-body p-4">
                                            <div>
                                                <a href="company-details.html"><img src="assets/images/featured-job/img-07.png" alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="job-details.html" class="primary-link"><h5 class="fs-17 mb-1">Diseñador de Productos</h5></a>
                                                <p class="text-muted"></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-success-subtle text-success fs-13 mt-1">$750/ Mes</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-primary-subtle text-primary  fs-13 mt-1">Mín. 1 Año</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="job-grid-content mt-3">
                                                <p class="text-muted">Como diseñador de productos, trabajarás dentro de un Equipo de Entrega de Productos fusionado con talento de UX, ingeniería, producto y datos.</p>
                                                <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
                                                    <p class="text-muted float-start mb-0">Hace 1 hora</p>
                                                    <div class="text-end">
                                                        <a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary">Aplica ya <i class="uil uil-angle-right-b"></i></a>
                                                    </div>
                                                </div>
                                            </div><!--end job-grid-content-->  
                                        </div><!--end card-body-->
                                    </div><!--end job-grid-box-->
                                </div><!--end col-->
                                
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="card job-grid-box">
                                        <div class="card-body p-4">
                                            <div>
                                                <a href="company-details.html"><img src="assets/images/featured-job/img-08.png" alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="job-details.html" class="primary-link"><h5 class="fs-17 mb-1">Asociado de Negocios</h5></a>
                                                <p class="text-muted"></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-success-subtle text-success  fs-13 mt-1">$780/ Mes</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-primary-subtle text-primary fs-13 mt-1">Mín. 1 Año</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="job-grid-content mt-3">
                                                <p class="text-muted">Como diseñador de productos, trabajarás dentro de un Equipo de Entrega de Productos fusionado con talento de UX, ingeniería, producto y datos.</p>
                                                <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
                                                    <p class="text-muted float-start mb-0">Hace 2 días</p>
                                                    <div class="text-end">
                                                        <a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary">Aplica ya <i class="uil uil-angle-right-b"></i></a>
                                                    </div>
                                                </div>
                                            </div><!--end job-grid-content-->  
                                        </div><!--end card-body-->
                                    </div><!--end job-grid-box-->
                                </div><!--end col-->
                                
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="card job-grid-box">
                                        <div class="card-body p-4">
                                            <div>
                                                <a href="company-details.html"><img src="assets/images/featured-job/img-09.png" alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="job-details.html" class="primary-link"><h5 class="fs-17 mb-1">Especialista en Ventas de Productos</h5></a>
                                                <p class="text-muted"></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-success-subtle text-success fs-13 mt-1">$780/ Mes</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge bg-primary-subtle text-primary fs-13 mt-1">Mín. 1 Año</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="job-grid-content mt-3">
                                                <p class="text-muted">Como diseñador de productos, trabajarás dentro de un Equipo de Entrega de Productos fusionado con talento de UX, ingeniería, producto y datos.</p>
                                                <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
                                                    <p class="text-muted float-start mb-0">Hace 2 días</p>
                                                    <div class="text-end">
                                                        <a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary">Aplica ya <i class="uil uil-angle-right-b"></i></a>
                                                    </div>
                                                </div>
                                            </div><!--end job-grid-content-->  
                                        </div><!--end card-body-->
                                    </div><!--end job-grid-box-->
                                </div><!--end col-->
                                    

                            <div class="row">
                                <div class="col-lg-12 mt-5">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination job-pagination mb-0 justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                    <i class="mdi mdi-chevron-double-left fs-15"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
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
                    <!-- END JOB-GRID -->

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
                                        <label for="nameControlInput" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="nameControlInput" placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailControlInput2" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="emailControlInput2" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="messageControlTextarea" class="form-label">Message</label>
                                        <textarea class="form-control" id="messageControlTextarea" rows="4" placeholder="Enter your message"></textarea>
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


        <!-- Choice Js -->
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>

        <script src="assets/js/app.js"></script>

        <script>
            var textRemove = new Choices(
            document.getElementById('choices-text-remove-button'),
                {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                }
            );
        </script>

    </body>
</html>