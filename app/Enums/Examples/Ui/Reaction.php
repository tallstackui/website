<?php

namespace App\Enums\Examples\Ui;

class Reaction
{
    public const string METHOD = <<<'HTML'
    use Livewire\Component;

    class MyComponent extends Component
    {
        public function react(string $reaction) // [tl! highlight]
        {
            // Your logic here...

            // $reaction will be thumbs-up, thumbs-down, the emoji name.
        }
    }
    HTML;

    public const string USING_OTHER_METHOD_NAME = <<<'HTML'
    <x-reaction react-method="reacting" />
    HTML;

    public const string BASIC = <<<'HTML'
    <x-reaction />
    HTML;

    public const string ANIMATED = <<<'HTML'
    <x-reaction animated />
    HTML;

    public const string POSITION = <<<'HTML'
    <!-- Accept all positions of Tooltip component -->

    <x-reaction position="top" />
    HTML;

    public const string QUANTITY = <<<'HTML'
    <x-reaction :quantity="12" />
    HTML;

    public const string QUANTITY_BIND = <<<'HTML'
    <!-- $quantity is an integer Livewire public property -->

    <x-reaction wire:model="quantity" :$quantity />
    HTML;

    public const string ONLY = <<<'HTML'
    <!-- Available:

        'smile',
        'laugh',
        'love',
        'screaming',
        'rage',
        'pray',
        'thumbs-up',
        'thumbs-down',
        'heart',
        'broken-heart',
        'clap',
        'rocket',
        'fire',
        'mind-blown',
        'sick',
        'poop',
        'eyes',
        'party-popper',
        'clown',
        'check-mark' -->

    <x-reaction :only="['thumbs-up', 'thumbs-down', 'heart']" />
    HTML;

    public const string SLOT = <<<'HTML'
    <x-reaction>
        React to the TallStackUI
    </x-reaction>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-reaction x-on:react="alert(`Reacted: ${$event.detail.reaction.reaction}`)" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->reaction()
        ->block('block', 'classes');
    HTML;
}
