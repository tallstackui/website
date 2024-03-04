<?php

namespace App\Enums\Examples\Form;

class Time
{
    public const BASIC = <<<'HTML'
    <x-time />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-time label="Time" hint="Select the hour" />
    HTML;

    public const FORMATS = <<<'HTML'
    <!-- 12-hour format -->
    <x-time />
    
    <!-- 24-hour format -->
    <x-time format="24" />
    HTML;

    public const MIN_MAX = <<<'HTML'
    <!-- Hours -->
    <x-time :min-hour="5" :max-hour="10" />
    
    <!-- Minutes -->
    <x-time :min-minute="30" :max-minute="45" />
    HTML;

    public const HELPER = <<<'HTML'
    <x-time helper />
    HTML;

    public const STEP = <<<'HTML'
    <x-time :step-hour="3" :step-minute="15" />
    HTML;

    public const FOOTER_SLOT = <<<'HTML'
    <x-time>
        <x-slot:footer>
            Footer Slot
        </x-slot:footer>
    </x-time>
    HTML;

    public const EVENTS = <<<'HTML'
    <x-time x-on:hour="alert(`Hour Selected: ${$event.detail.hour}`)"
            x-on:minute="alert(`Minute Selected: ${$event.detail.minute}`)"
            x-on:interval="alert(`Interval Changed: ${$event.detail.interval}`)"/>
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-time invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('time')
        ->block('block', 'classes');
    HTML;
}
