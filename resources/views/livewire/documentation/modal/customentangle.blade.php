<?php

use Livewire\Component;

return new class extends Component {
    public bool $tallstackui = false;
};

?>

<div>
    <x-modal title="TallStackUI" wire="tallstackui">
        TallStackUI
    </x-modal>
    <x-button wire:click="$toggle('tallstackui')">
        Open Modal
    </x-button>
</div>
