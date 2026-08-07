@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="card">
    <x-slot:title>
        Card
    </x-slot:title>
    <x-slot:description>
        Card component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Card" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-card>
                TallStackUI
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Header Slot">
        <x-preview language="blade" :contents="$header">
            <x-card header="Header">
                Body
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$footer">
            <x-card footer="Footer">
                Body
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Minimizable">
        <div class="space-y-4">
            <div>
                <x-preview language="blade" :contents="$minimize">
                    <x-card header="TallStackUI" minimize>
                        Minimize
                    </x-card>
                </x-preview>
                <x-warning class="mt-4">
                    Since the icon is positioned in the header, you need to define a header to use minimize.
                </x-warning>
            </div>
            <div>
                <p>You can also mount as minimized:</p>
                <x-preview language="blade" :contents="$minimizeFromMount">
                    <x-card header="TallStackUI" minimize initialize-minimized>
                        Initialized as minimized
                    </x-card>
                </x-preview>
            </div>
        </div>
    </x-section>
    <x-section title="Image">
        <x-preview language="blade" :contents="$image">
            <div class="space-y-4">
                <x-card image="{{ url('assets/images/wallpapers/1.jpg') }}">
                    Image at top
                </x-card>
                <x-card position="bottom" image="{{ url('assets/images/wallpapers/2.jpg') }}">
                    Image at bottom
                </x-card>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Round" description="An option to control the border radius of the card wrapper.">
        <x-preview language="blade" :contents="$round">
            <div class="space-y-4">
                <x-card>
                    Default (rounded-lg)
                </x-card>
                <x-card round>
                    round flag — preserves the default
                </x-card>
                <x-card round="xs">round="xs"</x-card>
                <x-card round="sm">round="sm"</x-card>
                <x-card round="md">round="md"</x-card>
                <x-card round="lg">round="lg"</x-card>
                <x-card round="xl">round="xl"</x-card>
                <x-card round="2xl">round="2xl"</x-card>
            </div>
        </x-preview>
        <x-warning class="mt-4">
            When omitted or used as a bare flag, <x-block>round</x-block> keeps the historical
            default (<x-block>rounded-lg</x-block>). Pass a size between
            <x-block>xs</x-block> and <x-block>2xl</x-block> to override the wrapper radius.
        </x-warning>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$color">
            <div class="space-y-4">
                <x-card header="TallStackUI" color="primary">
                    Normal
                </x-card>
                <x-card header="TallStackUI" color="primary" light>
                    Normal, Light
                </x-card>
                <x-card header="TallStackUI" color="primary" accent>
                    Accent
                </x-card>
            </div>
        </x-preview>
        <x-warning class="mt-4">
            Just like the minimizeable option, the colors are only applied when the Card has a header.
        </x-warning>
        <x-warning warning title="bordered became accent" class="mt-4">
            On <x-block>3.x</x-block> this variation was called <x-block>bordered</x-block>. That name now belongs to the
            wrapper border below, so combining <x-block>color</x-block> with a colored top border is
            <x-block>accent</x-block>.
        </x-warning>
    </x-section>
    <x-section title="Flat Look" new description="The flags are independent. shadowless drops the shadow, bordered draws a border around the wrapper while keeping it. Both reach the skeleton view too.">
        <x-preview language="blade" :contents="$flat">
            <div class="space-y-4">
                <x-card shadowless>shadowless</x-card>
                <x-card bordered>bordered</x-card>
                <x-card shadowless bordered>shadowless bordered</x-card>
            </div>
        </x-preview>
        <x-warning class="mt-4">
            The predefined <x-block>card-shadowless</x-block> scope keeps working unchanged.
        </x-warning>
    </x-section>
    <x-section title="Paddingless" new description="Strips the padding of the main slot, leaving it flush against the edges. Header and footer keep theirs.">
        <x-preview language="blade" :contents="$paddingless">
            <x-card paddingless>
                <x-table :headers="[['index' => 'name', 'label' => 'Name'], ['index' => 'email', 'label' => 'E-mail']]"
                         :rows="[['name' => 'AJ', 'email' => 'aj@tallstackui.com'], ['name' => 'Bob', 'email' => 'bob@tallstackui.com']]" />
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Footer Alignment" new description="Read from the slot itself. Combining alignments, or mixing one with unwrapped, throws.">
        <x-preview language="blade" :contents="$footerAlignment">
            <x-card>
                TallStackUI
                <x-slot:footer between>
                    <x-button color="red">Delete</x-button>
                    <x-button>Save</x-button>
                </x-slot:footer>
            </x-card>
        </x-preview>
        <x-table class="mt-4" :headers="[
            ['index' => 'attribute', 'label' => 'Attribute'],
            ['index' => 'result', 'label' => 'Result'],
        ]" :rows="[
            ['attribute' => '(none)', 'result' => 'justify-end'],
            ['attribute' => 'start', 'result' => 'justify-start'],
            ['attribute' => 'center', 'result' => 'justify-center'],
            ['attribute' => 'end', 'result' => 'justify-end, written out'],
            ['attribute' => 'between', 'result' => 'justify-between'],
            ['attribute' => 'unwrapped', 'result' => 'no aligning wrapper at all'],
        ]" />
    </x-section>
    <x-section title="Skeleton" new description="A structural placeholder shaped like the card itself, for the first paint before any data exists. Everything else is derived from props the card already has.">
        <x-preview language="blade" :contents="$skeleton">
            <div class="space-y-4">
                <x-card skeleton />
                <x-card skeleton="5" header="TallStackUI" footer round="xl" />
            </div>
        </x-preview>
        <p class="mt-4">It belongs in the <x-block>placeholder()</x-block> of a <x-block>#[Lazy]</x-block> component:</p>
        <x-code class="mt-4" language="php" :contents="$skeletonLazy" />
        <x-warning warning title="skeleton defers nothing" class="mt-4">
            Blade evaluates slot content before the component renders, so the query has already run. Deferral is
            Livewire's job, through <x-block>#[Lazy]</x-block>; the skeleton is what gets drawn while it happens.
        </x-warning>
    </x-section>
    <x-section title="Loading" description="An option to set the card in a loading state.">
        <x-preview language="blade" :contents="$loading">
            <livewire:documentation.ui.card />
        </x-preview>
        <p class="mt-4">Even if you use the <x-block>header</x-block> slot to set a raw HTML content the loading effect will be visible</p>
    </x-section>
    <x-section title="Events" description="An option to listen to events when the card state changes.">
        <x-preview language="blade" :contents="$events">
            <x-card header="TallStackUI" minimize close
                    x-on:minimize="alert('Minimized!')"
                    x-on:maximize="alert('Maximized!')"
                    x-on:close="alert('Closed!')">
                TallStackUI
            </x-card>
        </x-preview>
    </x-section>
</x-layout>
