<x-demo-layout title="Breadcrumbs Tooltips">
    <div class="mx-auto max-w-3xl space-y-4 px-6 py-10">
        <x-breadcrumbs
            :items="[
                ['label' => 'Home', 'link' => '#', 'tooltip' => 'Back to homepage'],
                ['label' => 'Users', 'link' => '#', 'tooltip' => 'View all users'],
                ['label' => 'John Doe'],
            ]"
        />

        <p class="dark:text-dark-400 text-xs text-slate-500">
            Hover any item with a tooltip to see it pop up.
        </p>
    </div>
</x-demo-layout>
