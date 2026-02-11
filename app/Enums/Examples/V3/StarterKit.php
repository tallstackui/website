<?php

namespace App\Enums\Examples\V3;

class StarterKit
{
    public const COMMAND = <<<'HTML'
    laravel new --using=tallstackui/starter-kit
    HTML;

    public const PEST = <<<'HTML'
    composer test
    HTML;

    public const PHPSTAN = <<<'HTML'
    composer analyse
    HTML;

    public const PINT = <<<'HTML'
    composer format
    HTML;

    public const CI = <<<'HTML'
    composer ci
    HTML;

    public const EMAIL = <<<'HTML'
    test@example.com
    HTML;

    public const PASSWORD = <<<'HTML'
    password
    HTML;
}
