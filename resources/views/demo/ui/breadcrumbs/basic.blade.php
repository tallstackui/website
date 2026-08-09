<x-demo-layout title="Breadcrumbs Basic">
    <div class="mx-auto max-w-3xl px-6 py-10">
        <x-breadcrumbs
            :items="[
                ['label' => 'Home', 'link' => '#'],
                ['label' => 'Users', 'link' => '#'],
                ['label' => 'John Doe'],
            ]"
        />
    </div>
</x-demo-layout>
