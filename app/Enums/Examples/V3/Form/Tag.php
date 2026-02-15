<?php

namespace App\Enums\Examples\V3\Form;

class Tag
{
    public const BASIC = <<<'HTML'
    <x-tag />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-tag label="Frameworks" hint="Select your preferred frameworks" />
    HTML;

    public const LIMIT = <<<'HTML'
    <x-tag label="Frameworks" hint="Select your preferred frameworks" :limit="2" />
    HTML;

    public const PREFIX = <<<'HTML'
    <x-tag prefix="#" />
    HTML;

    public const EVENTS = <<<'HTML'
    <!--
    For the erase event the correct index is
    $event.detail.tags instead of $event.detail.tag
    -->

    <x-tag ...
           x-on:add="alert(`Introduced: ${$event.detail.tag}`)"
           x-on:remove="alert(`Removed: ${$event.detail.tag}`)"
           x-on:erase="alert(`Erased: ${$event.detail.tags}`)" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('tag')
        ->block('block', 'classes');
    HTML;
}
