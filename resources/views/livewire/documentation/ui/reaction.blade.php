<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;

new class extends Component {
    use Interactions;

    public int $model = 1;

    public int $quantity = 12;

    public function react(string $reaction): void
    {
        $this->toast()
            ->success('Success', 'You reacted with ' . $reaction)
            ->send();

        $this->quantity++;
    }

    public function wow(string $reaction): void
    {
        $this->toast()
            ->success('🚀🚀🚀', 'TallStackUI is the best UI library!')
            ->send();
    }
} ?>

<div>
    @if ($model === 1)
        <x-reaction />
    @elseif ($model === 2)
        <x-reaction animated />
    @elseif ($model === 3)
        <x-reaction position="top" />
    @elseif ($model === 4)
        <x-reaction wire:model="quantity" :$quantity />
    @elseif ($model === 5)
        <x-reaction :only="['thumbs-up', 'thumbs-down', 'heart']" />
    @elseif ($model === 6)
        <x-reaction react-method="wow">
            React to the TallStackUI
        </x-reaction>
    @elseif ($model === 7)
        <x-reaction x-on:react="alert(`Reacted: ${JSON.stringify($event.detail.reaction)}`)" />
    @endif
</div>
