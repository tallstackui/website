<?php

use function Livewire\Volt\{state, rules, mount};
use Illuminate\Support\Facades\Cookie;

state(prefix: null, tailwindcss: false);

rules(['prefix' => ['nullable', 'max:10'], 'tailwindcss' => ['boolean']]);

mount(function (): void {
    $this->prefix = Cookie::get('prefix');

    $this->tailwindcss = (bool) Cookie::get('tailwindcss');
});

$save = function (): void {
    $this->withValidator(function (\Illuminate\Validation\Validator $validator) {
        $validator->after(function ($validator) {
            if ($this->prefix && !preg_match('/^[A-Za-z-]+$/', $this->prefix)) {
                return $validator->errors()->add('prefix', 'The prefix must contain only letters and dashes.');
            }
        });
    })->validate();

    if (blank($this->prefix)) {
        Cookie::queue(Cookie::forget('prefix'));
    } else {
        Cookie::queue(Cookie::forever('prefix', $this->prefix));
    }

    Cookie::queue(Cookie::forever('tailwindcss', $this->tailwindcss));

    $this->js(<<<JS
        location.reload();
    JS);
};

?>

<div class="ml-0.5">
    <x-modal id="prefix-modal"
             :title="__('CONFIGURE DOCUMENTATION')"
             center
             blur>
        <p class="text-sm mb-4">
            You can use this form to configure all configurable aspects of the TallStackUI docs.
        </p>
        <form class="space-y-4">
            <x-input label="Prefix" hint="Leave it empty to remove the current prefix." wire:model="prefix" max-length="10">
                <x-slot:label>
                    <a href="{{ route('documentation', ['v2', 'component-prefix']) }}" wire:navigate>Component Prefix</a>
                </x-slot:label>
            </x-input>
            <x-toggle label="View TailwindCSS examples using v4" wire:model="tailwindcss" />
        </form>
        <x-slot:footer>
            <x-button class="w-full" type="button" color="pink" sm wire:click="save">
                SAVE
            </x-button>
        </x-slot:footer>
    </x-modal>
</div>
