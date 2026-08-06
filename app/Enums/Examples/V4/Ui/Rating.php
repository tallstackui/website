<?php

namespace App\Enums\Examples\V4\Ui;

class Rating
{
    public const string PHP = <<<'HTML'
    use Livewire\Component;
    use Illuminate\Contracts\View\View;

    class Profile extends Component
    {
        public $rate = 2;

        public function render(): View
        {
            return view('livewire.profile');
        }

        public function evaluate(int $quantity): void
        {
            //
        }
    }
    HTML;

    public const string BLADE = <<<'HTML'
    <x-rating wire:model="rate" />
    HTML;

    public const string METHOD = <<<'HTML'
    <x-rating wire:model="rate" evaluate-method="evaluating" />
    HTML;

    public const string NORMAL = <<<'HTML'
    <x-rating :$rate />

    <!-- The "static" parameter disable
    the click effect on the starts -->
    <x-rating :$rate static />
    HTML;

    public const string BASIC = <<<'HTML'
    <x-rating :rate="3" />
    HTML;

    public const string QUANTITY = <<<'HTML'
    <x-rating :rate="1" :quantity="3" />
    HTML;

    public const string LABEL = <<<'HTML'
    <x-rating :rate="3" text="TALL" position="right" />

    <x-rating :rate="3" text="LIVT" />

    <!-- Or -->

    <x-rating :rate="3">
        TALL
    </x-rating>

    <x-rating :rate="3" position="right">
        TALL
    </x-rating>
    HTML;

    public const string SIZE = <<<'HTML'
    <x-rating :rate="3" xs />
    <x-rating :rate="3" sm />
    <x-rating :rate="3" md />
    <x-rating :rate="3" lg />
    HTML;

    public const string COLOR = <<<'HTML'
    <x-rating :rate="3" />
    <x-rating :rate="3" color="secondary" />
    <x-rating :rate="3" color="slate" />
    <x-rating :rate="3" color="gray" />
    <x-rating :rate="3" color="zinc" />
    <x-rating :rate="3" color="neutral" />
    <x-rating :rate="3" color="stone" />
    <x-rating :rate="3" color="red" />
    <x-rating :rate="3" color="orange" />
    <x-rating :rate="3" color="amber" />
    <x-rating :rate="3" color="yellow" />
    <x-rating :rate="3" color="lime" />
    <x-rating :rate="3" color="green" />
    <x-rating :rate="3" color="emerald" />
    <x-rating :rate="3" color="teal" />
    <x-rating :rate="3" color="cyan" />
    <x-rating :rate="3" color="sky" />
    <x-rating :rate="3" color="blue" />
    <x-rating :rate="3" color="indigo" />
    <x-rating :rate="3" color="violet" />
    <x-rating :rate="3" color="purple" />
    <x-rating :rate="3" color="fuchsia" />
    <x-rating :rate="3" color="pink" />
    <x-rating :rate="3" color="rose" />
    <x-rating :rate="3" color="mauve" />
    <x-rating :rate="3" color="olive" />
    <x-rating :rate="3" color="mist" />
    <x-rating :rate="3" color="taupe" />
    <x-rating :rate="3" color="black" />
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-rating :rate="3" x-on:evaluate="alert(`Evaluated: ${JSON.stringify($event.detail.evaluate)}`)" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->rating()
        ->block('block', 'classes');
    HTML;
}
