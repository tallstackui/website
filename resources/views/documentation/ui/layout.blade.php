@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout
    :$content
    :ai="['Layout' => 'layout/main', 'Layout Header' => 'layout/header', 'Sidebar' => 'layout/sidebar/main', 'Sidebar Item' => 'layout/sidebar/item', 'Sidebar Separator' => 'layout/sidebar/separator']"
>
    <x-slot:title>Layout</x-slot>
    <x-slot:description>Layout component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :items="[
                [
                    'component' => 'Layout\\Main',
                    'title' => 'Layout',
                    'customization' => $customizationLayout,
                ],
                [
                    'component' => 'Layout\\Header',
                    'title' => 'Layout Header',
                    'customization' => $customizationLayoutHeader,
                ],
                [
                    'component' => 'Layout\\SideBar\\Main',
                    'title' => 'Sidebar',
                    'customization' => $customizationSidebar,
                ],
                [
                    'component' => 'Layout\\SideBar\\Item',
                    'title' => 'Sidebar Item',
                    'customization' => $customizationSidebarItem,
                ],
                [
                    'component' => 'Layout\\SideBar\\Separator',
                    'title' => 'Sidebar Separator',
                    'customization' => $customizationSidebarSeparator,
                ],
            ]"
        />
    </x-slot>
    <x-section title="Concept" anchor="layout-concept" disable-copy>
        <p>
            TallStackUI offers a simple yet powerful and comprehensive layout
            component in terms of elements, slots, and overall features. The
            component has been extensively improved during the creation of v4,
            receiving adjustments, enhancements, and new features. Read the
            complete documentation carefully to understand all aspects of the
            layout.
        </p>
    </x-section>
    <x-section title="Layout Example" anchor="layout-layout-example">
        <div class="space-y-4">
            <p>Here is a complete example of the layout component:</p>
            <x-preview
                language="blade"
                :contents="$layout"
                frame="ui/layout/example"
                :height="720"
            />
            <p>Before continuing, you may have noticed the following:</p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    The layout uses several slots:
                    <x-block>header</x-block>
                    and
                    <x-block>menu</x-block>
                </li>
                <li>
                    It is composed of child components:
                    <x-block>layout.header</x-block>
                    ,
                    <x-block>side-bar</x-block>
                    ,
                    <x-block>side-bar.item</x-block>
                    , and
                    <x-block>side-bar.separator</x-block>
                </li>
                <li>
                    The preview also uses other TallStackUI components:
                    <x-block>dropdown</x-block>
                    ,
                    <x-block>input</x-block>
                    , and
                    <x-block>theme-switch</x-block>
                </li>
            </ul>
        </div>
    </x-section>
    <x-separator text="Layout Slots" />
    <x-section
        title="Slot: Header"
        anchor="layout-slots-slot-header"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                This slot is used to position the component
                <x-block>layout.header</x-block>
                :
            </p>
            <x-code language="blade" :contents="$header" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Menu" anchor="layout-slots-slot-menu" disable-copy>
        <div class="space-y-4">
            <p>
                This slot is used to position the comonent
                <x-block>side-bar</x-block>
                :
            </p>
            <x-code language="blade" :contents="$menu" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Top" anchor="layout-slots-slot-top" disable-copy>
        <div class="space-y-4">
            <p>
                Although it was not used in the example above, this slot is
                positioned above the
                <x-block>menu</x-block>
                slot and was created to receive any content added in this
                position. Internally it is applied like this:
            </p>
            <x-code language="blade" :contents="$top" disable-copy />
        </div>
    </x-section>
    <x-section
        title="Slot: Footer"
        anchor="layout-slots-slot-footer"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                Same as
                <x-block>top</x-block>
                , but positioned in the bottom of the layout component:
            </p>
            <x-code language="blade" :contents="$footer" disable-copy />
        </div>
    </x-section>
    <x-separator text="Children Components" />
    <x-section title="Layout Header" anchor="children-components-layout-header">
        <div class="space-y-4">
            <p>
                The
                <x-block>layout.header</x-block>
                component is used to group three specific slots that vary the
                positions of content in the top horizontal bar, called the
                header.
            </p>
            <x-preview
                language="blade"
                :contents="$headerSlots"
                frame="ui/layout/header-slots"
                :height="220"
            />
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    <x-block>left</x-block>
                    : adds content to the left of the horizontal bar
                </li>
                <li>
                    <x-block>middle</x-block>
                    : adds content to the middle of the horizontal bar
                </li>
                <li>
                    <x-block>right</x-block>
                    : adds content to the right of the horizontal bar
                </li>
            </ul>
            <p>
                Additionally, you can control the display of a button that opens
                the
                <x-block>side-bar</x-block>
                on mobile devices. You will learn more about this as you
                continue reading the documentation below.
            </p>
        </div>
    </x-section>
    <x-section
        title="Side Bar"
        anchor="children-components-side-bar"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                The
                <x-block>side-bar</x-block>
                is the component that creates the structure to receive the
                options menu. It is unique between the desktop and mobile
                versions, which means that the same options menu you see on the
                desktop will be the same as the one you see on the mobile
                version.
            </p>
            <x-code language="blade" :contents="$sidebar" disable-copy />
            <p>
                Since the
                <x-block>side-bar</x-block>
                is applied to both desktop and mobile, if for some reason you do
                not want to use the menu for mobile devices, you can hide the
                button that is displayed in the
                <x-block>layout.header</x-block>
                so that when clicked it activates the
                <x-block>side-bar</x-block>
                on mobile:
            </p>
            <x-code
                language="blade"
                :contents="$headerWithoutButton"
                disable-copy
            />
            <p>
                If you hide the default
                <x-block>side-bar</x-block>
                opening button on mobile, but want to use another button to
                control the
                <x-block>side-bar</x-block>
                opening on mobile, just trigger AlpineJS events:
            </p>
            <x-code language="blade" :contents="$javascript" disable-copy />
            <p>
                The
                <x-block>side-bar</x-block>
                has few settings available, but they are all useful for a
                purpose:
            </p>
            <x-table
                :headers="[
                    ['index' => 'type', 'label' => 'Type'],
                    ['index' => 'name', 'label' => 'Name'],
                    ['index' => 'description', 'label' => 'Description'],
                ]"
                :rows="[
                    [
                        'type' => 'Slot',
                        'name' => 'brand',
                        'description' => 'Image or text above the options menu.',
                    ],
                    [
                        'type' => 'Slot',
                        'name' => 'brand-collapsed',
                        'description' => 'Compact branding when the sidebar is collapsed.',
                    ],
                    [
                        'type' => 'Slot',
                        'name' => 'footer',
                        'description' => 'Content pinned to the bottom of the sidebar.',
                    ],
                    [
                        'type' => 'Attribute',
                        'name' => 'smart',
                        'description' => 'Enables route detection for the current route effect.',
                    ],
                    [
                        'type' => 'Attribute',
                        'name' => 'navigate',
                        'description' => 'Enables wire:navigate on routes.',
                    ],
                    [
                        'type' => 'Attribute',
                        'name' => 'navigate-hover',
                        'description' => 'Enables wire:navigate.hover on routes.',
                    ],
                    [
                        'type' => 'Attribute',
                        'name' => 'thin-scroll',
                        'description' => 'Enables soft-scrollbar in the sidebar.',
                    ],
                    [
                        'type' => 'Attribute',
                        'name' => 'thick-scroll',
                        'description' => 'Enables custom-scrollbar in the sidebar.',
                    ],
                    [
                        'type' => 'Attribute',
                        'name' => 'collapsible',
                        'description' => 'Enables collapsible sidebar behavior.',
                    ],
                ]"
            >
                @interact("column_name", $row)
                    <x-block>{{ $row["name"] }}</x-block>
                @endinteract
            </x-table>
            <x-warning>
                The collapsible will work properly if all of your items have
                icons and you don't use three levels of items.
            </x-warning>
            <p>Example:</p>
            <x-code
                language="blade"
                :contents="$sidebarOptions"
                disable-copy
            />
        </div>
    </x-section>
    <x-section
        title="Brand Collapsed"
        anchor="children-components-brand-collapsed"
    >
        <div class="space-y-4">
            <p>
                When using the
                <x-block>collapsible</x-block>
                attribute, you can provide a
                <x-block>brand-collapsed</x-block>
                slot to display a compact version of your branding when the
                sidebar is collapsed. This is useful for showing an icon instead
                of a full logo:
            </p>
            <x-preview
                language="blade"
                :contents="$brandCollapsed"
                frame="ui/layout/brand-collapsed"
                :height="720"
            />
        </div>
    </x-section>
    <x-section
        title="Side Bar Footer"
        anchor="children-components-side-bar-footer"
    >
        <div class="space-y-4">
            <p>
                The
                <x-block>footer</x-block>
                slot allows you to pin content to the bottom of the sidebar,
                such as version information or user profile links:
            </p>
            <x-preview
                language="blade"
                :contents="$sidebarFooter"
                frame="ui/layout/sidebar-footer"
                :height="720"
            />
        </div>
    </x-section>
    <x-section
        title="Side Bar Item"
        anchor="children-components-side-bar-item"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                The
                <x-block>side-bar.item</x-block>
                component is used to add clickable options to the
                <x-block>side-bar</x-block>
                . It can be used to add an individual item or create a group of
                items.
            </p>
            <x-preview frame="ui/layout/sidebar-item" :height="720" />
            <x-code language="blade" :contents="$item" disable-copy />
            <p>
                If you don't want to use the
                <x-block>side-bar</x-block>
                component's
                <x-block>smart</x-block>
                to activate automatic route detection, you can control the route
                detection behavior manually, through the boolean attributes:
                <x-block>opened</x-block>
                - for the group of items, and
                <x-block>current</x-block>
                for the item itself:
            </p>
            <x-code language="blade" :contents="$attributes" disable-copy />
            <p>
                These attributes are boolean, which means you can pass
                conditions to them:
            </p>
            <x-code language="blade" :contents="$match" disable-copy />
            <p>
                Additionally, you can use
                <x-block>visible</x-block>
                attribute to hide the item.
            </p>
            <x-code language="blade" :contents="$visible" disable-copy />
            <p>
                As demonstrated above, the
                <x-block>visible</x-block>
                accepts boolean values and closures to be evaluated using
                Laravel's
                <x-block>value</x-block>
                helper function.
            </p>
        </div>
    </x-section>
    <x-section
        title="Href Attribute"
        anchor="children-components-href-attribute"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                By default, sidebar items use the
                <x-block>route</x-block>
                attribute which integrates with smart route matching and
                <x-block>wire:navigate</x-block>
                . If you need to link to an external URL or bypass route
                matching entirely, use the
                <x-block>href</x-block>
                attribute instead:
            </p>
            <x-code language="blade" :contents="$href" disable-copy />
        </div>
    </x-section>
    <x-section
        title="Match Attribute"
        anchor="children-components-match-attribute"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                The
                <x-block>match</x-block>
                attribute provides a flexible way to control the active state of
                a sidebar item using a route name pattern. This is useful when
                you want an item to appear active across multiple related
                routes:
            </p>
            <x-code language="blade" :contents="$itemMatch" disable-copy />
        </div>
    </x-section>
    <x-section title="Badge" anchor="children-components-badge" disable-copy>
        <div class="space-y-4">
            <p>
                Sidebar items support a
                <x-block>badge</x-block>
                slot to display notification counts or labels. You can customize
                the badge color using the
                <x-block>badge-color</x-block>
                attribute:
            </p>
            <x-code language="blade" :contents="$badge" disable-copy />
        </div>
    </x-section>
    <x-section
        title="Collapsed Sidebar Flyout"
        anchor="children-components-collapsed-sidebar-flyout"
        new
        disable-copy
    >
        <div class="space-y-4">
            <p>
                A group has nothing to show on a collapsed sidebar: its items
                live in a list that only opens inline, and the rail has no room
                for it. Hovering, or clicking, for touch, a collapsed group now
                opens its items in a panel anchored beside the icon, headed by
                the group name.
            </p>
            <p>
                It closes on leave, on click outside, on Escape, and when the
                sidebar is expanded again. Single items keep their tooltip;
                groups no longer show one, since the panel names itself.
            </p>
        </div>
    </x-section>
    <x-section
        title="Badge on the Collapsed Rail"
        anchor="children-components-badge-on-the-collapsed-rail"
        new
        disable-copy
    >
        <div class="space-y-4">
            <p>
                A badge is the one thing on an item that carries information the
                icon cannot: a count of things waiting. Collapsing the sidebar
                used to drop it, so the compact mode was also the mode that hid
                what needed attention. It now degrades to a dot on the corner of
                the icon, in the color the badge was given.
            </p>
        </div>
    </x-section>
    <x-section
        title="Side Bar Separator"
        anchor="children-components-side-bar-separator"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                The
                <x-block>side-bar.separator</x-block>
                is a component used to create decorated separations between
                items:
            </p>
            <x-code language="blade" :contents="$separator" disable-copy />
            <p>
                There are three different options available. Each offers a
                unique style:
            </p>
            <x-code language="blade" :contents="$styles" disable-copy />
        </div>
    </x-section>
    <x-section
        title="Disable Layout Components"
        anchor="children-components-disable-layout-components"
        disable-copy
    >
        If for some reason you do not want to use the layout components - the
        main component and its child components, you can set the environment
        variable
        <x-block>TALLSTACKUI_IGNORE_LAYOUT_REGISTRATION</x-block>
        to
        <x-block>true</x-block>
        to achieve this behavior without having to publish the configuration
        file and comment out the components - which would also be a valid
        measure, but less practical.
    </x-section>
    <x-section
        title="Customization"
        anchor="children-components-customization"
        disable-copy
    >
        All the components mentioned above are available to be fully customized
        through one of the TallStackUI customization methods:
        <x-refer :doc="['customization', 'concept']">
            soft customization or deep customization.
        </x-refer>
    </x-section>
</x-layout>
