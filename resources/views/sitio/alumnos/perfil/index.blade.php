<?php

use App\Http\Controllers\ConfigSistema;
?>
@extends('sitio.layouts.master')

@section('title')
Mi Perfil
@endsection

@section('css')
@endsection

@section('content')
	@include('sitio.common.page-title',[
		'titulo' => 'Mi Perfil'
	])

	<!-- START PROFILE -->
	<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="card profile-sidebar me-lg-4">
							<div class="card-body p-4">
								<div class="text-center pb-4 border-bottom">
									<img src="{{ route('perfil.imagenPerfil.show',[$usuario->id]) }}" alt=""
									class="avatar-lg img-thumbnail rounded-circle mb-4" />
									<h5 class="mb-0">{{ $usuario->nombreCompleto() }}</h5>
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
									@if(isset($alumno->cv))
									<ul class="profile-document list-unstyled mb-0">
										<li>
											<div class="profile-document-list d-flex align-items-center mt-4 ">
												<div class="icon flex-shrink-0">
													<i class="uil uil-file"></i>
												</div>
												<div class="ms-3">
													<h6 class="fs-16 mb-0">{{ $alumno->cv }}</h6>
													{{-- <p class="text-muted mb-0">1.25 MB</p> --}}
													{{-- <a href="assets/images/dark-logo.png" download class="fs-20 text-muted"><i class="uil uil-import"></i></a> --}}
												</div>
												<div class="ms-auto">
													<a href="{{ route('alumno.cvDownload') }}" class="fs-20 text-muted" target="_blank"><i class="uil uil-import"></i></a>
												</div>
											</div>
										</li>
									</ul>
									@endif
									<div class="d-grid gap-2 mt-3">
										<button class="btn btn-primary" onclick="cargaDlg('Carga Curriculum vitae','{{ route('alumno.cvForm') }}','modal-md')">Cargar CV</button>
									</div>
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
															{{ $usuario->email }}
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
													<label>Ubicacion</label>
													<div>
														<p class="text-muted mb-0">CDMX</p>
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
									<button class="nav-link active" id="settings-tab" data-bs-toggle="pill" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
										Ajustes
									</button>
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
									<div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
										{!! Form::model($usuario,['route' => ['alumno.perfil.update',$usuario->id], 'files' => true, 'id' => 'formPerfil', 'class' => 'formPerfil form-prevent-multiple-submits' ,'method' => 'POST']) !!}
											<div>
												<h5 class="fs-17 fw-semibold mb-3 mb-0">Datos de usuario</h5>
												<div class="text-center">
													<div class="mb-4 profile-user">
														<img src="{{ route('perfil.imagenPerfil.show', ['id' => $usuario->id]) }}" class="rounded-circle img-thumbnail profile-img" id="profile-img" alt="">
														{{-- <div class="p-0 rounded-circle profile-photo-edit">
															<input id="profile-img-file-input" type="file" class="profile-img-file-input" onchange="previewImg()" >
															<label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
																<i class="uil uil-edit"></i>
															</label>
														</div> --}}
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4">
														<div class="mb-3">
															<label for="nombre" class="form-label">Nombre</label>
															{!! Form::text('nombre', old('nombre'), ['id' => 'nombre','class' => 'form-control','placeholder' => 'Nombre(s)','required' => 'required', 'onblur' => '']) !!}
														</div>
													</div>
													<!--end col-->
													<div class="col-lg-4">
														<div class="mb-3">
															<label for="nombre" class="form-label">Primer apellido</label>
															{!! Form::text('primer_apellido', old('primer_apellido'), ['id' => 'primer_apellido','class' => 'form-control','placeholder' => 'Primer apellido','required' => 'required', 'onblur' => '']) !!}
														</div>
													</div>
													<!--end col-->
													<div class="col-lg-4">
														<div class="mb-3">
															<label for="lastName" class="form-label">Segundo apellido</label>
															{!! Form::text('segundo_apellido', old('segundo_apellido'), ['id' => 'segundo_apellido','class' => 'form-control','placeholder' => 'Segundo Paterno','required' => 'required', 'onblur' => '']) !!}
														</div>
													</div>
													<!--end col-->
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="choices-single-categories" class="form-label">Foto de perfil</label>
															<input type="file" name="foto_perfil" class="form-control" id="foto_perfil" accept="image/*" >
														</div>
													</div>
												<!--end col-->
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="email" class="form-label">Email</label>
														{!! Form::email('email', old('email'), ['id' => 'email','class' => 'form-control','placeholder' => 'Correo electrónico','required' => 'required', 'onblur' => '' ]) !!}
													</div>
												</div>
												<!--end col-->
											</div>
											<!--end row-->
										</div>
										<!--end account-->
										<div class="mt-4">
											<h5 class="fs-17 fw-semibold mb-3">Perfil</h5>
											<div class="row">
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="exampleFormControlTextarea1"
														class="form-label">Sobre ti</label>
														{!! Form::textarea('acerca_de', old('acerca_de'), ['id' => 'acerca_de','class' => 'form-control','placeholder' => 'Sobre ti...','required' => 'required', 'onblur' => '','rows' => "5"]) !!}
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="exampleFormControlTextarea1"
														class="form-label">Experiencia Laboral</label>
														{!! Form::textarea('experiencia_laboral', old('experiencia_laboral'), ['id' => 'experiencia_laboral','class' => 'form-control','placeholder' => 'Experiencia Laboral...','required' => 'required', 'onblur' => '','rows' => "5"]) !!}
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="exampleFormControlTextarea1"
														class="form-label">Habilidades profesionales</label>
														{!! Form::textarea('habilidades_profesionales', old('habilidades_profesionales'), ['id' => 'habilidades_profesionales','class' => 'form-control','placeholder' => 'Habilidades profesionales...','required' => 'required', 'onblur' => '','rows' => "5"]) !!}
													</div>
												</div>
												<div class="col-lg-4">
													<div class="mb-3">
														<label for="matricula" class="form-label">Programa academico</label>
														{{ Form::select('programa_academico', ConfigSistema::tiposProgramaAcademicoRegistro(), old('programa_academico'), [
																		'id' => 'programa_academico',
																		'class' => ($errors->has('programa_academico'))?'form-select select2 form-control is-invalid':'form-select select2',
																		'placeholder' => 'Selecccione...',
																		'required' => 'required',
																	])
														}}
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-4">
													<div class="mb-3">
														<label for="matricula" class="form-label">Matricula</label>
														{!! Form::text('matricula', old('matricula'), ['id' => 'matricula','class' => 'form-control','placeholder' => 'Matricula','required' => 'required', 'onblur' => '']) !!}
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-4">
													<div class="mb-3">
														<label for="carrera" class="form-label">Carrera</label>
														{!! Form::text('carrera', old('carrera'), ['id' => 'carrera','class' => 'form-control','placeholder' => 'Carrera','required' => 'required', 'onblur' => '']) !!}
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="nivel" class="form-label">Nivel</label>
														{!! Form::text('nivel', old('nivel'), ['id' => 'nivel','class' => 'form-control','placeholder' => 'Nivel','required' => 'required', 'onblur' => '']) !!}
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="promedio" class="form-label">Promedio</label>
														{!! Form::text('promedio', old('promedio'), ['id' => 'promedio','class' => 'form-control','placeholder' => 'Promedio','required' => 'required', 'onblur' => '']) !!}
													</div>
												</div>
												<!--end col-->
												{{-- <div class="col-lg-6">
													<div class="mb-3">
														<label for="choices-single-location" class="form-label">Location</label>
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
									<div class="mt-4">
										<h5 class="fs-17 fw-semibold mb-3">Redes social</h5>
										<div class="row">
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="facebook" class="form-label">Facebook</label>
													{!! Form::text('perfil_facebook', old('perfil_facebook'), ['id' => 'perfil_facebook','class' => 'form-control','placeholder' => 'Pérfil de Facebook', 'onblur' => '']) !!}
												</div>
											</div>
											<!--end col-->
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="instagram" class="form-label">Instagram</label>
													{!! Form::text('perfil_instagram', old('perfil_instagram'), ['id' => 'perfil_instagram','class' => 'form-control','placeholder' => 'Pérfil de Instagram', 'onblur' => '']) !!}
												</div>
											</div>
											<!--end col-->
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="linkedin" class="form-label">Linkedin</label>
													{!! Form::text('perfil_linkedin', old('perfil_linkedin'), ['id' => 'perfil_linkedin','class' => 'form-control','placeholder' => 'Pérfil de Linkedin', 'onblur' => '']) !!}
												</div>
											</div>
											<!--end col-->
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="whatsapp" class="form-label">Teléfono</label>
													{!! Form::text('telefono', old('telefono'), ['id' => 'telefono','class' => 'form-control','placeholder' => 'Teléfono', 'onblur' => '']) !!}
												</div>
											</div>
											<!--end col-->
										</div>
										<!--end row-->
									</div>
									<!--end socia-media-->
									<div class="mt-4">
										<h5 class="fs-17 fw-semibold mb-3 mb-3">
											Cambiar contraseña
										</h5>
										<div class="row">
											<div class="col-lg-12">
												<p class="text-muted">
													Si deseas actualizar tu contraseña completa los siguientes campos, dejarlos vacios en caso contrario.
												</p>
											</div>
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="new-password-input" class="form-label">
														Contraseña Nueva
													</label>
													<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Ingrese contraseña">
													@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>
											<!--end col-->
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="confirm-password-input" class="form-label">Confirmar Contraseña</label>
													<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirme contraseña">
												</div>
											</div>
											<!--end col-->

										</div>
										<!--end row-->
									</div>
									<!--end Change-password-->
									<div class="mt-4 text-end">
										<button type="submit" class="btn btn-primary">Actualizar</button>
									</div>
								{!! Form::close() !!}
								<!--end form-->
							</div>
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
