<?php

declare(strict_types=1);

namespace App\Enums\Examples;

class Configuration
{
    public const string COMMAND = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.config
    HTML;

    public const string GLOBAL_KEYS = <<<'PHP'
    // config/tallstackui.php

    return [
        // Prefixes every component, so "ts-" gives <x-ts-alert />
        'prefix' => null,

        // Suppresses validation errors on every form component
        'invalidate_global' => false,

        // Locks the page scroll while any floating-based popup is open
        'floating_scroll_lock' => false,
    ];
    PHP;

    public const string MERGE = <<<'PHP'
    // Package default: [10, 25, 50, 100]
    'quantity' => [15, 30],   // the table offers exactly 15 and 30
    PHP;

    public const string SCROLLBAR_CSS = <<<'CSS'
    /* Published by the scroll lock, only while the body is locked */
    :root { --tsui-scrollbar-offset: 15px; }

    /* Shipped in css/plugins/scrollbar-bleed.css */
    .tsui-scrollbar-bleed {
        margin-right: calc(-1 * var(--tsui-scrollbar-offset, 0px));
        border-right: var(--tsui-scrollbar-offset, 0px) solid transparent;
    }
    CSS;
}
