<x-layout :$content :torchlight="false">
    <x-slot:title>
        Documentation
    </x-slot:title>
    <x-section disable-copy>
        The goal of this page is explain you several things related to the TallStackUI documentation. Although here in this page
        we can mention some specific things for the version 2.x, several other things can be considered valid for understanding
        the version 1.x too. We recommend you to read with attention and without hurry, including if you are starting to use TallStackUI now.
    </x-section>
    <x-section title="Searches" disable-copy>
        <p>
            The docs offers a search system that can be used to quickly find what you are looking for. You can click on the text box
            "Quick search...", on the left side of the screen, or press one of the shortcuts, depending on your operating system:
            <x-kbd>Ctrl</x-kbd> + <x-kbd>K</x-kbd> or <x-kbd>Cdm</x-kbd> + <x-kbd>K</x-kbd>
        </p>
    </x-section>
    <x-section title="Configure Documentation" disable-copy>
        <div class="space-y-4">
            <p>
                If you look closely, there is a button on the left side of the screen that says <i>"Configure Documentation"</i>. Pressing this button will take you to a modal that allows you to configure some aspects of the TallStackUI documentation:
            </p>
            <ul class="list-decimal list-inside space-y-2">
                <li>
                    <b class="italic">"Component Prefix":</b> The code examples of the docs are displayed without the <a href="{{ route('documentation', ['v4', 'component-prefix']) }}" class="underline" wire:navigate>component prefix.</a> You can use this input to set the prefix you are using in your Laravel project. All code examples of the docs will be displayed using the prefix, which makes it easier for you to copy and paste the code examples.
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Examples Without Binding" disable-copy>
        It is normal to expect that code examples in the documentation related to form components have <x-block>wire:model</x-block> as
        part of the example - a statement used to bind values when used in Livewire. However, the documentation omits this statement
        because it is known that several form components can be used inside or outside the context of Livewire components. You can
        learn about the components that can be used outside the context by clicking here.
    </x-section>
</x-layout>
