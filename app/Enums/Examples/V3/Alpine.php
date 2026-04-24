<?php

namespace App\Enums\Examples\V3;

class Alpine
{
    public const string INSTALLATION = <<<'HTML'
    <html>
        <head>
            <!-- ... -->

            <tallstackui:script />
            @livewireStyles
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
        <body>
            <!-- ... -->

            @livewireScripts {{-- [tl! focus, highlight] --}}
        </body>
    </html>
    HTML;

    public const string INPUT = <<<'HTML'
    <x-input label="Birthday"
             hint="Insert your birthday"
             x-mask="99/99/9999" {{-- [tl! highlight] --}}
             value="27/02/1992" />

    <x-input label="Salary"
             hint="Insert your desired salary"
             x-mask:dynamic="$money($input, ',')" {{-- [tl! highlight] --}}
             value="200.000" />

    <!-- Custom Dynamic Mask -->

    <x-input label="Credit Card"
             hint="Insert your credit card number"
             x-mask:dynamic="creditCardMask" {{-- [tl! highlight] --}}
             value="4444555566667777" />

    <script>
    function creditCardMask(input) {
        return input.startsWith('34') || input.startsWith('37')
            ? '9999 999999 99999'
            : '9999 9999 9999 9999'
    }
    </script>
    HTML;
}
