<?php

namespace App\Enums\Examples\Form;

class Date
{
    public const BASIC = <<<'HTML'
    <x-date />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-date label="Date" hint="Select your DoB" />
    HTML;

    public const FORMATS = <<<'HTML'
    <x-date format="YYYY-MM-DD" />
    <x-date format="YYYY, MMMM, DD" />
    <x-date format="DD [of] MMMM [of] YYYY" />
    HTML;

    public const CREATE_FROM_FORMAT = <<<'HTML'
    $date = '20/02/2024'; // 20/02/2024
    
    $date = now()->createFromFormat('d/m/Y', $date)->format('Y-m-d');
    
    echo $date; // 2024-02-20
    HTML;

    public const HELPERS = <<<'HTML'
    <x-date helpers />
    HTML;

    public const MIN_MAX_DATES = <<<'HTML'
    <!-- You can use dates as strings or Carbon instances -->
    
    <x-date :min-date="now()->subWeek()" 
            :max-date="now()->addWeek()" />
    HTML;

    public const MIN_MAX_YEARS = <<<'HTML'
    <x-date :min-year="2020" :max-year="2024" />
    HTML;

    public const DISABLED = <<<'HTML'
    <!-- Simple Array -->
    <x-date :disable="['2020-01-01','2020-01-02','2020-01-03']" />
    
    <!-- Multiple Arrays -->
    <x-date :disable="[
        ['2020-01-01','2020-01-02','2020-01-03'],
        ['2020-01-04','2020-01-05','2020-01-06']
    ]" />

    <!-- Collection -->
    <x-date :disable="collect(['2020-01-01','2020-01-02','2020-01-03'])" />

    <!-- Carbon Interval-->
    <x-date :disable="\Carbon\CarbonInterval::days(1)->toPeriod(now(), now()->addWeek())->toArray()" />
    HTML;

    public const RANGE = <<<'HTML'
    <!-- 
    The Livewire property must be an array with two positions,
    the first one is the start date and the second one is the end date.
    
    Property:
    public array $date = ['2021-01-01', '2021-01-31'];
    
    Usage:
    <x-date range wire:model="date" />
    -->

    <x-date range />
    HTML;

    public const MULTIPLE = <<<'HTML'
    <!-- 
    The Livewire property must be an array with multiples dates.
    
    Property:
    public array $date = ['2021-01-01', '2021-01-02', '2021-01-03'];
    
    Usage:
    <x-date multiple wire:model="date" />
    -->
    
    <x-date multiple />
    HTML;

    public const EVENTS = <<<'HTML'
    <x-date x-on:select="alert(`Selected Date: ${$event.detail.date}`)" 
            x-on:clear="alert(`Cleaned!`)" />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-date invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('date')
        ->block('block', 'classes');
    HTML;
}
