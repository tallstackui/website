<?php

use App\Http\Controllers\Documentation\GetStarted;
use App\Http\Controllers\Documentation\Tooltip;
use Illuminate\Support\Facades\Route;

Route::view('/', 'documentation.welcome')->name('welcome');

Route::prefix('/docs')
    ->name('documentation.')
    ->group(function () {
        Route::get('/get-started', GetStarted::class)->name('get-started');

        Route::prefix('/ui')
            ->name('ui.')
            ->group(function () {
                Route::view('/alerts', 'documentation.alert')->name('alerts');
                Route::view('/tabs', 'documentation.tabs')->name('tabs');
                Route::get('/tooltip', Tooltip::class)->name('tooltip');
            });
    });
