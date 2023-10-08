<?php

use function Livewire\Volt\{state};

$password = state(password: 'TallStackUi');

$save = function () {
    $this->validate([
        'password' => 'max:3',
    ]);
};

?>

<div class="space-y-2">
    <x-password label="Password"
             hint="Insert your best password"
             wire:model="password"
    />

    <x-button wire:click="save">Save</x-button>
</div>
