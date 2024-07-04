<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostulacionVacante extends Model
{
    use HasFactory;

    const ESTADO_ACEPTADO = "Aceptado";
    const ESTADO_RECHAZADO = "Rechazado";
    const ESTADO_PENDIENTE = "Pendiente";

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'postulaciones_vacantes';

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
        'id_vacante',
        'id_alumno',
        'cv_alumno',
        'estado',
        'mensaje_estado',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    static public function rulesCreate()
    {
        return [
            'id_vacante'  => 'required',
            'id_alumno'  => 'required',
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

    public function vacante()
    {
        return $this->hasOne('App\Models\Vacante','id','id_vacante');
    }

    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno','id','id_alumno');
    }
    

    public function getEstadoPostulacion (){
        switch($this->estado){
            case PostulacionVacante::ESTADO_ACEPTADO:
                return '<span class="badge rounded-pill bg-success">'.$this->estado.'</span>';
            break;
            case PostulacionVacante::ESTADO_RECHAZADO:
                return '<span class="badge rounded-pill bg-danger">'.$this->estado.'</span>';
            break;
            case PostulacionVacante::ESTADO_PENDIENTE:
            	return '<span class="badge rounded-pill bg-secondary">'.$this->estado.'</span>';
            break;
            default:
                return '<span class="badge rounded-pill bg-warning">'.$this->estado.'</span>';
            break;
        }
    }

    public static function existePostulacion($id_vacante, $id_alumno)
    {
        return self::where('id_vacante', $id_vacante)
            ->where('id_alumno', $id_alumno)
            ->exists();
    }

    public function getRutaPostVacante($storage=false) 
    {
        if(!$storage)
            return 'public/postulacion-vacante/'.$this->id;
        else
            return storage_path('app/public/postulacion-vacante/'.$this->id);
    }

    public function getRutaCV($storage=false)
    {
        $rutaArchivos = $this->getRutaPostVacante($storage)."/cv/";
        return $rutaArchivos;
    }

}
