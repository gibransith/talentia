<?php

namespace App\Models;

use App\Http\Controllers\ConfigSistema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    const ESTADO_AUTORIZADA = "Autorizada";
    const ESTADO_RECHAZADA = "Rechazada";
    const ESTADO_PENDIENTE = "Pendiente";
    const ESTADO_CERRADA = "Cerrada";

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vacantes';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    public $fillable = [
        'id_empresa',
        'nombre',
        'descripcion',
        'tipo_empleo',
        'salario',
        'resposabilidades',
        'habilidades_experiencia',
        'carrera_profesional',
        'localizacion',
        'fecha_inicio',
        'fecha_fin',
        'hashtags',
        'estado',
        'motivo_cierre',
        'nombre_contratado',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    static public function rules()
    {
        return [
            'id_empresa'  => 'required',
            'nombre'  => 'required',
            'descripcion'  => 'required',
            'salario' => 'required',
            'resposabilidades' => 'required',
            'habilidades_experiencia' => 'required',
            'carrera_profesional' => 'required',
            'localizacion' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'hashtags' => 'required',
        ];
    }

    public function getTable()
    {
        return $this->table;
    }

    public function getFillables()
    {
        return $this->fillable;
    }

    protected function getFechaInicioAttribute($value)
    {        
        return ConfigSistema::showDate($value);        
    }

    protected function getFechaFinAttribute($value)
    {        
        return ConfigSistema::showDate($value);        
    }

    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa','id','id_empresa');
    }

    public function postulaciones(){
        return $this->hasMany('App\Models\PostulacionVacante','id_vacante','id');
    }

    public function estadoPendiente(){
        if($this->estado == Vacante::ESTADO_PENDIENTE){
            return true;
        }else{
            return false;
        }
    }
    public function estadoAutorizada(){
        if($this->estado == Vacante::ESTADO_AUTORIZADA){
            return true;
        }else{
            return false;
        }
    }
    
    public function getEstadoRegistro(){
        switch($this->estado){
            case Vacante::ESTADO_AUTORIZADA:
                return '<span class="badge rounded-pill bg-success">'.$this->estado.'</span>';
            break;
            case Vacante::ESTADO_RECHAZADA:
                return '<span class="badge rounded-pill bg-danger">'.$this->estado.'</span>';
            break;
            case Vacante::ESTADO_CERRADA:
                return '<span class="badge rounded-pill bg-secondary">'.$this->estado.'</span>';
            break;
            case Vacante::ESTADO_PENDIENTE:
                return '<span class="badge rounded-pill bg-warning">'.$this->estado.'</span>';
            break;
            default:
                return '<span class="badge rounded-pill bg-info">'.$this->estado.'</span>';
            break;
        }
    }

}
