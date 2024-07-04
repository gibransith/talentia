<?php

namespace App\Notifications;

use App\Models\Notificacion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotVacante extends Notification
{
    use Queueable;

    public $vacante;
    public $tipo_email;

    /**
     * Create a new notification instance.
     */
    public function __construct($vacante,$tipo_email)
    {
        $this->vacante = $vacante;
        $this->tipo_email = $tipo_email;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        // const EMAIL_AUTORIZACION_VACANTE = 'Autorización Vacante';
	    // const EMAIL_RECHAZO_VACANTE = 'Rechazo Vacante';
        switch($this->tipo_email){
            case Notificacion::EMAIL_AUTORIZACION_VACANTE:
                $empresa = $this->vacante->empresa;
                return (new MailMessage)
                    ->subject('Vacante autorizada')
                    ->view('emails.vacantes.aceptacion',[
                        'vacante' => $this->vacante,
                        'empresa' => $empresa,
                    ]);
            break;
            case Notificacion::EMAIL_RECHAZO_VACANTE:
                $empresa = $this->vacante->empresa;
                return (new MailMessage)
                    ->subject('Vacante rechazada')
                    ->view('emails.vacantes.rechazo',[
                        'vacante' => $this->vacante,
                        'empresa' => $empresa,
                    ]);
            break;
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}