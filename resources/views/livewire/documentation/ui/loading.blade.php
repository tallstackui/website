<?php

declare(strict_types=1);

use Livewire\Component;

new class extends Component {
    public int $model = 0;

    public function save(int $delay): void
    {
        sleep($delay);
    }
};

?>

<div>
    @if ($model === 0)
        <x-loading />

        <x-button wire:click="save(3)">Show Loading</x-button>
    @elseif ($model === 1)
        <x-loading>
            <div class="text-primary-500 flex items-center dark:text-white">
                <x-icon name="arrow-path" class="mr-2 h-10 w-10 animate-spin" />
                Loading ...
            </div>
        </x-loading>

        <x-button wire:click="save(3)">Show Loading</x-button>
    @elseif ($model === 2)
        <x-loading loading="save" delay="longest" />

        <x-button wire:click="save(6)">Show Loading (Click and wait!)</x-button>
    @elseif ($model === 3)
        <x-loading text="Waiting..." indicator="spinner.typing" />

        <x-button wire:click="save(3)">Show Loading</x-button>
    @endif
</div>
