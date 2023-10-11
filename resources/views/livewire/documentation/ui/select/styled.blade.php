<?php

use function Livewire\Volt\{state};

$model = state('model', 1);
$value = state('value', 1);
$options = state('options', [1,2,3]);

?>

<div>
    @if ($model === 1)
        <x-select.styled wire:model="value" :options="[1,2,3]" />
    @elseif ($model === 2)
        <x-select.styled label="Select One Option"
                         hint="You can choose 1, 2 or 3"
                         wire:model="value"
                         :options="[1,2,3]"
        />
    @elseif ($model === 3)
        <x-select.styled wire:model="options" :options="[1,2,3,4,5,6]" multiple />
    @elseif ($model === 4)
        <x-select.styled :options="[
            ['label' => 'TALL', 'value' => 1],
            ['label' => 'LIVT', 'value' => 2],
        ]" select="label:label|value:value" wire:model="value" />
    @elseif ($model === 5)
        <x-select.styled :options="[
            ['label' => 'TALL', 'value' => 1],
            ['label' => 'LIVT', 'value' => 2],
        ]" select="label:label|value:value" wire:model="value" searchable />
    @else
        <x-select.styled label="Select One Option"
                         hint="You can choose 1, 2 or 3"
                         wire:model="value"
                         searchable
                         :options="[1,2,3]">
            <x-slot:after>
                <div class="px-2 mb-2 flex justify-center items-center">
                    <span x-html="`Create user <b>${search}</b>`"></span>
                </div>
            </x-slot:after>
        </x-select.styled>
    @endif
</div>
