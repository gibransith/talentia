<?php

use App\Http\Controllers\ConfiguracionGeneralController;
use App\Http\Controllers\Dashboard\EmpresasActivasController;
use App\Http\Controllers\Dashboard\SolicitudEmpresaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PostulacionVacanteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VacanteController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/*Route::get('/company-details', function () {
    return view('company-details');
})->name('company-details');

Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/job-details', function () {
    return view('job-details');
})->name('job-details');


Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/nav-bar', function () {
    return view('nav-bar');
})->name('nav-bar');

Route::get('/start-index', function () {
    return view('start-index');
})->name('start-index');

Route::get('/start-job', function () {
    return view('start-job');
})->name('start-job');

Route::get('/icons', function () {
    return view('/layouts-parts/dashboard-parts/icons');
})->name('icons');


Route::get('/sign-in', function () {
    return view('sign-in');
})->name('sign-in');

Route::get('/company-details', function () {
    return view('company-details');
})->name('company-details');

Route::get('/job-grid', function () {
    return view('job-grid');
})->name('job-grid');

Route::get('/candidate-grid', function () {
    return view('candidate-grid');
})->name('candidate-grid');

Route::get('/map', function () {
    return view('/layouts-parts/dashboard-parts/map');
})->name('map');

Route::get('/notifications', function () {
    return view('/layouts-parts/dashboard-parts/notifications');
})->name('notifications');

Route::get('/tables', function () {
    return view('/layouts-parts/dashboard-parts/tables');
})->name('tables');

Route::get('/typography', function () {
    return view('/layouts-parts/dashboard-parts/typography');
})->name('typography');

Route::get('/upgrade', function () {
    return view('/layouts-parts/dashboard-parts/upgrade');
})->name('upgrade');

Route::get('/user', function () {
    return view('/layouts-parts/dashboard-parts/user');
})->name('user');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
})->name('perfil');

Route::get('/select-role', function () {
    return view('select-role');
})->name('select-role');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Auth::routes();

Route::get('/layouts/page-title', function () {
    return view('page-title', [
        'title' => 'Título de la Página',
    ]);
});

Route::get('/form', function () {
    return view('admin/form');
})->name('form');
Auth::routes();

Route::get('/solicitud-vacantes', function () {
    return view('admin/solicitud-vacantes');
})->name('solicitud-vacantes');

Route::get('/vacantes-publicadas', function () {
    return view('admin/vacantes-publicadas');
})->name('vacantes-publicadas');

Route::get('/informacion-vacante', function () {
    return view('admin/informacion-vacante');
})->name('informacion-vacante');
Route::get('/publicar', function () {
    return view('publicar');
})->name('publicar');

Auth::routes();
Route::get('/register.blade', function () {
    return view('register.blade');
})->name('manage-jobs');*/


Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    $usuario = $request->user();
    if(!$usuario->esAdministradorEmpresa()){
        $usuario->activo = 'Si'; //por que el usuario se activa cuando aceptan la empresa
        $usuario->save();
    }

    if($usuario->esAdministrador()){
        return redirect()->route('admin.index');
    }else if($usuario->esAdministradorEmpresa()){
        return redirect()->route('empresa.vacantes.index');
    }else{
        return redirect()->route('alumno.vacantes.index');
    }
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/usuario', [App\Http\Controllers\UsuarioController::class, 'inputsUsuario'])->name('registro.inputsUsuario');

/*
| Rutas solo para administradores
*/
Route::group(['as'=> 'admin.','prefix' => 'admin','middleware'=>['auth','verified','admin']], function () {

    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('index');

    /*
    | REPORTES
    */
    Route::get('/reportes/estudiantes', [App\Http\Controllers\AdminController::class, 'reporteEstudiantes'])->name('reportes.estudiantes');
    Route::get('/reportes/vacantes', [App\Http\Controllers\AdminController::class, 'reporteVacantes'])->name('reportes.vacantes');
    Route::get('/reportes/empresas', [App\Http\Controllers\AdminController::class, 'reporteEmpresas'])->name('reportes.empresas');

    /*
    | USUARIOS
    */
    Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
    Route::post('/usuario/activar/{id}', [UsuarioController::class, 'activar'])->name('usuario.activar');
    Route::post('/usuario/desactivar/{id}', [UsuarioController::class, 'desactivar'])->name('usuario.desactivar');

    /*
    | EMPRESAS
    */
    Route::resource('empresas', App\Http\Controllers\EmpresaController::class);
    Route::post('/empresa/aceptar/{id}', [EmpresaController::class, 'aceptar'])->name('empresa.aceptar');
    Route::post('/empresa/rechazar/{id}', [EmpresaController::class, 'rechazar'])->name('empresa.rechazar');

    /*
    | VACANTES
    */
    Route::get('/vacantes/index', [VacanteController::class, 'indexAdmin'])->name('vacantes.index');
    Route::post('/vacantes/autorizar/{id}', [VacanteController::class, 'autorizar'])->name('vacantes.autorizar');
    Route::post('/vacantes/rechazar/{id}', [VacanteController::class, 'rechazar'])->name('vacantes.rechazar');
    Route::post('/vacantes/cerrar/{id}', [VacanteController::class, 'cerrar'])->name('vacantes.cerrar');
    Route::get('/vacantes/{id}/postulaciones/', [VacanteController::class, 'postulacionesAdmin'])->name('vacantes.postulaciones');


    // ADMIN SOLICITUDES DE EMPRESAS
    Route::get('/solicitud-empresa', [SolicitudEmpresaController::class, 'index'])->name('solicitud-empresa');    
    Route::post('/configuracion/actualizar', [ConfiguracionGeneralController::class, 'autoaceptarEmpresas'])->name('configuracion.actualizar');

    // ADMIN EMPRESAS ACTIVAS
    Route::get('/empresas-activas', [EmpresasActivasController::class, 'index'])->name('empresas-activas');
    Route::put('/empresas/desactivar/{id}', [EmpresasActivasController::class, 'inactivarEmpresa'])->name('empresas.desactivar');

});

