<?php

declare(strict_types=1);

use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component
{
    use Interactions;

    public function bottomLeft(): void
    {
        $this->toast()
            ->position('bottom-left')
            ->success('Foo')
            ->send();
    }

    public function bottomRight(): void
    {
        $this->toast()
            ->position('bottom-right')
            ->success('Foo')
            ->send();
    }

    public function topRight(): void
    {
        $this->toast()
            ->position('top-right')
            ->success('Foo')
            ->send();
    }

    public function topLeft(): void
    {
        $this->toast()
            ->position('top-left')
            ->success('Foo')
            ->send();
    }
};

?>

<div>
    <x-button color="green" wire:click="bottomLeft">Bottom Left</x-button>
    <x-button color="green" wire:click="bottomRight">Bottom Right</x-button>
    <x-button color="green" wire:click="topLeft">Top Left</x-button>
    <x-button color="green" wire:click="topRight">Top Right</x-button>
</div>
