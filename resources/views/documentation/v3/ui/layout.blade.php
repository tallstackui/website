@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Layout
    </x-slot:title>
    <x-slot:description>
        Layout component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :customization="$customizationLayout" component="Layout\Layout" title="Layout" />
        <livewire:customization :customization="$customizationLayoutHeader" component="Layout\Header" />
        <livewire:customization :customization="$customizationSidebar" component="Layout\SideBar\SideBar" title="Sidebar" />
        <livewire:customization :customization="$customizationSidebarItem" component="Layout\SideBar\Item" title="Sidebar Item" />
        <livewire:customization :customization="$customizationSidebarSeparator" component="Layout\SideBar\Separator" title="Sidebar Separator" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <p>
            The TallStackUI layout component was introduced in version 2 for dashboard creation and
            has been enhanced in version 3 with features like a collapsible sidebar, collapsed branding,
            a sidebar footer slot, and item badges. While this component is simple, it is complete in
            every way. Due to the format of the TallStackUI documentation, there will be no code examples
            of the layout that makes it display.
        </p>
    </x-section>
    <x-section title="Layout Example" disable-copy>
        <div class="space-y-4">
            <p>
                Here is a complete example of using the layout component:
            </p>
            <x-code language="blade" :contents="$layout" disable-copy />
            <p>
                Before continuing, you may have noticed the following:
            </p>
            <ul class="list-inside list-decimal">
                <li>The layout component has multiple slots</li>
                <li>The layout component has other components, such as <x-block>layout.header</x-block></li>
                <li>In this example, we are using other components from TallStackUI, such as <x-block>dropdown</x-block></li>
            </ul>
        </div>
    </x-section>
    <x-separator text="Layout Slots" />
    <x-section title="Slot: Header" disable-copy>
        <div class="space-y-4">
            <p>
                This slot is used to position the component <x-block>layout.header</x-block>:
            </p>
            <x-code language="blade" :contents="$header" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Menu" disable-copy>
        <div class="space-y-4">
            <p>
                This slot is used to position the comonent <x-block>side-bar</x-block>:
            </p>
            <x-code language="blade" :contents="$menu" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Top" disable-copy>
        <div class="space-y-4">
            <p>
                Although it was not used in the example above, this slot is positioned above the <x-block>menu</x-block>
                slot and was created to receive any content added in this position. Internally it is applied like this:
            </p>
            <x-code language="blade" :contents="$top" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Footer" disable-copy>
        <div class="space-y-4">
            <p>
                Same as <x-block>top</x-block>, but positioned in the bottom of the layout component:
            </p>
            <x-code language="blade" :contents="$footer" disable-copy />
        </div>
    </x-section>
    <x-separator text="Children Components" />
    <x-section title="Layout Header" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>layout.header</x-block> component is used to group three specific slots
                that vary the positions of content in the top horizontal bar, called the header.
            </p>
            <x-code language="blade" :contents="$headerSlots" disable-copy />
            <ul class="list-inside list-decimal">
                <li><x-block>left</x-block>: adds content to the left of the horizontal bar</li>
                <li><x-block>middle</x-block>: adds content to the middle of the horizontal bar</li>
                <li><x-block>right</x-block>: adds content to the right of the horizontal bar</li>
            </ul>
            <p>
                Additionally, you can control the display of a button that opens the <x-block>side-bar</x-block> on mobile devices.
                You will learn more about this as you continue reading the documentation below.
            </p>
        </div>
    </x-section>
    <x-section title="Side Bar" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>side-bar</x-block> is the component that creates the structure to receive the options menu.
                It is unique between the desktop and mobile versions, which means that the same options menu you see on
                the desktop will be the same as the one you see on the mobile version.
            </p>
            <x-code language="blade" :contents="$sidebar" disable-copy />
            <p>
                Since the <x-block>side-bar</x-block> is applied to both desktop and mobile, if for some reason you do not want to use the menu for mobile devices,
                you can hide the button that is displayed in the <x-block>layout.header</x-block> so that when clicked it activates the <x-block>side-bar</x-block> on mobile:
            </p>
            <x-code language="blade" :contents="$headerWithoutButton" disable-copy />
            <p>
                If you hide the default <x-block>side-bar</x-block> opening button on mobile, but want to use another
                button to control the <x-block>side-bar</x-block> opening on mobile, just trigger AlpineJS events:
            </p>
            <x-code language="blade" :contents="$javascript" disable-copy />
            <p>
                The <x-block>side-bar</x-block> has few settings available, but they are all useful for a purpose:
            </p>
            <ul class="list-inside list-decimal">
                <li>Slot: <x-block>brand</x-block>: special slot for adding an image/text above the options menu</li>
                <li>Slot: <x-block>brand-collapsed</x-block>: compact branding shown when the collapsible sidebar is collapsed</li>
                <li>Slot: <x-block>footer</x-block>: content pinned to the bottom of the sidebar</li>
                <li>Attribute: <x-block>smart</x-block>: enable route detection behavior to enable the "current" routes effect</li>
                <li>Attribute: <x-block>navigate</x-block>: enable <x-block>wire:navigate</x-block> routes</li>
                <li>Attribute: <x-block>navigate-hover</x-block>: enable <x-block>wire:navigate.hover</x-block> routes</li>
                <li>Attribute: <x-block>thin-scroll</x-block>: enable <x-block>soft-scrollbar</x-block> in the side bar</li>
                <li>Attribute: <x-block>thick-scroll</x-block>: enable <x-block>custom-scrollbar</x-block> in the side bar</li>
                <li>Attribute: <x-block>collapsible</x-block>: enable <x-block>collapsible</x-block> behavior to the sidebar</li>
            </ul>
            <x-warning>
                The collapsible will work properly if all of your items have icons and you don't use three levels of items.
            </x-warning>
            <p>
                Example:
            </p>
            <x-code language="blade" :contents="$sidebarOptions" disable-copy />
        </div>
    </x-section>
    <x-section title="Brand Collapsed" disable-copy>
        <div class="space-y-4">
            <p>
                When using the <x-block>collapsible</x-block> attribute, you can provide a
                <x-block>brand-collapsed</x-block> slot to display a compact version of your branding
                when the sidebar is collapsed. This is useful for showing an icon instead of a full logo:
            </p>
            <x-code language="blade" :contents="$brandCollapsed" disable-copy />
        </div>
    </x-section>
    <x-section title="Side Bar Footer" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>footer</x-block> slot allows you to pin content to the bottom of the sidebar,
                such as version information or user profile links:
            </p>
            <x-code language="blade" :contents="$sidebarFooter" disable-copy />
        </div>
    </x-section>
    <x-section title="Side Bar Item" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>side-bar.item</x-block> component is used to add clickable options to the
                <x-block>side-bar</x-block>. It can be used to add an individual item or create a group of items.
            </p>
            <x-code language="blade" :contents="$item" disable-copy />
            <p>
                If you don't want to use the <x-block>side-bar</x-block> component's <x-block>smart</x-block> to activate automatic route detection,
                you can control the route detection behavior manually, through the boolean attributes: <x-block>opened</x-block> - for the group of items,
                and <x-block>current</x-block> for the item itself:
            </p>
            <x-code language="blade" :contents="$attributes" disable-copy />
            <p>
                These attributes are boolean, which means you can pass conditions to them:
            </p>
            <x-code language="blade" :contents="$match" disable-copy />
            <p>
                Additionally, you can use <x-block>visible</x-block> attribute to hide the item.
            </p>
            <x-code language="blade" :contents="$visible" disable-copy />
            <p>
                As demonstrated above, the <x-block>visible</x-block> accepts boolean values and closures to be evaluated using Laravel's <x-block>value</x-block> helper function.
            </p>
        </div>
    </x-section>
    <x-section title="Href Attribute" disable-copy>
        <div class="space-y-4">
            <p>
                By default, sidebar items use the <x-block>route</x-block> attribute which integrates with smart
                route matching and <x-block>wire:navigate</x-block>. If you need to link to an external URL or
                bypass route matching entirely, use the <x-block>href</x-block> attribute instead:
            </p>
            <x-code language="blade" :contents="$href" disable-copy />
        </div>
    </x-section>
    <x-section title="Match Attribute" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>match</x-block> attribute provides a flexible way to control the active state
                of a sidebar item using a route name pattern. This is useful when you want an item to appear
                active across multiple related routes:
            </p>
            <x-code language="blade" :contents="$itemMatch" disable-copy />
        </div>
    </x-section>
    <x-section title="Badge" disable-copy>
        <div class="space-y-4">
            <p>
                Sidebar items support a <x-block>badge</x-block> slot to display notification counts or labels.
                You can customize the badge color using the <x-block>badge-color</x-block> attribute:
            </p>
            <x-code language="blade" :contents="$badge" disable-copy />
        </div>
    </x-section>
    <x-section title="Side Bar Separator" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>side-bar.separator</x-block> is a component used to create decorated separations between items:
            </p>
            <x-code language="blade" :contents="$separator" disable-copy />
            <p>
                There are three different options available. Each offers a unique style:
            </p>
            <x-code language="blade" :contents="$styles" disable-copy />
        </div>
    </x-section>
    <x-section title="Disable Layout Components" disable-copy>
        If for some reason you do not want to use the layout components - the main component and its child components, you can
        set the environment variable <x-block>TALLSTACKUI_AVOID_LAYOUT_REGISTRATION</x-block> to <x-block>true</x-block> to achieve this
        behavior without having to publish the configuration file and comment out the components - which would also be a valid measure, but less practical.
    </x-section>
    <x-section title="Customization" disable-copy>
        All the components mentioned above are available to be fully customized through one of the TallStackUI customization methods:
        <a href="{{ route('documentation', ['v3', 'customization', 'concept']) }}" wire:navigate class="underline">soft customization or deep customization.</a>
    </x-section>
</x-layout>
