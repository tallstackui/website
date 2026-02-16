<?php

namespace App\Enums\Examples\V1\Ui;

class Banner
{
    public const string INTRODUCTION = <<<'HTML'
    <html>
        <body>
            <x-banner /> {{-- [tl! highlight] --}}

            <!-- ... -->
        </body>
    </html>
    HTML;

    public const string TEXTS = <<<'HTML'
    <html>
        <body>
            <!-- Fixed text -->
            <x-banner text="Welcome to the TallStackUI!" />

            <!-- Random text -->
            <x-banner :text="['Welcome to the TallStackUI!', 'This is the TallStackUI']" />

            <!-- Random based on Collection -->
            <x-banner :text="collect(['Welcome to the TallStackUI!', 'This is the TallStackUI'])" />
        </body>
    </html>
    HTML;

    public const string SLOT = <<<'HTML'
    <html>
        <body>
            <x-banner text="Welcome to the TallStackUI!">
                <x-slot:left>
                    <x-icon name="check" />
                </x-slot:left>
            </x-banner>
        </body>
    </html>
    HTML;

    public const string CLOSE = <<<'HTML'
    <html>
        <body>
            <x-banner text="Welcome to the TallStackUI!" close />
        </body>
    </html>
    HTML;

    public const string ANIMATED = <<<'HTML'
    <html>
        <body>
            <!-- Default: entering in 3 seconds -->
            <x-banner text="Welcome to the TallStackUI!" animated />

            <!-- Entering in 2 seconds, leaving in 5 seconds -->
            <x-banner text="Welcome to the TallStackUI!" animated :enter="2" :leave="5" />

            <!-- Only leaving effect -->
            <x-banner text="Welcome to the TallStackUI!" animated :enter="null" :leave="5" />
        </body>
    </html>
    HTML;

    public const string DATES = <<<'HTML'
    <html>
        <body>
            <!-- String -->
            <x-banner text="Welcome to the TallStackUI!" until="2023-12-31" />

            <!-- Carbon instance -->
            <x-banner text="Welcome to the TallStackUI!" :until="now()->addDay()" />
        </body>
    </html>
    HTML;

    public const string SIZES = <<<'HTML'
    <html>
        <body>
            <!-- Allowed: sm, md, lg -->
            <x-banner text="Welcome to the TallStackUI!" size="lg" />
        </body>
    </html>
    HTML;

    public const string COLORS = <<<'HTML'
    <html>
        <body>
            <!-- All TailwindCSS colors -->
            <x-banner text="Welcome to the TallStackUI!" color="primary" />
            <x-banner text="Welcome to the TallStackUI!" color="secondary" />

            <!-- Light variation -->
            <x-banner text="Welcome to the TallStackUI!" color="primary" light />
            <x-banner text="Welcome to the TallStackUI!" color="secondary" light />

            <!-- Hexadecimal colors using TailwindCSS Arbitrary colors -->
            <x-banner text="Welcome to the TallStackUI!"
                      :color="[
                          'background' => 'bg-[#fde68a]',
                          'text' => 'text-[#1f2937]',
                      ]" />
        </body>
    </html>
    HTML;

    public const string LIVEWIRE = <<<'HTML'
    <html>
        <body>
            <x-banner wire />

            <!-- or -->

            <!-- Allowed: sm, md, lg -->
            <x-banner wire size="lg" />
        </body>
    </html>
    HTML;

    public const string TRAIT = <<<HTML
    use TallStackUi\Traits\Interactions; // [tl! highlight]

    class CreateUser extends Component
    {
        use Interactions; // [tl! highlight]

        // ...
    }
    HTML;

    public const string DISPATCH = <<<'HTML'
    public function save(): void
    {
        $this->banner()->success('...')->send();
        $this->banner()->error('...')->send();
        $this->banner()->warning('...')->send();
        $this->banner()->info('...')->send();
    }
    HTML;

    public const string OPTIONS = <<<'HTML'
    public function save(): void
    {
        $this->banner()
            ->close() // Add the close button
            ->success('...')
            ->send();

        $this->banner()
            ->enter(seconds: 3) // Enter in 3 seconds
            ->leave(seconds: 10) // Leave in 10 seconds
            ->success('...')
            ->send();

        $this->banner()
            ->leave(seconds: 10) // Controlling only the seconds to leave
            ->success('...')
            ->send();
    }
    HTML;

    public const string EXAMPLE = <<<'HTML'
    public function success(): void
    {
        $this->banner()
            ->close()
            ->success('This is a banner dispatched through Livewire. Will disappear in 5 seconds.')
            ->leave(5)
            ->send();
    }
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
            $this->banner()
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

            $this->banner() // [tl! highlight:5]
                ->success('...')
                ->close()
                ->enter(seconds: 3)
                ->leave(seconds: 10)
                ->send();
        }
    }
    HTML;

    public const string PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->banner()
        ->block('block', 'classes');
    HTML;
}
