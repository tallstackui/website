<?php

use function Livewire\Volt\{state};

$alert = state(alert: null);

$save = function () {
    $this->validate([
        'alert' => 'boolean',
    ]);
};

?>

<div class="space-y-2">
    <x-radio label="Receive Alert"
             wire:model="alert"
             disabled
    />

    <x-button wire:click="save">Save</x-button>
</div>
