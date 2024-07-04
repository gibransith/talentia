<table class="table table-sm table-striped table-hover">
	<thead>
		<tr>
			<th>Campo</th>
			<th>Valor</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Razón social/Nombre</td>
			<td>{{ $empresa->razon_social }}</td>
		</tr>
		<tr>
			<td>Tipo</td>
			<td>{{ $empresa->tipo }}</td>
		</tr>
		<tr>
			<td>Sector</td>
			<td>{{ $empresa->sector }}</td>
		</tr>
		<tr>
			<td>Número de empleados</td>
			<td>{{ $empresa->num_empleados }}</td>
		</tr>
		<tr>
			<td>Descripción</td>
			<td>{{ $empresa->descripcion }}</td>
		</tr>
		<tr>
			<td>Teléfono</td>
			<td>{{ $empresa->telefono }}</td>
		</tr>
		<tr>
			<td>Ubicación fisica</td>
			<td>{{ $empresa->ubicacion_fisica }}</td>
		</tr>
		<tr>
			<td>Página web</td>
			<td>
				@if($empresa->pagina_web)
					<a target="_blank" href="{{ $empresa->pagina_web }}">
						{{ $empresa->pagina_web }}
					</a>
				@else
					Sin asignar
				@endif
			</td>
		</tr>
		<tr>
			<td>Linkedin</td>
			<td>
				@if($empresa->perfil_linkedin)
					<a target="_blank" href="{{ $empresa->perfil_linkedin }}">
						{{ $empresa->perfil_linkedin }}
					</a>
				@else
					Sin asignar
				@endif
			</td>
		</tr>
		<tr>
			<td>Convenio vigente</td>
			<td>{{ $empresa->convenio_vigente }}</td>
		</tr>
		<tr>
			<td>Interesa convenio</td>
			<td>{{ $empresa->interesa_convenio }}</td>
		</tr>
		<tr>
			<td>Egresado UMX</td>
			<td>{{ $empresa->egresado_umx }}</td>
		</tr>
		<tr>
			<td>Estado registro</td>
			<td>{!! $empresa->getEstadoRegistro() !!}</td>
		</tr>
		<tr>
			<td>Logo</td>
			<td>{{ "" }}</td>
		</tr>
	</tbody>
</table>