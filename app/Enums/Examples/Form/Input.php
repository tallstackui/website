<?php

declare(strict_types=1);

namespace App\Enums\Examples\Form;

class Input
{
    public const string BASIC = <<<'HTML'
    <x-input />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-input label="Name" hint="Insert your name" />
    HTML;

    public const string LABEL_RAW_HTML = <<<'HTML'
    <x-input>
        <x-slot:label>
            <span>Name</span>
        </x-slot:label>
    </x-input>
    HTML;

    public const string ASTERISK = <<<'HTML'
    <x-input label="Name *" hint="Insert your name" />
    HTML;

    public const string ICONS = <<<'HTML'
    <x-input label="Name" icon="users" />
    <x-input label="Name" icon="cog" position="right" />
    HTML;

    public const string PREFIX_SUFFIX = <<<'HTML'
    <x-input prefix="https://" label="Domain" />
    <x-input suffix="@gmail.com" label="E-mail" />

    <!-- or -->

    <x-input>
        <x-slot:prefix>
            Prefix
        </x-slot:prefix>
        <x-slot:suffix>
            Suffix
        </x-slot:suffix>
    </x-input>
    HTML;

    public const string READONLY_DISABLED = <<<'HTML'
    <x-input label="Readonly" value="Readonly text" readonly />
    <x-input label="Disabled" value="Disabled text" disabled />
    HTML;

    public const string BUTTON_ADDON_SUFFIX = <<<'HTML'
    <x-input label="Search">
        <x-slot:suffix button>
            <x-button text="Go" sm />
        </x-slot:suffix>
    </x-input>
    HTML;

    public const string BUTTON_ADDON_PREFIX = <<<'HTML'
    <x-input label="URL">
        <x-slot:prefix button>
            <x-button text="https" sm />
        </x-slot:prefix>
    </x-input>
    HTML;

    public const string BUTTON_ADDON_BOTH = <<<'HTML'
    <x-input label="Amount">
        <x-slot:prefix button>
            <x-button icon="minus" sm />
        </x-slot:prefix>
        <x-slot:suffix button>
            <x-button icon="plus" sm />
        </x-slot:suffix>
    </x-input>
    HTML;

    public const string CLEARABLE = <<<'HTML'
    <x-input value="TallStackUI" clearable />
    HTML;

    public const string STRIP_ZEROS = <<<'HTML'
    <x-input strip-zeros />
    HTML;

    public const string INVALIDATE = <<<'HTML'
    <x-input label="Name" invalidate />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('input')
        ->block('block', 'classes');
    HTML;
}
