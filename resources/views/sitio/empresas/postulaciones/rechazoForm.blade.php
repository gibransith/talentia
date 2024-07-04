<?php
$ruta = route('empresa.postulaciones.rechazoStore',[$postulacion->id])
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
	{{-- <h5  class="border-bottom pb-3">Leave a Message</h5  > --}}
	<div class="row">
		<div class="col-lg-6">
			<div class="position-relative mb-3">
				<label for="name" class="form-label">Nombre</label>
				<input name="name" id="name" type="text" class="form-control" placeholder="Enter your name*" readonly value="{{ $alumno->nombreCompleto() }}">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="position-relative mb-3">
				<label for="email" class="form-label">Email</label>
				<input name="email" id="email" type="email" class="form-control" placeholder="Enter your email*" readonly value="{{ $alumno->usuario->email }}">
			</div>
		</div>
		<div class="col-lg-12">
			<div class="position-relative mb-3">
				<label for="mensaje" class="form-label">Mensaje</label>
				<textarea name="mensaje" id="mensaje" rows="15" class="form-control" placeholder="Enter your message">
Estimado/a {{ $alumno->nombreCompleto() }},

Lamentamos informarte que tu postulación para la vacante de {{ $vacante->nombre }} en la Bolsa de Empleo UMx no ha sido seleccionada en esta ocasión.
Agradecemos tu interés y te deseamos éxito en tus futuras búsquedas laborales.

Atentamente,
{{ $empresa->razon_social }}</textarea>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-end">
			<button name="submit" type="submit" id="submit" class="btn btn-primary btn-hover">
                Rechazar postulación <i class="uil uil-message ms-1"></i>
            </button>
		</div>
	</div>
</form>
<!--end form-->