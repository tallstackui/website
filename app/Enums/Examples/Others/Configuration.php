<?php

namespace App\Enums\Examples\Others;

class Configuration
{
    public const COMMAND = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.config
    HTML;

    public const CONTENT = <<<'HTML'
    // ...

    /*
    |--------------------------------------------------------------------------
    | Components Settings
    |--------------------------------------------------------------------------
    |
    | General components settings.
    */
    'settings' => [
        /*
        |----------------------------------------------------------------------
        | Dialog
        |----------------------------------------------------------------------
        | z-index: controls the default z-index.
        | blur: enables the background blur effect by default.
        | persistent: enables the dialog to not be closed by clicking outside by default.
        */
        'dialog' => [
            'z-index' => 'z-50',
            'blur' => false,
            'persistent' => false,
        ],
        /*
        |----------------------------------------------------------------------
        | Modal
        |----------------------------------------------------------------------
        |
        | z-index: controls the default z-index.
        | blur: enables the background blur effect by default.
        | persistent: enables the modal to not be closed by clicking outside by default.
        | size: controls the default modal size (Allowed: sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl).
        */
        'modal' => [
            'z-index' => 'z-50',
            'blur' => false,
            'persistent' => false,
            'size' => '2xl',
        ],
        /*
        |----------------------------------------------------------------------
        | Loading
        |----------------------------------------------------------------------
        |
        | z-index: controls the default z-index.
        | blur: enables the background blur effect by default.
        | opacity: enables the background opacity by default.
        */
        'loading' => [
            'z-index' => 'z-50',
            'blur' => false,
            'opacity' => true,
        ],
        /*
        |----------------------------------------------------------------------
        | Slide
        |----------------------------------------------------------------------
        |
        | z-index: controls the default z-index.
        | blur: enables the background blur effect by default.
        | persistent: enables the slide to not be closed by clicking outside by default.
        | size: controls the default modal size (Allowed: sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full).
        | position: controls the default slide position (Allowed: right, left).
        */
        'slide' => [
            'z-index' => 'z-50',
            'blur' => false,
            'persistent' => false,
            'size' => 'lg',
            'position' => 'right',
        ],
        /*
        |----------------------------------------------------------------------
        | Toast
        |----------------------------------------------------------------------
        |
        | z-index: controls the default z-index.
        | progress: enables the progress bar.
        | expandable: enables the expand effect by default.
        | position: controls the default toast position (Allowed: top-right, top-left, bottom-right, bottom-left).
        | timeout: controls the default timeout in seconds.
        */
        'toast' => [
            'z-index' => 'z-50',
            'progress' => true,
            'expandable' => false,
            'position' => 'top-right',
            'timeout' => 3,
        ],
    ],

    // ...
    HTML;

    public const TAILWINDCSS = <<<'HTML'
    content: [
        // ...

        './config/tallstackui.php', // [tl! highlight]
    ],
    HTML;
}
