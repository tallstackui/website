<?php

namespace App\Enums\Examples\Form;

class Tag
{
    public const BASIC = <<<'HTML'
    <x-tag />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-tag label="Frameworks"
           hint="Select your preferred frameworks" />
    HTML;

    public const LIMIT = <<<'HTML'
    <x-tag label="Frameworks"
           hint="Select your preferred frameworks"
           :limit="2" />
    HTML;

    public const PREFIX = <<<'HTML'
    <x-tag prefix="#" />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-tag invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('tag')
        ->block('block', 'classes');
    HTML;
}
