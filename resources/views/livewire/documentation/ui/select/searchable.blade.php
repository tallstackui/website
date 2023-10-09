<?php

use function Livewire\Volt\{state};

$model = state('model', 1);
$value = state('value', 1);
$options = state('options', [1,2,3]);

?>

<div>
    @if ($model === 1)
        <x-select.searchable request="https://jsonplaceholder.typicode.com/users"
                             select="label:name|value:id"
                             wire:model="value"
        />
    @elseif ($model === 2)
        <x-select.searchable request="https://jsonplaceholder.typicode.com/users"
                             select="label:name|value:id"
                             label="Select One User"
                             hint="You can choose whoever you want"
                             wire:model="value"
        />
    @elseif ($model === 3)
        <x-select.searchable request="https://jsonplaceholder.typicode.com/users"
                             select="label:name|value:id"
                             wire:model="options"
                             multiple
        />
    @elseif ($model === 4)
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
    @endif
</div>
