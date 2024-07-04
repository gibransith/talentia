<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Alumno extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'alumnos_exalumnos';

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
        'id_usuario',
        'perfil_linkedin',
        'perfil_facebook',
        'perfil_instagram',
        'direccion',
        'telefono',
        'idioma',
        'programa_academico',
        'carrera',
        'promedio',
        'habilidades_profesionales',
        'acerca_de',
        'experiencia_laboral',
        'cv',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    static public function rulesCreate()
    {
        return [
            'id_usuario' => ['numeric'],
            'matricula' => ['nullable','string'],
            'perfil_linkedin' => ['string', 'max:255'],
            'perfil_facebook' => ['string', 'max:255'],
            'perfil_instagram' => ['string', 'max:255'],
            'direccion' => ['string', 'max:255'],
            'telefono' => ['string', 'max:15'],
            'programa_academico' => ['required',Rule::in(['Escolarizada', 'Ejecutiva', 'Maestría', 'Doctorado'])],
            'nivel' => ['string', 'max:100'],
            'promedio' => ['numeric'],
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

    public function usuario()
    {
        return $this->hasOne('App\Models\User','id','id_usuario');
    }

    public function nombreCompleto(){
        $usr = $this->usuario;
        return $usr->primer_apellido.' '.$usr->segundo_apellido.' '.$usr->nombre;
    }

    public function nombreCorto(){
        $usr = $this->usuario;
        return $usr->primer_apellido.' '.$usr->nombre;
    }

    public function getRutaAlumno($storage=false)
    {
        if(!$storage)
            return 'public/alumnos/'.$this->id;
        else
            return storage_path('app/public/alumnos/'.$this->id);
    }

    public function getRutaCV($storage=false)
    {
        $rutaArchivos = $this->getRutaAlumno($storage)."/cv/";
        return $rutaArchivos;
    }

    public function aplicoVacante($idVacante) {
        $postulacion = PostulacionVacante::where('id_vacante', $idVacante)
            ->where('id_alumno', $this->id)
            ->first();

        if ($postulacion) {
            return true;
        } else {
            return false;
        
        }
    }
}
