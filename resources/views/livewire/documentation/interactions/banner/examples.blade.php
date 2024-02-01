<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;

new class extends Component {
    use Interactions;

    public function success(): void
    {
        $this->banner()
            ->close()
            ->success('This is a banner dispatched through Livewire. Will disappear in 5 seconds.')
            ->leave(5)
            ->send();
    }
} ?>

<div class="flex flex-col space-y-2 md:space-x-2 md:space-y-0 md:flex-row">
    <x-button color="green" wire:click="success">Send</x-button>
</div>
