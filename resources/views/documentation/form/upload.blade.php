@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/upload">
    <x-slot:title>Form Upload</x-slot>
    <x-slot:description>Form upload component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Form\Upload"
            title="Upload"
        />
    </x-slot>
    <x-warning class="mb-4">
        <b>This component uses the normal Livewire's way of upload a file!</b>
        If you want to upload async, you need to use the new upload.async
        component introduced in v4.
        <x-refer :doc="['form', 'upload-async']">
            Learn more about the new upload async component.
        </x-refer>
    </x-warning>
    <x-section title="Basic Usage" anchor="upload-basic-usage">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$basic">
                <livewire:documentation.form.upload.upload :model="1" />
            </x-preview>
            <p>
                Files can be uploaded through selection or drag-and-drop. Also,
                when sending a png, jpg, jpeg or gif file , a preview is offered
                when clicking on the file image. To disable the preview, simply
                pass the
                <x-block>:preview="false"</x-block>
                parameter to the component. All files uploaded as part of tests
                on this page are deleted each hour.
            </p>
        </div>
    </x-section>
    <x-section title="Label & Hint & Tip" anchor="upload-label-hint-tip">
        <x-preview language="blade" :contents="$labelHintTip">
            <livewire:documentation.form.upload.upload :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Readonly & Disabled" anchor="upload-readonly-disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <livewire:documentation.form.upload.upload :model="10" />
        </x-preview>
    </x-section>
    <x-section
        title="Close After Upload"
        description="An option to optionally close the float after upload the file"
        anchor="upload-close-after-upload"
    >
        <x-preview language="blade" :contents="$closeAfterUpload">
            <livewire:documentation.form.upload.upload :model="8" />
        </x-preview>
    </x-section>
    <x-section
        title="Validation Error"
        anchor="upload-validation-error"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                Since after selecting the file to be sent it is common for the
                floating element to be closed, if there is a validation error in
                the file, it will probably not be visible. For this reason a
                validation error message will appear below the input, similar to
                what happens with normal
                <x-block>input</x-block>
                . However, unlike input, this message cannot be disabled.
            </p>
            <x-preview language="blade" disable-copy>
                <livewire:documentation.form.upload.upload :model="9" />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Delete" anchor="upload-delete">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$delete">
                <livewire:documentation.form.upload.upload :model="3" />
            </x-preview>
            <p>
                You can use this algorithm to be the base of the method of
                deleting temporary files.
            </p>
            <x-code :contents="$deleteMethod" disable-copy />
        </div>
    </x-section>
    <x-section title="Multiple" anchor="upload-multiple">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$multiple">
                <livewire:documentation.form.upload.upload :model="4" />
            </x-preview>
            <p>
                If you have ever uploaded multiple files, you may have already
                encountered this issue: after selecting some files, if new files
                are selected they replace the selected ones with the new
                selected files, instead of merging them. To solve this problem
                and allow your user to select multiple files, in batches, you
                can use an algorithm like this:
            </p>
            <x-code :contents="$multipleBatches" disable-copy />
            <p>
                The only thing to pay attention to with this approach is that
                <b>
                    real-time validations may not work correctly to display
                    validation errors linked to the correct files
                </b>
                , so if you want to use this strategy we suggest that you use a
                single validation with properties bind with
                <x-block>wire:model</x-block>
                . Also, remember to update the methods with the name of the
                property you are using to upload files,
                <a
                    href="https://livewire.laravel.com/docs/lifecycle-hooks"
                    target="_blank"
                    class="underline"
                >
                    following Livewire lifecycle hooks convention:
                </a>
            </p>
            <x-code :contents="$multipleBatchesOtherProperties" disable-copy />
        </div>
    </x-section>
    <x-section
        title="Image Editor"
        new
        anchor="upload-image-editor"
        description="An option to crop and rotate images before they are uploaded."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$editor">
                <livewire:documentation.form.upload.upload :model="11" />
            </x-preview>
            <p>
                The editor runs at intake, between picking the file and sending
                it. What reaches Livewire is the edited file; the original never
                leaves the browser. Only images open the editor: documents and
                SVGs go straight to the upload. Cancelling, Escape, the backdrop
                or the close button drop the file, so nothing is uploaded. Files
                already uploaded cannot be edited again.
            </p>
            <x-preview language="blade" :contents="$editorAspect">
                <livewire:documentation.form.upload.upload :model="12" />
            </x-preview>
            <p>
                <x-block>aspect</x-block>
                locks the crop box to a
                <x-block>width:height</x-block>
                ratio, like
                <x-block>1:1</x-block>
                ,
                <x-block>4:3</x-block>
                or
                <x-block>16:9</x-block>
                . The box starts as the largest centered rectangle of that ratio
                and every handle keeps it. Without it the box is free.
            </p>
            <x-preview language="blade" :contents="$editorModes">
                <livewire:documentation.form.upload.upload :model="13" />
            </x-preview>
            <p>
                A bare
                <x-block>editor</x-block>
                offers the crop box and the rotation buttons.
                <x-block>editor="crop"</x-block>
                keeps the crop box only and
                <x-block>editor="rotate"</x-block>
                keeps the rotation buttons only, in which case
                <x-block>aspect</x-block>
                has no effect.
            </p>
            <x-preview language="blade" :contents="$editorMultiple">
                <livewire:documentation.form.upload.upload :model="14" />
            </x-preview>
            <p>
                With
                <x-block>multiple</x-block>
                the editor opens once per image, in sequence. Cancelling one
                removes only that one from the batch.
            </p>
            <x-code
                language="blade"
                :contents="$editorDisabled"
                disable-copy
            />
            <p>
                The EXIF orientation is applied on load, images larger than
                4096px on their longest side are downscaled to that, and an
                animated GIF is flattened to a PNG frame. The output file name
                follows the resulting format, so
                <x-block>photo.gif</x-block>
                becomes
                <x-block>photo.png</x-block>
                . The dialog is a
                <x-refer :doc="['ui', 'modal']">modal</x-refer>
                that behaves as a bottom sheet below the
                <x-block>md</x-block>
                breakpoint and is centered above it.
            </p>
            <x-warning class="mt-4">
                <x-block>editor</x-block>
                must be
                <x-block>true</x-block>
                ,
                <x-block>false</x-block>
                ,
                <x-block>crop</x-block>
                or
                <x-block>rotate</x-block>
                , and
                <x-block>aspect</x-block>
                must follow the
                <x-block>width:height</x-block>
                format with positive integers. Anything else throws.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Restricting File Types"
        anchor="upload-restricting-file-types"
    >
        <x-preview language="blade" :contents="$accept">
            <livewire:documentation.form.upload.upload :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Footer Slot" anchor="upload-footer-slot">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$footerSlot">
                <livewire:documentation.form.upload.upload :model="6" />
            </x-preview>
            <p>
                Use the
                <x-block>when-uploaded</x-block>
                parameter directly in the slot to
                <b>only render the slot as a file has been uploaded:</b>
            </p>
            <x-code
                language="blade"
                :contents="$footerSlotWhenUploaded"
                disable-copy
            />
        </div>
    </x-section>
    <x-section
        title="Validate Before Upload"
        anchor="upload-validate-before-upload"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                You can perform validations on selected files before they are
                actually uploaded to the server.
            </p>
            <x-code language="blade" :contents="$before" disable-copy />
            <p>
                In this case,
                <x-block>files</x-block>
                will be an array of the files. You should return
                <x-block>false</x-block>
                to prevent the upload.
            </p>
        </div>
    </x-section>
    <x-section title="Events" anchor="upload-events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <livewire:documentation.form.upload.upload :model="7" />
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'upload', 'detail' => '{ files }', 'fired' => 'Files start uploading'],
                    ['event' => 'remove', 'detail' => '{ file }', 'fired' => 'A file is removed'],
                ]"
            >
                @interact("column_detail", $row)
                    <x-block>{{ $row["detail"] }}</x-block>
                @endinteract

                @interact("column_event", $row)
                    <x-block>{{ $row["event"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-separator text="Static Mode" />
    <x-section title="Concept" anchor="static-concept" disable-copy>
        Although the Upload component was created to handle file uploads, it
        also allows you to display any type of file that already exists in the
        application, that is: files that were uploaded at another time. The main
        benefit of this usage format is that it allows people to view files,
        including preview images, and can choose to delete them.
    </x-section>
    <x-section title="Prepare the Usage" anchor="static-prepare-the-usage">
        <div class="space-y-4">
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    Use the Livewire component
                    <x-block>mount</x-block>
                    method to prepare and store the files in a property:
                    <x-code :contents="$prepareStaticUsage" disable-copy />
                </li>
                <li>
                    Prepare the Blade file of the component:
                    <x-code
                        language="blade"
                        :contents="$bladeComponentForStaticUsage"
                        disable-copy
                    />
                </li>
                <li>
                    <u>If you intend to offer the option to delete files,</u>
                    then the approach to deleting files will be a little
                    different from the used when file is uploading, for example:
                    <x-code :contents="$deletingFileInStaticUsage" />
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Demonstration" anchor="static-demonstration" disable-copy>
        <x-preview>
            <livewire:documentation.form.upload.static />
        </x-preview>
    </x-section>
</x-layout>
