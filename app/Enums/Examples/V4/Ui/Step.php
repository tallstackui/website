<?php

namespace App\Enums\Examples\V4\Ui;

class Step
{
    public const string BASIC = <<<'HTML'
    <x-step selected="1" navigate>
        <x-step.items step="1">
            Step one...
        </x-step.items>
        <x-step.items step="2">
            Step two...
        </x-step.items>
        <x-step.items step="3">
            Step three... <b>finished!</b>
        </x-step.items>
    </x-step>
    HTML;

    public const string TITLE_DESCRIPTION = <<<'HTML'
    <x-step selected="1" navigate>
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
    HTML;

    public const string FINAL_STEP = <<<'HTML'
    <x-step selected="1" navigate>
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
                      completed {{-- [tl! highlight] --}}
                      title="Finishing"
                      description="Step Three">
            Step three... <b>finished!</b>
        </x-step.items>
    </x-step>
    HTML;

    public const string HELPERS = <<<'HTML'
    <x-step selected="1" helpers>
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
    HTML;

    public const string NAVIGATE_PREVIOUS = <<<'HTML'
    <x-step selected="1" helpers navigate-previous>
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
    HTML;

    public const string STYLES = <<<'HTML'
    <!-- Circles -->
    <x-step selected="1"
            circles {{-- [tl! highlight] --}}
            helpers>
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

    <!-- Panels -->
    <x-step selected="1"
            panels {{-- [tl! highlight] --}}
            helpers>
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
    HTML;

    public const string SLOT = <<<'HTML'
    <x-step selected="1" helpers>
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
        <x-slot:finish>
            TallStackUI 🚀
        </x-slot:finish>
    </x-step>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-step selected="1"
            helpers
            x-on:change="alert(`Changed: ${$event.detail.step}`)"
            x-on:finish="alert(`Finished: ${$event.detail.step}`)">
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
                      description="Step Three"
                      completed>
            Step three... <b>finished!</b>
        </x-step.items>
    </x-step>
    HTML;

    public const string WIREABLE = <<<'HTML'
    <!--  Livewire string property: $step - initial value: "1" -->

    <x-step wire:model="step"
            helpers
            previous>
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
    HTML;

    public const string LIVE_WIREABLE = <<<'HTML'
    <!--  Livewire string property: $step - initial value: "1" -->

    <x-step wire:model.live="step"
            helpers
            previous>
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
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->step()
        ->block('block', 'classes');
    HTML;
}
