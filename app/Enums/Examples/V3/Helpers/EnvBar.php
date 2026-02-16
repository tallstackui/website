<?php

namespace App\Enums\Examples\V3\Helpers;

class EnvBar
{
    public const string INSTALLATION = <<<'HTML'
    composer require tallstackui/envbar
    HTML;

    public const string CONFIGURATION = <<<'HTML'
    php artisan vendor:publish --tag=envbar-config
    HTML;

    public const string GATE = <<<'HTML'
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

    public const string COLORS = <<<'HTML'
    // ...

    'environments' => [
        'local' => 'green',
        'staging' => 'yellow',
        'sandbox' => 'orange',
        // 'production' => 'red',
    ],

    // ...
    HTML;

    public const string IGNORES = <<<'HTML'
    // ...

    'ignore_on' => [
        'pulse.*',
        'horizon.*',
        'telescope.*',
    ],

    // ...
    HTML;

    public const string LINKS = <<<'HTML'
    ENVBAR_LINKS="https://google.com.br,https://github.com"
    HTML;

    public const string LABELS = <<<'HTML'
    ENVBAR_LINKS="Google|https://google.com.br,GitHub|https://github.com"
    HTML;

    public const string FLUSH = <<<'HTML'
    php artisan envbar:flush
    HTML;

    public const string SHOW = <<<'HTML'
    php artisan envbar:show
    HTML;
}
