@php
$items = [
'Evolução e manutenção de software',
'Atualização de arquitetura de aplicação',
'Melhoria de performance de software',
'Profissionais de TI para complementar sua equipe'
];
@endphp

<section id="servicos" class="servicos py-10 mt-10">
    <x-tw.layouts.container>
        <x-tw.text.h1 class="text-center">
            Serviços
        </x-tw.text.h1>
        <x-tw.text.h2 class="text-center">
            Transformamos suas ideias em soluções digitais
        </x-tw.text.h2>

        <p class="text-center mb-4 mx-auto max-w-[550px]">
            Descubra como nossos serviços de desenvolvimento de software podem
            transformar seu negócio.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-12 p-5 rounded-lg mt-[5rem]">
            <div class="flex justify-center">
                <x-tw.display.card :items="$items" :title="'Desenvolvimento de Software'" />
            </div>
            <div class="flex justify-center">
                <x-tw.display.card :items="$items" :title="'Desenvolvimento de Software'" />
            </div>
            <div class="flex justify-center">
                <x-tw.display.card :items="$items" :title="'Desenvolvimento de Software'" />
            </div>
            <div class="flex justify-center">
                <x-tw.display.card :items="$items" :title="'Desenvolvimento de Software'" />
            </div>
        </div>
    </x-tw.layouts.container>
</section>