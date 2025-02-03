<?php

use App\Enums\Example;
use App\Http\Controllers\Documentation\Internal;
use Illuminate\Support\Facades\Route;

Route::view('/installation', 'documentation.v2.installation', Example::Installation->variables())->name('installation');
Route::view('/documentation', 'documentation.v2.documentation')->name('documentation');
Route::view('/component-prefix', 'documentation.v2.component-prefix', Example::ComponentPrefix->variables())->name('component-prefix');
Route::view('/alpinejs', 'documentation.v2.alpinejs', Example::Alpine->variables())->name('alpinejs');
Route::view('/troubleshooting', 'documentation.v2.troubleshooting', Example::Troubleshooting->variables())->name('troubleshooting');
Route::view('/upgrade-guide', 'documentation.v2.upgrade-guide', Example::UpgradeGuide->variables())->name('upgrade-guide');

Route::prefix('/form')
    ->name('form.')
    ->group(function () {
        Route::view('/input', 'documentation.v2.form.input', Example::Input->variables())->name('input');
        Route::view('/password', 'documentation.v2.form.password', Example::Password->variables())->name('password');
        Route::view('/color', 'documentation.v2.form.color', Example::Color->variables())->name('color');
        Route::view('/textarea', 'documentation.v2.form.textarea', Example::Textarea->variables())->name('textarea');
        Route::view('/number', 'documentation.v2.form.number', Example::Number->variables())->name('number');
        Route::view('/checkbox', 'documentation.v2.form.checkbox', Example::Checkbox->variables())->name('checkbox');
        Route::view('/radio', 'documentation.v2.form.radio', Example::Radio->variables())->name('radio');
        Route::view('/tag', 'documentation.v2.form.tag', Example::Tag->variables())->name('tag');
        Route::view('/toggle', 'documentation.v2.form.toggle', Example::Toggle->variables())->name('toggle');
        Route::view('/range', 'documentation.v2.form.range', Example::Range->variables())->name('range');
        Route::view('/pin', 'documentation.v2.form.pin', Example::Pin->variables())->name('pin');
        Route::view('/upload', 'documentation.v2.form.upload', Example::Upload->variables())->name('upload');
        Route::view('/select', 'documentation.v2.form.select', Example::Select->variables())->name('select');
        Route::view('/date', 'documentation.v2.form.date', Example::Date->variables())->name('date');
        Route::view('/time', 'documentation.v2.form.time', Example::Time->variables())->name('time');
    });

Route::prefix('/ui')
    ->name('ui.')
    ->group(function () {
        Route::view('/alert', 'documentation.v2.ui.alert', Example::Alert->variables())->name('alert');
        Route::get('/avatar', function () {
            // We need to auth the user to be able to use `auth()->user()` in the view.
            auth()->loginUsingId(1);

            return view('documentation.ui.avatar', Example::Avatar->variables());
        })->name('avatar');
        Route::view('/badge', 'documentation.v2.ui.badge', Example::Badge->variables())->name('badge');
        Route::view('/banner', 'documentation.v2.ui.banner', Example::Banner->variables())->name('banner');
        Route::view('/boolean', 'documentation.v2.ui.boolean', Example::Boolean->variables())->name('boolean');
        Route::view('/button', 'documentation.v2.ui.button', Example::Button->variables())->name('button');
        Route::view('/card', 'documentation.v2.ui.card', Example::Card->variables())->name('card');
        Route::view('/clipboard', 'documentation.v2.ui.clipboard', Example::Clipboard->variables())->name('clipboard');
        Route::view('/dropdown', 'documentation.v2.ui.dropdown', Example::Dropdown->variables())->name('dropdown');
        Route::view('/error', 'documentation.v2.ui.error', Example::Error->variables())->name('error');
        Route::view('/icon', 'documentation.v2.ui.icon', Example::Icon->variables())->name('icon');
        Route::view('/modal', 'documentation.v2.ui.modal', Example::Modal->variables())->name('modal');
        Route::view('/link', 'documentation.v2.ui.link', Example::Link->variables())->name('link');
        Route::view('/loading', 'documentation.v2.ui.loading', Example::Loading->variables())->name('loading');
        Route::view('/progress', 'documentation.v2.ui.progress', Example::Progress->variables())->name('progress');
        Route::view('/reaction', 'documentation.v2.ui.reaction', Example::Reaction->variables())->name('reaction');
        Route::view('/rating', 'documentation.v2.ui.rating', Example::Rating->variables())->name('rating');
        Route::view('/slide', 'documentation.v2.ui.slide', Example::Slide->variables())->name('slide');
        Route::view('/stats', 'documentation.v2.ui.stats', Example::Stats->variables())->name('stats');
        Route::view('/step', 'documentation.v2.ui.step', Example::Step->variables())->name('step');
        Route::view('/tab', 'documentation.v2.ui.tab', Example::Tab->variables())->name('tab');
        Route::view('/table', 'documentation.v2.ui.table', Example::Table->variables())->name('table');
        Route::view('/theme-switch', 'documentation.v2.ui.theme-switch', Example::ThemeSwitch->variables())->name('theme-switch');
        Route::view('/tooltip', 'documentation.v2.ui.tooltip', Example::Tooltip->variables())->name('tooltip');
    });

Route::prefix('/interaction')
    ->name('interaction.')
    ->group(function () {
        Route::view('/dialog', 'documentation.v2.interactions.dialog', Example::Dialog->variables())->name('dialog');
        Route::view('/toast', 'documentation.v2.interactions.toast', Example::Toast->variables())->name('toast');
    });

Route::controller(Internal::class)
    ->prefix('/internal')
    ->name('internal.')
    ->group(function () {
        Route::get('/error', 'index')->name('error');
        Route::get('/hint', 'hint')->name('hint');
        Route::get('/label', 'label')->name('label');
        Route::get('/wrapper', 'wrapper')->name('wrapper');
        Route::get('/floating', 'floating')->name('floating');
    });

Route::view('/dark-theme', 'documentation.v2.helpers.dark-theme', Example::DarkTheme->variables())->name('dark-theme');
Route::view('/configuration', 'documentation.v2.configuration', Example::Configuration->variables())->name('configuration');
Route::view('/command', 'documentation.v2.command', Example::Command->variables())->name('command');
Route::view('/translation', 'documentation.v2.translation', Example::Translation->variables())->name('translation');
Route::view('/without-livewire', 'documentation.v2.without-livewire', Example::WithoutLivewire->variables())->name('without-livewire');
Route::view('/contribution', 'documentation.v2.contribution', Example::Contribution->variables())->name('contribution');
Route::view('/debug', 'documentation.v2.helpers.debug', Example::DebugMode->variables())->name('debug');

Route::prefix('/personalization')
    ->name('personalization.')
    ->group(function () {
        Route::view('/concept', 'documentation.v2.personalization.concept')->name('concept');
        Route::view('/color', 'documentation.v2.personalization.color', Example::ColorPersonalization->variables())->name('color');
        Route::view('/soft', 'documentation.v2.personalization.soft', Example::SoftPersonalization->variables())->name('soft');
        Route::view('/deep', 'documentation.v2.personalization.deep', Example::DeepPersonalization->variables())->name('deep');
    });

Route::prefix('/integrations')
    ->name('integrations.')
    ->group(function () {
        Route::view('/alpine', 'documentation.v2.integrations.alpine', Example::Alpine->variables())->name('alpine');
    });
