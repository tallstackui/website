<?php

use App\Enums\Example;
use App\Http\Controllers\PageController;
use App\Http\Middleware\ShareVersionVariable;
use Illuminate\Support\Facades\Route;

Route::redirect('/docs', '/docs/v3/installation');
Route::redirect('/docs/contribution', '/docs/v3/contribution');
Route::redirect('/docs/v2', '/docs/v2/installation');
Route::redirect('/contribution', '/docs/v2/contribution');
Route::redirect('/docs/v1', '/docs/v1/getting-started');
Route::redirect('/summer-release', '/docs/v1/summer-release');
Route::redirect('/upgrade', '/docs/v3/upgrade-guide');
Route::redirect('/install', '/docs/v3/installation');
Route::redirect('/issue', 'https://github.com/tallstackui/tallstackui/issues/new?template=bug_report.yml')->name('issue');

Route::middleware(ShareVersionVariable::class)
    ->group(function () {
        Route::view('/', 'welcome', Example::Welcome->variables())->name('welcome');
        Route::get('/docs/{version}/{main?}/{children?}', PageController::class)->name('documentation');
    });
