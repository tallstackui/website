<?php

use Livewire\Volt\Component;

new class extends Component {
    public int $model = 1;
    public int $type = 1;

    public function basic(): void
    {
        sleep(1);
    }

    public function target(): void
    {
        sleep(2);
    }

    public function delay(): void
    {
        sleep(5);
    }
} ?>

<div>
    @if ($model === 1)
        @if ($type === 1)
        <x-button wire:click="basic" loading>
            Basic
        </x-button>
        @elseif ($type === 2)
            <x-button wire:click="target" loading="target">
                Loading Target
            </x-button>
        @else
            <x-button wire:click="delay" loading delay="longest">
                Delay Control
            </x-button>
        @endif
    @else
        @if ($type === 1)
            <x-button.circle wire:click="basic" icon="pencil" loading />
        @elseif ($type === 2)
            <x-button.circle wire:click="target" icon="pencil" loading="target" />
        @else
            <x-button.circle wire:click="delay" icon="pencil" loading delay="longest" />
        @endif
    @endif
</div>
