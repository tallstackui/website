<?php

namespace App\Enums\Examples;

class Button
{
    public const BASIC = <<<'HTML'
    <x-button>TallStackUi</x-button>

    <!-- or -->

    <x-button text="TallStackUi" />
    HTML;

    public const HREF = <<<'HTML'
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
    <x-button>TallStackUi</x-button>
    <x-button color="orange">TallStackUi</x-button>
    <x-button color="sky">TallStackUi</x-button>
    <x-button color="pink">TallStackUi</x-button>
    HTML;

    public const OUTLINES = <<<'HTML'
    <x-button outline>TallStackUi</x-button>
    <x-button color="orange" outline>TallStackUi</x-button>
    <x-button color="sky" outline>TallStackUi</x-button>
    <x-button color="pink" outline>TallStackUi</x-button>
    HTML;

    public const CIRCLE = <<<'HTML'
    <x-button.circle>TS</x-button.circle>

    <!-- or -->

    <x-button.circle text="TS" />
    HTML;

    public const CIRCLE_HREF = <<<'HTML'
    <x-button.circle href="https://google.com.br" target="_blank">TS</x-button.circle>
    HTML;

    public const CIRCLE_ICONS = <<<'HTML'
    <x-button.circle icon="pencil" />
    HTML;

    public const CIRCLE_COLORS = <<<'HTML'
    <x-button.circle text="TS" />
    <x-button.circle text="TS" color="pink" />
    <x-button.circle text="TS" color="orange" />
    <x-button.circle text="TS" color="sky" />
    HTML;

    public const CIRCLE_OUTLINES = <<<'HTML'
    <x-button.circle text="TS" outline />
    <x-button.circle text="TS" color="pink" outline />
    <x-button.circle text="TS" color="orange" outline />
    <x-button.circle text="TS" color="sky" outline />
    HTML;
}
