<?php

use App\Http\Controllers\Documentation\Form\Checkbox;
use App\Http\Controllers\Documentation\Form\Input;
use App\Http\Controllers\Documentation\Form\Password;
use App\Http\Controllers\Documentation\Form\Radio;
use App\Http\Controllers\Documentation\Form\Textarea;
use App\Http\Controllers\Documentation\Form\Toggle;
use App\Http\Controllers\Documentation\GetStarted;
use App\Http\Controllers\Documentation\Ui\Alert;
use App\Http\Controllers\Documentation\Ui\Avatar;
use App\Http\Controllers\Documentation\Ui\Badge;
use App\Http\Controllers\Documentation\Ui\Button;
use App\Http\Controllers\Documentation\Ui\Card;
use App\Http\Controllers\Documentation\Ui\DarkTheme;
use App\Http\Controllers\Documentation\Ui\Dialog;
use App\Http\Controllers\Documentation\Ui\Dropdown;
use App\Http\Controllers\Documentation\Ui\Error;
use App\Http\Controllers\Documentation\Ui\Icon;
use App\Http\Controllers\Documentation\Ui\Modal;
use App\Http\Controllers\Documentation\Ui\Select;
use App\Http\Controllers\Documentation\Ui\Tab;
use App\Http\Controllers\Documentation\Ui\Toast;
use App\Http\Controllers\Documentation\Ui\Tooltip;
use Illuminate\Support\Facades\Route;

Route::view('/', 'documentation.welcome')->name('welcome');

Route::prefix('/docs')
    ->name('documentation.')
    ->group(function () {
        Route::get('/get-started', GetStarted::class)->name('get-started');

        Route::prefix('/form')
            ->name('form.')
            ->group(function () {
                Route::get('/input', Input::class)->name('input');
                Route::get('/password', Password::class)->name('password');
                Route::get('/textarea', Textarea::class)->name('textarea');
                Route::get('/checkbox', Checkbox::class)->name('checkbox');
                Route::get('/radio', Radio::class)->name('radio');
                Route::get('/toggle', Toggle::class)->name('toggle');
            });

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
