<?php

namespace App\Enums\Examples\V3\Ui;

class Loading
{
    public const string INTERACTION = <<<'HTML'
    <x-loading wire:loading.delay.longest wire:target="save" /> {{-- [tl! remove] --}}

    <x-loading delay="longest" loading="save" /> {{-- [tl! add] --}}
    HTML;

    public const string USAGE = <<<'HTML'
    <!-- resources/views/livewire/post.blade.php -->

    <div>
        <x-loading /> {{-- [tl! highlight] --}}

        <form wire:submit="save">
            <input type="text" wire:model="title">

            <input type="text" wire:model="content">

            <button type="submit">Save</button>
        </form>
    </div>
    HTML;

    public const string BASIC = <<<'HTML'
    <x-loading />
    HTML;

    public const string TEXT = <<<'HTML'
    <x-loading>
        <div class="flex items-center text-primary-500 dark:text-white">
            <x-icon name="arrow-path" class="mr-2 h-10 w-10 animate-spin" />
            Loading ...
        </div>
    </x-loading>
    HTML;

    public const string TARGET_DELAY = <<<'HTML'
    <!-- You can specify the target of the delay (method or property) -->

    <!-- You can use all the Livewire delay options: shortest, shorter, short, long, longer, longest -->

    <x-loading loading="save" delay="longest" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->loading()
        ->block('block', 'classes');
    HTML;
}
