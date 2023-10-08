<?php

namespace App\Enums\Examples\Ui;

class Select
{
    public const BASIC = <<<'HTML'
    <x-select :options="[1,2,3]" />
    HTML;

    public const BASIC_LABEL_HINT = <<<'HTML'
    <x-select label="Select One Option"
              hint="You can choose 1, 2 or 3"
              :options="[1,2,3]"
    />
    HTML;

    public const BASIC_ADVANCED = <<<'HTML'
    <x-select :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value" />
    HTML;

    public const STYLED = <<<'HTML'
    <x-select.styled wire:model="value" :options="[1,2,3]" />
    HTML;

    public const STYLED_LABEL_HINT = <<<'HTML'
    <x-select.styled label="Select One Option"
                     hint="You can choose 1, 2 or 3"
                     wire:model="value"
                     :options="[1,2,3]"
    />
    HTML;

    public const STYLED_ADVANCED = <<<'HTML'
    <x-select wire:model="value" :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value" />
    HTML;

    public const STYLED_MULTIPLE = <<<'HTML'
    <!-- The Livewire property to bind must be an array -->

    <x-select.styled wire:model="options" :options="[1,2,3,4,5,6]" multiple />
    HTML;

    public const STYLED_SEARCHABLE = <<<'HTML'
    <x-select wire:model="value" :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value" searchable />
    HTML;

    public const SEARCHABLE = <<<'HTML'
    <x-select.searchable request="https://jsonplaceholder.typicode.com/users"
                         select="label:name|value:id"
                         wire:model="value"
    />
    HTML;

    public const SEARCHABLE_LABEL_HINT = <<<'HTML'
    <x-select.searchable request="https://jsonplaceholder.typicode.com/users"
                         select="label:name|value:id"
                         label="Select One User"
                         hint="You can choose whoever you want"
                         wire:model="value"
    />
    HTML;

    public const SEARCHABLE_MULTIPLE = <<<'HTML'
    <!-- The Livewire property to bind must be an array -->

    <x-select.searchable request="https://jsonplaceholder.typicode.com/users"
                         select="label:name|value:id"
                         wire:model="options"
                         multiple
    />
    HTML;

    public const SEARCHABLE_ADVANCED = <<<'HTML'
    <x-select.searchable :request="[
                            'url' => 'https://jsonplaceholder.typicode.com/users',
                            'method' => 'get',
                            'params' => [
                                'library' => 'TallStackUi',
                            ],
                         ]"
                         select="label:name|value:id"
                         wire:model="value"
    />
    HTML;
}
