<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;

new class extends Component {
    use Interactions;

    public function success(): void
    {
        $this->dialog()->success('Success', 'This is a success message.')->send();
    }

    public function error(): void
    {
        $this->dialog()->error('Error', 'This is an error message.')->send();
    }

    public function warning(): void
    {
        $this->dialog()->warning('Warning', 'This is a warning message.')->send();
    }

    public function info(): void
    {
        $this->dialog()->info('Info', 'This is an info message.')->send();
    }
} ?>

<div class="flex flex-col space-y-2 md:space-x-2 md:space-y-0 md:flex-row">
    <x-button color="green" wire:click="success">Success</x-button>
    <x-button color="red" wire:click="error">Error</x-button>
    <x-button color="yellow" wire:click="warning">Warning</x-button>
    <x-button color="blue" wire:click="info">Info</x-button>
</div>
