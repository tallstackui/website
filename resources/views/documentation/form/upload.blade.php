@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

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
        <p class="mt-4 text-xs font-semibold underline">
            All files uploaded as part of tests on this page are deleted each hour.
        </p>
    </x-warning>
    <x-section title="Basic Usage" anchor="upload-basic-usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.form.upload.upload :model="1" />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint & Tip" anchor="upload-label-hint-tip">
        <x-preview language="blade" :contents="$labelHintTip">
            <livewire:documentation.form.upload.upload :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Delete" anchor="upload-delete">
        <x-preview language="blade" :contents="$delete">
            <livewire:documentation.form.upload.upload :model="3" />
        </x-preview>
        <p class="mt-4">
            You can use this algorithm to be the base of the method of deleting temporary files.
        </p>
        <div class="mt-4">
            <x-code :contents="$deleteMethod" disable-copy />
        </div>
    </x-section>
    <x-section title="Multiple" anchor="upload-multiple">
        <x-preview language="blade" :contents="$multiple">
            <livewire:documentation.form.upload.upload :model="4" />
        </x-preview>
        <p class="mt-4">
            If you have ever uploaded multiple files, you may have already encountered this issue: after selecting some files, if new files are selected they replace the selected ones with the new selected files, instead of merging them. To solve this problem and allow your user to select multiple files, in batches, you can use an algorithm like this:
        </p>
        <div class="mt-4">
            <x-code :contents="$multipleBatches" disable-copy />
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
            <x-code :contents="$multipleBatchesOtherProperties" disable-copy />
        </div>
    </x-section>
    <x-section title="Restricting File Types" anchor="upload-restricting-file-types">
        <x-preview language="blade" :contents="$accept">
            <livewire:documentation.form.upload.upload :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Footer Slot" anchor="upload-footer-slot">
        <x-preview language="blade" :contents="$footerSlot">
            <livewire:documentation.form.upload.upload :model="6" />
        </x-preview>
        <p class="mt-4">
            You can use the <x-block>when-uploaded</x-block> parameter directly in the slot
            to <b>only render the slot as a file has been uploaded:</b>
        </p>
        <div class="mt-4">
            <x-code language="blade" :contents="$footerSlotWhenUploaded" disable-copy />
        </div>
    </x-section>
    <x-section title="Events" anchor="upload-events">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.form.upload.upload :model="7" />
        </x-preview>
    </x-section>
    <x-separator text="Static Mode" />
    <x-section title="Concept" anchor="static-concept" disable-copy>
        Although the Upload component was created to handle file uploads, it also allows you
        to display any type of file that already exists in the application, that is: files
        that were uploaded at another time. The main benefit of this usage format is that it
        allows people to view files, including preview images, and can choose to delete them.
    </x-section>
    <x-section title="Prepare the Usage" anchor="static-prepare-the-usage">
        <p>
            1. Use the Livewire component <x-block>mount</x-block> method to prepare and store
            the files in a property that will be bind in the component Blade file:
        </p>
        <x-code :contents="$prepareStaticUsage" disable-copy />
        <p>2. Prepare the Blade file of the component:</p>
        <x-code language="blade" :contents="$bladeComponentForStaticUsage" disable-copy />
        <p>
            3. <u>If you intend to offer the option to delete files,</u> then the approach to deleting
            files will be a little different from the used when file is uploading, for example:
        </p>
        <x-code :contents="$deletingFileInStaticUsage" />
    </x-section>
    <x-section title="Demonstration" anchor="static-demonstration" disable-copy>
        <x-preview>
            <livewire:documentation.form.upload.static />
        </x-preview>
    </x-section>
</x-layout>
