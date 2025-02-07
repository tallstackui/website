<?php

use Livewire\Volt\Component;

new class extends Component {
    public int $model = 0;

    public function save(int $delay): void
    {
        sleep($delay);
    }
} ?>

<div>
    @if ($model === 0)
        <x-loading />

        <x-button wire:click="save(1)">
            Show Loading
        </x-button>
    @elseif ($model === 1)
        <x-loading>
            <div class="flex items-center text-primary-500 dark:text-white">
                <x-icon name="arrow-path" class="mr-2 h-10 w-10 animate-spin" />
                Loading ...
            </div>
        </x-loading>

        <x-button wire:click="save(1)">
            Show Loading
        </x-button>
    @elseif ($model === 2)
        <x-loading loading="save" delay="longest" />

        <x-button wire:click="save(4)">
            Show Loading
        </x-button>
    @endif
</div>
