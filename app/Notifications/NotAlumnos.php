<?php

namespace App\Notifications;

use App\Models\Notificacion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotAlumnos extends Notification
{
    use Queueable;

    public $alumno;
    public $tipo_email;

    /**
     * Create a new notification instance.
     */
    public function __construct($alumno,$tipo_email)
    {
        $this->alumno = $alumno;
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

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        switch($this->tipo_email){
            case Notificacion::EMAIL_CREACION_POSTULACION:
                return (new MailMessage)
                    ->subject('Nueva postulacion registrada')
                    ->view('emails.estudiante.postulacion',[
                        'alumno' => $this->alumno,
                    ]);
            break;
            case Notificacion::EMAIL_ACEPTACION_POSTULACION:
                return (new MailMessage)
                    ->subject('Postulacion aceptada')
                    ->view('emails.estudiante.aceptacionPostulacion',[
                        'alumno' => $this->alumno,
                    ]);
            break;
            case Notificacion::EMAIL_REACHAZO_POSTULACION:
                return (new MailMessage)
                    ->subject('Postulacion rechazada')
                    ->view('emails.estudiante.rechazoPostulacion',[
                        'alumno' => $this->alumno,
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
