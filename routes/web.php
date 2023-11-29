<?php

use App\Enums\Example;
use App\Http\Controllers\Documentation\Configuration;
use App\Http\Controllers\Documentation\Contribution;
use App\Http\Controllers\Documentation\Dropdown;
use App\Http\Controllers\Documentation\Form\Checkbox;
use App\Http\Controllers\Documentation\Form\Input;
use App\Http\Controllers\Documentation\Form\Password;
use App\Http\Controllers\Documentation\Form\Radio;
use App\Http\Controllers\Documentation\Form\Textarea;
use App\Http\Controllers\Documentation\Form\Toggle;
use App\Http\Controllers\Documentation\Installation;
use App\Http\Controllers\Documentation\Internal;
use App\Http\Controllers\Documentation\Personalization;
use App\Http\Controllers\Documentation\Translation;
use App\Http\Controllers\Documentation\Ui\Alert;
use App\Http\Controllers\Documentation\Ui\Avatar;
use App\Http\Controllers\Documentation\Ui\Badge;
use App\Http\Controllers\Documentation\Ui\Button;
use App\Http\Controllers\Documentation\Ui\Card;
use App\Http\Controllers\Documentation\Ui\DarkTheme;
use App\Http\Controllers\Documentation\Ui\Dialog;
use App\Http\Controllers\Documentation\Ui\Error;
use App\Http\Controllers\Documentation\Ui\Icon;
use App\Http\Controllers\Documentation\Ui\Modal;
use App\Http\Controllers\Documentation\Ui\Select;
use App\Http\Controllers\Documentation\Ui\Slide;
use App\Http\Controllers\Documentation\Ui\Tab;
use App\Http\Controllers\Documentation\Ui\Toast;
use App\Http\Controllers\Documentation\Ui\Tooltip;
use Illuminate\Support\Facades\Route;

$test = <<<'HTML'
<x-button />
HTML;

Route::view('/', 'welcome', Example::Welcome->variables())->name('welcome');

Route::redirect('/docs', '/docs/get-started');
Route::redirect('/install', '/docs/installation');

Route::prefix('/docs')
    ->name('documentation.')
    ->group(function () {
        Route::view('/get-started', 'get-started')->name('get-started');
        Route::get('/installation', Installation::class)->name('installation');

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
                Route::get('/error', Error::class)->name('error');
                Route::get('/icon', Icon::class)->name('icon');
                Route::get('/dialog', Dialog::class)->name('dialog');
                Route::get('/dropdown', Dropdown::class)->name('dropdown');
                Route::get('/select', Select::class)->name('select');
                Route::get('/slide', Slide::class)->name('slide');
                Route::get('/tab', Tab::class)->name('tab');
                Route::get('/toast', Toast::class)->name('toast');
                Route::get('/tooltip', Tooltip::class)->name('tooltip');
                Route::get('/modal', Modal::class)->name('modal');
            });

        Route::prefix('/interaction')
            ->name('interaction.')
            ->group(function () {
                Route::get('/dialog', Dialog::class)->name('dialog');
                Route::get('/toast', Toast::class)->name('toast');
            });

        Route::controller(Internal::class)
            ->prefix('/interal')
            ->name('internal.')
            ->group(function () {
                Route::get('/error', 'index')->name('error');
                Route::get('/hint', 'hint')->name('hint');
                Route::get('/label', 'label')->name('label');
                Route::get('/wrapper', 'wrapper')->name('wrapper');
            });

        Route::get('/dark-theme', DarkTheme::class)->name('dark-theme');
        Route::get('/configuration', Configuration::class)->name('configuration');
        Route::get('/translation', Translation::class)->name('translation');
        Route::get('/contribution', Contribution::class)->name('contribution');

        Route::controller(Personalization::class)
            ->prefix('/personalization')
            ->name('personalization.')
            ->group(function () {
                Route::get('/concept', 'concept')->name('concept');
                Route::get('/color', 'color')->name('color');
                Route::get('/soft', 'soft')->name('soft');
                Route::get('/deep', 'deep')->name('deep');
            });
    });
