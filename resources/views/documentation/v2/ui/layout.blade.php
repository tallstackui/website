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
            A versão 2.x do TallStackUI introduz um novo componente de layout de painel. Devido ao formato da documentação do TallStackUI, não haverá exemplos de código do layout a ser exibido, mas no final da documentação nesta página há algumas fotos anexadas do layout montado seguindo as diretrizes naquela página.
        </p>
    </x-section>
    <x-section title="Layout Example" disable-copy>
        <div class="space-y-4">
            <p>
                Aqui está um exemplo completo do componente de layout. Em seguida iremos explicar diversas coisas sobre o layout.
            </p>
            <x-code language="blade" :contents="$layout" disable-copy />
            <p>
                Antes de continuar, você deve ter notado o seguinte:
            </p>
            <ul class="list-inside list-decimal">
                <li>O componente de layout tem diversos slots, cada um deles é objetivado a posicionar coisas em partes específicas do layout</li>
                <li>O componente de layout tem outros componentes, como o <x-block>layout.header</x-block></li>
                <li>Neste exemplo, estamos usando outros componentes da TallStackUI, como o <x-block>dropdown</x-block></li>
            </ul>
        </div>
    </x-section>
    <x-separator text="Layout Slots" />
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
                Esse slot serve para posicionar o componente <x-block>side-bar</x-block>:
            </p>
            <x-code language="blade" :contents="$menu" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Top" disable-copy>
        <div class="space-y-4">
            <p>
                Embora não tenha sido utilizado no exemplo acima, esse slot está posicionado acima do slot <x-block>menu</x-block> e
                foi criado para receber qualquer conteúdo adicionar nesta posição. Internamente ele está aplicado desta forma:
            </p>
            <x-code language="blade" :contents="$top" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot: Footer" disable-copy>
        <div class="space-y-4">
            <p>
                Simiar ao <x-block>top</x-block>, porém posicionado na extremidade inferior do layout:
            </p>
            <x-code language="blade" :contents="$footer" disable-copy />
        </div>
    </x-section>
    <x-separator text="Children Components" />
    <x-section title="Layout Header" disable-copy>
        <div class="space-y-4">
            <p>
                O componente <x-block>layout.header</x-block> é utilizado para agrupar três slots específicos que variam as posições de conteúdos:
            </p>
            <x-code language="blade" :contents="$headerSlots" disable-copy />
            <ul class="list-inside list-decimal">
                <li><x-block>left</x-block>: adiciona conteúdos a esquerda da barra horizontal</li>
                <li><x-block>middle</x-block>: adiciona conteúdos ao meio da barra horizontal</li>
                <li><x-block>right</x-block>: adiciona conteúdos a direita da barra horizontal</li>
            </ul>
            <p>
                Além disso, você pode controlar a exibição de um botão que serve para abrir o <x-block>side-bar</x-block>
                quando em dispositivos móveis. Você entenderá isso ao continuar lendo a documentação abaixo.
            </p>
        </div>
    </x-section>
    <x-section title="Side Bar" disable-copy>
        <div class="space-y-4">
            <p>
                O <x-block>side-bar</x-block> é o componente que cria a estrutura para receber o menu de opções.
                Ela é única entre as versões desktop e mobile, o que quer dizer que o mesmo menu de opções que
                você vê no desktop será o mesmo que você verá em versão mobile.
            </p>
            <x-code language="blade" :contents="$sidebar" disable-copy />
            <p>
                Como o <x-block>side-bar</x-block> é aplicado tanto para desktop como para mobile, se você desejar por alguma razão,
                não utilizar menu para dispositivos móveis, você pode ocultar um botão que é exibido no <x-block>layout.header</x-block>
                para que quando clicado ele acione o <x-block>side-bar</x-block> em mobile:
            </p>
            <x-code language="blade" :contents="$headerWithoutButton" disable-copy />
            <p>
                Se você ocultou o botão padrão de abertura do <x-block>side-bar</x-block> em mobile, mas quer utilizar um outro botão
                para controlar a abertura do <x-block>side-bar</x-block> em mobile basta disparar eventos do AlpineJS:
            </p>
            <x-code language="blade" :contents="$javascript" disable-copy />
            <p>
                O <x-block>side-bar</x-block> possui poucas configurações disponíveis, mas todas são úteis para um propósito:
            </p>
            <ul class="list-inside list-decimal">
                <li>Slot <x-block>brand</x-block>: um slot especial para adição de uma imagem/texto acima do menu de opções</li>
                <li>Atributo <x-block>smart</x-block>: ativa o comportamento de detecção de rotas para ativar o efeito de rotas "ativas"</li>
                <li>Atributo <x-block>navigate</x-block>: ativa <x-block>wire:navigate</x-block> nas rotas</li>
                <li>Atributo <x-block>navigate-hover</x-block>: ativa <x-block>wire:navigate.hover</x-block> nas rotas</li>
            </ul>
            <p>
                Um exemplo completo seria assim:
            </p>
            <x-code language="blade" :contents="$sidebarOptions" disable-copy />
        </div>
    </x-section>
    <x-section title="Side Bar Item" disable-copy>
        <div class="space-y-4">
            <p>
                O <x-block>side-bar.item</x-block> é o componente utilizado para adicionar opções clicáveis no <x-block>side-bar</x-block>. Ele
                pode ser utilizado para adicionar um item indivual ou criar um grupo de itens, como um sub-nível, de forma extremamente fácil.
            </p>
            <x-code language="blade" :contents="$item" disable-copy />
            <p>
                Se por acaso você não desejar utilizar o <x-block>smart</x-block> do componente <x-block>side-bar</x-block> para ativar a detectação automática de rotas,
                você pode controlar o comportamento de detectação de rotas manualmente, através dos atributos booleanos: <x-block>opened</x-block> - para o grupo de itens,
                e <x-block>current</x-block> para o item em si:
            </p>
            <x-code language="blade" :contents="$attributes" disable-copy />
            <p>
                Estes atributos são booleanos, o que quer dizer que você pode passar condições para eles:
            </p>
            <x-code language="blade" :contents="$match" disable-copy />
        </div>
    </x-section>
    <x-section title="Side Bar Separator" disable-copy>
        <div class="space-y-4">
            <p>
                O <x-block>side-bar.separator</x-block> é um componente utilizado para criar separações decorada entre os itens:
            </p>
            <x-code language="blade" :contents="$separator" disable-copy />
            <p>
                Existem três opções disponíveis, cada uma com um estílo específico:
            </p>
            <x-code language="blade" :contents="$styles" disable-copy />
        </div>
    </x-section>
    <x-section title="Personalization" disable-copy>
        <div class="space-y-4">
            <p>
                Por último, é importante ter que mente que todos os componentes acima mencionados
                estão disponíveis para serem totalmente personalizados através da personalização soft ou personalização deep.
            </p>
        </div>
    </x-section>
</x-layout>
