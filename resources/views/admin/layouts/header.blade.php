<?php
use App\Http\Controllers\ConfigSistema;

$user = Auth::user();
$info = ConfigSistema::getInfo();
?>
<header id="page-topbar" style="background-color: red !important;">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('admin.index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        {{-- <img src="{{URL::asset('admin-assets/assets/images/logo_UMx.png')}}" alt="" height="26"> --}}
                    </span>
                    <span class="logo-lg">
                        {{-- <img src="{{URL::asset('admin-assets/assets/images/LogoTalentia.png')}}" alt="" height="26">  --}}
                        <span class="logo-txt">Talentia</span>
                    </span>
                </a>
                <a href="{{ route('admin.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        {{-- <img src="{{URL::asset('admin-assets/assets/images/LogoTalentia.png')}}" alt="" height="26"> --}}
                    </span>
                    <span class="logo-lg">
                        {{-- <img src="{{URL::asset('admin-assets/assets/images/logo_UMx.png')}}" alt="" height="26">  --}}
                        <span class="logo-txt">Talentia</span>
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" id="horimenu-btn" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <div class="topnav">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin.index') }}" >
                                    <i class="bx bx-home-circle icon"></i>
                                    <span data-key="t-dashboard">Inicio</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin.usuarios.index') }}" >
                                    <i class="uil-users"></i>
                                    <span data-key="t-dashboard">Usuarios</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin.empresas.index') }}" >
                                    <i class="uil-building"></i>
                                    <span data-key="t-dashboard">Empresas</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin.vacantes.index') }}" >
                                    <i class="fas fa-address-card"></i>
                                    <span data-key="t-dashboard">Vacantes</span>
                                </a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                    <i class="fas fa-address-card"></i>
                                    <span data-key="t-apps">Vacantes</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                    <div class="menu-title">Vacantes </div>
                                    <a href="{{ route('solicitud-vacantes') }}" class="dropdown-item" data-key="t-calendar">Solicitud de Vacantes</a>
                                    <a href="{{ route('vacantes-publicadas') }}" class="dropdown-item" data-key="t-chat">Vacantes Publicadas</a>
                                </div>
                            </li>
                            --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                                    <i class="far fa-file-alt"></i>
                                    <span data-key="t-components">Reportes</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                    <div class="menu-title">Reportes </div>
                                    <a href="{{ route('admin.reportes.estudiantes') }}" class="dropdown-item" data-key="t-calendar">Estudiantes</a>
                                    <a href="{{ route('admin.reportes.vacantes') }}" class="dropdown-item" data-key="t-chat">Vacantes</a>
                                    <a href="{{ route('admin.reportes.empresas') }}" class="dropdown-item" data-key="t-chat">Empresas</a>
                                </div>
                            </li> 
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="d-flex">


            <div class="dropdown d-inline-block language-switch">
            </div>

            {{-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell icon-sm"></i>
                    <span class="noti-dot bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Notificaciones </h5>
                            </div>
                            <div class="col-auto">
                                <a href="javascript:void(0);" class="small"> Marcar todo como leido</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <h6 class="dropdown-header bg-light">Nuevo</h6>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{  URL::asset('admin-assets/assets/images/users/avatar-3.jpg') }}" class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Razon Social</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13"><span class="badge badge-soft-success">Review</span></p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i> <span>Ver más..</span>
                        </a>
                    </div>
                </div>
            </div> --}}

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ URL::asset('assets/images/avatar-default.png') }}" alt="Header Avatar">
                    <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                        <span class="user-name">{{ $user->nombre }}<i class="mdi mdi-chevron-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <h6 class="dropdown-header">{{ $user->nombre }}</h6>
                    {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Perfil</span></a> --}}
                    <div class="dropdown-divider"></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                        @csrf
                        <button type="submit" class="dropdown-item" href="auth-signout-cover"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Cerrar Sesión</span></button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="collapse show dash-content" id="dashtoggle" >
        <div class="container-fluid" >
            <!-- start page title -->
            <div class="row">
                {{-- <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Welcome !</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Welcome !</li>
                                    </ol>
                                </div>

                            </div>
                        </div> --}}
                @yield('breadcrumb')
            </div>

            {{-- @extends('components.breadcrumb') --}}
            <!-- end page title -->

            <!-- start dash info -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card dash-header-box shadow-none border-0">
                        <div class="card-body p-0">
                            <div class="row row-cols-xxl-6 row-cols-md-3 row-cols-1 g-0">
                                <div class="col">
                                    <div class="mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Alumnos Registrados </p>
                                        <h3 class="text-white mb-0">{{ $info['num_alumnos'] }}</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Empresas Activas</p>
                                        <h3 class="text-white mb-0">{{ $info['num_empresas'] }}</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Vacantes Abiertas</p>
                                        <h3 class="text-white mb-0">{{ $info['num_vacantes_abiertas'] }}</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Vacantes Cerradas</p>
                                        <h3 class="text-white mb-0">{{ $info['num_vacantes_cerradas'] }}</h3>
                                    </div>
                                </div><!-- end col -->

                            </div><!-- end row -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
            <!-- end dash info -->
        </div>
    </div>

    <!-- start dash troggle-icon -->
    <div>
        <a class="dash-troggle-icon" id="dash-troggle-icon" data-bs-toggle="collapse" href="#dashtoggle" aria-expanded="true" aria-controls="dashtoggle">
            <i class="bx bx-up-arrow-alt"></i>
        </a>
    </div>
    <!-- end dash troggle-icon -->

</header>

<div class="hori-overlay"></div>
