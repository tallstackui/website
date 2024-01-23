<x-layout>
    <x-slot:title>
        Form Upload
        <x-slot:version>
            v1.13
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Form upload component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="upload" />
    </x-slot:personalization>
    <x-warning class="mb-4">
        Files can be uploaded through selection or drag-and-drop. Also, when
        sending a <u>png, jpg, jpeg or gif file</u>, a preview is offered when clicking on the
        file image. To disable the preview, simply pass the <b>:preview="false"</b> parameter
        to the component.
    </x-warning>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.form.upload.single :model="1" />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint & Tip">
        <x-preview language="blade" :contents="$labelHintTip">
            <livewire:documentation.form.upload.single :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Delete">
        <x-preview language="blade" :contents="$delete">
            <livewire:documentation.form.upload.single :model="3" />
        </x-preview>
        <p class="mt-4">
            You can use this algorithm to be the base of the method of deleting temporary files.
        </p>
        <div class="mt-4">
            <x-code :contents="$deleteMethod" />
        </div>
    </x-section>
    <x-section title="Multiple">
        <x-preview language="blade" :contents="$multiple">
            <livewire:documentation.form.upload.single :model="4" />
        </x-preview>
        <p class="mt-4">
            If you have ever uploaded multiple files, you may have already encountered this issue: after selecting some files, if new files are selected they replace the selected ones with the new selected files, instead of merging them. To solve this problem and allow your user to select multiple files, in batches, you can use an algorithm like this:
        </p>
        <div class="mt-4">
            <x-code :contents="$multipleBatches" />
        </div>
        <p class="mt-4">
            The only thing to pay attention to with this approach is that <b>real-time validations
            may not work correctly to display validation errors linked to the correct files</b>,
            so if you want to use this strategy we suggest that you use a single validation
            with properties bind with <x-block>wire:model</x-block>. Also, remember to update
            the methods with the name of the property you are using to upload files,
            <a href="https://livewire.laravel.com/docs/lifecycle-hooks" target="_blank" class="underline">following Livewire lifecycle hooks convention:</a>
        </p>
        <div class="mt-4">
            <x-code :contents="$multipleBatchesOtherProperties" />
        </div>
    </x-section>
    <x-section title="Restricting File Types">
        <x-preview language="blade" :contents="$accept">
            <livewire:documentation.form.upload.single :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$footerSlot">
            <livewire:documentation.form.upload.single :model="6" />
        </x-preview>
        <p class="mt-4">
            You can use the <x-block>when-uploaded</x-block> parameter directly in the slot
            to <b>only render the slot as a file has been uploaded:</b>
        </p>
        <div class="mt-4">
            <x-code language="blade" :contents="$footerSlotWhenUploaded" />
        </div>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.form.upload.single :model="7" />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.form.pin')" text="Form Pin" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.alert')" text="Alert" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
