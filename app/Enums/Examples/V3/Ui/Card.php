<?php

namespace App\Enums\Examples\V3\Ui;

class Card
{
    public const BASIC = <<<'HTML'
    <x-card>
        TallStackUI
    </x-card>
    HTML;

    public const HEADER = <<<'HTML'
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

    public const FOOTER = <<<'HTML'
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

    public const MINIMIZE = <<<'HTML'
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

    public const MINIMIZE_FROM_MOUNT = <<<'HTML'
    <x-card header="TallStackUI" minimize="mount">
        TallStackUI
    </x-card>
    HTML;

    public const IMAGE = <<<'HTML'
    <!-- Top position -->
    <x-card image="https://picsum.photos/750/300">
        TallStackUI
    </x-card>

    <!-- Bottom position -->
    <x-card position="bottom" image="https://picsum.photos/750/300">
        TallStackUI
    </x-card>
    HTML;

    public const COLOR = <<<'HTML'
    <!-- Accepted colors: primary, secondary, and ANY other TailwindCSS color. -->

    <!-- Normal -->
    <x-card header="TallStackUI" color="primary">
        TallStackUI
    </x-card>

    <!-- Light Variation -->
    <x-card header="TallStackUI" color="primary">
        TallStackUI
    </x-card>

    <!-- Border Only -->
    <x-card header="TallStackUI" color="primary" bordered>
        TallStackUI
    </x-card>
    HTML;

    public const LOADING = <<<'HTML'
    <x-card loading>
        TallStackUI
    </x-card>

    <!-- You can use all the Livewire delay options: shortest, shorter, short, long, longer, longest -->

    <x-card loading="save" delay="longest">
        TallStackUI
    </x-card>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->card()
        ->block('block', 'classes');
    HTML;
}
