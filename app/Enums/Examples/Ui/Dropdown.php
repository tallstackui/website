<?php

namespace App\Enums\Examples\Ui;

class Dropdown
{
    public const LEFT = <<<'HTML'
    <x-dropdown text="Menu">
        <x-dropdown.items text="Settings" />
        <x-dropdown.items text="Logout" separator />
    </x-dropdown>
    HTML;

    public const RIGHT = <<<'HTML'
    <x-dropdown text="Menu" right>
        <x-dropdown.items text="Settings" />
        <x-dropdown.items text="Logout" separator />
    </x-dropdown>
    HTML;

    public const ICONS = <<<'HTML'
    <x-dropdown icon="chevron-down">
        <x-dropdown.items text="Settings" />
        <x-dropdown.items text="Logout" separator />
    </x-dropdown>
    HTML;

    public const ANIMATIONS = <<<'HTML'
    <x-dropdown icon="chevron-down" animate>
        <x-dropdown.items text="Settings" />
        <x-dropdown.items text="Logout" separator />
    </x-dropdown>
    HTML;

    public const ICON_SLOTS = <<<'HTML'
    <x-dropdown icon="chevron-down" animate>
        <x-dropdown.items icon="cog" text="Settings" />
        <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
    </x-dropdown>
    HTML;

    public const ACTION_SLOTS = <<<'HTML'
    <x-dropdown>
        <x-slot:action>
            <x-button x-on:click="show = !show" sm outline>Open</x-button>
        </x-slot:action>
        <x-dropdown.items icon="cog" text="Settings" />
        <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
    </x-dropdown>
    HTML;
}
