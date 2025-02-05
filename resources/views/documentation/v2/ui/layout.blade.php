@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Layout
    </x-slot:title>
    <x-slot:description>
        Layout component.
    </x-slot:description>
{{--    <x-slot:personalization>--}}
{{--        <livewire:documentation.v1.personalization :$personalization component="layout" />--}}
{{--        <livewire:documentation.v1.personalization :$personalization component="layout.header" />--}}
{{--        <livewire:documentation.v1.personalization :$personalization component="side-bar" />--}}
{{--        <livewire:documentation.v1.personalization :$personalization component="side-bar.item" />--}}
{{--        <livewire:documentation.v1.personalization :$personalization component="side-bar.separator" />--}}
{{--    </x-slot:personalization>--}}
    <x-section title="Concept" disable-copy>
        <p>
            The version 2.x of the TallStackUI introduces a new dashboard layout component. Due to the format of
            the TallStackUI documentation, there will be no code examples of the layout to be displayed,
            but at the end of the documentation on this page there are some attached photos of the layout
            assembled following the guidelines on that page.
        </p>
    </x-section>
    <x-section title="Prepare Base Layout" disable-copy>
        <div class="space-y-4">
            <p>
                The first thing to do to use the layout component is to prepare the base layout of your application
                to receive the layout. Usually the base layout file of the application when authenticated is the
                file <x-block>resources/views/layouts/app.blade.php</x-block>. Edit the file with the following changes:
            </p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    Update the css classes of the <x-block>html</x-block> root adding:
                    <x-code language="blade" :contents="$html" />
                </li>
                <li>
                    Update the css classes of the <x-block>body</x-block> root adding:
                    <x-code language="blade" :contents="$body" />
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Layout Example" disable-copy>
        <div class="space-y-4">
            <p>
                Instead of displaying several different options - as we do with other pages in the documentation,
                for the layout component we will provide a complete useful example, after which you will be introduced
                to some of the available options. You should insert the example below inside the <x-block>body</x-block> tag of your layout file.
            </p>
            <x-code language="blade" :contents="$layout" disable-copy />
            <p>
                Before continuing, you may have noticed the following:
            </p>
            <ul class="list-inside list-decimal">
                <li>The layout component has several different slots, each targeting a specific position in the layout.</li>
                <li>The layout component has other components, such as <x-block>layout.header</x-block></li>
                <li>In this example we are using some other components, such as <x-block>dropdown</x-block></li>
            </ul>
        </div>
    </x-section>
    <x-separator text="Slots" />
    <x-section title="Slot: Header" disable-copy>
        <div class="space-y-4">
            <p>
                Esse slot serve para posicionar o componente <x-block>layout.header</x-block>:
            </p>
            <x-code language="blade" :contents="$header" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Menu" disable-copy>
        <div class="space-y-4">
            <p>
                Esse slot serve para posicionar o componente <x-block>side-bar</x-block> que deve ser utilizado para compor o menu de opções.
            </p>
            <x-code language="blade" :contents="$menu" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Top" disable-copy>
        <div class="space-y-4">
            <p>
                Embora não tenha sido utilizado no exemplo oferecido acima, esse slot está posicionado acima da aplicação do slot <x-block>menu</x-block> e
                foi criado para receber qualquer conteúdo adicionar nesta posição. Internamente ele está aplicado desta forma:
            </p>
            <x-code language="blade" :contents="$top" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Footer" disable-copy>
        <div class="space-y-4">
            <p>
                De igual modo ao <x-block>top</x-block> porém posicionado na extremidade do layout:
            </p>
            <x-code language="blade" :contents="$footer" disable-copy />
        </div>
    </x-section>
    <x-separator text="Components" />
    <x-section title="Layout Header" disable-copy>
        <div class="space-y-4">
            <p>
                O componente <x-block>layout.header</x-block> é utilizado para agrupar três slots específicos que variam as posições de conteúdos:
            </p>
            <x-code language="blade" :contents="$headerSlots" disable-copy />
            <ul class="list-inside list-decimal">
                <li><x-block>left</x-block>: adiciona conteúdos a esquerda da barra horizontal.</li>
                <li><x-block>middle</x-block>: adiciona conteúdos ao meio da barra horizontal.</li>
                <li><x-block>right</x-block>: adiciona conteúdos a direita da barra horizontal.</li>
            </ul>
            <p>
                Além disso, você pode controlar a exibição do botão que serve para abrir o menu quando em dispositivos móveis - explicamos sobre isso nas seções abaixo,
                através do componente <x-block>layout.header</x-block>
            </p>
            <x-code language="blade" :contents="$headerWithoutMobileButton" disable-copy />
        </div>
    </x-section>
    <x-section title="Side Bar" disable-copy>
        <div class="space-y-4">
            <p>
                O <x-block>side-bar</x-block> é o conjunto de três componentes: <x-block>side-bar</x-block>, <x-block>side-bar.item</x-block> e <x-block>side-bar.separator</x-block>.
                Embora possam ser utilizados de forma combinada, cada um deles serve para um próposito:
            </p>
            <ul class="list-inside list-decimal">
                <li><x-block>side-bar</x-block>: é a estrutura que compõe o menu de opções distribuido entre as versões desktop e mobile.</li>
                <li><x-block>side-bar.item</x-block>: é o componente utilizado para adicionar itens no menu.</li>
                <li><x-block>side-bar.separator</x-block>: é um elemento de separação de itens.</li>
            </ul>
            <p>
                Como explicado acima, o componente <x-block>layout.header</x-block> pode controlar a exibição do botão que serve para abrir o menu
                quando em mobile. Isso quer dizer que quando você optar por não exibir o botão do menu em dispositivo mobile, não haverá menu exibido
                quando em dispositivo mobile.
            </p>
            <p>
                O <x-block>side-bar</x-block> possui ao todo três atributos e um slot disponível para serem utilizados:
            </p>
            <ul class="list-inside list-decimal">
                <li>
                    Slot <x-block>brand</x-block>: serve para exibir um texto, imagem ou qualquer coisa posicionado logo acima do menu:
                    <x-code language="blade" :contents="$brand" disable-copy />
                </li>
                <li>
                    <x-block>side-bar.item</x-block>: é o componente utilizado para adicionar itens no menu:
                    <x-code language="blade" :contents="$item" disable-copy />
                    É possível agrupar itens de uma forma muito fácil:
                    <x-code language="blade" :contents="$grouped" disable-copy />
                </li>
                <li>
                    <x-block>side-bar.separator</x-block>: é um elemento de separação de itens.
                    <x-code language="blade" :contents="$separator" disable-copy />
                    Existem três estilos diferentes:
                    <x-code language="blade" :contents="$separatorStyles" disable-copy />
                </li>
            </ul>
            <p>
                Se você utilizou o exemplo oferecido acima, você deve ter notado que ao navegar entre as páginas não há estado "ativo" para a página
                que você está. O componente <x-block>side-bar</x-block> possui um atributo que quando utilizado irá ativar o estado ativo automaticamente
                baseado na rota atual em que você está:
            </p>
        </div>
    </x-section>
</x-layout>
