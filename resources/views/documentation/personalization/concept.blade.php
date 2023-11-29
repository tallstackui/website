<x-layout :torchlight="false">
    <x-slot:title>
        Personalization Concepts
    </x-slot:title>
    <x-slot:description>
        TallStackUI personalization concepts.
    </x-slot:description>
    <x-section :copy="false">
        <p>
            TallStackUI offers two personalization approaches, one that we call "soft" because it is easy and simple,
            and another called "deep" because it actually involves overriding component classes, which will require
            more technical knowledge from you. As much as you are free to choose the option you want,
            <u>we suggest you opt for soft personalization.</u>
        </p>
    </x-section>
    <x-section class="grid grid-cols-2 gap-2" :copy="false">
        <div class="col-span-full md:col-span-1">
            <x-card>
                <a class="inline-flex items-center gap-2" href="{{ route('documentation.personalization.soft') }}">
                    <u>Soft</u> Personalization
                    <x-icon name="arrow-up-right" class="h-5 w-5 text-pink-500" />
                </a>
            </x-card>
        </div>
        <div class="col-span-full md:col-span-1">
            <x-card>
                <a class="inline-flex items-center gap-2" href="{{ route('documentation.personalization.deep') }}">
                    <u>Deep</u> Personalization
                    <x-icon name="arrow-up-right" class="h-5 w-5 text-pink-500" />
                </a>
            </x-card>
        </div>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.translation') }}" text="Translations" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.personalization.soft') }}" text="Soft Personalization" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
