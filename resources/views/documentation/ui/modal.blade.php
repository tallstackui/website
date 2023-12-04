<x-layout>
    <x-slot:title>
        Modal
    </x-slot:title>
    <x-slot:description>
        Modal component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="modal" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-modal id="basic-modal">
                TallStackUi
            </x-modal>
            <x-button x-on:click="$modalOpen('basic-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Title Slot">
        <x-preview language="blade" :contents="$title">
            <x-modal id="title-modal">
                <x-slot:title>
                    TallStackUi
                </x-slot:title>
                TallStackUi
            </x-modal>
            <x-button x-on:click="$modalOpen('title-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$footer">
            <x-modal id="footer-modal" title="TallStackUi">
                TallStackUi
                <x-slot:footer>
                    TallStackUi
                </x-slot:footer>
            </x-modal>
            <x-button x-on:click="$modalOpen('footer-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Background Blur">
        <x-preview language="blade" :contents="$blur">
            <x-modal id="blur-modal" title="TallStackUi" blur>
                TallStackUi
            </x-modal>
            <x-button x-on:click="$modalOpen('blur-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-col space-y-2 lg:space-x-2 lg:space-y-0 lg:flex-row">
                <x-modal id="default-size-modal" title="TallStackUi">
                    Default (2xl)
                </x-modal>
                <x-modal id="sm-size-modal" title="TallStackUi" size="sm">
                    sm
                </x-modal>
                <x-modal id="md-size-modal" title="TallStackUi" size="md">
                    md
                </x-modal>
                <x-modal id="lg-size-modal" title="TallStackUi" size="lg">
                    lg
                </x-modal>
                <x-modal id="xl-size-modal" title="TallStackUi" size="xl">
                    xl
                </x-modal>
                <x-modal id="3xl-size-modal" title="TallStackUi" size="3xl">
                    3xl
                </x-modal>
                <x-modal id="4xl-size-modal" title="TallStackUi" size="4xl">
                    4xl
                </x-modal>
                <x-modal id="5xl-size-modal" title="TallStackUi" size="5xl">
                    5xl
                </x-modal>
                <x-modal id="6xl-size-modal" title="TallStackUi" size="6xl">
                    6xl
                </x-modal>
                <x-modal id="7xl-size-modal" title="TallStackUi" size="7xl">
                    7xl
                </x-modal>
                <x-button x-on:click="$modalOpen('default-size-modal')">
                    Default
                </x-button>
                <x-button x-on:click="$modalOpen('sm-size-modal')">
                    sm
                </x-button>
                <x-button x-on:click="$modalOpen('md-size-modal')">
                    md
                </x-button>
                <x-button x-on:click="$modalOpen('lg-size-modal')">
                    lg
                </x-button>
                <x-button x-on:click="$modalOpen('xl-size-modal')">
                    xl
                </x-button>
                <x-button x-on:click="$modalOpen('3xl-size-modal')">
                    3xl
                </x-button>
                <x-button x-on:click="$modalOpen('4xl-size-modal')">
                    4xl
                </x-button>
                <x-button x-on:click="$modalOpen('5xl-size-modal')">
                    5xl
                </x-button>
                <x-button x-on:click="$modalOpen('6xl-size-modal')">
                    6xl
                </x-button>
                <x-button x-on:click="$modalOpen('7xl-size-modal')">
                    7xl
                </x-button>
            </div>
        </x-preview>
        <div class="mt-2 block sm:hidden">
            <x-warning text="Applicable only on desktop devices." />
        </div>
    </x-section>
    <x-section title="Z Index">
        <x-preview language="blade" :contents="$zIndex">
            <x-modal id="z-modal" title="TallStackUi" z-index="z-10">
                TallStackUi
            </x-modal>
            <x-button x-on:click="$modalOpen('z-modal')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Persistent" description="An option to prevent the closing when click outside.">
        <x-preview language="blade" :contents="$persistent">
            <x-modal id="persistent-modal" title="TallStackUi" persistent>
                TallStackUi
                <x-slot:footer>
                    <x-button color="red" x-on:click="$modalClose('persistent-modal')">Close</x-button>
                </x-slot:footer>
            </x-modal>
            <x-button x-on:click="$modalOpen('persistent-modal')">
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
    <x-available-configuration />
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.icon')" text="Icon" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.loading')" text="Loading" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
