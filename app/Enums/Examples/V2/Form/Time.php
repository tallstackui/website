<?php

namespace App\Enums\Examples\V2\Form;

class Time
{
    public const string BASIC = <<<'HTML'
    <x-time />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-time label="Time" hint="Select the hour" />
    HTML;

    public const string FORMATS = <<<'HTML'
    <!-- 12-hour format -->
    <x-time />

    <!-- 24-hour format -->
    <x-time format="24" />
    HTML;

    public const string MIN_MAX = <<<'HTML'
    <!-- Hours -->
    <x-time :min-hour="5" :max-hour="10" />

    <!-- Minutes -->
    <x-time :min-minute="30" :max-minute="45" />
    HTML;

    public const string REQUIRED = <<<'HTML'
    <x-time required />
    HTML;

    public const string HELPER = <<<'HTML'
    <x-time helper />
    HTML;

    public const string STEP = <<<'HTML'
    <x-time :step-hour="3" :step-minute="15" />
    HTML;

    public const string FOOTER_SLOT = <<<'HTML'
    <x-time>
        <x-slot:footer>
            Footer Slot
        </x-slot:footer>
    </x-time>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-time x-on:hour="alert(`Hour Selected: ${$event.detail.hour}`)"
            x-on:minute="alert(`Minute Selected: ${$event.detail.minute}`)"
            x-on:interval="alert(`Interval Changed: ${$event.detail.interval}`)"/>
    HTML;

    public const string PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('time')
        ->block('block', 'classes');
    HTML;
}
