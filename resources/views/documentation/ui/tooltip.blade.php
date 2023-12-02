<x-layout>
    <x-slot:title>
        Tooltip
    </x-slot:title>
    <x-slot:description>
        Tooltip component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="tooltip" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Top" position="top"/>
                <x-tooltip text="Bottom" position="bottom"/>
                <x-tooltip text="Left" position="left"/>
                <x-tooltip text="Right" position="right"/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Customized Icon">
        <x-preview language="blade" :contents="$icons">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Top" position="top" icon="exclamation-circle"/>
                <x-tooltip text="Bottom" position="bottom" icon="exclamation-triangle"/>
                <x-tooltip text="Left" position="left" icon="shield-exclamation"/>
                <x-tooltip text="Right" position="right" icon="shield-check"/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-tooltip text="SM" sm/>
                <x-tooltip text="MD" md/>
                <x-tooltip text="LG" lg/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="HTML Content">
        <x-preview language="blade" :contents="$html">
            <div class="inline-flex space-x-2">
                <x-tooltip>
                    <b>Tall</b><i>Stack</i><u>Ui</u>
                </x-tooltip>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="gap-2 space-y-2">
                <x-tooltip text="primary" />
                <x-tooltip text="secondary" color="secondary" />
                <x-tooltip text="slate" color="slate" />
                <x-tooltip text="gray" color="gray" />
                <x-tooltip text="zinc" color="zinc" />
                <x-tooltip text="neutral" color="neutral" />
                <x-tooltip text="stone" color="stone" />
                <x-tooltip text="red" color="red" />
                <x-tooltip text="orange" color="orange" />
                <x-tooltip text="amber" color="amber" />
                <x-tooltip text="yellow" color="yellow" />
                <x-tooltip text="lime" color="lime" />
                <x-tooltip text="green" color="green" />
                <x-tooltip text="emerald" color="emerald" />
                <x-tooltip text="teal" color="teal" />
                <x-tooltip text="cyan" color="cyan" />
                <x-tooltip text="sky" color="sky" />
                <x-tooltip text="blue" color="blue" />
                <x-tooltip text="indigo" color="indigo" />
                <x-tooltip text="violet" color="violet" />
                <x-tooltip text="purple" color="purple" />
                <x-tooltip text="fuchsia" color="fuchsia" />
                <x-tooltip text="pink" color="pink" />
                <x-tooltip text="rose" color="rose" />
                <x-tooltip text="black" color="black" />
                <x-tooltip text="white" color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Outline Variations">
        <x-preview language="blade" :contents="$outlines">
            <div class="gap-2 space-y-2">
                <x-tooltip text="primary" outline />
                <x-tooltip text="secondary" color="secondary" outline />
                <x-tooltip text="slate" color="slate" outline />
                <x-tooltip text="gray" color="gray" outline />
                <x-tooltip text="zinc" color="zinc" outline />
                <x-tooltip text="neutral" color="neutral" outline />
                <x-tooltip text="stone" color="stone" outline />
                <x-tooltip text="red" color="red" outline />
                <x-tooltip text="orange" color="orange" outline />
                <x-tooltip text="amber" color="amber" outline />
                <x-tooltip text="yellow" color="yellow" outline />
                <x-tooltip text="lime" color="lime" outline />
                <x-tooltip text="green" color="green" outline />
                <x-tooltip text="emerald" color="emerald" outline />
                <x-tooltip text="teal" color="teal" outline />
                <x-tooltip text="cyan" color="cyan" outline />
                <x-tooltip text="sky" color="sky" outline />
                <x-tooltip text="blue" color="blue" outline />
                <x-tooltip text="indigo" color="indigo" outline />
                <x-tooltip text="violet" color="violet" outline />
                <x-tooltip text="purple" color="purple" outline />
                <x-tooltip text="fuchsia" color="fuchsia" outline />
                <x-tooltip text="pink" color="pink" outline />
                <x-tooltip text="rose" color="rose" outline />
                <x-tooltip text="black" color="black" outline />
                <x-tooltip text="white" color="white" outline />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation href="{{ route('documentation.ui.tab') }}" text="Tab" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation href="{{ route('documentation.ui.dialog') }}" text="Dialog" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
