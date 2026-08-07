<?php

namespace App\Enums\Examples\Ui;

class KeyValue
{
    public const string BASIC_PHP = <<<'HTML'
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

    public const string BASIC_BLADE = <<<'HTML'
    <x-key-value wire:model="metadata" />
    HTML;

    public const string BASIC = <<<'HTML'
    <x-key-value />
    HTML;

    public const string LABEL_VALUE = <<<'HTML'
    <x-key-value label="LANGUAGE" value="FRAMEWORK" />
    HTML;

    public const string PLACEHOLDERS = <<<'HTML'
    <x-key-value :placeholders="false" />
    HTML;

    public const string LIMIT = <<<'HTML'
    <x-key-value :limit="3" />
    HTML;

    public const string STATIC = <<<'HTML'
    <x-key-value static />
    HTML;

    public const string DELETE = <<<'HTML'
    <x-key-value deletable />
    HTML;

    public const string DELETE_METHOD = <<<'HTML'
    <x-key-value deletable delete-method="delete" />
    HTML;

    public const string DELETE_METHOD_PHP = <<<'HTML'
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

    public const string DELETE_ICON = <<<'HTML'
    <x-key-value icon="x-mark" deletable delete-method="delete" />
    HTML;

    public const string SLOTS = <<<'HTML'
    <x-key-value>
        <x-slot:header>
            Header Slot
        </x-slot:header>
    </x-key-value>
    HTML;

    public const string EVENTS = <<<'HTML'
    <!-- $event.detail.rows: will contain the rows -->

    <x-key-value x-on:add="alert('Added')" x-on:remove="alert('Removed')" />
    HTML;

    public const string COMPACT = <<<'HTML'
    <x-key-value wire:model="metadata" compact />
    HTML;

    public const string COLOR = <<<'HTML'
    <x-key-value wire:model="metadata" color="green" />
    HTML;

    public const string COLORLESS = <<<'HTML'
    <x-key-value wire:model="metadata" colorless />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->keyValue()
        ->block('block', 'classes');
    HTML;
}
