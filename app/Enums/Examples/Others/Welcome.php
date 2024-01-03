<?php

namespace App\Enums\Examples\Others;

class Welcome
{
    public const PERSONALIZATION = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
           TallStackUi::personalize()
                // Determining the component...
               ->badge() // [tl! highlight]
               // Pointing the block...
               ->block('wrapper.class') // [tl! highlight]
               // Personalizing!
               ->replace('rounded-md', 'rounded-sm') // [tl! highlight]
               // Sequentially we can...
               ->and() // [tl! highlight]
               // Personalize other components!
               ->avatar()
               ->block('content.text.class')
               ->prepend('text-2xl');
        }
    }
    HTML;
}
