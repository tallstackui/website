@props([
    'id',
    'contents' => null,
    'title' => null,
    'description' => null,
    'numbers' => false,
    'background' => true,
    'language' => 'php',
])

<div x-data="{ code : false }" @isset($id) id="{{ $id }}" @endisset>
    <div {{ $attributes->merge(['class' => 'flex items-center justify-between']) }}>
        <div>
            @if ($title)
                <h1 @class(['text-xl tracking-tight text-slate-900 font-medium', 'mb-4' => !$description])>
                    {{ $title }}
                </h1>
            @endif
            @if ($description)
                <p class="mb-4 text-sm text-slate-500">{{ $description }}</p>
            @endif
        </div>
        @if ($contents)
        <div class="flex">
            <button class="flex items-center overflow-hidden rounded-md p-1 focus:outline-none sm:px-2"
                    :class="{
                    'dark:bg-secondary-700 text-red-500 font-semibold':  code,
                    'text-gray-400': !code
                }" type="button" x-on:click="code = !code" x-cloak>
                <x-icon name="code-bracket" class="h-5 w-5" />
            </button>
        </div>
        @endif
    </div>
    <div>
        <div x-show="!code" @class(['rounded-lg p-6', 'bg-white' => $background])>
            {{ $slot }}
        </div>
        @if ($contents)
            <div class="overflow-auto custom-scrollbar rounded-lg bg-[#292D3E]" x-cloak x-show="code">
                <x-code :language="$language" :$contents />
            </div>
        @endif
    </div>
</div>