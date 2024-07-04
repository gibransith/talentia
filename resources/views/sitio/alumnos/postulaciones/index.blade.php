@extends('sitio.layouts.master')

@section('title')
Mis postulaciones
@endsection

@section('css')
    <link href="{{ URL::asset('admin-assets/assets/libs/gridjs/gridjs.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @include('sitio.common.page-title',[
        'titulo' => 'Mis postulaciones'
    ])

    <!-- START JOB-GRID -->
    <section class="section">
        <div class="container">
            <div class="row">
                @include('sitio.alumnos.postulaciones.table')
            </div>
        </div><!--end container-->
    </section>
    <!-- END JOB-GRID -->
@endsection

@section('script')
    <!-- gridjs js -->
    <script src="{{ URL::asset('admin-assets/assets/libs/gridjs/gridjs.min.js') }}"></script>
    <script src="{{ URL::asset('js/tablaGeneral.js') }}"></script>
@endsection
