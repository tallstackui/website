@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="slide">
    <x-slot:title>
        Slide
    </x-slot:title>
    <x-slot:description>
        Slide component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Slide" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-slide id="basic-slide">
                TallStackUI
            </x-slide>
            <x-button x-on:click="$tsui.open.slide('basic-slide')">
                Open Slide
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Positions">
        <x-preview language="blade" :contents="$positions">
            <x-slide id="right-slide">
                Right
            </x-slide>
            <x-slide id="left-slide" left>
                Left
            </x-slide>
            <x-slide id="top-slide" top>
                Top
            </x-slide>
            <x-slide id="bottom-slide" bottom>
                Bottom
            </x-slide>
            <x-button x-on:click="$tsui.open.slide('right-slide')">
                Open Right
            </x-button>
            <x-button x-on:click="$tsui.open.slide('left-slide')">
                Open Left
            </x-button>
            <x-button x-on:click="$tsui.open.slide('top-slide')">
                Open Top
            </x-button>
            <x-button x-on:click="$tsui.open.slide('bottom-slide')">
                Open Bottom
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Title Slot">
        <x-preview language="blade" :contents="$title">
            <x-slide id="title-slide">
                <x-slot:title>
                    TallStackUI
                </x-slot:title>
                TallStackUI
            </x-slide>
            <x-button x-on:click="$tsui.open.slide('title-slide')">
                Open Slide
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$footer">
            <x-slide id="footer-slide">
                TallStackUI
                <x-slot:footer start>
                    TallStackUI
                </x-slot:footer>
            </x-slide>
            <x-button x-on:click="$tsui.open.slide('footer-slide')">
                Open Slide
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Background Blur">
        <x-preview language="blade" :contents="$blur">
            <x-slide id="blur-slide-sm" title="TallStackUI" blur>
                SM
            </x-slide>
            <x-slide id="blur-slide-md" title="TallStackUI" blur="md">
                MD
            </x-slide>
            <x-slide id="blur-slide-lg" title="TallStackUI" blur="lg">
                LG
            </x-slide>
            <x-slide id="blur-slide-xl" title="TallStackUI" blur="xl">
                XL
            </x-slide>
            <x-button x-on:click="$tsui.open.slide('blur-slide-sm')">
                SM
            </x-button>
            <x-button x-on:click="$tsui.open.slide('blur-slide-md')">
                MD
            </x-button>
            <x-button x-on:click="$tsui.open.slide('blur-slide-lg')">
                LG
            </x-button>
            <x-button x-on:click="$tsui.open.slide('blur-slide-xl')">
                XL
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-col items-start space-y-2">
                <x-slide id="default-size-slide" title="TallStackUI">
                    Default (lg)
                </x-slide>
                <x-slide id="sm-size-slide" title="TallStackUI" size="sm">
                    sm
                </x-slide>
                <x-slide id="md-size-slide" title="TallStackUI" size="md">
                    md
                </x-slide>
                <x-slide id="xl-size-slide" title="TallStackUI" size="xl">
                    xl
                </x-slide>
                <x-slide id="3xl-size-slide" title="TallStackUI" size="3xl">
                    3xl
                </x-slide>
                <x-slide id="4xl-size-slide" title="TallStackUI" size="4xl">
                    4xl
                </x-slide>
                <x-slide id="5xl-size-slide" title="TallStackUI" size="5xl">
                    5xl
                </x-slide>
                <x-slide id="6xl-size-slide" title="TallStackUI" size="6xl">
                    6xl
                </x-slide>
                <x-slide id="7xl-size-slide" title="TallStackUI" size="7xl">
                    7xl
                </x-slide>
                <x-slide id="full-size-slide" title="TallStackUI" size="full">
                    Full
                </x-slide>
                <x-button x-on:click="$tsui.open.slide('default-size-slide')">
                    Default
                </x-button>
                <x-button x-on:click="$tsui.open.slide('sm-size-slide')">
                    sm
                </x-button>
                <x-button x-on:click="$tsui.open.slide('md-size-slide')">
                    md
                </x-button>
                <x-button x-on:click="$tsui.open.slide('xl-size-slide')">
                    xl
                </x-button>
                <x-button x-on:click="$tsui.open.slide('3xl-size-slide')">
                    3xl
                </x-button>
                <x-button x-on:click="$tsui.open.slide('4xl-size-slide')">
                    4xl
                </x-button>
                <x-button x-on:click="$tsui.open.slide('5xl-size-slide')">
                    5xl
                </x-button>
                <x-button x-on:click="$tsui.open.slide('6xl-size-slide')">
                    6xl
                </x-button>
                <x-button x-on:click="$tsui.open.slide('7xl-size-slide')">
                    7xl
                </x-button>
                <x-button x-on:click="$tsui.open.slide('full-size-slide')">
                    Full
                </x-button>
            </div>
        </x-preview>
        <div class="mt-2 block sm:hidden">
            <x-warning text="Applicable only on desktop devices." />
        </div>
    </x-section>
    <x-section title="Z Index">
        <x-preview language="blade" :contents="$zIndex">
            <x-slide id="z-slide" title="TallStackUI" z-index="z-10">
                TallStackUI
            </x-slide>
            <x-button x-on:click="$tsui.open.slide('z-slide')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Persistent" description="An option to prevent the user from closing the slide when click outside.">
        <x-preview language="blade" :contents="$persistent">
            <x-slide id="persistent-slide" title="TallStackUI" persistent>
                TallStackUI
                <x-slot:footer end>
                    <x-button color="red" x-on:click="$tsui.slide.close('persistent-slide')">Close</x-button>
                </x-slot:footer>
            </x-slide>
            <x-button x-on:click="$tsui.open.slide('persistent-slide')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-warning text="Make sure to provide some way to close the slide when using this option, such as a button within the slide." />
    <x-section class="mt-4" title="Wireable" description="An option to control the slide via Livewire.">
        <x-preview language="blade" :contents="$wireable">
            <livewire:documentation.slide.entangle/>
        </x-preview>
    </x-section>
    <x-section title="Wireable Customized" description="Customize which property to use to control the slide via Livewire.">
        <x-preview language="blade" :contents="$wireableCustomized">
            <livewire:documentation.slide.customentangle/>
        </x-preview>
    </x-section>
    <x-section title="AlpineJS Helper" description="Helpers to open and close the slide using AlpineJS.">
        <x-code language="blade" :contents="$alpinejs"/>
    </x-section>
    <x-section title="Events" description="An option to listen event when the slide is opening or closing.">
        <x-preview language="blade" :contents="$events">
            <x-slide id="event-open" title="TallStackUI" x-on:open="alert('Opened!')">
                TallStackUI
            </x-slide>
            <x-slide id="event-close" title="TallStackUI" x-on:close="alert('Closed!')">
                TallStackUI
            </x-slide>
            <x-button x-on:click="$tsui.open.slide('event-open')">
                Open Event
            </x-button>
            <x-button x-on:click="$tsui.open.slide('event-close')">
                Close Event
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Focus Helper" description="Ah helper to interact with slide events to easily focus an input when slide open.">
        <div class="space-y-4">
            <x-code language="blade" :contents="$focus"/>
            <p>
                You can control the time (in milliseconds) to wait before focusing the input, default is <x-block>250</x-block>:
            </p>
            <x-code language="blade" :contents="$focusTime"/>
            <p>
                Additionally, you can use a custom <x-block>data-focus</x-block> or <x-block>x-ref</x-block> HTML attribute to determine the input to be focused:
            </p>
            <x-code language="blade" :contents="$focusUsingDataAttribute"/>
        </div>
    </x-section>
    <x-available-configuration />
    <x-section title="Paddingless" new description="Strips the horizontal padding of the main slot. Vertical bleed lives on the outer panel, shared with the header and the footer, so it stays a soft customization of wrapper.fifth.">
        <x-code language="blade" :contents="$paddingless" />
    </x-section>
    <x-section title="Footer Alignment" new description="Read from the slot itself. Combining alignments, or mixing one with unwrapped, throws.">
        <x-code language="blade" :contents="$footerAlignment" />
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
        <x-warning warning title="The default moved" class="mt-4">
            A slide footer with no attribute used to sit at the start, since the base block carried
            <x-block>flex</x-block> with no <x-block>justify-*</x-block>. It defaults to the end now, and
            <x-block>start</x-block> restores the old look.
        </x-warning>
    </x-section>
</x-layout>
