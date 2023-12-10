<?php

namespace App\Enums\Examples;

class Alpine
{
    public const INPUT = <<<'HTML'
    <x-input label="Birthday"
             hint="Insert your birthday"
             value="27/02/1992"
             x-mask="99/99/9999" />

    <x-input label="Salary"
             hint="Insert your desired salary"
             value="200.000"
             x-mask:dynamic="$money($input, ',')" />
    HTML;
}
