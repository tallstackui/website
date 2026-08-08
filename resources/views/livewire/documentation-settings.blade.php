<?php

declare(strict_types=1);

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Cookie;

return new class extends Component
{
    #[Validate(['nullable', 'min:1'], onUpdate: false)]
    public ?string $prefix;

    public function mount(): void
    {
        $this->prefix = Cookie::get('prefix');
    }

    public function save(): void
    {
        $this->withValidator(function (Validator $validator) {
            $validator->after(function ($validator) {
                if ($this->prefix && ! preg_match('/^[A-Za-z-]+$/', $this->prefix)) {
                    return $validator->errors()->add('prefix', 'The prefix must contain only letters and dashes.');
                }
            });
        })->validate();

        Cookie::queue(blank($this->prefix) ? Cookie::forget('prefix') : Cookie::forever('prefix', $this->prefix));

        $this->js(<<<'JS'
        location.reload();
        JS
        );
    }
};
?>

<div class="ml-0.5">
    <x-modal id="prefix-modal"
             :title="__('CONFIGURE DOCUMENTATION')"
             center
             blur
             x-on:open="$tsui.focus('doc-prefix')">
        <p class="text-sm mb-4">
            You can use this form to configure all configurable aspects of the TallStackUI docs.
        </p>
        <form id="form-documentation-settings" class="space-y-4" wire:submit="save">
            <x-input label="Component Prefix"
                     hint="If you use TallStackUI with a prefix, you can set it here. This way, the code examples in the documentation will have the prefix defined, and when you copy a code example, the prefix will already be applied to the code, ready to use. Leave the field blank to remove the current prefix."
                     id="doc-prefix"
                     wire:model="prefix"
                     max-length="10" />
        </form>
        <x-slot:footer>
            <x-button block type="submit" form="form-documentation-settings" color="pink" round sm>
                SAVE
            </x-button>
        </x-slot:footer>
    </x-modal>
</div>
