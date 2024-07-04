<?php

namespace App\Http\Controllers;

use App\Models\PostulacionVacante;
use App\Models\Vacante;
use App\Models\Notificacion;
use App\Models\Alumno;
use Illuminate\Http\Request;

class PostulacionVacanteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*public function index()
    {
        $registros = Vacante::paginate(env('APP_ROWSPAGE'));
        return view('sitio.empresas.vacantes.index',[
            'registros' => $registros,
        ]);
    }

    public function indexAdmin()
    {
        $registros = Vacante::all();
        return view('admin.vacantes.index',[
            'registros' => $registros,
        ]);
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function indexAlumno(){
    	$alumno = \Auth::user()->getAlumnoUsuario();
        $registros = PostulacionVacante::where('id_alumno',$alumno->id)
                                    //->get();
        							->paginate(env('APP_ROWSPAGE'));
        return view('sitio.alumnos.postulaciones.index',[
            'registros' => $registros,
        ]);
    }

    public function indexEmpresa(Request $request, $vacante) {
        $empresa = \Auth::user()->getEmpresaUsuario();
        $vacante = Vacante::where('id', $vacante)->where('id_empresa', $empresa->id)->first(); // Asegúrate de que la vacante pertenezca a la empresa logeada
    
        if (!$vacante) {
            // Maneja el caso en el que la vacante no existe o no pertenece a la empresa
        }
    
        $postulaciones = PostulacionVacante::where('id_vacante', $vacante->id)->get();
    
        return view('sitio.empresas.postulaciones.index', [
            'vacante' => $vacante,
            'postulaciones' => $postulaciones,
        ]);
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id){
        $postulacion = PostulacionVacante::findOrFail($id);
        $vacante = $postulacion->vacante;
        $alumno = $postulacion->alumno;
        $usuario = $alumno->user;
        
        return view('sitio.empresas.postulaciones.candidate-details', [
            'postulacion' => $postulacion,
            'vacante' => $vacante,
            'alumno' => $alumno,
            'usuario' => $usuario,
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function aceptarPostulacion($id)
    {
        $postulacion = PostulacionVacante::find($id);

        if (!$postulacion) {
            return redirect()->route('ruta_de_error')->with('error', 'Postulación no encontrada');
        }

        $postulacion->estado = 'Aceptado';
        $postulacion->save();
        

        return redirect()->route('ruta_de_exito')->with('success', 'Postulación aceptada exitosamente');
    }

    public function cambiarEstado(Request $request, $id)
    {
        try {
            $postulacion = PostulacionVacante::findOrFail($id);

            $nuevoEstado = $request->input('estado');

            if (!$postulacion) {
                return redirect()->back()->with('error', 'La ruta no es válida.');
                
            }

            if ($nuevoEstado == 'aceptado' || $nuevoEstado == 'rechazado') {
                $postulacion->estado = ucfirst($nuevoEstado); // Cambia el estado a Aceptado o Rechazado
                $postulacion->save();
                return redirect()->back()->with('success', 'Estado de postulación actualizado correctamente.');
            } else {
                return redirect()->back()->with('error', 'El estado proporcionado no es válido.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al cambiar el estado de la postulación: ' . $e->getMessage());
        }
    }
    
    public function aplicar(Request $request)
    {
        $vacanteId = $request->input('vacante_id');
        $user = auth()->user();
        $alumno = $user->getAlumnoUsuario();
        
        if (!$alumno) { // El alumno existe
            return back()->with('error', 'No se encontró un registro de alumno para el usuario actual');
        }
        
        if (PostulacionVacante::existePostulacion($vacanteId, $alumno->id)) { // El alumno ya se postulo
            
            ConfigSistema::errorFlash($request,'Ya te has postulado a esta vacante'); 
            return back()->with('error', 'Ya has enviado una solicitud para esta vacante');
        }
        
        $postulacion = new PostulacionVacante();
        $postulacion->id_vacante = $vacanteId;
        $postulacion->id_alumno = $alumno->id;
        $postulacion->estado = PostulacionVacante::ESTADO_PENDIENTE;
        
        if ($postulacion->save()) {
            if ($request->hasFile('file_document')) { // El usuario si o no tiene cv y quiere continuar con este cv
                $file = $request->file('file_document');
                $nameFile = $file->getClientOriginalName();
                $directory = $postulacion->getRutaCV();
                $directory2 = storage_path('app/'.$directory);
                ConfigSistema::creaCarpeta($directory2);
                $path = $request->file('file_document')->storeAs($directory,$nameFile);
                $postulacion->cv_alumno = $nameFile;
                if (!$postulacion->save()) {
                    ConfigSistema::errorFlash($request,'No se pudo guardar el Curriculum'); 
                    return back()->with('error', 'No se pudo guardar el Curriculum');
                }
            } else { // El usuario tiene cv y quiere continuar con este para aplicar 
                if ($alumno->cv) {
                    $rutaCVAlumno = $alumno->getRutaCV();
                    $nombreCVAlumno = $alumno->cv;
                    $rutaCVAlumnoCompleta = storage_path('app/'.$rutaCVAlumno.'/'.$nombreCVAlumno);
                    
                    if (file_exists($rutaCVAlumnoCompleta)) {
                        $rutaDestino = $postulacion->getRutaCV();
                        $rutaDestinoCompleta = storage_path('app/'.$rutaDestino);
                        ConfigSistema::creaCarpeta($rutaDestinoCompleta);
                        $rutaDestinoCompletaArchivo = $rutaDestinoCompleta . '/' . $nombreCVAlumno;
                        if (copy($rutaCVAlumnoCompleta, $rutaDestinoCompletaArchivo)) {
                            $postulacion->cv_alumno = $nombreCVAlumno;
                        } else {
                            ConfigSistema::errorFlash($request,'Error al copiar el CV del perfil'); 
                            return back()->with('error', 'No se pudo enviar la solicitud');
                        }
                    } else {
                        ConfigSistema::errorFlash($request,'El cv del perfil no existe'); 
                        return back()->with('error', 'No se pudo enviar la solicitud');
                    }

                    if (!$postulacion->save()) {
                        ConfigSistema::errorFlash($request,'No se pudo guardar el Curriculum'); 
                        return back()->with('error', 'No se pudo guardar el Curriculum');
                    }
                }
            }
            ConfigSistema::succesFlash($request,'Te has postulado exitosamente '); 
               //Se crea notificación
               $email = $user->email;
               $titulo = "Postulacion Exitosa";
               $notificacion = 'Alumno postulado con exito';
            Notificacion::createNotification($titulo,$notificacion,null,$postulacion->id,true,Notificacion::EMAIL_CREACION_POSTULACION,$email);
            return redirect()->route('alumno.vacantes.index')->with('success', 'Solicitud enviada correctamente');
        } else {
            return back()->with('error', 'No se pudo enviar la solicitud');
        }
    }

    public function rechazoForm(Request $request,$id)
    {
        $postulacion = PostulacionVacante::findOrFail($id);
        $vacante = $postulacion->vacante;
        $alumno = $postulacion->alumno;
        $usuario = \Auth::user();
        $empresa = $usuario->getEmpresaUsuario();
        return view('sitio.empresas.postulaciones.rechazoForm',[
            'postulacion' => $postulacion,
            'vacante' => $vacante,
            'alumno' => $alumno,
            'empresa' => $empresa
        ]);
    }

    public function rechazoStore(Request $request,$id)
    {
        $postulacion = PostulacionVacante::findOrFail($id);
        $vacante = $postulacion->vacante;
        $alumno = $postulacion->alumno;
        $usuario = \Auth::user();
        $empresa = $usuario->getEmpresaUsuario();
        //verifico que la postulacion sea de la vacante de esa empresa
        try {
            if($empresa->id == $vacante->id_empresa){
                \DB::beginTransaction();
                $postulacion->estado = PostulacionVacante::ESTADO_RECHAZADO;
                $postulacion->mensaje_estado = $request->mensaje;
                $postulacion->save();
                //Se crea notificación
                $email = $alumno->usuario->email;
                $titulo = "Rechazo Postulación";
                $notificacion = 'Rechazo de la postulación a vacante';
                Notificacion::createNotification($titulo,$notificacion,null,$postulacion->id,true,Notificacion::EMAIL_REACHAZO_POSTULACION,$email);
                \DB::commit();
                $result = ConfigSistema::success(true,"Postulacion vacante actualizada con éxito");
            }else{
                $txt = "Esta postulacion no pertenece a tu empresa";
                $result = ConfigSistema::error(true,$txt);
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            \DB::rollBack();
            $txt = $ex->getMessage();
            $result = ConfigSistema::error(true,$txt);
        }

        return response()->json($result);
    }

    public function aceptacionStore(Request $request,$id)
    {
        $postulacion = PostulacionVacante::findOrFail($id);
        $vacante = $postulacion->vacante;
        $alumno = $postulacion->alumno;
        $usuario = \Auth::user();
        $empresa = $usuario->getEmpresaUsuario();
        //verifico que la postulacion sea de la vacante de esa empresa
        try {
            if($empresa->id == $vacante->id_empresa){
                \DB::beginTransaction();
                $postulacion->estado = PostulacionVacante::ESTADO_ACEPTADO;
                //$postulacion->mensaje_estado = $request->mensaje;
                $postulacion->save();
                //Se crea notificación
                $email = $alumno->usuario->email;
                $titulo = "Aceptación Postulación";
                $notificacion = 'Aceptación de la postulación a vacante';
                Notificacion::createNotification($titulo,$notificacion,null,$postulacion->id,true,Notificacion::EMAIL_ACEPTACION_POSTULACION,$email);
                \DB::commit();
                $result = ConfigSistema::success(true,"Postulacion vacante actualizada con éxito");
            }else{
                $txt = "Esta postulacion no pertenece a tu empresa";
                $result = ConfigSistema::error(true,$txt);
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            \DB::rollBack();
            $txt = $ex->getMessage();
            $result = ConfigSistema::error(true,$txt);
        }

        return response()->json($result);
    }

    public function cvDownload(Request $request,$id)
    {
        $postulacion = PostulacionVacante::findOrFail($id);
        $pathCv = $postulacion->getRutaCV(true);
        $pathCv .= $postulacion->cv_alumno;
        return ConfigSistema::muestraArchivo($pathCv);
    }
}
