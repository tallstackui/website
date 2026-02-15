@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Slide
    </x-slot:title>
    <x-slot:description>
        Slide component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Slide" />
    </x-slot:personalization>
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
    <x-section title="Left Side">
        <x-preview language="blade" :contents="$left">
            <x-slide id="left-slide" left>
                TallStackUI
            </x-slide>
            <x-button x-on:click="$tsui.open.slide('left-slide')">
                Open Slide
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
                    <x-button color="red" x-on:click="$slideClose('persistent-slide')">Close</x-button>
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
    <x-section title="Wireable Personalized" description="Customize which property to use to control the slide via Livewire.">
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
    <x-available-configuration />
</x-layout>
