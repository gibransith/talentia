<?php
use App\Models\ConfiguracionGeneral;
?>
@extends('admin.layouts.master')

@section('css')
    <link href="{{ URL::asset('admin-assets/assets/libs/gridjs/gridjs.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('title') Empresas @endsection

@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('admin.components.breadcrumb')
            @slot('li_1') Empresas @endslot
            @slot('title') Empresas @endslot
        @endcomponent
    @endsection

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Empresas</h4>
                <?php
                    $ruta = route('admin.configuracion.actualizar');
                ?>
                <div class=" justify-content-between d-flex align-items-center">
                    <label for="switch3">Auto aceptar empresas</label> &nbsp;&nbsp;
                    <input type="checkbox" id="switch3" name="autoaceptar" switch="bool" {{ $configuracion->valor === 'Si' ? 'checked' : '' }}
                    onchange="switchFunction($(this),'{{ $ruta }}','autoaceptar','{{  ConfiguracionGeneral::ACEPTAR_EMPRESAS_SI }}','{{ ConfiguracionGeneral::ACEPTAR_EMPRESAS_NO }}')"
                    >
                    <label for="switch3" data-on-label="Si" data-off-label="No" class="mb-0"></label>
                </div>
            </div><!-- end card header -->
            <div class="card-body">
                @include('admin.empresas.table')
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
