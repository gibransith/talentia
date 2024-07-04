<?php

use App\Http\Controllers\ConfigSistema;
?>
<div id="table-wraper"></div>
<table id="tablaGeneral" class="table table-striped">
	<thead>
		<tr>
			<th >Acción</th>
			<th >Nombre</th>
			<th >Primer apellido</th>
			<th >Segundo apellido</th>
			<th >E-mail</th>
			<th >Tipo usuario</th>
			<th >Activo</th>
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
						$route = route('admin.usuario.activar',[$r->id]);
						$mensaje = '¿Estás seguro de activar al usuario '.$r->nombreCompleto().' ?';
						?>
						<a class="dropdown-item" href="#" onclick="accionConfirm(this,
							'{{$route}}',
							'{{$mensaje}}',
							{})">
							Activar
						</a>

						<?php
						$route = route('admin.usuario.desactivar',[$r->id]);
						$mensaje = '¿Estás seguro de desactivar al usuario '.$r->nombreCompleto().' ?';
						?>
						<a class="dropdown-item" href="#" onclick="accionConfirm(this,
							'{{$route}}',
							'{{$mensaje}}',
							{})">
							Desactivar
						</a>
						<a class="dropdown-item" href="#" onclick="cargaDlg('Editar Usuario','{{ route('admin.usuarios.edit',[$r->id]) }}','modal-md')">
							Editar
						</a>
					</div>
				</div>
			</td>
			<td>{{ $r->nombre }}</td>
			<td>{{ $r->primer_apellido }}</td>
			<td>{{ $r->segundo_apellido }}</td>
			<td>{{ $r->email }}</td>
			<td>{{ $r->tipo_usuario }}</td>
			<td>{{ $r->activo }}</td>
		</tr>
		@endforeach
	</tbody>
</table>