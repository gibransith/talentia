<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\ConfiguracionGeneral;

class SolicitudEmpresaController extends Controller
{
    public function index()
    {
        $pendientes = Empresa::where('estado_registro', 'P')->get();
        $configuracion = ConfiguracionGeneral::firstOrNew();
        return view('admin/solicitud-empresa', compact('pendientes', 'configuracion'));
    }

    public function notificar()
    {
        $pendientes = Empresa::where('estado_registro', 'P')->get();
        $configuracion = ConfiguracionGeneral::firstOrNew();
        return route('header', compact('pendientes', 'configuracion'));
    }
    
    public function aceptar(Request $request, $id)
    {
        try {
            $registro = Empresa::findOrFail($id);
            $registro->estado_registro = 'A'; // Cambio aquí
            $registro->save();

            return redirect()->route('solicitud-empresa')->with('success', 'Empresa aceptada correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al aceptar la empresa: ' . $e->getMessage());
        }
    }

    public function rechazar(Request $request, $id)
    {
        try {
            $registro = Empresa::findOrFail($id);
            $registro->estado_registro = 'R'; // Cambio aquí
            $registro->save();

            return redirect()->route('solicitud-empresa')->with('success', 'Empresa rechazada correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al rechazar la empresa: ' . $e->getMessage());
        }
    }
}
