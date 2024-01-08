<?php

namespace App\Enums\Examples\Ui;

class Toast
{
    public const TAG = <<<'HTML'
    <html>
        <body>
            <x-toast /> <!-- [tl! highlight] -->

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
        $this->toast()->success('...')->send();
        $this->toast()->error('...')->send();
        $this->toast()->warning('...')->send();
        $this->toast()->info('...')->send();
    }
    HTML;

    public const BASIC = <<<'HTML'
    $this->toast()->success('Success', 'This is a success message.')->send();
    $this->toast()->error('Error', 'This is an error message.')->send();
    $this->toast()->warning('Warning', 'This is a warning message.')->send();
    $this->toast()->info('Info', 'This is an info message.')->send();
    HTML;

    public const CONFIRMATION = <<<'HTML'
    public function save(): void
    {
        $this->toast()->confirm('Warning!', 'Are you sure?', [
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
        $this->toast()->success('Success', $message)->send();
    }

    public function cancelled(string $message): void
    {
        $this->toast()->error('Cancelled', $message)->send();
    }
    HTML;

    public const TIME = <<<'HTML'
    $this->toast()
        ->timeout(seconds: 10)
        ->success('Success', 'This is a success message.')
        ->send();
    HTML;

    public const EXPANDABLE = <<<'HTML'
    $this->toast()
        ->expandable()
        ->success('Success', 'When the description has more than 30 characters, the toast can be optionally expandable.')
        ->send();
    HTML;

    public const IGNORING_EXPANDABLE = <<<'HTML'
    // ...

    $this->toast()
        ->expandable(false) // [tl! highlight]
        ->success('Success', 'This Toast will not be expandable.')
        ->send();
    HTML;

    public const EVENTS = <<<'HTML'
    <!-- The listeners receive the toast object through $event.detail -->
    <div x-on:toast:accepted.window="alert($event.detail.description)"
         x-on:toast:rejected.window="alert($event.detail.description)"
         x-on:toast:timeout.window="alert($event.detail.description)">
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
            show = () => $toast('Success', 'This is a success message.').success();
            error = () => $toast('Success', 'This is a error message.').error();
            warning = () => $toast('Success', 'This is a warning message.').warning();
            info = () => $toast('Success', 'This is a info message.').info();

            // Confirmation

            // For use confirmations and interact with methods,
            // you need to pass the component id where the method is.

            const component = Livewire.find('your-component-id-goes-here').id; // [tl! highlight]

            confirm = () => $toast('Success', 'This is a info message.').confirm({
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

            confirm = () => $toast('Success', 'This is a info message.').confirm({
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
        ->toast()
        ->block('block', 'classes');
    HTML;
}
