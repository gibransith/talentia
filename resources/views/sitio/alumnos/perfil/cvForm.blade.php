<?php

use App\Http\Controllers\ConfigSistema;

	if(!isset($object)){
		$ruta = route('alumno.cvStore',[]);
		$txtBtnAccion = "Guardar archivo";
	}
?>
<div class="form-element py-30 mb-30">
	@if(!isset($object))
		{!! Form::open(
			[
				'method'=>'POST',
				'url' => $ruta,
				//'onsubmit'=> "accionForm(this,'#btnSubmit','".$ruta."');return false;",
				'id' => 'formGeneral',
				'files' => true,
				'class' => ''
			])
		!!}
	@else
		{!! Form::model($object,
			[
				'method' => "PUT",
				'onsubmit'=> "accionForm(this,'#btnSubmit','".$ruta."');return false;",
				'id' => 'formGeneral',
				'files' => true,
				'class' => '',
			])
		!!}
	@endif
		{{-- <input type="hidden" name="id_tenant" value="{{ $tenant->id }}"> --}}
		<div class="mb-4">
			{{-- <label class="form-label" for="inputGroupFile01">CV</label> --}}
			<input type="file" name="file_document" class="form-control" id="file_document" accept="application/pdf"  required>
		</div>

		<button type="submit" class="btn btn-primary w-100">
			{{ $txtBtnAccion }}
		</button>

	{!! Form::close() !!}
</div>