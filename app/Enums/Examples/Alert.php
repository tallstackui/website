<?php

namespace App\Enums\Examples;

class Alert
{
    public const BASIC = <<<'HTML'
    <x-alert>
        TallStackUi
    </x-alert>
    HTML;

    public const TITLE = <<<'HTML'
    <x-alert>
        <x-slot:title>
            TallStackUi
        </x-slot:title>
        TallStackUi
    </x-alert>

    <!-- or -->

    <x-alert title="TallStackUi">
        TallStackUi
    </x-alert>
    HTML;

    public const CLOSEABLE = <<<'HTML'
    <x-alert title="TallStackUi" closeable>
        TallStackUi
    </x-alert>
    HTML;

    public const COLORS = <<<'HTML'
    <x-alert title="TallStackUi">
        Primary
    </x-alert>
    <x-alert title="TallStackUi" color="secondary">
        Secondary
    </x-alert>
    <x-alert title="TallStackUi" color="black">
        Black
    </x-alert>
    <x-alert title="TallStackUi" color="white">
        White
    </x-alert>
    <x-alert title="TallStackUi" color="slate">
        Slate
    </x-alert>
    <x-alert title="TallStackUi" color="gray">
        Gray
    </x-alert>
    <x-alert title="TallStackUi" color="zinc">
        Zinc
    </x-alert>
    <x-alert title="TallStackUi" color="neutral">
        Neutral
    </x-alert>
    <x-alert title="TallStackUi" color="stone">
        Stone
    </x-alert>
    <x-alert title="TallStackUi" color="red">
        Red
    </x-alert>
    <x-alert title="TallStackUi" color="orange">
        Orange
    </x-alert>
    <x-alert title="TallStackUi" color="amber">
        Amber
    </x-alert>
    <x-alert title="TallStackUi" color="yellow">
        Yellow
    </x-alert>
    <x-alert title="TallStackUi" color="lime">
        Lime
    </x-alert>
    <x-alert title="TallStackUi" color="green">
        Green
    </x-alert>
    <x-alert title="TallStackUi" color="emerald">
        Emerald
    </x-alert>
    <x-alert title="TallStackUi" color="teal">
        Teal
    </x-alert>
    <x-alert title="TallStackUi" color="cyan">
        Cyan
    </x-alert>
    <x-alert title="TallStackUi" color="sky">
        Sky
    </x-alert>
    <x-alert title="TallStackUi" color="blue">
        Blue
    </x-alert>
    <x-alert title="TallStackUi" color="indigo">
        Indigo
    </x-alert>
    <x-alert title="TallStackUi" color="violet">
        Violet
    </x-alert>
    <x-alert title="TallStackUi" color="purple">
        Purple
    </x-alert>
    <x-alert title="TallStackUi" color="fuchsia">
        Fuchsia
    </x-alert>
    <x-alert title="TallStackUi" color="pink">
        Pink
    </x-alert>
    <x-alert title="TallStackUi" color="rose">
        Rose
    </x-alert>
    HTML;

    public const TRANSLUCENTS = <<<'HTML'
    <x-alert title="TallStackUi" translucent>
        Primary
    </x-alert>
    <x-alert title="TallStackUi" color="secondary" translucent>
        Secondary
    </x-alert>
    <x-alert title="TallStackUi" color="black" translucent>
        Black
    </x-alert>
    <x-alert title="TallStackUi" color="white" translucent>
        White
    </x-alert>
    <x-alert title="TallStackUi" color="slate" translucent>
        Slate
    </x-alert>
    <x-alert title="TallStackUi" color="gray" translucent>
        Gray
    </x-alert>
    <x-alert title="TallStackUi" color="zinc" translucent>
        Zinc
    </x-alert>
    <x-alert title="TallStackUi" color="neutral" translucent>
        Neutral
    </x-alert>
    <x-alert title="TallStackUi" color="stone" translucent>
        Stone
    </x-alert>
    <x-alert title="TallStackUi" color="red" translucent>
        Red
    </x-alert>
    <x-alert title="TallStackUi" color="orange" translucent>
        Orange
    </x-alert>
    <x-alert title="TallStackUi" color="amber" translucent>
        Amber
    </x-alert>
    <x-alert title="TallStackUi" color="yellow" translucent>
        Yellow
    </x-alert>
    <x-alert title="TallStackUi" color="lime" translucent>
        Lime
    </x-alert>
    <x-alert title="TallStackUi" color="green" translucent>
        Green
    </x-alert>
    <x-alert title="TallStackUi" color="emerald" translucent>
        Emerald
    </x-alert>
    <x-alert title="TallStackUi" color="teal" translucent>
        Teal
    </x-alert>
    <x-alert title="TallStackUi" color="cyan" translucent>
        Cyan
    </x-alert>
    <x-alert title="TallStackUi" color="sky" translucent>
        Sky
    </x-alert>
    <x-alert title="TallStackUi" color="blue" translucent>
        Blue
    </x-alert>
    <x-alert title="TallStackUi" color="indigo" translucent>
        Indigo
    </x-alert>
    <x-alert title="TallStackUi" color="violet" translucent>
        Violet
    </x-alert>
    <x-alert title="TallStackUi" color="purple" translucent>
        Purple
    </x-alert>
    <x-alert title="TallStackUi" color="fuchsia" translucent>
        Fuchsia
    </x-alert>
    <x-alert title="TallStackUi" color="pink" translucent>
        Pink
    </x-alert>
    <x-alert title="TallStackUi" color="rose" translucent>
        Rose
    </x-alert>
    HTML;
}
