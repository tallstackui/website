<?php

declare(strict_types=1);

namespace App\Enums\Examples;

class Translation
{
    public const string COMMAND = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.lang
    HTML;
}
