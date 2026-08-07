<?php

namespace App\Enums\Examples\Ui;

class Button
{
    public const string BASIC = <<<'HTML'
    <x-button>TallStackUi</x-button>

    <!-- or -->

    <x-button text="TallStackUi" />
    HTML;

    public const string BLOCK = <<<'HTML'
    <x-button block>TallStackUI</x-button>
    HTML;

    public const string SUBMIT = <<<'HTML'
    <x-button submit>TallStackUi</x-button>

    <!-- or -->

    <x-button text="TallStackUi" submit />
    HTML;

    public const string A = <<<'HTML'
    <x-button href="https://google.com.br" target="_blank">TallStackUi</x-button>
    HTML;

    public const string SQUARE = <<<'HTML'
    <x-button square>TallStackUi</x-button>
    HTML;

    public const string ROUND = <<<'HTML'
    <x-button round>Pill</x-button>

    <!-- Accepted sizes: xs, sm, md, lg, xl, full -->
    <x-button round="lg">Large radius</x-button>
    HTML;

    public const string LEFT_RIGHT = <<<'HTML'
    <x-button>
        <x-slot:left>
            <x-badge color="yellow" text="+99" round light />
        </x-slot:left>
        TallStackUi
    </x-button>
    <x-button>
        <x-slot:right>
            <x-badge color="yellow" text="+99" round light />
        </x-slot:right>
        TallStackUi
    </x-button>
    HTML;

    public const string ICON = <<<'HTML'
    <x-button icon="cog" position="left">TallStackUi</x-button>
    <x-button icon="users" position="right">TallStackUi</x-button>
    HTML;

    public const string SIZE = <<<'HTML'
    <x-button xs>TallStackUi</x-button>
    <x-button sm>TallStackUi</x-button>
    <x-button md>TallStackUi</x-button>
    <x-button lg>TallStackUi</x-button>
    HTML;

    public const string LOADING = <<<'HTML'
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

    public const string COLOR = <<<'HTML'
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
    <x-button text="Mauve" color="mauve" />
    <x-button text="Olive" color="olive" />
    <x-button text="Mist" color="mist" />
    <x-button text="Taupe" color="taupe" />
    <x-button text="Black" color="black" />
    HTML;

    public const string OUTLINE = <<<'HTML'
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
    <x-button text="Mauve" color="mauve" outline />
    <x-button text="Olive" color="olive" outline />
    <x-button text="Mist" color="mist" outline />
    <x-button text="Taupe" color="taupe" outline />
    <x-button text="Black" color="black" outline />
    <x-button text="Black" color="black" outline />
    HTML;

    public const string LIGHT = <<<'HTML'
    <x-button text="Primary" light />
    <x-button text="Secondary" color="secondary" light />
    <x-button text="Slate" color="slate" light />
    <x-button text="Gray" color="gray" light />
    <x-button text="Zinc" color="zinc" light />
    <x-button text="Neutral" color="neutral" light />
    <x-button text="Stone" color="stone" light />
    <x-button text="Red" color="red" light />
    <x-button text="Orange" color="orange" light />
    <x-button text="Amber" color="amber" light />
    <x-button text="Yellow" color="yellow" light />
    <x-button text="Lime" color="lime" light />
    <x-button text="Green" color="green" light />
    <x-button text="Emerald" color="emerald" light />
    <x-button text="Teal" color="teal" light />
    <x-button text="Cyan" color="cyan" light />
    <x-button text="Sky" color="sky" light />
    <x-button text="Blue" color="blue" light />
    <x-button text="Indigo" color="indigo" light />
    <x-button text="Violet" color="violet" light />
    <x-button text="Purple" color="purple" light />
    <x-button text="Fuchsia" color="fuchsia" light />
    <x-button text="Pink" color="pink" light />
    <x-button text="Rose" color="rose" light />
    <x-button text="Mauve" color="mauve" light />
    <x-button text="Olive" color="olive" light />
    <x-button text="Mist" color="mist" light />
    <x-button text="Taupe" color="taupe" light />
    <x-button text="Black" color="black" light />
    HTML;

