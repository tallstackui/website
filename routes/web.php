<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.welcome')->name('welcome');

Route::prefix('/docs')
    ->name('docs.')
    ->group(function () {
        Route::view('/get-started', 'pages.get-started')->name('get-started');
        Route::view('/installation', 'pages.installation')->name('installation');
    });
