@php
    $tickerLinked = [
        'Alert'           => ['ui', 'alert'],
        'Autocomplete'    => ['form', 'autocomplete'],
        'Avatar'          => ['ui', 'avatar'],
        'Badge'           => ['ui', 'badge'],
        'Banner'          => ['ui', 'banner'],
        'Boolean'         => ['ui', 'boolean'],
        'Breadcrumbs'     => ['ui', 'breadcrumbs'],
        'Button'          => ['ui', 'button'],
        'Calendar'        => ['ui', 'calendar'],
        'Card'            => ['ui', 'card'],
        'Carousel'        => ['ui', 'carousel'],
        'Checkbox'        => ['form', 'checkbox'],
        'Clipboard'       => ['ui', 'clipboard'],
        'Color Picker'    => ['form', 'color'],
        'Command Palette' => ['ui', 'command-palette'],
        'Currency'        => ['form', 'currency'],
        'Date Picker'     => ['form', 'date'],
        'Dial'            => ['ui', 'dial'],
        'Dialog'          => ['interactions', 'dialog'],
        'Dropdown'        => ['ui', 'dropdown'],
        'Errors'          => ['ui', 'error'],
        'Icon'            => ['ui', 'icon'],
        'Input'           => ['form', 'input'],
        'Kbd'             => ['ui', 'kbd'],
        'Key-Value'       => ['ui', 'key-value'],
        'Layout'          => ['ui', 'layout'],
        'Link'            => ['ui', 'link'],
        'List'            => ['ui', 'list'],
        'Loading'         => ['ui', 'loading'],
        'Modal'           => ['ui', 'modal'],
        'Number'          => ['form', 'number'],
        'Password'        => ['form', 'password'],
        'Pin'             => ['form', 'pin'],
        'Progress'        => ['ui', 'progress'],
        'Radio'           => ['form', 'radio'],
        'Range'           => ['form', 'range'],
        'Rating'          => ['ui', 'rating'],
        'Reaction'        => ['ui', 'reaction'],
        'Select'          => ['form', 'select'],
        'Signature'       => ['ui', 'signature'],
        'Slide'           => ['ui', 'slide'],
        'Stats'           => ['ui', 'stats'],
        'Step'            => ['ui', 'step'],
        'Tab'             => ['ui', 'tab'],
        'Table'           => ['ui', 'table'],
        'Tag'             => ['form', 'tag'],
        'Textarea'        => ['form', 'textarea'],
        'Theme Switch'    => ['ui', 'theme-switch'],
        'Time Picker'     => ['form', 'time'],
        'Timeline'        => ['ui', 'timeline'],
        'Toast'           => ['interactions', 'toast'],
        'Toggle'          => ['form', 'toggle'],
        'Tooltip'         => ['ui', 'tooltip'],
        'Upload'          => ['form', 'upload'],
    ];

    $tickerNew = ['Chart', 'Editor', 'Gallery', 'QR Code', 'Spinner', 'Upload Async'];

    $tickerTop = collect($tickerLinked)->take(28);
    $tickerBottom = collect($tickerLinked)->skip(28);
@endphp

<section class="landing-section" aria-label="Component index">
    <p class="mb-6 text-center font-mono text-[0.65rem] font-medium uppercase tracking-[0.18em] text-gray-400 dark:text-dark-500">
        The whole catalog, one install
    </p>

    <div class="landing-ticker">
        <div class="landing-ticker-track landing-ticker-track--left">
            @foreach ([false, true] as $clone)
                @foreach ($tickerTop as $name => [$main, $children])
                    <a href="{{ route('documentation', [$main, $children]) }}"
                       wire:navigate
                       @if ($clone) aria-hidden="true" tabindex="-1" @endif
                       class="landing-ticker-item">
                        {{ $name }}
                    </a>
                @endforeach
                @foreach ($tickerNew as $name)
                    <span @if ($clone) aria-hidden="true" @endif class="landing-ticker-item">
                        {{ $name }}
                        <span class="landing-ticker-new">4.0</span>
                    </span>
                @endforeach
            @endforeach
        </div>
    </div>

    <div class="landing-ticker mt-1">
        <div class="landing-ticker-track landing-ticker-track--right">
            @foreach ([false, true] as $clone)
                @foreach ($tickerBottom as $name => [$main, $children])
                    <a href="{{ route('documentation', [$main, $children]) }}"
                       wire:navigate
                       @if ($clone) aria-hidden="true" tabindex="-1" @endif
                       class="landing-ticker-item">
                        {{ $name }}
                    </a>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
