
@extends('admin.layouts.master')
@section('title')
@endsection
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('admin.components.breadcrumb')
            @slot('li_1') Dashboard @endslot
            @slot('title') Bienvenido Christian ! @endslot
        @endcomponent
    @endsection
@section('content')
            
            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="product-detail">
                                                    <div class="product-wishlist">
                                                        <a href="#">
                                                            <i class="mdi mdi-heart-outline"></i>
                                                        </a>
                                                    </div>
                                                    <div class="swiper product-thumbnail-slider rounded border overflow-hidden position-relative">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"><img src="{{URL::asset ('admin-assets/assets/images/logo.jpg')}}"  alt="50" class="img-fluid d-block" /></div>
                                                            
                                                        </div>
                                                        
                                                       <div class="d-none d-md-block">
                                                            <div class="swiper-button-next"><i class="mdi mdi-arrow-right"></i></div>
                                                            <div class="swiper-button-prev"><i class="mdi mdi-arrow-left"></i></div>
                                                       </div>
                                                    </div>

                                                    <div class="mt-4">
                                                        <div class="swiper product-nav-slider mt-2 overflow-hidden">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide rounded">
                                                                    <div class="nav-slide-item"><img src="assets/images/product/img-1.png" alt="" class="img-fluid d-block" /></div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="nav-slide-item"><img src="assets/images/product/img-2.png" alt="" class="img-fluid d-block" /></div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="nav-slide-item"><img src="assets/images/product/img-3.png" alt="" class="img-fluid d-block" /></div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="nav-slide-item"><img src="assets/images/product/img-6.png" alt="" class="img-fluid d-block" /></div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="nav-slide-item"><img src="assets/images/product/img-5.png" alt="" class="img-fluid d-block" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="mt-4 mt-xl-3 ps-xl-4">
                                                    <h5 class="font-size-14"><a href="#" class="text-muted">Nike</a></h5>
                                                    <h5 class="mt-1">
                                                        <a href="" class="text-reset lh-base">Nombre de empresa</a>
                                                    </h5>

                                                    <div class="text-muted">
                                                        <span class="badge bg-success-subtle text-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span> 234 Reviews
                                                    </div>

                                                    <h5 class="font-size-20 mt-4 pt-2"> Salario $26000 Mensuales </h5>

                                                    <p class="mt-4 text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular</p>

                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mt-3">
                                                                    
                                                                    <h5 class="font-size-14">Resposabilidades :</h5>
                                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Ejemplo</li>
                                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Ejemplo</li>
                                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Ejemplo</li>
                                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Ejmplo</li>
                                                                    </ul>
                                                                      
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mt-3">
                                                                    <h5 class="font-size-14">Habilidades y experiencia :</h5>
                                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                                        <li><i class="bx bx-log-in-circle text-primary me-1"></i> 10 Days Replacement</li>
                                                                        <li><i class="bx bx-dollar-circle text-primary me-1"></i> Cash on Delivery available</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="col-md-6">
                                                                <div class="mt-3">
                                                                    <h5 class="font-size-14">Carrera Profesional :</h5>
                                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                                        <li><i class="bx bx-log-in-circle text-primary me-1"></i> 10 Days Replacement</li>
                                                                        <li><i class="bx bx-dollar-circle text-primary me-1"></i> Cash on Delivery available</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                                    
                                                            <h5 class="font-size-14 mb-3"><i class=" font-size-20 text-primary align-middle me-2"></i>Fecha de publicacion :</h5>
                                                            <h5 class="font-size-14 mb-3"><i class=" font-size-20 text-primary align-middle me-2"></i>Fecha fin de publicacion :</h5>
                                                            <h5 class="font-size-14 mb-3"><i class="bx bx-map-pin font-size-20 text-primary align-middle me-2"></i>Localizacion</h5>
                                                            <button type="button" class="btn btn-success btn-sm" id="sa-basic">Aceptar</button>
                                                            <button type="button" class="btn btn-danger btn-sm" id="sa-basic">Rechazar</button>
                                                            
                                                            <div class="d-inline-flex">
                                                            
                                                                
                                                            </div>
                                                              
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-7 col-sm-8">
                                                                
                                                            </div>

                                                            <div class="col-lg-5 col-sm-4">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-xl-8">
                                                <div class="mt-4 pt-3">
                                                   
                                                    </div>
                                                   
                                                   
                                                </div>
                                            </div>

                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                 <!-- sample modal content -->
                 <div id="color-img" class="modal fade" tabindex="-1" aria-labelledby="color-imgLabel" aria-hidden="true" data-bs-scroll="true">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="color-imgLabel">Product Images</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="product-desc-color">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="active" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Gray">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-1.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dark">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-2.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Purple">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-3.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sky">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-4.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Green">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-5.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="White">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-6.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                              
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Vuesy.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center p-3">

                    <h5 class="m-0 me-2">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <div id="sidebar-setting">
                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                    <h6 class="mt-4 mb-3">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

         <!-- Right bar overlay-->
 <div class="rightbar-overlay"></div>

      

 @endsection

 @section('script')
 <!-- apexcharts -->
 
 <script src="{{ URL::asset('admin-assets/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
 <!-- Vector map-->
 <script src="{{ URL::asset('admin-assets/assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
 <script src="{{ URL::asset('admin-assets/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
 <!-- swiper js -->
 <script src="{{ URL::asset('admin-assets/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ URL::asset('admin-assets/assets/js/pages/dashboard.init.js') }}"></script>
 
 <script src="{{ URL::asset('admin-assets/assets/js/app.js') }}"></script>
 
 @endsection
</body>
</html>