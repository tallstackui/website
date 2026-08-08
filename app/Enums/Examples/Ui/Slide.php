<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Slide
{
    public const string BASIC = <<<'HTML'
    <x-slide>
        TallStackUi
    </x-slide>
    HTML;

    public const string POSITIONS = <<<'HTML'
    <x-slide>
        Right
    </x-slide>
    <x-slide left>
        Left
    </x-slide>
    <x-slide top>
        Top
    </x-slide>
    <x-slide bottom>
        Bottom
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

    <x-button x-on:click="$tsui.open.slide('slide-id')">
        Open
    </x-button>

    <x-button x-on:click="$tsui.close.slide('slide-id')">
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

    public const string FOCUS = <<<'HTML'
    <x-button x-on:click="$tsui.open.slide('slide-id')">
        Open
    </x-button>

    <x-slide id="slide-id" x-on:open="$tsui.focus('email')"> {{-- [tl! highlight] --}}
        <form>
            <x-input label="Email"
                     id="email" {{-- [tl! highlight] --}}
                     hint="Insert your best email address" />
        </form>
    </x-slide>
    HTML;

    public const string FOCUS_TIME = <<<'HTML'
    <x-button x-on:click="$tsui.open.slide('slide-id')">
        Open
    </x-button>

    <x-slide id="slide-id" x-on:open="$tsui.focus('email', 1000)"> {{-- [tl! highlight] --}}
        <form>
            <x-input label="Email"
                     id="email" {{-- [tl! highlight] --}}
                     hint="Insert your best email address" />
        </form>
    </x-slide>
    HTML;

    public const string FOCUS_USING_DATA_ATTRIBUTE = <<<'HTML'
    <x-button x-on:click="$tsui.open.slide('slide-id')">
        Open
    </x-button>

    <x-slide id="slide-id" x-on:open="$tsui.focus('email')"> {{-- [tl! highlight] --}}
        <form>
            <x-input label="Email"
                     data-focus="email" {{-- [tl! highlight] --}}
                     hint="Insert your best email address" />
        </form>
    </x-slide>
    HTML;

    public const string PADDINGLESS = <<<'HTML'
    <x-slide paddingless>
        <x-table :$headers :$rows />
    </x-slide>
    HTML;

    public const string FOOTER_ALIGNMENT = <<<'HTML'
    <x-slide>
        TallStackUI
        <x-slot:footer between>
            <x-button color="red">Delete</x-button>
            <x-button>Save</x-button>
        </x-slot:footer>
    </x-slide>

    <!-- Accepted: start, center, end, between, unwrapped -->
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->slide()
        ->block('block', 'classes');
    HTML;
}
