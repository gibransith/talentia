@include("layouts/main")

    <head>
        
        @include("layouts/title-meta")

        <!-- Choise Css -->
        <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">

        @include("layouts/head-css")

    </head>

    @include("layouts/body")

        <!-- Begin page -->
        <div>

            @include("layouts/topbar")

            
            <div class="main-content">

                <div class="page-content">

                    <!-- Start home -->
<section class="page-title-box">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h3 class="mb-4"></h3>
                    <div class="page-next">
                        <nav class="d-inline-block" aria-label="breadcrumb text-center">
                            <ol class="breadcrumb justify-content-center">
                                MIS POSTULACIONES
                            </ol>
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

                    <!-- START MANAGE-JOBS -->
                    <section class="section">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <div class="candidate-list-widgets">
                                        <div class="row">
                                            <div class="col-lg-6">
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="selection-widget mt-2 mt-lg-0">
                                                    <select class="form-select" data-trigger name="choices-candidate-page" id="choices-candidate-page" aria-label="Default select example">
                                                        <option value="df">Mostrar Todas</option>
                                                        <option value="ne">Los ultimas semanas</option>
                                                        <option value="ne">Los ultimos 2 meses</option>
                                                        <option value="ne">Los ultimos 6 meses</option>
                                                        <option value="ne">Los ultimos 2 años</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end candidate-list-widgets-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="job-box card mt-4">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <a href="company-details"><img src="assets/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                                </div><!--end col-->
                                                <div class="col-lg-9">
                                                    <div class="mt-3 mt-lg-0">
                                                        <h5 class="fs-17 mb-1"><a href="job-details" class="text-dark">Socio de negocios</a></h5>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"></p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> CDMX</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $2500 - $18000 / mensuales</p>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-2">
                                                            <span class="badge danger-bg-subtle mt-1">Medio Tiempo</span>
                                                            <span class="badge warning-bg-subtle mt-1">Urge Contratar</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-2 align-self-center">
                                                    <ul class="list-inline mt-3 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="manage-jobs-post" class="avatar-sm success-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"  class="avatar-sm danger-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-trash-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div><!--end job-box-->
                                    <div class="job-box card mt-4">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <a href="company-details"><img src="assets/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                                </div><!--end col-->
                                                <div class="col-lg-9">
                                                    <div class="mt-3 mt-lg-0">
                                                        <h5 class="fs-17 mb-1"><a href="job-details" class="text-dark">Estudiante de Marketing </a> <small class="text-muted fw-normal">(2-4 Yrs Exp.)</small></h5>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0">Diseñador digital</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>CDMX</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $2500 - $8000 / mensuales</p>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-2">
                                                            <span class="badge danger-bg-subtle mt-1">Medio Tiempo</span>
                                                            <span class="badge info-bg-subtle mt-1">Empresa Privada</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-2 align-self-center">
                                                    <ul class="list-inline mt-3 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="manage-jobs-post" class="avatar-sm success-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"  class="avatar-sm danger-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-trash-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div><!--end job-box-->
                                    <div class="job-box card mt-4">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <a href="company-details"><img src="assets/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                                </div><!--end col-->
                                                <div class="col-lg-9">
                                                    <div class="mt-3 mt-lg-0">
                                                        <h5 class="fs-17 mb-1"><a href="job-details" class="text-dark">HTML Developer</a> <small class="text-muted fw-normal">(2-4 Yrs Exp.)</small></h5>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"></p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> CDMX</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / mensuales</p>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-2">
                                                            <span class="badge bg-soft-purple mt-1">Freelancer Estudiante</span>
                                                            <span class="badge primary-bg-subtle mt-1">Practicante</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-2 align-self-center">
                                                    <ul class="list-inline mt-3 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="manage-jobs-post" class="avatar-sm success-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"  class="avatar-sm danger-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-trash-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div><!--end job-box-->
                                    <div class="job-box card mt-4">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <a href="company-details"><img src="assets/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                                </div><!--end col-->
                                                <div class="col-lg-9">
                                                    <div class="mt-3 mt-lg-0">
                                                        <h5 class="fs-17 mb-1"><a href="job-details" class="text-dark">Estudiante de administracion</a> <small class="text-muted fw-normal">(5+ Yrs Exp.)</small></h5>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"></p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> CDMX</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / mensuales</p>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-2">
                                                            <span class="badge success-bg-subtle mt-1">Tiempo completo</span>
                                                            <span class="badge info-bg-subtle mt-1">Empresa Privada</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-2 align-self-center">
                                                    <ul class="list-inline mt-3 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="manage-jobs-post" class="avatar-sm success-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"  class="avatar-sm danger-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-trash-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div><!--end job-box-->
                                    <div class="job-box card mt-4">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <a href="company-details"><img src="assets/images/featured-job/img-05.png" alt="" class="img-fluid rounded-3"></a>
                                                </div><!--end col-->
                                                <div class="col-lg-9">
                                                    <div class="mt-3 mt-lg-0">
                                                        <h5 class="fs-17 mb-1"><a href="job-details" class="text-dark">Diseñador</a> <small class="text-muted fw-normal">(0-5 Yrs Exp.)</small></h5>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0">Diseñador digital</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> CDMX</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / mensuales</p>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-2">
                                                            <span class="badge primary-bg-subtle mt-1">Practicante</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-2 align-self-center">
                                                    <ul class="list-inline mt-3 mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="manage-jobs-post" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="avatar-sm success-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"  class="avatar-sm danger-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-trash-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div><!--end job-box-->
                                    <div class="job-box card mt-4">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <a href="company-details"><img src="assets/images/featured-job/img-06.png" alt="" class="img-fluid rounded-3"></a>
                                                </div><!--end col-->
                                                <div class="col-lg-9">
                                                    <div class="mt-3 mt-lg-0">
                                                        <h5 class="fs-17 mb-1"><a href="job-details" class="text-dark">Estudiante de administracion de empresas</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"></p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> CDMX</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / mensuales</p>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-2">
                                                            <span class="badge success-bg-subtle mt-1">Tiempo completo</span>
                                                            <span class="badge warning-bg-subtle mt-1">Urge Contratar</span>
                                                            <span class="badge info-bg-subtle mt-1">Empresa Privada</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-2 align-self-center">
                                                    <ul class="list-inline mt-3 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="manage-jobs-post" class="avatar-sm success-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"  class="avatar-sm danger-bg-subtle d-inline-block text-center rounded-circle fs-18">
                                                                <i class="uil uil-trash-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div><!--end job-box-->
                                </div><!--end col-->    
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-lg-12 mt-4 pt-2">
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
                            </div><!--end row-->
                        </div><!--end container-->
                    </section>
                    <!-- END MANAGE-JOBS -->

                    <!-- DELETE Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Delete Jobs ?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <h6 class="text-danger"><i class="uil uil-exclamation-triangle"></i> Warning: Are you sure you want to delete job Post ?</h6>
                                        <p class="text-muted"> Your jobs post will be permenently removed and you won't be able to see them again, including the once you're shared with your friends.</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger btn-sm">Yes, delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END DELETE MODAL -->

                </div>
                <!-- End Page-content -->

                @include("layouts/footer")

                @include("layouts/switcher")
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include("layouts/vendor-scripts")

        <!-- Choice Js -->
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

        <!-- Candidate Init Js -->
        <script src="assets/js/pages/candidate.init.js"></script>

        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>