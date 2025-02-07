<?php

use Livewire\Volt\Component;
use TallStackUi\Traits\Interactions;

new class extends Component {
    use Interactions;

    public function save(): void
    {
        $this->toast()
            ->success('Clicked!')
            ->send();
    }
} ?>

<div>
    <x-boolean :boolean="true" wire:click="save" />
</div>
