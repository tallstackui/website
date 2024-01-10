<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    use Interactions;

    public function confirm(): void
    {
        $this->dialog()
            ->question('Warning!', 'Are you sure?')
            ->confirm('Confirm', 'confirmed', 'Confirmed Successfully')
            ->cancel('Cancel', 'cancelled', 'Cancelled Successfully')
            ->send();
    }

    public function confirmed(string $message): void
    {
        $this->dialog()->success('Success', $message)->send();
    }

    public function cancelled(string $message): void
    {
        $this->dialog()->error('Cancelled', $message)->send();
    }
} ?>

<div>
    <x-button color="red" wire:click="confirm">Confirm</x-button>
</div>
