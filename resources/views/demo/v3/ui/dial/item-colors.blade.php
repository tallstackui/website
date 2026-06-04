<x-demo-layout title="Dial Item Colors">
    <div class="flex min-h-[340px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500 dark:text-slate-400">
        <p class="text-center">
            Open the dial (bottom-right) to see per-item colors: <b>solid</b>,
            <b>light</b>, and <b>outline</b> styles, plus a neutral item.
        </p>
    </div>

    <x-dial>
        <x-dial.items icon="pencil" label="Edit" color="blue" />
        <x-dial.items icon="share" label="Share" color="green" style="light" />
        <x-dial.items icon="trash" label="Delete" color="red" style="outline" />
        <x-dial.items icon="star" label="Favorite" />
    </x-dial>
</x-demo-layout>
