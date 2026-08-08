<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class QrCode
{
    public const string BASIC = <<<'HTML'
    <x-qr-code link="https://tallstackui.com" />
    HTML;

    public const string COLORS = <<<'HTML'
    {{-- Without color the modules follow the theme --}}
    <x-qr-code link="https://tallstackui.com" />

    {{-- A named color is the same color under both themes --}}
    <x-qr-code link="https://tallstackui.com" color="blue" />
    <x-qr-code link="https://tallstackui.com" color="emerald" />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-qr-code link="https://tallstackui.com" size="xs" />
    <x-qr-code link="https://tallstackui.com" size="sm" />
    <x-qr-code link="https://tallstackui.com" size="md" />
    <x-qr-code link="https://tallstackui.com" size="lg" />
    <x-qr-code link="https://tallstackui.com" size="xl" />
    <x-qr-code link="https://tallstackui.com" size="2xl" />
    HTML;

    public const string WATERMARK = <<<'HTML'
    {{-- An icon name draws the icon --}}
    <x-qr-code link="https://tallstackui.com" watermark="bolt" size="lg" />

    {{-- Anything else is drawn as text, capped at 8 characters --}}
    <x-qr-code link="https://tallstackui.com" watermark="TALL" size="lg" />
    HTML;

    public const string ACTIONS = <<<'HTML'
    <x-qr-code link="https://tallstackui.com" copy />
    <x-qr-code link="https://tallstackui.com" download />
    <x-qr-code link="https://tallstackui.com" download="svg" />
    <x-qr-code link="https://tallstackui.com" copy download="svg" />
    HTML;

    public const string SKELETON = <<<'HTML'
    <x-qr-code :link="$resolved" :skeleton="$resolved === null" size="lg" />
    HTML;

    public const string CONFIGURATION = <<<'PHP'
    // config/tallstackui.php

    'qr-code' => [
        Components\QrCode\Component::class,
        [
            'size' => 'md',
            'pixels' => 1024,
        ],
    ],
    PHP;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->qrCode()
        ->block('block', 'classes');
    HTML;
}
