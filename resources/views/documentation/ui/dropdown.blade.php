@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content :ai="['Dropdown' => 'dropdown/main', 'Dropdown Items' => 'dropdown/items', 'Dropdown Submenu' => 'dropdown/submenu']">
    <x-slot:title>
        Dropdown
    </x-slot:title>
    <x-slot:description>
        Dropdown component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Dropdown\Main" title="Dropdown" />
        <livewire:customization :customization="$customizationItems" component="Dropdown\Items" />
        <livewire:customization :customization="$customizationSubmenu" component="Dropdown\Submenu" />
    </x-slot:customization>
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
    <x-section title="Open when hover" new>
        <x-preview language="blade" :contents="$hover">
            <div class="flex justify-end md:justify-center">
                <x-dropdown text="Open when hover" position="bottom-end" hover>
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
    <x-section title="Links">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$links">
                <div class="flex justify-end md:justify-center">
                    <x-dropdown icon="chevron-down" position="bottom-end">
                        <a href="https://google.com.br" target="_blank">
                            <x-dropdown.items text="Google" />
                        </a>
                        <a href="https://twitter.com" target="_blank">
                            <x-dropdown.items text="Twitter" separator />
                        </a>
                    </x-dropdown>
                </div>
            </x-preview>
            <p>You can also use the attributes <x-block>navigate</x-block> or <x-block>navigateHover</x-block> when using <a href="https://livewire.laravel.com/docs/navigate" target="_blank" class="underline">Livewire Navigate mode.</a></p>
        </div>
    </x-section>
    <x-section title="Icon">
        <x-preview language="blade" :contents="$icons">
            <div class="flex justify-end md:justify-center">
                <x-dropdown icon="chevron-down" position="bottom-end">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Static Icon" description="An option to use icons without rotate animation">
        <x-preview language="blade" :contents="$iconsStatic">
            <div class="flex justify-end md:justify-center">
                <x-dropdown icon="ellipsis-vertical" static position="bottom-end">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex justify-end md:justify-center gap-2">
                <x-dropdown text="XS" xs position="bottom-end">
                    <x-dropdown.items text="Profile" icon="user" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
                <x-dropdown text="SM" sm position="bottom-end">
                    <x-dropdown.items text="Profile" icon="user" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
                <x-dropdown text="MD" position="bottom-end">
                    <x-dropdown.items text="Profile" icon="user" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
                <x-dropdown text="LG" lg position="bottom-end">
                    <x-dropdown.items text="Profile" icon="user" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Width">
        <x-preview language="blade" :contents="$widths">
            <div class="flex justify-end md:justify-center gap-2">
                <x-dropdown text="xxs" width="xxs">
                    <x-dropdown.items text="xxs" icon="user" />
                </x-dropdown>
                <x-dropdown text="xs" width="xs">
                    <x-dropdown.items text="xs" icon="user" />
                </x-dropdown>
                <x-dropdown text="sm" width="sm">
                    <x-dropdown.items text="sm" icon="user" />
                </x-dropdown>
                <x-dropdown text="md" width="md">
                    <x-dropdown.items text="md" icon="user" />
                </x-dropdown>
                <x-dropdown text="lg" width="lg">
                    <x-dropdown.items text="lg" icon="user" />
                </x-dropdown>
                <x-dropdown text="xl" width="xl">
                    <x-dropdown.items text="xl" icon="user" />
                </x-dropdown>
                <x-dropdown text="2xl" width="2xl">
                    <x-dropdown.items text="2xl" icon="user" />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Header Slot">
        <x-preview language="blade" :contents="$headerSlots">
            <div class="flex justify-end md:justify-center">
                <x-dropdown text="Menu" position="bottom-end">
                    <x-slot:header>
                        <x-theme-switch block />
                    </x-slot:header>
                    <x-dropdown.items icon="cog" text="Settings" />
                    <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Dropdown Submenu" description="An option to allow the usage of multiples dropdowns nested.">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$sub">
                <div class="flex justify-end md:justify-center">
                    <x-dropdown text="Menu">
                        <x-dropdown.items text="PHP" />
                        <x-dropdown.items text="Python" />
                        <x-dropdown.submenu text="Second Level">
                            <x-dropdown.items text="JavaScript" />
                            <x-dropdown.items text="Java" />
                            <x-dropdown.submenu text="Third Level">
                                <x-dropdown.items text="C++" />
                                <x-dropdown.items text="Golang" />
                            </x-dropdown.submenu>
                        </x-dropdown.submenu>
                    </x-dropdown>
                </div>
            </x-preview>
            <p>
                You can also set the left chevron icon to the left side if your submenu is left-side oriented:
            </p>
            <x-code language="blade" :contents="$subLeft" />
        </div>
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
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <div class="flex justify-end md:justify-center">
                <x-dropdown text="Menu" x-on:open="alert(`Open, 'show' status: ${$event.detail.status}`)" x-on:select="alert('Selected')">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
</x-layout>
