<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Empresa extends Model
{
    use HasFactory;

    const EST_REGISTO_PENDIENTE = 'Pendiente';
    const EST_REGISTO_ACEPTADA = 'Aceptada';
    const EST_REGISTO_RECHAZADA = 'Rechazada';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'empresas';

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
        'tipo',
        'razon_social', 
        'descripcion',
        'pagina_web',
        'telefono',
        'ubicacion_fisica',
        'sector',
        'num_empleados',
        'perfil_linkedin',
        'convenio_vigente',
        'interesa_convenio',
        'egresado_umx',
        'estado_registro',
        'logo',
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

    public function administradoresE()
    {
        $adminE = AdministradorEmpresa::where('id_empresa',$this->id)->get();
        return $adminE;
    }

    public function getEstadoRegistro(){
        switch($this->estado_registro){
            case Empresa::EST_REGISTO_ACEPTADA:
                return '<span class="badge rounded-pill bg-success">'.$this->estado_registro.'</span>';
            break;
            case Empresa::EST_REGISTO_RECHAZADA:
                return '<span class="badge rounded-pill bg-danger">'.$this->estado_registro.'</span>';
            break;
            default:
                return '<span class="badge rounded-pill bg-warning">'.$this->estado_registro.'</span>';
            break;
        }        
    }

    public function getRutaEmpresa($storage=false)
    {
        if(!$storage)
            return 'public/empresas/'.$this->id;
        else
            return storage_path('app/public/empresas/'.$this->id);
    }

    public function getRutaLogo($storage=false){
        if(!$storage)
            $rutaArchivos = $this->getRutaEmpresa($storage)."/logo/";
        else{
            if($this->logo)
                $rutaArchivos = $this->getRutaEmpresa($storage)."/logo/".$this->logo;
            else
                $rutaArchivos = public_path('assets/images/avatar-default.png');//;$this->getRutaUsuario($storage)."/fotoPerfil/noexiste.png";
        }
        return $rutaArchivos;
    }

}
