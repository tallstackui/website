<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

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

    public const string PROGRAMMATIC = <<<'HTML'
    <x-button x-on:click="$tsui.copy('TallStackUI')">
        Copy
    </x-button>
    HTML;

    public const string PROGRAMMATIC_EVENT = <<<'JS'
    // $tsui.copy resolves to a boolean reporting whether the copy succeeded.
    const copied = await window.$tsui.copy('TallStackUI');

    // It also dispatches the `ts-ui:copy` event on window with the copied text.
    window.addEventListener('ts-ui:copy', (event) => {
        alert(`Copied: ${event.detail.text}`); // 'Copied: TallStackUI'
    });
    JS;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->clipboard()
        ->block('block', 'classes');
    HTML;
}
