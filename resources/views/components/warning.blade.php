@php
    $text ??= $slot->toHtml();

    $icons = [
        "info" => "information-circle",
        "success" => "check-circle",
        "warning" => "exclamation-circle",
        "error" => "x-circle",
    ];

    $accents = [
        "info" => "from-sky-300 via-blue-500 to-indigo-600",
        "success" => "from-emerald-300 via-emerald-500 to-teal-600",
        "warning" => "from-amber-300 via-orange-500 to-pink-600",
        "error" => "from-rose-300 via-red-500 to-rose-700",
    ];

    $surfaces = [
        "info" => "border-blue-200/70 bg-blue-50 dark:border-blue-400/15 dark:bg-blue-950",
        "success" => "border-emerald-200/70 bg-emerald-50 dark:border-emerald-400/15 dark:bg-emerald-950",
        "warning" => "border-amber-200/70 bg-amber-50 dark:border-amber-400/15 dark:bg-amber-950",
        "error" => "border-rose-200/70 bg-rose-50 dark:border-rose-400/15 dark:bg-rose-950",
    ];

    $chips = [
        "info" => "bg-blue-100 text-blue-600 ring-blue-200/70 dark:bg-blue-500/15 dark:text-blue-300 dark:ring-blue-400/25",
        "success" => "bg-emerald-100 text-emerald-600 ring-emerald-200/70 dark:bg-emerald-500/15 dark:text-emerald-300 dark:ring-emerald-400/25",
        "warning" => "bg-amber-100 text-amber-600 ring-amber-200/70 dark:bg-amber-500/15 dark:text-amber-300 dark:ring-amber-400/25",
        "error" => "bg-rose-100 text-rose-600 ring-rose-200/70 dark:bg-rose-500/15 dark:text-rose-300 dark:ring-rose-400/25",
    ];

    $titles = [
        "info" => "text-blue-950 dark:text-blue-50",
        "success" => "text-emerald-950 dark:text-emerald-50",
        "warning" => "text-amber-950 dark:text-amber-50",
        "error" => "text-rose-950 dark:text-rose-50",
    ];

    $bodies = [
        "info" => "text-blue-900/80 dark:text-blue-100/80",
        "success" => "text-emerald-900/80 dark:text-emerald-100/80",
        "warning" => "text-amber-900/80 dark:text-amber-100/80",
        "error" => "text-rose-900/80 dark:text-rose-100/80",
    ];
@endphp

<div {{ $attributes }}>
    <div
        @class([
            "relative overflow-hidden rounded-lg border shadow-sm shadow-slate-900/5 dark:shadow-none",
            $surfaces[$type] => true,
        ])
    >
        <span
            aria-hidden="true"
            @class([
                "pointer-events-none absolute inset-y-0 left-0 w-1 bg-gradient-to-b",
                $accents[$type] => true,
            ])
        ></span>

        <div class="absolute top-4 right-4">
            <span
                @class([
                    "inline-flex h-7 w-7 items-center justify-center rounded-full ring-1",
                    $chips[$type] => true,
                ])
            >
                <x-icon :name="$icons[$type]" class="h-4 w-4" solid />
            </span>
        </div>

        <div class="px-6 py-5 pr-14 pl-7">
            @if ($title)
                <h3
                    @class(["mb-1 text-base font-semibold tracking-tight", $titles[$type] => true])
                >
                    {{ $title }}
                </h3>
            @endif

            <div
                @class([
                    "text-sm leading-relaxed",
                    $bodies[$type] => true,
                ])
            >
                {!! $text !!}
            </div>
        </div>
    </div>
</div>
