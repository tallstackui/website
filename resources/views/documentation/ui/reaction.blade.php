<x-layout>
    <x-slot:title>
        Reaction
        <x-slot:version>
            v1.13
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Reaction component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="reaction" />
    </x-slot:personalization>
    <x-section title="Concept" disable-copy>
        <p>
            <u>Version 1.13.0</u> of TallStackUI introduces a new component: Reaction.
            In the modern world many applications have blogs, posts or articles. This
            way they need to capture the reaction of their readers to feel how welcome
            or hated that content was. The reaction component is the combination of
            the <a href="{{ route('documentation.ui.tooltip') }}" class="underline">Tooltip</a>
            component with emoji icons offered by the
            <a href="https://googlefonts.github.io/noto-emoji-animation/" target="_blank" class="underline">Noto Emoji Animation project.</a>
        </p>
    </x-section>
    <x-section title="Persist Reactions" disable-copy>
        <p>
            The logic for persisting the reaction in a database, such as SQL, SQLite or Redis (cache)
            is up to its own algorithm. <b>If, for example, you don't create logic, especially one that
            blocks many reactions from the same authenticated user, the user will react unlimitedly.</b>
            When an emoji is pressed, the <x-block>react</x-block> method is triggered, receiving the name of the reaction
            as a parameter.
        </p>
        <div class="mt-4">
            <x-code :contents="$method" />
            <p>You can change the method that will receive the reaction using the <x-block>react-method</x-block> parameter directly in the component:</p>
            <x-code language="blade" :contents="$usingOtherMethodName" />
        </div>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.reaction :model="1" />
        </x-preview>
    </x-section>
    <x-section title="Animated Style" description="An option to use GIF format instead of PNG.">
        <x-preview language="blade" :contents="$animated">
            <livewire:documentation.ui.reaction :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Tooltip Position">
        <x-preview language="blade" :contents="$position">
            <livewire:documentation.ui.reaction :model="3" />
        </x-preview>
    </x-section>
    <x-section title="Quantity Slot" description="An option for show the currently quantity of reactions.">
        <x-preview language="blade" :contents="$quantity">
            <livewire:documentation.ui.reaction :model="4" />
        </x-preview>
        <div class="mt-4">
            <p>You can bind a property for real-time updates:</p>
            <x-code language="blade" :contents="$quantityBind" />
        </div>
    </x-section>
    <x-section title="Using Less Icons">
        <x-preview language="blade" :contents="$only">
            <livewire:documentation.ui.reaction :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Slot">
        <x-preview language="blade" :contents="$slot">
            <livewire:documentation.ui.reaction :model="6" />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.loading')" text="Loading" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.select')" text="Select" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
