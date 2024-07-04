<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\User;
use App\Notifications\NuevoUsuarioNotification;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registros = User::all();
        return view('admin.usuarios.index',[
            'registros' => $registros,
            'rutaNew' => route('admin.usuarios.create')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rutaStore = route('admin.usuarios.store');
        return view('admin.usuarios.form',['rutaStore' => $rutaStore]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $object = new User();
        $data = $request->only($object->getFillables());
        $data['active'] = User::USR_ACTIVO_NO;//hasta que asigne el password lo activamos
        $data['tipo_usuario'] = User::USR_ADMINISTRADOR;
        $rules = User::rules();
        unset($rules['password']);
        unset($rules['id_pregunta']);
        unset($rules['respuesta_pregunta']);
        $data['password'] = ConfigSistema::generatePassword();
        \Validator::make($data, $rules)->validate();
        try {
            \DB::beginTransaction();
            $user = User::create($data);
            if($user){

                \DB::commit();
                //mando correo
                $user->notify(new NuevoUsuarioNotification());

                $result = ConfigSistema::success(true,"Usuario registrado con éxito");
            }else{
                \DB::rollBack();
                $result = ConfigSistema::error(true,"No se pudo insertar el registro");
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            \DB::rollBack();
            $txt = $ex->getMessage();
            $result = ConfigSistema::error(true,$txt);
        }

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rutaUpdate = route('admin.usuarios.update',[$id]);
        $object = User::find($id);
        return view('admin.usuarios.form',['object' => $object,'rutaUpdate' => $rutaUpdate]);
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
        $object = User::findorFail($id);
        $data = $request->all();//$request->only($object->getFillables());
        //dd($data);
        try {
            $rules = User::rules($object->id);
            \Validator::make($data, $rules)->validate();
            if(isset($data['password']) && $data['password'] != NULL ){
                $data['password'] = trim($data['password']);
                $data['password'] =  bcrypt($data['password']);
            }else{
                unset($data['password']);
            }
            \DB::beginTransaction();
            $object->update($data);
            //\Log::info('ID_USUARIO_ACCION => '.session(User::VS_USER_ID).' EMAIL_USUARIO_ACCION => '.session(User::VS_USER_EMAIL).' UPDATE '.$object->getTable().': '.$object->toJson(JSON_PRETTY_PRINT));
            $result = ConfigSistema::success(true,"Registro actualizado con éxito");
            \DB::commit();
            //Session::flash('result',$result);
            //return redirect(route('admin.usuarios.index',[]));
        } catch (\Illuminate\Database\QueryException $e) {
            \DB::rollBack();
            $txt = $e->getMessage();
            \Log::error($txt);
            $result = ConfigSistema::error(true,$txt);
            //Session::flash('result',$result);
            //return redirect()->back()->withInput();
        }

        return response()->json($result);

    }

    public function perfil(Request $request)
    {
        return view('sitio.perfil.index',[]);
    }

    public function inputsUsuario(Request $request)
    {
        $sel = $request->sel;
        if($sel == 'Alumno' || $sel == 'Egresado'){
            return view('auth.registro.inputsAlumno');
        }elseif($sel == 'Administrador Empresa'){
            return view('auth.registro.inputsEmpresa');
        }else{
            $html = '
            <div class="alert alert-warning text-center mb-4" role="alert">
                Selecciona un tipo de usuario para cargar más campos
            </div>
            ';
            return $html;
        }
    }

    public function activar(Request $request, $id){
        try {
            $registro = User::findOrFail($id);
            $registro->activo = User::USR_ACTIVO_SI;
            $registro->save();
            return ConfigSistema::success(true,'Usuario activado correctamente');
        } catch (\Exception $e) {
            return ConfigSistema::success(true,'Error al activar al usuario: '. $e->getMessage());
        }
    }

    public function desactivar(Request $request, $id){
        try {
            $registro = User::findOrFail($id);
            $registro->activo = User::USR_ACTIVO_NO;
            $registro->save();
            return ConfigSistema::success(true,'Usuario desactivado correctamente');
        } catch (\Exception $e) {
            return ConfigSistema::error(true,'Error al desactivar al Usuario: '. $e->getMessage());
        }
    }

    public function perfilAlumno(Request $request)
    {
        $usuario = \Auth::user();
        $alumno = $usuario->getAlumnoUsuario();
        $this->complementaUsuarioAlumno($usuario,$alumno);

        return view('sitio.alumnos.perfil.index',[
            'usuario' => $usuario,
            'alumno' => $alumno
        ]);
    }

    public function perfilEmpresa(Request $request)
    {
        $usuario = \Auth::user();
        $empresa = $usuario->getEmpresaUsuario();
        $this->complementaUsuarioEmpresa($usuario,$empresa);

        return view('sitio.empresas.perfil.index',[
            'usuario' => $usuario,
            'empresa' => $empresa
        ]);
    }

    public function complementaUsuarioAlumno(&$usuario,$alumno)
    {
        $usuario->matricula = $alumno->matricula;
        $usuario->perfil_linkedin = $alumno->perfil_linkedin;
        $usuario->perfil_facebook = $alumno->perfil_facebook;
        $usuario->perfil_instagram = $alumno->perfil_instagram;
        $usuario->direccion = $alumno->direccion;
        $usuario->telefono = $alumno->telefono;
        $usuario->programa_academico = $alumno->programa_academico;
        $usuario->carrera = $alumno->carrera;
        $usuario->nivel = $alumno->nivel;
        $usuario->promedio = $alumno->promedio;
        $usuario->habilidades_profesionales = $alumno->habilidades_profesionales;
        $usuario->acerca_de = $alumno->acerca_de;
        $usuario->experiencia_laboral = $alumno->experiencia_laboral;
    }

    public function complementaUsuarioEmpresa(&$usuario,$empresa)
    {
        $usuario->tipo = $empresa->tipo;
        $usuario->razon_social = $empresa->razon_social; 
        $usuario->descripcion = $empresa->descripcion;
        $usuario->pagina_web = $empresa->pagina_web;
        $usuario->telefono = $empresa->telefono;
        $usuario->ubicacion_fisica = $empresa->ubicacion_fisica;
        $usuario->sector = $empresa->sector;
        $usuario->num_empleados = $empresa->num_empleados;
        $usuario->perfil_linkedin = $empresa->perfil_linkedin;
        $usuario->convenio_vigente = $empresa->convenio_vigente;
        $usuario->interesa_convenio = $empresa->interesa_convenio;
        $usuario->egresado_umx = $empresa->egresado_umx;
        $usuario->estado_registro = $empresa->estado_registro;
        $usuario->logo = $empresa->logo;
    }

    public function perfilAlumnoUpdate(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        $usuario = \Auth::user();
        $alumno = $usuario->getAlumnoUsuario();

        try {
            //faltaria agregar validaciones
            if(isset($data['password']) && $data['password'] != NULL ){
                $data['password'] = trim($data['password']);
                $data['password'] =  bcrypt($data['password']);
            }else{
                unset($data['password']);
            }
            //actualizo el usuario
            $usuario->update($data);
            //actualizo el alumno
            $alumno->update($data);

            //verifico si viene la foto de perfil
            if($request->has('foto_perfil')){
               UsuarioController::guardaActualizaFotoPerfil($request,NULL,false,$usuario);
            }
            ConfigSistema::succesFlash($request,'Registro actualizado con éxito');
        } catch (\Illuminate\Database\QueryException $e) {
            ConfigSistema::errorFlash($request,'No es posible actualizar el registro');
        }

        return \Redirect::back();//->with('result',$result);

    }

    public function perfilEmpresaUpdate(Request $request)
    {     
        $data = $request->all();
        $usuario = \Auth::user();
        $empresa = $usuario->getEmpresaUsuario();

        try {
            //faltaria agregar validaciones
            if(isset($data['password']) && $data['password'] != NULL ){
                $data['password'] = trim($data['password']);
                $data['password'] =  bcrypt($data['password']);
            }else{
                unset($data['password']);
            }
            //actualizo el usuario
            $usuario->update($data);
            //actualizo el alumno
            $empresa->update($data);

            
            if($request->has('foto_perfil')){
               UsuarioController::guardaActualizaFotoPerfil($request,NULL,false,$usuario);
            }

            if($request->has('logo')){                
               UsuarioController::guardaActualizaLogoEmpresa($request,NULL,false,$empresa);
            }

            ConfigSistema::succesFlash($request,'Registro actualizado con éxito');
        } catch (\Illuminate\Database\QueryException $e) {
            ConfigSistema::errorFlash($request,'No es posible actualizar el registro');
        }

        return \Redirect::back();//->with('result',$result);

    }

    static function guardaActualizaFotoPerfil($request=NULL,$pathFile=NULL,$useDB=false,$user)
    {
        if($useDB){
            \DB::beginTransaction();
        }
            if($request){
                $image = $request->file('foto_perfil');
                $nameFile = $user->id.'.'.$image->getClientOriginalExtension();
                $imagePath = $image->path();
            }else{
                $extension = substr($pathFile,strpos($pathFile, "."));
                $nameFile = $user->id.$extension;
                $imagePath = $pathFile;
            }
            $directory = $user->getRutaImagenPerfil();
            $directory2 = storage_path('app/'.$directory);
            ConfigSistema::creaCarpeta($directory2);
            $img = \Image::make($imagePath);
            $img->resize(220, 250, function ($constraint) {
                //$constraint->aspectRatio();
            })->save($directory2.'/'.$nameFile);
            //$path = $request->file('foto_perfil')->storeAs($directory,$nameFile);
            $user->img_perfil = $nameFile;
            $user->save();
        if($useDB){
            \DB::commit();
        }
    }

    static function guardaActualizaLogoEmpresa($request=NULL,$pathFile=NULL,$useDB=false,$empresa)
    {
        if($useDB){
            \DB::beginTransaction();
        }
            if($request){
                $image = $request->file('logo');
                $nameFile = $empresa->id.'.'.$image->getClientOriginalExtension();
                $imagePath = $image->path();
            }else{
                $extension = substr($pathFile,strpos($pathFile, "."));
                $nameFile = $empresa->id.$extension;
                $imagePath = $pathFile;
            }
            $directory = $empresa->getRutaLogo();
            $directory2 = storage_path('app/'.$directory);
            ConfigSistema::creaCarpeta($directory2);
            $img = \Image::make($imagePath);
            $img->resize(220, 250, function ($constraint) {
                //$constraint->aspectRatio();
            })->save($directory2.'/'.$nameFile);            
            $empresa->logo = $nameFile;
            $empresa->save();
        if($useDB){
            \DB::commit();
        }

    }

    public function showImagenPerfil(Request $request,$id)
    {
        if($request->id){
            $object = User::find($request->id);
        }else{
            $object = \Auth::user();
        }
        if($object){
            $pathLogo = $object->getRutaImagenPerfil(true);
            $imagen = ConfigSistema::muestraArchivo($pathLogo);
            if($imagen != false){
                return $imagen;
            }else{
                /*if($object->genero == 'Femenino')
                    $pathLogo = //public_path('imgs/clientes/woman.png');
                else*/
                    $pathLogo = public_path('assets/images/avatar-default.png'); //public_path('imgs/clientes/man.png');
                return ConfigSistema::muestraArchivo($pathLogo);
            }
        }else{
            $pathLogo = public_path('assets/images/avatar-default.png');
            return ConfigSistema::muestraArchivo($pathLogo);
        }
    }

    public function showImagenLogo(Request $request,$id)
    {
        $object = Empresa::findOrFail($id);

        if($object){
            $pathLogo = $object->getRutaLogo(true);

            $imagen = ConfigSistema::muestraArchivo($pathLogo);

            if($imagen != false){
                return $imagen;
            }else{
                $pathLogo = public_path('assets/images/avatar-default.png'); 
                return ConfigSistema::muestraArchivo($pathLogo);
            }
        }else{
            $pathLogo = public_path('assets/images/avatar-default.png');
            return ConfigSistema::muestraArchivo($pathLogo);
        }
    }
}
