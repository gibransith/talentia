<?php

use App\Http\Controllers\ConfigSistema;
?>
<div id="table-wraper"></div>
<table id="tablaGeneral" class="table table-striped">
	<thead>
		<tr>
			{{-- <th >Acción</th> --}}
			<th >Alumno</th>
			<th >CV</th>
			<th >Estado</th>
			<th >Fecha de registro</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($registros as $r)
		<tr>
			{{-- <td>
				<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-cog"></i> <i class="mdi mdi-chevron-down"></i>
					</button>
					<div class="dropdown-menu" style="">
						<?php
						$route = route('admin.vacantes.autorizar',[$r->id]);
						$mensaje = '¿Estás seguro de aceptar la vacante '.$r->nombre.' ?';
						?>
						<a class="dropdown-item" href="#" onclick="accionConfirm(this,
							'{{$route}}',
							'{{$mensaje}}',
							{})">
							Autorizar
						</a>

						<?php
						$route = route('admin.vacantes.rechazar',[$r->id]);
						$mensaje = '¿Estás seguro de rechazar la vacante '.$r->nombre.' ?';
						?>
						<a class="dropdown-item" href="#" onclick="accionConfirm(this,
							'{{$route}}',
							'{{$mensaje}}',
							{})">
							Rechazar
						</a>
						<a class="dropdown-item" href="{{ route('admin.vacantes.postulaciones',[$r->id]) }}" >
							Postulaciones
						</a>
					</div>
				</div>
			</td> --}}
			<td>{{ $r->alumno->nombreCompleto() }}</td>
			<td>
				<a href="{{ route('alumno.cvDownload') }}" class="fs-20 text-muted" target="_blank"><i class="uil uil-import"></i></a>
			</td>
			<td>{!! $r->getEstadoPostulacion() !!}</td>
			<td>
				{{ ConfigSistema::showDate($r->created_at,true)  }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>