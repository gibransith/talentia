<?php

use App\Http\Controllers\ConfigSistema;
?>
<div class="row">
	<div class="mb-3 col-md-4">
		<label for="inputTipoEmpresa" class="form-label">Tipo Empresa</label>
		{{
			Form::select('tipo', ConfigSistema::tipo_empresa(), old('tipo'), [
									'id' => 'tipo',
									'class' => ($errors->has('tipo'))?'form-select select2 form-control is-invalid':'form-select select2',
									'placeholder' => 'Selecccione...',
									'required' => 'required',
								])
		}}
		@error('tipo_empresa')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4">
		<label for="inputRazonSocial" class="form-label">Razón Social/Nombre</label>
		{!! Form::text('razon_social', old('razon_social') , ['id' => 'razon_social','class' => ($errors->has('razon_social'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
		@error('razon_social')
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
		<label for="inputprimerapellido" class="form-label">Página web</label>
		{!! Form::text('pagina_web', old('pagina_web') , ['id' => 'pagina_web','class' => ($errors->has('pagina_web'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
		@error('pagina_web')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	
	<div class="mb-3 col-md-4">
		<label for="inputprimerapellido" class="form-label">Perfil Linkedin</label>
		{!! Form::text('perfil_linkedin', old('perfil_linkedin') , ['id' => 'perfil_linkedin','class' => ($errors->has('perfil_linkedin'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
		@error('perfil_linkedin')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4">
		<label for="inputprimerapellido" class="form-label">Sector</label>
		{{
			Form::select('sector', ConfigSistema::sector_empresa(), old('sector'), [
									'id' => 'sector',
									'class' => ($errors->has('sector'))?'form-select select2 form-control is-invalid':'form-select select2',
									'placeholder' => 'Selecccione...',
									'required' => 'required',
								])
		}}
		@error('tipo_empresa')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	{{-- <div class="mb-3 col-md-4">
		<label for="inputprimerapellido" class="form-label">Sector</label>
		{!! Form::text('sector', old('sector') , ['id' => 'sector','class' => ($errors->has('sector'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
		@error('sector')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div> --}}
	<div class="mb-3 col-md-4">
		<label for="inputTipoEmpresa" class="form-label">¿Tiene convenio vigente?</label>
		{{ 
			Form::select('convenio_vigente', ConfigSistema::registro_si_no(), old('convenio_vigente'), [
									'id' => 'convenio_vigente',
									'class' => ($errors->has('convenio_vigente'))?'form-select select2 form-control is-invalid':'form-select select2',
									'placeholder' => 'Selecccione...',
									'required' => 'required',
								])
		}}
		
		@error('convenio_vigente')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4">
		<label for="inputTipoEmpresa" class="form-label">¿Le interesa convenio?</label>
		
			{{ Form::select('interesa_convenio', ConfigSistema::registro_si_no(), old('interesa_convenio'), [
									'id' => 'interesa_convenio',
									'class' => ($errors->has('interesa_convenio'))?'form-select select2 form-control is-invalid':'form-select select2',
									'placeholder' => 'Selecccione...',
									'required' => 'required',
								])
		}}
		
		@error('interesa_convenio')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-12">
		<label for="inputprimerapellido" class="form-label">Descripción de la empresa</label>
		{!! Form::textarea('descripcion', old('descripcion') , ['id' => 'descripcion','class' => ($errors->has('descripcion'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
		@error('descripcion')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="mb-3 col-md-4 hidden-field">
		{!! Form::hidden('estado_registro', old('estado_registro', 'P'), ['id' => 'estado_registro', 'class' => ($errors->has('estado_registro')) ? 'form-control is-invalid' : 'form-control', 'autocomplete' => 'off']) !!}
		@error('estado_registro')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
</div>
