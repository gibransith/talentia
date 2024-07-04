<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracionGeneral extends Model
{
    use HasFactory;

    const ACEPTAR_EMPRESAS_SI = 'Si';
    const ACEPTAR_EMPRESAS_NO = 'No';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'configuracion_general';

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
        'config',
        'nombre',
        'descripcion',
        'valor',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    static public function rulesCreate()
    {
        return [
            'config' => ['string', 'max:50'],
            'nombre' => ['string', 'max:100'],
            'descripcion' => ['string', 'max:500'],
            'valor' => ['string', 'max:100'],
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

    static function getVariable($variable)
    {
        $var = ConfiguracionGeneral::where('config',$variable)->first();
        return $var;
    }

}
