<?php

declare(strict_types=1);

use Livewire\Component;

new class extends Component {
    public int $mode = 1;

    public array $price = [200, 800];

    public array $budget = [250, 750];
};

?>

<div>
    @if ($mode === 1)
        <div class="space-y-2">
            <x-range
                dual
                wire:model.live="price"
                :min="0"
                :max="1000"
                :step="10"
                label="Price range"
            />
            <p class="dark:text-dark-400 text-sm text-gray-500">
                Bound value:
                <b>{{ $price[0] }}</b>
                to
                <b>{{ $price[1] }}</b>
            </p>
        </div>
    @elseif ($mode === 2)
        <x-range
            dual
            wire:model="budget"
            :min="0"
            :max="1000"
            color="emerald"
            tooltip
        />
    @endif
</div>
