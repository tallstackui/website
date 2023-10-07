<?php

use App\Http\Controllers\Documentation\Alert;
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
                Route::get('/alerts', Alert::class)->name('alert');
                Route::view('/tabs', 'documentation.tab')->name('tab');
                Route::get('/tooltip', Tooltip::class)->name('tooltip');
            });
    });
