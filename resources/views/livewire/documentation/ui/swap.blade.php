<?php

declare(strict_types=1);

use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component
{
    use Interactions;

    public int $mode = 1;

    public ?string $fruit = null;

    public ?int $size = null;

    public function fruitChanged(string $value): void
    {
        $this->toast()->success('Swapped', "The value is now: {$value}")->send();
    }
};

?>

<div>
    @if ($mode === 1)
        <div class="flex flex-col gap-2">
            <x-swap wire:model.live="fruit" :options="['Apple', 'Banana', 'Cherry']" />
            <span class="dark:text-dark-400 text-sm text-gray-500"> Bound value: <b>{{ $fruit ?? 'null' }}</b> </span>
        </div>
    @elseif ($mode === 2)
        <div class="flex flex-col gap-2">
            <x-swap
                wire:model.live="size"
                label="Size"
                hint="The model carries the value, never the index"
                :options="[
                        ['name' => 'Small', 'id' => 1],
                        ['name' => 'Medium', 'id' => 2],
                        ['name' => 'Large', 'id' => 3],
                    ]"
                select="label:name|value:id"
            />
            <span class="dark:text-dark-400 text-sm text-gray-500"> Bound value: <b>{{ $size ?? 'null' }}</b> </span>
        </div>
    @elseif ($mode === 3)
        <x-swap wire:model="fruit" wire:change="fruitChanged" :options="['Apple', 'Banana', 'Cherry']" />
    @endif
</div>
