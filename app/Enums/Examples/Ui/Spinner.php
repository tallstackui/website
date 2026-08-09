<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Spinner
{
    public const string BASIC = <<<'HTML'
    <x-spinner />
    HTML;

    public const string VARIATIONS = <<<'HTML'
    <x-spinner ring />
    <x-spinner throbber />
    <x-spinner gradient />
    <x-spinner ping />
    <x-spinner dots />
    <x-spinner pulse />
    <x-spinner typing />
    <x-spinner bars />
    <x-spinner wave />
    HTML;

    public const string TEXTUAL = <<<'HTML'
    <x-spinner shimmer text="Loading the report" />
    <x-spinner caret text="Generating" />
    <x-spinner terminal text="npm run build" />
    <x-spinner thinking />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-spinner xs />
    <x-spinner sm />
    <x-spinner md />
    <x-spinner lg />
    HTML;

    public const string COLORS = <<<'HTML'
    <x-spinner color="red" />
    <x-spinner bars color="emerald" />
    <x-spinner wave color="amber" />
    <x-spinner dots color="blue" />

    {{-- Anything outside the palette comes straight from a utility --}}
    <x-spinner class="text-[#ff5f1f]" />
    HTML;

    public const string LABEL = <<<'HTML'
    {{-- glyph + sr-only fallback --}}
    <x-spinner />

    {{-- glyph + visible label --}}
    <x-spinner text="Sending the file" />

    {{-- glyph + markup label --}}
    <x-spinner>Sending <b>3</b> files</x-spinner>
    HTML;

    public const string THINKING = <<<'HTML'
    <x-spinner thinking />
    <x-spinner thinking text="Analyzing" />
    <x-spinner thinking :text="false" />
    <x-spinner thinking :interval="250" />
    HTML;

    public const string BUTTON = <<<'HTML'
    <x-button color="primary">
        <x-slot:left>
            <x-spinner xs class="text-white" />
        </x-slot:left>
        Saving
    </x-button>
    HTML;

    public const string EXCEPTION = <<<'HTML'
    {{-- Two variants at once throws --}}
    <x-spinner wave bars />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->spinner()
        ->block('block', 'classes');
    HTML;
}
