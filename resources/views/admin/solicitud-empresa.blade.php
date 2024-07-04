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
                            <div class="col-12">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="card">
                                    <form method="POST" action="{{ route('configuracion.actualizar') }}">
                                        @csrf
                                        <div class="card-header justify-content-between d-flex align-items-center">
                                            <label for="switch3">Auto aceptar empresas</label> 
                                            <input type="checkbox" id="switch3" name="autoaceptar" switch="bool" {{ $configuracion->valor === 'SI' ? 'checked' : '' }}>
                                            <label for="switch3" data-on-label="SI" data-off-label="NO" class="mb-0"></label>
                                        </div><!-- end card header -->
                                    </form>
                                    
                                    
                                    <div class="card-body">      
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                
                                                    <tr class="table-active">
                                                        <th scope="col" style="width: 50%;">
                                                           Solicitudes Pendientes
                                                        </th>
                                                        <th scope="col" style="width: 50%;">
                                                           Fecha de solicitud
                                                        </th>
                                                        <th scope="col" class="text-center">
                                                            Opciones
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <!-- end thead -->
                                                <tbody>
                                                    
                                                    {{-- <tr>
                                                        <th scope="row">
                                                            A Basic Message
                                                        </th>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-success btn-sm" id="sa-basic">Aceptar</button>
                                                            <button type="button" class="btn btn-danger btn-sm" id="sa-basic">Rechazar</button>
                                                            <button type="button" class="btn btn-warning btn-sm" id="sa-basic">Ver</button>
                                                        </td>
                                                    </tr> --}}
                                                    @foreach ($pendientes as $pendiente)
                                                        <tr>
                                                            <td scope="col" class="">{{ $pendiente->razon_social }}</td>
                                                            <td scope="col" class="">{{ $pendiente->created_at }}</td>
                                                            <td scope="col" class="text-center">
                                                                @if ($pendiente->estado_registro === 'P')
                                                                    <div class="btn-group">
                                                                        <form method="POST" action="{{ route('solicitud.aceptar', ['id' => $pendiente->id]) }}">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-success mx-2">Aceptar</button>
                                                                        </form>
                                                                        <form method="POST" action="{{ route('solicitud.rechazar', ['id' => $pendiente->id]) }}">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-danger mx-2">Rechazar</button>
                                                                        </form>
                                                                        <form action="">
                                                                            <button type="button" class="btn btn-warning mx-2" data-toggle="modal" data-target="#modalInfo{{ $pendiente->id }}">Ver</button>
                                                                        </form>
                                                                    </div>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <!-- end tbody -->
                                            </table>
                                            <!-- end table -->

                                            @foreach ($pendientes as $pendiente)
                                                <div class="modal fade" id="modalInfo{{ $pendiente->id }}" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel{{ $pendiente->id }}">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalInfoLabel{{ $pendiente->id }}">Información</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Tipo</th>
                                                                            <th>{{ $pendiente->tipo }}</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Nombre</th>
                                                                            <th>{{ $pendiente->razon_social }}</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Descripcion</td>
                                                                            <td>{{ $pendiente->descripcion }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Pagina Web</td>
                                                                            <td>{{ $pendiente->pagina_web }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Telefono</td>
                                                                            <td>{{ $pendiente->telefono }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ubicacion Fisica</td>
                                                                            <td>{{ $pendiente->ubicacion_fisica }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sector</td>
                                                                            <td>{{ $pendiente->sector }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Num. Empleados</td>
                                                                            <td>{{ $pendiente->num_empleados }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Perfil en Linkedin</td>
                                                                            <td>{{ $pendiente->perfil_linkedin }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Convenio Vigente</td>
                                                                            <td>{{ $pendiente->convenio_vigente }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Interesa Convenio</td>
                                                                            <td>{{ $pendiente->interesa_convenio }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Egresado UMX</td>
                                                                            <td>{{ $pendiente->egresado_umx }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Convenio Vigente</td>
                                                                            <td>{{ $pendiente->convenio_vigente }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Fecha de Registro</td>
                                                                            <td>{{ $pendiente->created_at }}</td>
                                                                        </tr>
                                                                        <!-- Agrega más filas según tus necesidades -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                @if ($pendiente->estado_registro === 'P')
                                                                    <div class="btn-group">
                                                                        <form method="POST" action="{{ route('solicitud.aceptar', ['id' => $pendiente->id]) }}">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-success mx-2">Aceptar</button>
                                                                        </form>
                                                                        <form method="POST" action="{{ route('solicitud.rechazar', ['id' => $pendiente->id]) }}">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-danger mx-2">Rechazar</button>
                                                                        </form>
                                                                        <form action="">
                                                                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">Cerrar</button>
                                                                        </form>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            @endforeach
                                        </div>
                                        <!-- end table responsive -->
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div><!-- End Page-content -->

                
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
    
       <script>
            document.getElementById('switch3').addEventListener('change', function() {
                const nuevoEstado = this.checked ? 'SI' : 'NO';
        
                // Enviar una solicitud AJAX para actualizar la configuración
                fetch("{{ route('configuracion.actualizar') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ autoaceptar: nuevoEstado }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Actualización exitosa, recargar la página
                        location.reload();
                    } else {
                        // Manejar errores si es necesario
                        console.error('Error al actualizar la configuración');
                    }
                })
                .catch(error => {
                    console.error('Error en la solicitud AJAX', error);
                });
            });
        </script>
    
    
       <!-- apexcharts -->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script src="{{ URL::asset('admin-assets/assets/js/bootstrap.bundle.min.js') }}"></script>
       
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