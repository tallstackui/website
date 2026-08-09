<x-layout :$content :torchlight="false">
    <x-slot:title>Customization Concepts</x-slot>
    <x-slot:description>
        TallStackUI customization concepts.
    </x-slot>
    <x-section disable-copy>
        <p>
            TallStackUI offers two customization approaches. One that we call
            <x-block>soft</x-block>
            because it is easy and simple, and another called
            <x-block>deep</x-block>
            because it actually involves overriding component classes, which
            will require more technical knowledge from you. As much as you are
            free to choose the option you want,
            <u>
                we suggest you opt for
                <x-block>soft</x-block>
                whenever possible.
            </u>
        </p>
    </x-section>
    <x-section class="grid grid-cols-2 gap-4" disable-copy>
        <x-card>
            <a
                class="inline-flex items-center gap-2"
                href="{{ route("documentation", ["customization", "soft"]) }}"
                wire:navigate
            >
                <u>Soft</u>
                Customization
                <x-icon name="arrow-up-right" class="h-5 w-5 text-pink-500" />
            </a>
        </x-card>
        <x-card>
            <a
                class="inline-flex items-center gap-2"
                href="{{ route("documentation", ["customization", "deep"]) }}"
                wire:navigate
            >
                <u>Deep</u>
                Customization
                <x-icon name="arrow-up-right" class="h-5 w-5 text-pink-500" />
            </a>
        </x-card>
    </x-section>
</x-layout>
