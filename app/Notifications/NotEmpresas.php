<?php

namespace App\Notifications;

use App\Models\Notificacion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotEmpresas extends Notification
{
    use Queueable;

    public $empresa;
    public $tipo_email;

    /**
     * Create a new notification instance.
     */
    public function __construct($empresa,$tipo_email)
    {
        $this->empresa = $empresa;
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
            case Notificacion::EMAIL_CREACION_EMPRESA:
                return (new MailMessage)
                    ->subject('Nueva empresa registrada')
                    ->view('emails.empresas.creacion',[
                        'empresa' => $this->empresa,
                    ]);
            break;
            case Notificacion::EMAIL_ACEPTACION_EMPRESA:
                return (new MailMessage)
                    ->subject('Empresa aceptada')
                    ->view('emails.empresas.aceptacion',[
                        'empresa' => $this->empresa,
                    ]);
            break;
            case Notificacion::EMAIL_RECHAZO_EMPRESA:
                return (new MailMessage)
                    ->subject('Empresa rechazada')
                    ->view('emails.empresas.rechazo',[
                        'empresa' => $this->empresa,
                    ]);
            break;
        }
        // return (new MailMessage)
        //             ->line('The introduction to the notification.')
        //             ->action('Notification Action', url('/'))
        //             ->line('Thank you for using our application!');'
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