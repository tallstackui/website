<?php

use function Livewire\Volt\{state, rules, mount};
use Illuminate\Support\Facades\Cookie;

state(prefix: null);
rules(['prefix' => ['nullable', 'max:10']]);

mount(fn () => $this->prefix = Cookie::get('prefix'));

$save = function () {
    $this->withValidator(function (\Illuminate\Validation\Validator $validator) {
        $validator->after(function ($validator) {
            if ($this->prefix && !preg_match('/^[A-Za-z-]+$/', $this->prefix)) {
                return $validator->errors()->add('prefix', 'The prefix must contain only letters and dashes.');
            }
        });
    })->validate();

    (match (filled($this->prefix)) {
        true => fn () =>Cookie::queue(Cookie::forever('prefix', $this->prefix)),
        default => fn () => Cookie::queue(Cookie::forget('prefix')),
    })();

    $this->js(<<<JS
        location.reload();
    JS);
};

?>

<div class="ml-0.5">
    <x-modal id="prefix-modal"
             :title="__('PREFIXING CODE EXAMPLES')"
             center
             blur
             persistent>
        <p class="mb-2">
            The documentation code examples are displayed without the <a href="{{ route('documentation.installation').'#' }}" class="underline">component prefix.</a>
            In this form, you can configure the prefix you use so that all code examples
            are displayed using the prefix, which makes it easier for you to copy and paste
            the code without having to worry about manually defining the prefix in the code.
        </p>
        <form id="prefix" wire:submit="save">
            <x-input label="Prefix"
                     id="prefix-input"
                     x-trap="show"
                     hint="Leave it empty and press save to remove the prefix."
                     wire:model="prefix"
                     max-length="10"/>
        </form>
        <div class="mt-4">
            <x-button class="w-full" form="prefix" type="submit" color="pink" sm>
                SAVE
            </x-button>
        </div>
    </x-modal>
</div>
