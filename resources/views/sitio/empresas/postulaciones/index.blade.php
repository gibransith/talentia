@extends('sitio.layouts.master')

@section('title')
Postulaciones vacante
@endsection

@section('css')
@endsection

@section('content')
    @include('sitio.common.page-title',[
        'titulo' => 'Postulaciones vacante'
    ])

    <!-- START JOB-GRID -->
    <section class="section">
        <div class="container">
            <div class="row">
                <h5  class="border-bottom">{{ $vacante->nombre }}</h5>
                @include('sitio.empresas.postulaciones.table')
            </div>
        </div><!--end container-->
    </section>
    <!-- END JOB-GRID -->
@endsection

@section('script')
@endsection