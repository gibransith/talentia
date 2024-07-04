<?php

use App\Http\Controllers\ConfigSistema;
$ruta = route('empresa.vacantes.cerrarStore',[$vacante->id])
?>
{{-- <form action="#" class="contact-form "> --}}
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
	<h6  class="border-bottom pb-3">{{ $vacante->nombre }}</h6>
	<div class="row">
		<div class="col-lg-12">
			<div class="position-relative mb-3">
				<label for="name" class="form-label">Motivo del cierre de la vacante</label>
				{{ Form::select('motivo_cierre', ConfigSistema::motivosCierreVacante(), old('motivo_cierre'), [
						'id' => 'motivo_cierre',
						'class' => ($errors->has('motivo_cierre'))?'form-select select2 form-control is-invalid':'form-select select2',
						'placeholder' => 'Selecccione...',
						'required' => 'required',
						'onchange' => "cargaSelect(this, '" . route('empresa.vacantes.inputCierre') . "','div_inputs')"
					])
				}}
			</div>
		</div>
		<div class="col-lg-12" id='div_inputs'>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-end">
			<button name="submit" type="submit" id="submit" class="btn btn-primary btn-hover">
                Cerrar vacante
            </button>
		</div>
	</div>
</form>
<!--end form-->