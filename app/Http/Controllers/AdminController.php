<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Empresa;
use App\Models\PostulacionVacante;
use App\Models\User;
use App\Models\Vacante;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $colores = ConfigSistema::coloresReportes();
        $activas = Vacante::where('estado',Vacante::ESTADO_AUTORIZADA)->count();

        /*** Estado ***/
        $vacantes_estado = ConfigSistema::enumArr('vacantes','estado');
        $labels_estado = [];
        $nums_estado = [];
        $colores_estado = [];
        $ic = 0;
        foreach($vacantes_estado as $pa){
            $labels_estado[] = $pa;
            $colores_estado[] = $colores[$ic++];
            $nums_estado[] = Vacante::where('estado',$pa)->count();
        
        }


        $registrados = Empresa::all()->count();
        /*** Por estado ***/
        $empresas_estado = ConfigSistema::enumArr('empresas','estado_registro');
        $labels_estado = [];
        $nums_estado = [];
        $colores_estado = [];
        $ic = 0;
        foreach($empresas_estado as $pa){
            $labels_estado[] = $pa;
            $colores_estado[] = $colores[$ic++];
            $nums_estado[] = Empresa::where('estado_registro',$pa)->count();
        }

        $data = [
            'vacantes_activas' => $activas,                                    
            'vacantes_estado' => [
                'labels' => $labels_estado,
                'num' => $nums_estado,
                'colores' => $colores_estado
            ],    
            'empresas_registrados' => $registrados,        
            'empresas_estado' => [
                'labels' => $labels_estado,
                'num' => $nums_estado,
                'colores' => $colores_estado
            ],    
        ];


        return view('admin.index',['data' => $data]);
    }

    public function reporteEstudiantes(){
        $colores = ConfigSistema::coloresReportes();

        $registrados = Alumno::all()->count();

        $activos = Alumno::join('users', 'id_usuario', '=', 'users.id')
                            ->where('activo','Si')->count();            

        $cvs = Alumno::whereNotNull('cv')->count();            

        $con_postulacion = PostulacionVacante::select('id_alumno')->distinct()->count();
        
        /*** Registrados por mes ***/
        $registrados_pm = Alumno::selectRaw("DATE_FORMAT(created_at, '%Y%m'), DATE_FORMAT(created_at, '%Y%m') as mes,count(id) as cont")
                        ->groupBy("DATE_FORMAT(created_at, '%Y%m')")
                        ->orderBy("DATE_FORMAT(created_at, '%Y%m')")
                        ->get();        
        $cat = [];
        $nums = [];
        foreach($registrados_pm as $r){
            $cat[] = substr($r->mes,4,2).'-'.substr($r->mes,0,4);
            $nums[] = $r->cont;
        }

        /*** Por programa ***/
        $programas_acad = ConfigSistema::enumArr('alumnos_exalumnos','programa_academico');
        $labels_acad = [];
        $nums_acad = [];
        $colores_acad = [];
        $ic = 0;
        foreach($programas_acad as $pa){
            $labels_acad[] = $pa;
            $colores_acad[] = $colores[$ic++];
            $nums_acad[] = Alumno::where('programa_academico',$pa)->count();
        
        }

        /*** alumnos y egresados ***/
        $alumnos = Alumno::join('users', 'id_usuario', '=', 'users.id')
                            ->where('tipo_usuario',User::USR_ALUMNO)->count();            
        $egresados = Alumno::join('users', 'id_usuario', '=', 'users.id')
                            ->where('tipo_usuario',User::USR_EGRESADO)->count();            
        $labels_atipos = [User::USR_ALUMNO,User::USR_EGRESADO];
        $num_atipos = [$alumnos,$egresados];
        $colores_atipos = [$colores[0],$colores[1]];
        
        $data = [
            'alumnos_registrados' => $registrados,
            'alumnos_activos' => $activos,
            'alumnos_noactivos' => $registrados-$activos,
            'alumnos_cvs'=> $cvs,
            'con_postulacion' => $con_postulacion,
            'alumnos_registrados_g1' => [
                'cat' => $cat,
                'num' => $nums
            ],
            'alumnos_pa' => [
                'labels' => $labels_acad,
                'num' => $nums_acad,
                'colores' => $colores_acad
            ],
            'alumnos_tipo' => [
                'labels' => $labels_atipos,
                'num' => $num_atipos,
                'colores' => $colores_atipos
            ],
        ];

        //dd($data);
        return view('admin.reportes.estudiantes',['data' => $data]);
    }

    public function reporteVacantes(){
        $colores = ConfigSistema::coloresReportes();

        $activas = Vacante::where('estado',Vacante::ESTADO_AUTORIZADA)->count();
        
        /*** Registrados por mes ***/
        $activas_pm = Vacante::selectRaw("DATE_FORMAT(fecha_inicio, '%Y%m'), DATE_FORMAT(fecha_inicio, '%Y%m') as mes,count(id) as cont")
                        ->groupBy("DATE_FORMAT(fecha_inicio, '%Y%m')")
                        ->orderBy("DATE_FORMAT(fecha_inicio, '%Y%m')")
                        ->where('estado',Vacante::ESTADO_AUTORIZADA)
                        ->get();        
        $cat = [];
        $nums = [];
        foreach($activas_pm as $r){
            $cat[] = substr($r->mes,4,2).'-'.substr($r->mes,0,4);
            $nums[] = $r->cont;
        }

        /*** Por motivo cierre ***/
        $motivos_cierre = ConfigSistema::enumArr('vacantes','motivo_cierre');
        $labels_mcierre = [];
        $nums_mcierre = [];
        $colores_mcierre = [];
        $ic = 0;
        foreach($motivos_cierre as $pa){
            $labels_mcierre[] = $pa;
            $colores_mcierre[] = $colores[$ic++];
            $nums_mcierre[] = Vacante::where('motivo_cierre',$pa)->count();
        
        }

        /*** Por tipo_empleo ***/
        $tipo_empleo = ConfigSistema::enumArr('vacantes','tipo_empleo');
        $labels_te = [];
        $nums_te = [];
        $colores_te = [];
        $ic = 0;
        foreach($tipo_empleo as $pa){
            $labels_te[] = $pa;
            $colores_te[] = $colores[$ic++];
            $nums_te[] = Vacante::where('tipo_empleo',$pa)->count();
        
        }

        /*** Estado ***/
        $vacantes_estado = ConfigSistema::enumArr('vacantes','estado');
        $labels_estado = [];
        $nums_estado = [];
        $colores_estado = [];
        $ic = 0;
        foreach($vacantes_estado as $pa){
            $labels_estado[] = $pa;
            $colores_estado[] = $colores[$ic++];
            $nums_estado[] = Vacante::where('estado',$pa)->count();
        
        }

        /*** Carrera profesional ***/
        $vacantes_carrera = ConfigSistema::enumArr('vacantes','carrera_profesional');
        $labels_carrera = [];
        $nums_carrera = [];
        $colores_carrera = [];
        $ic = 0;
        foreach($vacantes_carrera as $pa){
            $labels_carrera[] = $pa;
            $colores_carrera[] = $colores[$ic++];
            $nums_carrera[] = Vacante::where('carrera_profesional',$pa)->count();
        
        }
        
        $data = [
            'vacantes_activas' => $activas,                        
            'vacantes_activas_g1' => [
                'cat' => $cat,
                'num' => $nums
            ],
            'vacantes_mc' => [
                'labels' => $labels_mcierre,
                'num' => $nums_mcierre,
                'colores' => $colores_mcierre
            ],
            'vacantes_estado' => [
                'labels' => $labels_estado,
                'num' => $nums_estado,
                'colores' => $colores_estado
            ],
            'vacantes_templeo' => [
                'labels' => $labels_te,
                'num' => $nums_te,
                'colores' => $colores_te
            ],
            'vacantes_carrera' => [
                'labels' => $labels_carrera,
                'num' => $nums_carrera,
                'colores' => $colores_carrera
            ],
        ];

        //dd($data);
        return view('admin.reportes.vacantes',['data' => $data]);
    }

    public function reporteEmpresas(){
        $colores = ConfigSistema::coloresReportes();

        $registrados = Empresa::all()->count();

        $fecha = date("Y-m-d", strtotime("-6 months"));
        $con_vacantes6m = Vacante::whereRaw("DATE_FORMAT(created_at, '%Y-%m-%d') > $fecha")->select('id_empresa')->distinct()->count();

        $con_postulacion = PostulacionVacante::select('id_alumno')->distinct()->count();
        
        /*** Registrados por mes ***/
        $registrados_pm = Empresa::selectRaw("DATE_FORMAT(created_at, '%Y%m'), DATE_FORMAT(created_at, '%Y%m') as mes,count(id) as cont")
                        ->groupBy("DATE_FORMAT(created_at, '%Y%m')")
                        ->orderBy("DATE_FORMAT(created_at, '%Y%m')")
                        ->get();        
        $cat = [];
        $nums = [];
        foreach($registrados_pm as $r){
            $cat[] = substr($r->mes,4,2).'-'.substr($r->mes,0,4);
            $nums[] = $r->cont;
        }

        /*** Por sector ***/
        $empresas_sector = ConfigSistema::enumArr('empresas','sector');
        $labels_sector = [];
        $nums_sector = [];
        $colores_sector = [];
        $ic = 0;
        foreach($empresas_sector as $pa){
            $labels_sector[] = $pa;
            $colores_sector[] = $colores[$ic++];
            $nums_sector[] = Empresa::where('sector',$pa)->count();
        
        }

        /*** Por estado ***/
        $empresas_estado = ConfigSistema::enumArr('empresas','estado_registro');
        $labels_estado = [];
        $nums_estado = [];
        $colores_estado = [];
        $ic = 0;
        foreach($empresas_estado as $pa){
            $labels_estado[] = $pa;
            $colores_estado[] = $colores[$ic++];
            $nums_estado[] = Empresa::where('estado_registro',$pa)->count();
        
        }
        
        $data = [
            'empresas_registrados' => $registrados,    
            'con_vacantes6m'  => $con_vacantes6m,        
            'empresas_registrados_g1' => [
                'cat' => $cat,
                'num' => $nums
            ],
            'empresas_pa' => [
                'labels' => $labels_sector,
                'num' => $nums_sector,
                'colores' => $colores_sector
            ],
            'empresas_estado' => [
                'labels' => $labels_estado,
                'num' => $nums_estado,
                'colores' => $colores_estado
            ],
        ];

        //dd($data);
        return view('admin.reportes.empresas',['data' => $data]);
    }

}
