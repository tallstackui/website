<?php

declare(strict_types=1);

use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component {
    use Interactions;

    public function stack(): void
    {
        $this->toast()
            ->stacked()
            ->info("First", "This toast is at the bottom of the pile.")
            ->send();

        $this->toast()
            ->stacked()
            ->warning("Second", "This toast sits in the middle of the pile.")
            ->send();

        $this->toast()
            ->stacked()
            ->success("Third", "This toast is at the front of the pile.")
            ->send();
    }
};

?>

<div>
    <x-button color="green" wire:click="stack">Display Stacked Toasts</x-button>
</div>
