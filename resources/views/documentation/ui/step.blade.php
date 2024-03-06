<x-layout>
    <x-slot:title>
        Step
        <x-slot:version>
            1.20
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Step components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="step" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-step selected="1" navigate>
                <x-step.items step="1">
                    Step one...
                </x-step.items>
                <x-step.items step="2">
                    Step two...
                </x-step.items>
                <x-step.items step="3">
                    Step three... <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Title & Description">
        <x-preview language="blade" :contents="$titleDescription">
            <x-step selected="1" navigate>
                <x-step.items step="1"
                                 title="Starting"
                                 description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2"
                                 title="Advancing"
                                 description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items step="3"
                                 title="Finishing"
                                 description="Step Three">
                    Step three... <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Final Step" description="An option to mark the final step and not move forward.">
        <x-preview language="blade" :contents="$finalStep">
            <x-step selected="1" navigate>
                <x-step.items step="1"
                                 title="Starting"
                                 description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2"
                                 title="Advancing"
                                 description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items step="3"
                                 title="Finishing"
                                 description="Step Three"
                                 completed>
                    Step three... <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Helpers" description="An option to disable navigation with clicks and use buttons.">
        <x-preview language="blade" :contents="$helpers">
            <x-step selected="1" helpers>
                <x-step.items step="1"
                                 title="Starting"
                                 description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2"
                                 title="Advancing"
                                 description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items step="3"
                                 title="Finishing"
                                 description="Step Three">
                    Step three... <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Allow Navigation Previous" description="An option to enable the navigation to the previous.">
        <x-preview language="blade" :contents="$navigatePrevious">
            <x-step selected="1" helpers previous>
                <x-step.items step="1"
                                 title="Starting"
                                 description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2"
                                 title="Advancing"
                                 description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items step="3"
                                 title="Finishing"
                                 description="Step Three">
                    Step three... <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Alternative Styles" description="An option to use other two different styles, totaling 3 styles.">
        <x-preview language="blade" :contents="$styles">
            <div class="space-y-2">
                <p class="text-lg font-medium text-pink-700 dark:text-dark-300">Circles</p>
                <x-step selected="1" helpers circles>
                    <x-step.items step="1"
                                  title="Starting"
                                  description="Step One">
                        Step one...
                    </x-step.items>
                    <x-step.items step="2"
                                  title="Advancing"
                                  description="Step Two">
                        Step two...
                    </x-step.items>
                    <x-step.items step="3"
                                  title="Finishing"
                                  description="Step Three">
                        Step three... <b>finished!</b>
                    </x-step.items>
                </x-step>
                <p class="text-lg font-medium text-pink-700 dark:text-dark-300">Panels</p>
                <x-step selected="1" helpers panels>
                    <x-step.items step="1"
                                  title="Starting"
                                  description="Step One">
                        Step one...
                    </x-step.items>
                    <x-step.items step="2"
                                  title="Advancing"
                                  description="Step Two">
                        Step two...
                    </x-step.items>
                    <x-step.items step="3"
                                  title="Finishing"
                                  description="Step Three">
                        Step three... <b>finished!</b>
                    </x-step.items>
                </x-step>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Finish Slot">
        <x-preview language="blade" :contents="$slot">
            <x-step selected="1" helpers>
                <x-step.items step="1"
                              title="Starting"
                              description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2"
                              title="Advancing"
                              description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items step="3"
                              title="Finishing"
                              description="Step Three">
                    Step three... <b>finished!</b>
                </x-step.items>
                <x-slot:finish>
                    TallStackUI 🚀
                </x-slot:finish>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Wireable">
        <x-preview language="blade" :contents="$wireable">
            <livewire:documentation.ui.step />
        </x-preview>
    </x-section>
    <x-section title="Live Wireable">
        <x-preview language="blade" :contents="$liveWireable">
            <livewire:documentation.ui.step live />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-step selected="1"
                    helpers
                    x-on:change="alert(`Changed: ${$event.detail.step}`)"
                    x-on:finish="alert(`Finished: ${$event.detail.step}`)">
                <x-step.items step="1"
                              title="Starting"
                              description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2"
                              title="Advancing"
                              description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items step="3"
                              title="Finishing"
                              description="Step Three"
                              completed>
                    Step three... <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.stats')" text="Stats" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.tab')" text="Tab" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
