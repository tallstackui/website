<?php

use function Livewire\Volt\{state};

$modal = state('modal', false);

?>

<div>
    <x-modal title="TallStackUi" wire>
        TallStackUi
    </x-modal>
    <x-button wire:click="$toggle('modal')">
        Open Modal
    </x-button>
</div>
