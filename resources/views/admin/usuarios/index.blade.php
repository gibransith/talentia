<?php
use App\Models\ConfiguracionGeneral;
?>
@extends('admin.layouts.master')

@section('css')
    <link href="{{ URL::asset('admin-assets/assets/libs/gridjs/gridjs.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('title') Usuarios @endsection

@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('admin.components.breadcrumb')
            @slot('li_1') Usuarios @endslot
            @slot('title') Usuarios @endslot
        @endcomponent
    @endsection

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Usuarios</h4>
                <p class="text-end">
                	<button type="button" class="btn btn-primary btn-icon m-1" onclick="cargaDlg('Nuevo usuario administrador','{{ $rutaNew }}','modal-md')">
                		<span class="ul-btn__icon"><i class="i-Add"></i></span>
                		<span class="ul-btn__text">Nuevo</span>
                	</button>
                </p>
            </div><!-- end card header -->
            <div class="card-body">
                @include('admin.usuarios.table')
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
