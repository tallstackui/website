<?php

namespace App\Enums\Examples\V2\Others;

class Troubleshooting
{
    public const LARAVEL_1035_BUG = <<<'HTML'
    <!-- using the input like this -->
    <x-input name="name" foo="bar" />

    <!-- will result in an input WITHOUT the "name" attribute
    because the input component uses other components
    that also contain the "name" attribute. -->
    <input foo="bar">
    HTML;
}
