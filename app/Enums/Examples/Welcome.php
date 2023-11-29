<?php

namespace App\Enums\Examples;

class Welcome
{
    public const PERSONALIZATION = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            // ...

           TallStackUi::personalize()
               ->form('input')
               ->block('input.class.base')
               ->replace('rounded-md', 'rounded-full');

           TallStackUi::personalize()
               ->alert()
               ->block('wrapper')
               ->remove('rounded-lg');

           TallStackUi::personalize()
               ->badge()
               ->block('wrapper.class')
               ->append('py-4')
               ->and()
               ->avatar()
               ->block('content.text.class')
               ->prepend('text-2xl');
        }
    }
    HTML;
}
