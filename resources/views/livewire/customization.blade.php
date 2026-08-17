<?php

declare(strict_types=1);

use Livewire\Component;

new class extends Component {
    public ?string $component = null;

    public string $id = "";

    public ?string $title = null;

    public bool $modal = false;

    public ?array $blocks = null;

    public ?array $original = null;

    public ?string $customization = null;

    public array $items = [];

    public function mount(): void
    {
        if ($this->items !== []) {
            $this->items = collect($this->items)
                ->map(function (array $item): array {
                    $item["title"] ??= str($item["component"])
                        ->replace("\\", " ")
                        ->title()
                        ->value();

                    return $item;
                })
                ->all();

            $this->id = "customization-group-" . uniqid();

            return;
        }

        $str = str($this->component);

        $this->title ??= $str
            ->replace("\\", " ")
            ->title()
            ->value();

        $this->id = $str
            ->lower()
            ->remove("\\")
            ->squish()
            ->value();

        $this->id .= "-" . uniqid();
    }

    public function select(int $index): void
    {
        $item = $this->items[$index] ?? null;

        if ($item === null) {
            return;
        }

        $this->component = $item["component"];
        $this->customization = $item["customization"] ?? null;
        $this->title = $item["title"];

        $this->open();
    }

    public function open(): void
    {
        sleep(3);

        if (blank($this->component)) {
            return;
        }

        $this->original = null;

        $component = "TallStackUi\\Components\\$this->component\\Component";

        $this->blocks = app(
            $component,
            $this->parameters($component),
        )->customization();
    }

    // Components like upload.async declare required constructor
    // parameters that the container cannot resolve on its own.
    private function parameters(string $component): array
    {
        $constructor = (new \ReflectionClass($component))->getConstructor();

        return collect($constructor?->getParameters() ?? [])
            ->reject(
                fn (\ReflectionParameter $parameter) => $parameter->isDefaultValueAvailable() ||
                    $parameter->allowsNull(),
            )
            ->mapWithKeys(function (\ReflectionParameter $parameter) {
                $type = $parameter->getType();

                return [
                    $parameter->getName() => match (
                        $type instanceof \ReflectionNamedType ? $type->getName() : null
                    ) {
                        "int", "float" => 0,
                        "bool" => false,
                        "array" => [],
                        default => "",
                    },
                ];
            })
            ->all();
    }

    public function content(string $block, string $class): void
    {
        sleep(3);
        
        $this->original["block"] = $block;
        $this->original["class"] = $class;
    }
};
?>

<div class="shrink-0">
    <x-modal scrollable id="{{ $id }}">
        <x-slot:title>
            <p class="flex items-center justify-start gap-2">{{ $title }}, Customization Blocks</p>
        </x-slot:title>
        @if ($customization)
            <div wire:key="example-{{ $this->component }}">
                <div wire:ignore>
                    <p class="text-base font-medium">Example:</p>
                    <x-code :contents="$customization" customization/>
                </div>
            </div>
        @endif
        @if ($blocks)
            <div wire:loading wire:target="open" class="flex items-center justify-center py-4">
                <x-spinner />
            </div>
            <div wire:loading.remove class="px-2 sm:px-0">
                <p class="text-base font-medium">Blocks:</p>
                <div class="flex flex-wrap items-center justify-start gap-1">
                    @foreach ($blocks as $name => $class)
                        <x-button
                            wire:click="$call('content', '{{ $name }}', '{{ $class }}')"
                            :text="$name"
                            color="pink"
                            class="whitespace-nowrap"
                            xs
                        />
                    @endforeach
                </div>
                <div class="mt-4 space-y-2">
                    @if ($original)
                        <div>
                            <x-clipboard :id="uniqid()" label="Name" :text="$original['block']"/>
                        </div>
                        <div wire:key="{{ uniqid() }}">
                            <p class="dark:text-dark-400 block text-sm font-semibold text-gray-600">
                                Original Content:
                            </p>
                            <x-code language="text" :contents="$original['class']"/>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </x-modal>
    @if ($items !== [])
        <x-dropdown position="bottom-start" sm>
            <x-slot:action>
                <x-button
                    color="pink"
                    x-on:click="show = ! show"
                    unfocus
                    round
                    sm
                >
                    Customize
                    <x-slot:right>
                        <x-icon
                            name="chevron-down"
                            class="h-3 w-3 transition-transform"
                            x-bind:class="{ 'rotate-180': show }"
                            solid
                        />
                    </x-slot>
                </x-button>
            </x-slot>
            @foreach ($items as $index => $item)
                <x-dropdown.items
                    :text="$item['title']"
                    :separator="! $loop->first"
                    x-on:click="
                        show = false;
                        $tsui.open.modal('{{ $id }}');
                        $wire.call('select', {{ $index }});
                    "
                />
            @endforeach
        </x-dropdown>
    @else
        <x-button
            x-on:click="$tsui.open.modal('{{ $id }}'); $wire.call('open');"
            text="Customize: {{ $title }}"
            color="pink"
            class="whitespace-nowrap"
            xs
        />
    @endif
</div>
