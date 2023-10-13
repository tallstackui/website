<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    use Interactions;

    public function confirm(): void
    {
        $this->dialog()->confirm('Warning!', 'Are you sure?', [
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
        $this->dialog()->success('Success', $message);
    }

    public function cancelled(string $message): void
    {
        $this->dialog()->error('Cancelled', $message);
    }
} ?>

<div>
    <x-button color="secondary" wire:click="confirm">Confirm</x-button>
</div>
