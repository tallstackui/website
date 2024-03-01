<?php

use App\Enums\Example;
use App\Http\Controllers\Documentation\Internal;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', Example::Welcome->variables())->name('welcome');

Route::redirect('/docs', '/docs/get-started');
Route::redirect('/install', '/docs/installation');
Route::redirect('/summer', '/docs/summer-release');

Route::prefix('/docs')
    ->name('documentation.')
    ->group(function () {
        Route::view('/get-started', 'get-started')->name('get-started');
        Route::view('/installation', 'documentation.installation', Example::Installation->variables())->name('installation');
        Route::view('/troubleshooting', 'documentation.troubleshooting', Example::Troubleshooting->variables())->name('troubleshooting');
        Route::view('/updates', 'documentation.updates', Example::Updates->variables())->name('updates');
        Route::view('/faq', 'documentation.faq', Example::Updates->variables())->name('faq');
        Route::view('/summer-release', 'documentation.summer-release', Example::SummerRelease->variables())->name('summer-release');

        Route::prefix('/form')
            ->name('form.')
            ->group(function () {
                Route::view('/input', 'documentation.form.input', Example::Input->variables())->name('input');
                Route::view('/password', 'documentation.form.password', Example::Password->variables())->name('password');
                Route::view('/color', 'documentation.form.color', Example::Color->variables())->name('color');
                Route::view('/textarea', 'documentation.form.textarea', Example::Textarea->variables())->name('textarea');
                Route::view('/number', 'documentation.form.number', Example::Number->variables())->name('number');
                Route::view('/checkbox', 'documentation.form.checkbox', Example::Checkbox->variables())->name('checkbox');
                Route::view('/radio', 'documentation.form.radio', Example::Radio->variables())->name('radio');
                Route::view('/tag', 'documentation.form.tag', Example::Tag->variables())->name('tag');
                Route::view('/toggle', 'documentation.form.toggle', Example::Toggle->variables())->name('toggle');
                Route::view('/range', 'documentation.form.range', Example::Range->variables())->name('range');
                Route::view('/pin', 'documentation.form.pin', Example::Pin->variables())->name('pin');
                Route::view('/upload', 'documentation.form.upload', Example::Upload->variables())->name('upload');
                Route::view('/date', 'documentation.form.date', Example::Date->variables())->name('date');
            });

        Route::prefix('/ui')
            ->name('ui.')
            ->group(function () {
                Route::view('/alert', 'documentation.ui.alert', Example::Alert->variables())->name('alert');
                Route::get('/avatar', function () {
                    // We need to auth the user to be able to use `auth()->user()` in the view.
                    auth()->loginUsingId(1);

                    return view('documentation.ui.avatar', Example::Avatar->variables());
                })->name('avatar');
                Route::view('/badge', 'documentation.ui.badge', Example::Badge->variables())->name('badge');
                Route::view('/banner', 'documentation.ui.banner', Example::Banner->variables())->name('banner');
                Route::view('/button', 'documentation.ui.button', Example::Button->variables())->name('button');
                Route::view('/card', 'documentation.ui.card', Example::Card->variables())->name('card');
                Route::view('/clipboard', 'documentation.ui.clipboard', Example::Clipboard->variables())->name('clipboard');
                Route::view('/dropdown', 'documentation.ui.dropdown', Example::Dropdown->variables())->name('dropdown');
                Route::view('/error', 'documentation.ui.error', Example::Error->variables())->name('error');
                Route::view('/icon', 'documentation.ui.icon', Example::Icon->variables())->name('icon');
                Route::view('/modal', 'documentation.ui.modal', Example::Modal->variables())->name('modal');
                Route::view('/link', 'documentation.ui.link', Example::Link->variables())->name('link');
                Route::view('/loading', 'documentation.ui.loading', Example::Loading->variables())->name('loading');
                Route::view('/reaction', 'documentation.ui.reaction', Example::Reaction->variables())->name('reaction');
                Route::view('/select', 'documentation.ui.select', Example::Select->variables())->name('select');
                Route::view('/slide', 'documentation.ui.slide', Example::Slide->variables())->name('slide');
                Route::view('/tab', 'documentation.ui.tab', Example::Tab->variables())->name('tab');
                Route::view('/table', 'documentation.ui.table', Example::Table->variables())->name('table');
                Route::view('/tooltip', 'documentation.ui.tooltip', Example::Tooltip->variables())->name('tooltip');
            });

        Route::prefix('/interaction')
            ->name('interaction.')
            ->group(function () {
                Route::view('/dialog', 'documentation.interactions.dialog', Example::Dialog->variables())->name('dialog');
                Route::view('/toast', 'documentation.interactions.toast', Example::Toast->variables())->name('toast');
            });

        Route::controller(Internal::class)
            ->prefix('/internal')
            ->name('internal.')
            ->group(function () {
                Route::get('/error', 'index')->name('error');
                Route::get('/hint', 'hint')->name('hint');
                Route::get('/label', 'label')->name('label');
                Route::get('/wrapper', 'wrapper')->name('wrapper');
            });

        Route::view('/dark-theme', 'documentation.helpers.dark-theme', Example::DarkTheme->variables())->name('dark-theme');
        Route::view('/configuration', 'documentation.configuration', Example::Configuration->variables())->name('configuration');
        Route::view('/translation', 'documentation.translation', Example::Translation->variables())->name('translation');
        Route::view('/without-livewire', 'documentation.without-livewire', Example::WithoutLivewire->variables())->name('without-livewire');
        Route::view('/contribution', 'documentation.contribution', Example::Contribution->variables())->name('contribution');
        Route::view('/debug', 'documentation.helpers.debug', Example::DebugMode->variables())->name('debug');

        Route::prefix('/personalization')
            ->name('personalization.')
            ->group(function () {
                Route::view('/concept', 'documentation.personalization.concept')->name('concept');
                Route::view('/color', 'documentation.personalization.color', Example::ColorPersonalization->variables())->name('color');
                Route::view('/soft', 'documentation.personalization.soft', Example::SoftPersonalization->variables())->name('soft');
                Route::view('/deep', 'documentation.personalization.deep', Example::DeepPersonalization->variables())->name('deep');
            });

        Route::prefix('/integrations')
            ->name('integrations.')
            ->group(function () {
                Route::view('/alpine', 'documentation.integrations.alpine', Example::Alpine->variables())->name('alpine');
            });
    });
