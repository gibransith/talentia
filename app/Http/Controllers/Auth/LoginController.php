<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return ['email' => $request->{$this->username()}, 'password' => $request->password, 'activo' => 'Si'];
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        // $request->validate([
        //     $this->username() => 'required|string',
        //     'password' => 'required|string',
        // ]);
        $this->validate($request, [
                $this->username() => 'exists:users,' . $this->username() . ',activo,Si',
                'password' => 'required|string',
            ], [
                $this->username() . '.exists' => 'El correo electrónico seleccionado no es válido o la cuenta aún no ha sido habilitada.'
            ]
        );
    }

    public function redirectTo() {
        $user = \Auth::user();
        $ruta = "";

        if($user->esAdministrador()){
            $ruta =  'admin/dashboard';
        }else if($user->esAdministradorEmpresa()){
            $ruta =  'empresa/vacantes';
        }else{
            $ruta =  'alumno/vacantes';
        }
        return $ruta;
    }
}
