<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TallStackUi\Facades\TallStackUi;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureScheme();

        $this->configureSharedVariables();

        $this->configurePersonalization();
    }

    private function configureSharedVariables(): void
    {
        View::share('discord', 'https://discord.gg/sfr66WXh4A');

        View::share('issues', 'https://github.com/tallstackui/tallstackui/issues/new?assignees=devajmeireles&labels=bug&projects=&template=bug_report.yml&title=%5BBug%5D%3A+');
    }

    private function configureScheme(): void
    {
        URL::forceHttps($this->app->isProduction() || str_contains(config('app.url'), 'ngrok'));
    }

    private function configurePersonalization(): void
    {
        TallStackUi::personalize('alert')
            ->scope('circle')
            ->block('wrapper')
            ->replace('rounded-lg', 'rounded-full');
    }
}
