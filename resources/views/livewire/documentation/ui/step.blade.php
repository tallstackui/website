<?php

use function Livewire\Volt\{state};

state('step', 1);
state(live: false);

?>

<div>
    @if ($live)
        <x-step wire:model.live="step" helpers previous>
            <x-step.items step="1"
                          title="Starting"
                          description="Step One">
                Step one...
            </x-step.items>
            <x-step.items step="2"
                          title="Advancing"
                          description="Step Two">
                Step two...
            </x-step.items>
            <x-step.items step="3"
                          title="Finishing"
                          description="Step Three">
                Step three... <b>finished!</b>
            </x-step.items>
        </x-step>
    @else
        <x-step wire:model="step" helpers previous>
            <x-step.items step="1"
                          title="Starting"
                          description="Step One">
                Step one...
            </x-step.items>
            <x-step.items step="2"
                          title="Advancing"
                          description="Step Two">
                Step two...
            </x-step.items>
            <x-step.items step="3"
                          title="Finishing"
                          description="Step Three">
                Step three... <b>finished!</b>
            </x-step.items>
        </x-step>
    @endif

    @if ($live)
        <div class="flex flex-col gap-y-4">
            <p class="mt-4 font-semibold text-pink-500">Selected: <u>{{ $step }}</u></p>
        </div>
    @else
        <x-button class="mt-2" wire:click="$set('step', '3')">Change to Step 3</x-button>
    @endif
</div>
