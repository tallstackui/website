<?php

use function Livewire\Volt\{state};

$tallstackui = state('tallstackui', false);

?>

<div>
    <x-slide title="TallStackUi" wire="tallstackui">
        TallStackUi
    </x-slide>
    <x-button wire:click="$toggle('tallstackui')">
        Open Slide
    </x-button>
</div>
