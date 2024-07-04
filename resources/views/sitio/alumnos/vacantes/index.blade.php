@extends('sitio.layouts.master')

@section('title')
Vacantes
@endsection

@section('css')
@endsection

@section('content')
	@include('sitio.common.page-title',[
		'titulo' => 'Vacantes'
	])
	
	<div class="container">
        <div class="row mt-4">
			<div class="col-lg-12">

                <form action="{{ route('alumno.vacantes.index') }}" method="GET">
                    <div class="row g-3">
						<div class="col-lg-4 col-md-6">
							<div class="filler-job-form">
								<i class="uil uil-briefcase-alt"></i>
								{{-- <input type="search" class="form-control filter-job-input-box" id="exampleFormControlInput1" placeholder="Job, Company name... "> --}}
								<input type="text" class="form-control filter-job-input-box" value="{{ $search }}" name="search" placeholder="Buscar vacante por nombre/carrera/empresa">
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="filler-job-form">
								{{-- <i class="uil uil-clipboard-notes"></i> --}}
								<select class="form-select" data-trigger name="tipo_empleo" id="choices-single-categories" aria-label="Default select example">
								{{-- <select name="tipo_empleo" class="form-control"> --}}
									<option value="">Tipo de empleo</option>
									<option {{ ($tipo_empleo=='Tiempo completo')?'selected':'' }} value="Tiempo completo">Tiempo completo</option>
									<option {{ ($tipo_empleo=='Parcial')?'selected':'' }} value="Parcial">Parcial</option>
									<option {{ ($tipo_empleo=='Alternancias (prácticas)')?'selected':'' }}value="Alternancias (prácticas)">Alternancias (prácticas)</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							{{-- <a href="javascript:void(0)" class="btn btn-primary w-100">
								<i class="uil uil-filter"></i> Filter
							</a> --}}
							{{-- <button class="btn btn-primary w-100" type="submit">Buscar</button> --}}
							<button type="submit" class="btn btn-primary w-100">
								<i class="uil uil-filter"></i> Buscar
							</button>
						</div>
					</div>
				</form>
	
			</div>
		</div>
	</div>
	
	

	{{-- <div class="container">
		<div class="row">
			<div class="col-6">
				<form action="{{ route('alumno.vacantes.search') }}" method="GET">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="search" placeholder="Buscar vacante por carrera">
						<input type="date" class="form-control" name="fecha_inicio" placeholder="Fecha de inicio">
						<select name="tipo_empleo" class="form-control">
							<option value="">Tipo de empleo</option>
							<option value="Tiempo completo">Tiempo completo</option>
							<option value="Parcial">Parcial</option>
							<option value="Alternancias (prácticas)">Alternancias (prácticas)</option>
						</select>
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">Buscar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div> --}}


	<!-- START JOB-GRID -->
	<section class="section">
		<div class="container">
			<div class="row">
				@forelse($registros as $r)
					@include('sitio.alumnos.vacantes.cardVacante')
				@empty
					<div class="col-lg-12 col-md-6 mt-4">
						<div class="alert alert-info text-center mb-4" role="alert">
							Sin registros
						</div>
					</div>
				@endforelse

				<div class="row justify-content-center">
					<div class="col-lg-12 mt-5  text-center">
						<div class="d-flex justify-content-center">
							{{ $registros->appends($psearch)->links() }}
						</div>
					</div>
				</div>
			</div>
		</div><!--end container-->
	</section>
	<!-- END JOB-GRID -->

	<!-- START APPLY MODAL -->
	<div class="modal fade" id="applyNow" tabindex="-1" aria-labelledby="applyNow" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body p-5">
					<div class="text-center mb-4">
						<h5 class="modal-title" id="staticBackdropLabel">Aplicar para este trabajo</h5>
					</div>
					<div class="position-absolute end-0 top-0 p-3">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="mb-3">
						<label for="nameControlInput" class="form-label">Nombre</label>
						<input type="text" class="form-control" id="nameControlInput" placeholder="Enter your name" value="{{ $usuario->nombreCompleto() }}" readonly>
					</div>
					<div class="mb-3">
						<label for="emailControlInput2" class="form-label">Correo Electronico</label>
						<input type="email" class="form-control" id="emailControlInput2" placeholder="Enter your email" value="{{ $usuario->email }}" readonly>
					</div>
					
					{{-- <button type="submit" class="btn btn-primary w-100">Enviar Postulacion</button> --}}
					{{-- <form action="{{ route('alumno.vacante.aplicar') }}" method="POST">
						@csrf
						<input type="hidden" name="vacante_id" id="vacante_id_input">
						<!-- Otros campos del formulario, como nombre, correo, currículum, etc. -->
						<button type="submit" class="btn btn-primary w-100">Enviar Postulación</button>
					</form> --}}

					{!! Form::open(['method'=>'POST', 'url'=>route('alumno.vacante.aplicar'), 'files' => true]) !!}
						@csrf
						{{ Form::hidden('vacante_id', null, ['id' => 'vacante_id_input']) }}
						<div class="mb-4">
							<label class="form-label" for="inputGroupFile01">Currículum</label>
							<br>
							@if ($alumno && $alumno->cv)
							<div class="border border-black p-3">
								<div class="text-center">
									Currículum cargado en el perfil: 
									<a href="{{ asset('storage/alumnos/' . $alumno->id . '/cv/' . $alumno->cv) }}" target="_blank">{{ $alumno->cv }}</a>
								</div>
								<div id="contenedorcv" class="p-3">
									<div class="text-center ">
										<button type="button" class="btn btn-secondary btn-sm" onclick="desplegarInputFile()">Seleccionar otro currículum</button>
									</div>
								</div>
							</div>
							@else
							<div class="mb-4">
								<label class="form-label" for="form-control">Currículum</label>
								<div class="alert alert-danger fs-6">
									No tienes un currículum asociado a tu cuenta. Selecciona un currículum para continuar con la postulacion.
								</div>
								{{ Form::file('file_document', ['class' => 'form-control', 'id' => 'file_document', 'accept' => 'application/pdf', 'required' => true, 'placeholder' => 'Selecciona un CV']) }}
							</div>
							
							@endif
						</div>
						
						{{ Form::submit('Enviar Postulación', ['class' => 'btn btn-primary w-100']) }}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	<!-- END APPLY MODAL -->
@endsection
<script>
    function setVacanteId(vacanteId) {
		// console.log("ID de la vacante: " + vacanteId);
        document.getElementById('vacante_id_input').value = vacanteId;
    }

	function desplegarInputFile() {
		var contenedor = document.getElementById("contenedorcv");

		while (contenedor.firstChild) {
			contenedor.removeChild(contenedor.firstChild);
		}
		var nuevoInput = document.createElement("input");
		nuevoInput.type = "file";
		nuevoInput.classList.add("form-control");
		nuevoInput.setAttribute("name", "file_document");
		nuevoInput.setAttribute("id", "file_document");
		nuevoInput.setAttribute("accept", "application/pdf");
		nuevoInput.setAttribute("required", "true");

		var nuevoDiv = document.createElement("div");
		nuevoDiv.classList.add("form-group", "text-center", "p-3");

		var botonWarning = document.createElement("button");
		botonWarning.textContent = "Cargar otro currículum";
		botonWarning.classList.add("btn", "btn-warning", "btn-sm");
		botonWarning.setAttribute("onclick", "desplegarInputFile()");
		
		var botonWarning = document.createElement("button");
		botonWarning.textContent = "Cancelar selección";
		botonWarning.classList.add("btn", "btn-warning", "btn-sm");
		botonWarning.setAttribute("onclick", "cancelarInputFile()");

		contenedor.appendChild(nuevoInput);
		nuevoDiv.appendChild(botonWarning);
		contenedor.appendChild(nuevoDiv);
	}

	function cancelarInputFile() {
		var contenedor = document.getElementById("contenedorcv");

		while (contenedor.firstChild) {
			contenedor.removeChild(contenedor.firstChild);
		}

		var nuevoDiv = document.createElement("div");
		nuevoDiv.classList.add("text-center");

		var boton = document.createElement("button");
		boton.type = "button";
		boton.textContent = "Seleccionar otro currículum";
		boton.classList.add("btn", "btn-secondary", "btn-sm");
		boton.setAttribute("onclick", "desplegarInputFile()");

		nuevoDiv.appendChild(boton);

		contenedor.appendChild(nuevoDiv);
	}
</script>
@section('script')

@endsection