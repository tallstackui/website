@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="reaction">
    <x-slot:title>
        Reaction
    </x-slot:title>
    <x-slot:description>
        Reaction component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Reaction" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <p>
            In the modern world many applications have blogs, posts or articles. This
            way they need to capture the reaction of their readers to feel how welcome
            or hated that content was. The reaction component is the combination of
            the <a href="{{ route('documentation', ['ui', 'tooltip']) }}" wire:navigate class="underline">Tooltip</a>
            component with emoji icons offered by the
            <a href="https://googlefonts.github.io/noto-emoji-animation/" target="_blank" class="underline">Noto Emoji Animation project.</a>
        </p>
    </x-section>
    <x-section title="Persist Reaction" disable-copy>
        <p>
            The logic for persisting the reaction in a database, such as SQL, SQLite or Redis (cache)
            is up to its own algorithm. When an emoji is pressed, the <x-block>react</x-block> method
            is triggered, receiving the name of the reaction as a parameter.
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
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.ui.reaction :model="7" />
        </x-preview>
    </x-section>
    <x-section title="Panel" new disable-copy>
        <div class="space-y-4">
            <p>
                The emoji panel used to be tippy's default theme, which is a black box. It is a real panel now, and
                like the tooltip balloon it is built by JavaScript and therefore outside
                <x-block>customize()</x-block>. It is styled through <x-block>[data-tsui-popover]</x-block>.
            </p>
            <x-warning warning title="The markup changed shape">
                It used to be tippy's root, box and content wrappers in <x-block>body</x-block>; it is now a single
                element next to the trigger. Anything selecting into the old structure, a browser test walking an XPath
                most of all, has to be repointed. The panel carries
                <x-block>dusk="tallstackui_reaction_popover"</x-block> and every emoji button carries
                <x-block>dusk="tallstackui_reaction_&lt;name&gt;"</x-block>, so a test names the reaction it clicks
                instead of counting nodes.
            </x-warning>
        </div>
    </x-section>
</x-layout>
