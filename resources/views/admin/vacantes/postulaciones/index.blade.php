<?php
use App\Models\ConfiguracionGeneral;
?>
@extends('admin.layouts.master')

@section('css')
    <link href="{{ URL::asset('admin-assets/assets/libs/gridjs/gridjs.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('title') Postulaciones Vacante {{ $vacante->nombre }} @endsection

@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('admin.components.breadcrumb')
            @slot('li_1') Vacantes @endslot
            @slot('title') Postulaciones Vacante @endslot
        @endcomponent
    @endsection

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Postulaciones Vacante "{{ $vacante->nombre }}"</h4>
            </div><!-- end card header -->
            <div class="card-body">
                @include('admin.vacantes.postulaciones.table')
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

@endsection

@section('script')
<!-- gridjs js -->
<script src="{{ URL::asset('admin-assets/assets/libs/gridjs/gridjs.min.js') }}"></script>
<script src="{{ URL::asset('js/tablaGeneral.js') }}"></script>
@endsection
