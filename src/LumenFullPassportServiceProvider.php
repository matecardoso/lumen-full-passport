<?php

namespace MateCardoso\LumenFullPassport;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class LumenFullPassportServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the necessary Passport services
        $this->app->singleton(\Illuminate\Contracts\Auth\Factory::class, function ($app) {
            return $app->make('auth');
        });

        $this->app->singleton(\Illuminate\Contracts\Routing\ResponseFactory::class, function ($app) {
            return $app->make('response');
        });
    }

    public function boot()
    {
        // Set up Passport routes
        Passport::routes();
    }
}
