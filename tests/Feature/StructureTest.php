<?php

use Database\Seeders\CreateUserSeeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    Http::fake(['api.torchlight.dev/*' => []]);
    Http::fake(['api.github.com/*' => []]);

    $this->seed(CreateUserSeeder::class);
});

test('cannot use dangerous functions')
    ->expect(['dd', 'dump', 'var_dump', 'exit'])
    ->not
    ->toBeUsed();

test('cannot not use dangerous functions in Blade files', function () {
    $files = collect(File::allFiles(base_path('resources/views/')))
        ->map(fn (SplFileInfo $file) => ['name' => $file->getFilename(), 'content' => file_get_contents($file->getRealPath())])
        ->filter(fn (array $file) => str($file['content'])->contains(['@dd', '@dump']))
        ->pluck('name')
        ->implode(', ');

    if (! empty($files)) {
        test()->fail("The following files contain dangerous functions: [{$files}]"); // @phpstan-ignore-line
    }

    expect($files)->toBeEmpty();
});

describe('V1', function () {
    test('can access all routes', function (string $route) {
        $this->get($route)->assertOk();
    })->with([
        fn () => route('documentation', ['v1', 'getting-started']),
        fn () => route('documentation', ['v1', 'installation']),
        fn () => route('documentation', ['v1', 'troubleshooting']),
        fn () => route('documentation', ['v1', 'updates']),
        fn () => route('documentation', ['v1', 'faq']),
        fn () => route('documentation', ['v1', 'summer-release']),
        //
        fn () => route('documentation', ['v1', 'form', 'input']),
        fn () => route('documentation', ['v1', 'form', 'password']),
        fn () => route('documentation', ['v1', 'form', 'color']),
        fn () => route('documentation', ['v1', 'form', 'textarea']),
        fn () => route('documentation', ['v1', 'form', 'number']),
        fn () => route('documentation', ['v1', 'form', 'checkbox']),
        fn () => route('documentation', ['v1', 'form', 'radio']),
        fn () => route('documentation', ['v1', 'form', 'tag']),
        fn () => route('documentation', ['v1', 'form', 'toggle']),
        fn () => route('documentation', ['v1', 'form', 'range']),
        fn () => route('documentation', ['v1', 'form', 'pin']),
        fn () => route('documentation', ['v1', 'form', 'upload']),
        fn () => route('documentation', ['v1', 'form', 'date']),
        fn () => route('documentation', ['v1', 'form', 'time']),
        fn () => route('documentation', ['v1', 'form', 'select']),
        //
        fn () => route('documentation', ['v1', 'ui', 'alert']),
        fn () => route('documentation', ['v1', 'ui', 'avatar']),
        fn () => route('documentation', ['v1', 'ui', 'badge']),
        fn () => route('documentation', ['v1', 'ui', 'banner']),
        fn () => route('documentation', ['v1', 'ui', 'boolean']),
        fn () => route('documentation', ['v1', 'ui', 'button']),
        fn () => route('documentation', ['v1', 'ui', 'card']),
        fn () => route('documentation', ['v1', 'ui', 'clipboard']),
        fn () => route('documentation', ['v1', 'ui', 'dropdown']),
        fn () => route('documentation', ['v1', 'ui', 'error']),
        fn () => route('documentation', ['v1', 'ui', 'icon']),
        fn () => route('documentation', ['v1', 'ui', 'modal']),
        fn () => route('documentation', ['v1', 'ui', 'link']),
        fn () => route('documentation', ['v1', 'ui', 'loading']),
        fn () => route('documentation', ['v1', 'ui', 'progress']),
        fn () => route('documentation', ['v1', 'ui', 'reaction']),
        fn () => route('documentation', ['v1', 'ui', 'rating']),
        fn () => route('documentation', ['v1', 'ui', 'slide']),
        fn () => route('documentation', ['v1', 'ui', 'stats']),
        fn () => route('documentation', ['v1', 'ui', 'step']),
        fn () => route('documentation', ['v1', 'ui', 'tab']),
        fn () => route('documentation', ['v1', 'ui', 'table']),
        fn () => route('documentation', ['v1', 'ui', 'theme-switch']),
        fn () => route('documentation', ['v1', 'ui', 'tooltip']),
        //
        fn () => route('documentation', ['v1', 'interactions', 'dialog']),
        fn () => route('documentation', ['v1', 'interactions', 'toast']),
        //
        fn () => route('documentation', ['v1', 'internal', 'error']),
        fn () => route('documentation', ['v1', 'internal', 'hint']),
        fn () => route('documentation', ['v1', 'internal', 'floating']),
        fn () => route('documentation', ['v1', 'internal', 'label']),
        fn () => route('documentation', ['v1', 'internal', 'wrapper']),
        //
        fn () => route('documentation', ['v1', 'configuration']),
        fn () => route('documentation', ['v1', 'command']),
        fn () => route('documentation', ['v1', 'translation']),
        fn () => route('documentation', ['v1', 'without-livewire']),
        //
        fn () => route('documentation', ['v1', 'personalization', 'concept']),
        fn () => route('documentation', ['v1', 'personalization', 'soft']),
        fn () => route('documentation', ['v1', 'personalization', 'deep']),
        fn () => route('documentation', ['v1', 'personalization', 'color']),
        //
        fn () => route('documentation', ['v1', 'helpers', 'dark-theme']),
        fn () => route('documentation', ['v1', 'helpers', 'debug-mode']),
        fn () => route('documentation', ['v1', 'integrations', 'alpine']),
        //
        fn () => route('documentation', ['v1', 'contribution']),
    ]);
});

