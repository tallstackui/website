<?php

use App\Http\Controllers\Documentation\Alert;
use App\Http\Controllers\Documentation\Avatar;
use App\Http\Controllers\Documentation\Badge;
use App\Http\Controllers\Documentation\Card;
use App\Http\Controllers\Documentation\Dialog;
use App\Http\Controllers\Documentation\Dropdown;
use App\Http\Controllers\Documentation\Errors;
use App\Http\Controllers\Documentation\GetStarted;
use App\Http\Controllers\Documentation\Modal;
use App\Http\Controllers\Documentation\Tab;
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
                Route::get('/avatar', Avatar::class)->name('avatar');
                Route::get('/badge', Badge::class)->name('badge');
                Route::get('/card', Card::class)->name('card');
                Route::get('/dropdown', Dropdown::class)->name('dropdown');
                Route::get('/errors', Errors::class)->name('errors');
                Route::get('/dialog', Dialog::class)->name('dialog');
                Route::get('/tabs', Tab::class)->name('tab');
                Route::get('/tooltip', Tooltip::class)->name('tooltip');
                Route::get('/modal', Modal::class)->name('modal');
            });
    });
