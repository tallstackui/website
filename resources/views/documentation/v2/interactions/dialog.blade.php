@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Dialog
    </x-slot:title>
    <x-slot:description>
        Dialog component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Interaction\Dialog" title="Dialog" />
    </x-slot:personalization>
    <x-section title="Configuration" disable-copy>
        1. Insert the Dialog component on your main layout.
        <x-code language="html" :contents="$tag"/>
        2. Use the Interactions trait in your Livewire component.
        <x-code language="php" :contents="$trait"/>
        3. Dispatch the Dialog from a method.
        <x-code language="php" :contents="$dispatch"/>
        <x-warning text="This is an example. You can't dispatch all at the same time." />
    </x-section>
    <x-section title="Basic Usage">
        <x-preview :contents="$basic">
            <livewire:documentation.interactions.dialog.examples/>
        </x-preview>
    </x-section>
    <x-section title="Confirmations" description="Interacting with actions.">
        <x-preview :contents="$confirmation">
            <livewire:documentation.interactions.dialog.confirmation/>
        </x-preview>
        <div class="mt-4 space-y-4">
            <x-code :contents="$confirmationExplanation" disable-copy />
        </div>
    </x-section>
    <x-section title="Events" description="An option to listen to events.">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.interactions.dialog.events/>
        </x-preview>
        <x-warning class="mt-4">
            We recommend that you use listeners in one place, whether in the base layout or once per component.
        </x-warning>
    </x-section>
    <x-section title="Hooks">
        <x-code :contents="$hooks" disable-copy />
        <p>Optionally, you can also set <x-block>params</x-block> as closure:</p>
        <x-code :contents="$hooksCallable" disable-copy />
        <p><u>The closure will be resolved using Laravel container</u> and the result will be passed to the hook.</p>
    </x-section>
    <x-section title="JavaScript API" description="JavaScript API to interact with Dialog.">
        <x-code language="blade" :contents="$javascript" disable-copy />
        <x-warning>
            The dialog hooks are unavailable in the JavaScript API.
        </x-warning>
    </x-section>
    <x-section title="Color Personalization">
        <p>
            <x-link :href="route('documentation', ['v2', 'personalization', 'deep'])"
                    fragment="override-component-colors"
                    :color="null"
                    underline>
                Starting from version 1.5.3 you can customize Dialog colors through deep personalization.
            </x-link>
        </p>
    </x-section>
    <x-section title="Display After Redirects">
        <p>
            <u>Starting from version 1.23.0</u> you can trigger a dialog that will actually
            be displayed after a redirect action. Regardless of whether the redirection is
            to another Livewire component or to basic controllers, you can still display the dialog.
        </p>
        <x-code :contents="$flash"/>
        <p>
            When using <x-block>flash()</x-block> method, the dialog will not be displayed in the current
            request, but yes stored temporarily in the session and displayed in the next request.
        </p>
    </x-section>
    <x-section title="Dispatching via Controllers">
        <p>
            <u>Starting from version 1.35.0</u> you can trigger a dialog via controllers.
        </p>
        <x-code :contents="$controllers" disable-copy />
        <p>
            <u>Because certain methods were created and designed to be used with Livewire components</u>,
            methods like <x-block>confirm</x-block>, <x-block>cancel</x-block> and <x-block>hooks</x-block>
            will be unavailable and will throw exceptions when you try to use them in controllers.
        </p>
    </x-section>
    <x-available-configuration />
</x-layout>
