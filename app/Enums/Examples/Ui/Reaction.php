<?php

namespace App\Enums\Examples\Ui;

class Reaction
{
    public const METHOD = <<<'HTML'
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

    public const USING_OTHER_METHOD_NAME = <<<'HTML'
    <x-reaction react-method="reacting" />
    HTML;

    public const BASIC = <<<'HTML'
    <x-reaction />
    HTML;

    public const ANIMATED = <<<'HTML'
    <x-reaction animated />
    HTML;

    public const POSITION = <<<'HTML'
    <!-- Accept all positions of Tooltip component -->
    
    <x-reaction position="top" />
    HTML;

    public const QUANTITY = <<<'HTML'
    <x-reaction :quantity="12" />
    HTML;

    public const QUANTITY_BIND = <<<'HTML'
    <!-- $quantity is an integer Livewire public property -->
    
    <x-reaction wire:model="quantity" :$quantity />
    HTML;

    public const ONLY = <<<'HTML'
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

    public const SLOT = <<<'HTML'
    <x-reaction>
        React to the TallStackUI
    </x-reaction>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->reaction()
        ->block('block', 'classes');
    HTML;
}
