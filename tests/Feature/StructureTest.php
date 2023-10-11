<?php

use Database\Seeders\CreateUserSeeder;

beforeEach(function () {
    fakeTorchlight();

    $this->seed(CreateUserSeeder::class);
});

test('cannot use dangerous functions')
    ->expect(['dd', 'dump', 'var_dump', 'exit'])
    ->not
    ->toBeUsed();

test('can access all routes', function (string $route) {
    $this->get($route)->assertOk();
})->with([
    fn () => route('welcome'),
    fn () => route('documentation.get-started'),
    //
    fn () => route('documentation.get-started'),
    fn () => route('documentation.form.input'),
    fn () => route('documentation.form.password'),
    fn () => route('documentation.form.textarea'),
    fn () => route('documentation.form.checkbox'),
    fn () => route('documentation.form.radio'),
    fn () => route('documentation.form.toggle'),
    //
    fn () => route('documentation.ui.alert'),
    fn () => route('documentation.ui.avatar'),
    fn () => route('documentation.ui.badge'),
    fn () => route('documentation.ui.button'),
    fn () => route('documentation.ui.card'),
    fn () => route('documentation.ui.dropdown'),
    fn () => route('documentation.ui.error'),
    fn () => route('documentation.ui.icon'),
    fn () => route('documentation.ui.dialog'),
    fn () => route('documentation.ui.select'),
    fn () => route('documentation.ui.tab'),
    fn () => route('documentation.ui.toast'),
    fn () => route('documentation.ui.tooltip'),
    fn () => route('documentation.ui.modal'),
    //
    fn () => route('documentation.internal.error'),
    fn () => route('documentation.internal.hint'),
    fn () => route('documentation.internal.label'),
    fn () => route('documentation.internal.wrapper'),
    //
    fn () => route('documentation.dark-theme'),
    fn () => route('documentation.configuration'),
    fn () => route('documentation.translation'),
    fn () => route('documentation.contribution'),
    //
    fn () => route('documentation.personalization.concept'),
    fn () => route('documentation.personalization.soft'),
    fn () => route('documentation.personalization.deep'),
    fn () => route('documentation.personalization.color'),
]);
