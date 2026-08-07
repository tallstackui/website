<?php

namespace App\Enums\Examples\Ui;

class Dial
{
    public const string BASIC = <<<'HTML'
    <x-dial>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
        <x-dial.items icon="trash" label="Delete" />
    </x-dial>
    HTML;

    public const string POSITIONS = <<<'HTML'
    <!-- Available Positions:
         top-left,
         top-right,
         bottom-left,
         bottom-right (default)
     -->

    <x-dial position="top-left">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
    HTML;

    public const string HORIZONTAL = <<<'HTML'
    <x-dial horizontal>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
        <x-dial.items icon="trash" label="Delete" />
    </x-dial>
    HTML;

    public const string HOVER = <<<'HTML'
    <x-dial hover>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
    HTML;

    public const string LABELS = <<<'HTML'
    <x-dial>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
        <x-dial.items icon="document-duplicate" label="Copy" />
        <x-dial.items icon="trash" label="Delete" />
    </x-dial>
    HTML;

    public const string WITHOUT_TOOLTIP = <<<'HTML'
    <x-dial without-tooltip>
        <x-dial.items icon="pencil" />
        <x-dial.items icon="share" />
        <x-dial.items icon="trash" />
    </x-dial>
    HTML;

    public const string ICON = <<<'HTML'
    <x-dial icon="bars-4">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
    HTML;

    public const string PREVENT_ROTATE = <<<'HTML'
    <x-dial icon="bars-3" prevent-rotate>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
    HTML;

    public const string SQUARE = <<<'HTML'
    <x-dial square>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
        <x-dial.items icon="trash" label="Delete" />
    </x-dial>
    HTML;

    public const string LINKS = <<<'HTML'
    <x-dial>
        <x-dial.items icon="pencil" label="Edit" href="/posts/1/edit" />
        <x-dial.items icon="eye" label="View" href="/posts/1" />
    </x-dial>
    HTML;

    public const string LINKS_NAVIGATE = <<<'HTML'
    <x-dial>
        <x-dial.items icon="pencil" label="Edit" href="/posts/1/edit" navigate />
        <x-dial.items icon="eye" label="View" href="/posts/1" navigate-hover />
    </x-dial>
    HTML;

    public const string SIZES = <<<'HTML'
    <x-dial xs>...</x-dial>
    <x-dial sm>...</x-dial>
    <x-dial>...</x-dial> {{-- md (default) --}}
    <x-dial lg>...</x-dial>
    HTML;

    public const string COLORS = <<<'HTML'
    <x-dial color="red">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>

    <x-dial color="emerald">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
    HTML;

    public const string ITEM_COLORS = <<<'HTML'
    <x-dial>
        <x-dial.items icon="pencil" label="Edit" color="blue" />
        <x-dial.items icon="share" label="Share" color="green" style="light" />
        <x-dial.items icon="trash" label="Delete" color="red" style="outline" />
        <x-dial.items icon="star" label="Favorite" />
    </x-dial>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->dial()
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_ITEMS = <<<'HTML'
    TallStackUi::customize()
        ->dial('items')
        ->block('block', 'classes');
    HTML;
}
