
<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
    <div class="container-fluid custom-container">
        <a class="navbar-brand text-dark fw-bold me-auto" href="index.html">
            <img src="{{ asset('assets/images/logo/LogoTalentia.png') }}" height="90" alt="" class="logo-dark" />
            <img src="{{ asset('assets/images/logo/LogoTalentia.png') }}" height="90" alt="" class="logo-light" />
        </a>
        <div>
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center">
              
                <li class="nav-item">
                    <a href="{{ route('principal') }}" class="nav-link">INICIO</a>
                    
                </li><!--end dropdown-->
              
                <li class="nav-item">
                    <a href="{{ route('job-grid') }}"  class="nav-link">VACANTES</a>
                    
                </li><!--end dropdown-->
                
                <li class="nav-item">
                    <a href="{{ route('manage-jobs') }}" class="nav-link">MIS POSTULACIONES</a>
                </li>
            </ul><!--end navbar-nav-->
        </div>
        <!--end navabar-collapse-->
        <ul class="header-menu list-inline d-flex align-items-center mb-0">
            <li class="list-inline-item dropdown me-4">
                <a href="javascript:void(0)" class="header-item noti-icon position-relative" id="notification" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-bell fs-22"></i>
                    <div class="count position-absolute">3</div>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end p-0" aria-labelledby="notification">
                    <div class="notification-header border-bottom bg-light">
                        <h6 class="mb-1"> Notificaciones </h6>
                        <p class="text-muted fs-13 mb-0">Tienes 4 notificaciones sin leer</p>
                    </div>
                    <div class="notification-wrapper dropdown-scroll">
                        <a href="javascript:void(0)" class="text-dark notification-item d-block active">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs bg-primary text-white rounded-circle text-center">
                                        <i class="uil uil-user-check"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1 fs-14">22 verified registrations</h6>
                                    <p class="mb-0 fs-12 text-muted"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                        ago</span></p>
                                </div>
                            </div>
                        </a><!--end notification-item-->
                        <a href="javascript:void(0)" class="text-dark notification-item d-block">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <img src="assets/images/user/img-02.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1 fs-14">James Lemire</h6>
                                    <p class="text-muted fs-12 mb-0"><i class="mdi mdi-clock-outline"></i> <span>15 min
                                        ago</span></p>
                                </div>
                            </div>
                        </a><!--end notification-item-->
                        <a href="javascript:void(0)" class="text-dark notification-item d-block">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <img src="assets/images/featured-job/img-04.png" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1 fs-14">Applications has been approved</h6>
                                    <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i> <span>45 min
                                        ago</span></p>
                                </div>
                            </div>
                        </a><!--end notification-item-->
                        <a href="javascript:void(0)" class="text-dark notification-item d-block">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <img src="assets/images/user/img-01.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1 fs-14">Kevin Stewart</h6>
                                    <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i> <span>1 hour
                                        ago</span></p>
                                </div>
                            </div>
                        </a><!--end notification-item-->
                        <a href="javascript:void(0)" class="text-dark notification-item d-block">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <img src="assets/images/featured-job/img-01.png" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1 fs-15">Creative Agency</h6>
                                    <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i> <span>2 hour
                                        ago</span></p>
                                </div>
                            </div>
                        </a><!--end notification-item-->
                    </div><!--end notification-wrapper-->
                    <div class="notification-footer border-top text-center">
                        <a class="primary-link fs-13" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                        </a>
                    </div>
                </div>
            </li>
            <li class="list-inline-item dropdown">
                <a href="javascript:void(0)" class="header-item" id="userdropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="assets/images/profile.jpg" alt="mdo" width="35" height="35" class="rounded-circle me-1"> <span class="d-none d-md-inline-block fw-medium">Hola, Jansh</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                    <li><a class="dropdown-item" href="{{ route('profile') }}" >Mi Perfil</a></li>
                    <li><a class="dropdown-item" href="sign-out.html">CERRAR SESION</a></li>
                </ul>
            </li>
        </ul><!--end header-menu-->
    </div>
    <!--end container-->
</nav>
<!-- Navbar End -->


<!-- INICIO DEL MODAL DE REGISTRO -->
<div class="modal fade" id="registroModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <div class="position-absolute end-0 top-0 p-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="contenido-de-autenticacion">
                    <div class="w-100">
                        <div class="text-center mb-4">
                            <h5>Registrarse</h5>
                            <p class="text-muted">Regístrate y accede a todas las funciones de Jobcy</p>
                        </div>
                        <form action="#" class="formulario-de-autenticacion">
                            <div class="mb-3">
                                <label for="nombreDeUsuarioInput" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="nombreDeUsuarioInput" placeholder="Ingresa tu nombre de usuario">
                            </div>
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="Ingresa tu correo electrónico">
                            </div>
                            <div class="mb-3">
                                <label for="contrasenaInput" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="contrasenaInput" placeholder="Contraseña">
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Acepto los <a href="javascript:void(0)" class="text-primary form-text text-decoration-underline">Términos y condiciones</a></label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                            </div>
                        </form>
                        <div class="mt-3 text-center">
                            <p class="mb-0">¿Ya eres miembro? <a href="iniciar-sesion.html" class="form-text text-primary text-decoration-underline">Iniciar Sesión</a></p>
                        </div>
                    </div>
                </div>
            </div><!--fin del cuerpo del modal-->
        </div><!--fin del contenido del modal-->
    </div><!--fin del diálogo del modal-->
</div>
<!-- FIN DEL MODAL DE REGISTRO -->
