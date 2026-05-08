<?php

namespace App\Enums\Examples\V3\Ui;

class Card
{
    public const string BASIC = <<<'HTML'
    <x-card>
        TallStackUI
    </x-card>
    HTML;

    public const string HEADER = <<<'HTML'
    <x-card>
        <x-slot:header>
            Raw HTML content
        </x-slot:header>
        TallStackUI
    </x-card>

    <!-- or -->

    <x-card header="TallStackUI">
        TallStackUI
    </x-card>
    HTML;

    public const string FOOTER = <<<'HTML'
    <x-card>
        TallStackUI
        <x-slot:footer>
            Raw HTML content
        </x-slot:footer>
    </x-card>

    <!-- or -->

    <x-card footer="TallStackUI">
        TallStackUI
    </x-card>
    HTML;

    public const string MINIMIZE = <<<'HTML'
    <x-card header="TallStackUI" minimize>
        TallStackUI
    </x-card>

    <!-- or -->

    <x-card minimize>
        <x-slot:header>
            TallStackUI
        </x-slot:header>
        TallStackUI
    </x-card>
    HTML;

    public const string MINIMIZE_FROM_MOUNT = <<<'HTML'
    <x-card header="TallStackUI" minimize="mount">
        TallStackUI
    </x-card>
    HTML;

    public const string IMAGE = <<<'HTML'
    <!-- Top position -->
    <x-card image="https://picsum.photos/750/300">
        TallStackUI
    </x-card>

    <!-- Bottom position -->
    <x-card position="bottom" image="https://picsum.photos/750/300">
        TallStackUI
    </x-card>
    HTML;

    public const string ROUND = <<<'HTML'
    {{-- Default radius (rounded-lg). --}}
    <x-card>
        TallStackUI
    </x-card>

    {{-- Bare flag preserves the default radius. --}}
    <x-card round>
        TallStackUI
    </x-card>

    <!-- Accepted sizes: xs, sm, md, lg, xl, 2xl -->

    <x-card round="xs">
        TallStackUI
    </x-card>

    <x-card round="sm">
        TallStackUI
    </x-card>

    <x-card round="md">
        TallStackUI
    </x-card>

    <x-card round="lg">
        TallStackUI
    </x-card>

    <x-card round="xl">
        TallStackUI
    </x-card>

    <x-card round="2xl">
        TallStackUI
    </x-card>
    HTML;

    public const string COLOR = <<<'HTML'
    <!-- Accepted colors: primary, secondary, and ANY other TailwindCSS color. -->

    <!-- Normal -->
    <x-card header="TallStackUI" color="primary">
        TallStackUI
    </x-card>

    <!-- Light Variation -->
    <x-card header="TallStackUI" color="primary" light>
        TallStackUI
    </x-card>

    <!-- Border Only -->
    <x-card header="TallStackUI" color="primary" bordered>
        TallStackUI
    </x-card>
    HTML;

    public const string LOADING = <<<'HTML'
    <x-card loading>
        TallStackUI
    </x-card>

    <!-- You can use all the Livewire delay options: shortest, shorter, short, long, longer, longest -->

    <x-card loading="save" delay="longest">
        TallStackUI
    </x-card>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-card header="TallStackUI" minimize
            x-on:minimize="alert('Minimized!')"
            x-on:maximize="alert('Maximized!')"
            x-on:close="alert('Closed!')">
        TallStackUI
    </x-card>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->card()
        ->block('block', 'classes');
    HTML;
}
