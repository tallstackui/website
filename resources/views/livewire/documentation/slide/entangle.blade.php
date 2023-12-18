<?php

use function Livewire\Volt\{state};

$slide = state('slide', false);

?>

<div>
    <x-slide title="TallStackUI" wire>
        TallStackUI
    </x-slide>
    <x-button wire:click="$toggle('slide')">
        Open Slide
    </x-button>
</div>
