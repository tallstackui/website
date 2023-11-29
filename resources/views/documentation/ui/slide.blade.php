<x-layout>
    <x-slot:title>
        Slide
    </x-slot:title>
    <x-slot:description>
        Slide component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="slide" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-slide id="basic-slide">
                TallStackUi
            </x-slide>
            <x-button x-on:click="$slideOpen('basic-slide')">
                Open Slide
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Left Side">
        <x-preview language="blade" :contents="$left">
            <x-slide id="left-slide" left>
                TallStackUi
            </x-slide>
            <x-button x-on:click="$slideOpen('left-slide')">
                Open Slide
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Title Slot">
        <x-preview language="blade" :contents="$title">
            <x-slide id="title-slide">
                <x-slot:title>
                    TallStackUi
                </x-slot:title>
                TallStackUi
            </x-slide>
            <x-button x-on:click="$slideOpen('title-slide')">
                Open Slide
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$footer">
            <x-slide id="footer-slide">
                TallStackUi
                <x-slot:footer start>
                    TallStackUi
                </x-slot:footer>
            </x-slide>
            <x-button x-on:click="$slideOpen('footer-slide')">
                Open Slide
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Background Blur">
        <x-preview language="blade" :contents="$blur">
            <x-slide id="background-blur-slide" blur>
                TallStackUi
            </x-slide>
            <x-button x-on:click="$slideOpen('background-blur-slide')">
                Open Slide
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-col space-y-2 lg:space-x-2 lg:space-y-0 lg:flex-row">
                <x-slide id="default-size-slide" title="TallStackUi">
                    Default (lg)
                </x-slide>
                <x-slide id="sm-size-slide" title="TallStackUi" size="sm">
                    sm
                </x-slide>
                <x-slide id="md-size-slide" title="TallStackUi" size="md">
                    md
                </x-slide>
                <x-slide id="xl-size-slide" title="TallStackUi" size="xl">
                    xl
                </x-slide>
                <x-slide id="3xl-size-slide" title="TallStackUi" size="3xl">
                    3xl
                </x-slide>
                <x-slide id="4xl-size-slide" title="TallStackUi" size="4xl">
                    4xl
                </x-slide>
                <x-slide id="5xl-size-slide" title="TallStackUi" size="5xl">
                    5xl
                </x-slide>
                <x-slide id="6xl-size-slide" title="TallStackUi" size="6xl">
                    6xl
                </x-slide>
                <x-slide id="7xl-size-slide" title="TallStackUi" size="7xl">
                    7xl
                </x-slide>
                <x-slide id="full-size-slide" title="TallStackUi" size="full">
                    Full
                </x-slide>
                <x-button x-on:click="$slideOpen('default-size-slide')">
                    Default
                </x-button>
                <x-button x-on:click="$slideOpen('sm-size-slide')">
                    sm
                </x-button>
                <x-button x-on:click="$slideOpen('md-size-slide')">
                    md
                </x-button>
                <x-button x-on:click="$slideOpen('xl-size-slide')">
                    xl
                </x-button>
                <x-button x-on:click="$slideOpen('3xl-size-slide')">
                    3xl
                </x-button>
                <x-button x-on:click="$slideOpen('4xl-size-slide')">
                    4xl
                </x-button>
                <x-button x-on:click="$slideOpen('5xl-size-slide')">
                    5xl
                </x-button>
                <x-button x-on:click="$slideOpen('6xl-size-slide')">
                    6xl
                </x-button>
                <x-button x-on:click="$slideOpen('7xl-size-slide')">
                    7xl
                </x-button>
                <x-button x-on:click="$slideOpen('full-size-slide')">
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
            <x-slide id="z-slide" title="TallStackUi" z-index="z-10">
                TallStackUi
            </x-slide>
            <x-button x-on:click="$slideOpen('z-slide')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Persistent" description="An option to prevent the user from closing the slide when click outside.">
        <x-preview language="blade" :contents="$persistent">
            <x-slide id="persistent-slide" title="TallStackUi" persistent>
                TallStackUi
                <x-slot:footer end>
                    <x-button color="red" x-on:click="$slideClose('persistent-slide')">Close</x-button>
                </x-slot:footer>
            </x-slide>
            <x-button x-on:click="$slideOpen('persistent-slide')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-warning text="Make sure to provide some way to close the slide when using this option, such as a button within the slide." />
    <x-section class="mt-4" title="Wireable" description="An option to control the modal via Livewire.">
        <x-preview language="blade" :contents="$wireable">
            <livewire:documentation.slide.entangle/>
        </x-preview>
    </x-section>
    <x-section title="Wireable Personalized" description="Customize which property to use to control the modal via Livewire.">
        <x-preview language="blade" :contents="$wireableCustomized">
            <livewire:documentation.slide.customentangle/>
        </x-preview>
    </x-section>
    <x-section title="AlpineJS Helper" description="Helpers to open and close the slide using AlpineJS.">
        <x-code language="blade" :contents="$alpinejs"/>
    </x-section>
    <x-available-configuration />
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.ui.select') }}" text="Select" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.ui.tab') }}" text="Tab" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
