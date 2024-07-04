<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpresasActivasController extends Controller
{
    public function index()
    {
        $activas = Empresa::where('estado_registro', 'A')->get();
        return view('admin/empresas-activas', compact('activas'));
    }

    public function inactivarEmpresa($id)
    {
        try {
            $empresa = Empresa::findOrFail($id);

            $empresa->estado_registro = 'I';
            $empresa->save();

            return redirect()->route('empresas-activas')->with('success', 'Empresa desactivada correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('empresas-activas')->with('error', 'Error al desactivar la empresa.');
        }
    }

}
