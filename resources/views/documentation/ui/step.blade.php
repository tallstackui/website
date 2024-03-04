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
    <x-section title="Concept" anchor="static-concept" disable-copy>
        <p>
            <u>Version 1.20.0</u> of TallStackUI introduces a new component: Step.
            Step actually has the same concept as "form with multiple steps",
            we preferred to adopt the name "Step" so that it would be a reduced form.
        </p>
    </x-section>
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
        <x-preview language="blade" :contents="$basic">
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
        <x-preview language="blade" :contents="$basic">
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
        <x-preview language="blade" :contents="$basic">
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
                                 description="Step Three"
                                 completed>
                    Step three... <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Alternative Styles">
        <x-preview language="blade" :contents="$basic">
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
                                  description="Step Three"
                                  completed>
                        Step three... <b>finished!</b>
                    </x-step.items>
                </x-step>
                <p class="text-lg font-medium text-pink-700 dark:text-dark-300">Panels</p>
                <x-step selected="1" helpers simple>
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
            </div>
        </x-preview>
    </x-section>
    <x-section title="Finish Slot">
        <x-preview language="blade" :contents="$basic">
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
                              description="Step Three"
                              completed>
                    Step three... <b>finished!</b>
                </x-step.items>
                <x-slot:finish>
                    TallStackUI 🚀
                </x-slot:finish>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$basic">
            <x-step selected="1"
                    helpers
                    x-on:change="alert(`Changed: ${$event.detail.step}`)"
                    x-on:finish="alert(`Finished: ${$event.detail.step}`)"
                    finish>
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
            <x-layout.footer-navigation :href="route('documentation.ui.step')" text="Step" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.tab')" text="Tab" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
