<?php

namespace App\Enums\Examples\Ui;

class Clipboard
{
    public const BASIC = <<<'HTML'
    <x-clipboard text="TallStackUI" />

    <!-- Or -->

    <x-clipboard>
        TallStackUI
    </x-clipboard>
    HTML;

    public const LEFT = <<<'HTML'
    <x-clipboard text="TallStackUI" left />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-clipboard label="Library"
                 hint="Click to copy the library name"
                 text="TallStackUI" />
    HTML;

    public const SECRET = <<<'HTML'
    <x-clipboard text="TallStackUI" secret />
    HTML;

    public const EVENTS = <<<'HTML'
    <!-- The listener receive the content copied in $event.detail.text -->

    <x-clipboard x-on:copy="alert(`Copied: ${$event.detail.text}`)">
        TallStackUi
    </x-clipboard>
    HTML;

    public const ICON = <<<'HTML'
    <x-clipboard text="TallStackUI" icon />

    <!-- Or -->

    <x-clipboard icon>
        TallStackUI
    </x-clipboard>
    HTML;

    public const DIFFERENT_ICONS = <<<'HTML'
    <x-clipboard text="TallStackUI"
                 icon
                 :icons="['copy' => 'pencil', 'copied' => 'check']"/>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->clipboard()
        ->block('block', 'classes');
    HTML;
}
