<?php

namespace App\Enums\Examples\Ui;

class Link
{
    public const BASIC = <<<'HTML'
    <x-link href="https://google.com.br">
        TallStackUI
    </x-link>

    <!-- or -->
    <x-link href="https://google.com.br"
            text="TallStackUI" />

    <!--
        As a normal Blade component,
        you can also pass variables for href.
    -->
    <x-link :href="route('welcome')"
            text="TallStackUI" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-link href="https://google.com.br/"
            text="TallStackUI"
            sm />

    <x-link href="https://google.com.br/"
            text="TallStackUI"
            md /> <!-- default size -->

    <x-link href="https://google.com.br/"
            text="TallStackUI"
            lg />
    HTML;

    public const ICONS = <<<'HTML'
    <x-link href="https://google.com.br/"
            text="TallStackUI"
            icon="link" />

    <x-link href="https://google.com.br/"
            text="TallStackUI"
            icon="arrow-up-right"
            position="right" />
    HTML;

    public const BLANK_BOLD_UNDERLINE = <<<'HTML'
    <x-link href="https://google.com.br/"
            text="TallStackUI"
            blank />

    <x-link href="https://google.com.br/"
            text="TallStackUI"
            bold />

    <x-link href="https://google.com.br/"
            text="TallStackUI"
            underline />
    HTML;

    public const QUERY_FRAGMENT = <<<'HTML'
    <!-- The "query" accepts an array or an instance of Collection. -->

    <x-link href="https://google.com.br/"
            text="TallStackUI"
            :query="['status' => 'active']" />

    <x-link href="https://google.com.br/"
            text="TallStackUI"
            fragment="query-string-fragment-options" />
    HTML;

    public const COLORS = <<<'HTML'
    <x-link href="https://google.com.br/" text="Primary" />
    <x-link href="https://google.com.br/" text="Secondary" color="secondary" />
    <x-link href="https://google.com.br/" text="Slate" color="slate" />
    <x-link href="https://google.com.br/" text="Gray" color="gray" />
    <x-link href="https://google.com.br/" text="Zinc" color="zinc" />
    <x-link href="https://google.com.br/" text="Neutral" color="neutral" />
    <x-link href="https://google.com.br/" text="Stone" color="stone" />
    <x-link href="https://google.com.br/" text="Red" color="red" />
    <x-link href="https://google.com.br/" text="Orange" color="orange" />
    <x-link href="https://google.com.br/" text="Amber" color="amber" />
    <x-link href="https://google.com.br/" text="Yellow" color="yellow" />
    <x-link href="https://google.com.br/" text="Lime" color="lime" />
    <x-link href="https://google.com.br/" text="Green" color="green" />
    <x-link href="https://google.com.br/" text="Emerald" color="emerald" />
    <x-link href="https://google.com.br/" text="Teal" color="teal" />
    <x-link href="https://google.com.br/" text="Cyan" color="cyan" />
    <x-link href="https://google.com.br/" text="Sky" color="sky" />
    <x-link href="https://google.com.br/" text="Blue" color="blue" />
    <x-link href="https://google.com.br/" text="Indigo" color="indigo" />
    <x-link href="https://google.com.br/" text="Violet" color="violet" />
    <x-link href="https://google.com.br/" text="Purple" color="purple" />
    <x-link href="https://google.com.br/" text="Fuchsia" color="fuchsia" />
    <x-link href="https://google.com.br/" text="Pink" color="pink" />
    <x-link href="https://google.com.br/" text="Rose" color="rose" />
    <x-link href="https://google.com.br/" text="White" color="white" />
    <x-link href="https://google.com.br/" text="Black" color="black" />
    HTML;

    public const WITHOUT_COLOR = <<<'HTML'
    <x-link href="https://google.com.br/"
            text="TallStackUI"
            colorless />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->link()
        ->block('block', 'classes');
    HTML;
}
