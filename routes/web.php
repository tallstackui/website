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
                Route::view('/colors', 'pages.docs.alert')->name('alert');
            });
    });
