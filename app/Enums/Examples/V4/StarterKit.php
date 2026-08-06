<?php

namespace App\Enums\Examples\V4;

class StarterKit
{
    public const string COMMAND = <<<'HTML'
    laravel new --using=tallstackui/starter-kit
    HTML;

    public const string PEST = <<<'HTML'
    composer test
    HTML;

    public const string PHPSTAN = <<<'HTML'
    composer analyse
    HTML;

    public const string PINT = <<<'HTML'
    composer format
    HTML;

    public const string CI = <<<'HTML'
    composer ci
    HTML;

    public const string EMAIL = <<<'HTML'
    test@example.com
    HTML;

    public const string PASSWORD = <<<'HTML'
    password
    HTML;
}
