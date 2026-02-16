<?php

namespace App\Enums\Examples\V2;

class Configuration
{
    public const string COMMAND = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.config
    HTML;
}
