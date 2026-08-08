<?php

namespace App\Enums\Examples\Ui;

class Modal
{
    public const string BASIC = <<<'HTML'
    <x-modal>
        TallStackUi
    </x-modal>
    HTML;

    public const string TITLE = <<<'HTML'
    <x-modal>
        <x-slot:title>
            TallStackUi
        </x-slot:title>
        TallStackUi
    </x-modal>

    <!-- or -->

    <x-modal title="TallStackUi">
        TallStackUi
    </x-modal>
    HTML;

    public const string FOOTER = <<<'HTML'
    <x-modal>
        TallStackUi
        <x-slot:footer>
            TallStackUi
        </x-slot:footer>
    </x-modal>

    <!-- or -->

    <x-modal footer="TallStackUi">
        TallStackUi
    </x-modal>
    HTML;

    public const string SCROLLABLE = <<<'HTML'
    <x-modal scrollable>
        Your content goes here. It can be very long, so it will scroll.
    </x-modal>
    HTML;

    public const string BLUR = <<<'HTML'
    <!-- sm, md, lg, xl -->

    <x-modal title="TallStackUi" blur> <!-- sm blur -->
        TallStackUi
    </x-modal>
    HTML;

    public const string SIZES = <<<'HTML'
    <!-- sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full -->

    <x-modal title="TallStackUi" size="2xl">
        TallStackUi
    </x-modal>
    HTML;

    public const string CENTER = <<<'HTML'
    <x-modal title="TallStackUi" center>
        TallStackUi
    </x-modal>
    HTML;

    public const string Z_INDEX = <<<'HTML'
    <x-modal title="TallStackUi" z-index="z-10">
        TallStackUi
    </x-modal>
    HTML;

    public const string PERSISTENT = <<<'HTML'
    <x-modal title="TallStackUi" persistent>
        TallStackUi
    </x-modal>
    HTML;

    public const string WIREABLE = <<<'HTML'
    <!-- Livewire boolean property: $modal -->

    <x-modal title="TallStackUi" wire>
        TallStackUi
    </x-modal>

    <x-button wire:click="$toggle('modal')">
        Open
    </x-button>
    HTML;

    public const string WIREABLE_CUSTOMIZED = <<<'HTML'
    <!-- Livewire boolean property: $tallstackui -->

    <x-modal title="TallStackUi" wire="tallstackui">
        TallStackUi
    </x-modal>

    <x-button wire:click="$toggle('tallstackui')">
        Open
    </x-button>
    HTML;

    public const string ALPINEJS = <<<'HTML'
    <x-modal id="modal-id">
        TallStackUi
    </x-modal>

    <x-button x-on:click="$tsui.open.modal('modal-id')">
        Open
    </x-button>

    <x-button x-on:click="$tsui.close.modal('modal-id')">
        Close
    </x-button>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-modal title="TallStackUi"
             x-on:open="alert('Opened!')"
             x-on:close="alert('Closed!')">
        TallStackUi
    </x-modal>
    HTML;

    public const string FOCUS = <<<'HTML'
    <x-button x-on:click="$tsui.open.modal('modal-id')">
        Open
    </x-button>

    <x-modal id="modal-id" x-on:open="$tsui.focus('email')"> {{-- [tl! highlight] --}}
        <form>
            <x-input label="Email"
                     id="email" {{-- [tl! highlight] --}}
                     hint="Insert your best email address" />
        </form>
    </x-modal>
    HTML;

    public const string FOCUS_TIME = <<<'HTML'
    <x-button x-on:click="$tsui.open.modal('modal-id')">
        Open
    </x-button>

    <x-modal id="modal-id" x-on:open="$tsui.focus('email', 1000)"> {{-- [tl! highlight] --}}
        <form>
            <x-input label="Email"
                     id="email" {{-- [tl! highlight] --}}
                     hint="Insert your best email address" />
        </form>
    </x-modal>
    HTML;

    public const string FOCUS_USING_DATA_ATTRIBUTE = <<<'HTML'
    <x-button x-on:click="$tsui.open.modal('modal-id')">
        Open
    </x-button>

    <x-modal id="modal-id" x-on:open="$tsui.focus('email')"> {{-- [tl! highlight] --}}
        <form>
            <x-input label="Email"
                     data-focus="email" {{-- [tl! highlight] --}}
                     hint="Insert your best email address" />
        </form>
    </x-modal>
    HTML;

    public const string CENTER_BREAKPOINT = <<<'HTML'
    {{-- Bottom sheet below 768px, centered dialog from there upwards --}}
    <x-modal center="md">
        TallStackUI
    </x-modal>
    HTML;

    public const string HANDLE = <<<'HTML'
    <x-modal handle>
        TallStackUI
    </x-modal>
    HTML;

    public const string PADDINGLESS = <<<'HTML'
    <x-modal title="TallStackUI" paddingless>
        TallStackUI modal with no padding in the body.
    </x-modal>
    HTML;

    public const string FOOTER_ALIGNMENT = <<<'HTML'
    <x-modal>
        TallStackUI
        <x-slot:footer between>
            <x-button color="red">Delete</x-button>
            <x-button>Save</x-button>
        </x-slot:footer>
    </x-modal>

    <!-- Accepted: start, center, end, between, unwrapped -->
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->modal()
        ->block('block', 'classes');
    HTML;
}
