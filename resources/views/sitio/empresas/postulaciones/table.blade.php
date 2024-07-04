<?php

use App\Http\Controllers\ConfigSistema;
use App\Http\Controllers\PostulacionVacantesController;
use App\Models\PostulacionVacante;
?>
<div class="row justify-content-center">
    <div class="col-lg-12 mt-5 text-center">
        <div class="d-flex justify-content-center">
        </div>
    </div>
<div class="row">
    <div class="col-lg-12">
        <div class="candidate-list">
            <div class="candidate-list-box card mt-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @forelse ($postulaciones as $p)
                            <div class="col-auto">
                                <div class="candidate-list-images">
                                    <a href="#">
                                        <img src="{{ route('perfil.imagenPerfil.show', ['id' => $p->alumno->id]) }}" alt="Foto de perfil"
                                            class="avatar-md img-thumbnail rounded-circle">
                                    </a>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-5">
                                <div class="candidate-list-content mt-3 mt-lg-0">
                                    <h5 class="fs-19 mb-0">
                                        <a href="{{ route('empresa.perfilCandidato.detalle', ['id' => $p->id]) }}" class="primary-link">
                                           
                                            {{ $p->alumno->nombreCompleto() }}
                                        </a>
                                    </h5>
                                    <p class="text-muted mb-2">
                                        Carrera: {{ $p->alumno->carrera }}
                                    </p>
                                    <ul class="list-inline mb-0 text-muted">
                                        <li class="list-inline-item">
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">

                                {!! $p->getEstadoPostulacion() !!}
                                <br></br>
                                <div class="mt-2 mt-lg-0">
                                    <li class="list-inline-item">
                                        @if($p->estado == PostulacionVacante::ESTADO_PENDIENTE)
                                            <?php
                                                $route = route('empresa.postulaciones.aceptacionStore',[$p->id]);
                                                $mensaje = '¿Estás seguro de aceptar la postulación de '.$p->alumno->nombreCompleto().' ?';
                                            ?>
                                            <button class="btn btn-success btn-sm" onclick="accionConfirm(this,
                                                '{{$route}}',
                                                '{{$mensaje}}',
                                                {_method:'post'})">
                                                Aceptar
                                            </button>
                                            <button class="btn btn-danger btn-sm" onclick="cargaDlg('Rechazo de postulación','{{ route('empresa.postulaciones.rechazoForm',[$p->id]) }}','modal-md')">Rechazar</button>
                                        @endif
                                        <a href="{{ route('empresa.postulaciones.cvDownload',[$p->id]) }}" class="btn btn-primary btn-sm" target="_blank">
                                            Descargar CV
                                        </a>
                                    </li>
                                    {{-- <form action="{{ route('empresa.cambiar_estado_postulacion', ['id' => $p->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" name="estado" value="aceptado" class="btn btn-success btn-sm">Aceptar</button>
                                        <button type="submit" name="estado" value="rechazado" class="btn btn-danger btn-sm">Rechazar</button>
                                        <button class="btn btn-primary btn-sm" onclick="cargaDlg('Carga Curriculum vitae','{{ route('alumno.cvForm') }}','modal-md')">Descargar CV</button>
                                    </form> --}}
                                    
                                    </div>
                            </div><!--end col-->
                        @empty
                        <div class="col-lg-12 col-md-6 mt-4">
                            <div class="alert alert-info text-center mb-4" role="alert">
                                No hay alumnos postulados
                            </div>
                        </div>
                        @endforelse
                    </div><!--end row-->
</div><!--end container-->
</section>
<!-- END JOB-LIST -->
