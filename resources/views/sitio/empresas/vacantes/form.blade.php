@extends('sitio.layouts.master')

<?php
use App\Http\Controllers\ConfigSistema;
use App\Models\Proyecto;
use App\Models\User;

	if(!isset($object)){
		$ruta = $rutaStore;
		$txtBtn = "Crear";
	}else{
		$ruta = $rutaUpdate;
		$txtBtn = "Editar";
	}
?>


@section('title')
Vacantes
@endsection

@section('css')
@endsection

@section('content')
@include('sitio.common.page-title',[
			        'titulo' => 'Vacantes'
			    ])
<section class="section">
	<div class="container">
    	<div class="row align-items-center ">
        	<div class="col-lg-12">	
        		<div class="section-title mt-4 mt-lg-0">
                	<h3 class="title">Nueva vacante</h3>		    
                </div>
				@if(!isset($object))
					{!! Form::open(
						[
							'method'=>'POST',
							'url' => $ruta,							
							'id' => 'formGeneral',
							'files' => false,
							'class' => '',
							'autocomplete' => 'off'
						])
					!!}
				@else
					{!! Form::model($object,
						[
							'method' => 'PUT',
							'url' => $ruta,							
							'id' => 'formGeneral',
							'files' => false,
							'class' => '',
							'autocomplete' => 'off'
						])
					!!}					
				@endif

					<div class="form row">
						<div class="col-md-6 form-group mb-3 has-validation">
							<label for="nombre">Nombre</label>						
							<?php $class = $errors->has('nombre')?'form-control is-invalid':'form-control' ?>
							{!! Form::text('nombre', old('nombre'), ['id' => 'nombre','class' => $class,'placeholder' => 'Nombre de la vacante', 'onblur' => '']) !!}
							@include('sitio.common.error-feedback-form',['field' => 'nombre'])
						</div>						
						<div class="col-md-6 form-group mb-3">
							<label class="form-label">Tipo de empleo</label>
							<?php
								$arr = ConfigSistema::tiposEmpleoVacante();
							?>
							{{ Form::select('tipo_empleo', $arr, (isset($object))?$object->tipo_empleo:old('tipo_empleo') , [
								'id' => 'tipo_empleo',
								'class' => 'form-select',
								'placeholder' => 'Seleccione una opción ...',
								'required' => 'required',
							]) }}
						</div> 
						<div class="col-md-12 form-group mb-3">
							<label for="descripcion">Descripción</label>
							{!! Form::textarea('descripcion', old('descripcion'), ['id' => 'descripcion','class' => 'form-control','placeholder' => 'Descripción de la vacante', 'onblur' => '','rows'=>3]) !!}
							@include('sitio.common.error-feedback-form',['field' => 'descripcion'])
						</div>
						<div class="col-md-6 form-group mb-3">
							<label for="salario">Salario</label>
							{!! Form::text('salario', old('salario'), ['id' => 'salario','class' => 'form-control','placeholder' => 'Salario', 'onblur' => '']) !!}
							@include('sitio.common.error-feedback-form',['field' => 'salario'])
						</div>								
						<div class="col-md-6 form-group mb-3">
							<label class="form-label">Carrera Profesional</label>
							<?php
								$arr = ConfigSistema::carreraProfesionalVacante();
							?>
							{{ Form::select('carrera_profesional', $arr, (isset($object))?$object->carrera_profesional:old('carrera_profesional') , [
								'id' => 'carrera_profesional',
								'class' => 'form-select',
								'placeholder' => 'Seleccione una opción ...',
								'required' => 'required',
							]) }}
						</div> 
						<div class="col-md-6 form-group mb-3">
							<label for="resposabilidades">Responsabilidades</label>
							{!! Form::textarea('resposabilidades', old('resposabilidades'), ['id' => 'resposabilidades','class' => 'form-control','placeholder' => 'Resposabilidades', 'onblur' => '']) !!}
							@include('sitio.common.error-feedback-form',['field' => 'resposabilidades'])
						</div>
						<div class="col-md-6 form-group mb-3">
							<label for="habilidades_experiencia">Habilidades y experiencia</label>
							{!! Form::textarea('habilidades_experiencia', old('habilidades_experiencia'), ['id' => 'habilidades_experiencia','class' => 'form-control','placeholder' => 'Habilidades y experiencia', 'onblur' => '']) !!}
							@include('sitio.common.error-feedback-form',['field' => 'habilidades_experiencia'])
						</div>
						<div class="col-md-12 form-group mb-3">
							<label for="localizacion">Localización</label>
							{!! Form::text('localizacion', old('localizacion'), ['id' => 'localizacion','class' => 'form-control','placeholder' => 'Localización', 'onblur' => '']) !!}
							@include('sitio.common.error-feedback-form',['field' => 'localizacion'])
						</div>	
						<div class="col-md-6 form-group mb-3">
							<label for="fecha_inicio">Fecha de inicio</label>
							{!! Form::text('fecha_inicio', old('fecha_inicio'), ['id' => 'fecha_inicio','class' => 'form-control default-date', 'onblur' => '']) !!}
							@include('sitio.common.error-feedback-form',['field' => 'fecha_inicio'])
						</div>
						<div class="col-md-6 form-group mb-3">
							<label for="fecha_fin">Fecha de fin de la publicación</label>
							{!! Form::text('fecha_fin', old('fecha_fin'), ['id' => 'fecha_fin','class' => 'form-control default-date', 'onblur' => '']) !!}
							@include('sitio.common.error-feedback-form',['field' => 'fecha_fin'])
						</div>			
						<div class="col-md-12 form-group mb-3">
							<label for="hashtags">Hashtags</label>
							{!! Form::textarea('hashtags', old('hashtags'), ['id' => 'hashtags','class' => 'form-control','placeholder' => 'Hashtags', 'onblur' => '','rows' => 3]) !!}
							@include('sitio.common.error-feedback-form',['field' => 'hashtags'])
						</div>				
						<div class="col-md-12">
							 <button id="btnSubmit" class="btn btn-primary float-end">{{ $txtBtn }}</button>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
</section>
@endsection

@section('script')
@endsection
