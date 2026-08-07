<?php

namespace App\Enums\Examples\Ui;

class Environment
{
    public const string BASIC = <<<'HTML'
    <x-environment />
    HTML;

    public const string ROUND = <<<'HTML'
    <!-- Boolean: applies rounded-full -->
    <x-environment round />

    <!-- Size keys: xs, sm, md, lg, xl -->
    <x-environment round="xs" />
    <x-environment round="sm" />
    <x-environment round="md" />
    <x-environment round="lg" />
    <x-environment round="xl" />
    HTML;

    public const string SQUARE = <<<'HTML'
    <x-environment square />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-environment xs /> <!-- Default -->
    <x-environment sm />
    <x-environment md />
    <x-environment lg />
    HTML;

    public const string WITHOUT_BRANCH = <<<'HTML'
    <x-environment without-branch />
    HTML;

    public const string BRANCH_ALGORITHM = <<<'HTML'
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

    public const string CUSTOM_ALGORITHM = <<<'HTML'
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

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->environment()
        ->block('block', 'classes');
    HTML;
}
