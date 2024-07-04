<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ConfigSistema;
use App\Models\Alumno;
use App\Models\ConfiguracionGeneral;
use App\Models\Empresa;
use App\Models\Notificacion;
use App\Models\Vacante;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
	public function cvForm(Request $request)
	{
	 	return view('sitio.alumnos.perfil.cvForm',[
	 	]);
	}

	public function cvStore(Request $request)
	{
		$alumno = \Auth::user()->getAlumnoUsuario();
		$file = $request->file('file_document');
		$nameFile = $file->getClientOriginalName();
		$directory = $alumno->getRutaCV();
		$directory2 = storage_path('app/'.$directory);
		ConfigSistema::creaCarpeta($directory2);
		//verifico si ya existia otro cv
		if($alumno->cv){
			$nameFile2 = $alumno->cv;
            $storagePath = $alumno->getRutaCV(true);
            ConfigSistema::eliminaArchivo($storagePath,$nameFile2);
		}
		$path = $request->file('file_document')
						->storeAs($directory,$nameFile);
		$alumno->cv = $nameFile;
		$alumno->save();
		$result = ConfigSistema::success(true,"Document registered successfully");
		//dd("HOLA",$request->all());
		return \Redirect::back()->with('result',$result);
	}

	public function cvDownload(Request $request)
	{
		$alumno = \Auth::user()->getAlumnoUsuario();
		$pathCv = $alumno->getRutaCV(true);
		$pathCv .= $alumno->cv;
        return ConfigSistema::muestraArchivo($pathCv);
	}
}