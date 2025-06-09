<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;

new class extends Component {
    use Interactions;

    public function multiples(): void
    {
        $this->toast()
            ->success('One')
            ->send();

        $this->toast()
            ->success('Two')
            ->send();

        $this->toast()
            ->success('Three')
            ->send();

        $this->toast()
            ->success('Now click on "sole" button.')
            ->send();
    }

    public function sole(): void
    {
        $this->toast()
            ->sole()
            ->success('Sole!')
            ->send();
    }
} ?>

<div>
    <x-button color="green" wire:click="multiples">Display Multiple Toasts</x-button>
    <x-button color="green" wire:click="sole">Sole</x-button>
</div>
