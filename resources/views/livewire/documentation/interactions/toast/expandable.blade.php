<?php

use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component {
    use Interactions;

    public function success(): void
    {
        $this->toast()
            ->expandable()
            ->success('Success', 'When the description has more than 30 characters, the toast can be optionally expandable.')
            ->send();
    }
};

?>

<div>
    <x-button color="green" wire:click="success">Show Expandable</x-button>
</div>
