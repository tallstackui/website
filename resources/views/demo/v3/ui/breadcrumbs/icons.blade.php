<x-demo-layout title="Breadcrumbs Icons">
    <div class="mx-auto max-w-3xl px-6 py-10">
        <x-breadcrumbs :items="[
            ['label' => 'Home', 'link' => '/', 'icon' => 'home'],
            ['label' => 'Settings', 'link' => '/', 'icon' => 'cog-6-tooth'],
            ['label' => 'Profile'],
        ]" />
    </div>
</x-demo-layout>
