@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="dialog">
    <x-slot:title>Dialog</x-slot>
    <x-slot:description>Dialog component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Dialog" />
    </x-slot>
    <x-section title="Configuration" disable-copy>
        <ul class="list-inside list-decimal space-y-2">
            <li>
                Insert the
                <x-block>dialog</x-block>
                component on your main layout:
                <x-code language="html" :contents="$tag" />
            </li>
            <li>
                Use the
                <x-block>Interactions</x-block>
                trait in your Livewire component:
                <x-code language="php" :contents="$trait" />
            </li>
            <li>
                Dispatch the Dialog from a Livewire method:
                <x-code language="php" :contents="$dispatch" />
            </li>
        </ul>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview :contents="$basic">
            <livewire:documentation.interactions.dialog.examples />
        </x-preview>
    </x-section>
    <x-section title="Confirmations" description="Interacting with actions.">
        <div class="space-y-4">
            <x-preview :contents="$confirmation">
                <livewire:documentation.interactions.dialog.confirmation />
            </x-preview>
            <div class="mt-4 space-y-4">
                <x-code :contents="$confirmationExplanation" disable-copy />
            </div>
        </div>
    </x-section>
    <x-section title="Events" description="An option to listen to events.">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <livewire:documentation.interactions.dialog.events />
            </x-preview>
            <x-warning class="mt-4">
                We recommend that you use listeners in one place, whether in the
                base layout or once per component.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Hooks">
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
        description="JavaScript API to interact with Dialog."
    >
        <div class="space-y-4">
            <x-code language="blade" :contents="$javascript" disable-copy />
            <x-warning>
                The dialog hooks are unavailable in the JavaScript API.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Display After Redirects">
        <div class="space-y-4">
            <p>
                You can trigger a dialog that will actually be displayed after a
                redirect action. Regardless of whether the redirection is to
                another Livewire component or to basic controllers, you can
                still display the dialog.
            </p>
            <x-code :contents="$flash" />
            <p>
                When using
                <x-block>flash()</x-block>
                method, the dialog will not be displayed in the current request,
                but yes stored temporarily in the session and displayed in the
                next request.
            </p>
        </div>
    </x-section>
    <x-section title="Dispatching via Controllers">
        <div class="space-y-4">
            <p>You can trigger a dialog via controllers.</p>
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
    <x-section
        title="Persistent"
        description="An option to prevent the dialog from being closed by clicking outside."
    >
        <div class="space-y-4">
            <x-code :contents="$persistent" disable-copy />
        </div>
    </x-section>
    <x-section title="Colorful" disable-copy>
        <p>
            You can invert the Dialog colors using the
            <x-block>colorful</x-block>
            global so the body background takes the notification type color
            (green for success, red for error, and so on) with white text.
            <x-refer :doc="['customization', 'globals']">
                Learn more about the global Colorful.
            </x-refer>
        </p>
    </x-section>
    <x-section title="Confirming with Enter" new>
        <x-code language="php" :contents="$enter" />
        <x-warning class="mt-4">
            It fires only while the focus is
            <b>outside</b>
            the dialog. A
            <x-block>button</x-block>
            already activates on Enter while focused, so without that guard a
            dialog whose cancel button had been reached with Tab would cancel
            <i>and</i>
            confirm on a single keystroke. It also works on a
            <x-block>persistent()</x-block>
            dialog, where Escape does not: pressing the confirm button is the
            answer it is waiting for, not a way around it.
        </x-warning>
    </x-section>
</x-layout>
