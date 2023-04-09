<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Lang;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Mensaje enviado al correo electrónico de los usuario para que pueda verificar su registro en el sistema
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function($notifiable, $url) {
            return (new MailMessage)
                ->subject(Lang::get('Verificar Cuenta'))
                ->line(Lang::get('Haga clic en el botón de abajo para verificar su dirección de correo electrónico.'))
                ->action(Lang::get('Confirmar Registro'), $url)
                ->line(Lang::get('Si usted no proporcionó su correo a esta empresa, puede ignorar el mensaje'));
        });
    }
}
