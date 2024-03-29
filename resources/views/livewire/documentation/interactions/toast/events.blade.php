<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    use Interactions;

    public function confirm(): void
    {
        $this->toast()
            ->question('Warning!', 'Are you sure?')
            ->confirm('Confirm', 'confirmed', 'Confirmed Successfully')
            ->cancel('Cancel', 'cancelled', 'Cancelled Successfully')
            ->send();
    }

    public function confirmed(string $message): void
    {
        $this->toast()->success('Success', $message)->send();
    }

    public function cancelled(string $message): void
    {
        $this->toast()->error('Cancelled', $message)->send();
    }
} ?>

<div x-on:toast:accepted.window="show($event.detail)"
     x-on:toast:rejected.window="show($event.detail)"
     x-on:toast:timeout.window="show($event.detail)">
    <x-button color="red" wire:click="confirm">Confirm</x-button>
</div>

<script>
    show = (toast) => {
        // This approach was used to avoid show alerts for other toasts.
        if (toast.component !== @js($__livewire->__id)) return;

        alert(toast.description);
    }
</script>
