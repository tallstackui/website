<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $code = "12345";
} ?>

<div>
    <x-pin length="5" wire:model="code" clear />
</div>
