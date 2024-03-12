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
        $this->toast()
            ->question('Warning!', 'Are you sure?')
            ->confirm('Confirm', 'confirmed', 'Confirmed Successfully')
            ->cancel('Cancel', 'cancelled', 'Cancelled Successfully')
            ->send();
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

    public const CONFIRMATION_EXPLANATION = <<<'HTML'
    public function save(): void
    {
        // 1. The methods `confirm()` and `cancel()` are optional.
        $this->toast()
            ->question('Warning!', 'Are you sure?')
            ->send();

        // 2. You can set only `confirm()` or `cancel()`.
        // Different than Dialog, only the defined button will be shown.
        $this->toast()
            ->question('Warning!', 'Are you sure?')
            ->confirm('Confirm', 'confirmed', 'Confirmed Successfully')
            ->send();

        // 3. You can make `confirm()` and `cancel()`
        // as static buttons just by defining the text.
        $this->toast()
            ->question('Warning!', 'Are you sure?')
            ->confirm('Confirm')
            ->cancel('Cancel')
            ->send();

        // 4. You can set only the method and parameters
        // to use the original text in the buttons.
        $this->toast()
            ->question('Warning!', 'Are you sure?')
            ->confirm(method: 'confirmed', params: 'Confirmed Successfully')
            ->cancel(method: 'cancelled', params: 'Cancelled Successfully')
            ->send();

        // 5. You can ask for a confirmation with other Toast types
        $this->toast()
            ->success('Success!', 'Process completed successfully.')
            ->confirm('Undo', 'undo')
            ->cancel('Ok')
            ->send();
    }
    HTML;

    public const TIME = <<<'HTML'
    $this->toast()
        ->timeout(seconds: 10)
        ->success('Success', 'This is a success message.')
        ->send();
    HTML;

    public const DEFAULT_TIME = <<<'HTML'
    // In config/tallstackui.php file
    'toast' => [
        // ...
        'timeout' => 10, // [tl! highlight]
    ],
    
    // Then use the timeout() method without parameters
    $this->toast()
        ->timeout() // [tl! highlight]
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
            show = () => $interaction('toast')
                .success('Success', 'This is a success message.')
                .send();

            error = () => $interaction('toast')
                .error('Success', 'This is a error message.')
                .send();

            warning = () => $interaction('toast')
                .warning('Success', 'This is a warning message.')
                .send();

            info = () => $interaction('toast')
                .info('Success', 'This is a info message.')
                .send();

            // To use confirmations the use and interact with methods of
            // a Livewire component, it is necessary to pass the id of
            // the component where the method is defined. You need to
            // do this by interacting with the `wireable()` method.

            const component = Livewire.find('your-component-id-goes-here').id; // [tl! highlight]

            confirm = () => $interaction('toast')
                .wireable(component) // [tl! highlight]
                .question('Warning', 'Are you sure?')
                .confirm('Confirm', 'confirmed', 'Confirmed Successfully')
                .cancel('Cancel', 'cancelled', 'Cancelled Successfully')
                .send();

            // Alternatively, you can pass the component id as an
            // empty string to use the FIRST LIVEWIRE COMPONENT OF THE PAGE.

            confirm = () => $interaction('toast')
                .wireable() // [tl! highlight]
                .question('Warning', 'Are you sure?')
                .confirm('Confirm', 'confirmed', 'Confirmed Successfully')
                .cancel('Cancel', 'cancelled', 'Cancelled Successfully')
                .send();
        </script>
    </div>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->toast()
        ->block('block', 'classes');
    HTML;
}