    public const string FLAT = <<<'HTML'
    <x-button text="Primary" flat />
    <x-button text="Secondary" color="secondary" flat />
    <x-button text="Slate" color="slate" flat />
    <x-button text="Gray" color="gray" flat />
    <x-button text="Zinc" color="zinc" flat />
    <x-button text="Neutral" color="neutral" flat />
    <x-button text="Stone" color="stone" flat />
    <x-button text="Red" color="red" flat />
    <x-button text="Orange" color="orange" flat />
    <x-button text="Amber" color="amber" flat />
    <x-button text="Yellow" color="yellow" flat />
    <x-button text="Lime" color="lime" flat />
    <x-button text="Green" color="green" flat />
    <x-button text="Emerald" color="emerald" flat />
    <x-button text="Teal" color="teal" flat />
    <x-button text="Cyan" color="cyan" flat />
    <x-button text="Sky" color="sky" flat />
    <x-button text="Blue" color="blue" flat />
    <x-button text="Indigo" color="indigo" flat />
    <x-button text="Violet" color="violet" flat />
    <x-button text="Purple" color="purple" flat />
    <x-button text="Fuchsia" color="fuchsia" flat />
    <x-button text="Pink" color="pink" flat />
    <x-button text="Rose" color="rose" flat />
    <x-button text="Mauve" color="mauve" flat />
    <x-button text="Olive" color="olive" flat />
    <x-button text="Mist" color="mist" flat />
    <x-button text="Taupe" color="taupe" flat />
    <x-button text="Black" color="black" flat />
    HTML;

    public const string CIRCLE = <<<'HTML'
    <x-button.circle>TS</x-button.circle>

    <!-- or -->

    <x-button.circle text="TS" />
    HTML;

    public const string CIRCLE_A = <<<'HTML'
    <x-button.circle href="https://google.com.br" target="_blank">TS</x-button.circle>
    HTML;

    public const string CIRCLE_ICON = <<<'HTML'
    <x-button.circle icon="pencil" />
    HTML;

    public const string CIRCLE_SIZE = <<<'HTML'
    <x-button.circle text="SM" sm/>
    <x-button.circle text="MD" />
    <x-button.circle text="LG" lg/>
    HTML;

    public const string CIRCLE_LOADING = <<<'HTML'
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

    public const string SPINNER = <<<'HTML'
    {{-- Without the prop, the default effect --}}
    <x-button wire:click="save" loading="save">Save</x-button>

    {{-- Any of the nine visual variations --}}
    <x-button wire:click="save" loading="save" spinner="ring">Save</x-button>
    <x-button wire:click="save" loading="save" spinner="throbber">Save</x-button>
    <x-button wire:click="save" loading="save" spinner="gradient">Save</x-button>
    <x-button wire:click="save" loading="save" spinner="ping">Save</x-button>
    <x-button wire:click="save" loading="save" spinner="dots">Save</x-button>
    <x-button wire:click="save" loading="save" spinner="pulse">Save</x-button>
    <x-button wire:click="save" loading="save" spinner="typing">Save</x-button>
    <x-button wire:click="save" loading="save" spinner="bars">Save</x-button>
    <x-button wire:click="save" loading="save" spinner="wave">Save</x-button>

    {{-- The four textual variations throw, as does any unknown value --}}
    <x-button wire:click="save" loading="save" spinner="shimmer">Save</x-button>
    HTML;

    public const string SPINNER_CONFIGURATION = <<<'PHP'
    // config/tallstackui.php

    'button' => [
        Components\Button\Normal\Component::class,
        [
            'spinner' => null,
        ],
    ],
    PHP;

    public const string CIRCLE_SPINNER = <<<'HTML'
    <x-button.circle wire:click="delete" icon="trash" color="red" loading="delete" />
    <x-button.circle wire:click="delete" icon="trash" color="red" loading="delete" spinner="ring" />
    <x-button.circle wire:click="delete" icon="trash" color="red" loading="delete" spinner="throbber" />
    <x-button.circle wire:click="delete" icon="trash" color="red" loading="delete" spinner="ping" />
    <x-button.circle wire:click="delete" icon="trash" color="red" loading="delete" spinner="dots" />
    <x-button.circle wire:click="delete" icon="trash" color="red" loading="delete" spinner="pulse" />
    <x-button.circle wire:click="delete" icon="trash" color="red" loading="delete" spinner="typing" />
    <x-button.circle wire:click="delete" icon="trash" color="red" loading="delete" spinner="bars" />
    <x-button.circle wire:click="delete" icon="trash" color="red" loading="delete" spinner="wave" />
    HTML;

