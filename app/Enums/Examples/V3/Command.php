<?php

namespace App\Enums\Examples\V3;

class Command
{
    public const FIND = <<<'HTML'
    php artisan tallstackui:find-component
    HTML;

    public const PREFIX = <<<'HTML'
    php artisan tallstackui:setup-prefix
    HTML;

    public const COLORS = <<<'HTML'
    php artisan tallstackui:setup-color
    HTML;

    public const IDE = <<<'HTML'
    php artisan tallstackui:ide
    HTML;
}
