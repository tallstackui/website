<x-layout :torchlight="false">
    <x-slot:title>
        Personalization Concepts
    </x-slot:title>
    <x-slot:description>
        TallStackUi available personalization concepts.
    </x-slot:description>
    <x-section>
        <p class="text-justify">
            TallStackUi offers two personalization approaches, one we call "soft" because it's easy and another called "deep"
            because it's actually something deeper. The "soft" option consists of avoiding having to create many files, and
            depending on a single service provider to customize all the styling of the components. The "deep" option is more
            laborious because it involves overwriting the components' customizable classes, which will make you more work in
            the end. <b class="underline">We suggest that, if possible, avoid doing "deep" personalization</b> so as not to generate conflicts with
            possible updates we make in the future.
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
