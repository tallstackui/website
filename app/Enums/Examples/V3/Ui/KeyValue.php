<?php

namespace App\Enums\Examples\V3\Ui;

class KeyValue
{
    public const BASIC_PHP = <<<'HTML'
    use Livewire\Component;

    class ProductMetadata extends Component
    {
        public array $metadata = [ // [tl! highlight:9]
            [
                'key' => 'php',
                'value' => 'Laravel',
            ],
            [
                'key' => 'vuejs',
                'value' => 'NuxtJS',
            ]
        ];

        // ...
    }
    HTML;

    public const BASIC_BLADE = <<<'HTML'
    <x-key-value wire:model="metadata" />
    HTML;

    public const BASIC = <<<'HTML'
    <x-key-value />
    HTML;

    public const LABEL_VALUE = <<<'HTML'
    <x-key-value label="LANGUAGE" value="FRAMEWORK" />
    HTML;

    public const PLACEHOLDERS = <<<'HTML'
    <x-key-value :placeholders="false" />
    HTML;

    public const LIMIT = <<<'HTML'
    <x-key-value :limit="3" />
    HTML;

    public const STATIC = <<<'HTML'
    <x-key-value static />
    HTML;

    public const DELETE = <<<'HTML'
    <x-key-value deletable />
    HTML;

    public const DELETE_METHOD = <<<'HTML'
    <x-key-value deletable delete-method="delete" />
    HTML;

    public const DELETE_METHOD_PHP = <<<'HTML'
    class ProductMetadata extends Component
    {
        public array $metadata = [
            [
                'key' => 'php',
                'value' => 'Laravel',
            ],
            [
                'key' => 'vuejs',
                'value' => 'NuxtJS',
            ]
        ];

        // ...

        public function delete($index, $rows) // [tl! highlight:3]
        {
            //
        }
    }
    HTML;

    public const DELETE_ICON = <<<'HTML'
    <x-key-value icon="x-mark" deletable delete-method="delete" />
    HTML;

    public const SLOTS = <<<'HTML'
    <x-key-value>
        <x-slot:header>
            Header Slot
        </x-slot:header>
    </x-key-value>
    HTML;

    public const EVENTS = <<<'HTML'
    <!-- $event.detail.rows: will contain the rows -->

    <x-key-value x-on:add="alert('Added')" x-on:remove="alert('Removed')" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->keyValue()
        ->block('block', 'classes');
    HTML;
}
