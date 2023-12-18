<?php

use function Livewire\Volt\{state};

$tallstackui = state('tallstackui', false);

?>

<div>
    <x-slide title="TallStackUI" wire="tallstackui">
        TallStackUI
    </x-slide>
    <x-button wire:click="$toggle('tallstackui')">
        Open Slide
    </x-button>
</div>
