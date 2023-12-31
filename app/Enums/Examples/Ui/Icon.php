<?php

namespace App\Enums\Examples\Ui;

class Icon
{
    public const BASIC = <<<'HTML'
    <x-icon name="users" class="h-5 w-5" />
    <x-icon name="cog" class="h-5 w-5" />
    <x-icon name="arrow-left" class="h-5 w-5" />
    <x-icon name="arrow-right" class="h-5 w-5" />
    HTML;

    public const OUTLINE = <<<'HTML'
    <x-icon name="users" class="h-5 w-5" />
    <x-icon name="users" class="h-5 w-5" outline />
    <x-icon name="clipboard" class="h-5 w-5" />
    <x-icon name="clipboard" class="h-5 w-5" outline />
    HTML;

    public const LEFT_RIGHT = <<<'HTML'
    <x-icon name="users" class="h-5 w-5">
        <x-slot:left>
            Users
        </x-slot:left>
    </x-icon>
    <x-icon name="cog" class="h-5 w-5">
        <x-slot:right>
            Settings
        </x-slot:right>
    </x-icon>
    HTML;
}
