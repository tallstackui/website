<?php

use Livewire\Component;

return new class extends Component {
    public bool $tallstackui = false;
};

?>

<div>
    <x-slide title="TallStackUI" wire="tallstackui">
        TallStackUI
    </x-slide>
    <x-button wire:click="$toggle('tallstackui')">
        Open Slide
    </x-button>
</div>
