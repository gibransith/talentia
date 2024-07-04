<div class="col-lg-4 col-md-6 mt-4">
	<div class="card job-grid-box">
		<div class="card-body p-4">
			<div>
				<a href="{{ route('empresa.showSitio',['id' => $r->empresa->id]) }}">
					<img src="{{ route('empresa.imagenLogo.show', ['id' => $r->empresa->id]) }}" alt="" class="img-fluid rounded-3 mb-3" style="width: 60px;"/>
				</a>
					
			</div>
			<div class="mt-4">
				<a href="{{ route('alumno.vacante.detalle', ['id' => $r->id]) }}" class="primary-link"><h5 class="fs-17 mb-1">{{ $r->nombre }}</h5></a>
				<p class="text-muted"></p>
				<ul class="list-inline">
					<li class="list-inline-item">
						<p>{{$r->empresa->razon_social}}</p>
						<span class="badge bg-success-subtle text-success  fs-13 mt-1">${{ $r->salario }}/ Mes</span>
					</li>
					<li class="list-inline-item">
						<span class="badge bg-primary-subtle text-primary  fs-13 mt-1">Mín. 1 Año</span>
					</li>
				</ul>
			</div>
			<div class="job-grid-content mt-3">
				<p class="text-muted">{{ $r->descripcion }}</p>
				<div class="d-flex align-items-center justify-content-between mt-4 border-top pt-3">
					<p class="text-muted float-start mb-0">{{ $r->created_at->diffForHumans() }}</p>
					<div class="text-end">
						@if (auth()->user()->esAlumno())
							@if (auth()->user()->getAlumnoUsuario()->aplicoVacante($r->id))
								<a href="" class="btn btn-sm btn-disabled" disabled onclick="return false;">
									Ya has aplicado <i class="uil uil-angle-right-b"></i>
								</a>
							@else
								<a href="#applyNow" data-bs-toggle="modal" class="btn btn-sm btn-primary" onclick="setVacanteId('{{ $r->id }}')">
									Aplica ya<i class="uil uil-angle-right-b"></i>
								</a>
							@endif
						@endif
					</div>
				</div>
			</div>
		</div><!--end card-body-->
	</div><!--end job-grid-box-->
</div><!--end col-->