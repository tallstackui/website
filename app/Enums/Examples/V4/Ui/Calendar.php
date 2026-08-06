<?php

namespace App\Enums\Examples\V4\Ui;

class Calendar
{
    public const string BASIC = <<<'HTML'
    <x-calendar />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-calendar label="Pick a date" hint="Format: YYYY-MM-DD" />
    HTML;

    public const string RANGE = <<<'HTML'
    <!--
    The Livewire property must be an array with two positions,
    the first one is the start date and the second one is the end date.

    Property:
    public array $date = ['2026-04-01', '2026-04-15'];

    Usage:
    <x-calendar range wire:model="date" />
    -->

    <x-calendar range />
    HTML;

    public const string DOUBLE = <<<'HTML'
    <!--
    Renders two months side-by-side. Both calendars share the same month/year state —
    navigating with the primary's prev/next arrows advances both. The secondary always
    shows `primary_month + 1` (rolling year on December). Below the `sm` breakpoint the
    secondary panel hides automatically. Only valid with `range`.
    -->

    <x-calendar range double /> {{-- [tl! highlight] --}}
    HTML;

    public const string MULTIPLE = <<<'HTML'
    <!--
    The Livewire property must be an array with multiple dates.

    Property:
    public array $dates = ['2026-04-01', '2026-04-05', '2026-04-10'];

    Usage:
    <x-calendar multiple wire:model="dates" />
    -->

    <x-calendar multiple />
    HTML;

    public const string LOCK_MONTH_YEAR = <<<'HTML'
    <!--
    The month and year header buttons no longer open the floating month/year pickers.
    Day selection and prev/next month navigation continue to work. Useful when the
    displayed period must stay fixed.
    -->

    <x-calendar lock-month-year /> {{-- [tl! highlight] --}}

    <!-- Combined with constraints, locks selection to a fixed period -->
    <x-calendar lock-month-year
                min-date="2026-04-01"
                max-date="2026-04-30" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->calendar()
        ->block('block', 'classes');
    HTML;
}
