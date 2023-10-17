<?php

namespace App\Enums\Examples\Ui;

class Dialog
{
    public const TAG = <<<'HTML'
    <html>
        <body>
            <x-dialog />
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
        $this->dialog()->success('...');
        $this->dialog()->error('...');
        $this->dialog()->warning('...');
        $this->dialog()->info('...');
    }
    HTML;

    public const BASIC = <<<'HTML'
    $this->dialog()->success('Success', 'This is a success message.');
    $this->dialog()->error('Error', 'This is an error message.');
    $this->dialog()->warning('Warning', 'This is a warning message.');
    $this->dialog()->info('Info', 'This is an info message.');
    HTML;

    public const CONFIRMATION = <<<'HTML'
    public function save(): void
    {
        $this->dialog()->confirm('Warning!', 'Are you sure?', [
            'confirm' => [
                'text' => 'Confirm',
                'method' => 'confirmed',
                'params' => 'Confirmed Successfully' // Can be a string or array
            ],
            /* Cancel is optional */
            'cancel' => [
                'text' => 'Cancel',
                'method' => 'cancelled',
                'params' => 'Cancelled Successfully' // Can be a string or array
            ]
        ]);
    }

    public function confirmed(string $message): void
    {
        $this->dialog()->success('Success', $message);
    }

    public function cancelled(string $message): void
    {
        $this->dialog()->error('Cancelled', $message);
    }
    HTML;

    public const Z_INDEX = <<<'HTML'
    <x-dialog z-index="z-50" />
    HTML;

    public const BLUR = <<<'HTML'
    <x-dialog blur />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->dialog()
        ->block('block', 'classes');
    HTML;
}
