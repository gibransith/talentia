<?php

use App\Http\Controllers\ConfigSistema;
?>
<div id="table-wraper"></div>
<table id="tablaGeneral" class="table table-striped">
	<thead>
		<tr>
			<th >Acción</th>
			<th >Empresa</th>
			<th >Nombre</th>
			<th >Tipo empleo</th>
			<th >Salario</th>
			<th >Carrera profesional</th>
			<th >Fechas</th>
			<th >Estado</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($registros as $r)
		<tr>
			<td>
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
			</td>
			<td>{{ $r->empresa->razon_social }}</td>
			<td>{{ $r->nombre }}</td>
			<td>{{ $r->tipo_empleo }}</td>
			<td>{{ ConfigSistema::moneyFormat($r->salario,2,true)  }}</td>
			<td>{{ $r->carrera_profesional }}</td>
			<td>
				<b>Fecha inicio:</b><br>
				{{ $r->fecha_inicio }}<br>
				<b>Fecha fin:</b><br>
				{{ $r->fecha_fin }}<br>
			</td>
			<td>
				{!! $r->getEstadoRegistro() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>