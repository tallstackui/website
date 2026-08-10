<?php

declare(strict_types=1);

namespace App\Enums\Examples;

class Configuration
{
    public const string COMMAND = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.config
    HTML;
}
