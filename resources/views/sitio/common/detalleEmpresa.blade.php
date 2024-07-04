<?php

use App\Http\Controllers\ConfigSistema;
?>
@extends('sitio.layouts.master')

@section('title')
	Detalles empresa
@endsection

@section('css')
@endsection

@section('content')
	@include('sitio.common.page-title',[
		'titulo' => 'Detalles empresa'
	])

	<!-- START CANDIDATE-DETAILS -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="card side-bar">
						<div class="card-body p-4">
							<div class="candidate-profile text-center">
								<img src="{{ route('empresa.imagenLogo.show', ['id' => $empresa->id]) }}" alt="" class="avatar-lg rounded-circle">
								<h6 class="fs-18 mb-1 mt-4">{{ $empresa->razon_social }}</h6>
								<p class="text-muted mb-4">{{ $empresa->created_at->diffForHumans() }}</p>
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
						</div><!--end candidate-profile-->

						<div class="candidate-profile-overview  card-body border-top p-4">
							<h6 class="fs-17 fw-medium mb-3">Contacto</h6>
							<ul class="list-unstyled mb-0">
								<li>
									<div class="d-flex">
										<label>Pagina web</label>
										<div>
											<p class="text-muted text-break mb-0">
												{{ $empresa->pagina_web }}
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
											<p class="text-muted mb-0">{{ $empresa->ubicacion_fisica }}</p>
										</div>
									</div>
								</li>
							</ul>
						</div><!--candidate-profile-overview-->
						{{-- <div class="card-body p-4 border-top">
							<div class="ur-detail-wrap">
								<div class="ur-detail-wrap-header">
									<h6 class="fs-17 fw-medium mb-3">Working Days</h6>
								</div>
								<div class="ur-detail-wrap-body">
									<ul class="working-days">
										<li>Monday<span>9AM - 5PM</span></li>
										<li>Tuesday<span>9AM - 5PM</span></li>
										<li>Wednesday<span>9AM - 5PM</span></li>
										<li>Thursday<span>9AM - 5PM</span></li>
										<li>Friday<span>9AM - 5PM</span></li>
										<li>Saturday<span>9AM - 5PM</span></li>
										<li>Sunday<span class="text-danger">Close</span></li>
									</ul>
								</div>
							</div>
						</div><!--end card-body-->
						<div class="card-body p-4 border-top">
							<h6 class="fs-17 fw-medium mb-4">Company Location</h6>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1628067715234!5m2!1sen!2sin"
							style="width:100%"  height="250" allowfullscreen="" loading="lazy"></iframe>
						</div> --}}
					</div><!--end card-->
				</div><!--end col-->

				<div class="col-lg-8">
					<div class="card ms-lg-4 mt-4 mt-lg-0">
						<div class="card-body p-4">
							<div class="mb-5">
								<h6 class="fs-17 fw-medium mb-4">Acerca de la compañía</h6>
								<p class="text-muted">
									{{ $empresa->descripcion }}
								</p>
							</div>

							<div>
								<h6 class="fs-17 fw-medium mb-4">Vacantes abiertas</h6>
								@forelse($vacantes as $r)
									<div class="job-box card mt-4">
										<div class="p-4">
											<div class="row align-items-center">
												<div class="col-md-2">
													<div class="text-center mb-4 mb-lg-0">
														<a href="{{ route('empresa.showSitio',['id' => $empresa->id]) }}">
															<img src="{{ route('empresa.imagenLogo.show', ['id' => $empresa->id]) }}" alt="Logo de la empresa" class="img-fluid rounded-3 mb-3" style="width: 60px;">
														</a>
													</div>
												</div>
												<!--end col-->
												<div class="col-md-3">
													<div class="mb-2 mb-md-0">
														<h5 class="fs-18 mb-0"><a href="{{ route('vacante.detalle',[$r->id]) }}" class="text-dark">{{ $r->nombre }}</a></h5>
														<p class="text-muted fs-14 mb-0">{{ $empresa->razon_social }}</p>
													</div>
												</div>
												<!--end col-->
												<div class="col-md-3">
													<div class="d-flex mb-2">
														<div class="flex-shrink-0">
															<i class="mdi mdi-map-marker text-primary me-1"></i>
														</div>
														<p class="text-muted mb-0">{{ $r->localizacion }}</p>
													</div>
												</div>
												<!--end col-->
												<div class="col-md-2">
													<div class="d-flex mb-0">
														<div class="flex-shrink-0">
															<i class="uil uil-clock-three text-primary me-1"></i>
														</div>

														<p class="text-muted mb-0">{{ $r->tipo_empleo }}</p>
													</div>
												</div>
												<!--end col-->
												<div class="col-md-2">
													<div>
														{{-- {!! $r->getEstadoPostulacion() !!} --}}
													</div>
												</div>
												<!--end col-->
											</div>
											<!--end row-->
										</div>
										<div class="p-3 bg-light">
											<div class="row justify-content-between">
												<div class="col-md-4">

												</div>
												<!--end col-->
											</div>
											<!--end row-->
										</div>
									</div>
								@empty
									<div>
										<div class="alert alert-primary" role="alert">
											Sin registros
										</div>
									</div>
								@endforelse
							</div>
						</div><!-- card body end -->
					</div><!--end card-->
				</div><!--end col-->
			</div><!--end row-->
		</div><!--end container-->
	</section>
	<!-- END CANDIDATE-DETAILS -->
	@endsection

	@section('script')
	@endsection
