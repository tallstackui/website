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

    public const COLORS = <<<'HTML'
    <x-button text="TallStackUi" />
    <x-button text="TallStackUi" color="secondary" />
    <x-button text="TallStackUi" color="white" />
    <x-button text="TallStackUi" color="black" />
    <x-button text="TallStackUi" color="slate" />
    <x-button text="TallStackUi" color="gray" />
    <x-button text="TallStackUi" color="zinc" />
    <x-button text="TallStackUi" color="neutral" />
    <x-button text="TallStackUi" color="stone" />
    <x-button text="TallStackUi" color="red" />
    <x-button text="TallStackUi" color="orange" />
    <x-button text="TallStackUi" color="amber" />
    <x-button text="TallStackUi" color="yellow" />
    <x-button text="TallStackUi" color="lime" />
    <x-button text="TallStackUi" color="green" />
    <x-button text="TallStackUi" color="emerald" />
    <x-button text="TallStackUi" color="teal" />
    <x-button text="TallStackUi" color="cyan" />
    <x-button text="TallStackUi" color="sky" />
    <x-button text="TallStackUi" color="blue" />
    <x-button text="TallStackUi" color="indigo" />
    <x-button text="TallStackUi" color="violet" />
    <x-button text="TallStackUi" color="purple" />
    <x-button text="TallStackUi" color="fuchsia" />
    <x-button text="TallStackUi" color="pink" />
    <x-button text="TallStackUi" color="rose" />
    HTML;

    public const OUTLINES = <<<'HTML'
    <x-button text="TallStackUi" outline />
    <x-button text="TallStackUi" color="secondary" outline />
    <x-button text="TallStackUi" color="white" outline />
    <x-button text="TallStackUi" color="black" outline />
    <x-button text="TallStackUi" color="slate" outline />
    <x-button text="TallStackUi" color="gray" outline />
    <x-button text="TallStackUi" color="zinc" outline />
    <x-button text="TallStackUi" color="neutral" outline />
    <x-button text="TallStackUi" color="stone" outline />
    <x-button text="TallStackUi" color="red" outline />
    <x-button text="TallStackUi" color="orange" outline />
    <x-button text="TallStackUi" color="amber" outline />
    <x-button text="TallStackUi" color="yellow" outline />
    <x-button text="TallStackUi" color="lime" outline />
    <x-button text="TallStackUi" color="green" outline />
    <x-button text="TallStackUi" color="emerald" outline />
    <x-button text="TallStackUi" color="teal" outline />
    <x-button text="TallStackUi" color="cyan" outline />
    <x-button text="TallStackUi" color="sky" outline />
    <x-button text="TallStackUi" color="blue" outline />
    <x-button text="TallStackUi" color="indigo" outline />
    <x-button text="TallStackUi" color="violet" outline />
    <x-button text="TallStackUi" color="purple" outline />
    <x-button text="TallStackUi" color="fuchsia" outline />
    <x-button text="TallStackUi" color="pink" outline />
    <x-button text="TallStackUi" color="rose" outline />
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

    public const CIRCLE_COLORS = <<<'HTML'
    <x-button.circle text="TS" />
    <x-button.circle text="TS" color="secondary" />
    <x-button.circle text="TS" color="white" />
    <x-button.circle text="TS" color="black" />
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
    HTML;

    public const CIRCLE_OUTLINES = <<<'HTML'
    <x-button.circle text="TS" outline />
    <x-button.circle text="TS" color="secondary" outline />
    <x-button.circle text="TS" color="white" outline />
    <x-button.circle text="TS" color="black" outline />
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
    HTML;
}
