<?php

namespace App\Enums\Examples\V1\Ui;

class Card
{
    public const string BASIC = <<<'HTML'
    <x-card>
        TallStackUi
    </x-card>
    HTML;

    public const string HEADER = <<<'HTML'
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

    public const string FOOTER = <<<'HTML'
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

    public const string PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->card()
        ->block('block', 'classes');
    HTML;
}
