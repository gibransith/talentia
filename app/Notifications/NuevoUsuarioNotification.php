<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class NuevoUsuarioNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
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
        // Generate a new reset password token
        $token = app('auth.password.broker')->createToken($notifiable);

        return (new MailMessage)
                    ->subject('Te damos la bienvenida a '.config('app.name'))
                    ->greeting('Hola ' . $notifiable->nombre)
                    ->line('Tu nombre de usuario es tu dirección de correo.')
                    ->line('Entra y configura tus accesos, a través del siguiente botón:')
                    ->action('Entrar a '.config('app.name'), url(route('password.reset',['token' => $token, 'email' => $notifiable->email] , false)) )
                    ->line('Gracias por usar nuestra aplicación!')
                    ->salutation(new HtmlString("Atentamente, ".config('app.name')));
        /*return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');*/
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