    public const string CIRCLE_COLOR = <<<'HTML'
    <x-button.circle icon="bookmark" />
    <x-button.circle icon="bookmark" color="secondary" />
    <x-button.circle icon="bookmark" color="slate" />
    <x-button.circle icon="bookmark" color="gray" />
    <x-button.circle icon="bookmark" color="zinc" />
    <x-button.circle icon="bookmark" color="neutral" />
    <x-button.circle icon="bookmark" color="stone" />
    <x-button.circle icon="bookmark" color="red" />
    <x-button.circle icon="bookmark" color="orange" />
    <x-button.circle icon="bookmark" color="amber" />
    <x-button.circle icon="bookmark" color="yellow" />
    <x-button.circle icon="bookmark" color="lime" />
    <x-button.circle icon="bookmark" color="green" />
    <x-button.circle icon="bookmark" color="emerald" />
    <x-button.circle icon="bookmark" color="teal" />
    <x-button.circle icon="bookmark" color="cyan" />
    <x-button.circle icon="bookmark" color="sky" />
    <x-button.circle icon="bookmark" color="blue" />
    <x-button.circle icon="bookmark" color="indigo" />
    <x-button.circle icon="bookmark" color="violet" />
    <x-button.circle icon="bookmark" color="purple" />
    <x-button.circle icon="bookmark" color="fuchsia" />
    <x-button.circle icon="bookmark" color="pink" />
    <x-button.circle icon="bookmark" color="rose" />
    <x-button.circle icon="bookmark" color="mauve" />
    <x-button.circle icon="bookmark" color="olive" />
    <x-button.circle icon="bookmark" color="mist" />
    <x-button.circle icon="bookmark" color="taupe" />
    <x-button.circle icon="bookmark" color="black" />
    HTML;

    public const string CIRCLE_OUTLINE = <<<'HTML'
    <x-button.circle icon="bookmark" outline />
    <x-button.circle icon="bookmark" color="secondary" outline />
    <x-button.circle icon="bookmark" color="slate" outline />
    <x-button.circle icon="bookmark" color="gray" outline />
    <x-button.circle icon="bookmark" color="zinc" outline />
    <x-button.circle icon="bookmark" color="neutral" outline />
    <x-button.circle icon="bookmark" color="stone" outline />
    <x-button.circle icon="bookmark" color="red" outline />
    <x-button.circle icon="bookmark" color="orange" outline />
    <x-button.circle icon="bookmark" color="amber" outline />
    <x-button.circle icon="bookmark" color="yellow" outline />
    <x-button.circle icon="bookmark" color="lime" outline />
    <x-button.circle icon="bookmark" color="green" outline />
    <x-button.circle icon="bookmark" color="emerald" outline />
    <x-button.circle icon="bookmark" color="teal" outline />
    <x-button.circle icon="bookmark" color="cyan" outline />
    <x-button.circle icon="bookmark" color="sky" outline />
    <x-button.circle icon="bookmark" color="blue" outline />
    <x-button.circle icon="bookmark" color="indigo" outline />
    <x-button.circle icon="bookmark" color="violet" outline />
    <x-button.circle icon="bookmark" color="purple" outline />
    <x-button.circle icon="bookmark" color="fuchsia" outline />
    <x-button.circle icon="bookmark" color="pink" outline />
    <x-button.circle icon="bookmark" color="rose" outline />
    <x-button.circle icon="bookmark" color="mauve" outline />
    <x-button.circle icon="bookmark" color="olive" outline />
    <x-button.circle icon="bookmark" color="mist" outline />
    <x-button.circle icon="bookmark" color="taupe" outline />
    <x-button.circle icon="bookmark" color="black" outline />
    HTML;

