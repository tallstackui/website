<?php

use Livewire\Volt\Component as VoltComponent;
use Illuminate\View\Component as ViewComponent;

new class extends VoltComponent {
    public string $component;

    public string $id = '';

    public ?string $title = null;

    public bool $modal = false;

    public ?array $blocks = null;

    public ?array $original = null;

    public ?string $personalization = null;

    public function mount(): void
    {
        $str = str($this->component);

        $this->title ??= $str->replace('\\', ' ')
            ->title()
            ->value();

        $this->id = $str->lower()
            ->remove('\\')
            ->squish()
            ->value();

        $this->id .= '-'.uniqid();
    }

    public function open(): void
    {
        $this->original = null;

        $this->blocks = app("TallStackUi\\View\\Components\\".$this->component)->personalization();
    }

    public function content(string $block, string $class): void
    {
        $this->original['block'] = $block;
        $this->original['class'] = $class;
    }
} ?>

<div>
    <x-modal id="{{ $id }}">
        <x-slot:title>
            <p class="flex items-center justify-start gap-2">
                {{ $title }}, Personalization Blocks
            </p>
        </x-slot:title>
        @if ($personalization)
            <div wire:ignore>
                <p class="text-base font-medium">Example:</p>
                <x-code :contents="$personalization" personalization unpadding />
            </div>
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
                            <x-clipboard :id="uniqid()" label="Name" :text="$original['block']" />
                        </div>
                        <div wire:key="{{ uniqid() }}">
                            <p class="block text-sm font-semibold text-gray-600 dark:text-dark-400">Original Content:</p>
                            <x-code language="text" :contents="$original['class']" unpadding />
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
