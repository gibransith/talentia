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
									<img src="{{ asset('assets/images/profile.jpg') }}" alt=""
									class="avatar-lg img-thumbnail rounded-circle mb-4" />
									<h5 class="mb-0">Jansh Dickens</h5>
									<p class="text-muted">Estudiante de informatica</p>
									<ul class="list-inline d-flex justify-content-center align-items-center ">
										<li class="list-inline-item text-warning fs-19">
											<i class="mdi mdi-star"></i>
											<i class="mdi mdi-star"></i>
											<i class="mdi mdi-star"></i>
											<i class="mdi mdi-star"></i>
											<i class="mdi mdi-star-half-full"></i>
										</li>
									</ul>
									<ul class="candidate-detail-social-menu list-inline mb-0">
										<li class="list-inline-item">
											<a href="javascript:void(0)" class="social-link rounded-3 btn-soft-primary"><i
												class="uil uil-facebook-f"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0)" class="social-link rounded-3 btn-soft-info"><i
													class="uil uil-twitter-alt"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="javascript:void(0)" class="social-link rounded-3 btn-soft-success"><i
														class="uil uil-whatsapp"></i></a>
													</li>
													<li class="list-inline-item">
														<a href="javascript:void(0)" class="social-link rounded-3 btn-soft-danger"><i
															class="uil uil-phone-alt"></i></a>
														</li>
													</ul>
												</div>
												<!--end profile-->
												<div class="mt-4 border-bottom pb-4">
													<h5 class="fs-17 fw-bold mb-3">Curriculum</h5>
													<ul class="profile-document list-unstyled mb-0">
														<li>
															<div class="profile-document-list d-flex align-items-center mt-4 ">
																<div class="icon flex-shrink-0">
																	<i class="uil uil-file"></i>
																</div>
																<div class="ms-3">
																	<h6 class="fs-16 mb-0">Curriculum_estudiante.pdf</h6>
																	<p class="text-muted mb-0">1.25 MB</p>
																</div>
																<div class="ms-auto">
																	<a href="assets/images/dark-logo.png" download class="fs-20 text-muted"><i class="uil uil-import"></i></a>
																</div>
															</div>
														</li>
														<li>
															<div class="profile-document-list d-flex align-items-center mt-4 ">
																<div class="icon flex-shrink-0">
																	<i class="uil uil-file"></i>
																</div>
																<div class="ms-3">
																	<h6 class="fs-16 mb-0">Cover-letter.pdf</h6>
																	<p class="text-muted mb-0">1.25 MB</p>
																</div>
																<div class="ms-auto">
																	<a href="assets/images/dark-logo.png" download="dark-logo" class="fs-20 text-muted"><i class="uil uil-import"></i></a>
																</div>
															</div>
														</li>
													</ul>
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
																			Jansh@gmail.com
																		</p>
																	</div>
																</div>
															</li>
															<li>
																<div class="d-flex">
																	<label>Numero de telefono</label>
																	<div>
																		<p class="text-muted mb-0">+2 345 678 0000</p>
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
											<ul class="profile-content-nav nav nav-pills border-bottom mb-4" id="pills-tab"
											role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active" id="overview-tab" data-bs-toggle="pill"
												data-bs-target="#overview" type="button" role="tab" aria-controls="overview"
												aria-selected="true">
												Descripción generaL
											</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="settings-tab" data-bs-toggle="pill"
											data-bs-target="#settings" type="button" role="tab" aria-controls="settings"
											aria-selected="false">
											Ajustes
										</button>
									</li>
								</ul>
								<!--end profile-content-nav-->
								<div class="card-body p-4">
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="overview" role="tabpanel"
										aria-labelledby="overview-tab">
										<div>
											<h5 class="fs-18 fw-bold">Acerca de mi</h5>
											<p class="text-muted mt-4">

											</p>
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
									</div>
									<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
										<form action="#">
											<div>
												<h5 class="fs-17 fw-semibold mb-3 mb-0">My Account</h5>
												<div class="text-center">
													<div class="mb-4 profile-user">
														<img src="assets/images/user/img-02.jpg" class="rounded-circle img-thumbnail profile-img" id="profile-img" alt="">
														<div class="p-0 rounded-circle profile-photo-edit">
															<input id="profile-img-file-input" type="file" class="profile-img-file-input" onchange="previewImg()" >
															<label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
																<i class="uil uil-edit"></i>
															</label>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="firstName" class="form-label">First Name</label>
															<input type="text" class="form-control" id="firstName"
															value="Jansh" />
														</div>
													</div>
													<!--end col-->
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="lastName" class="form-label">Last Name</label>
															<input type="text" class="form-control" id="lastName"
															value="Dickens" />
														</div>
													</div>
													<!--end col-->
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="choices-single-categories" class="form-label">Account Type</label>
															<select class="form-select" data-trigger
															name="choices-single-categories"
															id="choices-single-categories"
															aria-label="Default select example">
															<option value="4">Accounting</option>
															<option value="1">IT & Software</option>
															<option value="3">Marketing</option>
															<option value="5">Banking</option>
														</select>
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="email" class="form-label">Email</label>
														<input type="text" class="form-control" id="email"
														value="Jansh@gmail.com" />
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
														class="form-label">Introduce Yourself</label>
														<textarea class="form-control" id="exampleFormControlTextarea1"
														rows="5">Desarrollador con más de 5 años de experiencia trabajando tanto en el sector público como privado. Diplomático, afable y experto en el manejo de situaciones delicadas. Altamente organizado, motivado y competente con las computadoras. Buscando aumentar los puntajes de satisfacción de los estudiantes de la Universidad Internacional. Licenciatura en comunicaciones.</textarea>
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="languages" class="form-label">Languages</label>
														<input type="text" class="form-control" id="languages"
														value="English, German, French" />
													</div>
												</div>
												<!--end col-->
												<div class="col-lg-6">
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
											<!--end col-->

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
													<input type="text" class="form-control" id="facebook"
													value="https://www.facebook.com" />
												</div>
											</div>
											<!--end col-->
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="twitter" class="form-label">Twitter</label>
													<input type="text" class="form-control" id="twitter"
													value="https://www.twitter.com" />
												</div>
											</div>
											<!--end col-->
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="linkedin" class="form-label">Linkedin</label>
													<input type="text" class="form-control" id="linkedin"
													value="https://www.linkedin.com" />
												</div>
											</div>
											<!--end col-->
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="whatsapp" class="form-label">Whatsapp</label>
													<input type="text" class="form-control" id="whatsapp"
													value="https://www.whatsapp.com" />
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
												<div class="mb-3">
													<label for="current-password-input" class="form-label">Contraseña actual</label>
													<input type="password" class="form-control"
													placeholder="Enter Current password"
													id="current-password-input" />
												</div>
											</div>
											<!--end col-->
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="new-password-input" class="form-label">Contraseña
													Nueva</label>
													<input type="password" class="form-control"
													placeholder="Enter new password"
													id="new-password-input" />
												</div>
											</div>
											<!--end col-->
											<div class="col-lg-6">
												<div class="mb-3">
													<label for="confirm-password-input" class="form-label">Confirmar Contraseña</label>
													<input type="password" class="form-control"
													placeholder="Confirm Password"
													id="confirm-password-input" />
												</div>
											</div>
											<!--end col-->

										</div>
										<!--end row-->
									</div>
									<!--end Change-password-->
									<div class="mt-4 text-end">
										<a href="javascript:void(0)" class="btn btn-primary">Actualizar</a>
									</div>
								</form>
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
