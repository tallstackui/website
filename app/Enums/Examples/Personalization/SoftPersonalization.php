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
}
