<?php

use App\Enums\Example;
use App\Http\Controllers\AsyncUploadDemoController;
use App\Http\Controllers\PageController;
use App\Http\Middleware\ShareVersionVariable;
use App\Support\ComponentDocumentation;
use App\Support\Llms;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::redirect('/docs', '/docs/installation');
Route::redirect('/contribution', '/docs/contribution');
Route::redirect('/upgrade', '/docs/upgrade-guide');
Route::redirect('/install', '/docs/installation');
Route::redirect('/summer-release', '/docs/upgrade-guide');
Route::redirect('/issue', 'https://github.com/tallstackui/tallstackui/issues/new?template=bug_report.yml')->name('issue');

/**
 * The major used to live in the path. It now lives in the domain, so these
 * point at whoever publishes that major, or at the upgrade guide when the
 * major reached end of life. Declared before the documentation route so the
 * "v<n>" segment is never mistaken for a page.
 */
Route::get('/docs/{version}/{path?}', function (string $version, ?string $path = null) {
    if ($version === config('documentation.version')) {
        return redirect('/docs/'.($path ?: 'installation'), 301);
    }

    return config("documentation.sites.$version")
        ? redirect()->away(version_url($version, ...array_filter(explode('/', (string) $path))), 301)
        : redirect()->away(version_url(latest_version(), 'upgrade-guide'), 301);
})->where(['version' => 'v[0-9]+', 'path' => '.*']);

Route::get('/demo/{view}', function (string $view) {
    $template = 'demo.'.str_replace('/', '.', $view);

    abort_unless(view()->exists($template), 404);

    return view($template);
})->where('view', '[a-z0-9./_-]+')->name('demo');

/**
 * Backs the async upload live preview. Throttled and capped, writing to a
 * throwaway disk the scheduler wipes; it persists nothing anyone can read back.
 */
Route::post('/demo/async-upload', AsyncUploadDemoController::class)
    ->middleware('throttle:60,1')
    ->name('demo.async-upload');

Route::get('/llms.txt', fn (Llms $llms) => response($llms->build(), 200, [
    'Content-Type' => 'text/plain; charset=UTF-8',
]))->name('llms');

Route::get('/ai/{name}.md', function (string $name, ComponentDocumentation $documentation) {
    // The slug is matched against the shipped index, so the path never comes from the URL.
    $file = $documentation->file($name);

    abort_if($file === null, 404);

    $branch = str(config('documentation.version'))->after('v')->append('.x')->value();

    $response = Http::get("https://raw.githubusercontent.com/tallstackui/tallstackui/refs/heads/{$branch}/.ai/{$file}");

    abort_if($response->failed(), 404);

    return response($response->body(), 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
        'Cache-Control' => 'no-cache, no-store, must-revalidate',
    ]);
})->where('name', '.*')->name('ai.component');

Route::middleware(ShareVersionVariable::class)
    ->group(function () {
        Route::view('/', 'welcome', Example::Welcome->variables())->name('welcome');
        Route::get('/docs/{main?}/{children?}', PageController::class)->name('documentation');
    });
