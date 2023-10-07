<?php

use App\Http\Controllers\Documentation\Alert;
use App\Http\Controllers\Documentation\Avatar;
use App\Http\Controllers\Documentation\Badge;
use App\Http\Controllers\Documentation\Button;
use App\Http\Controllers\Documentation\Card;
use App\Http\Controllers\Documentation\DarkTheme;
use App\Http\Controllers\Documentation\Dialog;
use App\Http\Controllers\Documentation\Dropdown;
use App\Http\Controllers\Documentation\Error;
use App\Http\Controllers\Documentation\GetStarted;
use App\Http\Controllers\Documentation\Icon;
use App\Http\Controllers\Documentation\Modal;
use App\Http\Controllers\Documentation\Select;
use App\Http\Controllers\Documentation\Tab;
use App\Http\Controllers\Documentation\Toast;
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
                Route::get('/alert', Alert::class)->name('alert');
                Route::get('/avatar', Avatar::class)->name('avatar');
                Route::get('/badge', Badge::class)->name('badge');
                Route::get('/button', Button::class)->name('button');
                Route::get('/card', Card::class)->name('card');
                Route::get('/dropdown', Dropdown::class)->name('dropdown');
                Route::get('/error', Error::class)->name('error');
                Route::get('/icon', Icon::class)->name('icon');
                Route::get('/dialog', Dialog::class)->name('dialog');
                Route::get('/select', Select::class)->name('select');
                Route::get('/tab', Tab::class)->name('tab');
                Route::get('/toast', Toast::class)->name('toast');
                Route::get('/tooltip', Tooltip::class)->name('tooltip');
                Route::get('/modal', Modal::class)->name('modal');
            });

        Route::get('/dark-theme', DarkTheme::class)->name('dark-theme');
    });
