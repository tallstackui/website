<?php

declare(strict_types=1);

use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component {
    use Interactions;

    public function bottomLeft(): void
    {
        $this->toast()
            ->position("bottom-left")
            ->success("Foo")
            ->send();
    }

    public function bottomRight(): void
    {
        $this->toast()
            ->position("bottom-right")
            ->success("Foo")
            ->send();
    }

    public function bottomCenter(): void
    {
        $this->toast()
            ->position("bottom-center")
            ->success("Foo")
            ->send();
    }

    public function topRight(): void
    {
        $this->toast()
            ->position("top-right")
            ->success("Foo")
            ->send();
    }

    public function topLeft(): void
    {
        $this->toast()
            ->position("top-left")
            ->success("Foo")
            ->send();
    }

    public function topCenter(): void
    {
        $this->toast()
            ->position("top-center")
            ->success("Foo")
            ->send();
    }
};

?>

<div class="flex flex-wrap gap-2">
    <x-button color="green" wire:click="topLeft">Top Left</x-button>
    <x-button color="green" wire:click="topCenter">Top Center</x-button>
    <x-button color="green" wire:click="topRight">Top Right</x-button>
    <x-button color="green" wire:click="bottomLeft">Bottom Left</x-button>
    <x-button color="green" wire:click="bottomCenter">Bottom Center</x-button>
    <x-button color="green" wire:click="bottomRight">Bottom Right</x-button>
</div>
