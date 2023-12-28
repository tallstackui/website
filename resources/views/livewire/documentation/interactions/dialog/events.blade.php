<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    use Interactions;

    public bool $events = false;

    public function confirm(): void
    {
        $this->events = true;

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

        $this->events = false;
    }

    public function cancelled(string $message): void
    {
        $this->dialog()->error('Cancelled', $message);

        $this->events = false;
    }
} ?>

<div x-on:dialog:accepted.window="show($event.detail)"
     x-on:dialog:rejected.window="show($event.detail)">
    <x-button color="red" wire:click="confirm">Confirm</x-button>
</div>

<script>
    show = (dialog) => {
        // This approach was used to avoid show alerts for other dialogs.
        if (dialog.component !== @js($__livewire->__id)) return;

        alert(dialog.description);
    }
</script>
