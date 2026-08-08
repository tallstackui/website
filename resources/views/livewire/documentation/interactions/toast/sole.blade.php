<?php

declare(strict_types=1);

use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component
{
    use Interactions;

    public function multiples(): void
    {
        $this->toast()
            ->success('One')
            ->persistent()
            ->send();

        $this->toast()
            ->success('Two')
            ->persistent()
            ->send();

        $this->toast()
            ->success('Three persistent toasts', 'Now click on "sole" button.')
            ->persistent()
            ->send();
    }

    public function sole(): void
    {
        $this->toast()
            ->sole()
            ->success('Sole!')
            ->send();
    }
};

?>

<div>
    <x-button color="green" wire:click="multiples">Display Multiple Toasts</x-button>
    <x-button color="green" wire:click="sole">Sole</x-button>
</div>
