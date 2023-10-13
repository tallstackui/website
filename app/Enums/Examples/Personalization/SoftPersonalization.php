<?php

namespace App\Enums\Examples\Personalization;

class SoftPersonalization
{
    public const EXAMPLE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('base', 'w-full rounded-full');

            // or...

           TallStackUi::personalize('form.input')
               ->block('base', 'w-full rounded-full');
        }
    }
    HTML;

    public const PEST = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('base', 'w-full rounded-full')
               ->and // [tl! highlight]
               ->avatar()
               ->block('content', 'w-8')

           // or...

           TallStackUi::personalize()
               ->form('input')
               ->block('base', 'w-full rounded-full')
               ->and() // [tl! highlight]
               ->avatar()
               ->block('content', 'w-8')
        }
    }
    HTML;

    public const INVOKABLE_EXAMPLE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;
    use App\TallStackUi\InputPersonalization; // [tl! highlight]

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('base', new InputPersonalization()); // [tl! highlight]
        }
    }
    HTML;

    public const INVOKABLE_CLASS = <<<'HTML'
    namespace App\TallStackUi;

    use TallStackUi\Contracts\Personalizable; // [tl! highlight]

    class InputPersonalization implements Personalizable // [tl! highlight]
    {
        public function __invoke(array $data): string
        {
            return 'w-full rounded-full';
        }
    }
    HTML;

    public const USING_COMPONENT = <<<'HTML'
    <x-input label="Name" hint="Your full name" />
    HTML;

    public const DATA = <<<'HTML'
    [
        "id" => null
        "label" => "Name"
        "hint" => "Your full name"
        "icon" => null
        "position" => "left"
        "square" => false
        "round" => false
        "validate" => true
        "componentName" => "input"
        "attributes" => \Illuminate\View\ComponentAttributeBag
        "customization" => \Illuminate\View\InvokableComponentVariable
        "tallStackUiClasses" => \Illuminate\View\InvokableComponentVariable
        "slot" => \Illuminate\View\ComponentSlot
        "__laravel_slots" => [...]
    ]
    HTML;

    public const WAYS = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;
    use App\TallStackUi\InputIconPersonzaliation;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('base', 'w-full rounded-full')
               ->block('icon.wrapper', fn (array $data) => 'pointer-events-none absolute')
               ->block('icon.size', 'h-10 w-10');

           // or ...

            TallStackUi::personalize()
               ->form('input')
               ->block([
                    'base' => 'w-full rounded-full',
                    'icon.wrapper' => fn (array $data) => 'pointer-events-none absolute',
                    'icon.size' => new InputIconPersonzaliation(),
               ]);
        }
    }
    HTML;

    public const TAILWINDCSS = <<<'HTML'
    content: [
        // ...

        './app/Providers/AppServiceProvider.php',

        // or if you are using invokable classes...

        './app/TallStackUi/**/*.php',
    ],
    HTML;

    public const REAL_EXAMPLE = <<<'HTML'
    use Illuminate\Support\Arr;
    use TallStackUi\Facades\TallStackUi;

    public function boot(): void
    {
        //...

        TallStackUi::personalize()
            ->button()
            ->block('wrapper', function (array $data) {
                return Arr::toCssClasses([
                    'outline-none inline-flex justify-center items-center group ease-in font-semibold transition',
                    'focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-50 disabled:cursor-not-allowed',
                    'gap-x-2' => $data['icon'] !== null,
                    'text-xs px-1 py-0.5' => $data['size'] === 'xs',
                    'text-lg px-2 py-1' => $data['size'] === 'sm', // [tl! highlight]
                    'text-base px-4 py-2' => $data['size'] === 'md',
                    'text-base px-6 py-3' => $data['size'] === 'lg',
                    'rounded' => $data['square'] === null && $data['round'] === null,
                    'rounded-full' => $data['square'] === null && $data['round'] !== null,
                    $data['tallStackUiButtonColorClasses'](),
                ]);
            });
    }
    HTML;
}
