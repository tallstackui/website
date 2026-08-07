<?php

namespace App\Enums\Examples;

class UpgradeGuide
{
    public const string COMPOSER = <<<'HTML'
    "require": {
        "laravel/framework": "^13.0",
        "tallstackui/tallstackui": "^3.0", // [tl! remove]
        "tallstackui/tallstackui": "^4.0", // [tl! add]
        "livewire/livewire": "^4.0",

        // ...
    },
    HTML;

    public const string OPTIMIZE_CLEAR = <<<'HTML'
    php artisan optimize:clear
    HTML;

    public const string COMMAND = <<<'HTML'
    composer install
    HTML;

    public const string CARD_ACCENT = <<<'HTML'
    <x-card color="red" bordered header="Report">...</x-card> // [tl! remove]
    <x-card color="red" accent header="Report">...</x-card> // [tl! add]
    HTML;

    public const string KBD_SHADOWLESS = <<<'HTML'
    <x-kbd borderless /> // [tl! remove]
    <x-kbd borderless shadowless /> // [tl! add]
    HTML;

    public const string BUTTON_BLOCKS = <<<'PHP'
    TallStackUi::customize()->button()->block('wrapper.border.radius.rounded', 'rounded-2xl'); // [tl! remove]
    TallStackUi::customize()->button()->block('wrapper.border.radius.circle', '...'); // [tl! remove]
    TallStackUi::customize()->button()->block('border.radius.md', 'rounded-2xl'); // [tl! add]
    TallStackUi::customize()->button()->block('border.radius.full', '...'); // [tl! add]
    PHP;

    public const string TOOLTIP_DISABLED = <<<'HTML'
    x-effect="$el._tippy && ($store['tsui.side-bar'].open ? $el._tippy.disable() : $el._tippy.enable())" // [tl! remove]
    x-bind:data-tooltip-disabled="$store['tsui.side-bar'].open" // [tl! add]
    HTML;

    public const string CUSTOMIZATION_STACKING = <<<'PHP'
    TallStackUi::customize('alert')->block('wrapper')->append('from-a');
    TallStackUi::customize('alert')->block('wrapper')->append('from-b');

    // 3.x: 'p-4 from-b'          -- from-a lost
    // 4.x: 'p-4 from-a from-b'
    PHP;

    public const string CUSTOMIZATION_REMOVE = <<<'PHP'
    // block: 'mb-2 rounded-md border border-gray-300 dark:border-dark-700'
    ->remove('border')

    // 3.x: 'mb-2 rounded-md -gray-300 dark:-dark-700'
    // 4.x: 'mb-2 rounded-md border-gray-300 dark:border-dark-700'
    PHP;

    public const string SECONDARY_COLOR = <<<'HTML'
    {{-- Was slate-gray, is violet now --}}
    <x-badge color="secondary" text="Draft" /> // [tl! remove]
    <x-badge color="slate" text="Draft" /> // [tl! add]
    HTML;

    public const string TABLE_PAGINATOR = <<<'HTML'
    <x-table :$headers :$rows paginate paginator="components.table.paginators" /> // [tl! remove]
    <x-table :$headers :$rows paginate paginator="components.table.paginators.simple" /> // [tl! add]
    HTML;

    public const string STEP_SLOTS = <<<'HTML'
    {{-- previous and next are slot names now: a bare attribute throws --}}
    <x-step selected="1" helpers previous> // [tl! remove]
    <x-step selected="1" helpers navigate-previous> // [tl! add]
    HTML;

    public const string LIST_DIVIDER = <<<'PHP'
    // Dividers must be keyed on data-list-on, not data-list-row
    TallStackUi::customize()
        ->list()
        ->block('items.wrapper', '[&>[data-list-on]~[data-list-on]]:border-t');
    PHP;

    public const string COLORFUL_BLOCKS = <<<'PHP'
    // These three blocks no longer exist and now throw
    TallStackUi::customize()->dialog()->block('colorful.confirm', '...'); // [tl! remove]
    TallStackUi::customize()->toast()->block('colorful.confirm', '...'); // [tl! remove]
    TallStackUi::customize()->toast()->block('colorful.cancel', '...'); // [tl! remove]

    // Publish the color classes and override colorfulColors() instead
    php artisan tallstackui:setup-color
    PHP;
}
