<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.docs.welcome')->name('welcome');

Route::prefix('/docs')
    ->name('docs.')
    ->group(function () {
        Route::view('/get-started', 'pages.docs.get-started')->name('get-started');

        Route::prefix('/ui')
            ->name('ui.')
            ->group(function () {
                Route::view('/alerts', 'pages.docs.alert')->name('alerts');
                Route::view('/tabs', 'pages.docs.tabs')->name('tabs');
                Route::view('/tooltip', 'pages.docs.tooltip')->name('tooltip');
            });
    });
