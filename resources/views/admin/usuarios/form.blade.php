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

	@if(!isset($object))
		{!! Form::open(
			[
				'method'=>'POST',
				'onsubmit'=> "accionForm(this,'#btnSubmit','".$ruta."');return false;",
				'id' => 'formGeneral',
				'files' => false,
				'class' => '',
				'autocomplete' => 'off'
			])
		!!}
	@else
		{!! Form::model($object,
			[
				'method' => "PUT",
				'onsubmit'=> "accionForm(this,'#btnSubmit','".$ruta."');return false;",
				'id' => 'formGeneral',
				'files' => false,
				'class' => '',
				'autocomplete' => 'off'
			])
		!!}
	@endif

		<div class="form row">
			<div class="col-md-4 form-group mb-3">
				<label for="nombre">Nombre</label>
				{!! Form::text('nombre', old('nombre'), ['id' => 'nombre','class' => 'form-control','placeholder' => 'Nombre de la empresa', 'onblur' => '']) !!}
			</div>

			<div class="col-md-4 form-group mb-3">
				<label for="primer_apellido">Primer apellido</label>
				{!! Form::text('primer_apellido', old('primer_apellido'), ['id' => 'primer_apellido','class' => 'form-control','placeholder' => 'Nombre de la empresa', 'onblur' => '']) !!}
			</div>

			<div class="col-md-4 form-group mb-3">
				<label for="segundo_apellido">Segundo apellido</label>
				{!! Form::text('segundo_apellido', old('segundo_apellido'), ['id' => 'segundo_apellido','class' => 'form-control','placeholder' => 'Nombre de la empresa', 'onblur' => '']) !!}
			</div>

			<div class="col-md-12 form-group mb-3">
				<label for="email">E-mail</label>
				{!! Form::text('email', old('email'), ['id' => 'email','class' => 'form-control','placeholder' => 'Nombre de la empresa', 'onblur' => '']) !!}
			</div>

			@if(isset($object))
				<div class="col-md-12 form-group mb-3">
					<label class="form-label">{{ __('Password') }}</label>
					<input type="password" class="form-control" id="theme-input-style" placeholder="{{ __('Password') }}" name="password" value="{{ old('password') }}"  autocomplete="new-password">
				</div>

				<div class="col-md-12 form-group mb-3">
					<label class="form-label">{{ __('Confirm Password') }}</label>
					<input type="password" class="form-control" id="password-confirm" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" value="{{ old('password') }}"  autocomplete="new-password">
				</div>

			@endif

			{{-- <div class="col-md-12 form-group mb-3">
				<label class="form-label">Tipo usuario</label>
				<?php
					$arr = ConfigSistema::tiposUsuarioRegistro();
				?>
				{{ Form::select('tipo_usuario', $arr, (isset($object))?$object->tipo_usuario:old('tipo_usuario') , [
					'id' => 'tipo_usuario',
					'class' => 'form-select select2',
					'placeholder' => 'Seleccione una opción ...',
					'required' => 'required',
				]) }}
			</div> --}}

			<div class="col-md-12">
				 <button id="btnSubmit" class="btn btn-primary float-end">{{ $txtBtn }}</button>
			</div>
		</div>
	</form>