<?php

namespace App\Enums\Examples\Ui;

class Progress
{
    public const BASIC = <<<'HTML'
    <!-- As integer -->
    <x-progress :percent="50" />
    
    <!-- As string -->
    <x-progress percent="50.55" />
    HTML;

    public const STYLES = <<<'HTML'
    <x-progress :percent="50" />
    <x-progress :percent="50" title="Percentage" />
    <x-progress :percent="50" floating />
    HTML;

    public const WITHOUT_TEXT = <<<'HTML'
    <x-progress :percent="50" without-text />
    HTML;

    public const SIZES = <<<'HTML'
    <x-progress :percent="50" xs />
    <x-progress :percent="50" sm />
    <x-progress :percent="50" md />
    <x-progress :percent="50" lg />
    HTML;

    public const COLORS = <<<'HTML'
    <x-progress :percent="50" />
    <x-progress :percent="50" color="secondary" />
    <x-progress :percent="50" color="slate" />
    <x-progress :percent="50" color="gray" />
    <x-progress :percent="50" color="zinc" />
    <x-progress :percent="50" color="neutral" />
    <x-progress :percent="50" color="stone" />
    <x-progress :percent="50" color="red" />
    <x-progress :percent="50" color="orange" />
    <x-progress :percent="50" color="amber" />
    <x-progress :percent="50" color="yellow" />
    <x-progress :percent="50" color="lime" />
    <x-progress :percent="50" color="green" />
    <x-progress :percent="50" color="emerald" />
    <x-progress :percent="50" color="teal" />
    <x-progress :percent="50" color="cyan" />
    <x-progress :percent="50" color="sky" />
    <x-progress :percent="50" color="blue" />
    <x-progress :percent="50" color="indigo" />
    <x-progress :percent="50" color="violet" />
    <x-progress :percent="50" color="purple" />
    <x-progress :percent="50" color="fuchsia" />
    <x-progress :percent="50" color="pink" />
    <x-progress :percent="50" color="rose" />
    <x-progress :percent="50" color="black" />
    <x-progress :percent="50" color="white" />
    HTML;

    public const LIGHTS = <<<'HTML'
    <x-progress :percent="50" light />
    <x-progress :percent="50" color="secondary" light />
    <x-progress :percent="50" color="slate" light />
    <x-progress :percent="50" color="gray" light />
    <x-progress :percent="50" color="zinc" light />
    <x-progress :percent="50" color="neutral" light />
    <x-progress :percent="50" color="stone" light />
    <x-progress :percent="50" color="red" light />
    <x-progress :percent="50" color="orange" light />
    <x-progress :percent="50" color="amber" light />
    <x-progress :percent="50" color="yellow" light />
    <x-progress :percent="50" color="lime" light />
    <x-progress :percent="50" color="green" light />
    <x-progress :percent="50" color="emerald" light />
    <x-progress :percent="50" color="teal" light />
    <x-progress :percent="50" color="cyan" light />
    <x-progress :percent="50" color="sky" light />
    <x-progress :percent="50" color="blue" light />
    <x-progress :percent="50" color="indigo" light />
    <x-progress :percent="50" color="violet" light />
    <x-progress :percent="50" color="purple" light />
    <x-progress :percent="50" color="fuchsia" light />
    <x-progress :percent="50" color="pink" light />
    <x-progress :percent="50" color="rose" light />
    <x-progress :percent="50" color="black" light />
    <x-progress :percent="50" color="white" light />
    HTML;

    public const CIRCLE_BASIC = <<<'HTML'
    <!-- As integer -->
    <x-progress.circle :percent="50" />
    
    <!-- As string -->
    <x-progress.circle percent="50.55" />
    HTML;

    public const CIRCLE_STROKES = <<<'HTML'
    <x-progress.circle :percent="50" :stroke-circle="1" :stroke-percent="2" />
    HTML;

    public const CIRCLE_SIZES = <<<'HTML'
    <x-progress.circle :percent="50" xs />
    <x-progress.circle :percent="50" sm />
    <x-progress.circle :percent="50" md />
    <x-progress.circle :percent="50" lg />
    HTML;

    public const CIRCLE_COLORS = <<<'HTML'
    <x-progress.circle :percent="50" />
    <x-progress.circle :percent="50" color="secondary" />
    <x-progress.circle :percent="50" color="slate" />
    <x-progress.circle :percent="50" color="gray" />
    <x-progress.circle :percent="50" color="zinc" />
    <x-progress.circle :percent="50" color="neutral" />
    <x-progress.circle :percent="50" color="stone" />
    <x-progress.circle :percent="50" color="red" />
    <x-progress.circle :percent="50" color="orange" />
    <x-progress.circle :percent="50" color="amber" />
    <x-progress.circle :percent="50" color="yellow" />
    <x-progress.circle :percent="50" color="lime" />
    <x-progress.circle :percent="50" color="green" />
    <x-progress.circle :percent="50" color="emerald" />
    <x-progress.circle :percent="50" color="teal" />
    <x-progress.circle :percent="50" color="cyan" />
    <x-progress.circle :percent="50" color="sky" />
    <x-progress.circle :percent="50" color="blue" />
    <x-progress.circle :percent="50" color="indigo" />
    <x-progress.circle :percent="50" color="violet" />
    <x-progress.circle :percent="50" color="purple" />
    <x-progress.circle :percent="50" color="fuchsia" />
    <x-progress.circle :percent="50" color="pink" />
    <x-progress.circle :percent="50" color="rose" />
    <x-progress.circle :percent="50" color="black" />
    <x-progress.circle :percent="50" color="white" />
    HTML;

    public const CIRCLE_LIGHTS = <<<'HTML'
    <x-progress.circle :percent="50" light />
    <x-progress.circle :percent="50" color="secondary" light />
    <x-progress.circle :percent="50" color="slate" light />
    <x-progress.circle :percent="50" color="gray" light />
    <x-progress.circle :percent="50" color="zinc" light />
    <x-progress.circle :percent="50" color="neutral" light />
    <x-progress.circle :percent="50" color="stone" light />
    <x-progress.circle :percent="50" color="red" light />
    <x-progress.circle :percent="50" color="orange" light />
    <x-progress.circle :percent="50" color="amber" light />
    <x-progress.circle :percent="50" color="yellow" light />
    <x-progress.circle :percent="50" color="lime" light />
    <x-progress.circle :percent="50" color="green" light />
    <x-progress.circle :percent="50" color="emerald" light />
    <x-progress.circle :percent="50" color="teal" light />
    <x-progress.circle :percent="50" color="cyan" light />
    <x-progress.circle :percent="50" color="sky" light />
    <x-progress.circle :percent="50" color="blue" light />
    <x-progress.circle :percent="50" color="indigo" light />
    <x-progress.circle :percent="50" color="violet" light />
    <x-progress.circle :percent="50" color="purple" light />
    <x-progress.circle :percent="50" color="fuchsia" light />
    <x-progress.circle :percent="50" color="pink" light />
    <x-progress.circle :percent="50" color="rose" light />
    <x-progress.circle :percent="50" color="black" light />
    <x-progress.circle :percent="50" color="white" light />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->progress()
        ->block('block', 'classes');

    TallStackUi::personalize()
        ->progress('circle')
        ->block('block', 'classes');
    HTML;
}
