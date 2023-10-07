<?php

namespace App\Enums\Examples;

class Card
{
    public const BASIC = <<<'HTML'
    <x-card>
        TallStackUi
    </x-card>
    HTML;

    public const HEADER = <<<'HTML'
    <x-card>
        <x-slot:header>
            TallStackUi
        </x-slot:header>
        TallStackUi
    </x-card>

    <!-- or -->

    <x-card header="TallStackUi">
        TallStackUi
    </x-card>
    HTML;

    public const FOOTER = <<<'HTML'
    <x-card>
        TallStackUi
        <x-slot:footer>
            TallStackUi
        </x-slot:footer>
    </x-card>

    <!-- or -->

    <x-card footer="TallStackUi">
        TallStackUi
    </x-card>
    HTML;
}
