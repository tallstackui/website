<?php

namespace App\Enums\Examples;

class Troubleshooting
{
    public const LARAVEL_1035_BUG = <<<'HTML'
    <!-- using the input like this -->
    <x-input name="name" />

    <!-- will result in an input WITHOUT "name" attribute -->
    <input>
    HTML;
}
