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

        $this->dialog()
            ->question('Warning!', 'Are you sure?')
            ->confirm('Confirm', 'confirmed', 'Confirmed Successfully')
            ->cancel('Cancel', 'cancelled', 'Cancelled Successfully')
            ->send();
    }

    public function confirmed(string $message): void
    {
        $this->dialog()->success('Success', $message)->send();

        $this->events = false;
    }

    public function cancelled(string $message): void
    {
        $this->dialog()->error('Cancelled', $message)->send();

        $this->events = false;
    }
} ?>

<div x-on:dialog:accepted.window="show($event.detail)"
     x-on:dialog:rejected.window="show($event.detail)"
     x-on:dialog:dismissed.window="show($event.detail)">
    <x-button color="red" wire:click="confirm">Confirm</x-button>
</div>

<script>
    show = (dialog) => {
        // This approach was used to avoid show alerts for other dialogs.
        if (dialog.component !== @js($__livewire->__id)) return;

        alert(dialog.description);
    }
</script>
