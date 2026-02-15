@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Modal
    </x-slot:title>
    <x-slot:description>
        Modal component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Modal" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-modal id="basic-modal">
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('basic-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Title Slot">
        <x-preview language="blade" :contents="$title">
            <x-modal id="title-modal">
                <x-slot:title>
                    TallStackUI
                </x-slot:title>
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('title-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$footer">
            <x-modal id="footer-modal" title="TallStackUI">
                TallStackUI
                <x-slot:footer>
                    TallStackUI
                </x-slot:footer>
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('footer-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Background Blur">
        <x-preview language="blade" :contents="$blur">
            <x-modal id="blur-modal-sm" title="TallStackUI" blur>
                SM
            </x-modal>
            <x-modal id="blur-modal-md" title="TallStackUI" blur="md">
                MD
            </x-modal>
            <x-modal id="blur-modal-lg" title="TallStackUI" blur="lg">
                LG
            </x-modal>
            <x-modal id="blur-modal-xl" title="TallStackUI" blur="xl">
                XL
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('blur-modal-sm')">
                SM
            </x-button>
            <x-button x-on:click="$tsui.open.modal('blur-modal-md')">
                MD
            </x-button>
            <x-button x-on:click="$tsui.open.modal('blur-modal-lg')">
                LG
            </x-button>
            <x-button x-on:click="$tsui.open.modal('blur-modal-xl')">
                XL
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-col items-start space-y-2">
                <x-modal id="default-size-modal" title="TallStackUI">
                    Default (2xl)
                </x-modal>
                <x-modal id="sm-size-modal" title="TallStackUI" size="sm">
                    sm
                </x-modal>
                <x-modal id="md-size-modal" title="TallStackUI" size="md">
                    md
                </x-modal>
                <x-modal id="lg-size-modal" title="TallStackUI" size="lg">
                    lg
                </x-modal>
                <x-modal id="xl-size-modal" title="TallStackUI" size="xl">
                    xl
                </x-modal>
                <x-modal id="3xl-size-modal" title="TallStackUI" size="3xl">
                    3xl
                </x-modal>
                <x-modal id="4xl-size-modal" title="TallStackUI" size="4xl">
                    4xl
                </x-modal>
                <x-modal id="5xl-size-modal" title="TallStackUI" size="5xl">
                    5xl
                </x-modal>
                <x-modal id="6xl-size-modal" title="TallStackUI" size="6xl">
                    6xl
                </x-modal>
                <x-modal id="7xl-size-modal" title="TallStackUI" size="7xl">
                    7xl
                </x-modal>
                <x-button x-on:click="$tsui.open.modal('default-size-modal')">
                    Default
                </x-button>
                <x-button x-on:click="$tsui.open.modal('sm-size-modal')">
                    sm
                </x-button>
                <x-button x-on:click="$tsui.open.modal('md-size-modal')">
                    md
                </x-button>
                <x-button x-on:click="$tsui.open.modal('lg-size-modal')">
                    lg
                </x-button>
                <x-button x-on:click="$tsui.open.modal('xl-size-modal')">
                    xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('3xl-size-modal')">
                    3xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('4xl-size-modal')">
                    4xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('5xl-size-modal')">
                    5xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('6xl-size-modal')">
                    6xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('7xl-size-modal')">
                    7xl
                </x-button>
            </div>
        </x-preview>
        <div class="mt-2 block sm:hidden">
            <x-warning text="Applicable only on desktop devices." />
        </div>
    </x-section>
    <x-section title="Centered">
        <x-preview language="blade" :contents="$center">
            <x-modal id="center" title="TallStackUI" center>
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('center')">
                Open
            </x-button>
        </x-preview>
        <div class="mt-2 block sm:hidden">
            <x-warning text="Applicable only on desktop devices." />
        </div>
    </x-section>
    <x-section title="Z Index">
        <x-preview language="blade" :contents="$zIndex">
            <x-modal id="z-modal" title="TallStackUI" z-index="z-10">
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('z-modal')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Persistent" description="An option to prevent the closing when click outside.">
        <x-preview language="blade" :contents="$persistent">
            <x-modal id="persistent-modal" title="TallStackUI" persistent>
                TallStackUI
                <x-slot:footer>
                    <x-button color="red" x-on:click="$modalClose('persistent-modal')">Close</x-button>
                </x-slot:footer>
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('persistent-modal')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-warning text="Make sure to provide some way to close the modal when using this option, such as a button within the modal." />
    <x-section class="mt-4" title="Wireable" description="An option to control the modal via Livewire.">
        <x-preview language="blade" :contents="$wireable">
            <livewire:documentation.modal.entangle/>
        </x-preview>
    </x-section>
    <x-section title="Wireable Personalized" description="Customize which property to use to control the modal via Livewire.">
        <x-preview language="blade" :contents="$wireableCustomized">
            <livewire:documentation.modal.customentangle/>
        </x-preview>
    </x-section>
    <x-section title="AlpineJS Helper" description="Helpers to open and close the modal using AlpineJS.">
        <x-code language="blade" :contents="$alpinejs"/>
    </x-section>
    <x-section title="Events" description="An option to listen event when the modal is opening or closing.">
        <x-preview language="blade" :contents="$events">
            <x-modal id="event-open" title="TallStackUI" x-on:open="alert('Opened!')">
                TallStackUI
            </x-modal>
            <x-modal id="event-close" title="TallStackUI" x-on:close="alert('Closed!')">
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('event-open')">
                Open Event
            </x-button>
            <x-button x-on:click="$tsui.open.modal('event-close')">
                Close Event
            </x-button>
        </x-preview>
    </x-section>
    <x-available-configuration />
</x-layout>
