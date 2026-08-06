<?php

namespace App\Enums\Examples\V4;

class Welcome
{
    public const string FORM = <<<'HTML'
    <form method="POST">
        @csrf

        <x-currency name="price" />
        <x-date name="published_at" />
    </form>
    HTML;

    public const string INTERACTIONS = <<<'JS'
    $tsui.interaction('toast').success('Shipped!').send();

    $tsui.interaction('dialog').info('One line.').send();
    JS;

    public const string CUSTOMIZATION = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::customize()
                // Determining the component...
               ->badge() // [tl! highlight]
               // Pointing the block...
               ->block('wrapper.class') // [tl! highlight]
               // Customizing!
               ->replace('rounded-md', 'rounded-sm') // [tl! highlight]
               // Sequentially we can...
               ->and() // [tl! highlight]
               // Customize other components!
               ->avatar()
               ->block('content.text.class')
               ->prepend('text-2xl');
        }
    }
    HTML;
}
