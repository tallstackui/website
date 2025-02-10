<?php

use App\Enums\Example;
use App\Http\Controllers\Documentation\PageController;
use App\Http\Middleware\ShareVersionVariable;
use Illuminate\Support\Facades\Route;

Route::redirect('/docs', '/docs/v2/installation');
Route::redirect('/docs/v1', '/docs/v1/getting-started');
Route::redirect('/summer-release', '/docs/v1/summer-release');
Route::redirect('/docs/v2', '/docs/v2/installation');
Route::redirect('/install', '/docs/v2/installation');
Route::redirect('/issue', 'https://github.com/tallstackui/tallstackui/issues/new?template=bug_report.yml')->name('issue');

Route::middleware(ShareVersionVariable::class)
    ->group(function () {
        Route::view('/', 'welcome', Example::Welcome->variables())->name('welcome');

        Route::get('/docs/{version}/{main?}/{children?}', PageController::class)->name('documentation');
    });
