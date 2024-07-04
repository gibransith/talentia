<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    const USR_ADMINISTRADOR = 'Administrador';
    const USR_ADMINISTRADOR_EMPRESA = 'Administrador Empresa';
    const USR_ALUMNO = 'Alumno';
    const USR_EGRESADO = 'Egresado';

    const USR_ACTIVO_SI = 'Si';
    const USR_ACTIVO_NO = 'No';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'email',
        'password',
        'tipo_usuario',
        'activo',
        'img_perfil',
        'id_pregunta',
        'respuesta_pregunta',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    static public function rules($id=null)
    {
        if(!$id){
            return [
                'nombre' => ['required', 'string', 'max:255'],
                'primer_apellido' => ['required', 'string', 'max:255'],
                'segundo_apellido' => ['string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'tipo_usuario' => ['required',Rule::in(['Administrador', 'Administrador Empresa', 'Alumno', 'Egresado'])],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                //'activo' => ['required',Rule::in(['Si', 'No'])],
            ];
        }else{
            return [
                'nombre' => ['required', 'string', 'max:255'],
                'primer_apellido' => ['required', 'string', 'max:255'],
                'segundo_apellido' => ['string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
                'tipo_usuario' => [Rule::in(['Administrador', 'Administrador Empresa', 'Alumno', 'Egresado'])],
                'password' => [ 'string', 'min:8', 'confirmed','nullable'],
                //'activo' => ['required',Rule::in(['Si', 'No'])],
            ];
        }
    }

    static public function rulesCreate()
    {
        return [
            'nombre' => ['required', 'string', 'max:255'],
            'primer_apellido' => ['required', 'string', 'max:255'],
            'segundo_apellido' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'id_pregunta' => ['required','numeric'],
            'respuesta_pregunta' => ['required', 'string', 'max:255'],
            'tipo_usuario' => ['required',Rule::in(['Administrador', 'Administrador Empresa', 'Alumno', 'Egresado'])],
            //'activo' => ['required',Rule::in(['Si', 'No'])],
        ];
    }

    public function getFillables(){
        return $this->fillable;
    }


    public function esAdministrador()
    {
        if($this->tipo_usuario == User::USR_ADMINISTRADOR){
            return true;
        }
        return false;
    }

    public function esAdministradorEmpresa()
    {
        if($this->tipo_usuario == User::USR_ADMINISTRADOR_EMPRESA){
            return true;
        }
        return false;
    }

    public function getAdministradorEmpresa(){
        return AdministradorEmpresa::where('id_usuario',$this->id)->first();        
    }

    public function getEmpresaUsuario(){
        $empresa = NULL;
        $admEmp = $this->getAdministradorEmpresa();        
        if($admEmp){
            $empresa = Empresa::find($admEmp->id_empresa);            
        }

        return $empresa;
    }

    public function esAlumno()
    {
        if($this->tipo_usuario == User::USR_ALUMNO){
            return true;
        }
        return false;
    }

    public function esEgresado()
    {
        if($this->tipo_usuario == User::USR_EGRESADO){
            return true;
        }
        return false;
    }

    public function nombreCompleto()
    {
        return $this->nombre.' '.$this->primer_apellido.' '.$this->segundo_apellido;
    }

    public function getAlumnoUsuario()
    {
        $obj = Alumno::where('id_usuario',$this->id)->first();
        return $obj;
    }

    public function getRutaUsuario($storage=false)
    {
        if(!$storage)
            return 'public/usuarios/'.$this->id;
        else
            return storage_path('app/public/usuarios/'.$this->id);
    }

    public function getRutaImagenPerfil($storage=false){
        if(!$storage)
            $rutaArchivos = $this->getRutaUsuario($storage)."/img_perfil/";
        else{
            if($this->img_perfil)
                $rutaArchivos = $this->getRutaUsuario($storage)."/img_perfil/".$this->img_perfil;
            else
                $rutaArchivos = public_path('assets/images/avatar-default.png');//;$this->getRutaUsuario($storage)."/fotoPerfil/noexiste.png";
        }
        return $rutaArchivos;
    }
}
