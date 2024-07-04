
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
                <h4 class="card-title">Lista de Empresas Registradas</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="table-search">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Razon</th>
                                <th>Ubicación</th>
                                <th>Sector</th>
                                <th>Fecha</th>
                                <th>Pagina Web</th>
                                <th>Telefono</th>
                                <th>Sector</th>
                                <th>Convenio</th>
                                <th>Interes</th>
                                <th>Egresado</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td>Empresa 1</td>
                                <td>Ciudad A</td>
                                <td>Tecnología</td>
                                <td>2023-09-15</td>
                                <td>Juan Pérez</td>
                                <td>juan@empresa1.com</td>
                                <td>123-456-7890</td>
                                <td>www.empresa1.com</td>
                                <td>Empresa de desarrollo de software</td>
                                <td>
                                    <span class="badge bg-success">Activa</span>
                                </td>
                            </tr> --}}
                            @foreach ($activas as $empresa)
                                <tr>
                                    <td>{{ $empresa->tipo }}</td>
                                    <td>{{ $empresa->razon_social }}</td>
                                    <td>{{ $empresa->ubicacion_fisica }}</td>
                                    <td>{{ $empresa->sector }}</td>
                                    <td>{{ $empresa->created_at }}</td>
                                    <td>{{ $empresa->pagina_web }}</td>
                                    <td>{{ $empresa->telefono }}</td>
                                    <td>{{ $empresa->sector }}</td>
                                    <td>{{ $empresa->convenio_vigente }}</td>
                                    <td>{{ $empresa->interesa_convenio }}</td>
                                    <td>{{ $empresa->egresado_umx }}</td>
                                    <td>
                                        <form action="{{ route('empresas.desactivar', ['id' => $empresa->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-danger">Inactivar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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