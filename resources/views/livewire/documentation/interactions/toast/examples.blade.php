<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;

new class extends Component {
    use Interactions;

    public function success(): void
    {
        $this->toast()->success('Success', 'This is a success message.');
    }

    public function error(): void
    {
        $this->toast()->error('Error', 'This is an error message.');
    }

    public function warning(): void
    {
        $this->toast()->warning('Warning', 'This is a warning message.');
    }

    public function info(): void
    {
        $this->toast()->info('Info', 'This is an info message.');
    }
} ?>

<div class="flex flex-col space-y-2 md:space-x-2 md:space-y-0 md:flex-row">
    <x-button color="green" wire:click="success">Success</x-button>
    <x-button color="red" wire:click="error">Error</x-button>
    <x-button color="yellow" wire:click="warning">Warning</x-button>
    <x-button color="blue" wire:click="info">Info</x-button>
</div>
