<x-layout>
    <x-slot:title>
        Alert
    </x-slot:title>
    <x-slot:description>
        Alert components similar to Bootstrap alerts.
    </x-slot:description>
    <x-section title="Basic Usage">
        <x-alert>
            TasteUi is a library of ready-to-use components for TALL Stack applications.
        </x-alert>
<x-code language="blade">
@verbatim
<x-alert>
    {{-- ... --}}
</x-alert>
@endverbatim
</x-code>
    </x-section>
    <x-section title="Title">
        <x-alert title="TasteUi">
            TasteUi is a library of ready-to-use components for TALL Stack applications.
        </x-alert>
<x-code language="blade">
@verbatim
<x-alert title="TasteUi">
    {{-- ... --}}
</x-alert>
@endverbatim
</x-code>
    </x-section>
    <x-section title="Closeable" description="An option to allow the user to hide the alert">
        <x-alert title="TasteUi" closeable>
            TasteUi is a library of ready-to-use components for TALL Stack applications.
        </x-alert>
<x-code language="blade">
@verbatim
<x-alert title="TasteUi" closeable>
    {{-- ... --}}
</x-alert>
@endverbatim
</x-code>
        <p>All TailwindCSS colors are available to be used.</p>
    </x-section>
    <x-section title="Colored" description="Variety of TailwindCSS colors">
        <div class="space-y-2">
            <x-alert title="TasteUi" closeable>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
            <x-alert title="TasteUi" color="yellow" closeable>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
            <x-alert title="TasteUi" color="red" closeable>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
            <x-alert title="TasteUi" color="sky" closeable>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
            <x-alert title="TasteUi" color="orange" closeable>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
        </div>
<x-code language="blade">
@verbatim
<x-alert title="TasteUi" color="orange" closeable>
    {{-- ... --}}
</x-alert>
@endverbatim
</x-code>
    </x-section>
    <x-section title="Translucent" description="A translucent color variation">
        <div class="space-y-2">
            <x-alert title="TasteUi" closeable translucent>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
            <x-alert title="TasteUi" color="yellow" closeable translucent>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
            <x-alert title="TasteUi" color="red" closeable translucent>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
            <x-alert title="TasteUi" color="sky" closeable translucent>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
            <x-alert title="TasteUi" color="orange" closeable translucent>
                TasteUi is a library of ready-to-use components for TALL Stack applications.
            </x-alert>
        </div>
<x-code language="blade">
@verbatim
<x-alert title="TasteUi" color="orange" closeable translucent>
    {{-- ... --}}
</x-alert>
@endverbatim
</x-code>
    </x-section>
</x-layout>
