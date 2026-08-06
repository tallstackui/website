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

describe('Documentation', function () {
    test('can access all routes', function (string $route) {
        $this->get($route)->assertOk();
    })->with([
        fn () => route('documentation', ['installation']),
        fn () => route('documentation', ['starter-kit']),
        fn () => route('documentation', ['documentation']),
        fn () => route('documentation', ['configuration']),
        fn () => route('documentation', ['component-prefix']),
        fn () => route('documentation', ['without-livewire']),
        fn () => route('documentation', ['command']),
        fn () => route('documentation', ['contribution']),
        fn () => route('documentation', ['upgrade-guide']),
        fn () => route('documentation', ['ai']),
        //
        fn () => route('documentation', ['form', 'input']),
        fn () => route('documentation', ['form', 'input-select']),
        fn () => route('documentation', ['form', 'password']),
        fn () => route('documentation', ['form', 'color']),
        fn () => route('documentation', ['form', 'currency']),
        fn () => route('documentation', ['form', 'number']),
        fn () => route('documentation', ['form', 'textarea']),
        fn () => route('documentation', ['form', 'checkbox']),
        fn () => route('documentation', ['form', 'radio']),
        fn () => route('documentation', ['form', 'tag']),
        fn () => route('documentation', ['form', 'toggle']),
        fn () => route('documentation', ['form', 'range']),
        fn () => route('documentation', ['form', 'pin']),
        fn () => route('documentation', ['form', 'upload']),
        fn () => route('documentation', ['form', 'date']),
        fn () => route('documentation', ['form', 'time']),
        fn () => route('documentation', ['form', 'select']),
        //
        fn () => route('documentation', ['ui', 'accordion']),
        fn () => route('documentation', ['ui', 'alert']),
        fn () => route('documentation', ['ui', 'avatar']),
        fn () => route('documentation', ['ui', 'back-to-top']),
        fn () => route('documentation', ['ui', 'badge']),
        fn () => route('documentation', ['ui', 'breadcrumbs']),
        fn () => route('documentation', ['ui', 'banner']),
        fn () => route('documentation', ['ui', 'boolean']),
        fn () => route('documentation', ['ui', 'button']),
        fn () => route('documentation', ['ui', 'calendar']),
        fn () => route('documentation', ['ui', 'card']),
        fn () => route('documentation', ['ui', 'carousel']),
        fn () => route('documentation', ['ui', 'clipboard']),
        fn () => route('documentation', ['ui', 'command-palette']),
        fn () => route('documentation', ['ui', 'dial']),
        fn () => route('documentation', ['ui', 'dropdown']),
        fn () => route('documentation', ['ui', 'error']),
        fn () => route('documentation', ['ui', 'environment']),
        fn () => route('documentation', ['ui', 'icon']),
        fn () => route('documentation', ['ui', 'kbd']),
        fn () => route('documentation', ['ui', 'key-value']),
        fn () => route('documentation', ['ui', 'modal']),
        fn () => route('documentation', ['ui', 'layout']),
        fn () => route('documentation', ['ui', 'link']),
        fn () => route('documentation', ['ui', 'loading']),
        fn () => route('documentation', ['ui', 'progress']),
        fn () => route('documentation', ['ui', 'reaction']),
        fn () => route('documentation', ['ui', 'rating']),
        fn () => route('documentation', ['ui', 'signature']),
        fn () => route('documentation', ['ui', 'slide']),
        fn () => route('documentation', ['ui', 'stats']),
        fn () => route('documentation', ['ui', 'step']),
        fn () => route('documentation', ['ui', 'tab']),
        fn () => route('documentation', ['ui', 'table']),
        fn () => route('documentation', ['ui', 'theme-switch']),
        fn () => route('documentation', ['ui', 'timeline']),
        fn () => route('documentation', ['ui', 'tooltip']),
        //
        fn () => route('documentation', ['interactions', 'dialog']),
        fn () => route('documentation', ['interactions', 'toast']),
        //
        fn () => route('documentation', ['customization', 'soft']),
        fn () => route('documentation', ['customization', 'deep']),
        fn () => route('documentation', ['customization', 'color']),
        fn () => route('documentation', ['customization', 'globals']),
        //
        fn () => route('documentation', ['helpers', 'env-bar']),
        fn () => route('documentation', ['helpers', 'debug-mode']),
    ]);
});
