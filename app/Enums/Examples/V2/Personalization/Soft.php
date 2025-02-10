<?php

namespace App\Enums\Examples\V2\Personalization;

class Soft
{
    public const TAILWINDCSS = <<<'HTML'
    content: [
        // If you are personalizing into service providers...
        './app/Providers/*.php', // [tl! highlight]

        // If you are using object invokable classes... 
        // Don't worry! You'll understand it below!
        './app/NameSpaceGoesHere/**/*.php', // [tl! highlight]
    ],
    HTML;

    public const EXAMPLE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('input.base', 'w-full rounded-full');

            // or...

           TallStackUi::personalize('form.input')
               ->block('input.base', 'w-full rounded-full');
        }
    }
    HTML;

    public const FLUENT = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // 1. Property

           TallStackUi::personalize()
               ->form('input')
               ->block('input.base', 'w-full rounded-full')
               ->and // [tl! highlight]
               ->avatar()
               ->block('wrapper.sizes.sm', 'w-8 h-8 text-xs')

           // Or, 2. Method

           TallStackUi::personalize()
               ->form('input')
               ->block('input.base', 'w-full rounded-full')
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
           TallStackUi::personalize()
               ->form('input')
               ->block('input.base', new InputPersonalization())
               ->block('icon.wrapper', fn (array $data) => 'px-4 py-2')
               ->block('icon.paddings.left', 'pl-10');

           // Or ...

            TallStackUi::personalize()
               ->form('input')
               ->block([
                    'input.class' => new InputPersonalization(),
                    'icon.wrapper' => fn (array $data) => 'px-4 py-2',
                    'icon.paddings.left' => 'pl-10',
               ]);
        }
    }
    HTML;

    public const INVOKABLE_EXAMPLE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;
    use App\TallStackUi\InputPersonalization; // [tl! focus]

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::personalize()
               ->form('input')
               ->block('input.base', new InputPersonalization()); // [tl! focus]
        }
    }
    HTML;

    public const INVOKABLE_CLASS = <<<'HTML'
    // You must track this namespace in the TailwindCSS config file!
    namespace App\TallStackUi;

    class InputPersonalization
    {
        public function __invoke(array $data): string // [tl! highlight]
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
        "label" => "Name"
        "hint" => "Your full name"
        "icon" => null
        "clearable" => null
        "invalidate" => null
        "position" => "left"
        "prefix" => null
        "suffix" => null
        "componentName" => "input"
        "attributes" => Illuminate\View\ComponentAttributeBag {...}
        "blade" => Illuminate\View\InvokableComponentVariable {...}
        "personalization" => Illuminate\View\InvokableComponentVariable {...}
        "ignoredParameterNames" => Illuminate\View\InvokableComponentVariable {...}
        "classes" => TallStackUi\View\Components\Form\Input::classes(?Closure $callback = null): [...]
        "slot" => Illuminate\View\ComponentSlot {...}
        "__laravel_slots" => [...]
        "livewire" => true
        "property" => null
        "error" => false
        "id" => null
    ]
    HTML;

    public const REPLACE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::personalize()
               ->form('input')
               ->block('input.base')
               ->replace('rounded-md', 'rounded-full'); // [tl! focus]

           // Or...

          TallStackUi::personalize()
              ->form('input')
              ->block('input.base')
              ->replace([ // [tl! focus:3]
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
           TallStackUi::personalize()
               ->form('input')
               ->block('input.base')
               // Replace: replace parts of the original content. [tl! highlight:8]
               // Accepts: single replace or an array for multiples replaces
               ->replace('rounded-md', 'rounded-full')
               // Remove: single removal or an array for multiple removals
               ->remove('w-full')
               // Append: appends classes as string
               ->append('px-4')
               // Prepend: prepend classes as string
               ->prepend('py-4');
        }
    }
    HTML;

    public const REAL_EXAMPLE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::personalize()
               ->form('input')
               ->block('input.base')
               ->replace('rounded-md', 'rounded-full'); // [tl! highlight]
        }
    }
    HTML;

    public const SCOPED_PERSONALIZATION_DEFINITION = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            TallStackUi::personalize('alert')
                ->scope('circle') // [tl! highlight]
                ->block('wrapper')
                ->replace('rounded-lg', 'rounded-full');
                
            // Or ...
            
            TallStackUi::personalize('alert', scope: 'circle') // [tl! highlight]
                ->block('wrapper')
                ->replace('rounded-lg', 'rounded-full');
        }
    }
    HTML;

    public const SCOPED_PERSONALIZATION_USAGE = <<<'HTML'
    <x-alert text="This is a fully round Alert component" scope="circle" />
    HTML;
}
