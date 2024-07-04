<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ConfigSistema;
use App\Models\Alumno;
use App\Models\Empresa;
use App\Models\Notificacion;
use App\Models\PostulacionVacante;
use App\Models\Vacante;
use App\Models\User;
use App\Notifications\NotAlumnos;
use App\Notifications\NotEmpresas;
use App\Notifications\NotPostulacion;
use App\Notifications\NotVacante;



class NotificacionController extends Controller
{
	public function mandaNotificaciones($comm)
	{
		$notificaciones = Notificacion::where('enviar_email','Si')
		->where('status_email',Notificacion::EMAIL_STATUS_PENDIENTE)
		->get();

		foreach ($notificaciones as $n) {
			switch ($n->tipo_email) {
				
				case Notificacion::EMAIL_ACEPTACION_EMPRESA:
					$empresa = Empresa::find($n->id_object);
					if($empresa){
						$msg = 'Mandando notificacion :: '.implode("|", $n->toArray());
						\Log::info($msg);
						$comm->comment($msg);
						try {
							\Notification::route('mail', $n->email)
							->notify(new NotEmpresas($empresa,$n->tipo_email));
							$n->fecha_enviado = ConfigSistema::currentDateTimeSave();
							$n->status_email = Notificacion::EMAIL_STATUS_ENVIADO;
							$n->save();
						} catch (Throwable $ex) {
							$n->error_email =  $ex->getMessage();
							$n->save();
						}
					}else{
						$msg = 'No se encontro empresa con el id '.$n->id_object;
						\Log::info($msg);
						$comm->comment($msg);
					}
				case Notificacion::EMAIL_RECHAZO_EMPRESA:
					$empresa = Empresa::find($n->id_object);
					if($empresa){
						$msg = 'Mandando notificacion :: '.implode("|", $n->toArray());
						\Log::info($msg);
						$comm->comment($msg);
						try {
							\Notification::route('mail', $n->email)
							->notify(new NotEmpresas($empresa,$n->tipo_email));
							$n->fecha_enviado = ConfigSistema::currentDateTimeSave();
							$n->status_email = Notificacion::EMAIL_STATUS_ENVIADO;
							$n->save();
						} catch (Throwable $ex) {
							$n->error_email =  $ex->getMessage();
							$n->save();
						}
					}else{
						$msg = 'No se encontro empresa con el id '.$n->id_object;
						\Log::info($msg);
						$comm->comment($msg);
					}
				break;
				case Notificacion::EMAIL_CREACION_POSTULACION:
					$postulacion = PostulacionVacante::find($n->id_object);
					if($postulacion){
						$msg = 'Mandando notificacion :: '.implode("|", $n->toArray());
						\Log::info($msg);
						$comm->comment($msg);
						try {
							\Notification::route('mail', $n->email)
							->notify(new NotPostulacion($postulacion,$n->tipo_email));
							$n->fecha_enviado = ConfigSistema::currentDateTimeSave();
							$n->status_email = Notificacion::EMAIL_STATUS_ENVIADO;
							$n->save();
						} catch (Throwable $ex) {
							$n->error_email =  $ex->getMessage();
							$n->save();
						}
					}else{
						$msg = 'No se encontró postualción con el id '.$n->id_object;
						\Log::info($msg);
						$comm->comment($msg);
					}
				case Notificacion::EMAIL_ACEPTACION_POSTULACION:
					$postulacion = PostulacionVacante::find($n->id_object);
					if($postulacion){
						$msg = 'Mandando notificacion :: '.implode("|", $n->toArray());
						\Log::info($msg);
						$comm->comment($msg);
						try {
							\Notification::route('mail', $n->email)
							->notify(new NotPostulacion($postulacion,$n->tipo_email));
							$n->fecha_enviado = ConfigSistema::currentDateTimeSave();
							$n->status_email = Notificacion::EMAIL_STATUS_ENVIADO;
							$n->save();
						} catch (Throwable $ex) {
							$n->error_email =  $ex->getMessage();
							$n->save();
						}
					}else{
						$msg = 'No se encontró postualción con el id '.$n->id_object;
						\Log::info($msg);
						$comm->comment($msg);
					}
				case Notificacion::EMAIL_REACHAZO_POSTULACION:
					$postulacion = PostulacionVacante::find($n->id_object);
					if($postulacion){
						$msg = 'Mandando notificacion :: '.implode("|", $n->toArray());
						\Log::info($msg);
						$comm->comment($msg);
						try {
							\Notification::route('mail', $n->email)
							->notify(new NotPostulacion($postulacion,$n->tipo_email));
							$n->fecha_enviado = ConfigSistema::currentDateTimeSave();
							$n->status_email = Notificacion::EMAIL_STATUS_ENVIADO;
							$n->save();
						} catch (Throwable $ex) {
							$n->error_email =  $ex->getMessage();
							$n->save();
						}
					}else{
						$msg = 'No se encontró postualción con el id '.$n->id_object;
						\Log::info($msg);
						$comm->comment($msg);
					}
				break;
				// const EMAIL_AUTORIZACION_VACANTE = 'Autorización Vacante';
				// const EMAIL_RECHAZO_VACANTE = 'Rechazo Vacante';
				case Notificacion::EMAIL_AUTORIZACION_VACANTE:
					$vacante = Vacante::find($n->id_object);
					if($vacante){
						$msg = 'Mandando notificacion :: '.implode("|", $n->toArray());
						\Log::info($msg);
						$comm->comment($msg);
						try {
							\Notification::route('mail', $n->email)
							->notify(new NotVacante($vacante,$n->tipo_email));
							$n->fecha_enviado = ConfigSistema::currentDateTimeSave();
							$n->status_email = Notificacion::EMAIL_STATUS_ENVIADO;
							$n->save();
						} catch (Throwable $ex) {
							$n->error_email =  $ex->getMessage();
							$n->save();
						}
					}else{
						$msg = 'No se encontró postualción con el id '.$n->id_object;
						\Log::info($msg);
						$comm->comment($msg);
					}
				break;
				case Notificacion::EMAIL_RECHAZO_VACANTE:
					$vacante = Vacante::find($n->id_object);
					if($vacante){
						$msg = 'Mandando notificacion :: '.implode("|", $n->toArray());
						\Log::info($msg);
						$comm->comment($msg);
						try {
							\Notification::route('mail', $n->email)
							->notify(new NotVacante($vacante,$n->tipo_email));
							$n->fecha_enviado = ConfigSistema::currentDateTimeSave();
							$n->status_email = Notificacion::EMAIL_STATUS_ENVIADO;
							$n->save();
						} catch (Throwable $ex) {
							$n->error_email =  $ex->getMessage();
							$n->save();
						}
					}else{
						$msg = 'No se encontró postualción con el id '.$n->id_object;
						\Log::info($msg);
						$comm->comment($msg);
					}
				break;
				default:
					// code...
				break;
			}
		}
	}
}