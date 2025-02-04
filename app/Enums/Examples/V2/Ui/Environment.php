<?php

namespace App\Enums\Examples\V2\Ui;

class Environment
{
    public const BASIC = <<<'HTML'
    <x-environment />
    HTML;

    public const BRANCH_ALGORITHM = <<<'HTML'
    use Illuminate\Support\Facades\File;
    
    private function branch(): ?string
    {
        // ...

        if (($branch = rescue(fn () => File::get(base_path('.git/HEAD')), report: false)) === null) {
            return null;
        }

        $string = str($branch);

        if (! $string->contains('ref: refs/heads/')) {
            return null;
        }

        return $string->replace('ref: refs/heads/', '')->trim()->value();
    }
    HTML;

    public const CUSTOM_ALGORITHM = <<<'HTML'
    use Illuminate\Support\ServiceProvider;
    
    class AppServiceProvider extends ServiceProvider
    {
        public function register(): void
        {
            // ...
    
            $this->app->bind('tallstackui::environment::branch', fn () => 'logic goes here');
        }
    }
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->environment()
        ->block('block', 'classes');
    HTML;
}
