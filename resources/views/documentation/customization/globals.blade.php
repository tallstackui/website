<x-layout :$content>
    <x-slot:title>Globals</x-slot:title>
    <x-slot:description>The globals customization.</x-slot:description>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                Globals change the visual behavior of TallStackUI components in a single place. You can think of them as
                "presets". Instead of customizing each component individually, you can apply sweeping visual changes
                across your entire application from your <x-block>AppServiceProvider</x-block>.
            </p>
            <p>
                There are three available globals: <x-block>flash</x-block>, <x-block>square</x-block>, and
                <x-block>colorful</x-block>. Each one targets a different visual aspect of the components. You can use
                them individually or combine them together through a fluent API:
            </p>
            <x-code language="php" :contents="$basic" disable-copy />
        </div>
    </x-section>
    <x-section title="Flash" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>flash</x-block> global removes all <x-block>x-transition</x-block> Alpine.js directives
                from components. This means <b>no enter or leave animations</b> will be applied, so components will
                appear and disappear instantly. This is useful when you want a snappy UI or when transitions feel too
                slow for your application's needs.
            </p>
            <x-code language="php" :contents="$flash" disable-copy />
        </div>
    </x-section>
    <x-section title="Square" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>square</x-block> global strips all <x-block>rounded-*</x-block> TailwindCSS classes from
                components, giving you <b>sharp corners everywhere</b>. This is perfect when your design system follows
                an angular or geometric visual language.
            </p>
            <x-code language="php" :contents="$square" disable-copy />
        </div>
    </x-section>
    <x-section title="Colorful" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>colorful</x-block> global inverts the colors of Dialog and Toast components. Instead of the
                default neutral background, <b>the body background takes the notification type color</b>
                (green for success, red for error, and so on) with white text. By default, it applies to both Dialog and
                Toast:
            </p>
            <x-code language="php" :contents="$colorful" disable-copy />
            <p>
                If you want to apply the colorful effect to only one of them, you can selectively enable or disable each
                one through boolean parameters:
            </p>
            <x-code language="php" :contents="$colorfulSelective" disable-copy />
            <x-warning warning title="Three changes on 4.x">
                <x-block>colorful()</x-block> assigns instead of appending, so calling it twice no longer registers
                duplicate entries and narrowing it actually takes effect. The <x-block>question</x-block> type follows
                <x-block>primary</x-block> instead of a grayscale palette, which is what made the most common way to see
                the global also the only one that produced no color. And the two buttons stopped sharing the same
                translucent background: confirm is solid white with the type color as its text, cancel carries none
                until it is hovered.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Colorful Button Colors" new disable-copy>
        <div class="space-y-4">
            <p>
                The colors of the <x-block>colorful</x-block> buttons used to live in the components' customization
                blocks. They moved into the published color classes, next to everything else that varies by type.
                <x-block>dialog.colorful.confirm</x-block>, <x-block>toast.colorful.confirm</x-block> and
                <x-block>toast.colorful.cancel</x-block> no longer exist, so
                <x-block>customize()-&gt;block()</x-block> on them throws.
            </p>
            <x-code language="php" :contents="$colorfulColors" />
            <p>
                Partial overrides are merged over the defaults, so naming a single key leaves the rest untouched. The
                blocks that do not depend on the type &mdash; <x-block>colorful.icon</x-block>,
                <x-block>colorful.title</x-block>, <x-block>colorful.description</x-block> and friends &mdash; stay
                where they are and remain reachable through <x-block>customize()</x-block>.
            </p>
        </div>
    </x-section>
    <x-section title="Selective Application" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>flash</x-block> and <x-block>square</x-block> globals accept <x-block>only</x-block> and
                <x-block>except</x-block> parameters so you can control exactly which components are affected. The
                <x-block>only</x-block> parameter restricts the global to specific component classes, while
                <x-block>except</x-block> applies it to all components except the ones you list:
            </p>
            <x-code language="php" :contents="$flashOnly" disable-copy />
            <x-code language="php" :contents="$flashExcept" disable-copy />
            <x-code language="php" :contents="$squareOnly" disable-copy />
            <x-warning>
                You cannot list the same component in both only and except at the same time. Also note that the colorful
                global does not support only or except. It targets Dialog and Toast through its own boolean parameters.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Chaining" disable-copy>
        <div class="space-y-4">
            <p>
                Since each global method returns the internal instance of the class <x-block>Globals</x-block>, you can
                chain multiple globals together in a single fluent call. This keeps your service provider clean and
                readable:
            </p>
            <x-code language="php" :contents="$chaining" disable-copy />
        </div>
    </x-section>
</x-layout>
