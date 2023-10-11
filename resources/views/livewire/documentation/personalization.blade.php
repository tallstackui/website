<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $component;

    public string $name = '';

    public bool $modal = false;

    public ?array $blocks = null;

    public ?array $original = null;

    public function mount(): void
    {
        $this->name = str($this->component)->replace('.', ' ')->title()->value();
    }

    public function updatingModal($value): void
    {
        if (!$value) {
            $this->blocks = null;
            $this->original = null;
            return;
        }

        $components = config()->get('tallstackui.components');
        $this->blocks = app($components[$this->component], ['ignoreValidations' => true])->customization();
    }

    public function content(string $block, string $class): void
    {
        $this->original['block'] = $block;
        $this->original['class'] = $class;
    }
} ?>

<div>
{{--    TODO: add the name that needs to be used to personalize --}}
    <x-modal wire>
        <x-warning class="mb-4">
            This content is part of <a href="{{ route('documentation.personalization.concept') }}" class="underline">TallStackUi personalization.</a>
        </x-warning>
        <x-slot:title>
            <div class="flex items-center gap-2">
                {{ $name }}, Personalization Blocks
                <x-tooltip text="Click on the block to check the original class."
                           position="bottom"
                           color="pink"
                           outline
                />
            </div>
        </x-slot:title>
        @if ($blocks)
            <div class="px-2 sm:px-0">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        @foreach ($blocks as $name => $class)
                            <x-button wire:click="$call('content', '{{ $name }}', '{{ $class }}')"
                                      :text="$name"
                                      color="pink"
                                      xs
                            />
                        @endforeach
                    </div>
                </div>
                <div class="mt-2 space-y-2">
                    @if ($original !== null)
                        <p>Name: <x-badge :text="$original['block']" color="pink" outline /></p>
                        <p>Original Content:</p>
                        <div class="text-[#C3E88D] overflow-auto custom-scrollbar rounded-lg bg-[#292D3E] p-4 my-2">
                            {{ $original['class'] }}
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </x-modal>
    <x-button.circle wire:click="$toggle('modal')"
                     icon="paint-brush"
                     color="pink"
                     sm
    />
</div>
