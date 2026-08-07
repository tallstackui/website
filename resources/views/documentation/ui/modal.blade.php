@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="modal">
    <x-slot:title>
        Modal
    </x-slot:title>
    <x-slot:description>
        Modal component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Modal" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-modal id="basic-modal">
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('basic-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Title Slot">
        <x-preview language="blade" :contents="$title">
            <x-modal id="title-modal">
                <x-slot:title>
                    TallStackUI
                </x-slot:title>
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('title-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$footer">
            <x-modal id="footer-modal" title="TallStackUI">
                TallStackUI
                <x-slot:footer>
                    TallStackUI
                </x-slot:footer>
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('footer-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Scrollable" description="An option to keep the header and footer fixed while the content is scrollable.">
        <x-preview language="blade" :contents="$scrollable">
            <x-modal id="fixed" title="TallStackUI" footer="* You can change or disable the soft scrollbar in the config file." scrollable>
                Duis do minim aliquip exercitation deserunt ad dolore adipisicing cupidatat esse anim anim culpa. Ea sunt deserunt eu in ipsum ea. Commodo ut irure est quis. Mollit cillum pariatur eu occaecat ea culpa consectetur nostrud non.
                Dolor consectetur elit dolor. Eu aliquip aliqua duis adipisicing sit duis et sit est sunt. Do anim aliquip nostrud sunt aliquip veniam velit exercitation eiusmod amet laboris. Nisi ad officia cupidatat in labore commodo. Quis reprehenderit eiusmod id enim aliquip eu Lorem sunt labore. Id veniam ut non nulla. Incididunt ex aliquip ipsum.
                Occaecat occaecat quis laborum labore adipisicing ut est. Dolore ea fugiat aliquip magna nostrud adipisicing pariatur proident eiusmod incididunt cillum aute excepteur sunt. Occaecat exercitation excepteur dolor. Anim incididunt enim nostrud laboris. Magna anim tempor aliqua minim labore eu adipisicing eu veniam ullamco reprehenderit minim culpa anim. Commodo proident nulla officia aliqua occaecat magna est aute. Dolor dolore nulla enim cillum veniam sunt voluptate occaecat nostrud duis. Cillum et non cupidatat adipisicing tempor do qui enim commodo cupidatat non sunt.
                Labore velit velit eiusmod eiusmod culpa pariatur nisi aliquip culpa sunt culpa ea laborum amet aliquip. Lorem excepteur sunt irure minim culpa anim sit esse est. Enim ipsum culpa minim magna eiusmod amet amet. Deserunt ad aute culpa eiusmod cupidatat ut consectetur commodo nostrud id fugiat ipsum. Eu mollit deserunt deserunt mollit non qui culpa.
                Sit nulla adipisicing aliquip ullamco. Cillum velit quis elit sit tempor proident labore deserunt enim dolor quis ea. Voluptate velit ut qui. Est veniam incididunt ad occaecat qui sit non sint officia in.
                Enim adipisicing do pariatur Lorem minim nisi culpa. Cillum ullamco sit irure ullamco. Excepteur officia laboris labore do ullamco. Et velit amet aute magna cupidatat nisi cillum minim incididunt dolor. Minim tempor aliqua ullamco esse reprehenderit in. Commodo aliqua sint cupidatat.
                Minim aliqua velit eiusmod id tempor veniam consequat voluptate dolor mollit dolor minim. Ut enim adipisicing et. Do anim aute id laborum duis ea exercitation qui laboris ad reprehenderit aliquip enim proident nulla. Consequat ad do ad incididunt ad non officia laboris commodo labore ut.
                Nisi enim pariatur deserunt fugiat mollit proident voluptate eiusmod ea aute consectetur irure cillum sint. Ut ea dolore enim eu laborum tempor culpa eiusmod. Reprehenderit adipisicing amet occaecat commodo veniam. Excepteur nostrud magna aute incididunt enim. Deserunt laborum cupidatat nisi consectetur non ullamco elit ullamco ea mollit. Adipisicing et tempor nisi est exercitation enim. Anim consequat excepteur magna ut. Sit eu voluptate excepteur.
                Laboris duis magna proident tempor reprehenderit ex eiusmod velit consequat id anim occaecat non proident magna. Ullamco nulla voluptate laboris adipisicing. Anim cupidatat ipsum tempor quis voluptate deserunt sint mollit. Veniam consequat nisi ut do exercitation nisi deserunt enim sint irure est mollit velit occaecat sint. Eu aliqua enim dolore mollit irure ex eiusmod veniam eiusmod aute est elit consequat quis. Ea cillum qui elit sit aliquip ut dolor exercitation sit do tempor commodo reprehenderit nulla incididunt.
                Adipisicing reprehenderit ullamco magna sit aute dolor do enim in ullamco est amet irure. Officia mollit Lorem occaecat incididunt cupidatat nisi fugiat laboris. Dolore est proident voluptate reprehenderit commodo veniam voluptate minim culpa amet. Qui laboris cillum adipisicing sint. Cupidatat amet cupidatat pariatur laborum esse quis aute mollit labore enim ea. Ex ex amet id consequat quis ex dolor qui pariatur tempor enim ut minim.
                Reprehenderit laborum incididunt proident Lorem qui cupidatat labore do ad dolor. Quis ea esse nisi enim cillum ullamco ipsum incididunt. Occaecat cupidatat anim dolor est sit enim reprehenderit consectetur. Aliquip minim adipisicing sit.
                Quis esse veniam minim pariatur excepteur anim labore qui sint ullamco quis sunt laborum nisi. Sit qui proident anim eu. Do consequat aliquip aliqua fugiat tempor excepteur quis consequat nulla anim ea Lorem amet ex mollit. Veniam officia dolore sint proident mollit ipsum ad amet consequat deserunt labore incididunt. Et ex laborum irure aliquip ullamco. Enim laboris aliquip irure cillum veniam incididunt laborum culpa consectetur dolor aliquip.
                In labore enim sit velit in deserunt esse ea in nostrud duis. Laborum voluptate amet tempor proident elit ea. Et sint irure cupidatat mollit labore ipsum magna pariatur est fugiat. Proident adipisicing dolore minim occaecat aliqua. Aliquip nulla ad consectetur veniam laboris.
                Do tempor in sint. Aute cillum magna commodo nulla labore aliqua non proident est laborum exercitation occaecat anim pariatur in. Irure ut sunt nisi ut occaecat ipsum veniam. Ipsum irure ut exercitation. Consequat laborum eiusmod exercitation esse velit occaecat exercitation consequat et minim ad amet culpa. Duis id dolore sit dolor quis nisi non reprehenderit eu minim. Fugiat voluptate sit veniam eu aute exercitation ut minim. Nisi nostrud minim aliquip ex ea.
                Ad pariatur consequat cillum. Irure eiusmod amet reprehenderit ut est exercitation commodo qui. Magna laboris pariatur velit anim sint adipisicing sit tempor exercitation ullamco aliqua culpa ex. Exercitation dolor ipsum nisi ullamco nisi ex ad dolor ipsum do.
                Duis cupidatat in et ut mollit occaecat. Id nisi anim amet amet ad reprehenderit deserunt. In laborum do elit culpa sint nostrud id amet non deserunt ea mollit est proident. Eiusmod enim deserunt fugiat.
                Ex veniam ex enim officia laboris reprehenderit sit sunt duis anim. Proident sunt consectetur irure culpa mollit ullamco in anim anim ullamco. Tempor ea fugiat culpa mollit enim laboris magna magna cupidatat fugiat pariatur id esse. Ipsum irure aliqua labore do fugiat consectetur do. Nulla minim ea occaecat nisi et aute. Nisi pariatur fugiat velit elit magna officia ut ut officia occaecat tempor elit excepteur.
                Pariatur dolore proident cillum aliquip ipsum sunt eiusmod enim. Cillum nostrud pariatur ullamco cupidatat enim officia id. Et proident dolore sunt velit. Commodo mollit minim in proident anim nisi labore. Cupidatat officia do in sit aliqua esse dolor.
                Fugiat amet do quis sint laborum esse. Mollit elit amet mollit nostrud nulla non magna. Officia cupidatat commodo aute dolore cillum adipisicing. Voluptate velit amet fugiat quis et veniam Lorem proident. Ipsum Lorem commodo duis sunt quis et. Officia ullamco laboris ut elit mollit ad Lorem et voluptate Lorem dolore commodo culpa elit veniam. Minim et veniam nostrud consequat non quis elit aliqua officia eiusmod id aute ex. Veniam occaecat est sit adipisicing excepteur eiusmod consectetur ullamco exercitation duis quis cupidatat adipisicing.
                Laborum laborum proident velit qui esse magna ad consequat nisi id irure ex laborum dolor. Veniam dolor id anim nulla occaecat minim. Nulla amet tempor anim in incididunt ad. Aliqua duis eu id in sit ea occaecat amet sint non ea nulla labore proident velit.
                Minim cillum enim est commodo non commodo. Duis id occaecat proident laboris exercitation amet sunt mollit officia ipsum consequat mollit nostrud reprehenderit aute. Sit nostrud occaecat et aliqua aute elit laborum proident eiusmod voluptate exercitation esse cupidatat minim ut. Ullamco et aliquip pariatur commodo quis ad magna sint et id id ut nostrud.
                Mollit sint irure aliquip sint. Ex amet id dolore veniam cupidatat esse aliqua est eu elit ut. Ea nisi aliqua qui minim ut nisi elit cupidatat esse. Est cupidatat do minim pariatur velit voluptate ex velit mollit quis do. Voluptate et ad et pariatur mollit elit. Ullamco ipsum enim exercitation ex voluptate.
                In cupidatat nulla qui irure sunt. Dolore est Lorem consequat incididunt ea occaecat laborum eu. Sint in esse pariatur enim aliquip veniam. Ut ad incididunt deserunt. Cillum ea cupidatat adipisicing Lorem ipsum ad commodo dolore pariatur aute culpa dolor.
                Enim ut ad proident voluptate ullamco velit proident commodo nulla culpa consectetur. Consequat nulla id quis. Sint est voluptate dolore adipisicing duis excepteur. Eiusmod qui aliqua culpa sint velit elit Lorem consequat dolor in ipsum aliquip et veniam cupidatat. Est ipsum voluptate ullamco labore.
                Minim anim id anim nulla. Aliqua ea sunt ut veniam ullamco ex. Reprehenderit dolor deserunt Lorem amet est in sit excepteur enim ipsum exercitation cupidatat. Nostrud ipsum ut ea enim do Lorem magna adipisicing proident ea nulla. Nisi officia eiusmod dolore ea sunt labore non anim excepteur.
                Ut voluptate tempor sint pariatur nostrud nulla veniam. Nulla mollit ut incididunt velit eu et qui dolore amet ut do. Et non enim labore tempor magna. Adipisicing magna velit in pariatur duis laborum dolor tempor. Ad tempor reprehenderit voluptate eiusmod exercitation do veniam ea. Adipisicing laboris veniam voluptate irure. Ea fugiat ex deserunt duis proident adipisicing nostrud reprehenderit veniam cupidatat adipisicing. Eu nisi irure esse quis magna cillum magna laboris.
                Sint ipsum reprehenderit dolore sit Lorem magna labore. Excepteur aliqua id tempor laboris consectetur nisi do. Occaecat Lorem non non ad cupidatat ex sit. Dolore aliqua nulla officia mollit ut esse magna Lorem sint aliqua.
                Id occaecat anim qui proident ullamco aliqua. Amet nulla aliquip esse aliquip. Ipsum consequat aute sint est anim veniam consequat aute culpa cillum. Nisi sunt ullamco sunt excepteur reprehenderit irure ea ipsum consectetur irure dolore Lorem consectetur. Qui ipsum culpa velit aliqua aliqua cupidatat reprehenderit Lorem excepteur minim ad dolor nulla cupidatat et. Cillum labore ad veniam magna duis sint amet magna ex. Magna in minim irure eiusmod. Deserunt fugiat ad occaecat ipsum magna sunt fugiat magna officia incididunt eu ea amet.
                Est cupidatat voluptate irure elit ea aute aute elit cillum ad mollit ex minim duis enim. Duis aliqua nulla enim magna ad anim nostrud excepteur. Non amet ea excepteur consequat est non esse. Commodo dolor ipsum laborum.
                Adipisicing commodo reprehenderit labore esse voluptate ex commodo ullamco sint occaecat duis eiusmod incididunt aute et. Culpa sint laborum Lorem in veniam laborum duis ex. Nostrud ipsum sit aute excepteur fugiat. Est laborum irure enim adipisicing cupidatat nulla culpa cupidatat ipsum esse proident. Do officia incididunt ex laborum aliqua irure aliquip quis mollit. Esse et amet ut id eu in magna commodo esse exercitation duis ullamco.
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('fixed')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Background Blur">
        <x-preview language="blade" :contents="$blur">
            <x-modal id="blur-modal-sm" title="TallStackUI" blur>
                SM
            </x-modal>
            <x-modal id="blur-modal-md" title="TallStackUI" blur="md">
                MD
            </x-modal>
            <x-modal id="blur-modal-lg" title="TallStackUI" blur="lg">
                LG
            </x-modal>
            <x-modal id="blur-modal-xl" title="TallStackUI" blur="xl">
                XL
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('blur-modal-sm')">
                SM
            </x-button>
            <x-button x-on:click="$tsui.open.modal('blur-modal-md')">
                MD
            </x-button>
            <x-button x-on:click="$tsui.open.modal('blur-modal-lg')">
                LG
            </x-button>
            <x-button x-on:click="$tsui.open.modal('blur-modal-xl')">
                XL
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-col items-start space-y-2">
                <x-modal id="default-size-modal" title="TallStackUI">
                    Default (2xl)
                </x-modal>
                <x-modal id="sm-size-modal" title="TallStackUI" size="sm">
                    sm
                </x-modal>
                <x-modal id="md-size-modal" title="TallStackUI" size="md">
                    md
                </x-modal>
                <x-modal id="lg-size-modal" title="TallStackUI" size="lg">
                    lg
                </x-modal>
                <x-modal id="xl-size-modal" title="TallStackUI" size="xl">
                    xl
                </x-modal>
                <x-modal id="3xl-size-modal" title="TallStackUI" size="3xl">
                    3xl
                </x-modal>
                <x-modal id="4xl-size-modal" title="TallStackUI" size="4xl">
                    4xl
                </x-modal>
                <x-modal id="5xl-size-modal" title="TallStackUI" size="5xl">
                    5xl
                </x-modal>
                <x-modal id="6xl-size-modal" title="TallStackUI" size="6xl">
                    6xl
                </x-modal>
                <x-modal id="7xl-size-modal" title="TallStackUI" size="7xl">
                    7xl
                </x-modal>
                <x-modal id="full-size-modal" title="TallStackUI" size="full">
                    Full Size
                </x-modal>
                <x-button x-on:click="$tsui.open.modal('default-size-modal')">
                    Default
                </x-button>
                <x-button x-on:click="$tsui.open.modal('sm-size-modal')">
                    sm
                </x-button>
                <x-button x-on:click="$tsui.open.modal('md-size-modal')">
                    md
                </x-button>
                <x-button x-on:click="$tsui.open.modal('lg-size-modal')">
                    lg
                </x-button>
                <x-button x-on:click="$tsui.open.modal('xl-size-modal')">
                    xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('3xl-size-modal')">
                    3xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('4xl-size-modal')">
                    4xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('5xl-size-modal')">
                    5xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('6xl-size-modal')">
                    6xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('7xl-size-modal')">
                    7xl
                </x-button>
                <x-button x-on:click="$tsui.open.modal('full-size-modal')">
                    Full Size
                </x-button>
            </div>
        </x-preview>
        <div class="mt-2 block sm:hidden">
            <x-warning text="Applicable only on desktop devices." />
        </div>
    </x-section>
    <x-section title="Centered">
        <x-preview language="blade" :contents="$center">
            <x-modal id="center" title="TallStackUI" center>
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('center')">
                Open
            </x-button>
        </x-preview>
        <div class="mt-2 block sm:hidden">
            <x-warning text="Applicable only on desktop devices." />
        </div>
    </x-section>
    <x-section title="Z Index">
        <x-preview language="blade" :contents="$zIndex">
            <x-modal id="z-modal" title="TallStackUI" z-index="z-10">
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('z-modal')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Persistent" description="An option to prevent the closing when click outside.">
        <x-preview language="blade" :contents="$persistent">
            <x-modal id="persistent-modal" title="TallStackUI" persistent>
                TallStackUI
                <x-slot:footer>
                    <x-button color="red" x-on:click="$tsui.close.modal('persistent-modal')">Close</x-button>
                </x-slot:footer>
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('persistent-modal')">
                Open
            </x-button>
        </x-preview>
    </x-section>
    <x-warning text="Make sure to provide some way to close the modal when using this option, such as a button within the modal." />
    <x-section class="mt-4" title="Wireable" description="An option to control the modal via Livewire.">
        <x-preview language="blade" :contents="$wireable">
            <livewire:documentation.modal.entangle/>
        </x-preview>
    </x-section>
    <x-section title="Wireable Customized" description="Customize which property to use to control the modal via Livewire.">
        <x-preview language="blade" :contents="$wireableCustomized">
            <livewire:documentation.modal.customentangle/>
        </x-preview>
    </x-section>
    <x-section title="AlpineJS Helper" description="Helpers to open and close the modal using AlpineJS.">
        <x-code language="blade" :contents="$alpinejs"/>
    </x-section>
    <x-section title="Events" description="An option to listen event when the modal is opening or closing.">
        <x-preview language="blade" :contents="$events">
            <x-modal id="event-open" title="TallStackUI" x-on:open="alert('Opened!')">
                TallStackUI
            </x-modal>
            <x-modal id="event-close" title="TallStackUI" x-on:close="alert('Closed!')">
                TallStackUI
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('event-open')">
                Open Event
            </x-button>
            <x-button x-on:click="$tsui.open.modal('event-close')">
                Close Event
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Focus Helper" description="Ah helper to interact with modal events to easily focus an input when modal open.">
        <div class="space-y-4">
            <x-code language="blade" :contents="$focus"/>
            <p>
                You can control the time (in milliseconds) to wait before focusing the input, default is <x-block>250</x-block>:
            </p>
            <x-code language="blade" :contents="$focusTime"/>
            <p>
                Additionally, you can use a custom <x-block>data-focus</x-block> or <x-block>x-ref</x-block> HTML attribute to determine the input to be focused:
            </p>
            <x-code language="blade" :contents="$focusUsingDataAttribute"/>
        </div>
    </x-section>
    <x-available-configuration />
    <x-section title="Centered on a Breakpoint" new description="center was a boolean: centered on every viewport or on none. It now also takes a Tailwind breakpoint, which is the bottom-sheet-on-phone, centered-dialog-on-desktop layout most applications want.">
        <x-preview language="blade" :contents="$centerBreakpoint">
            <x-modal id="center-breakpoint-modal" title="TallStackUI" center="md">
                Resize the window across 768px: a bottom sheet below it, a centered dialog from there upwards.
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('center-breakpoint-modal')">
                Open Modal
            </x-button>
        </x-preview>
        <x-table class="mt-4" :headers="[
            ['index' => 'value', 'label' => 'Value'],
            ['index' => 'classes', 'label' => 'Classes'],
        ]" :rows="[
            ['value' => 'false', 'classes' => 'items-end sm:items-start'],
            ['value' => 'true', 'classes' => 'items-center'],
            ['value' => 'sm', 'classes' => 'items-end sm:items-center'],
            ['value' => 'md', 'classes' => 'items-end sm:items-start md:items-center'],
            ['value' => 'lg', 'classes' => 'items-end sm:items-start lg:items-center'],
            ['value' => 'xl', 'classes' => 'items-end sm:items-start xl:items-center'],
            ['value' => '2xl', 'classes' => 'items-end sm:items-start 2xl:items-center'],
        ]" />
        <p class="mt-4">The same values work as a global default:</p>
        <x-code class="mt-4" language="php" :contents="$centerConfiguration" />
        <x-warning class="mt-4">
            A breakpoint means "not centered below it". Below <x-block>md</x-block> the modal behaves exactly like a
            modal with no <x-block>center</x-block> at all, which includes the <x-block>sm:items-start</x-block> step.
            Anything outside the five breakpoints throws at render time, including <x-block>center="true"</x-block>.
        </x-warning>
    </x-section>
    <x-section title="Mobile Sheet Motion" new disable-copy>
        Below <x-block>sm</x-block> the modal is a bottom sheet, and it now opens like one: it travels opaque from off
        screen over 400ms instead of the 16px lift plus fade it used to do. The backdrop still fades. From
        <x-block>sm</x-block> up nothing changed. A boolean <x-block>center</x-block> opts out entirely; a breakpoint
        does not, since the phone is still a sheet.
    </x-section>
    <x-section title="Mobile Handle" new description="Below sm the modal already behaves as a bottom sheet. handle completes the idiom: a grabber bar on top of the panel, visible only on mobile, that follows the finger and closes the modal when released beyond a quarter of the panel height.">
        <x-preview language="blade" :contents="$handle">
            <x-modal id="handle-modal" title="TallStackUI" handle>
                Open this on a phone, or narrow the window below 640px, and drag the grabber bar down to close.
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('handle-modal')">
                Open Modal
            </x-button>
        </x-preview>
        <p class="mt-4">The flag also exists as a global default, the inline prop always winning:</p>
        <x-code class="mt-4" language="php" :contents="$handleConfiguration" />
        <x-warning class="mt-4">
            Below the drag threshold the panel snaps back through its own transition; beyond it the panel keeps sliding
            down and the modal only really closes once it is off-screen. Pulling upwards meets rubber band resistance. A
            fully centered modal &mdash; <x-block>center</x-block> as <x-block>true</x-block>, not a breakpoint &mdash;
            never behaves as a bottom sheet, so combining it with <x-block>handle</x-block> throws.
        </x-warning>
    </x-section>
    <x-section title="Paddingless" new description="Strips the padding of the main slot, leaving it flush against the edges. Header and footer keep theirs.">
        <x-preview language="blade" :contents="$paddingless">
            <x-modal id="paddingless-modal" title="TallStackUI" paddingless>
                <x-table :headers="[
                    ['index' => 'name', 'label' => 'Name'],
                    ['index' => 'email', 'label' => 'E-mail'],
                ]" :rows="[
                    ['name' => 'Taylor', 'email' => 'taylor@laravel.com'],
                    ['name' => 'Caleb', 'email' => 'caleb@laravel.com'],
                ]" />
            </x-modal>
            <x-button x-on:click="$tsui.open.modal('paddingless-modal')">
                Open Modal
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Footer Alignment" new description="Read from the slot itself. Combining alignments, or mixing one with unwrapped, throws.">
        <x-preview language="blade" :contents="$footerAlignment">
            <div class="flex flex-wrap gap-2">
                <x-modal id="footer-alignment-start" title="TallStackUI">
                    The footer below is aligned with <b>start</b>.
                    <x-slot:footer start>
                        <x-button color="red">Delete</x-button>
                        <x-button>Save</x-button>
                    </x-slot:footer>
                </x-modal>
                <x-button x-on:click="$tsui.open.modal('footer-alignment-start')">Start</x-button>

                <x-modal id="footer-alignment-center" title="TallStackUI">
                    The footer below is aligned with <b>center</b>.
                    <x-slot:footer center>
                        <x-button color="red">Delete</x-button>
                        <x-button>Save</x-button>
                    </x-slot:footer>
                </x-modal>
                <x-button x-on:click="$tsui.open.modal('footer-alignment-center')">Center</x-button>

                <x-modal id="footer-alignment-end" title="TallStackUI">
                    The footer below is aligned with <b>end</b>.
                    <x-slot:footer end>
                        <x-button color="red">Delete</x-button>
                        <x-button>Save</x-button>
                    </x-slot:footer>
                </x-modal>
                <x-button x-on:click="$tsui.open.modal('footer-alignment-end')">End</x-button>

                <x-modal id="footer-alignment-between" title="TallStackUI">
                    The footer below is aligned with <b>between</b>.
                    <x-slot:footer between>
                        <x-button color="red">Delete</x-button>
                        <x-button>Save</x-button>
                    </x-slot:footer>
                </x-modal>
                <x-button x-on:click="$tsui.open.modal('footer-alignment-between')">Between</x-button>
            </div>
        </x-preview>
        <x-table class="mt-4" :headers="[
            ['index' => 'attribute', 'label' => 'Attribute'],
            ['index' => 'result', 'label' => 'Result'],
        ]" :rows="[
            ['attribute' => '(none)', 'result' => 'justify-end, the previous default'],
            ['attribute' => 'start', 'result' => 'justify-start'],
            ['attribute' => 'center', 'result' => 'justify-center'],
            ['attribute' => 'end', 'result' => 'justify-end, written out'],
            ['attribute' => 'between', 'result' => 'justify-between'],
            ['attribute' => 'unwrapped', 'result' => 'no aligning wrapper at all'],
        ]" />
    </x-section>
</x-layout>
