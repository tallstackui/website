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
