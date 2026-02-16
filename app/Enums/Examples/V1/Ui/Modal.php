<?php

namespace App\Enums\Examples\V1\Ui;

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

    public const string BLUR = <<<'HTML'
    <!-- sm, md, lg, xl -->

    <x-modal title="TallStackUi" blur> <!-- sm blur -->
        TallStackUi
    </x-modal>
    HTML;

    public const string SIZES = <<<'HTML'
    <!-- sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl -->

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

    <x-button x-on:click="$modalOpen('modal-id')">
        Open
    </x-button>

    <x-button x-on:click="$modalClose('modal-id')">
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

    public const string PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->modal()
        ->block('block', 'classes');
    HTML;
}
