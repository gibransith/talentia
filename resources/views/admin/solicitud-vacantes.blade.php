
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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Solicitudes de vacantes</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="table-search">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre de la Empresa</th>
                                <th>Responsabilidades</th>
                                <th>Industria</th>
                                <th>Fecha de publicacion</th>
                                <th>Contacto</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Sitio Web</th>
                                <th>Descripción</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Empresa 1</td>
                                <td>Ciudad A</td>
                                <td>Tecnología</td>
                                <td>2023-09-15</td>
                                <td>Juan Pérez</td>
                                <td>juan@empresa1.com</td>
                                <td>123-456-7890</td>
                                <td>www.empresa1.com</td>
                                <td>Empresa de desarrollo de software</td>
                                
                            </tr>
                            <tr>
                                <td>Empresa 2</td>
                                <td>Ciudad B</td>
                                <td>Salud</td>
                                <td>2023-09-14</td>
                                <td>Maria Rodríguez</td>
                                <td>maria@empresa2.com</td>
                                <td>987-654-3210</td>
                                <td>www.empresa2.com</td>
                                <td>Proveedor de servicios de salud</td>
                                
                            </tr>
                            <!-- Puedes agregar más filas para otras empresas registradas -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->


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