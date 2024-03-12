<?php

namespace App\Enums\Examples\Ui;

class Step
{
    public const BASIC = <<<'HTML'
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

    public const TITLE_DESCRIPTION = <<<'HTML'
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

    public const FINAL_STEP = <<<'HTML'
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

    public const HELPERS = <<<'HTML'
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

    public const NAVIGATE_PREVIOUS = <<<'HTML'
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

    public const STYLES = <<<'HTML'
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

    public const SLOT = <<<'HTML'
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

    public const EVENTS = <<<'HTML'
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

    public const WIREABLE = <<<'HTML'
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

    public const LIVE_WIREABLE = <<<'HTML'
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

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->step()
        ->block('block', 'classes');
    HTML;
}
