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

describe('V4', function () {
    test('can access all routes', function (string $route) {
        $this->get($route)->assertOk();
    })->with([
        fn () => route('documentation', ['v4', 'installation']),
        fn () => route('documentation', ['v4', 'starter-kit']),
        fn () => route('documentation', ['v4', 'documentation']),
        fn () => route('documentation', ['v4', 'configuration']),
        fn () => route('documentation', ['v4', 'component-prefix']),
        fn () => route('documentation', ['v4', 'without-livewire']),
        fn () => route('documentation', ['v4', 'command']),
        fn () => route('documentation', ['v4', 'contribution']),
        fn () => route('documentation', ['v4', 'upgrade-guide']),
        fn () => route('documentation', ['v4', 'ai']),
        //
        fn () => route('documentation', ['v4', 'form', 'input']),
        fn () => route('documentation', ['v4', 'form', 'input-select']),
        fn () => route('documentation', ['v4', 'form', 'password']),
        fn () => route('documentation', ['v4', 'form', 'color']),
        fn () => route('documentation', ['v4', 'form', 'currency']),
        fn () => route('documentation', ['v4', 'form', 'number']),
        fn () => route('documentation', ['v4', 'form', 'textarea']),
        fn () => route('documentation', ['v4', 'form', 'checkbox']),
        fn () => route('documentation', ['v4', 'form', 'radio']),
        fn () => route('documentation', ['v4', 'form', 'tag']),
        fn () => route('documentation', ['v4', 'form', 'toggle']),
        fn () => route('documentation', ['v4', 'form', 'range']),
        fn () => route('documentation', ['v4', 'form', 'pin']),
        fn () => route('documentation', ['v4', 'form', 'upload']),
        fn () => route('documentation', ['v4', 'form', 'date']),
        fn () => route('documentation', ['v4', 'form', 'time']),
        fn () => route('documentation', ['v4', 'form', 'select']),
        //
        fn () => route('documentation', ['v4', 'ui', 'accordion']),
        fn () => route('documentation', ['v4', 'ui', 'alert']),
        fn () => route('documentation', ['v4', 'ui', 'avatar']),
        fn () => route('documentation', ['v4', 'ui', 'back-to-top']),
        fn () => route('documentation', ['v4', 'ui', 'badge']),
        fn () => route('documentation', ['v4', 'ui', 'breadcrumbs']),
        fn () => route('documentation', ['v4', 'ui', 'banner']),
        fn () => route('documentation', ['v4', 'ui', 'boolean']),
        fn () => route('documentation', ['v4', 'ui', 'button']),
        fn () => route('documentation', ['v4', 'ui', 'calendar']),
        fn () => route('documentation', ['v4', 'ui', 'card']),
        fn () => route('documentation', ['v4', 'ui', 'carousel']),
        fn () => route('documentation', ['v4', 'ui', 'clipboard']),
        fn () => route('documentation', ['v4', 'ui', 'command-palette']),
        fn () => route('documentation', ['v4', 'ui', 'dial']),
        fn () => route('documentation', ['v4', 'ui', 'dropdown']),
        fn () => route('documentation', ['v4', 'ui', 'error']),
        fn () => route('documentation', ['v4', 'ui', 'environment']),
        fn () => route('documentation', ['v4', 'ui', 'icon']),
        fn () => route('documentation', ['v4', 'ui', 'kbd']),
        fn () => route('documentation', ['v4', 'ui', 'key-value']),
        fn () => route('documentation', ['v4', 'ui', 'modal']),
        fn () => route('documentation', ['v4', 'ui', 'layout']),
        fn () => route('documentation', ['v4', 'ui', 'link']),
        fn () => route('documentation', ['v4', 'ui', 'loading']),
        fn () => route('documentation', ['v4', 'ui', 'progress']),
        fn () => route('documentation', ['v4', 'ui', 'reaction']),
        fn () => route('documentation', ['v4', 'ui', 'rating']),
        fn () => route('documentation', ['v4', 'ui', 'signature']),
        fn () => route('documentation', ['v4', 'ui', 'slide']),
        fn () => route('documentation', ['v4', 'ui', 'stats']),
        fn () => route('documentation', ['v4', 'ui', 'step']),
        fn () => route('documentation', ['v4', 'ui', 'tab']),
        fn () => route('documentation', ['v4', 'ui', 'table']),
        fn () => route('documentation', ['v4', 'ui', 'theme-switch']),
        fn () => route('documentation', ['v4', 'ui', 'timeline']),
        fn () => route('documentation', ['v4', 'ui', 'tooltip']),
        //
        fn () => route('documentation', ['v4', 'interactions', 'dialog']),
        fn () => route('documentation', ['v4', 'interactions', 'toast']),
        //
        fn () => route('documentation', ['v4', 'customization', 'soft']),
        fn () => route('documentation', ['v4', 'customization', 'deep']),
        fn () => route('documentation', ['v4', 'customization', 'color']),
        fn () => route('documentation', ['v4', 'customization', 'globals']),
        //
        fn () => route('documentation', ['v4', 'helpers', 'env-bar']),
        fn () => route('documentation', ['v4', 'helpers', 'debug-mode']),
    ]);
});