describe('V2', function () {
    test('can access all routes', function (string $route) {
        $this->get($route)->assertOk();
    })->with([
        fn () => route('documentation', ['v2', 'installation']),
        fn () => route('documentation', ['v2', 'starter-kit']),
        fn () => route('documentation', ['v2', 'documentation']),
        fn () => route('documentation', ['v2', 'component-prefix']),
        fn () => route('documentation', ['v2', 'alpine']),
        fn () => route('documentation', ['v2', 'troubleshooting']),
        fn () => route('documentation', ['v2', 'upgrade-guide']),
        //
        fn () => route('documentation', ['v2', 'form', 'input']),
        fn () => route('documentation', ['v2', 'form', 'password']),
        fn () => route('documentation', ['v2', 'form', 'color']),
        fn () => route('documentation', ['v2', 'form', 'currency']),
        fn () => route('documentation', ['v2', 'form', 'textarea']),
        fn () => route('documentation', ['v2', 'form', 'number']),
        fn () => route('documentation', ['v2', 'form', 'checkbox']),
        fn () => route('documentation', ['v2', 'form', 'radio']),
        fn () => route('documentation', ['v2', 'form', 'tag']),
        fn () => route('documentation', ['v2', 'form', 'toggle']),
        fn () => route('documentation', ['v2', 'form', 'range']),
        fn () => route('documentation', ['v2', 'form', 'pin']),
        fn () => route('documentation', ['v2', 'form', 'upload']),
        fn () => route('documentation', ['v2', 'form', 'date']),
        fn () => route('documentation', ['v2', 'form', 'time']),
        fn () => route('documentation', ['v2', 'form', 'select']),
        //
        fn () => route('documentation', ['v2', 'ui', 'alert']),
        fn () => route('documentation', ['v2', 'ui', 'avatar']),
        fn () => route('documentation', ['v2', 'ui', 'badge']),
        fn () => route('documentation', ['v2', 'ui', 'banner']),
        fn () => route('documentation', ['v2', 'ui', 'boolean']),
        fn () => route('documentation', ['v2', 'ui', 'button']),
        fn () => route('documentation', ['v2', 'ui', 'card']),
        fn () => route('documentation', ['v2', 'ui', 'carousel']),
        fn () => route('documentation', ['v2', 'ui', 'clipboard']),
        fn () => route('documentation', ['v2', 'ui', 'dropdown']),
        fn () => route('documentation', ['v2', 'ui', 'error']),
        fn () => route('documentation', ['v2', 'ui', 'environment']),
        fn () => route('documentation', ['v2', 'ui', 'icon']),
        fn () => route('documentation', ['v2', 'ui', 'modal']),
        fn () => route('documentation', ['v2', 'ui', 'layout']),
        fn () => route('documentation', ['v2', 'ui', 'link']),
        fn () => route('documentation', ['v2', 'ui', 'loading']),
        fn () => route('documentation', ['v2', 'ui', 'key-value']),
        fn () => route('documentation', ['v2', 'ui', 'progress']),
        fn () => route('documentation', ['v2', 'ui', 'reaction']),
        fn () => route('documentation', ['v2', 'ui', 'rating']),
        fn () => route('documentation', ['v2', 'ui', 'signature']),
        fn () => route('documentation', ['v2', 'ui', 'slide']),
        fn () => route('documentation', ['v2', 'ui', 'stats']),
        fn () => route('documentation', ['v2', 'ui', 'step']),
        fn () => route('documentation', ['v2', 'ui', 'tab']),
        fn () => route('documentation', ['v2', 'ui', 'table']),
        fn () => route('documentation', ['v2', 'ui', 'theme-switch']),
        fn () => route('documentation', ['v2', 'ui', 'tooltip']),
        //
        fn () => route('documentation', ['v2', 'interactions', 'dialog']),
        fn () => route('documentation', ['v2', 'interactions', 'toast']),
        //
        fn () => route('documentation', ['v2', 'internal', 'error']),
        fn () => route('documentation', ['v2', 'internal', 'hint']),
        fn () => route('documentation', ['v2', 'internal', 'floating']),
        fn () => route('documentation', ['v2', 'internal', 'label']),
        fn () => route('documentation', ['v2', 'internal', 'wrapper']),
        //
        fn () => route('documentation', ['v2', 'configuration']),
        fn () => route('documentation', ['v2', 'command']),
        fn () => route('documentation', ['v2', 'translation']),
        fn () => route('documentation', ['v2', 'without-livewire']),
        //
        fn () => route('documentation', ['v2', 'personalization', 'concept']),
        fn () => route('documentation', ['v2', 'personalization', 'soft']),
        fn () => route('documentation', ['v2', 'personalization', 'deep']),
        fn () => route('documentation', ['v2', 'personalization', 'color']),
        //
        fn () => route('documentation', ['v2', 'integrations', 'alpine']),
        //
        fn () => route('documentation', ['v2', 'helpers', 'env-bar']),
        fn () => route('documentation', ['v2', 'helpers', 'dark-theme']),
        fn () => route('documentation', ['v2', 'helpers', 'debug-mode']),
        //
        fn () => route('documentation', ['v2', 'contribution']),
    ]);
});

