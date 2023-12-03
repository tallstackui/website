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
        <x-number label="Quantity" hint="Press the plus button to increase one by one" min="1" max="10" wire:model.live="quantity" />
    @elseif ($model === 2)
        <x-number min="1" max="10" wire:model.live="quantity" />
    @elseif ($model === 3)
        <x-number delay="1" min="1" max="10" wire:model.live="quantity" />
    @elseif ($model === 4)
        <x-number wire:model.live="quantity" chevron />
    @endif
</div>
