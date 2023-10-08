<?php

namespace App\Enums\Examples\Ui;

class Icon
{
    public const BASIC = <<<'HTML'
    <x-icon name="users" class="h-5 w-5" />
    <x-icon name="cog" class="h-5 w-5" />
    <x-icon name="arrow-left" class="h-5 w-5" />
    <x-icon name="arrow-right" class="h-5 w-5" />

    <!-- or -->

    <x-icon icon="users" class="h-5 w-5" />
    <x-icon icon="cog" class="h-5 w-5" />
    <x-icon icon="arrow-left" class="h-5 w-5" />
    <x-icon icon="arrow-right" class="h-5 w-5" />
    HTML;

    public const OUTLINE = <<<'HTML'
    <x-icon name="users" class="h-5 w-5" />
    <x-icon name="users" class="h-5 w-5" outline />
    <x-icon name="clipboard" class="h-5 w-5" />
    <x-icon name="clipboard" class="h-5 w-5" outline />
    HTML;
}
