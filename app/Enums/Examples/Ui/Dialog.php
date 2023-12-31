<?php

namespace App\Enums\Examples\Ui;

class Dialog
{
    public const TAG = <<<'HTML'
    <html>
        <body>
            <x-dialog /> <!-- [tl! highlight] -->

            <!--... -->
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
            // Cancel is optional and when not defined
            // the cancel button will not be displayed.
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

    public const EVENTS = <<<'HTML'
    <!-- The listeners receive the dialog object through $event.detail -->
    <div x-on:dialog:accepted.window="alert($event.detail.description)"
         x-on:dialog:rejected.window="alert($event.detail.description)">
        ...
    </div>
    HTML;

    public const JAVASCRIPT = <<<'HTML'
    <div>
        <x-button color="green" onclick="show()">Success</x-button>
        <x-button color="red" onclick="error()">Error</x-button>
        <x-button color="yellow" onclick="warning()">Warning</x-button>
        <x-button color="info" onclick="info()">Info</x-button>
        <x-button color="secondary" onclick="confirm()">Confirmation</x-button>

        <script>
            show = () => $dialog('Success', 'This is a success message.').success();
            error = () => $dialog('Success', 'This is a error message.').error();
            warning = () => $dialog('Success', 'This is a warning message.').warning();
            info = () => $dialog('Success', 'This is a info message.').info();

            // Confirmation

            // For use confirmations and interact with methods,
            // you need to pass the component id where the method is.

            const component = Livewire.find('your-component-id-goes-here').id; // [tl! highlight]

            confirm = () => $dialog('Success', 'This is a info message.').confirm({
                confirm: {
                    text: 'Confirm',
                    method: 'confirmed',
                    params: 'Confirmed Successfully'
                },
                cancel: {
                    text: 'Cancel',
                    method: 'cancelled',
                    params: 'Cancelled Successfully'
                }
            }, component); // [tl! highlight]

            // Alternatively, you can pass the component id as an
            // empty string to use the FIRST LIVEWIRE COMPONENT OF THIS PAGE.

            confirm = () => $dialog('Success', 'This is a info message.').confirm({
                confirm: {
                    text: 'Confirm',
                    method: 'confirmed',
                    params: 'Confirmed Successfully'
                },
                cancel: {
                    text: 'Cancel',
                    method: 'cancelled',
                    params: 'Cancelled Successfully'
                }
            }, ''); // [tl! highlight]
        </script>
    </div>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->dialog()
        ->block('block', 'classes');
    HTML;
}
