<?php

use App\Http\Controllers\ConfigSistema;
?>
<div class="row">
	<div class="mb-3 col-md-4">
		<label for="inputprimerapellido" class="form-label">Matricula</label>
		{!! Form::text('matricula', old('matricula') , ['id' => 'matricula','class' => ($errors->has('matricula'))?'form-control is-invalid':'form-control', 'autocomplete' => 'off']) !!}
		@error('matricula')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4">
		<label for="inputDireccion" class="form-label">Dirección</label>
		{!! Form::text('direccion', old('direccion') , ['id' => 'direccion','class' => ($errors->has('direccion'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
		@error('direccion')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4">
		<label for="inputprimerapellido" class="form-label">Teléfono</label>
		{!! Form::text('telefono', old('telefono') , ['id' => 'telefono','class' => ($errors->has('telefono'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
		@error('telefono')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4">
		<label for="inputsegundoapellido" class="form-label">Programa acádemico</label>
			{{ Form::select('programa_academico', ConfigSistema::tiposProgramaAcademicoRegistro(), old('programa_academico'), [
									'id' => 'programa_academico',
									'class' => ($errors->has('programa_academico'))?'form-select select2 form-control is-invalid':'form-select select2',
									'placeholder' => 'Selecccione...',
									'required' => 'required',
								])
		}}
		@error('programa_academico')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4">
		<label for="inputsegundoapellido" class="form-label">Carrera</label>
		{!! Form::text('carrera', old('carrera') , ['id' => 'carrera','class' => ($errors->has('carrera'))?'form-control is-invalid':'form-control', 'autocomplete' => 'off']) !!}
		@error('carrera')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4">
		<label for="inputsegundoapellido" class="form-label">Nivel</label>
		{!! Form::text('nivel', old('nivel') , ['id' => 'nivel','class' => ($errors->has('nivel'))?'form-control is-invalid':'form-control', 'autocomplete' => 'off']) !!}
		@error('nivel')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4">
		<label for="inputsegundoapellido" class="form-label">Promedio</label>
		{!! Form::text('promedio', old('promedio') , ['id' => 'promedio','class' => ($errors->has('promedio'))?'form-control is-invalid':'form-control', 'autocomplete' => 'off']) !!}
		@error('promedio')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
</div>