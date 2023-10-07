<?php

namespace App\Enums\Examples;

class Error
{
    public const BASIC = <<<'HTML'
    <x-errors />
    HTML;

    public const SPECIFIC = <<<'HTML'
    <x-errors only="name" />

    <!-- or -->

    <x-errors :only="['name', 'description']" />
    HTML;

    public const CUSTOMIZED = <<<'HTML'
    <x-errors title="Ops! There are :count validation errors:" />
    HTML;

    public const COLORS = <<<'HTML'
    <x-errors title="Ops! There are :count validation errors:" color="sky" />
    HTML;
}
