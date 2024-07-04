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
									<img src="{{ route('empresa.imagenLogo.show',[$empresa->id]) }}" alt=""
									class="avatar-lg img-thumbnail rounded-circle mb-4" />
									<h5 class="mb-0">{{ $empresa->razon_social }}</h5>
									<p class="text-muted">{{ $usuario->nombreCompleto() }}</p>
									<ul class="candidate-detail-social-menu list-inline mb-0">
										@if( isset($empresa->perfil_linkedin) )
											<li class="list-inline-item">
												<a href="{{ $empresa->perfil_linkedin }}" class="social-link rounded-3 btn-soft-info" target="_blank">
													<i class="uil uil-linkedin-alt"></i>
												</a>
											</li>
										@endif										
									</ul>
								</div>
								<!--end profile-->
								
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
													<label>Número de teléfono</label>
													<div>
														<p class="text-muted mb-0">&nbsp;  {{ $empresa->telefono }}</p>
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
									<div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
										{!! Form::model($usuario,['route' => ['empresa.perfil.update',$usuario->id], 'files' => true, 'id' => 'formPerfil', 'class' => 'formPerfil form-prevent-multiple-submits' ,'method' => 'POST']) !!}
											<div>
												<h5 class="fs-17 fw-semibold mb-3 mb-0">Datos del usuario</h5>
												<div class="text-center">
													<div class="mb-4 profile-user">
														<img src="{{ route('perfil.imagenPerfil.show',[$usuario->id]) }}" class="rounded-circle img-thumbnail profile-img" id="profile-img" alt="">
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
											<h5 class="fs-17 fw-semibold mb-3">Perfil de la empresa</h5>
											<div class="row">
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="razon_social" class="form-label">Razón social</label>
														{!! Form::text('razon_social', old('razon_social'), ['id' => 'razon_social','class' => 'form-control','placeholder' => 'Razón social','required' => 'required', 'onblur' => '']) !!}
													</div>
												</div>
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="exampleFormControlTextarea1"
														class="form-label">Descripción</label>
														{!! Form::textarea('descripcion', old('descripcion'), ['id' => 'descripcion','class' => 'form-control','placeholder' => 'Descripción ...','required' => 'required', 'onblur' => '','rows' => "5"]) !!}
													</div>
												</div>												
												<!--end col-->
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="ubicacion_fisica" class="form-label">Ubicación</label>
														{!! Form::text('ubicacion_fisica', old('ubicacion_fisica'), ['id' => 'ubicacion_fisica','class' => 'form-control','placeholder' => 'Ubicación','required' => 'required', 'onblur' => '']) !!}
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="sector" class="form-label">Sector</label>
														{{
															Form::select('sector', ConfigSistema::sector_empresa(), old('sector'), [
																					'id' => 'sector',
																					'class' => ($errors->has('sector'))?'form-select select2 form-control is-invalid':'form-select select2',
																					'placeholder' => 'Selecccione...',
																					'required' => 'required',
																				])
														}}
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="num_empleados" class="form-label">Número de empleados</label>
														{!! Form::text('num_empleados', old('num_empleados'), ['id' => 'num_empleados','class' => 'form-control','placeholder' => 'Ubicación','required' => 'required', 'onblur' => '']) !!}
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="logo" class="form-label">Logo</label>
														<input type="file" name="logo" class="form-control" id="logo" accept="image/*" >
													</div>
												</div>
										</div>
										<!--end row-->
									</div>
									<!--end profile-->
									<div class="mt-4">
										<h5 class="fs-17 fw-semibold mb-3">Redes sociales</h5>
										<div class="row">											
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
											<div class="col-lg-12">
												<div class="mb-3">
													<label for="pagina_web" class="form-label">Página web</label>
													{!! Form::text('pagina_web', old('pagina_web'), ['id' => 'pagina_web','class' => 'form-control','placeholder' => 'Página web', 'onblur' => '']) !!}
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
