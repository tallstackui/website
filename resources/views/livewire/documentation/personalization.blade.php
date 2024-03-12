<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $component;

    public string $id = '';

    public string $title = '';

    public bool $modal = false;

    public ?array $blocks = null;

    public ?array $original = null;

    public ?string $personalization = null;

    public function mount(): void
    {
        $str = str($this->component);

        $this->title = $str->replace('.', ' ')
            ->title()
            ->value();

        $this->id = $str->replace('.', '')
            ->trim()
            ->value();

        $this->id .= '-'.uniqid();
    }

    public function open(): void
    {
        $this->original = null;

        $components = config()->get('tallstackui.components');
        $this->blocks = app($components[$this->component], ['ignoreValidations' => true])->personalization();
    }

    public function content(string $block, string $class): void
    {
        $this->original['block'] = $block;
        $this->original['class'] = $class;
    }
} ?>

<div>
    <x-modal id="{{ $id }}">
        <x-warning class="mb-4">
            This content is part of <a href="{{ route('documentation.personalization.concept') }}" class="underline">TallStackUI personalization.</a>
        </x-warning>
        <x-slot:title>
            <div class="flex items-center justify-start gap-2">
                {{ $title }}, Personalization Blocks
                <x-tooltip text="Click on the block to check the original class."
                           position="bottom"
                           color="pink"
                           outline
                />
            </div>
        </x-slot:title>
        @if ($personalization)
            <div wire:ignore>
                <p class="text-base font-medium">Example:</p>
                <x-code :contents="$personalization" personalization unpadding/>
            </div>
            <p class="pb-4 text-sm underline">The soft personalization should be done in <x-block>boot</x-block> method of service providers.</p>
        @endif
        @if ($blocks)
            <div class="px-2 sm:px-0">
                <p class="text-base font-medium">Blocks:</p>
                <div class="flex items-center justify-start gap-1">
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
                <div class="mt-4 space-y-2">
                    @if ($original)
                        <div>
                            <x-clipboard :id="uniqid()"
                                         label="Name"
                                         :text="$original['block']" />
                        </div>
                        <p class="block text-sm font-semibold text-gray-600 dark:text-dark-400">Original Content:</p>
                        <div class="text-[#C3E88D] overflow-auto custom-scrollbar rounded-lg bg-[#292D3E] p-4">
                            {{ $original['class'] }}
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </x-modal>
    <x-button x-on:click="$modalOpen('{{ $id }}'); $wire.call('open');"
              text="Personalize: {{ $title }}"
              color="pink"
              xs/>
</div>
