<?php

namespace App\Enums\Examples\Ui;

class Button
{
    public const BASIC = <<<'HTML'
    <x-button>TallStackUi</x-button>

    <!-- or -->

    <x-button text="TallStackUi" />
    HTML;

    public const A = <<<'HTML'
    <x-button href="https://google.com.br" target="_blank">TallStackUi</x-button>
    HTML;

    public const SQUARE = <<<'HTML'
    <x-button square>TallStackUi</x-button>
    HTML;

    public const ROUND = <<<'HTML'
    <x-button round>TallStackUi</x-button>
    HTML;

    public const ICONS = <<<'HTML'
    <x-button icon="cog" position="left">TallStackUi</x-button>
    <x-button icon="users" position="right">TallStackUi</x-button>
    HTML;

    public const SIZES = <<<'HTML'
    <x-button xs>TallStackUi</x-button>
    <x-button sm>TallStackUi</x-button>
    <x-button md>TallStackUi</x-button>
    <x-button lg>TallStackUi</x-button>
    HTML;

    public const LOADINGS = <<<'HTML'
    <x-button wire:click="target" loading>
        Basic
    </x-button>

    <!-- You can specify the target of the delay (method or property) -->

    <x-button wire:click="target" loading="target">
        Loading Target
    </x-button>

    <!-- You can use all the Livewire delay options: shortest, shorter, short, long, longer, longest -->

    <x-button wire:click="delay" loading="target" delay="longest">
        Delay Control
    </x-button>
    HTML;

    public const COLORS = <<<'HTML'
    <x-button text="Primary" />
    <x-button text="Secondary" color="secondary" />
    <x-button text="Slate" color="slate" />
    <x-button text="Gray" color="gray" />
    <x-button text="Zinc" color="zinc" />
    <x-button text="Neutral" color="neutral" />
    <x-button text="Stone" color="stone" />
    <x-button text="Red" color="red" />
    <x-button text="Orange" color="orange" />
    <x-button text="Amber" color="amber" />
    <x-button text="Yellow" color="yellow" />
    <x-button text="Lime" color="lime" />
    <x-button text="Green" color="green" />
    <x-button text="Emerald" color="emerald" />
    <x-button text="Teal" color="teal" />
    <x-button text="Cyan" color="cyan" />
    <x-button text="Sky" color="sky" />
    <x-button text="Blue" color="blue" />
    <x-button text="Indigo" color="indigo" />
    <x-button text="Violet" color="violet" />
    <x-button text="Purple" color="purple" />
    <x-button text="Fuchsia" color="fuchsia" />
    <x-button text="Pink" color="pink" />
    <x-button text="Rose" color="rose" />
    <x-button text="Black" color="black" />
    <x-button text="White" color="white" />
    HTML;

    public const OUTLINES = <<<'HTML'
    <x-button text="Primary" outline />
    <x-button text="Secondary" color="secondary" outline />
    <x-button text="Slate" color="slate" outline />
    <x-button text="Gray" color="gray" outline />
    <x-button text="Zinc" color="zinc" outline />
    <x-button text="Neutral" color="neutral" outline />
    <x-button text="Stone" color="stone" outline />
    <x-button text="Red" color="red" outline />
    <x-button text="Orange" color="orange" outline />
    <x-button text="Amber" color="amber" outline />
    <x-button text="Yellow" color="yellow" outline />
    <x-button text="Lime" color="lime" outline />
    <x-button text="Green" color="green" outline />
    <x-button text="Emerald" color="emerald" outline />
    <x-button text="Teal" color="teal" outline />
    <x-button text="Cyan" color="cyan" outline />
    <x-button text="Sky" color="sky" outline />
    <x-button text="Blue" color="blue" outline />
    <x-button text="Indigo" color="indigo" outline />
    <x-button text="Violet" color="violet" outline />
    <x-button text="Purple" color="purple" outline />
    <x-button text="Fuchsia" color="fuchsia" outline />
    <x-button text="Pink" color="pink" outline />
    <x-button text="Rose" color="rose" outline />
    <x-button text="Black" color="black" outline />
    <x-button text="White" color="white" outline />
    HTML;

