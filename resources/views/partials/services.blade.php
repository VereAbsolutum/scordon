<section id="servicos" class="servicos py-10 mt-10">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl text-center mb-4 mx-auto max-w-3xl">
            <span class="font-bold">
                Transformamos suas ideias em soluções digitais:
            </span>
            <span>
                Descubra como nossos serviços de desenvolvimento de software, CRM e gestão de documentos podem
                transformar seu negócio.
            </span>
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2  gap-6 mt-12 p-5 rounded-lg mt-[5rem]">
            <div class="flex justify-center">
                @include('../components/cards/card-no-image', [
                    'title' => 'Desenvolvimento de Software',
                    'servicos' => [
                        'Evolução e manutenção de software',
                        'Atualização de arquitetura de aplicação',
                        'Melhoria de performance de software',
                        'Profissionais de TI para complementar sua equipe',
                    ]
                ])
            </div>
            <div class="flex justify-center">
                @include('../components/cards/card-no-image', [
                    'title' => 'CdWeb',
                    'servicos' => [
                        'Oferece serviços em Internet e comunicação visual.',
                        'Baseia-se em um sólido planejamento e criatividade.',
                        'Trabalha na comunicação online, reforçando a identidade da marca.',
                        'Coloca a empresa em destaque no mundo digital.',
                    ]
                ])
            </div>
            <div class="flex justify-center">
                @include('../components/cards/card-no-image', [
                    'title' => 'CdAdm Gestão',
                    'servicos' => [
                        'Gestão de contratos de venda, locação, loteamento e temporada.',
                        'Emissão de recibos, repasses, boletos e cheques.',
                        'Geração de relatórios sob demanda, adaptáveis às necessidades específicas da sua equipe e projeto.',
                        'Ferramentas para monitorar e avaliar o desempenho da equipe, com métricas e indicadores de produtividade.',
                        'Gerenciamento eficaz da equipe, permitindo a alocação de tarefas e supervisão do progresso em tempo real.',
                    ]
                ])
            </div>
        </div>
    </div>
</section>