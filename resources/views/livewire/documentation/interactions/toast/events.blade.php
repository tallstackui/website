<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    use Interactions;

    public function confirm(): void
    {
        $this->toast()->confirm('Warning!', 'Are you sure?', [
            'confirm' => [
                'text' => 'Confirm',
                'method' => 'confirmed',
                'params' => 'Confirmed Successfully'
            ],
            'cancel' => [
                'text' => 'Cancel',
                'method' => 'cancelled',
                'params' => 'Cancelled Successfully'
            ]
        ]);
    }

    public function confirmed(string $message): void
    {
        $this->toast()->success('Success', $message);
    }

    public function cancelled(string $message): void
    {
        $this->toast()->error('Cancelled', $message);
    }
} ?>

<div x-on:toast:accepted.window="alert($event.detail.description)"
     x-on:toast:rejected.window="alert($event.detail.description)"
     x-on:toast:timeout.window="alert($event.detail.description)">
    <x-button color="red" wire:click="confirm">Confirm</x-button>
</div>
