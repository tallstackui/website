<x-layout>
    <x-slot:title>
        Upgrade Guide
    </x-slot:title>
    <x-v2-beta-warning />
    <blockquote class="p-4 my-4 border-s-4 border-gray-500 bg-gray-200/50 dark:border-gray-400 dark:bg-gray-800">
        <p class="text-md italic font-medium leading-relaxed text-gray-900 dark:text-white">
            This page transcribes a conversation between the creator of the TallStackUI - <a href="https://github.com/devajmeireles" target="_blank" class="underline">AJ</a>, and you.
        </p>
    </blockquote>
    <x-section class="space-y-4" title="Before Start" disable-copy>
        <div class="space-y-4">
            <p>
                Antes de começar a atualizar a sua aplicação para a versão 2.x da TallStackUI, eu, <a href="https://github.com/devajmeireles" target="_blank" class="underline">AJ</a>,
                gostaria de te agradecer por utilizar a TallStackUI. Eu me sinto muito feliz por entender que ao resolver um problema meu, eu pude ajudar você também, porque a
                TallStackUI foi conceituada para resolver um problema meu em relação a não confiar em outras bibliotecas de componentes que são abandonadas ao passar do tempo.
            </p>
            <p>
                Além disso, gostaria de te pedir desculpas pelo atraso! Sim, eu considero que foi um pequeno atraso. Meu objetivo era lançar a versão 2.x na mesma data
                de lançamento da versão 1.x, em 28 de Novembro. Infelizmente não pude cumprir esse prazo por diversos problemas que tive em meu escritório.
            </p>
        </div>
    </x-section>
    <x-section class="space-y-4" title="Whats News" disable-copy>
        <div class="space-y-4">
            <p>
                A versão 2.x da TallStackUI traz diversas coisas que eu considero que são importantes. Você pode pensar em: componentes, componentes, e componentes, mas não
                é apenas de novos componentes que se mantém uma biblioteca como a TallStackUI. A versão 2.x traz novos componentes, melhorias dos componentes atuais e centenas
                pequenas correções de bugs.
            </p>
            <p>
                Aqui está uma lista resumida do que você pode esperar da versão 2.x 👇
            </p>
            <div class="pl-4 space-y-4">
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">👀 Internamente:</h2>
                    <ul>
                        <li>- Estrutura interna redesenhada para melhor manutenção a longo prazo.</li>
                        <li>- Documentações internas em trechos de lógicas importantes.</li>
                        <li>- Novos conceitos internos para melhorar a estrutura de arquivos Blade.</li>
                        <li class="font-bold">- Aumento de performance para renderização de diversos componentes em até 10%</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">🥳 Novos Componentes e Helpers:</h2>
                    <ul>
                        <li>- Carousel</li>
                        <li>- Environment</li>
                        <li>- Layout</li>
                        <li>- Signature</li>
                        <li class="font-bold">- Novo Helper: EnvBar</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">🌐 Outros:</h2>
                    <ul>
                        <li>- Novo conceito de Soft Personalization Scoped.</li>
                        <li>- Novo conceito para personalização de cores.</li>
                        <li>- Novo conceito de itens customizados.</li>
                        <li>- Componente <x-block>Card</x-block>: adição de cores, suporte a imagem e suporte a ser minimizável.</li>
                        <li>- Componente <x-block>Dropdown</x-block>: adição de suporte a sub-dropdown.</li>
                        <li>- Componente <x-block>Floating</x-block>: possibilidade de personalizar a classe do Floating pelo componente que o implementa.</li>
                        <li>- Componente <x-block>Form Color</x-block>: adição de opção clearable.</li>
                        <li>- Componente <x-block>Form Input</x-block>: adição de opção clearable.</li>
                        <li>- Componente <x-block>Form Input</x-block>: possibilidade de definição de <x-block>invalidate</x-block> globalmente.</li>
                        <li>- Componente <x-block>Form Select Styled</x-block>: adição de lazy loading.</li>
                        <li>- Componente <x-block>Form Select Styled</x-block>: adição de agrupação de resultados.</li>
                        <li>- Componente <x-block>Form Select Styled</x-block>: não requer mais o uso <x-block>select</x-block>.</li>
                        <li>- Componente <x-block>Form Password</x-block>: possibilidade de alterar o algoritmo de geração de senha.</li>
                        <li>- Componente <x-block>Form Number</x-block>: possibilidade de aumentar/diminuir por atributo <x-block>step</x-block>.</li>
                        <li>- Componente <x-block>Form Upload</x-block>: possibilidade de validação ANTES do upload.</li>
                        <li>- Componente <x-block>Form Upload</x-block>: adição de possibilidade de controlar o fechamento do Floating após o upload.</li>
                        <li>- Componente <x-block>Rating</x-block>: possibilidade de usar qualquer ícone.</li>
                        <li>- Componente <x-block>Slide</x-block>: possibilidade de abertura via novas posições: top e bottom.</li>
                        <li>- Componente <x-block>Stats</x-block>: adição de suporte a wire:click.</li>
                        <li>- Helper <x-block>darkTheme</x-block>: melhorias diversas - atributos como objeto.</li>
                        <li>- Helper <x-block>Debug Mode</x-block>: necessidade de ignorar componentes pelo nome da classe ao invés de string.</li>
                        <li>- Novo namespace para Toast, Dialog e Banner: <x-block>TallStackUi\Foundation\Interactions</x-block>.</li>
                    </ul>
                </div>
            </div>
            <x-warning>
                Com excessão da seção "Internamente", todos os detalhes estão descritos nas respectivas páginas de cada componente.
            </x-warning>
        </div>
    </x-section>
    <x-section class="space-y-4" title="How to Upgrade" disable-copy>
        <p>
            Agora que eu listei tudo o que fiz nessa nova versão até agora. <b>Vamos falar sobre como atualizar a sua aplicação da versão 1.x a nova versão, 2.x</b>
            Em primeiro lugar, é importante mencionar que o <b>quão trabalhoso será atualizar para a versão 2.x dependerá de como está a sua aplicação.</b>
            Eu atualizei dois meus SaaS apenas trocando a referência de versão no <x-block>composer.json</x-block>
        </p>
        <div class="pl-4 space-y-2">
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">1. Verifique as Chaves da Soft Personalization:</h2>
                <p>
                    Antes de iniciar o processo de atualização verifique se o nome das chaves de Soft Personalization continuam as mesmas. Posso ter renomeado alguma
                    delas para uma melhor organização interna em relação a lógica dos nomes. <b>Se você não fez/faz Soft Personalization, então basta pular essa etapa!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">2. Refaça a Deep Personalization:</h2>
                <p>
                    Embora eu saiba que isso é trabalhoso, se você publicou os arquivos Blade da TallStackUI ou extendeu as classes de componentes para alterar comportamentos específicos
                    - <u>como o esquema personalização de cores da versão 1.x</u>, <b>recomendamos que realize um backup dos seus arquivos</b>, republique os novos e ajuste os novos arquivos com os seus ajustes.
                    Isso é necessário porque como estamos falando de uma nova versão diversas mudanças internas foram feitas, então seus arquivos atuais estarão desatualizados.
                    <b>Se você não fez/faz Deep Personalization, então basta pular essa etapa!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">3. Salve Qualquer Soft Personalization Scoped:</h2>
                <p>
                    <b>O conceito de Soft Personalization Scoped mudou na versão 2.x</b>, e a mudança foi para melhor! Então salve todas as suas personalizações para aplicá-las
                    usando o novo conceito. Te explico tudo sobre isso na página da Soft Personalization. <b>Se você não fez Soft Personalization, então basta pular essa etapa!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">4. Componentes e Atributos Iguais:</h2>
                <p>
                    Já os componentes e seus atributos, não há mudança, são os mesmos. Neste aspectos, espero que você não tenha nenhum problema.
                    É por isso que se você utiliza a TallStackUI "de forma básica", então o processo de upgrade se torna extremamente fácil,
                    como em meus projetos pessoais.
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">5. Atualize o Composer:</h2>
                <p>
                    Ok! Se tudo estiver pronto. Então essa é a hora de atualizar sua aplicação para o beta da versão 2.x. Edite o seu arquivo <x-block>composer.json</x-block> e atualize a
                    versão da TallStackUI para <x-block>^2.0@beta</x-block>. Após isso, execute o comando: <x-block>rm -fr vendor/ && composer install</x-block>.
                    <b>Isso irá apagar a sua pasta vendor - por garantia de uma atualização correta - e instalará a nova versão da TallStackUI.</b>
                </p>
            </div>
        </div>
        <x-warning>
            Se você perceber qualquer incoerência com esse guia, <a class="underline" href="{{ route('issue') }}" target="_blank">por gentileza reporte como uma issue no repositório da TallStackUI.</a><br>
            Se você perceber qualquer má comportamento durante o beta, <a class="underline" href="{{ route('issue') }}" target="_blank">por gentileza reporte como uma issue no repositório da TallStackUI.</a>
        </x-warning>
    </x-section>
</x-layout>
