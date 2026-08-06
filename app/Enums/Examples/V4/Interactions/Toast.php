<?php

namespace App\Enums\Examples\V4\Interactions;

class Toast
{
    public const string TAG = <<<'HTML'
    <html>
        <body>
            <x-toast /> <!-- [tl! highlight] -->

            <!--... -->
        </body>
    </html>
    HTML;

    public const string TRAIT = <<<HTML
    use TallStackUi\Traits\Interactions; // [tl! focus]

    class CreateUser extends Component
    {
        use Interactions; // [tl! focus]

        // ...
    }
    HTML;

    public const string DISPATCH = <<<'HTML'
    public function save(): void
    {
        $this->toast()->success('...')->send();
        $this->toast()->error('...')->send();
        $this->toast()->warning('...')->send();
        $this->toast()->info('...')->send();
    }
    HTML;

    public const string BASIC = <<<'HTML'
    $this->toast()->success('Success', 'This is a success message.')->send();
    $this->toast()->error('Error', 'This is an error message.')->send();
    $this->toast()->warning('Warning', 'This is a warning message.')->send();
    $this->toast()->info('Info', 'This is an info message.')->send();
    HTML;

    public const string CONFIRMATION = <<<'HTML'
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

    public const string CONFIRMATION_EXPLANATION = <<<'HTML'
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

    public const string TIME = <<<'HTML'
    $this->toast()
        ->timeout(seconds: 10)
        ->success('Success', 'This is a success message.')
        ->send();
    HTML;

    public const string DEFAULT_TIME = <<<'HTML'
    // ...

    'toast' => [
        Components\Toast\Component::class,
        [
            /*
            |----------------------------------------------------------------------
            | Toast Global Settings
            |----------------------------------------------------------------------
            |
            | z-index: controls the default z-index.
            | progress: enables the progress bar.
            | expandable: enables the expanded effect by default.
            | position: controls the default toast position (Allowed: top-right, top-left, bottom-right, bottom-left).
            | timeout: controls the default timeout in seconds.
            */
            'z-index' => 'z-50',
            'progress' => true,
            'expandable' => false,
            'position' => 'top-right',
            'timeout' => 10, // [tl! highlight]
        ],
    ],

    // ...
    HTML;

    public const string DEFAULT_TIME_USAGE = <<<'HTML'
    $this->toast()
        ->timeout() // [tl! highlight]
        ->success('Success', 'This is a success message.')
        ->send();
    HTML;

    public const string PERSISTENT = <<<'HTML'
    $this->toast()
        ->persistent()
        ->success('Success', 'This is a persistent toast.')
        ->send();
    HTML;

    public const string EXPANDABLE = <<<'HTML'
    $this->toast()
        ->expandable()
        ->success('Success', 'When the description has more than 30 characters, the toast can be optionally expandable.')
        ->send();
    HTML;

    public const string POSITION = <<<'HTML'
    /* Available positions: top-left, top-right, bottom-left, bottom-right */

    $this->toast()
        ->position('top-left') // [tl! highlight]
        ->success('Success', 'This is a success message.')
        ->send();
    HTML;

    public const string SOLE = <<<'HTML'
    $this->toast()
        ->sole() // [tl! highlight]
        ->success('Success', 'This is a success message.')
        ->send();
    HTML;

    public const string IGNORING_EXPANDABLE = <<<'HTML'
    $this->toast()
        ->expandable(false) // [tl! highlight]
        ->success('Success', 'This Toast will not be expandable.')
        ->send();
    HTML;

    public const string EVENTS = <<<'HTML'
    <div x-on:toast:accepted.window="alert($event.detail.description)"
         x-on:toast:rejected.window="alert($event.detail.description)"
         x-on:toast:timeout.window="alert($event.detail.description)">
        ...
    </div>
    HTML;

