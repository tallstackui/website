<?php

namespace App\Enums\Examples\Ui;

class Slide
{
    public const BASIC = <<<'HTML'
    <x-slide>
        TallStackUi
    </x-slide>
    HTML;

    public const LEFT = <<<'HTML'
    <x-slide left>
        TallStackUi
    </x-slide>
    HTML;

    public const TITLE = <<<'HTML'
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

    public const FOOTER = <<<'HTML'
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

    public const BLUR = <<<'HTML'
    <x-slide blur>
        TallStackUi
    </x-slide>
    HTML;

    public const SIZES = <<<'HTML'
    <!-- sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full -->

    <x-slide title="TallStackUi" size="2xl">
        TallStackUi
    </x-slide>
    HTML;

    public const Z_INDEX = <<<'HTML'
    <x-slide title="TallStackUi" z-index="z-10">
        TallStackUi
    </x-slide>
    HTML;

    public const PERSISTENT = <<<'HTML'
    <x-slide title="TallStackUi" persistent>
        TallStackUi
    </x-slide>
    HTML;

    public const WIREABLE = <<<'HTML'
    <!-- Livewire boolean property: $slide -->

    <x-slide title="TallStackUi" wire>
        TallStackUi
    </x-slide>

    <x-button wire:click="$toggle('slide')">
        Open
    </x-button>
    HTML;

    public const WIREABLE_CUSTOMIZED = <<<'HTML'
    <!-- Livewire boolean property: $tallstackui -->

    <x-slide title="TallStackUi" wire="tallstackui">
        TallStackUi
    </x-slide>

    <x-button wire:click="$toggle('tallstackui')">
        Open
    </x-button>
    HTML;

    public const ALPINEJS = <<<'HTML'
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

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->slide()
        ->block('block', 'classes');
    HTML;
}
