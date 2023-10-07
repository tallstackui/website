<?php

use function Livewire\Volt\{state};
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
                'event' => 'confirmed',
                'params' => 'Confirmed Successfully'
            ],
            'cancel' => [
                'text' => 'Cancel',
                'event' => 'cancelled',
                'params' => 'Cancelled Successfully'
            ]
        ]);
    }

    #[On('confirmed')]
    public function confirmed(string $message): void
    {
        $this->toast()->success('Success', $message);
    }

    #[On('cancelled')]
    public function cancelled(string $message): void
    {
        $this->toast()->error('Cancelled', $message);
    }
} ?>

<div>
    <x-button color="secondary" wire:click="confirm">Confirm</x-button>
</div>
