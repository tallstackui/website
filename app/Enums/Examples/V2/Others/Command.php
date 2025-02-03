<?php

namespace App\Enums\Examples\V2\Others;

class Command
{
    public const FIND_COMPONENT = <<<'HTML'
    php artisan tallstackui:find-component
    HTML;

    public const SETUP_PREFIX = <<<'HTML'
    php artisan tallstackui:setup-prefix
    HTML;

    public const SETUP_COLOR = <<<'HTML'
    php artisan tallstackui:setup-colors
    HTML;
}
