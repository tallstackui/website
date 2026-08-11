<x-layout :$content :torchlight="false">
    <x-slot:title>Documentation</x-slot>
    <x-section title="Searches" disable-copy>
        <p>
            The documentation a search system that can be used to quickly find
            what you are looking for. You can click on the text box "Quick
            search...", on the left side of the screen, or press one of the
            shortcuts, depending on your operating system:
            <x-kbd>Ctrl</x-kbd>
            +
            <x-kbd>K</x-kbd>
            or
            <x-kbd>Cdm</x-kbd>
            +
            <x-kbd>K</x-kbd>
        </p>
    </x-section>
    <x-section title="Configure Documentation" disable-copy>
        <div class="space-y-4">
            <p>
                If you look closely, there is a button on the left side of the
                screen that says
                <i>"Configure Documentation"</i>
                . Pressing this button will take you to a modal that allows you
                to configure some aspects of the TallStackUI documentation:
            </p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    <b class="italic">"Component Prefix":</b>
                    The code examples of the docs are displayed without the
                    <x-refer doc="component-prefix">component prefix.</x-refer>
                    You can use this input to set the prefix you are using in
                    your Laravel project. All code examples of the docs will be
                    displayed using the prefix, which makes it easier for you to
                    copy and paste the code examples.
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Examples Without Binding" disable-copy>
        It is normal to expect that code examples in the documentation related
        to form components have
        <x-block>wire:model</x-block>
        as part of the example - a statement used to bind values when used in
        Livewire. However, the documentation omits this statement because it is
        known that several form components can be used inside or outside the
        context of Livewire components. You can learn about the components that
        can be used outside the context by clicking here.
    </x-section>
</x-layout>
