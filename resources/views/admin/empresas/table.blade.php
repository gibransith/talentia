<?php

use App\Models\Empresa;
?>
<div id="table-wraper"></div>
<table id="tablaGeneral" class="table table-striped">
	<thead>
		<tr>
			<th >Acción</th>
			<th >Tipo</th>
			<th >Razón social</th>
			<th >Estado de la empresa</th>
			<th >Sector</th>
			<th >Página web</th>
			<th >Teléfono</th>
			<th >Convenio</th>
			<th >Interés</th>
			<th >Egresado</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($registros as $empresa)
		<tr>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-cog"></i> <i class="mdi mdi-chevron-down"></i>
					</button>
					<div class="dropdown-menu" style="">
						@if($empresa->estado_registro == Empresa::EST_REGISTO_PENDIENTE)
							<?php
							$route = route('admin.empresa.aceptar',[$empresa->id]);
							$mensaje = '¿Estás seguro de aceptar la empresa '.$empresa->razon_social.' ?';
							?>
							<a class="dropdown-item" href="#" onclick="accionConfirm(this,
								'{{$route}}',
								'{{$mensaje}}',
								{})">
								Aceptar
							</a>

							<?php
							$route = route('admin.empresa.rechazar',[$empresa->id]);
							$mensaje = '¿Estás seguro de rechazar la empresa '.$empresa->razon_social.' ?';
							?>
							<a class="dropdown-item" href="#" onclick="accionConfirm(this,
								'{{$route}}',
								'{{$mensaje}}',
								{})">
								Rechazar
							</a>
						@endif

						<a class="dropdown-item" href="#" onclick="cargaDlg('Información empresa','{{ route('admin.empresas.show',[$empresa->id]) }}','modal-md')">
							Información
						</a>

					</div>
				</div>
			</td>
			<td>{{ $empresa->tipo }}</td>
			<td>{{ $empresa->razon_social }}</td>
			<td>
				{!! $empresa->getEstadoRegistro() !!}
			</td>
			<td>{{ $empresa->sector }}</td>
			<td>{{ $empresa->pagina_web }}</td>
			<td>{{ $empresa->telefono }}</td>
			<td>{{ $empresa->convenio_vigente }}</td>
			<td>{{ $empresa->interesa_convenio }}</td>
			<td>{{ $empresa->egresado_umx }}</td>
		</tr>
		@endforeach
	</tbody>
</table>