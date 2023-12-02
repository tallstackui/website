<x-layout>
    <x-slot:title>
        Dropdown
    </x-slot:title>
    <x-slot:description>
        Dropdown component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="dropdown" />
        <livewire:documentation.personalization :personalization="$personalizationItems" component="dropdown.items" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$left">
            <div class="flex justify-end md:justify-center">
                <x-dropdown text="Menu" position="bottom-end">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Available Positions">
        <x-slot:description>
            All available positions based on the <a href="https://alpinejs.dev/plugins/anchor" target="_blank" class="underline">AlpineJS anchor plugin.</a>
        </x-slot:description>
        <x-preview language="blade" :contents="$positions">
            <div class="flex justify-start md:justify-center">
                <x-dropdown text="Menu" position="bottom-start">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Icon Slot">
        <x-preview language="blade" :contents="$icons">
            <div class="flex justify-end md:justify-center">
                <x-dropdown icon="chevron-down" position="bottom-end">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Icon Slot Static" description="An option to use icons without rotate animation">
        <x-preview language="blade" :contents="$iconsStatic">
            <div class="flex justify-end md:justify-center">
                <x-dropdown icon="ellipsis-vertical" static position="bottom-end">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Header Slot">
        <x-preview language="blade" :contents="$headerSlots">
            <div class="flex justify-end md:justify-center">
                <x-dropdown text="Menu" position="bottom-end">
                    <x-slot:header>
                        <p class="text-sm">Welcome!</p>
                    </x-slot:header>
                    <x-dropdown.items icon="cog" text="Settings" />
                    <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Action Slot">
        <x-preview language="blade" :contents="$actionSlots">
            <div class="flex justify-end md:justify-center">
                <x-dropdown position="bottom-end">
                    <x-slot:action>
                        <x-button x-on:click="show = !show" sm>Open</x-button>
                    </x-slot:action>
                    <x-dropdown.items icon="cog" text="Settings" />
                    <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation href="{{ route('documentation.ui.card') }}" text="Card" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation href="{{ route('documentation.ui.error') }}" text="Error" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
