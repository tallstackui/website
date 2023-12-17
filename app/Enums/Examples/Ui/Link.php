<?php

namespace App\Enums\Examples\Ui;

class Link
{
    public const BASIC = <<<'HTML'
    <x-link href="https://tallstackui.com/docs/ui/link">
        TallStackUI
    </x-link>

    <!-- or -->
    <x-link href="https://tallstackui.com/docs/ui/link" text="TallStackUI" />

    <!-- As a normal Blade component, you can also pass variables for href -->
    <x-link :href="route('documentation.ui.link')" text="TallStackUI" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-link :href="route('documentation.ui.link')" text="TallStackUI" sm />
    <x-link :href="route('documentation.ui.link')" text="TallStackUI" md />
    <x-link :href="route('documentation.ui.link')" text="TallStackUI" lg />
    HTML;

    public const ICONS = <<<'HTML'
    <x-link :href="route('documentation.ui.link')"
            text="TallStackUI"
            icon="arrow-up-left" />

    <x-link :href="route('documentation.ui.link')"
            text="TallStackUI"
            icon="arrow-up-right"
            position="right" />
    HTML;

    public const BLANK_BOLD = <<<'HTML'
    <x-link :href="route('documentation.ui.link')" text="TallStackUI" blank />
    <x-link :href="route('documentation.ui.link')" text="TallStackUI" bold />
    HTML;

    public const QUERY_FRAGMENT = <<<'HTML'
    <x-link :href="route('documentation.ui.link')"
            text="TallStackUI"
            :query="['status' => 'active']" />

    <x-link :href="route('documentation.ui.link')"
            text="TallStackUI"
            fragment="#query-string-fragment-options" />
    HTML;

    public const COLORS = <<<'HTML'
    <x-link :href="route('documentation.ui.link')" text="Primary" />
    <x-link :href="route('documentation.ui.link')" text="Secondary" color="secondary" />
    <x-link :href="route('documentation.ui.link')" text="Slate" color="slate" />
    <x-link :href="route('documentation.ui.link')" text="Gray" color="gray" />
    <x-link :href="route('documentation.ui.link')" text="Zinc" color="zinc" />
    <x-link :href="route('documentation.ui.link')" text="Neutral" color="neutral" />
    <x-link :href="route('documentation.ui.link')" text="Stone" color="stone" />
    <x-link :href="route('documentation.ui.link')" text="Red" color="red" />
    <x-link :href="route('documentation.ui.link')" text="Orange" color="orange" />
    <x-link :href="route('documentation.ui.link')" text="Amber" color="amber" />
    <x-link :href="route('documentation.ui.link')" text="Yellow" color="yellow" />
    <x-link :href="route('documentation.ui.link')" text="Lime" color="lime" />
    <x-link :href="route('documentation.ui.link')" text="Green" color="green" />
    <x-link :href="route('documentation.ui.link')" text="Emerald" color="emerald" />
    <x-link :href="route('documentation.ui.link')" text="Teal" color="teal" />
    <x-link :href="route('documentation.ui.link')" text="Cyan" color="cyan" />
    <x-link :href="route('documentation.ui.link')" text="Sky" color="sky" />
    <x-link :href="route('documentation.ui.link')" text="Blue" color="blue" />
    <x-link :href="route('documentation.ui.link')" text="Indigo" color="indigo" />
    <x-link :href="route('documentation.ui.link')" text="Violet" color="violet" />
    <x-link :href="route('documentation.ui.link')" text="Purple" color="purple" />
    <x-link :href="route('documentation.ui.link')" text="Fuchsia" color="fuchsia" />
    <x-link :href="route('documentation.ui.link')" text="Pink" color="pink" />
    <x-link :href="route('documentation.ui.link')" text="Rose" color="rose" />
    <x-link :href="route('documentation.ui.link')" text="White" color="white" />
    <x-link :href="route('documentation.ui.link')" text="Black" color="black" />
    HTML;

    public const WITHOUT_COLOR = <<<'HTML'
    <x-link :href="route('documentation.ui.link')" text="TallStackUI" :color="null" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->link()
        ->block('block', 'classes');
    HTML;
}
