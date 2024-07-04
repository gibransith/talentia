<?php

namespace App\Notifications;

use App\Models\Notificacion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotPostulacion extends Notification
{
    use Queueable;

    public $postulacion;
    public $tipo_email;

    /**
     * Create a new notification instance.
     */
    public function __construct($postulacion,$tipo_email)
    {
        $this->postulacion = $postulacion;
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
                $vacante = $this->postulacion->vacante;
                $alumno = $this->postulacion->alumno;
                $empresa = $vacante->empresa;

                return (new MailMessage)
                    ->subject('Postulación registrada')
                    ->view('emails.postulacion.creacion',[
                        'postulacion' => $this->postulacion,
                        'vacante' => $vacante,
                        'empresa' => $empresa,
                        'alumno' => $alumno,
                    ]);
            break;
            case Notificacion::EMAIL_ACEPTACION_POSTULACION:
                $vacante = $this->postulacion->vacante;
                $alumno = $this->postulacion->alumno;
                $empresa = $vacante->empresa;
                return (new MailMessage)
                    ->subject('Postulación aceptada')
                    ->view('emails.postulacion.aceptacion',[
                        'postulacion' => $this->postulacion,
                        'vacante' => $vacante,
                        'empresa' => $empresa,
                        'alumno' => $alumno,
                    ]);
            break;
            case Notificacion::EMAIL_REACHAZO_POSTULACION:
                $vacante = $this->postulacion->vacante;
                $alumno = $this->postulacion->alumno;
                $empresa = $vacante->empresa;
                return (new MailMessage)
                    ->subject('Postulación rechazada')
                    ->view('emails.postulacion.rechazo',[
                        'postulacion' => $this->postulacion,
                        'vacante' => $vacante,
                        'empresa' => $empresa,
                        'alumno' => $alumno,
                    ]);
            break;
        }
        // return (new MailMessage)
        //             ->line('The introduction to the notification.')
        //             ->action('Notification Action', url('/'))
        //             ->line('Thank you for using our application!');
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
