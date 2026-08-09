<?php

declare(strict_types=1);

use Livewire\Component;

return new class extends Component {
    public bool $slide = false;
};

?>

<div>
    <x-slide title="TallStackUI" wire>TallStackUI</x-slide>
    <x-button wire:click="$toggle('slide')">Open Slide</x-button>
</div>
