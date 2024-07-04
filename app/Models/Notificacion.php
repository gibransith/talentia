<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
	use HasFactory;

	const VISTO_SI = 'Si';
	const VISTO_NO = 'No';

	const EMAIL_CREACION_POSTULACION = 'Postulación Alumno';
	const EMAIL_ACEPTACION_POSTULACION = 'Aceptación Postulación';
	const EMAIL_REACHAZO_POSTULACION = 'Rechazo Postulación';

	const EMAIL_STATUS_PENDIENTE = 'Pendiente';
	const EMAIL_STATUS_ENVIADO = 'Enviado';

	const EMAIL_CREACION_EMPRESA = 'Creación Empresa';
	const EMAIL_ACEPTACION_EMPRESA = 'Aceptación Empresa';
	const EMAIL_RECHAZO_EMPRESA = 'Rechazo Empresa';
	const EMAIL_AUTORIZACION_VACANTE = 'Autorización Vacante';
	const EMAIL_RECHAZO_VACANTE = 'Rechazo Vacante';

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'notificaciones';

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
		'titulo',
		'notificacion',
		'id_usr_create',
		'id_usr_noti',
		'visto',
		'visto_fecha',
		'id_object',
		'enviar_email',
		'tipo_email',
		'email',
		'status_email',
		'fecha_enviado',
		'error_email',
		'muestra_web',
	];

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	static public function rules()
	{
		return [
			//'id_company' => 'exists:companies,id',
			//'id_time_zone' => 'exists:time_zones,id',
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

	public function userNotificacion(){
         return $this->hasOne('App\Models\User','id','id_usr_noti');
    }

    public function getIconNotificacion()
	{
		$html = "";
		switch ($this->tipo_email) {
			case Notificacion::EMAIL_SOLICITUD_AUTORIZACION_ESTANCIA:
				$html = '<i class="bx bx-badge-check"></i>';
			break;
			default:
				$html = '<i class="bx bxs-notification"></i>';
			break;
		}
		return $html;
	}

	public function getLink($parameters = [])
	{
		switch($this->tipo_email){
			case Notificacion::EMAIL_SOLICITUD_AUTORIZACION_ESTANCIA:
				return route('estancias.solicitudes.index',$parameters);
			break;
			case Notificacion::EMAIL_AUTORIZACION_ESTANCIA:
			case Notificacion::EMAIL_RECHAZO_ESTANCIA:
				return route('alumnos.internacionalizacion.solicitudes',[]);
			default:
				dd("Falta especificar ruta",$this->tipo_email);
			break;
		}
		return "#";
	}

	static function createNotification($titulo,$notificacion,$id_usr_noti,$id_object=NULL,$enviar_email = false,$tipo_email = NULL,$email_not= NULL,$muestra_web="No")
	{
		$user = \Auth::user();
		if($user){
			$id_user = $user->id;
		}else{
			$id_user = NULL;
		}

		if($enviar_email){
            if($email_not){
                $email = $email_not;
            }else{
                $userNot = User::find($id_usr_noti);
                $email = $userNot->email;
            }
            $send_email = 'Si';
            $status_email = Notificacion::EMAIL_STATUS_PENDIENTE;
        }else{
            $email = NULL;
            $send_email = 'No';
            //$type_email = NULL;
            $status_email = NULL;
        }

        $data = [
        	'titulo' => $titulo,
			'notificacion' => $notificacion,
			'id_usr_create' => $id_user,
			'id_usr_noti' => $id_usr_noti,
			'id_object' => $id_object,
			'enviar_email' => $send_email,
			'tipo_email' => $tipo_email,
			'email' => $email,
			'status_email' => $status_email,
			'muestra_web' => $muestra_web
        ];

        Notificacion::create($data);
	}

}
