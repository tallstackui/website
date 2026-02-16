<?php

namespace App\Enums\Examples\V1\Ui;

class Slide
{
    public const string BASIC = <<<'HTML'
    <x-slide>
        TallStackUi
    </x-slide>
    HTML;

    public const string LEFT = <<<'HTML'
    <x-slide left>
        TallStackUi
    </x-slide>
    HTML;

    public const string TITLE = <<<'HTML'
    <x-slide id="title-slide">
        <x-slot:title>
            TallStackUi
        </x-slot:title>
        TallStackUi
    </x-slide>

    <!-- or -->

    <x-slide title="TallStackUi">
        TallStackUi
    </x-slide>
    HTML;

    public const string FOOTER = <<<'HTML'
    <x-slide>
        TallStackUi
        <x-slot:footer start> <!-- start: justify-start, end: justify-end -->
            TallStackUi
        </x-slot:footer>
    </x-slide>

    <!-- or -->

    <x-slide footer="TallStackUi">
        TallStackUi
    </x-slide>
    HTML;

    public const string BLUR = <<<'HTML'
    <!-- sm, md, lg, xl -->

    <x-slide blur> <!-- sm blur -->
        TallStackUi
    </x-slide>
    HTML;

    public const string SIZES = <<<'HTML'
    <!-- sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full -->

    <x-slide title="TallStackUi" size="2xl">
        TallStackUi
    </x-slide>
    HTML;

    public const string Z_INDEX = <<<'HTML'
    <x-slide title="TallStackUi" z-index="z-10">
        TallStackUi
    </x-slide>
    HTML;

    public const string PERSISTENT = <<<'HTML'
    <x-slide title="TallStackUi" persistent>
        TallStackUi
    </x-slide>
    HTML;

    public const string WIREABLE = <<<'HTML'
    <!-- Livewire boolean property: $slide -->

    <x-slide title="TallStackUi" wire>
        TallStackUi
    </x-slide>

    <x-button wire:click="$toggle('slide')">
        Open
    </x-button>
    HTML;

    public const string WIREABLE_CUSTOMIZED = <<<'HTML'
    <!-- Livewire boolean property: $tallstackui -->

    <x-slide title="TallStackUi" wire="tallstackui">
        TallStackUi
    </x-slide>

    <x-button wire:click="$toggle('tallstackui')">
        Open
    </x-button>
    HTML;

    public const string ALPINEJS = <<<'HTML'
    <x-slide id="slide-id">
        TallStackUi
    </x-slide>

    <x-button x-on:click="$slideOpen('slide-id')">
        Open
    </x-button>

    <x-button x-on:click="$slideClose('slide-id')">
        Close
    </x-button>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-slide title="TallStackUi"
             x-on:open="alert('Opened!')"
             x-on:close="alert('Closed!')">
        TallStackUi
    </x-slide>
    HTML;

    public const string PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->slide()
        ->block('block', 'classes');
    HTML;
}
