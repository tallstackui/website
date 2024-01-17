<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->isProduction() || str_contains(config('app.url'), 'ngrok')) {
            URL::forceScheme('https');
        }

        View::share('discord', 'https://discord.gg/sfr66WXh4A');
    }
}
