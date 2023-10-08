<?php

use function Livewire\Volt\{state};

$username = state(username: 'TallStackUi');

$save = function () {
    $this->validate([
        'username' => 'max:3',
    ]);
};

?>

<div class="space-y-2">
    <x-input label="User"
             hint="Insert your username"
             icon="users"
             position="right"
             wire:model="username"
    />

    <x-button wire:click="save">Save</x-button>
</div>
