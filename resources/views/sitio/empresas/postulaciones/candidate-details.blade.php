<?php

use App\Http\Controllers\ConfigSistema;
?>
@extends('sitio.layouts.master')

@section('title')
	Perfil postulado
@endsection

@section('css')
@endsection

@section('content')
	@include('sitio.common.page-title',[
		'titulo' => 'Perfil postulado'
	])

	<!-- START PROFILE -->
	<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="card profile-sidebar me-lg-4">
							<div class="card-body p-4">
								<div class="text-center pb-4 border-bottom">
									<img src="{{ route('perfil.imagenPerfil.show', ['id' =>$alumno->id]) }}" alt=""
									class="avatar-lg img-thumbnail rounded-circle mb-4" />
									<h5 class="mb-0">{{ $alumno->nombreCompleto() }}</h5>
									<p class="text-muted">{{ $alumno->carrera }}</p>
									<ul class="candidate-detail-social-menu list-inline mb-0">
										@if( isset($alumno->perfil_linkedin) )
											<li class="list-inline-item">
												<a href="{{ $alumno->perfil_linkedin }}" class="social-link rounded-3 btn-soft-info" target="_blank">
													<i class="uil uil-linkedin-alt"></i>
												</a>
											</li>
										@endif
										@if( isset($alumno->perfil_facebook) )
											<li class="list-inline-item">
												<a href="{{ $alumno->perfil_facebook }}" class="social-link rounded-3 btn-soft-primary" target="_blank">
													<i class="uil uil-facebook-f"></i>
												</a>
											</li>
										@endif
										@if( isset($alumno->perfil_instagram) )
											<li class="list-inline-item">
												<a href="{{ $alumno->perfil_instagram }}" class="social-link rounded-3 btn-soft-danger" target="_blank">
													<i class="uil uil-instagram-alt"></i>
												</a>
											</li>
										@endif
									</ul>
								</div>
								<!--end profile-->
								<div class="mt-4 border-bottom pb-4">
									<h5 class="fs-17 fw-bold mb-3">Curriculum</h5>
									@if(isset($postulacion->cv_alumno))
									<ul class="profile-document list-unstyled mb-0">
										<li>
											<div class="profile-document-list d-flex align-items-center mt-4 ">
												<div class="icon flex-shrink-0">
													<i class="uil uil-file"></i>
												</div>
												<div class="ms-3">
													<h6 class="fs-16 mb-0">{{ $postulacion->cv_alumno }}</h6>
													{{-- <p class="text-muted mb-0">1.25 MB</p> --}}
													{{-- <a href="assets/images/dark-logo.png" download class="fs-20 text-muted"><i class="uil uil-import"></i></a> --}}
												</div>
												<div class="ms-auto">
													<a href="{{ route('empresa.postulaciones.cvDownload',[$postulacion->id]) }}" class="fs-20 text-muted" target="_blank"><i class="uil uil-import"></i></a>
												</div>
											</div>
										</li>
									</ul>
									@endif
								</div>
								<!--end document-->
								<div class="mt-4">
									<h5 class="fs-17 fw-bold mb-3">Contacto</h5>
									<div class="profile-contact">
										<ul class="list-unstyled mb-0">
											<li>
												<div class="d-flex">
													<label>Email</label>
													<div>
														<p class="text-muted text-break mb-0">
															{{ $alumno->usuario->email }}
														</p>
													</div>
												</div>
											</li>
											<li>
												<div class="d-flex">
													<label>Numero de telefono</label>
													<div>
														<p class="text-muted mb-0">&nbsp;  {{ $alumno->telefono }}</p>
													</div>
												</div>
											</li>
											<li>
												<div class="d-flex">
													<label>Direccion</label>
													<div>
														<p class="text-muted mb-0">{{ $alumno->direccion }}</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!--end contact-details-->
							</div>
							<!--end card-body-->
						</div>
						<!--end profile-sidebar-->
					</div>
					<!--end col-->
					<div class="col-lg-8">
						<div class="card profile-content-page mt-4 mt-lg-0">
							<ul class="profile-content-nav nav nav-pills border-bottom mb-4" id="pills-tab" role="tablist">
								{{-- <li class="nav-item" role="presentation">
									<button class="nav-link active" id="overview-tab" data-bs-toggle="pill" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">
										Descripción generaL
									</button>
								</li> --}}
								<li class="nav-item" role="presentation">
									
								</li>
							</ul>
							<!--end profile-content-nav-->
							<div class="card-body p-4">
								<div class="tab-content" id="pills-tabContent">
									{{-- <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
										<div>
											<h5 class="fs-18 fw-bold">Acerca de mi</h5>
											<p class="text-muted mt-4"></p>
											<p class="text-muted">
												Desarrolladora con más de 5 años de experiencia trabajando en los sectores público y privado.
												Diplomático, amigable y hábil para gestionar situaciones delicadas. Altamente organizado, motivado y competente en el manejo de computadoras.
												Buscando mejorar las puntuaciones de satisfacción de los estudiantes para la <b>Universidad Internacional</b>.
												Licenciatura en comunicaciones.
											</p>
										</div>
										<div class="candidate-education-details mt-4">
											<h6 class="fs-18 fw-bold mb-0">Educación</h6>
											<div class="candidate-education-content mt-4 d-flex">
												<div class="circle flex-shrink-0 primary-bg-subtle">
													B
												</div>
												<div class="ms-4">
													<h6 class="fs-16 mb-1">
														BCA - Licenciatura en Aplicaciones de Computadoras
													</h6>
													<p class="mb-2 text-muted">
														Universidad Internacional - (2004 - 2010)
													</p>
													<p class="text-muted">
														Hay muchas variaciones de pasajes disponibles, pero la mayoría se altera de alguna forma. Como especialista altamente capacitado y exitoso en desarrollo de productos y diseño con más de 4 años de experiencia.
													</p>
												</div>
											</div>
											<div class="candidate-education-content mt-3 d-flex">
												<div class="circle flex-shrink-0 primary-bg-subtle">
													M
												</div>
												<div class="ms-4">
													<h6 class="fs-16 mb-1">
														MCA - Maestría en Aplicación de Computadoras
													</h6>
													<p class="mb-2 text-muted">
														Universidad Internacional - (2010 - 2012)
													</p>
													<p class="text-muted">
														Hay muchas variaciones de pasajes disponibles, pero la mayoría se altera de alguna forma. Como especialista altamente capacitado y exitoso en desarrollo de productos y diseño con más de 4 años de experiencia.
													</p>
												</div>
											</div>
											<div class="candidate-education-content mt-3 d-flex">
												<div class="circle flex-shrink-0 primary-bg-subtle">
													D
												</div>
												<div class="ms-4">
													<h6 class="fs-16 mb-1">Comunicación Visual de Diseño</h6>
													<p class="text-muted mb-2">
														Universidad Internacional - (2012-2015)
													</p>
													<p class="text-muted">
														Hay muchas variaciones de pasajes disponibles, pero la mayoría se altera de alguna forma. Como especialista altamente capacitado y exitoso en desarrollo de productos y diseño con más de 4 años de experiencia.
													</p>
												</div>
											</div>
										</div>
										<div class="candidate-education-details mt-4">
											<h6 class="fs-18 fw-bold mb-0">Experiencias</h6>
											<div class="candidate-education-content mt-4 d-flex">
												<div class="circle flex-shrink-0 primary-bg-subtle"> W </div>
												<div class="ms-4">
													<h6 class="fs-16 mb-1">Líder de Equipo de Diseño y Desarrollo Web</h6>
													<p class="mb-2 text-muted">Agencia Creativa - (2013 - 2016)</p>
													<p class="text-muted">Hay muchas variaciones de pasajes disponibles, pero la mayoría se altera de alguna forma. Como especialista altamente capacitado y exitoso en desarrollo de productos y diseño con más de 4 años de experiencia.</p>
												</div>
											</div>
											<div class="candidate-education-content mt-4 d-flex">
												<div class="circle flex-shrink-0 primary-bg-subtle"> P </div>
												<div class="ms-4">
													<h6 class="fs-16 mb-1">Gerente de Proyecto</h6>
													<p class="mb-2 text-muted">Jobcy Technology Pvt.Ltd - (Actualidad)</p>
													<p class="text-muted mb-0">Hay muchas variaciones de pasajes disponibles, pero la mayoría se altera de alguna forma. Como especialista altamente capacitado y exitoso en desarrollo de productos y diseño con más de 4 años de experiencia.</p>
												</div>
											</div>
										</div>

										<div class="mt-4">
											<h5 class="fs-18 fw-bold">Skills</h5>
											<span class="badge fs-13 bg-soft-blue mt-2" style="color: black;">Cloud Management</span>
											<span class="badge fs-13 bg-soft-blue mt-2" style="color: black;">Responsive Design</span>
											<span class="badge fs-13 bg-soft-blue mt-2" style="color: black;">Network Architecture</span>
											<span class="badge fs-13 bg-soft-blue mt-2" style="color: black;">PHP</span>
											<span class="badge fs-13 bg-soft-blue mt-2" style="color: black;">Bootstrap</span>
											<span class="badge fs-13 bg-soft-blue mt-2" style="color: black;">UI & UX Designer</span>
										</div>
										<div class="mt-4">
											<h5 class="fs-18 fw-bold">Spoken languages</h5>
											<span class="badge fs-13 success-bg-subtle mt-2"style="color: black;">English</span>
											<span class="badge fs-13 success-bg-subtle mt-2"style="color: black;">German</span>
											<span class="badge fs-13 success-bg-subtle mt-2"style="color: black;">French</span>
										</div>
									</div> --}}
                                    
                                    <h5 class="fs-17 fw-bold mb-0">Acerca de mi</h5>
										<div class="mt-4">
											<div class="row">
												<div class="col-lg-12">
													<div class="mb-3">
														<p>{{$alumno->acerca_de}}</p>
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1"
														class="fs-17 fw-bold mb-0">Experiencia Laboral</label>
                                                        <p>{{$alumno->experiencia_laboral}}</p>
                                           
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="exampleFormControlTextarea1"
														class="fs-17 fw-bold mb-0">Habilidades profesionales</label>
														<p>{{$alumno->habilidades_profesionales}}</p>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="matricula" class="fs-17 fw-bold mb-0">Programa academico</label>
														<p>{{ $alumno->programa_academico }}</p>
													</div>
												</div>
												<!--end col-->
												<!--end col-->
												<div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="carrera" class="fs-17 fw-bold mb-0">Carrera</label>
                                                        <p>{{ $alumno->carrera }}</p>

													</div>
												</div>
												<!--end col-->
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="nivel" class="fs-17 fw-bold mb-0">Nivel</label>
														<p>{{$alumno->nivel}}</p>
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-6">
													<div class="mb-4">
														<label for="promedio" class="fs-17 fw-bold mb-0">Promedio</label>
                                                        <p>{{$alumno->promedio}}</p>
													</div>
												</div>
												<!--end col-->
												{{-- <div class="col-lg-6">
													<div class="mb-3">
											
														<label for="choices-single-location" class="fs-17 fw-bold mb-0">Location</label>
														<select class="form-select" data-trigger
														name="choices-single-location" id="choices-single-location"
														aria-label="Default select exam
														ple">
															<option value="ME">Montenegro</option>
															<option value="MS">Montserrat</option>
															<option value="MA">Morocco</option>
															<option value="MZ">Mozambique</option>
														</select>
													</div>
												</div>
												<!--end col--> --}}

											<!--end col-->
										</div>
										<!--end row-->
									</div>
									<!--end profile-->
                                    <!--end tab-pane-->
						</div>
						<!--end tab-content-->
					</div>
					<!--end card-body-->
				</div>
				<!--end profile-content-page-->
			</div>
			<!--end col-->
		</div>
		<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!-- END PROFILE -->
@endsection

@section('script')
@endsection
