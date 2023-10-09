<?php

namespace App\Enums\Examples\Ui;

class Toast
{
    public const TAG = <<<'HTML'
    <html>
        <body>
            <x-toast />
        </body>
    </html>
    HTML;

    public const TRAIT = <<<HTML
    use TallStackUi\Traits\Interactions; // [tl! highlight]

    class CreateUser extends Component
    {
        use Interactions; // [tl! highlight]

        // ...
    }
    HTML;

    public const DISPATCH = <<<'HTML'
    public function save(): void
    {
        $this->toast()->success('...');
        $this->toast()->error('...');
        $this->toast()->warning('...');
        $this->toast()->info('...');
    }
    HTML;

    public const BASIC = <<<'HTML'
    $this->toast()->success('Success', 'This is a success message.');
    $this->toast()->error('Error', 'This is an error message.');
    $this->toast()->warning('Warning', 'This is a warning message.');
    $this->toast()->info('Info', 'This is an info message.');
    HTML;

    public const CONFIRMATION = <<<'HTML'
    use Livewire\Attributes\On;

    public function save(): void
    {
        $this->toast()->confirm('Warning!', 'Are you sure?', [
            'confirm' => [
                'text' => 'Confirm',
                'event' => 'confirmed',
                'params' => 'Confirmed Successfully' // string or array
            ],
            'cancel' => [
                'text' => 'Cancel',
                'event' => 'cancelled',
                'params' => 'Cancelled Successfully' // string or array
            ]
        ]);
    }

    #[On('confirmed')]
    public function confirmed(string $message): void
    {
        $this->toast()->success('Success', $message);
    }

    #[On('cancelled')]
    public function cancelled(string $message): void
    {
        $this->toast()->error('Cancelled', $message);
    }
    HTML;

    public const TIME = <<<'HTML'
    $this->toast()
        ->timeout(seconds: 10)
        ->success('Success', 'This is a success message.');
    HTML;

    public const Z_INDEX = <<<'HTML'
    <x-toast z-index="z-50" />
    HTML;

    public const POSITIONS = <<<'HTML'
    <x-toast position="top-right" />
    <x-toast position="top-left" />
    <x-toast position="bottom-left" />
    <x-toast position="bottom-right" />
    HTML;
}
