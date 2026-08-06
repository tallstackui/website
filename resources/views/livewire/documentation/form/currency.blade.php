<?php

use Livewire\Component;

new class extends Component {
    public ?string $amount = null;
};

?>

<div class="space-y-2">
    <x-currency label="Amount" hint="Type a value to see it formatted into the property" wire:model.live="amount" mutate />
    <x-input label="Livewire property" :value="$amount" readonly />
</div>
