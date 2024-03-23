<?php

use Database\Seeders\CreateUserSeeder;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    fakeTorchlight();

    Http::fake(['api.github.com/*' => Http::response([])]);

    $this->seed(CreateUserSeeder::class);
});

test('cannot use dangerous functions')
    ->expect(['dd', 'dump', 'var_dump', 'exit'])
    ->not
    ->toBeUsed();

test('can access all routes', function (string $route) {
    $this->get($route)->assertOk();
})->with([
    fn () => route('documentation.get-started'),
    fn () => route('documentation.installation'),
    fn () => route('documentation.troubleshooting'),
    fn () => route('documentation.updates'),
    fn () => route('documentation.faq'),
    fn () => route('documentation.summer-release'),
    //
    fn () => route('documentation.form.input'),
    fn () => route('documentation.form.password'),
    fn () => route('documentation.form.color'),
    fn () => route('documentation.form.textarea'),
    fn () => route('documentation.form.number'),
    fn () => route('documentation.form.checkbox'),
    fn () => route('documentation.form.radio'),
    fn () => route('documentation.form.tag'),
    fn () => route('documentation.form.toggle'),
    fn () => route('documentation.form.range'),
    fn () => route('documentation.form.pin'),
    fn () => route('documentation.form.upload'),
    fn () => route('documentation.form.date'),
    fn () => route('documentation.form.time'),
    fn () => route('documentation.form.select'),
    //
    fn () => route('documentation.ui.alert'),
    fn () => route('documentation.ui.avatar'),
    fn () => route('documentation.ui.badge'),
    fn () => route('documentation.ui.banner'),
    fn () => route('documentation.ui.button'),
    fn () => route('documentation.ui.card'),
    fn () => route('documentation.ui.clipboard'),
    fn () => route('documentation.ui.dropdown'),
    fn () => route('documentation.ui.error'),
    fn () => route('documentation.ui.icon'),
    fn () => route('documentation.ui.modal'),
    fn () => route('documentation.ui.link'),
    fn () => route('documentation.ui.loading'),
    fn () => route('documentation.ui.progress'),
    fn () => route('documentation.ui.reaction'),
    fn () => route('documentation.ui.slide'),
    fn () => route('documentation.ui.stats'),
    fn () => route('documentation.ui.step'),
    fn () => route('documentation.ui.tab'),
    fn () => route('documentation.ui.table'),
    fn () => route('documentation.ui.theme-switch'),
    fn () => route('documentation.ui.tooltip'),
    //
    fn () => route('documentation.interaction.dialog'),
    fn () => route('documentation.interaction.toast'),
    //
    fn () => route('documentation.internal.error'),
    fn () => route('documentation.internal.hint'),
    fn () => route('documentation.internal.floating'),
    fn () => route('documentation.internal.label'),
    fn () => route('documentation.internal.wrapper'),
    //
    fn () => route('documentation.configuration'),
    fn () => route('documentation.translation'),
    fn () => route('documentation.without-livewire'),
    //
    fn () => route('documentation.personalization.concept'),
    fn () => route('documentation.personalization.soft'),
    fn () => route('documentation.personalization.deep'),
    fn () => route('documentation.personalization.color'),
    //
    fn () => route('documentation.dark-theme'),
    fn () => route('documentation.debug'),
    fn () => route('documentation.integrations.alpine'),
    //
    fn () => route('documentation.contribution'),
]);
