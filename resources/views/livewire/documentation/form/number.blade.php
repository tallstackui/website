<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    use Interactions;

    public int $model = 0;
    public int $quantity = 1;
} ?>

<div>
    @if ($model === 0)
        <x-number wire:model.live="quantity" />
    @elseif ($model === 1)
        <x-number label="Quantity" hint="Select the quantity of items" min="1" max="10" wire:model.live="quantity" />
    @elseif ($model === 2)
        <x-number min="1" max="10" wire:model.live="quantity" />
    @elseif ($model === 3)
        <x-number delay="2" min="1" max="10" wire:model.live="quantity" />
    @endif
</div>
