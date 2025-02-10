<?php

namespace App\Enums\Examples\V2\Helpers;

class EnvBar
{
    public const INSTALLATION = <<<'HTML'
    composer require tallstackui/envbar:^0.1.0@beta
    HTML;

    public const CONFIGURATION = <<<'HTML'
    php artisan vendor:publish --tag=envbar-config
    HTML;

    public const GATE = <<<'HTML'
    use App\Models\User;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Facades\Gate; // [tl! focus]
    
    class AppServiceProvider extends ServiceProvider
    {
        // ...

        public function boot(): void
        {
            Gate::define('envbar::view', function (User $user) { // [tl! focus:5]
                return in_array($user->email, [
                    'admin@my-app.com',
                    'jhon.doe@my-app.com'
                ]);
            });
        }
    }
    HTML;

    public const COLORS = <<<'HTML'
    // ...
    
    'environments' => [
        'local' => 'green',
        'staging' => 'yellow',
        'sandbox' => 'orange',
        // 'production' => 'red',
    ],

    // ...
    HTML;

    public const IGNORES = <<<'HTML'
    // ...
    
    'ignore_on' => [
        'pulse/*',
        'horizon/*',
        'telescope/*',
    ],

    // ...
    HTML;

    public const FLUSH = <<<'HTML'
    php artisan envbar:flush
    HTML;

    public const SHOW = <<<'HTML'
    php artisan envbar:show
    HTML;
}
