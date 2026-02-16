<?php

namespace App\Enums\Examples\V3\Ui;

class Dropdown
{
    public const string LEFT = <<<'HTML'
    <x-dropdown text="Menu" position="bottom-end">
        <x-dropdown.items text="Settings" />
        <x-dropdown.items text="Logout" separator />
    </x-dropdown>
    HTML;

    public const string POSITIONS = <<<'HTML'
    <!-- Available Positions:
         bottom,
         bottom-start,
         bottom-end,
         top,
         top-start,
         top-end,
         left,
         left-start,
         left-end,
         right,
         right-start,
         right-end
     -->

    <x-dropdown text="Menu" position="bottom-start">
        <x-dropdown.items text="Settings" />
        <x-dropdown.items text="Logout" separator />
    </x-dropdown>
    HTML;

    public const string LINKS = <<<'HTML'
    <x-dropdown icon="chevron-down" position="bottom-end">
        <a href="https://google.com.br" target="_blank">
            <x-dropdown.items text="Google" />
        </a>
        <a href="https://twitter.com" target="_blank">
            <x-dropdown.items text="Twitter" separator />
        </a>
    </x-dropdown>
    HTML;

    public const string ICONS = <<<'HTML'
    <x-dropdown icon="chevron-down">
        <x-dropdown.items text="Settings" />
        <x-dropdown.items text="Logout" separator />
    </x-dropdown>
    HTML;

    public const string ICONS_STATIC = <<<'HTML'
    <x-dropdown icon="ellipsis-vertical" static>
        <x-dropdown.items text="Settings" />
        <x-dropdown.items text="Logout" separator />
    </x-dropdown>
    HTML;

    public const string HEADER_SLOTS = <<<'HTML'
    <x-dropdown text="Menu">
        <x-slot:header>
            <p>Welcome!</p>
        </x-slot:header>
        <x-dropdown.items icon="cog" text="Settings" />
        <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
    </x-dropdown>
    HTML;

    public const string SUB = <<<'HTML'
    <x-dropdown text="Menu" position="bottom-end">
        <x-dropdown.items text="PHP" />
        <x-dropdown.items text="Python" />
        <x-dropdown.submenu text="Second Level">
            <x-dropdown.items text="JavaScript" />
            <x-dropdown.items text="Java" />
            <x-dropdown.submenu text="Third Level">
                <x-dropdown.items text="C++" />
                <x-dropdown.items text="Golang" />
            </x-dropdown.submenu>
        </x-dropdown.submenu>
    </x-dropdown>
    HTML;

    public const string SUB_LEFT = <<<'HTML'
    <x-dropdown text="Menu" position="bottom-end">
        <x-dropdown.items text="PHP" />
        <x-dropdown.items text="Python" />
        <x-dropdown.submenu text="Second Level" position="left-start"> {{-- [tl! focus] --}}
            <x-dropdown.items text="JavaScript" />
            <x-dropdown.items text="Java" />
            <x-dropdown.submenu text="Third Level" position="left-start"> {{-- [tl! focus] --}}
                <x-dropdown.items text="C++" />
                <x-dropdown.items text="Golang" />
            </x-dropdown.submenu>
        </x-dropdown.submenu>
    </x-dropdown>
    HTML;

    public const string ACTION_SLOTS = <<<'HTML'
    <x-dropdown>
        <x-slot:action>
            <x-button x-on:click="show = !show" sm outline>Open</x-button>
        </x-slot:action>
        <x-dropdown.items icon="cog" text="Settings" />
        <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
    </x-dropdown>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-dropdown text="Menu"
                x-on:open="alert(`Open, 'show' status: ${$event.detail.status}`)"
                x-on:select="alert('Selected')">
        <x-dropdown.items text="Settings" />
        <x-dropdown.items text="Logout" separator />
    </x-dropdown>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->dropdown()
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_ITEMS = <<<'HTML'
    TallStackUi::customize()
        ->dropdown('items')
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_SUBMENU = <<<'HTML'
    TallStackUi::customize()
        ->dropdown('submenu')
        ->block('block', 'classes');
    HTML;
}
