<?php

declare(strict_types=1);

namespace App\Enums\Examples\Customization;

class Soft
{
    public const string TAILWINDCSS = <<<'HTML'
    @source '../../app/Providers/*.php';
    HTML;

    public const string EXAMPLE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::customize()
               ->form('input')
               ->block('input.base', 'w-full rounded-full');

            // or...

           TallStackUi::customize('form.input')
               ->block('input.base', 'w-full rounded-full');
        }
    }
    HTML;

    public const string FLUENT = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // 1. Property

           TallStackUi::customize()
               ->form('input')
               ->block('input.base', 'w-full rounded-full')
               ->and // [tl! highlight]
               ->avatar()
               ->block('wrapper.sizes.sm', 'w-8 h-8 text-xs')

           // Or, 2. Method

           TallStackUi::customize()
               ->form('input')
               ->block('input.base', 'w-full rounded-full')
               ->and() // [tl! highlight]
               ->avatar()
               ->block('wrapper.sizes.sm', 'w-8 h-8 text-xs')
        }
    }
    HTML;

    public const string USAGES = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;
    use App\TallStackUi\InputCustomization;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::customize()
               ->form('input')
               ->block('input.base', new InputCustomization())
               ->block('icon.wrapper', fn (array $data) => 'px-4 py-2')
               ->block('icon.paddings.left', 'pl-10');

           // Or ...

            TallStackUi::customize()
               ->form('input')
               ->block([
                    'input.class' => new InputCustomization(),
                    'icon.wrapper' => fn (array $data) => 'px-4 py-2',
                    'icon.paddings.left' => 'pl-10',
               ]);
        }
    }
    HTML;

    public const string INVOKABLE_EXAMPLE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;
    use App\TallStackUi\InputCustomization; // [tl! focus]

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::customize()
               ->form('input')
               ->block('input.base', new InputCustomization()); // [tl! focus]
        }
    }
    HTML;

    public const string INVOKABLE_CLASS = <<<'HTML'
    // You must track this namespace in the TailwindCSS config file!
    namespace App\TallStackUi;

    class InputCustomization
    {
        public function __invoke(array $data): string // [tl! highlight]
        {
            return 'w-full rounded-full';
        }
    }
    HTML;

    public const string USING_COMPONENT = <<<'HTML'
    <x-input label="Name" hint="Your full name" />
    HTML;

    public const string DATA = <<<'HTML'
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
        "customization" => Illuminate\View\InvokableComponentVariable {...}
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

    public const string REPLACE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::customize()
               ->form('input')
               ->block('input.base')
               ->replace('rounded-md', 'rounded-full'); // [tl! focus]

           // Or...

          TallStackUi::customize()
              ->form('input')
              ->block('input.base')
              ->replace([ // [tl! focus:3]
                  'rounded-md' => 'rounded-full',
                  'border-0' => 'border-1',
              ]);
        }
    }
    HTML;

    public const string HELPERS = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::customize()
               ->form('input')
               ->block('input.base')
               // Replace: replace parts of the original content. [tl! focus:4,highlight:4]
               // Accepts:
               // - single: from/to replace,
               // - array for multiples replaces in the first parameter
               ->replace('rounded-md', 'rounded-full');


          TallStackUi::customize()
               ->form('input')
               ->block('input.base')
               // Remove: [tl! focus:3,highlight:3]
               // - single removal
               // - an array for multiple removals
               ->remove('w-full');

           TallStackUi::customize()
               ->form('input')
               ->block('input.base')
               // Append: appends classes as string [tl! focus:1,highlight:1]
               ->append('px-4');

           TallStackUi::customize()
               ->form('input')
               ->block('input.base')
               // Prepend: prepend classes as string [tl! focus:1,highlight:1]
               ->prepend('py-4');
        }
    }
    HTML;

    public const string REAL_EXAMPLE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::customize()
               ->form('input')
               ->block('input.base')
               ->replace('rounded-md', 'rounded-full'); // [tl! highlight]
        }
    }
    HTML;

    public const string SCOPED_CUSTOMIZATION_DEFINITION = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            TallStackUi::customize('form.input')
                ->scope('circle') // [tl! highlight]
                ->block('input.wrapper')
                ->replace('rounded-md', 'rounded-full');

            // Or ...

            TallStackUi::customize(component: 'form.input', scope: 'circle') // [tl! highlight]
                ->block('input.wrapper')
                ->replace('rounded-md', 'rounded-full');
        }
    }
    HTML;

    public const string SCOPED_CUSTOMIZATION_WAYS = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // 1
            TallStackUi::customize('form.input') // [tl! focus:1,highlight:1]
                ->scope('circle')
                ->block('input.wrapper')
                ->replace('rounded-md', 'rounded-full');

            // Or
            TallStackUi::customize(component: 'form.input', scope: 'circle') // [tl! focus,highlight]
                ->block('input.wrapper')
                ->replace('rounded-md', 'rounded-full');

            // Or
            TallStackUi::customize()
                ->scope('circle') // [tl! focus:1,highlight:1]
                ->form('input')
                ->block('input.wrapper')
                ->replace('rounded-md', 'rounded-full');
        }
    }
    HTML;

    public const string SCOPED_CUSTOMIZATION_USAGE = <<<'HTML'
    <x-input ... scope="circle" />
    HTML;

    public const string INTERNAL_SCOPED = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // Customize the input used inside the color picker
            TallStackUi::customize(component: 'input', scope: 'form.color.input')
                ->block('input.base', 'rounded-full');

            // Customize the floating used inside the date picker
            TallStackUi::customize(component: 'floating', scope: 'form.date.floating')
                ->block('wrapper', 'shadow-2xl');

            // Customize the badge used inside sidebar items
            TallStackUi::customize(component: 'badge', scope: 'sidebar.item.badge')
                ->block('wrapper.class', 'border-0');
        }
    }
    HTML;

    public const string EXTEND = <<<'PHP'
    TallStackUi::customize()
        ->extend(scope: 'card-shadowless')
        ->card()
        ->block('wrapper.second')
        ->append('ring-1 ring-gray-100');
    PHP;

    public const string STACKING = <<<'PHP'
    TallStackUi::customize('alert')->block('wrapper')->append('from-a');
    TallStackUi::customize('alert')->block('wrapper')->append('from-b');

    // 3.x: 'p-4 from-b'          -- from-a lost
    // 4.x: 'p-4 from-a from-b'
    PHP;

    public const string REMOVE_TOKENS = <<<'PHP'
    // block: 'mb-2 rounded-md border border-gray-300 dark:border-dark-700'
    ->remove('border')

    // 3.x: 'mb-2 rounded-md -gray-300 dark:-dark-700'
    // 4.x: 'mb-2 rounded-md border-gray-300 dark:border-dark-700'

    // Several at once, as a list or as one string
    ->remove(['shadow-md', 'rounded-lg'])
    ->remove('shadow-md rounded-lg')
    PHP;

    public const string SCOPE_LAYERING = <<<'PHP'
    TallStackUi::customize()->alert()->block('wrapper')->append('brand-shadow');
    TallStackUi::customize('alert', scope: 'flat')->block('text.title')->append('text-xl');

    // <x-alert scope="flat" /> renders with both brand-shadow and text-xl
    PHP;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('checkbox')
        ->block('block', 'classes');
    HTML;
}
