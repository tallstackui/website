<nav {{ $attributes->merge(['class' => 'text-base lg:text-sm']) }}>
    <div class="mb-6 space-y-2 pr-4 sm:flex-1 sm:pr-0">
        <livewire:version-selector />
        <x-button
            icon="wrench-screwdriver"
            color="secondary"
            light
            block
            x-on:click="$tsui.open.modal('prefix-modal')"
            round
            xs
        >
            Configure Documentation
        </x-button>
    </div>
    @include('components.layout.navigation.tree')
</nav>