    public const CIRCLE = <<<'HTML'
    <x-button.circle>TS</x-button.circle>

    <!-- or -->

    <x-button.circle text="TS" />
    HTML;

    public const CIRCLE_A = <<<'HTML'
    <x-button.circle href="https://google.com.br" target="_blank">TS</x-button.circle>
    HTML;

    public const CIRCLE_ICONS = <<<'HTML'
    <x-button.circle icon="pencil" />
    HTML;

    public const CIRCLE_LOADINGS = <<<'HTML'
    <x-button.circle wire:click="basic" icon="pencil" loading />

    <!-- You can specify the target of the delay (method or property) -->

    <x-button.circle wire:click="target"
                     icon="pencil"
                     loading="target" />

     <!-- You can use all the Livewire delay options: shortest, shorter, short, long, longer, longest -->

    <x-button.circle wire:click="delay"
                     icon="pencil"
                     loading="target"
                     delay="longest" />
    HTML;

    public const CIRCLE_COLORS = <<<'HTML'
    <x-button.circle text="TS" />
    <x-button.circle text="TS" color="secondary" />
    <x-button.circle text="TS" color="slate" />
    <x-button.circle text="TS" color="gray" />
    <x-button.circle text="TS" color="zinc" />
    <x-button.circle text="TS" color="neutral" />
    <x-button.circle text="TS" color="stone" />
    <x-button.circle text="TS" color="red" />
    <x-button.circle text="TS" color="orange" />
    <x-button.circle text="TS" color="amber" />
    <x-button.circle text="TS" color="yellow" />
    <x-button.circle text="TS" color="lime" />
    <x-button.circle text="TS" color="green" />
    <x-button.circle text="TS" color="emerald" />
    <x-button.circle text="TS" color="teal" />
    <x-button.circle text="TS" color="cyan" />
    <x-button.circle text="TS" color="sky" />
    <x-button.circle text="TS" color="blue" />
    <x-button.circle text="TS" color="indigo" />
    <x-button.circle text="TS" color="violet" />
    <x-button.circle text="TS" color="purple" />
    <x-button.circle text="TS" color="fuchsia" />
    <x-button.circle text="TS" color="pink" />
    <x-button.circle text="TS" color="rose" />
    <x-button.circle text="TS" color="black" />
    <x-button.circle text="TS" color="white" />
    HTML;

    public const CIRCLE_OUTLINES = <<<'HTML'
    <x-button.circle text="TS" outline />
    <x-button.circle text="TS" color="secondary" outline />
    <x-button.circle text="TS" color="slate" outline />
    <x-button.circle text="TS" color="gray" outline />
    <x-button.circle text="TS" color="zinc" outline />
    <x-button.circle text="TS" color="neutral" outline />
    <x-button.circle text="TS" color="stone" outline />
    <x-button.circle text="TS" color="red" outline />
    <x-button.circle text="TS" color="orange" outline />
    <x-button.circle text="TS" color="amber" outline />
    <x-button.circle text="TS" color="yellow" outline />
    <x-button.circle text="TS" color="lime" outline />
    <x-button.circle text="TS" color="green" outline />
    <x-button.circle text="TS" color="emerald" outline />
    <x-button.circle text="TS" color="teal" outline />
    <x-button.circle text="TS" color="cyan" outline />
    <x-button.circle text="TS" color="sky" outline />
    <x-button.circle text="TS" color="blue" outline />
    <x-button.circle text="TS" color="indigo" outline />
    <x-button.circle text="TS" color="violet" outline />
    <x-button.circle text="TS" color="purple" outline />
    <x-button.circle text="TS" color="fuchsia" outline />
    <x-button.circle text="TS" color="pink" outline />
    <x-button.circle text="TS" color="rose" outline />
    <x-button.circle text="TS" color="black" outline />
    <x-button.circle text="TS" color="white" outline />
    HTML;
}
