<?php

namespace App\Enums\Examples\V2\Ui;

class Slide
{
    public const BASIC = <<<'HTML'
    <x-slide>
        TallStackUi
    </x-slide>
    HTML;

    public const POSITIONS = <<<'HTML'
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
    <!-- sm, md, lg, xl -->
    
    <x-slide blur> <!-- sm blur -->
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

    public const EVENTS = <<<'HTML'
    <x-slide title="TallStackUi"
             x-on:open="alert('Opened!')"
             x-on:close="alert('Closed!')">
        TallStackUi
    </x-slide>
    HTML;

    public const FOCUS = <<<'HTML'
    <x-button x-on:click="$slideOpen('slide-id')">
        Open
    </x-button>
    
    <x-slide id="slide-id" x-on:open="$focusOn('email')"> {{-- [tl! highlight] --}}
        <form>
            <x-input label="Email" 
                     id="email" {{-- [tl! highlight] --}}
                     hint="Insert your best email address" />
        </form>
    </x-slide>
    HTML;

    public const FOCUS_TIME = <<<'HTML'
    <x-button x-on:click="$slideOpen('slide-id')">
        Open
    </x-button>
    
    <x-slide id="slide-id" x-on:open="$focusOn('email', 1000)"> {{-- [tl! highlight] --}}
        <form>
            <x-input label="Email" 
                     id="email" {{-- [tl! highlight] --}}
                     hint="Insert your best email address" />      
        </form>
    </x-slide>
    HTML;

    public const FOCUS_USING_DATA_ATTRIBUTE = <<<'HTML'
    <x-button x-on:click="$slideOpen('slide-id')">
        Open
    </x-button>
    
    <x-slide id="slide-id" x-on:open="$focusOn('email')"> {{-- [tl! highlight] --}}
        <form>
            <x-input label="Email" 
                     data-focus="email" {{-- [tl! highlight] --}}
                     hint="Insert your best email address" />       
        </form>
    </x-slide>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->slide()
        ->block('block', 'classes');
    HTML;
}
