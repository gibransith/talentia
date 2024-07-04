<?php

use App\Http\Controllers\ConfigSistema;
?>
<div id="table-wraper"></div>
<table id="tablaGeneral" class="table table-striped">
	<thead>
		<tr>
			<th >Acción</th>
			{{-- <th >Empresa</th> --}}
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
				@if($r->estadoPendiente())           
					<div class="btn-group">
						<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="uil uil-cog ms-1"></i> <i class="mdi mdi-chevron-down"></i>
						</button>
						<div class="dropdown-menu" style="">
							<?php
							$route = route('empresa.vacantes.edit',[$r->id]);
							?>
							<a class="dropdown-item" href="{{ $route }}" >
								Editar
							</a>
							<?php
							$route = route('empresa.vacantes.destroy',[$r->id]);
							$mensaje = '¿Estás seguro de eliminar la vacante '.$r->nombre.' ?';
							?>
							<a class="dropdown-item" href="#" onclick="accionConfirm(this,
								'{{$route}}',
								'{{$mensaje}}',
								{_method:'delete'})">
								Eliminar
							</a>
						</div>
					</div>
				@endif
				@if($r->estadoAutorizada())
					<div class="btn-group">
						<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="uil uil-cog ms-1"></i> <i class="mdi mdi-chevron-down"></i>
						</button>
						<div class="dropdown-menu" style="">
							<?php
							$route = route('empresa.postulaciones.index', ['id' => $r->id]);
							?>
							<a class="dropdown-item" href="{{ $route }}" >
								Postulaciones
							</a>
							<?php
							$route = route('empresa.vacantes.cerrarForm',[$r->id]);
							?>
							<a class="dropdown-item" href="" onclick="cargaDlg('Cerrar vacante','{{ $route }}','modal-md'); return false;" >
								Cerrar vacante
							</a>
						</div>
					</div>
					{{-- <div class="btn-group">
						<a href="{{ route('empresa.postulaciones.index', ['id' => $r->id]) }}" class="btn btn-primary">Ver Postulaciones</a>
					</div> --}}
				@endif
			</td>
			{{-- <td>{{ $r->empresa->razon_social }}</td> --}}
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

{{-- <div class="row justify-content-center">
	<div class="col-lg-12 mt-5  text-center">
		<div class="d-flex justify-content-center">
			{{ $registros->links() }}
		</div>
	</div>
</div> --}}