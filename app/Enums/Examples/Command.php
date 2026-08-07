<?php

namespace App\Enums\Examples;

class Command
{
    public const string FIND = <<<'HTML'
    php artisan tallstackui:find-component
    HTML;

    public const string PREFIX = <<<'HTML'
    php artisan tallstackui:setup-prefix
    HTML;

    public const string COLORS = <<<'HTML'
    php artisan tallstackui:setup-color
    HTML;

    public const string IDE = <<<'HTML'
    php artisan tallstackui:ide
    HTML;
}
