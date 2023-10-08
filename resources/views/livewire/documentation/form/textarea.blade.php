<?php

use function Livewire\Volt\{state};

$description = state(description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");

$save = function () {
    $this->validate([
        'description' => 'max:20',
    ]);
};

?>

<div class="space-y-2">
    <x-textarea label="Description"
                hint="Insert the post description"
                wire:model="description"
    />

    <x-button wire:click="save">Save</x-button>
</div>
