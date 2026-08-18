<?php

declare(strict_types=1);

namespace App\Enums\Examples\Interactions;

class Dialog
{
    public const string TAG = <<<'HTML'
    <html>
        <body>
            <x-dialog /> <!-- [tl! highlight] -->

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
        $this->dialog()->success('...')->send();
        $this->dialog()->error('...')->send();
        $this->dialog()->warning('...')->send();
        $this->dialog()->info('...')->send();
    }
    HTML;

    public const string BASIC = <<<'HTML'
    $this->dialog()->success('Success', 'This is a success message.')->send();
    $this->dialog()->error('Error', 'This is an error message.')->send();
    $this->dialog()->warning('Warning', 'This is a warning message.')->send();
    $this->dialog()->info('Info', 'This is an info message.')->send();
    HTML;

    public const string CONFIRMATION = <<<'HTML'
    public function save(): void
    {
        $this->dialog()
            ->question('Warning!', 'Are you sure?')
            ->confirm('Confirm', 'confirmed', 'Confirmed Successfully')
            ->cancel('Cancel', 'cancelled', 'Cancelled Successfully')
            ->send();
    }

    public function confirmed(string $message): void
    {
        $this->dialog()->success('Success', $message)->send();
    }

    public function cancelled(string $message): void
    {
        $this->dialog()->error('Cancelled', $message)->send();
    }
    HTML;

    public const string CONFIRMATION_EXPLANATION = <<<'HTML'
    public function save(): void
    {
        // 1. The methods `confirm()` and `cancel()` are optional.
        $this->dialog()
            ->question('Warning!', 'Are you sure?')
            ->send();

        // 2. You can set only `confirm()` or `cancel()`.
        // If you set only one, the other will be set as default.
        $this->dialog()
            ->question('Warning!', 'Are you sure?')
            ->confirm('Confirm', 'confirmed', 'Confirmed Successfully')
            ->send();

        // 3. You can make `confirm()` and `cancel()`
        // as static buttons just by defining the text.
        $this->dialog()
            ->question('Warning!', 'Are you sure?')
            ->confirm('Confirm')
            ->cancel('Cancel')
            ->send();

        // 4. You can set only the method and parameters
        // to use the original text in the buttons.
        $this->dialog()
            ->question('Warning!', 'Are you sure?')
            ->confirm(method: 'confirmed', params: 'Confirmed Successfully')
            ->cancel(method: 'cancelled', params: 'Cancelled Successfully')
            ->send();

        // 5. You can ask for a confirmation with other Dialog types
        $this->dialog()
            ->success('Success!', 'Process completed successfully.')
            ->confirm('Undo', 'undo')
            ->cancel('Ok')
            ->send();
    }
    HTML;

    public const string EVENTS = <<<'HTML'
    <div x-on:dialog:accepted.window="alert($event.detail.description)"
         x-on:dialog:rejected.window="alert($event.detail.description)"
         x-on:dialog:dismissed.window="show($event.detail.description)">
        ...
    </div>
    HTML;

    public const string HOOKS = <<<'HTML'
    public function save(): void
    {
        $this->dialog()
            ->success('...')
            ->hook([
                // When using `success()`, `error()`, `warning()`, `info()` and pressing the OK button.
                'ok' => [
                    'method' => 'method',
                    // The parameters can be anything you want: arrays, strings, int.
                    'params' => ['param1', 'param2']
                ],
                // When close the dialog by clicking on the "x" button.
                'close' => [
                    'method' => 'method',
                    'params' => ['param1', 'param2']
                ],
                // When close the dialog by dismiss (clicking out of the dialog).
                'dismiss' => [
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
        $this->dialog()
            ->success('...')
            ->hook([
                'ok' => [
                    'method' => 'method',
                    'params' => fn () => ['param1', 'param2'] // [tl! highlight]
                ],
                'dismiss' => [
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
            show = () => $tsui.interaction('dialog')
                .success('Success', 'This is a success message.')
                .send();

            error = () => $tsui.interaction('dialog')
                .error('Error', 'This is an error message.')
                .send();

            warning = () => $tsui.interaction('dialog')
                .warning('Warning', 'This is a warning message.')
                .send();

            info = () => $tsui.interaction('dialog')
                .info('Info', 'This is an info message.')
                .send();

            // Confirm/cancel that call a Livewire method need the
            // component id, passed through `wireable()`.
            const component = Livewire.find('your-component-id-goes-here').id; // [tl! highlight]

            confirm = () => $tsui.interaction('dialog')
                .wireable(component) // [tl! highlight]
                .question('Warning', 'Are you sure?')
                .confirm('Confirm', 'confirmed', 'Confirmed Successfully')
                .cancel('Cancel', 'cancelled', 'Cancelled Successfully')
                .send();

            // Omit the id to target the first Livewire component on the page.

            confirm = () => $tsui.interaction('dialog')
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
            $this->dialog()
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

            $this->dialog() // [tl! highlight:2]
                ->success('...')
                ->send();
        }
    }
    HTML;

    public const string PERSISTENT = <<<'HTML'
    $this->dialog()
        ->success('Success', 'This is a success message.')
        ->persistent()
        ->send();
    HTML;

    public const string ENTER = <<<'PHP'
    // Enter closes it, like clicking OK
    $this->dialog()
        ->success('Saved!')
        ->send();

    // Enter runs the method, like clicking Yes
    $this->dialog()
        ->question('Delete?')
        ->confirm(title: 'Yes', method: 'delete')
        ->cancel()
        ->send();
    PHP;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->dialog()
        ->block('block', 'classes');
    HTML;
}
