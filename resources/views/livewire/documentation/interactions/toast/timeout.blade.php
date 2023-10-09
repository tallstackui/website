<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;

new class extends Component {
    use Interactions;

    public function success(): void
    {
        $this->toast()
            ->timeout(seconds: 10)
            ->success('Success', 'This is a success message.');
    }
} ?>

<div>
    <x-button color="green" wire:click="success">10 seconds</x-button>
</div>
