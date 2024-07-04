<?php

use App\Http\Controllers\ConfigSistema;
?>

<!-- START JOB-LIST -->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="me-lg-5">
					<div>
						@forelse($registros as $r)
						<div class="job-box card mt-4">
							<div class="p-4">
								<div class="row align-items-center">
									<div class="col-md-2">
										<div class="text-center mb-4 mb-lg-0">
											<a href="{{ route('empresa.showSitio',['id' => $r->vacante->id_empresa]) }}">
												<img src="{{ route('empresa.imagenLogo.show', ['id' => $r->vacante->id_empresa]) }}" alt="Logo de la empresa" class="img-fluid rounded-3 mb-3" style="width: 60px;">
											</a>
										</div>
									</div>
									<!--end col-->
									<div class="col-md-3">
										<div class="mb-2 mb-md-0">
											<h5 class="fs-18 mb-0"><a href="{{ route('vacante.detalle',[$r->vacante->id]) }}" class="text-dark">{{ $r->vacante->nombre }}</a></h5>
											<p class="text-muted fs-14 mb-0">{{ $r->vacante->empresa->razon_social }}</p>
										</div>
									</div>
									<!--end col-->
									<div class="col-md-3">
										<div class="d-flex mb-2">
											<div class="flex-shrink-0">
												<i class="mdi mdi-map-marker text-primary me-1"></i>
											</div>
											<p class="text-muted mb-0">{{ $r->vacante->localizacion }}</p>
										</div>
									</div>
									<!--end col-->
									<div class="col-md-2">
										<div class="d-flex mb-0">
											<div class="flex-shrink-0">
												<i class="uil uil-clock-three text-primary me-1"></i>
											</div>

											<p class="text-muted mb-0">{{ $r->vacante->tipo_empleo }}</p>
										</div>
									</div>
									<!--end col-->
									<div class="col-md-2">
										<div>
											{!! $r->getEstadoPostulacion() !!}
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
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-12 mt-5  text-center">
				<div class="d-flex justify-content-center">
					{{ $registros->links() }}
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END JOB-LIST -->