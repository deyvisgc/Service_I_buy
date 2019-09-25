<?php

namespace App\Providers;

use App\Interfaces\InterfaceLogin;
use App\Repositorio\loginRepositorio;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(InterfaceLogin::class,loginRepositorio::class);

    }
}
