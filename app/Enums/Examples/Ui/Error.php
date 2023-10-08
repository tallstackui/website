<?php

namespace App\Enums\Examples\Ui;

class Error
{
    public const BASIC = <<<'HTML'
    <x-errors />
    HTML;

    public const SPECIFIC = <<<'HTML'
    <x-errors only="name" />

    <!-- use array for more than one -->

    <x-errors :only="['name', 'description']" />
    HTML;

    public const CUSTOMIZED = <<<'HTML'
    <x-errors title="Ops! There are :count validation errors:" />
    HTML;

    public const PULSE = <<<'HTML'
    <x-errors pulse />
    HTML;

    public const COLORS = <<<'HTML'
    <x-errors />
    <x-errors color="secondary" />
    <x-errors color="white" />
    <x-errors color="black" />
    <x-errors color="slate" />
    <x-errors color="gray" />
    <x-errors color="zinc" />
    <x-errors color="neutral" />
    <x-errors color="stone" />
    <x-errors color="red" />
    <x-errors color="orange" />
    <x-errors color="amber" />
    <x-errors color="yellow" />
    <x-errors color="lime" />
    <x-errors color="green" />
    <x-errors color="emerald" />
    <x-errors color="teal" />
    <x-errors color="cyan" />
    <x-errors color="sky" />
    <x-errors color="blue" />
    <x-errors color="indigo" />
    <x-errors color="violet" />
    <x-errors color="purple" />
    <x-errors color="fuchsia" />
    <x-errors color="pink" />
    HTML;
}