    public const string HOOKS = <<<'HTML'
    public function save(): void
    {
        $this->toast()
            ->success('...')
            ->hook([
                // When close the toast by clicking on the "x" button.
                'close' => [
                    'method' => 'method',
                    // The parameters can be anything you want: arrays, strings, int.
                    'params' => ['param1', 'param2']
                ],
                // When the toast is automatically closed by the timeout.
                'timeout' => [
                    'method' => 'method',
                    'params' => ['param1', 'param2']
                ],
            ])
            ->send();
    }
    HTML;

    public const string HOOKS_CALLABLE = <<<'HTML'
    public function save(): void
    {
        $this->toast()
            ->success('...')
            ->hook([
                'close' => [
                    'method' => 'method',
                    'params' => fn () => ['param1', 'param2'] // [tl! highlight]
                ],
                'timeout' => [
                    'method' => 'method',
                    'params' => function () { // [tl! highlight:2]
                        return ['param1', 'param2'];
                    }
                ],
            ])
            ->send();
    }
    HTML;

    public const string JAVASCRIPT = <<<'HTML'
    <div>
        <x-button color="green" onclick="show()">Success</x-button>
        <x-button color="red" onclick="error()">Error</x-button>
        <x-button color="yellow" onclick="warning()">Warning</x-button>
        <x-button color="info" onclick="info()">Info</x-button>
        <x-button color="secondary" onclick="confirm()">Confirmation</x-button>

        <script>
            show = () => $tsui.interaction('toast')
                .success('Success', 'This is a success message.')
                .send();

            error = () => $tsui.interaction('toast')
                .error('Success', 'This is a error message.')
                .send();

            warning = () => $tsui.interaction('toast')
                .warning('Success', 'This is a warning message.')
                .send();

            info = () => $tsui.interaction('toast')
                .info('Success', 'This is a info message.')
                .send();

            // To use confirmations the use and interact with methods of
            // a Livewire component, it is necessary to pass the id of
            // the component where the method is defined. You need to
            // do this by interacting with the `wireable()` method.

            const component = Livewire.find('your-component-id-goes-here').id; // [tl! highlight]

            confirm = () => $tsui.interaction('toast')
                .wireable(component) // [tl! highlight]
                .question('Warning', 'Are you sure?')
                .confirm('Confirm', 'confirmed', 'Confirmed Successfully')
                .cancel('Cancel', 'cancelled', 'Cancelled Successfully')
                .send();

            // Alternatively, you can pass the component id as an
            // empty string to use the FIRST LIVEWIRE COMPONENT OF THE PAGE.

            confirm = () => $tsui.interaction('toast')
                .wireable() // [tl! highlight]
                .question('Warning', 'Are you sure?')
                .confirm('Confirm', 'confirmed', 'Confirmed Successfully')
                .cancel('Cancel', 'cancelled', 'Cancelled Successfully')
                .send();
        </script>
    </div>
    HTML;

    public const string FLASH = <<<'HTML'
    use Illuminate\Contracts\View\View;
    use Livewire\Component;
    use TallStackUi\Traits\Interactions;

    class Payment extends Component
    {
        use Interactions;

        public function render(): View
        {
            return view('livewire.livewire');
        }

        public function save()
        {
            $this->toast()
                ->success('Done!', 'Your money has been sent!')
                ->flash() // [tl! highlight]
                ->send();

            return $this->redirect(route('dashboard'));
        }
    }
    HTML;

    public const string CONTROLLERS = <<<'HTML'
    use Illuminate\Http\Request;
    use TallStackUi\Traits\Interactions;

    class PaymentController extends Controller
    {
        use Interactions; // [tl! highlight]

        public function index()
        {
            return view('payment.index', [
                //
            ]);
        }

        public function update(Request $request)
        {
            // ...

            $this->toast() // [tl! highlight:2]
                ->success('...')
                ->send();
        }
    }
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->toast()
        ->block('block', 'classes');
    HTML;
}
