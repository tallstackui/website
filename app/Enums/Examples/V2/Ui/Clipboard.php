<?php

namespace App\Enums\Examples\V2\Ui;

class Clipboard
{
    public const string BASIC = <<<'HTML'
    <x-clipboard text="TallStackUI" />

    <!-- Or -->

    <x-clipboard>
        TallStackUI
    </x-clipboard>
    HTML;

    public const string LEFT = <<<'HTML'
    <x-clipboard text="TallStackUI" left />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-clipboard label="Library" hint="Click to copy the library name" text="TallStackUI" />
    HTML;

    public const string SECRET = <<<'HTML'
    <x-clipboard text="TallStackUI" secret />
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-clipboard x-on:copy="alert(`Copied: ${$event.detail.text}`)">
        TallStackUi
    </x-clipboard>
    HTML;

    public const string ICON = <<<'HTML'
    <x-clipboard text="TallStackUI" icon />

    <!-- Or -->

    <x-clipboard icon>
        TallStackUI
    </x-clipboard>
    HTML;

    public const string DIFFERENT_ICONS = <<<'HTML'
    <x-clipboard text="TallStackUI"
                 icon
                 :icons="['copy' => 'pencil', 'copied' => 'check']"/>
    HTML;

    public const string PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->clipboard()
        ->block('block', 'classes');
    HTML;
}
