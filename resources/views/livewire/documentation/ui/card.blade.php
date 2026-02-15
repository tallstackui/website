<?php

use Livewire\Component;

new class extends Component {
    public function save(): void
    {
        sleep(3);
    }
};

?>

<div>
    <x-card header="Loading Effect" loading="save">
        <x-button wire:click="save">Trigger Loading</x-button>
    </x-card>
</div>
