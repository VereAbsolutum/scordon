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

        <x-molecules.section-header
            title="Serviços"
            subtitle="Transformamos suas ideias em soluções digitais"
            subheader="Descubra como nossos serviços de desenvolvimento de software podem transformar seu negócio."
        />

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-12 p-5 rounded-lg mt-[5rem]">
            <div class="flex justify-center">
                <x-organisms.card :items="$items" :title="'Desenvolvimento de Software'" />
            </div>
            <div class="flex justify-center">
                <x-organisms.card :items="$items" :title="'Desenvolvimento de Software'" />
            </div>
            <div class="flex justify-center">
                <x-organisms.card :items="$items" :title="'Desenvolvimento de Software'" />
            </div>
            <div class="flex justify-center">
                <x-organisms.card :items="$items" :title="'Desenvolvimento de Software'" />
            </div>
        </div>
    </x-tw.layouts.container>
</section>