<div class="fixed bottom-4 right-4 px-4 py-2">
    <x-button.circle icon="chevron-up"
                     color="pink"
                     x-data="{ visible: false }"
                     x-on:scroll.window="visible = window.scrollY > 100"
                     x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                     x-show="visible"/>
</div>
