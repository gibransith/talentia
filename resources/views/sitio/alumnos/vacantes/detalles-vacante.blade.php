@extends('sitio.layouts.master')

@section('title')
	Detalle Vacante
@endsection

@section('css')
@endsection

@section('content')
	@include('sitio.common.page-title',[
		'titulo' => 'Detalle vacantes'
	])
	<!-- START JOB-DEATILS -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="card job-detail overflow-hidden">
						<div>
							<img src="assets/images/job-detail.jpg" alt="" class="img-fluid">
							<div class="job-details-compnay-profile">
								<img src="assets/images/featured-job/img-10.png" alt="" class="img-fluid rounded-3 rounded-3">
							</div>
						</div>
						<div class="card-body p-4">
							<div>
								<div class="row">
									<div class="col-md-8">
										<h5 class="mb-1">{{ $vacante->nombre }}</h5>
										<ul class="list-inline text-muted mb-0">
											<li class="list-inline-item">
												<i class="mdi mdi-clock"></i> {{ $vacante->tipo_empleo }}
											</li>
											<li class="list-inline-item text-warning review-rating"></li>
										</ul>
									</div><!--end col-->
								</div><!--end row-->
							</div>
							<!-- Descripción del Trabajo -->
							<div class="mt-4">
								<h5 class="mb-3">Descripción del Trabajo</h5>
								<div class="job-detail-desc">
									<p class="text-muted mb-0">{{$vacante->descripcion}}</p>
								</div>
							</div>
							<!-- Responsabilidades del Trabajo -->
							<div class="mt-4">
								<h5 class="mb-3">Responsabilidades</h5>
								<div class="job-detail-desc mt-2">
									<p class="text-muted">{{$vacante->resposabilidades}}</p>
								</div>
							</div>
							<!-- Habilidades y Experiencia del Trabajo -->
							<div class="mt-4">
								<h5 class="mb-3">Habilidades y Experiencia</h5>
								<div class="job-details-desc">
									<ul class="job-detail-list list-unstyled mb-0 text-muted">
										<li><i class="uil uil-circle"></i>{{$vacante->habilidades_experiencia}}</li>
									</ul>
									<div class="mt-4">
										<span class="badge bg-primary">{{$vacante->hashtags}}</span>
									</div>
								</div>
							</div>
						</div><!--end card-body-->
					</div><!--end job-detail-->
				</div><!--end col-->

				<div class="col-lg-4 mt-4 mt-lg-0">
					<!--start side-bar-->
					<div class="side-bar ms-lg-4">
						<div class="card job-overview">
							<div class="card-body p-4">
								<h6 class="fs-17">Vista General del Empleo</h6>
								<ul class="list-unstyled mt-4 mb-0">
									<li>
										<div class="d-flex mt-4">
											<i class="uil uil-user icon text-primary"></i>
											<div class="ms-3">
												<h6 class="fs-14 mb-2">Título del Empleo</h6>
												<p class="text-muted mb-0">{{$vacante->nombre}}</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex mt-4">
											<i class="uil uil-star-half-alt icon text-primary"></i>
											<div class="ms-3">
												<h6 class="fs-14 mb-2">Experiencia</h6>
												<p class="text-muted mb-0">{{$vacante->habilidades_experiencia}}</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex mt-4">
											<i class="uil uil-location-point icon text-primary"></i>
											<div class="ms-3">
												<h6 class="fs-14 mb-2">Ubicación</h6>
												<p class="text-muted mb-0">{{$vacante->localizacion}}</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex mt-4">
											<i class="uil uil-usd-circle icon text-primary"></i>
											<div class="ms-3">
												<h6 class="fs-14 mb-2">Salario Ofrecido</h6>
												<p class="text-muted mb-0">${{$vacante->salario}}</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex mt-4">
											<i class="uil uil-graduation-cap icon text-primary"></i>
											<div class="ms-3">
												<h6 class="fs-14 mb-2">Carrera</h6>
												<p class="text-muted mb-0">{{$vacante->carrera_profesional}}</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex mt-4">
											<i class="uil uil-history icon text-primary"></i>
											<div class="ms-3">
												<h6 class="fs-14 mb-2">Fecha de Publicación de la Vacante </h6>
												<p class="text-muted mb-0">{{$vacante->fecha_inicio}}</p>
											</div>
										</div>
									</li>
								</ul>
								<div class="mt-3">
									{{-- <a href="#applyNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2">Aplicar Ahora<i class="uil uil-arrow-right"></i></a> --}}
									@if (auth()->user()->esAlumno())
										@if (auth()->user()->getAlumnoUsuario()->aplicoVacante($vacante->id))
											<a href="" class="btn btn-sm btn-disabled" disabled onclick="return false;">
												Ya has aplicado <i class="uil uil-angle-right-b"></i>
											</a>
										@else
											<a href="#applyNow" data-bs-toggle="modal" class="btn btn-primary btn-hover w-100 mt-2" onclick="setVacanteId('{{ $vacante->id }}')">
											Aplicar Ahora<i class="uil uil-arrow-right"></i>
											</a>
										@endif
									@endif
								</div>
							</div><!--end card-body-->
						</div><!--end job-overview-->
					<div class="card company-profile mt-4">
						<div class="card-body p-4">
							<div class="text-center">
								<img src="{{ route('empresa.imagenLogo.show', ['id' => $vacante->empresa->id]) }}" alt=""
								class="img-fluid rounded-3 mb-3" style="width: 60px;" />
								<p>{{$vacante->empresa->razon_social}}</p>
							</div>

							<ul class="list-unstyled mt-4">
								<li>
									<div class="d-flex">
										<i class="uil uil-phone-volume text-primary fs-4"></i>
										<div class="ms-3">
											<h6 class="fs-14 mb-2">Teléfono</h6>
											<p class="text-muted fs-14 mb-0">{{$vacante->empresa->telefono}}</p>
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex">
										<i class="uil uil-envelope text-primary fs-4"></i>
										<div class="ms-3">
											<h6 class="fs-14 mb-2">Perfil Linkedin</h6>
											<p class="text-muted fs-14 mb-0">{{$vacante->empresa->perfil_linkedin}}</p>
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex">
										<i class="uil uil-globe text-primary fs-4"></i>
										<div class="ms-3">
											<h6 class="fs-14 mb-2">Sitio Web</h6>
											<p class="text-muted fs-14 text-break mb-0">{{$vacante->empresa->pagina_web}}</p>
										</div>
									</div>
								</li>
								<li class="mt-3">
									<div class="d-flex">
										<i class="uil uil-map-marker text-primary fs-4"></i>
										<div class="ms-3">
											<h6 class="fs-14 mb-2">Ubicación</h6>
											<p class="text-muted fs-14 mb-0">{{$vacante->empresa->ubicacion_fisica}}</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="mt-4">
								<a href="{{ route('empresa.showSitio',['id' => $vacante->empresa->id]) }}" class="btn btn-primary btn-hover w-100 rounded"><i class="mdi mdi-eye"></i> Ver Perfil</a>
							</div>
						</div>
					</div>
				</div>
				<!--end side-bar-->
			</div><!--end col-->
		</div><!--end row-->
	</div><!--end container-->
</section>
<!-- START JOB-DEATILS -->

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