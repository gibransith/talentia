<?php

use App\Http\Controllers\NotificacionController;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('notificaciones:enviar', function (NotificacionController $ctl) {
    $msg = 'Notificaciones::Ejecutando enviar';
    Log::info($msg);
    $this->comment($msg);
    $ctl->mandaNotificaciones($this);
    $msg = 'Notificaciones::Finalizo enviar';
    Log::info($msg);
    $this->comment($msg);
})->describe('Ejecuta el cron que envia los correos de notificaciones');