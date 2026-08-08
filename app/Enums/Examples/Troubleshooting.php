<?php

declare(strict_types=1);

namespace App\Enums\Examples;

class Troubleshooting
{
    public const string LARAVEL_1035_BUG = <<<'HTML'
    <!-- using the input like this -->
    <x-input name="name" foo="bar" />

    <!-- will result in an input WITHOUT the "name" attribute
    because the input component uses other components
    that also contain the "name" attribute. -->
    <input foo="bar">
    HTML;
}
