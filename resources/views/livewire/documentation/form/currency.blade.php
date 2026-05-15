<?php

use Livewire\Component;

new class extends Component {
    public ?string $defaultValue = null;

    public ?string $mutateValue = null;

    public ?string $decimalValue = null;
};

?>

<div>
    <div class="grid gap-4 md:grid-cols-3">
        <div class="space-y-2">
            <x-currency label="Default" hint="No mutate / decimal" wire:model.live="defaultValue" />
            <x-badge color="gray">Bound: "{{ $defaultValue }}"</x-badge>
        </div>
        <div class="space-y-2">
            <x-currency label="Mutate" hint="Formatted display string" wire:model.live="mutateValue" mutate />
            <x-badge color="amber">Bound: "{{ $mutateValue }}"</x-badge>
        </div>
        <div class="space-y-2">
            <x-currency label="Decimal" hint="Parsed decimal string" wire:model.live="decimalValue" decimal />
            <x-badge color="emerald">Bound: "{{ $decimalValue }}"</x-badge>
            @if (! blank($decimalValue))
                <x-badge color="emerald" light>(float) → {{ (float) $decimalValue }}</x-badge>
            @endif
        </div>
    </div>
</div>
