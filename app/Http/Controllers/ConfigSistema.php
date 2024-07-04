<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Alumno;
use App\Models\Empresa;
use App\Models\User;
use App\Models\Vacante;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class ConfigSistema
{
	static function coloresReportes(){
		return ['#103673','#40E0D0', '#FF7F50', '#00FF00', '#800080', '#4B0082', '#D2691E', '#808000', '#FF6347', '#00FFFF', '#E52B50'];
	}

	static function getInfo(){
		$alumnos_registrados = Alumno::all()->count();
		$empresas_activas = Empresa::where('estado_registro',Empresa::EST_REGISTO_ACEPTADA)->count();
		$vacantes_abiertas = Vacante::where('estado',Vacante::ESTADO_AUTORIZADA)->count();
		$vacantes_cerradas = Vacante::where('estado',Vacante::ESTADO_CERRADA)->count();
		return [
			'num_alumnos' => ConfigSistema::moneyFormat($alumnos_registrados,0),
			'num_empresas' => ConfigSistema::moneyFormat($empresas_activas,0),
			'num_vacantes_abiertas' => ConfigSistema::moneyFormat($vacantes_abiertas,0),
			'num_vacantes_cerradas' => ConfigSistema::moneyFormat($vacantes_cerradas,0)
		];
	}

	static function carreraProfesionalVacante()
	{
		return [
			'Licenciatura' => 'Licenciatura',
			'Ingeniería' => 'Ingeniería'
		];
	}

	static function tiposEmpleoVacante()
	{
		return [
			'Tiempo completo' => 'Tiempo completo',
			'Parcial' => 'Parcial',
			'Alternancia (prácticas)' => 'Alternancia (prácticas)'
		];
	}

	static function tiposUsuarioRegistro()
	{
		return [
			'Alumno' => 'Alumno',
			'Administrador Empresa' => 'Empresa',
			'Egresado' => 'Egresado',
		];
	}
	
	static function tiposProgramaAcademicoRegistro()
	{
		return [
			'Escolarizada' => 'Escolarizada',
			'Ejecutiva' => 'Ejecutiva',
			'Maestría' => 'Maestría',
			'Doctorado' => 'Doctorado',
		];
	}

	static function tipo_empresa()
	{
		return [
			'Persona Fisica' => 'Persona Fisica',
			'Persona Moral' => 'Persona Moral',
		];
	}

	static function registro_si_no()
	{
		return [
			'Si' => 'Si',
			'No' => 'No',
		];
	}

	static function sector_empresa($value='')
	{
		return [
			'Industrial' => 'Industrial',
			'Comercial' => 'Comercial',
			'Servicios' => 'Servicios',
			'ONG' => 'ONG',
		];
	}

	static function motivosCierreVacante(){
		return [
			'Contratacion interna a UMx' => 'Contratacion interna a UMx',
			'Contratación externa a UMx' => 'Contratación externa a UMx',
			'Suspensión de contratación' => 'Suspensión de contratación',
			//'Finalización vigencia' => 'Finalización vigencia',
		];
	}

	static function success(Bool $array=false,String $txt=''){
        if($array){
            return [
                'tituloMsg'   => 'Exito',
                'mensaje'   => $txt,
                'dlgClose'  => true,
                'tipoMsg'   => "success",
                'pageReload' => true
            ];
        }else{
            abort(403, $txt);
        }
    }

    static function error(Bool $array=false,String $txt=''){
        if($array){
            return [
                'tituloMsg'   => 'Error',
                'mensaje'   => $txt,
                'dlgClose'  => false,
                'tipoMsg'   => "error"
            ];
        }else{
            abort(403, $txt);
        }
    }

    static function formatDateSave(Bool $time=false){
		if($time)
			return 'Y-m-d H:i:s';
		else
			return 'Y-m-d';
	}

    static function showDate($date,$time=false,$no_time=false)
    {
    	if($time){
			$formato = ConfigSistema::formatDateSave(true);
			if($no_time)
				$format = "d/m/Y";
			else
				$format = "d/m/Y H:i:s";
		}else{
			$formato = ConfigSistema::formatDateSave();
			$format = "d/m/Y";
		}

		$nDate = \DateTime::createFromFormat($formato, $date);

		if($nDate){
			$str = (string) $nDate->format($format);
		}
		else{
			$str = "";
		}

		return $str;

    }

    static function saveDate($date){
		$nDate = \DateTime::createFromFormat('d/m/Y',$date);

        if($nDate){
        	return $nDate->format('Y-m-d');
        }
        else{
        	return "";
        }
	}

	public static function enumArr($tabla,$field,$select=TRUE){		
		$type = \DB::select('SHOW COLUMNS FROM '.$tabla.' WHERE Field = "'.$field.'"')[0]->Type;				
		preg_match('/^enum\((.*)\)$/', $type, $matches);
		$values = [];//($select)?array("error" => "Seleccione..."):[];
		foreach(explode(',', $matches[1]) as $value){
			$valor = trim($value, "'");
			$values[$valor] = $valor;
		}
		return $values;
	}

	

	static function moneyFormat($numero,$decimales=2,$simbolo=false,$notacion_francesa = NULL)
	{

		if($notacion_francesa === NULL){
			$notacion_francesa = env('NOT_FRANCESA');
		}

		if($notacion_francesa){
			if($simbolo)
				return '$'.number_format($numero,$decimales,',',' ');
			else
				return number_format($numero,$decimales,',',' ');
		}else{
			if($simbolo)
				return '$'.number_format($numero,$decimales,'.',',');
			else
				return number_format($numero,$decimales,'.',',');
		}
	}
		
	static function generatePassword(){
		$password = Str::random(20);
		return bcrypt($password);
	}

	static function currentDateSave()
	{
		return date('Y-m-d');
	}

	static function currentDateTimeSave()
	{
		return date("Y-m-d H:i:s");
	}

	static function currentTimeSave()
	{
		return date("H:i:s");
	}


	static function muestraArchivo($pathFile)
	{
		$path = $pathFile;

		if (\File::exists($path)) {
			$file = \File::get($path);
			$type = \File::mimeType($path);
			$response = \Response::make($file, 200);
			$response->header("Content-Type", $type);
			return $response;
		}else{
			return false;
			//return "El '$pathFile' no existe";
		}
	}


	static function eliminaArchivo($storagePath,$nombreArchivo=null)
	{
		$path = $storagePath;
		if($nombreArchivo)
			$path = $storagePath.'/'.$nombreArchivo;

		if (\File::exists($path)) {
			\File::delete( $path );
			return true;
		}else{
			return false;
			//return "The $nombreArchivo does not exist";
		}
	}

	static function creaCarpeta($path)
	{
		if (!\File::exists($path)) {
			$result = \File::makeDirectory($path, 0755, true);
			return $result;
		}
		return false;
	}

	static function succesFlash(Request $request,$message,$html=null){
		$result = [
			'tituloMsg' =>  'Exito',
	        'mensaje' =>  $message,
	        'tipoMsg' =>  'success',
	        'html' =>  $html
		];
		$request->session()->flash('result',$result);
    }

    static function errorFlash(Request $request,String $message,$html=null){
		$result = [
			'tituloMsg' =>  'Error',
	        'mensaje' =>  $message,
	        'tipoMsg' =>  'error',
	        'html' =>  $html
		];
		$request->session()->flash('result',$result);
	}

}