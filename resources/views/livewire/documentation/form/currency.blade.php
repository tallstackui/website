<?php
use function Livewire\Volt\{state};

state(value: 1000.50);
?>

<div>
    <div class="space-y-2">
        <x-currency label="Mutating" wire:model.live="value" mutate />
        <x-badge>Value: {{ $value }}</x-badge>
    </div>
</div>