describe('V3', function () {
    test('can access all routes', function (string $route) {
        $this->get($route)->assertOk();
    })->with([
        fn () => route('documentation', ['v3', 'installation']),
        fn () => route('documentation', ['v3', 'starter-kit']),
        fn () => route('documentation', ['v3', 'documentation']),
        fn () => route('documentation', ['v3', 'configuration']),
        fn () => route('documentation', ['v3', 'component-prefix']),
        fn () => route('documentation', ['v3', 'without-livewire']),
        fn () => route('documentation', ['v3', 'command']),
        fn () => route('documentation', ['v3', 'contribution']),
        fn () => route('documentation', ['v3', 'upgrade-guide']),
        fn () => route('documentation', ['v3', 'ai']),
        //
        fn () => route('documentation', ['v3', 'form', 'input']),
        fn () => route('documentation', ['v3', 'form', 'input-select']),
        fn () => route('documentation', ['v3', 'form', 'password']),
        fn () => route('documentation', ['v3', 'form', 'color']),
        fn () => route('documentation', ['v3', 'form', 'currency']),
        fn () => route('documentation', ['v3', 'form', 'number']),
        fn () => route('documentation', ['v3', 'form', 'textarea']),
        fn () => route('documentation', ['v3', 'form', 'checkbox']),
        fn () => route('documentation', ['v3', 'form', 'radio']),
        fn () => route('documentation', ['v3', 'form', 'tag']),
        fn () => route('documentation', ['v3', 'form', 'toggle']),
        fn () => route('documentation', ['v3', 'form', 'range']),
        fn () => route('documentation', ['v3', 'form', 'pin']),
        fn () => route('documentation', ['v3', 'form', 'upload']),
        fn () => route('documentation', ['v3', 'form', 'date']),
        fn () => route('documentation', ['v3', 'form', 'time']),
        fn () => route('documentation', ['v3', 'form', 'select']),
        //
        fn () => route('documentation', ['v3', 'ui', 'accordion']),
        fn () => route('documentation', ['v3', 'ui', 'alert']),
        fn () => route('documentation', ['v3', 'ui', 'avatar']),
        fn () => route('documentation', ['v3', 'ui', 'back-to-top']),
        fn () => route('documentation', ['v3', 'ui', 'badge']),
        fn () => route('documentation', ['v3', 'ui', 'breadcrumbs']),
        fn () => route('documentation', ['v3', 'ui', 'banner']),
        fn () => route('documentation', ['v3', 'ui', 'boolean']),
        fn () => route('documentation', ['v3', 'ui', 'button']),
        fn () => route('documentation', ['v3', 'ui', 'calendar']),
        fn () => route('documentation', ['v3', 'ui', 'card']),
        fn () => route('documentation', ['v3', 'ui', 'carousel']),
        fn () => route('documentation', ['v3', 'ui', 'clipboard']),
        fn () => route('documentation', ['v3', 'ui', 'command-palette']),
        fn () => route('documentation', ['v3', 'ui', 'dial']),
        fn () => route('documentation', ['v3', 'ui', 'dropdown']),
        fn () => route('documentation', ['v3', 'ui', 'error']),
        fn () => route('documentation', ['v3', 'ui', 'environment']),
        fn () => route('documentation', ['v3', 'ui', 'icon']),
        fn () => route('documentation', ['v3', 'ui', 'kbd']),
        fn () => route('documentation', ['v3', 'ui', 'key-value']),
        fn () => route('documentation', ['v3', 'ui', 'modal']),
        fn () => route('documentation', ['v3', 'ui', 'layout']),
        fn () => route('documentation', ['v3', 'ui', 'link']),
        fn () => route('documentation', ['v3', 'ui', 'loading']),
        fn () => route('documentation', ['v3', 'ui', 'progress']),
        fn () => route('documentation', ['v3', 'ui', 'reaction']),
        fn () => route('documentation', ['v3', 'ui', 'rating']),
        fn () => route('documentation', ['v3', 'ui', 'signature']),
        fn () => route('documentation', ['v3', 'ui', 'slide']),
        fn () => route('documentation', ['v3', 'ui', 'stats']),
        fn () => route('documentation', ['v3', 'ui', 'step']),
        fn () => route('documentation', ['v3', 'ui', 'tab']),
        fn () => route('documentation', ['v3', 'ui', 'table']),
        fn () => route('documentation', ['v3', 'ui', 'theme-switch']),
        fn () => route('documentation', ['v3', 'ui', 'timeline']),
        fn () => route('documentation', ['v3', 'ui', 'tooltip']),
        //
        fn () => route('documentation', ['v3', 'interactions', 'dialog']),
        fn () => route('documentation', ['v3', 'interactions', 'toast']),
        //
        fn () => route('documentation', ['v3', 'customization', 'soft']),
        fn () => route('documentation', ['v3', 'customization', 'deep']),
        fn () => route('documentation', ['v3', 'customization', 'color']),
        fn () => route('documentation', ['v3', 'customization', 'globals']),
        //
        fn () => route('documentation', ['v3', 'helpers', 'env-bar']),
        fn () => route('documentation', ['v3', 'helpers', 'debug-mode']),
    ]);
});
