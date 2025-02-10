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
            <kbd>Ctrl</kbd> + <kbd>K</kbd> or <kbd>Cmd</kbd> + <kbd>K</kbd>.
        </p>
    </x-section>
    <x-section title="Prefixing Examples" disable-copy>
        If you observe well, there is a button on the left side of the screen, with the text "Prefixing Examples". This button is used
        to prefix the documentation examples with a prefix that is the same as the one used in your project. This is the time you can
        ask yourself what is a prefix? Well, a prefix is a way to avoid conflicts between component names, in short. As you can copy
        examples from the documentation, we created this feature so that if you copy the examples from the documentation, you can
        already copy them with the prefixes applied. You can read more about the prefix by clicking here.
    </x-section>
    <x-section title="Examples Without Binding" disable-copy>
        It is normal to expect that code examples in the documentation related to form components have <x-block>wire:model</x-block> as
        part of the example - a statement used to bind values when used in Livewire. However, the documentation omits this statement
        because it is known that several form components can be used inside or outside the context of Livewire components. You can
        learn about the components that can be used outside the context by clicking here.
    </x-section>
</x-layout>
