<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ConfigSistema;
use App\Http\Controllers\Controller;
use App\Models\ConfiguracionGeneral;
use App\Models\Empresa;
use App\Models\Notificacion;
use Illuminate\Http\Request;

class ConfiguracionGeneralController extends Controller
{
    public function autoaceptarEmpresas(Request $request)
    {
        $configuracion = ConfiguracionGeneral::getVariable('EMPRESAS_AUTOACEPTAR');
        try {
            $variable = $request->variable;
            $valor = $request->value;
            $configuracion->valor = $valor;
            $configuracion->save();

            if ($valor === 'Si') {
                $empresas = Empresa::where('estado_registro', Empresa::EST_REGISTO_PENDIENTE)->get();
                foreach ($empresas as $empresa) {
                    $empresa->estado_registro = Empresa::EST_REGISTO_ACEPTADA;
                    $empresa->save();
                    //mando la notificacion de aceptacion de la empresa
                    $administradoresE = $empresa->administradoresE();
                    foreach ($administradoresE as $adminE ) {
                        //Se crea notificación
                        $email = $adminE->usuario->email;
                        $titulo = "Empresa aceptada";
                        $notificacion = 'Empresa aceptada con éxito';
                        Notificacion::createNotification($titulo,$notificacion,null,$empresa->id,true,Notificacion::EMAIL_ACEPTACION_EMPRESA,$email);
                    }
                }
                Empresa::where('estado_registro', Empresa::EST_REGISTO_PENDIENTE)
                        ->update(['estado_registro' => Empresa::EST_REGISTO_ACEPTADA]);
                $mensajeExito = 'Autoaceptar Empresas activado correctamente. Todas las empresas han sido aceptadas.';
            } else {
                $mensajeExito = 'Autoaceptar Empresas desactivado correctamente.';
            }
            return ConfigSistema::success(true,$mensajeExito);

        } catch (\Exception $e) {
            if ($nuevoEstado === 'Si') {
                $mensajeError = 'Error al activar el Autoaceptar Empresas: ' . $e->getMessage();
            } else {
                $mensajeError = 'Error al desactivar el Autoaceptar Empresas: ' . $e->getMessage();
            }
            return ConfigSistema::success(true,$mensajeError);
        }
    }
}
