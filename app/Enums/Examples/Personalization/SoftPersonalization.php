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
               ->block('input.class.base', 'w-full rounded-full');

            // or...

           TallStackUi::personalize('form.input')
               ->block('input.class.base', 'w-full rounded-full');
        }
    }
    HTML;

    public const AVATAR = <<<'HTML'
    public function personalization(): array
    {
        return Arr::dot([
            'wrapper' => [
                'class' => 'inline-flex shrink-0 items-center justify-center overflow-hidden',
                'sizes' => [
                    'sm' => 'w-8 h-8 text-xs',
                    'md' => 'w-12 h-12 text-lg',
                    'lg' => 'w-14 h-14 text-2xl',
                ],
            ],
            'content' => [
                'image' => [
                    'class' => 'shrink-0 object-cover object-center text-xl',
                    'sizes' => [
                        'sm' => 'w-8 h-8 text-sm',
                        'md' => 'w-12 h-12 text-lg',
                        'lg' => 'w-14 h-14 text-2xl',
                    ],
                ],
                'text' => [
                    'class' => 'font-semibold',
                    'colors' => [
                        'colorful' => 'text-white',
                        'white' => 'text-neutral-700',
                    ],
                ],
            ],
        ]);
    }
    HTML;

    public const FLUENT = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('input.class.base', 'w-full rounded-full')
               ->and // [tl! highlight]
               ->avatar()
               ->block('wrapper.sizes.sm', 'w-8 h-8 text-xs')

           // or...

           TallStackUi::personalize()
               ->form('input')
               ->block('input.class.base', 'w-full rounded-full')
               ->and() // [tl! highlight]
               ->avatar()
               ->block('wrapper.sizes.sm', 'w-8 h-8 text-xs')
        }
    }
    HTML;

    public const USAGES = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;
    use App\TallStackUi\InputPersonalization;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('input.class.base', new InputPersonalization())
               ->block('icon.wrapper', fn (array $data) => 'pointer-events-none absolute')
               ->block('icon.paddings.left', 'pl-10');

           // or ...

            TallStackUi::personalize()
               ->form('input')
               ->block([
                    'input.class' => new InputPersonalization(),
                    'icon.wrapper' => fn (array $data) => 'pointer-events-none absolute',
                    'icon.paddings.left' => 'pl-10',
               ]);
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
               ->block('input.class.base', new InputPersonalization()); // [tl! highlight]
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

    public const REPLACE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('input.class.base')
               ->replace('rounded-md', 'rounded-full'); // [tl! highlight]

           // or...

          TallStackUi::personalize()
              ->form('input')
              ->block('input.class.base')
              ->replace([ // [tl! highlight:3]
                  'rounded-md' => 'rounded-full',
                  'border-0' => 'border-1',
              ]);
        }
    }
    HTML;

    public const USEFUL_METHODS = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('input.class.base')
               ->replace('rounded-md', 'rounded-full'); // [tl! highlight]

           TallStackUi::personalize()
               ->form('input')
               ->block('input.class.base')
               ->remove('rounded-md'); // also accept array [tl! highlight]

           TallStackUi::personalize()
               ->form('input')
               ->block('input.class.base')
               ->append('px-4'); // [tl! highlight]

           TallStackUi::personalize()
               ->form('input')
               ->block('input.class.base')
               ->prepend('py-4'); // [tl! highlight]
        }
    }
    HTML;

    public const DATA = <<<'HTML'
    [
      "id" => null
      "label" => "Name"
      "hint" => "Your full name"
      "icon" => null
      "position" => "left"
      "validate" => true
      "componentName" => "input"
      "attributes" => \Illuminate\View\ComponentAttributeBag [...]
      "personalization" => \Illuminate\View\InvokableComponentVariable [...]
      "colors" => \Illuminate\View\InvokableComponentVariable [...]
      "configurations" => [...]
      "slot" => \Illuminate\View\ComponentSlot [...]
      "__laravel_slots" => [...]
    ]
    HTML;

    public const TAILWINDCSS = <<<'HTML'
    content: [
        // If you are personalizing into AppServiceProvider or other

        './app/Providers/MyCustomServiceProvider.php',
        './app/Providers/AppServiceProvider.php',

        // If you are using invokable classes...

        './app/TallStackUi/**/*.php',
    ],
    HTML;
}
