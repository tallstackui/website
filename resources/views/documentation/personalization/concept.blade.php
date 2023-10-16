<x-layout :torchlight="false">
    <x-slot:title>
        Personalization Concepts
    </x-slot:title>
    <x-slot:description>
        TallStackUi available personalization concepts.
    </x-slot:description>
    <x-section>
        <p class="text-justify">
            TallStackUi offers two personalization approaches, one that we call "soft" because it is easy and simple,
            and another called "deep" because it actually involves overriding component classes, which will require
            more technical knowledge from you. As much as you are free to choose the option you want,
            <u>we suggest you opt for soft personalization.</u>
        </p>
    </x-section>
    <x-section class="grid grid-cols-2 gap-2">
        <div class="col-span-full md:col-span-1">
            <x-card>
                <a class="inline-flex items-center gap-2" href="{{ route('documentation.personalization.soft') }}">
                    <u>Soft</u> Personalization
                    <x-icon name="arrow-up-right" class="w-5 h-5 text-pink-500" />
                </a>
            </x-card>
        </div>
        <div class="col-span-full md:col-span-1">
            <x-card>
                <a class="inline-flex items-center gap-2" href="{{ route('documentation.personalization.deep') }}">
                    <u>Deep</u> Personalization
                    <x-icon name="arrow-up-right" class="w-5 h-5 text-pink-500" />
                </a>
            </x-card>
        </div>
    </x-section>
</x-layout>
