<!-- Begin page -->
<div>


    <div class="main-content">

        <div class="page-content">

            <!-- START SIGN-UP -->
            <section class="bg-auth">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-12">
                            <div class="card auth-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 text-center">
                                        <div class="card-body p-4">
                                            <a href="index.html">
                                                <img src="{{ asset('assets/images/logo/logo_UMx.png') }}"
                                                    alt="" class="logo-light">
                                                <img src="{{ asset('assets/images/logo/logo_UMx.png') }}" alt="" class="logo-dark">
                                            </a>
                                            <div class="mt-5">
                                                <img src="assets/images/auth/sign-up.png" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="auth-content card-body p-5 text-white">
                                            <div class="w-100">
                                                <div class="text-center">
                                                    <h5>Empecemos</h5>
                                                    <p class="text-white-70">Introduce los datos de la empresa para
                                                        enviarle una invitacion</p>
                                                </div>
                                                <form action="index.html" class="auth-form">
                                                    <div class="mb-3">
                                                        <label for="usernameInput" class="form-label">Nombre de la
                                                            empresa</label>
                                                        <input type="text" class="form-control" required
                                                            id="usernameInput" placeholder="Enter your username">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="passwordInput" class="form-label">Correo
                                                            electrónico</label>
                                                        <input type="email" class="form-control" required
                                                            id="emailInput" placeholder="Enter your email">
                                                    </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-white btn-hover w-100">Enviar invitación
                                                    </buttom>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end auth-box-->
                    </div><!--end col-->
                </div><!--end row-->
        </div><!--end container-->
        </section>
        <!-- END SIGN-UP -->

    </div>
    <!-- End Page-content -->

</div>
<!-- end main content-->