<?php

namespace App\Enums\Examples\V3\Ui;

class Environment
{
    public const BASIC = <<<'HTML'
    <x-environment />
    HTML;

    public const ROUND = <<<'HTML'
    <x-environment round />
    HTML;

    public const SQUARE = <<<'HTML'
    <x-environment square />
    HTML;

    public const SIZES = <<<'HTML'
    <x-environment xs /> <!-- Default -->
    <x-environment sm />
    <x-environment md />
    <x-environment lg />
    HTML;

    public const WITHOUT_BRANCH = <<<'HTML'
    <x-environment without-branch />
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

            $this->app->bind('tallstackui::environment::branch', function () {
                return 'logic goes here';
            });
        }
    }
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->environment()
        ->block('block', 'classes');
    HTML;
}
