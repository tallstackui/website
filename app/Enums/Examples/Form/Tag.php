<?php

namespace App\Enums\Examples\Form;

class Tag
{
    public const BASIC = <<<'HTML'
    <x-tag />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-tag label="Frameworks"
           hint="Select your preferred frameworks"
           :value="['Laravel', 'Symfony', 'CodeIgniter']" />
    HTML;

    public const LIMIT = <<<'HTML'
    <x-tag label="Frameworks"
           hint="Select your preferred frameworks"
           :limit="2"
           :value="['Laravel']" />
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
