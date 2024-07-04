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
                                                    <h5>Empecemos</h5>
                                                    <p class="text-white-70">Introduce los datos de la empresa para
                                                        enviarle una invitacion</p>
                                                </div>
                                                <form action="index.html" class="auth-form">
                                                    <!-- Tipo de Persona -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="tipoPersonaInput" class="form-label">Tipo de Persona</label>
                                                        <select  class="form-label form-select" id="tipoPersonaInput" required>
                                                            <option value="personaFisica">Persona Física</option>
                                                            <option value="personaMoral" >Persona Moral</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <!-- Nombre de la Empresa o Nombre Completo -->
                                                    <div class="mb-3">
                                                        <label for="nombreInput" class="form-label">Nombre de la Empresa / Nombre Completo</label>
                                                        <input type="text" class="form-control" id="nombreInput" required placeholder="Ingresa el nombre">
                                                    </div>
                                                
                                                    <!-- Descripción de la Empresa -->
                                                    <div class="mb-3">
                                                        <label for="descripcionInput" class="form-label">Descripción (Acerca de la empresa)</label>
                                                        <textarea class="form-control" id="descripcionInput" rows="3" placeholder="Añade una breve descripción"></textarea>
                                                    </div>
                                                
                                                    <!-- Nombre(s) del Administrador -->
                                                    <div class="mb-3">
                                                        <label for="administradorInput" class="form-label">Nombre(s) del Administrador</label>
                                                        <input type="text" class="form-control" id="administradorInput" required placeholder="Ingresa el nombre">
                                                    </div>
                                                
                                                    <!-- Correo Electrónico del Administrador -->
                                                    <div class="mb-3">
                                                        <label for="emailAdminInput" class="form-label">Correo Electrónico del Administrador</label>
                                                        <input type="email" class="form-control" id="emailAdminInput" required placeholder="Ingresa el correo electrónico">
                                                    </div>
                                                
                                                    <!-- Puesto del Administrador -->
                                                    <div class="mb-3">
                                                        <label for="puestoInput" class="form-label">Puesto del Administrador</label>
                                                        <input type="text" class="form-control" id="puestoInput" required placeholder="Ingresa el puesto">
                                                    </div>
                                                
                                                    <!-- Página Web -->
                                                    <div class="mb-3">
                                                        <label for="webInput" class="form-label">Página Web</label>
                                                        <input type="url" class="form-control" id="webInput" placeholder="Ingresa la página web">
                                                    </div>
                                                
                                                    <!-- Teléfono -->
                                                    <div class="mb-3">
                                                        <label for="telefonoInput" class="form-label">Teléfono</label>
                                                        <input type="tel" class="form-control" id="telefonoInput" placeholder="Ingresa el teléfono">
                                                    </div>
                                                
                                                    <!-- Ubicación Física -->
                                                    <div class="mb-3">
                                                        <label for="ubicacionInput" class="form-label">Ubicación Física</label>
                                                        <input type="text" class="form-control" id="ubicacionInput" placeholder="Ingresa la ubicación física">
                                                    </div>
                                                
                                                    <!-- Sector -->
                                                    <div class="mb-3">
                                                        <label for="sectorInput" class="form-label">Sector</label>
                                                        <input type="text" class="form-control" id="sectorInput" placeholder="Ingresa el sector (Industrial, Comercial, Servicios, ONG)">
                                                    </div>
                                                
                                                    <!-- Número de Empleados Totales -->
                                                    <div class="mb-3">
                                                        <label for="empleadosInput" class="form-label">Número de Empleados Totales</label>
                                                        <input type="number" class="form-control" id="empleadosInput" placeholder="Ingresa el número de empleados">
                                                    </div>
                                                
                                                    <!-- Perfil LinkedIn -->
                                                    <div class="mb-3">
                                                        <label for="linkedinInput" class="form-label">Perfil LinkedIn</label>
                                                        <input type="url" class="form-control" id="linkedinInput" placeholder="Ingresa el perfil de LinkedIn (opcional)">
                                                    </div>
                                                
                                                    <!-- Convenio Vigente -->
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" id="convenioVigenteInput">
                                                        <label class="form-check-label" for="convenioVigenteInput">¿Tiene convenio vigente?</label>
                                                    </div>
                                                
                                                    <!-- Interés en Convenio -->
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" id="interesConvenioInput">
                                                        <label class="form-check-label" for="interesConvenioInput">¿Te interesaría tener un convenio con UMx?</label>
                                                    </div>
                                                
                                                    <!-- Eres Emprendedor Egresado -->
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" id="emprendedorEgresadoInput">
                                                        <label class="form-check-label" for="emprendedorEgresadoInput">¿Eres emprendedor egresado de la UMx?</label>
                                                    </div>
                                                
                                                    <!-- Política de Privacidad -->
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" id="privacidadCheck" required>
                                                        <label class="form-check-label" for="privacidadCheck">Acepto la política de privacidad y uso de datos personales</label>
                                                    </div>
                                                
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-white btn-hover w-100">Enviar Invitación</button>
                                                    </div>
                                                </form>
                                                
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