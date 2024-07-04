<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class AdministradorEmpresa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'administradores_empresa';

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
        'id_usuario',
        'puesto',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    static public function rulesCreate()
    {
        return [
            //'tipo' => ['required',Rule::in(['Persona Física', 'Persona Moral'])],
            'razon_social' => ['required','string', 'max:300'],
            'descipcion' => ['string'],
            'pagina_web' => ['string', 'max:255'],
            'telefono' => ['string', 'max:15'],
            'ubicacion_fisica' => ['string', 'max:255'],
            //'sector' => ['required',Rule::in(['Industrial', 'Comercial', 'Servicios', 'ONG'])],
            'num_empleados' => ['numeric'],
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

}