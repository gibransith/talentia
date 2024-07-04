<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Vacante;
use App\Models\Empresa;
use App\Models\User;
use App\Models\Notificacion;
use App\Models\PostulacionVacante;
use Illuminate\Http\Request;
class VacanteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuario = \Auth::user();
        $empresa = $usuario->getEmpresaUsuario();

        $registros = Vacante::where('id_empresa',$empresa->id)
                        ->orderBy('created_at')
                        ->get();//paginate(env('APP_ROWSPAGE'));
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexAlumno(Request $request)
    {
        $usuario = auth()->user();
        $registros = Vacante::where('estado',Vacante::ESTADO_AUTORIZADA);
        $psearch = [];
        if($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $psearch[] = ['search' => $search];
            $registros->where(function ($query) use ($search) {
                $query->where('nombre', 'like', '%' . $search . '%')
                    ->orWhere('carrera_profesional', 'like', '%' . $search . '%')
                    ->orWhere('hashtags', 'like', '%' . $search . '%')
                    ->orWhereHas('empresa', function ($query) use ($search) {
                        $query->where('razon_social', 'like', '%' . $search . '%');
                    });
            });
        }else{
            $search = NULL;
        }

        if($request->has('tipo_empleo') && !empty($request->tipo_empleo)) {
            $tipo_empleo = $request->tipo_empleo;
            $psearch[] = ['tipo_empleo' => $tipo_empleo];
            $registros->where('tipo_empleo', $tipo_empleo);
        }else{
            $tipo_empleo = NULL;
        }

        $registros =$registros->paginate(env('APP_ROWSPAGE'));

        $alumno = $usuario->getAlumnoUsuario();

        return view('sitio.alumnos.vacantes.index',[
            'registros' => $registros,
            'usuario' => $usuario,
            'alumno' => $alumno,
            'search' => $search,
            'tipo_empleo' => $tipo_empleo,
            'psearch' => $psearch
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rutaStore = route('empresa.vacantes.store');
        return view('sitio.empresas.vacantes.form',['rutaStore' => $rutaStore]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $user = \Auth::user();
        if($user->esAdministradorEmpresa()){
            $admEmp = $user->getAdministradorEmpresa();
            $object = new Vacante();
            $data = $request->only($object->getFillables());
            $data['id_empresa'] = $admEmp->id_empresa;            
            $data['fecha_inicio'] = ConfigSistema::saveDate($data['fecha_inicio']);
            $data['fecha_fin'] = ConfigSistema::saveDate($data['fecha_fin']);
            $data['estado'] = Vacante::ESTADO_PENDIENTE;

            \Validator::make($data, Vacante::rules())->validate();

            try{            
                $newObject = Vacante::create($data);
                ConfigSistema::succesFlash($request,'Registro creado con éxito');                
            }catch(Throwable $e){
                $txt = $ex->getMessage();                
                ConfigSistema::errorFlash($request,$txt);
            }catch (\Illuminate\Database\QueryException $e) {
                $txt = $e->getMessage();
                ConfigSistema::errorFlash($request,$txt);
            }
            return redirect(route('empresa.vacantes.index'));
        }else{
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $vacante = Vacante::find($id);
        $usuario = \Auth::user();
        $alumno = $usuario->getAlumnoUsuario();
        return view('sitio.alumnos.vacantes.detalles-vacante', [
            'vacante' => $vacante,
            'usuario' => $usuario,
            'alumno' => $alumno
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id){
        $object = Vacante::findOrFail($id);

        if($object->estadoPendiente()){            
            $rutaUpdate = route('empresa.vacantes.update',[$object->id]);
            return view('sitio.empresas.vacantes.form',['object' => $object,'rutaUpdate' => $rutaUpdate]);
        }else{
            ConfigSistema::errorFlash($request,'No es posible modificar la vacante');            
            return redirect(route('empresa.vacantes.index'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){        
        try{
            $object = Vacante::findOrFail($id);
            if($object->estadoPendiente()){            
                $data = $request->only($object->getFillables());            
                $data['fecha_inicio'] = ConfigSistema::saveDate($data['fecha_inicio']);
                $data['fecha_fin'] = ConfigSistema::saveDate($data['fecha_fin']);

                //\Validator::make($data, Vacante::rules())->validate();
                
                $object->update($data);            
                ConfigSistema::succesFlash($request,'Registro actualizado con éxito');                            

                return redirect(route('empresa.vacantes.index'));
            }else{
                ConfigSistema::errorFlash($request,'No es posible modificar la vacante');            
                return redirect(route('empresa.vacantes.edit',[$object->id]));    
            }
        }catch(Throwable $e){
            $txt = $ex->getMessage();
            ConfigSistema::errorFlash($request,$txt);            
            return redirect(route('empresa.vacantes.edit',[$object->id]));
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $object = Vacante::findOrFail($id);
        if($object->estadoPendiente()){            
            $object->delete();                                    
            $result = ConfigSistema::success(true,'Registro eliminado con éxito');            
        }else{
            $result = ConfigSistema::error(true,'No es posible eliminar la vacante');                        
        }
        return response()->json($result);
    }

    public function autorizar(Request $request, $id){
        try {
            $registro = Vacante::findOrFail($id);
            $registro->estado = Vacante::ESTADO_AUTORIZADA;
            //dd($registro);
            $registro->save();

            // se crea la notificacion
            
            $administradoresE = $registro->empresa->administradoresE();
            //dd($administradoresE);
            foreach ($administradoresE as $adminE ) {
                //activo al usuario de administrador empresa
                $usuario = $adminE->usuario()->first(); 
                $usuario->activo = User::USR_ACTIVO_SI;
                $usuario->save();
                //Se crea notificación
                $email = $adminE->usuario->email;
                $titulo = "Publicación Exitosa de Vacante en Talentia";
                $notificacion = 'Publicación Exitosa de Vacante en Talentia';
                Notificacion::createNotification($titulo,$notificacion,null,$registro->id,true,Notificacion::EMAIL_AUTORIZACION_VACANTE,$email);
            }
            
            return ConfigSistema::success(true,'Vacante aceptada correctamente');
        } catch (\Exception $e) {
            return ConfigSistema::success(true,'Error al autorizar la vacante: '. $e->getMessage());
        }
    }

    public function rechazar(Request $request, $id){
        try {
            $registro = Vacante::findOrFail($id);
            $registro->estado = Vacante::ESTADO_RECHAZADA;
            $registro->save();

            // se crea la notificacion
            $administradoresE = $registro->empresa->administradoresE();
            foreach ($administradoresE as $adminE ) {
                //activo al usuario de administrador empresa
                $usuario = $adminE->usuario()->first();
                $usuario->activo = User::USR_ACTIVO_SI;
                $usuario->save();
                //Se crea notificación
                $email = $adminE->usuario->email;
                $titulo = "Rechazo de Publicación de Vacante en Talentia";
                $notificacion = 'Rechazo de Publicación de Vacante en Talentia';
                Notificacion::createNotification($titulo,$notificacion,null,$registro->id,true,Notificacion::EMAIL_RECHAZO_VACANTE,$email);
            }

            return ConfigSistema::success(true,'Vacante rechazada correctamente');
        } catch (\Exception $e) {
            return ConfigSistema::error(true,'Error al rechazar la vacante: '. $e->getMessage());
        }
    }

    public function postulacionesAlumno(Request $request)
    {
        $registros = PostulacionVacante::paginate(env('APP_ROWSPAGE'));
        return view('sitio.alumnos.postulaciones.index',[
            'registros' => $registros,
        ]);
    }

    public function postulacionesAdmin(Request $request,$id)
    {
        $vacante = Vacante::findOrFail($id);
        $registros = $vacante->postulaciones;
        return view('admin.vacantes.postulaciones.index',[
            'vacante' => $vacante,
            'registros' => $registros,
        ]);
    }

    public function cerrarForm(Request $request,$id)
    {
        $vacante = Vacante::findOrFail($id);
        return view('sitio.empresas.vacantes.cerrarForm',[
            'vacante' => $vacante,
        ]);
    }

    public function inputCierre(Request $request)
    {
        $sel = $request->sel;
        if($sel == 'Contratacion interna a UMx'){
            $html = '
            <div class="position-relative mb-3">
                <label for="nombre_contratado" class="form-label">Nombre de la persona contratada</label>
                <input name="nombre_contratado" id="nombre_contratado" type="text" class="form-control" placeholder="" required>
            </div>
            ';
            return $html;
        }
        return "";
    }

    public function cerrarStore(Request $request,$id)
    {
        $usuario = \Auth::user();
        $empresa = $usuario->getEmpresaUsuario();
        try {
            $vacante = Vacante::findOrFail($id);
            //verifico que la vacante sea de esa empresa
            if($vacante->id_empresa == $empresa->id || $usuario->esAdministrador()){
                \DB::beginTransaction();
                $vacante->estado = Vacante::ESTADO_CERRADA;
                $vacante->motivo_cierre = $request->motivo_cierre;
                if($request->motivo_cierre == 'Contratacion interna a UMx'){
                    $vacante->nombre_contratado = $request->nombre_contratado;
                }
                $vacante->save();
                \DB::commit();
                $result = ConfigSistema::success(true,"Vacante cerrada con éxito");
            }else{
                $txt = "Esta vacante no pertenece a tu empresa";
                $result = ConfigSistema::error(true,$txt);
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            \DB::rollBack();
            $txt = $ex->getMessage();
            $result = ConfigSistema::error(true,$txt);
        }

        return response()->json($result);
    }

}
