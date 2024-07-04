<!-- Begin page -->
<div>


    <div class="main-content">

        <div class="page-content">

            <!-- START SIGN-UP -->
            <section class="bg-auth">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-12">
                            <div class="card auth-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 text-center">
                                        <div class="card-body p-4">
                                            <a href="index.html">
                                                <img src="{{ asset('assets/images/logo/logo_UMx.png') }}"
                                                    alt="" class="logo-light">
                                                <img src="{{ asset('assets/images/logo/logo_UMx.png') }}" alt="" class="logo-dark">
                                            </a>
                                            <div class="mt-5">
                                                <img src="assets/images/auth/sign-up.png" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="auth-content card-body p-5 text-white">
                                            <div class="w-100">
                                                <div class="text-center">
                                                    <h5>Alta de Alumnos y Exalumnos</h5>
                                                    <p class="text-white-70">Completa los datos requeridos para registrar al alumno o exalumno</p>
                                                </div>
                                                <form action="index.html" class="auth-form">
                                                    <div class="mb-3">
                                                        <label for="matriculaInput" class="form-label">Matrícula (opcional)</label>
                                                        <input type="text" class="form-control" id="matriculaInput" placeholder="Ingresa la matrícula">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nombreInput" class="form-label">Nombre y Apellidos</label>
                                                        <input type="text" class="form-control" id="nombreInput" placeholder="Ingresa el nombre y apellidos" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="redesInput" class="form-label">Redes Sociales</label>
                                                        <input type="text" class="form-control" id="redesInput" placeholder="Ingresa las redes sociales">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="correoInput" class="form-label">Correo Personal</label>
                                                        <input type="email" class="form-control" id="correoInput" placeholder="Ingresa el correo personal" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="direccionInput" class="form-label">Dirección (opcional)</label>
                                                        <input type="text" class="form-control" id="direccionInput" placeholder="Ingresa la dirección">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="telefonoInput" class="form-label">Teléfono</label>
                                                        <input type="tel" class="form-control" id="telefonoInput" placeholder="Ingresa el teléfono">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tipoUsuarioInput" class="form-label">Tipo de Usuario</label>
                                                        <select class="form-select" id="tipoUsuarioInput">
                                                            <option value="estudianteActual">Estudiante Actual</option>
                                                            <option value="egresado">Egresado</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="idiomasInput" class="form-label">Idiomas y Porcentaje de Dominio</label>
                                                        <input type="text" class="form-control" id="idiomasInput" placeholder="Ingresa idiomas y dominio">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="programaAcademicoInput" class="form-label">Programa Académico</label>
                                                        <input type="text" class="form-control" id="programaAcademicoInput" placeholder="Ingresa el programa académico">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="carreraInput" class="form-label">Carrera</label>
                                                        <input type="text" class="form-control" id="carreraInput" placeholder="Ingresa la carrera">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nivelInput" class="form-label">Nivel</label>
                                                        <input type="text" class="form-control" id="nivelInput" placeholder="Ingresa el nivel">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="promedioInput" class="form-label">Promedio</label>
                                                        <input type="text" class="form-control" id="promedioInput" placeholder="Ingresa el promedio">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="habilidadesInput" class="form-label">Habilidades Profesionales</label>
                                                        <input type="text" class="form-control" id="habilidadesInput" placeholder="Ingresa habilidades profesionales">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="acercaDeMiInput" class="form-label">Acerca de Mí</label>
                                                        <textarea class="form-control" id="acercaDeMiInput" rows="3" placeholder="Cuéntanos algo sobre ti"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="experienciaInput" class="form-label">Experiencia Laboral</label>
                                                        <textarea class="form-control" id="experienciaInput" rows="3" placeholder="Ingresa tu experiencia laboral"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="cvInput" class="form-label">Cargar CV en PDF</label>
                                                        <input type="file" class="form-control" id="cvInput" accept=".pdf">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="preguntaClaveInput" class="form-label">Pregunta Clave para Resetear Contraseña</label>
                                                        <select class="form-select" id="preguntaClaveInput">
                                                            <option value="mascota">¿Cuál es el nombre de tu mascota?</option>
                                                            <option value="color">¿Cuál es tu color favorito?</option>
                                                            <!-- Agrega las demás opciones aquí -->
                                                        </select>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input type="checkbox" class="form-check-input" id="privacidadCheck" required>
                                                        <label class="form-check-label" for="privacidadCheck">Acepto la política de privacidad y uso de datos personales</label>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-white btn-hover w-100">Guardar Información</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end auth-box-->
                    </div><!--end col-->
                </div><!--end row-->
        </div><!--end container-->
        </section>
        <!-- END SIGN-UP -->

    </div>
    <!-- End Page-content -->

</div>
<!-- end main content-->