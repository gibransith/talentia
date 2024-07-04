<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = \Auth::user();
        if($user->esAdministrador()){
            return redirect()->route('admin.index');
        }else if($user->esAdministradorEmpresa()){
            return redirect()->route('empresa.vacantes.index');
        }else{
            return redirect()->route('alumno.vacantes.index');
        }
    }
}
