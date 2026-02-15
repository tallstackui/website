<?php

use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component {
    use Interactions;

    public function success(): void
    {
        $this->toast()
            ->persistent()
            ->success('Success', 'This is a persistent toast.')
            ->send();
    }
};

?>

<div>
    <x-button color="green" wire:click="success">Show Persistent</x-button>
</div>
