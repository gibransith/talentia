<?php

namespace App\Http\Controllers;

use App\Models\ConfiguracionGeneral;
use App\Models\Empresa;
use App\Models\Notificacion;
use App\Models\User;
use App\Models\Vacante;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registros = Empresa::all();
        $configuracion = ConfiguracionGeneral::getVariable('EMPRESAS_AUTOACEPTAR');
        return view('admin.empresas.index',[
            'registros' => $registros,
            'configuracion' => $configuracion,
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
    public function show($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('admin.empresas.info',[
            'empresa' => $empresa,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSitio($id)
    {
        $empresa = Empresa::findOrFail($id);
        $vacantes = Vacante::where('id_empresa',$empresa->id)
                            ->where('estado',Vacante::ESTADO_AUTORIZADA)
                            ->get();
        return view('sitio.common.detalleEmpresa',[
            'empresa' => $empresa,
            'vacantes' => $vacantes,
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

    public function aceptar(Request $request, $id){
        try {
            $registro = Empresa::findOrFail($id);
            $registro->estado_registro = Empresa::EST_REGISTO_ACEPTADA; 
            $registro->save();
            //mando la notificacion de aceptacion de la empresa
            $administradoresE = $registro->administradoresE();
            foreach ($administradoresE as $adminE ) {
                //activo al usuario de administrador empresa
                $usuario = $adminE->usuario()->first();
                $usuario->activo = User::USR_ACTIVO_SI;
                $usuario->save();
                //Se crea notificación
                $email = $adminE->usuario->email;
                $titulo = "Empresa aceptada";
                $notificacion = 'Empresa aceptada con éxito';
                Notificacion::createNotification($titulo,$notificacion,null,$registro->id,true,Notificacion::EMAIL_ACEPTACION_EMPRESA,$email);
            }
            return ConfigSistema::success(true,'Empresa aceptada correctamente');
        } catch (\Exception $e) {
            return ConfigSistema::success(true,'Error al aceptar la empresa: '. $e->getMessage());
        }
    }

    public function rechazar(Request $request, $id){
        try {
            $registro = Empresa::findOrFail($id);
            $registro->estado_registro = Empresa::EST_REGISTO_RECHAZADA;
            $registro->save();
            //mando la notificacion de aceptacion de la empresa
            $administradoresE = $registro->administradoresE();
            foreach ($administradoresE as $adminE ) {
                //Se crea notificación
                $email = $adminE->usuario->email;
                $titulo = "Empresa rechazada";
                $notificacion = 'Empresa rechazada con éxito';
                Notificacion::createNotification($titulo,$notificacion,null,$registro->id,true,Notificacion::EMAIL_RECHAZO_EMPRESA,$email);
            }
            return ConfigSistema::success(true,'Empresa rechazada correctamente');
        } catch (\Exception $e) {
            return ConfigSistema::error(true,'Error al rechazar la empresa: '. $e->getMessage());
        }
    }


}
