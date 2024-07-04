<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdministradorEmpresa;
use App\Models\Alumno;
use App\Models\ConfiguracionGeneral;
use App\Models\Empresa;
use App\Models\Notificacion;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = User::rulesCreate();
        switch ($data['tipo_usuario']) {
            case 'Administrador Empresa':
                $rules2 = Empresa::rulesCreate();
            break;
            case 'Alumno':
            case 'Egresado':
                $rules2 = Alumno::rulesCreate();
            break;
            default:
                $rules2 = [];
            break;
        }
        $rules = array_merge($rules,$rules2);

        return Validator::make($data, $rules);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        /*if(!$user->esAdministradorEmpresa()){
            $this->guard()->login($user);
        }else{
        }*/

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        /*if($user->esAdministrador()){
            \Auth::logout();
        }*/
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        try {
            \DB::beginTransaction();
            $data['password'] = Hash::make($data['password']);
            $data['activo'] = ($data['tipo_usuario']=='Administrador Empresa')?"No":"Si";
            //dd($data);
            $user = User::create($data);
            //creo el registro segun el tipo de usuario
            switch ($data['tipo_usuario']) {
                case 'Administrador Empresa':
                    //creo el registro de la empresa
                    //verifico el estado de la bandera
                    $conf = ConfiguracionGeneral::getVariable('EMPRESAS_AUTOACEPTAR');//ConfiguracionGeneral::where('config','EMPRESAS_AUTOACEPTAR')->get();
                    if($conf->valor == 'Si'){
                        $data['estado_registro'] = Empresa::EST_REGISTO_ACEPTADA;
                    }else{
                        $data['estado_registro'] = Empresa::EST_REGISTO_PENDIENTE;
                    }
                    //dd($data);
                    $data['ubicacion_fisica'] = "";
                    $empresa = Empresa::create($data);
                    //creo el registro de administrador empresa
                    $data2['id_empresa'] = $empresa->id;
                    $data2['id_usuario'] = $user->id;
                    $data2['puesto'] = "";
                    $adminEmp = AdministradorEmpresa::create($data2);

                    //Se crea notificación
                    if($data['estado_registro'] = Empresa::EST_REGISTO_ACEPTADA){
                        //activo al usuario de administrador empresa
                        $usuario = $adminEmp->usuario()->first();
                        $usuario->activo = User::USR_ACTIVO_SI;
                        $usuario->save();

                        $email = $adminEmp->usuario->email;
                        $titulo = "Empresa aceptada";
                        $notificacion = 'Empresa aceptada con éxito';
                        Notificacion::createNotification($titulo,$notificacion,null,$empresa->id,true,Notificacion::EMAIL_ACEPTACION_EMPRESA,$email);
                    }

                    //mando correos a los administradores
                    $administradores = User::where('tipo_usuario',User::USR_ADMINISTRADOR)->get();
                    foreach ($administradores as $admin) {
                        $email = $admin->email;
                        $titulo = "Empresa creada";
                        $notificacion = 'Empresa creada con éxito';
                        Notificacion::createNotification($titulo,$notificacion,null,$empresa->id,true,Notificacion::EMAIL_CREACION_EMPRESA,$email);
                    }
                break;
                case 'Alumno':
                case 'Egresado':
                    //creo el registro de alumno
                    $data['id_usuario'] = $user->id;
                    $Alumno = Alumno::create($data);
                break;
                default:
                    $rules2 = [];
                break;
            }
            \DB::commit();
            return $user;
        } catch (\Illuminate\Database\QueryException $ex) {
            \DB::rollBack();
            $txt = $ex->getMessage();
            dd("Fallo",$txt);
            return null;
        }
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }

    public function redirectTo() {
        $user = \Auth::user();
        $ruta = "";
        if(!$user){
            $ruta =  '/';
        }else if($user->esAdministrador()){
            $ruta =  'admin/dashboard';
        }else if($user->esAdministradorEmpresa()){
            $ruta =  'empresa/vacantes';
        }else{
            $ruta =  'alumno/vacantes';
        }
        //dd($ruta);
        return $ruta;
    }
}
