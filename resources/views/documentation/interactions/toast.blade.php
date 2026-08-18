@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="toast">
    <x-slot:title>Toast</x-slot>
    <x-slot:description>Toast component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Toast" />
    </x-slot>
    <x-section title="Configuration" disable-copy>
        <ul class="list-inside list-decimal space-y-2">
            <li>
                Insert the
                <x-block>toast</x-block>
                component on your main layout:
                <x-code language="html" :contents="$tag" disable-copy />
            </li>
            <li>
                Use the
                <x-block>Interactions</x-block>
                trait in your Livewire component:
                <x-code language="php" :contents="$trait" disable-copy />
            </li>
            <li>
                Dispatch the Toast from a Livewire method:
                <x-code language="php" :contents="$dispatch" disable-copy />
            </li>
        </ul>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview :contents="$basic">
            <livewire:documentation.interactions.toast.examples />
        </x-preview>
    </x-section>
    <x-section title="Confirmations" description="Interacting with actions.">
        <div class="space-y-4">
            <x-preview :contents="$confirmation">
                <livewire:documentation.interactions.toast.confirmation />
            </x-preview>
            <div class="mt-4 space-y-4">
                <x-code :contents="$confirmationExplanation" disable-copy />
            </div>
        </div>
    </x-section>
    <x-section
        title="Time Control"
        description="Increase the time to show the toast."
    >
        <div class="space-y-4">
            <x-preview :contents="$time">
                <livewire:documentation.interactions.toast.timeout />
            </x-preview>
            <p>
                You can also control the default time by interacting with
                <x-refer doc="configuration">the configuration file.</x-refer>
            </p>
            <p>
                Then use the
                <x-block>timeout</x-block>
                method without parameters:
            </p>
            <x-code :contents="$defaultTimeUsage" disable-copy />
        </div>
    </x-section>
    <x-section
        title="Persistent"
        description="An option to not set an expiration time and also hide the progress bar."
    >
        <div class="space-y-4">
            <x-preview :contents="$persistent">
                <livewire:documentation.interactions.toast.persistent />
            </x-preview>
        </div>
    </x-section>
    <x-section
        title="Expandable"
        description="An option to show minimized description texts."
    >
        <div class="space-y-4">
            <x-preview :contents="$expandable">
                <livewire:documentation.interactions.toast.expandable />
            </x-preview>
            <p class="mt-2">
                You can configure Toast to be extensible by default in
                <x-refer doc="configuration">the configuration file.</x-refer>
                When you do that, you can optionally ignore the expandable for
                specific Toast:
            </p>
            <x-code :contents="$ignoringExpandable" disable-copy />
        </div>
    </x-section>
    <x-section
        title="Position"
        description="An option to control the toast position at runtime."
    >
        <div class="space-y-4">
            <x-preview :contents="$position">
                <livewire:documentation.interactions.toast.position />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Sole">
        <x-preview :contents="$sole">
            <livewire:documentation.interactions.toast.sole />
        </x-preview>
    </x-section>
    <x-section title="Events" description="An option to listen to events.">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <livewire:documentation.interactions.toast.events />
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'toast:accepted', 'detail' => '{ title, description, type }', 'fired' => 'The confirm action is pressed'],
                    ['event' => 'toast:rejected', 'detail' => '{ title, description, type }', 'fired' => 'The cancel action is pressed'],
                    ['event' => 'toast:timeout', 'detail' => '{ title, description, type }', 'fired' => 'The toast times out'],
                ]"
            >
                @interact("column_detail", $row)
                    <x-block>{{ $row["detail"] }}</x-block>
                @endinteract

                @interact("column_event", $row)
                    <x-block>{{ $row["event"] }}</x-block>
                @endinteract
            </x-table>
            <x-warning>
                We recommend that you use listeners in one place, whether in the
                base layout or once per component.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Hooks" disable-copy>
        <div class="space-y-4">
            <x-code :contents="$hooks" disable-copy />
            <p>
                Optionally, you can also set
                <x-block>params</x-block>
                as closure:
            </p>
            <x-code :contents="$hooksCallable" disable-copy />
            <p>
                <u>The closure will be resolved using Laravel container</u>
                and the result will be passed to the hook.
            </p>
        </div>
    </x-section>
    <x-section
        title="JavaScript API"
        description="JavaScript API to interact with Toast."
        disable-copy
    >
        <div class="space-y-4">
            <x-code language="blade" :contents="$javascript" disable-copy />
            <x-warning>
                The toast hooks are unavailable in the JavaScript API.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Display After Redirects" disable-copy>
        <div class="space-y-4">
            <p>
                You can trigger a toast that will actually be displayed after a
                redirect action. Regardless of whether the redirection is to
                another Livewire component or to basic controllers, you can
                still display the toast.
            </p>
            <x-code :contents="$flash" disable-copy />
            <p>
                When using
                <x-block>flash()</x-block>
                method, the toast will not be displayed in the current request,
                but yes stored temporarily in the session and displayed in the
                next request.
            </p>
        </div>
    </x-section>
    <x-section title="Dispatching via Controllers" disable-copy>
        <div class="space-y-4">
            <p>You can trigger a toast via controllers.</p>
            <x-code :contents="$controllers" disable-copy />
            <p>
                <u>
                    Because certain methods were created and designed to be used
                    with Livewire components
                </u>
                , methods like
                <x-block>confirm</x-block>
                ,
                <x-block>cancel</x-block>
                and
                <x-block>hooks</x-block>
                will be unavailable and will throw exceptions when you try to
                use them in controllers.
            </p>
        </div>
    </x-section>
    <x-section title="Colorful" disable-copy>
        <p>
            You can invert the Toast colors using the
            <x-block>colorful</x-block>
            global so the body background takes the notification type color
            (green for success, red for error, and so on) with white text.
            <x-refer :doc="['customization', 'globals']">
                Learn more about the global Colorful.
            </x-refer>
        </p>
    </x-section>
    <x-section
        title="Stacked"
        new
        description="An option to stack the list of toasts."
        disable-copy
    >
        <div class="space-y-4">
            <livewire:documentation.interactions.toast.stacked />
            <p>PHP API:</p>
            <x-code language="php" :contents="$stackedFluent" />
            <p>JS API:</p>
            <x-code language="js" :contents="$stackedJs" />
        </div>
    </x-section>
    <x-section title="Top on Mobile" new disable-copy>
        <x-warning success>
            Starting from v4, you can set the toast to be positioned at the top
            of the page when mobile. You can configure it by using the position
            method, mentioned above, or if you prefer, you can control it
            globally via the
            <x-refer doc="configuration">configuration file.</x-refer>
            using the
            <x-block>top-on-mobile</x-block>
            configuration, which is
            <x-block>false</x-block>
            by default.
        </x-warning>
    </x-section>
</x-layout>
