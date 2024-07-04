<!doctype html>
<html lang="en">
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


           


            <!-- START SIGN-UP MODAL -->
            <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-5">
                            <div class="position-absolute end-0 top-0 p-3">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="auth-content">
                                <div class="w-100">
                                    <div class="text-center mb-4">
                                        <h5>Registro</h5>
                                        <p class="text-muted">Formulario de solicitud </p>
                                    </div>
                                    <form action="#" class="auth-form">
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Usuario</label>
                                            <input type="text" class="form-control" id="usernameInput" placeholder="Enter your username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="passwordInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Yo estoy de acuerdo <a href="javascript:void(0)" class="text-primary form-text text-decoration-underline">Terms and conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                                        </div>
                                    </form>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0">Already a member ? <a href="sign-in.html" class="form-text text-primary text-decoration-underline"> Sign-in </a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end modal-body-->
                    </div><!--end modal-content-->
                </div><!--end modal-dialog-->
            </div>
            <!-- END SIGN-UP MODAL -->

            <div class="main-content">

                <div class="page-content">

                    <!-- Start home -->
                    <section class="page-title-box">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="text-center text-white">
                                        <div class="page-next">
                                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                                <h1>Publicar una vacante</h1>
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


                        <!-- START JOBS-POST-EDIT -->
                        <section class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="primary-bg-subtle p-3">
                                                <h5 class="mb-0 fs-17">Publicar una vacante</h5>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <form action="#" class="job-post-form shadow mt-4">                
                                    <div class="job-post-content box-shadow-md rounded-3 p-4"> 
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-4">
                                                    <label for="jobtitle" class="form-label">Titulo de vacante</label>
                                                    <input type="text" class="form-control" id="jobtitle" placeholder="Title">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-4">
                                                    <label for="jobdescription" class="form-label"> Descripcion de Vacante </label>
                                                    <textarea class="form-control" id="jobdescription" rows="3" placeholder="Enter Job Description"></textarea>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="email" class="form-label">Correo Electronico</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Correo Electronico">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="phoneNumber" class="form-label">Numero de Telefono</label>
                                                    <input type="number" class="form-control" id="phoneNumber" placeholder="Phone Number">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="jobtype" class="form-label">Tipo de vacante</label>
                                                    <input type="text" class="form-control" id="jobtype" placeholder="Job type">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="designation" class="form-label">Responsabilidades</label>
                                                    <input type="text" class="form-control" id="designation" placeholder="Designation">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="salary" class="form-label">Salario($)</label>
                                                    <input type="number" class="form-control" id="salary" placeholder="Salario">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="skills" class="form-label">Conocimientos Requeridos</label>
                                                    <input type="text" class="form-control" id="skills" placeholder="Job skills">
                                                </div>
                                            </div><!--end col-->
                                            
                                            <div class="col-lg-3">
                                                <div class="mb-4">
                                                    <label for="city" class="form-label">Ciudad</label>
                                                    <input type="text" class="form-control" id="city" placeholder="City">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-4">
                                                    <label for="zipcode" class="form-label">Codigo Postal</label>
                                                    <input type="text" class="form-control" id="zipcode" placeholder="Zipcode">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <a href="javascript:void(0)" class="btn btn-success">Atras</a>
                                                    <a href="javascript:void(0)" class="btn btn-primary">Enviar Solicitud de Publicacion <i class="mdi mdi-send"></i></a>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end job-post-content-->
                                </form>
                            </div><!--end container-->
                        </section>
                        <!-- END JOBS-POST-EDIT -->

                </div>
                <!-- End Page-content -->


                <!-- Style switcher -->
                <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
                    <div>
                        <h6>Select your color</h6>
                        <ul class="pattern list-unstyled mb-0">
                            <li>
                                <a class="color-list color1" href="javascript: void(0);" onclick="setColorGreen()"></a>
                            </li>
                            <li>
                                <a class="color-list color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                            </li>
                            <li>
                                <a class="color-list color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <h6>Light/dark Layout</h6>
                            <div class="text-center mt-3">
                                <!-- light-dark mode -->
                                <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                                    <i class="uil uil-brightness mode-dark mx-auto"></i>
                                    <i class="uil uil-moon mode-light"></i>
                                </a>
                                <!-- END light-dark Mode -->
                            </div>
                        </div>
                    </div>
                    <div class="bottom d-none d-md-block" >
                        <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
                    </div>
                </div>
                <!-- end switcher-->

                <!--start back-to-top-->
                <button onclick="topFunction()" id="back-to-top">
                    <i class="mdi mdi-arrow-up"></i>
                </button>
                <!--end back-to-top-->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


        <!-- Choice Js -->
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>