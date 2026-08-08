@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="spinner">
    <x-slot:title>Spinner</x-slot:title>
    <x-slot:description>Spinner component.</x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Spinner" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        A purely visual loading indicator. It binds nothing to Livewire and holds no state, so it works anywhere,
        including outside Livewire. Only <x-block>thinking</x-block> needs AlpineJS, to cycle its glyphs.
    </x-section>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-spinner />
        </x-preview>
    </x-section>
    <x-section title="Variations" new description="Thirteen variations, one boolean flag each. Two at once throws.">
        <x-preview language="blade" :contents="$variations">
            <div class="flex flex-wrap items-center gap-8">
                <x-spinner ring />
                <x-spinner throbber />
                <x-spinner gradient />
                <x-spinner ping />
                <x-spinner dots />
                <x-spinner pulse />
                <x-spinner typing />
                <x-spinner bars />
                <x-spinner wave />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Textual Variations"
        new
        description="shimmer and caret animate the text, so text or the default slot is required. terminal and thinking draw their own."
    >
        <x-preview language="blade" :contents="$textual">
            <div class="flex flex-col gap-4">
                <x-spinner shimmer text="Loading the report" />
                <x-spinner caret text="Generating" />
                <x-spinner terminal text="npm run build" />
                <x-spinner thinking />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" new description="Two flags resolve by precedence: lg, md, sm, xs.">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex items-center gap-6">
                <x-spinner xs />
                <x-spinner sm />
                <x-spinner md />
                <x-spinner lg />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Colors"
        new
        description="Every variation paints from currentColor, so one text-* class drives borders, dots, bars and gradients at once."
    >
        <x-preview language="blade" :contents="$colors">
            <div class="flex flex-wrap items-center gap-8">
                <x-spinner color="red" />
                <x-spinner bars color="emerald" />
                <x-spinner wave color="amber" />
                <x-spinner dots color="blue" />
                <x-spinner class="text-[#ff5f1f]" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Label"
        new
        description='The root carries role="status". Without a label a sr-only fallback is emitted.'
    >
        <x-preview language="blade" :contents="$label">
            <div class="flex flex-col gap-4">
                <x-spinner />
                <x-spinner text="Sending the file" />
                <x-spinner>Sending <b>3</b> files</x-spinner>
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Thinking"
        new
        description="The first frame renders server-side, so there is no gap before AlpineJS boots."
    >
        <x-preview language="blade" :contents="$thinking">
            <div class="flex flex-col gap-4">
                <x-spinner thinking />
                <x-spinner thinking text="Analyzing" />
                <x-spinner thinking :text="false" />
                <x-spinner thinking :interval="250" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Inside a Button" new>
        <x-preview language="blade" :contents="$button">
            <x-button color="primary">
                <x-slot:left>
                    <x-spinner xs class="text-white" />
                </x-slot:left>
                Saving
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Configuration" new description="An unknown type or size throws instead of falling back.">
        <x-code language="php" :contents="$configuration" />
    </x-section>
    <x-section title="Spinner, Loading & Skeleton" new description="Three different moments. None replaces another.">
        <x-table
            :headers="[
            ['index' => 'state', 'label' => 'State'],
            ['index' => 'tool', 'label' => 'Tool'],
            ['index' => 'situation', 'label' => 'Situation'],
        ]"
            :rows="[
            ['state' => 'First paint, no data yet', 'tool' => 'skeleton', 'situation' => '#[Lazy] placeholder, initial load'],
            ['state' => 'Refetch, data already on screen', 'tool' => 'loading', 'situation' => 'Sort, paginate, search, save'],
            ['state' => 'Anything else that has to spin', 'tool' => 'spinner', 'situation' => 'Inline, in a button, in an empty state'],
        ]"
        >
            @interact('column_tool', $row)
                <x-block>{{ $row['tool'] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
</x-layout>