Route::get('/', function () {
    return redirect()->route('login');
    //dd("entre aqui");
    //return redirect()->route('sitio.vacantes.indexSitio');
})->name('index');

Route::group(['middleware'=>['auth','verified']], function () {
    /*********************************************************
    // Foto de perfil
    **********************************************************/
    //Route::get('/perfil/fotografia/form/upload', [App\Http\Controllers\UsuarioController::class, 'pictureForm'])->name('perfil.picture.form.upload');
    //Route::post('/perfil/fotografia/form/upload/store', [App\Http\Controllers\UsuarioController::class, 'storePictureForm'])->name('perfil.picture.form.upload.store');
    Route::get('/perfil/imagenPerfil/show/{id}',[App\Http\Controllers\UsuarioController::class, 'showImagenPerfil'])->name('perfil.imagenPerfil.show');
    
    Route::get('/empresa/imagenLogo/show/{id}',[App\Http\Controllers\UsuarioController::class, 'showImagenLogo'])->name('empresa.imagenLogo.show');

    Route::get('vacante/{id}/detalle', [App\Http\Controllers\VacanteController::class, 'show'])->name('vacante.detalle');
    Route::get('empresa/{id}/showSitio', [App\Http\Controllers\EmpresaController::class, 'showSitio'])->name('empresa.showSitio');
});

Route::group(['as'=> 'alumno.','prefix' => 'alumno','middleware'=>['auth','verified','activo','alumno']], function () {
    
    /*
    | Perfil
    */
    Route::get('perfil', [App\Http\Controllers\UsuarioController::class, 'perfilAlumno'])->name('perfil');
    Route::post('perfil/update/{id}', [App\Http\Controllers\UsuarioController::class, 'perfilAlumnoUpdate'])->name('perfil.update');
    
    /*
    | Alumno
    */
    Route::get('cv/form', [App\Http\Controllers\AlumnoController::class, 'cvForm'])->name('cvForm');
    Route::post('cv/store', [App\Http\Controllers\AlumnoController::class, 'cvStore'])->name('cvStore');
    Route::get('cv/download', [App\Http\Controllers\AlumnoController::class, 'cvDownload'])->name('cvDownload');
    
    /*
    | Vacantes
    */
    Route::get('vacantes', [App\Http\Controllers\VacanteController::class, 'indexAlumno'])->name('vacantes.index');
    Route::get('postulaciones', [App\Http\Controllers\PostulacionVacanteController::class, 'indexAlumno'])->name('postulaciones.index');
    Route::get('vacantes/detalles/{id}', [App\Http\Controllers\VacanteController::class, 'show'])->name('vacante.detalle');
    Route::post('vacantes/aplicar', [App\Http\Controllers\PostulacionVacanteController::class, 'aplicar'])->name('vacante.aplicar');
    //Route::get('vacantes/search', [App\Http\Controllers\VacanteController::class, 'search'])->name('vacantes.search');

});

Route::group(['as'=> 'empresa.','prefix' => 'empresa','middleware'=>['auth','verified','activo','empresa']], function () {
    
    /*
    | Perfil
    */
    // Route::get('perfil', [App\Http\Controllers\UsuarioController::class, 'perfil'])->name('perfil');
    
    /*
    | Perfil
    */
    Route::get('perfil', [App\Http\Controllers\UsuarioController::class, 'perfilEmpresa'])->name('perfil');
    Route::post('perfil/update/{id}', [App\Http\Controllers\UsuarioController::class, 'perfilEmpresaUpdate'])->name('perfil.update');

    /*
    | Vacantes
    */
    Route::resource('vacantes', App\Http\Controllers\VacanteController::class);
    Route::get('vacantes/cerrarForm/{id}', [VacanteController::class, 'cerrarForm'])->name('vacantes.cerrarForm');
    Route::post('vacantes/cerrarStore/{id}', [VacanteController::class, 'cerrarStore'])->name('vacantes.cerrarStore');
    Route::post('vacantes/inputCierre', [VacanteController::class, 'inputCierre'])->name('vacantes.inputCierre');





    Route::get('postulaciones/vacante/{id}', [PostulacionVacanteController::class, 'indexEmpresa'])->name('postulaciones.index');
    Route::get('postulaciones/perfil-candidato/{id}', [App\Http\Controllers\PostulacionVacanteController::class, 'show'])->name('perfilCandidato.detalle');
    Route::put('/empresa/cambiar_estado_postulacion/{id}', [PostulacionVacanteController::class, 'cambiarEstado'])->name('cambiar_estado_postulacion');
    Route::get('postulaciones/rechazoForm/{id}', [PostulacionVacanteController::class, 'rechazoForm'])->name('postulaciones.rechazoForm');
    Route::post('postulaciones/rechazoStore/{id}', [PostulacionVacanteController::class, 'rechazoStore'])->name('postulaciones.rechazoStore');
    Route::post('postulaciones/aceptacionStore/{id}', [PostulacionVacanteController::class, 'aceptacionStore'])->name('postulaciones.aceptacionStore');
    Route::get('postulaciones/cv/download/{id}', [PostulacionVacanteController::class, 'cvDownload'])->name('postulaciones.cvDownload');
    //
});
