@extends('sitio.layouts.master')

@section('title')
Vacantes
@endsection

@section('css')
    <link href="{{ URL::asset('admin-assets/assets/libs/gridjs/gridjs.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @include('sitio.common.page-title',[
        'titulo' => 'Vacantes'
    ])

    <div class="container">
        <p class="text-end">
            <a type="button" class="btn btn-primary btn-icon m-1" href="{{ route('empresa.vacantes.create') }}">
                <span class="ul-btn__icon"><i class="i-Add"></i></span>
                <span class="ul-btn__text">Nueva vacante</span>
            </a>
        </p>
    </div>

    <!-- START JOB-GRID -->
    <section class="section">
        <div class="container">
            <div class="row">
                @include('sitio.empresas.vacantes.table')
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