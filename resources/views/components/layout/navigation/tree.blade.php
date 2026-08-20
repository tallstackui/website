<ul role="list" class="space-y-9">
    <li>
        <h2
            class="dark:text-dark-500 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
        >
            Getting Started
        </h2>
        <ul role="list" class="mt-3 space-y-1">
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['installation'])"
                    text="Installation"
                />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['starter-kit'])"
                    text="Starter Kit"
                />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['documentation'])"
                    text="Documentation"
                />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['component-prefix'])"
                    text="Component Prefix"
                />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['alpine'])"
                    text="AlpineJS Requirement"
                />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['upgrade-guide'])"
                    text="Upgrade Guide"
                />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['ai'])"
                    text="AI"
                />
            </li>
        </ul>
    </li>
    <li>
        <h2
            class="dark:text-dark-500 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
        >
            Components
        </h2>
        <ul role="list" class="mt-3 space-y-1">
            <li class="relative ml-4">
                <h2
                    class="dark:text-dark-500 mt-6 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
                >
                    Form
                </h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'autocomplete'])"
                            text="AutoComplete"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'checkbox'])"
                            text="Checkbox"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'color'])"
                            text="Color"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'currency'])"
                            text="Currency"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'date'])"
                            text="Date"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'input'])"
                            text="Input"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'input-select'])"
                            text="Input Select"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'number'])"
                            text="Number"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'password'])"
                            text="Password"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'pin'])"
                            text="Pin"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'radio'])"
                            text="Radio"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'range'])"
                            text="Range"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'tag'])"
                            text="Tag"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'time'])"
                            text="Time"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'textarea'])"
                            text="Textarea"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'toggle'])"
                            text="Toggle"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'select'])"
                            text="Select"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'upload'])"
                            text="Upload"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['form', 'upload-async'])"
                            text="Upload Async"
                            new
                        />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2
                    class="dark:text-dark-500 mt-6 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
                >
                    UI
                </h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'accordion'])"
                            text="Accordion"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'alert'])"
                            text="Alert"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'avatar'])"
                            text="Avatar"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'back-to-top'])"
                            text="Back to Top"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'badge'])"
                            text="Badge"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'banner'])"
                            text="Banner"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'boolean'])"
                            text="Boolean"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'breadcrumbs'])"
                            text="Breadcrumb"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'button'])"
                            text="Button"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'calendar'])"
                            text="Calendar"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'card'])"
                            text="Card"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'carousel'])"
                            text="Carousel"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'chart'])"
                            text="Chart"
                            new
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'clipboard'])"
                            text="Clipboard"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'command-palette'])"
                            text="Command Palette"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'dial'])"
                            text="Dial"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'dropdown'])"
                            text="Dropdown"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'editor'])"
                            text="Editor"
                            new
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'error'])"
                            text="Error"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'environment'])"
                            text="Environment"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'gallery'])"
                            text="Gallery"
                            new
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'icon'])"
                            text="Icon"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'modal'])"
                            text="Modal"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'layout'])"
                            text="Layout"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'link'])"
                            text="Link"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'list'])"
                            text="List"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'loading'])"
                            text="Loading"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'kbd'])"
                            text="Kbd"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'key-value'])"
                            text="KeyValue"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'progress'])"
                            text="Progress"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'qr-code'])"
                            text="QrCode"
                            new
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'reaction'])"
                            text="Reaction"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'rating'])"
                            text="Rating"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'signature'])"
                            text="Signature"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'slide'])"
                            text="Slide"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'spinner'])"
                            text="Spinner"
                            new
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'stats'])"
                            text="Stats"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'step'])"
                            text="Step"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'swap'])"
                            text="Swap"
                            new
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'tab'])"
                            text="Tab"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'table'])"
                            text="Table"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'theme-switch'])"
                            text="Theme Switch"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'timeline'])"
                            text="Timeline"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['ui', 'tooltip'])"
                            text="Tooltip"
                            changed
                        />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2
                    class="dark:text-dark-500 mt-6 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
                >
                    Interactions
                </h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['interactions', 'dialog'])"
                            text="Dialog"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['interactions', 'toast'])"
                            text="Toast"
                            changed
                        />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2
                    class="dark:text-dark-500 mt-6 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
                >
                    Internals
                </h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['internal', 'error'])"
                            text="Error"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['internal', 'floating'])"
                            text="Floating"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['internal', 'hint'])"
                            text="Hint"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['internal', 'label'])"
                            text="Label"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['internal', 'wrapper'])"
                            text="Wrapper"
                        />
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <h2
            class="dark:text-dark-500 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
        >
            Digging Deeper
        </h2>
        <ul role="list" class="mt-3 space-y-1">
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['configuration'])"
                    text="Configurations"
                />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['command'])"
                    text="Commands"
                />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['translation'])"
                    text="Translations"
                />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['without-livewire'])"
                    text="Without Livewire"
                    changed
                />
            </li>
            <li class="relative ml-4">
                <h2
                    class="dark:text-dark-500 mt-6 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
                >
                    Customization
                </h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['customization', 'concept'])"
                            text="Concept"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['customization', 'soft'])"
                            text="Soft Customization"
                            changed
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['customization', 'deep'])"
                            text="Deep Customization"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['customization', 'color'])"
                            text="Colors"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['customization', 'globals'])"
                            text="Globals"
                            changed
                        />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2
                    class="dark:text-dark-500 mt-6 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
                >
                    Helpers
                </h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['helpers', 'env-bar'])"
                            text="EnvBar"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['helpers', 'dark-theme'])"
                            text="Dark Theme"
                        />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['helpers', 'debug-mode'])"
                            text="Debug Mode"
                        />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2
                    class="dark:text-dark-500 mt-6 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
                >
                    Integrations
                </h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link
                            :href="route('documentation', ['integrations', 'alpine'])"
                            text="AlpineJS"
                        />
                    </li>
                </ul>
            </li>
            <li class="relative mt-5 ml-4">
                <x-layout.navigation.link
                    :href="route('documentation', ['contribution'])"
                    text="Contribution Guide"
                />
            </li>
        </ul>
    </li>
</ul>
