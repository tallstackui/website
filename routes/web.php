<?php

use App\Enums\Example;
use App\Http\Controllers\PageController;
use App\Http\Middleware\ShareVersionVariable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::redirect('/docs', '/docs/v4/installation');
Route::redirect('/docs/v4', '/docs/v4/installation');
Route::redirect('/docs/contribution', '/docs/v4/contribution');
Route::redirect('/contribution', '/docs/v4/contribution');
Route::redirect('/upgrade', '/docs/v4/upgrade-guide');
Route::redirect('/install', '/docs/v4/installation');
Route::redirect('/issue', 'https://github.com/tallstackui/tallstackui/issues/new?template=bug_report.yml')->name('issue');

/** v3 lives on its own deployment; keep the old paths pointing at it. */
Route::get('/docs/v3/{path?}', fn (?string $path = null) => redirect()->away(
    rtrim(config('documentation.sites.v3'), '/').'/docs/v3'.($path ? '/'.$path : ''), 301
))->where('path', '.*');

/** v1 and v2 reached end of life and are no longer published. */
Route::permanentRedirect('/docs/v1/{path?}', '/docs/v4/upgrade-guide')->where('path', '.*');
Route::permanentRedirect('/docs/v2/{path?}', '/docs/v4/upgrade-guide')->where('path', '.*');
Route::permanentRedirect('/summer-release', '/docs/v4/upgrade-guide');

Route::get('/demo/{view}', function (string $view) {
    $template = 'demo.'.str_replace('/', '.', $view);

    abort_unless(view()->exists($template), 404);

    return view($template);
})->where('view', '[a-z0-9./_-]+')->name('demo');

Route::get('/ai/{name}.md', function (string $name) {
    $branch = str(config('documentation.version'))->after('v')->append('.x')->value();

    $response = Http::get("https://raw.githubusercontent.com/tallstackui/tallstackui/refs/heads/{$branch}/.ai/components/{$name}.md");

    abort_if($response->failed(), 404);

    return response($response->body(), 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
        'Cache-Control' => 'no-cache, no-store, must-revalidate',
    ]);
})->where('name', '.*')->name('ai.component');

Route::middleware(ShareVersionVariable::class)
    ->group(function () {
        Route::view('/', 'welcome', Example::Welcome->variables())->name('welcome');
        Route::get('/docs/{version}/{main?}/{children?}', PageController::class)->name('documentation');
    });
