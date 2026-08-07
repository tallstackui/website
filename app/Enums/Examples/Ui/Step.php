<?php

namespace App\Enums\Examples\Ui;

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
            navigate-previous>
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
            navigate-previous>
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

    public const string HELPERS_VARIATIONS = <<<'HTML'
    {{-- default: individual bordered buttons --}}
    <x-step selected="2" helpers navigate-previous>
        <x-step.items step="1" title="Starting" description="default">Step one...</x-step.items>
        <x-step.items step="2" title="Advancing" description="default">Step two...</x-step.items>
        <x-step.items step="3" title="Finishing" description="default">Step three... <b>finished!</b></x-step.items>
    </x-step>

    {{-- minimal: the same layout with borderless text buttons --}}
    <x-step selected="2" helpers="minimal" navigate-previous>...</x-step>

    {{-- compact: a grouped shell with icon-only buttons and a current/total indicator --}}
    <x-step selected="2" helpers="compact" navigate-previous>...</x-step>

    {{-- A value containing a dot is treated as a view path --}}
    <x-step selected="2" helpers="app.steps.custom">...</x-step>
    HTML;

    public const string HELPERS_CONFIGURATION = <<<'PHP'
    // config/tallstackui.php

    'step' => [
        Components\Step\Main::class,
        [
            'helpers' => 'compact',
        ],
    ],
    PHP;

    public const string NAVIGATION_SLOTS = <<<'HTML'
    <x-step selected="1" helpers>
        <x-step.items step="1" title="Account" description="Step One">Step one...</x-step.items>
        <x-step.items step="2" title="Review" description="Step Two">Step two...</x-step.items>
        <x-slot:previous>
            <x-button color="secondary" outline icon="arrow-left" x-on:click="previous()">Back</x-button>
        </x-slot:previous>
        <x-slot:next>
            <x-button icon="arrow-right" position="right" x-on:click="next()">Continue</x-button>
        </x-slot:next>
    </x-step>
    HTML;

    public const string NAVIGATION_GUARD = <<<'HTML'
    <x-slot:next>
        <x-button x-on:click="if (valid()) next()">Continue</x-button>
    </x-slot:next>
    HTML;

    public const string SKELETON = <<<'HTML'
    <x-step skeleton />
    <x-step skeleton="4" circles />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->step()
        ->block('block', 'classes');
    HTML;
}
