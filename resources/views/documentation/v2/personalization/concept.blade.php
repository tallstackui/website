@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :torchlight="false">
    <x-slot:title>
        Personalization Concepts
    </x-slot:title>
    <x-slot:description>
        TallStackUI personalization concepts.
    </x-slot:description>
    <x-section disable-copy>
        <p>
            TallStackUI offers two personalization approaches. One that we call <x-block>soft</x-block> because it is easy and simple,
            and another called <x-block>deep</x-block> because it actually involves overriding component classes, which will require
            more technical knowledge from you. As much as you are free to choose the option you want, <u>we suggest you opt for <x-block>soft</x-block> whenever possible.</u>
        </p>
    </x-section>
    <x-section class="grid grid-cols-2 gap-4" disable-copy>
        <div class="col-span-full md:col-span-1">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg">
                <a class="inline-flex items-center gap-2" href="{{ route('documentation.v2.personalization.soft') }}" wire:navigate>
                    <u>Soft</u> Personalization
                    <x-icon name="arrow-up-right" class="h-5 w-5 text-pink-500" />
                </a>
            </div>
        </div>
        <div class="col-span-full md:col-span-1">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg">
                <a class="inline-flex items-center gap-2" href="{{ route('documentation.v2.personalization.deep') }}" wire:navigate>
                    <u>Deep</u> Personalization
                    <x-icon name="arrow-up-right" class="h-5 w-5 text-pink-500" />
                </a>
            </div>
        </div>
    </x-section>
</x-layout>
