<?php

use Livewire\Component;

new class extends Component {
    public float $value = 1000.50;
};

?>

<div>
    <div class="space-y-2">
        <x-currency label="Mutating" wire:model.live="value" mutate />
        <x-badge>Value Binded: {{ $value }}</x-badge>
    </div>
</div>
