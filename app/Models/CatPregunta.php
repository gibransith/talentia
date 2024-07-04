<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class CatPregunta extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cat_preguntas';

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
        'pregunta',
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
            'pregunta' => ['required','string', 'max:300'],
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

}