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
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$left">
            <div class="flex justify-end md:justify-center">
                <x-dropdown text="Menu" position="bottom-end">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Positions"
                   language="blade"
                   :contents="$positions">
            <div class="flex justify-start md:justify-center">
                <x-dropdown text="Menu" position="bottom-start">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Slot"
                   language="blade"
                   :contents="$icons">
            <div class="flex justify-end md:justify-center">
                <x-dropdown icon="chevron-down" position="bottom-end">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Slot Static"
                   description="An option to use icons without rotate animation"
                   language="blade"
                   :contents="$iconsStatic">
            <div class="flex justify-end md:justify-center">
                <x-dropdown icon="ellipsis-vertical" static position="bottom-end">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Header Slot"
                   language="blade"
                   :contents="$headerSlots">
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
    <x-section>
        <x-preview title="Action Slot"
                   language="blade"
                   :contents="$actionSlots">
            <div class="flex justify-end md:justify-center">
                <x-dropdown position="bottom-end">
                    <x-slot:action>
                        <x-button x-on:click="show = !show" sm outline>Open</x-button>
                    </x-slot:action>
                    <x-dropdown.items icon="cog" text="Settings" />
                    <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
</x-layout>
