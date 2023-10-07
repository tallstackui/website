<?php

namespace App\Enums\Examples;

class Alert
{
    public const BASIC = <<<HTML
    <x-alert>
        TallStackUi
    </x-alert>
    HTML;

    public const TITLE = <<<HTML
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

    public const CLOSEABLE = <<<HTML
    <x-alert title="TallStackUi" closeable>
        TallStackUi
    </x-alert>
    HTML;

    public const COLORS = <<<HTML
    <x-alert title="TallStackUi">
        TallStackUi
    </x-alert>
    <x-alert title="TallStackUi" color="yellow">
        TallStackUi
    </x-alert>
    <x-alert title="TallStackUi" color="red">
        TallStackUi
    </x-alert>
    <x-alert title="TallStackUi" color="sky">
        TallStackUi
    </x-alert>
    <x-alert title="TallStackUi" color="orange">
        TallStackUi
    </x-alert>
    HTML;

    public const TRANSLUCENTS = <<<HTML
    <x-alert title="TallStackUi" translucent>
        TallStackUi
    </x-alert>
    <x-alert title="TallStackUi" color="yellow" translucent>
        TallStackUi
    </x-alert>
    <x-alert title="TallStackUi" color="red" translucent>
        TallStackUi
    </x-alert>
    <x-alert title="TallStackUi" color="sky" translucent>
        TallStackUi
    </x-alert>
    <x-alert title="TallStackUi" color="orange" translucent>
        TallStackUi
    </x-alert>
    HTML;
}
