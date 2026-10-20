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
                A validation error on the bound property paints the input and
                the label red, hides the
                <x-block>hint</x-block>
                and shows the rule message below the input, the same way the
                <x-block>input</x-block>
                component does.
            </p>
            <x-preview language="blade" disable-copy>
                <livewire:documentation.form.upload.upload :model="9" />
            </x-preview>
            <p>
                When
                <x-block>multiple</x-block>
                , the errors of each file land on keys like
                <x-block>photos.0</x-block>
                and
                <x-block>photos.1</x-block>
                . They are listed next to each file inside the floating, and
                since the floating is usually closed after the files are
                selected, a generic message is shown below the input to warn
                about them. An error on the property itself, such as a
                <x-block>max</x-block>
                rule on the array, behaves like the single mode and takes the
                place of the generic message, so only one message is shown below
                the input at a time.
            </p>
            <x-preview language="blade" disable-copy>
                <livewire:documentation.form.upload.upload :model="11" />
            </x-preview>
        </div>
    </x-section>
    <x-section
        title="Without Summary"
        new
        description="An option to hide the generic validation message of the multiple mode."
        anchor="upload-without-summary"
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$withoutSummary">
                <livewire:documentation.form.upload.upload :model="12" />
            </x-preview>
            <p>
                The generic message is dropped in every scenario, leaving only
                the messages next to each file inside the floating. An error on
                the property itself is still shown below the input.
            </p>
            <x-warning info class="mt-4">
                If you want to hide the generic message of every upload, publish
                the
                <x-refer doc="configuration">configuration file</x-refer>
                and set it there.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Invalidate"
        new
        description="An option to not show validation error messages."
        anchor="upload-invalidate"
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$invalidate">
                <livewire:documentation.form.upload.upload :model="13" />
            </x-preview>
            <p>
                Every validation feedback is hidden: the red state, the message
                below the input, the generic message of the multiple mode and
                the messages next to each file. Without the attribute, the
                <x-block>invalidate_global</x-block>
                key of the
                <x-refer doc="configuration">configuration file</x-refer>
                decides.
            </p>
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
    <x-section
        title="Direct Mode"
        new
        description="An option to upload files without the floating."
        anchor="upload-direct-mode"
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$direct">
                <livewire:documentation.form.upload.upload :model="14" />
            </x-preview>
            <p>
                Clicking the input, or its icon, opens the file picker of the
                operating system, and the chosen files are uploaded right away.
                While uploading, a spinning icon takes the place of the upload
                icon, and a failed upload shows the
                <x-block>error</x-block>
                message below the input.
            </p>
            <p>
                Validation errors follow the rules of the
                <a href="#upload-validation-error" class="underline">
                    Validation Error
                </a>
                section, but in multiple mode the messages of each file have
                nowhere to be rendered, so only the generic message is shown for
                them. Combined with
                <x-block>without-summary</x-block>
                , an error that only touches a file is not shown at all.
            </p>
            <x-warning class="mt-4">
                Everything that lives inside the floating does not apply: the
                file list,
                <x-block>delete</x-block>
                ,
                <x-block>preview</x-block>
                ,
                <x-block>tip</x-block>
                , the
                <x-block>footer</x-block>
                slot and
                <x-block>close-after-upload</x-block>
                .
                <x-block>accept</x-block>
                ,
                <x-block>multiple</x-block>
                , the
                <x-block>upload</x-block>
                event and the validation before upload work as usual. The
                <x-block>direct</x-block>
                can't be combined with
                <x-block>static</x-block>
                , which throws an exception.
            </x-warning>
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
    <x-section
        title="Prepare the Usage"
        anchor="static-prepare-the-usage"
        disable-copy
    >
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
