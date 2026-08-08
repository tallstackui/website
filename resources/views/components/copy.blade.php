@props(['slug' => null])

@php
    $variants = match (true) {
        is_array($slug)                  => $slug,
        is_string($slug) && $slug !== '' => [$slug],
        default                          => [],
    };

    $multiple = count($variants) > 1;
    $urls     = collect($variants)->map(fn (string $variant): string => url('ai/'.$variant.'.md'));
@endphp

@if ($variants)
    <div x-data="copy(@js($urls->values()->all()))" class="inline-flex">
        <x-dropdown position="bottom-end" xs width="sm">
            <x-slot:action>
                <x-button
                    icon="clipboard-document"
                    color="pink"
                    x-on:click="
                        show = ! show;
                        show && prefetch();
                    "
                    unfocus
                    round
                    xs
                >
                    Copy
                    <x-slot:right>
                        <x-icon
                            name="chevron-down"
                            class="h-3 w-3 transition-transform"
                            x-bind:class="{ 'rotate-180': show }"
                            solid
                        />
                    </x-slot:right>
                </x-button>
            </x-slot:action>

            @foreach ($variants as $label => $variant)
                <x-dropdown.items
                    :text="$multiple ? $label.' as markdown' : 'Copy as markdown'"
                    :separator="! $loop->first"
                    x-on:click="markdown('{{ $urls[$label] }}')"
                />
                <x-dropdown.items
                    :text="$multiple ? $label.' as link' : 'Copy as link'"
                    x-on:click="link('{{ $urls[$label] }}')"
                />
            @endforeach
        </x-dropdown>
    </div>
@endif
