<?php

use function Livewire\Volt\{state};

$tallstackui = state('tallstackui', false);

?>

<div>
    <x-modal title="TallStackUi" wire="tallstackui">
        TallStackUi
    </x-modal>
    <x-button wire:click="$toggle('tallstackui')">
        Open Modal
    </x-button>
</div>
