<?php

declare(strict_types=1);

use Livewire\Component;

return new class extends Component {
    public bool $modal = false;
};

?>

<div>
    <x-modal title="TallStackUI" wire>TallStackUI</x-modal>
    <x-button wire:click="$toggle('modal')">Open Modal</x-button>
</div>
