<?php

namespace App\Enums\Examples\V2;

class StarterKit
{
    public const COMMAND = <<<'HTML'
    laravel new --using=tallstackui/starter-kit
    HTML;

    public const EMAIL = <<<'HTML'
    test@example.com
    HTML;

    public const PASSWORD = <<<'HTML'
    password
    HTML;
}