    public const string CIRCLE_LIGHT = <<<'HTML'
    <x-button.circle icon="bookmark" light />
    <x-button.circle icon="bookmark" color="secondary" light />
    <x-button.circle icon="bookmark" color="slate" light />
    <x-button.circle icon="bookmark" color="gray" light />
    <x-button.circle icon="bookmark" color="zinc" light />
    <x-button.circle icon="bookmark" color="neutral" light />
    <x-button.circle icon="bookmark" color="stone" light />
    <x-button.circle icon="bookmark" color="red" light />
    <x-button.circle icon="bookmark" color="orange" light />
    <x-button.circle icon="bookmark" color="amber" light />
    <x-button.circle icon="bookmark" color="yellow" light />
    <x-button.circle icon="bookmark" color="lime" light />
    <x-button.circle icon="bookmark" color="green" light />
    <x-button.circle icon="bookmark" color="emerald" light />
    <x-button.circle icon="bookmark" color="teal" light />
    <x-button.circle icon="bookmark" color="cyan" light />
    <x-button.circle icon="bookmark" color="sky" light />
    <x-button.circle icon="bookmark" color="blue" light />
    <x-button.circle icon="bookmark" color="indigo" light />
    <x-button.circle icon="bookmark" color="violet" light />
    <x-button.circle icon="bookmark" color="purple" light />
    <x-button.circle icon="bookmark" color="fuchsia" light />
    <x-button.circle icon="bookmark" color="pink" light />
    <x-button.circle icon="bookmark" color="rose" light />
    <x-button.circle icon="bookmark" color="mauve" light />
    <x-button.circle icon="bookmark" color="olive" light />
    <x-button.circle icon="bookmark" color="mist" light />
    <x-button.circle icon="bookmark" color="taupe" light />
    <x-button.circle icon="bookmark" color="black" light />
    HTML;

    public const string CIRCLE_FLAT = <<<'HTML'
    <x-button.circle icon="bookmark" flat />
    <x-button.circle icon="bookmark" color="secondary" flat />
    <x-button.circle icon="bookmark" color="slate" flat />
    <x-button.circle icon="bookmark" color="gray" flat />
    <x-button.circle icon="bookmark" color="zinc" flat />
    <x-button.circle icon="bookmark" color="neutral" flat />
    <x-button.circle icon="bookmark" color="stone" flat />
    <x-button.circle icon="bookmark" color="red" flat />
    <x-button.circle icon="bookmark" color="orange" flat />
    <x-button.circle icon="bookmark" color="amber" flat />
    <x-button.circle icon="bookmark" color="yellow" flat />
    <x-button.circle icon="bookmark" color="lime" flat />
    <x-button.circle icon="bookmark" color="green" flat />
    <x-button.circle icon="bookmark" color="emerald" flat />
    <x-button.circle icon="bookmark" color="teal" flat />
    <x-button.circle icon="bookmark" color="cyan" flat />
    <x-button.circle icon="bookmark" color="sky" flat />
    <x-button.circle icon="bookmark" color="blue" flat />
    <x-button.circle icon="bookmark" color="indigo" flat />
    <x-button.circle icon="bookmark" color="violet" flat />
    <x-button.circle icon="bookmark" color="purple" flat />
    <x-button.circle icon="bookmark" color="fuchsia" flat />
    <x-button.circle icon="bookmark" color="pink" flat />
    <x-button.circle icon="bookmark" color="rose" flat />
    <x-button.circle icon="bookmark" color="mauve" flat />
    <x-button.circle icon="bookmark" color="olive" flat />
    <x-button.circle icon="bookmark" color="mist" flat />
    <x-button.circle icon="bookmark" color="taupe" flat />
    <x-button.circle icon="bookmark" color="black" flat />
    HTML;

    public const string UNFOCUS = <<<'HTML'
    <x-button text="With Focus" />
    <x-button text="Without Focus" unfocus />
    HTML;

    public const string CIRCLE_UNFOCUS = <<<'HTML'
    <x-button.circle icon="x-mark" color="secondary" sm />
    <x-button.circle icon="x-mark" color="secondary" sm unfocus />
    HTML;

    public const string GROUP_BASIC = <<<'HTML'
    <x-button.group>
        <x-button text="Years" color="secondary" />
        <x-button text="Months" color="secondary" />
        <x-button text="Days" color="secondary" />
    </x-button.group>
    HTML;

    public const string GROUP_VERTICAL = <<<'HTML'
    <x-button.group vertical>
        <x-button text="List" icon="bars-4" color="secondary" />
        <x-button text="Grid" icon="squares-2x2" color="secondary" />
        <x-button text="Map" icon="map" color="secondary" />
    </x-button.group>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->button()
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_CIRCLE = <<<'HTML'
    TallStackUi::customize()
        ->button('circle')
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_GROUP = <<<'HTML'
    TallStackUi::customize()
        ->button('group')
        ->block('wrapper.base', 'isolate inline-flex shadow-sm rounded-lg');
    HTML;
}
