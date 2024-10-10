@push('css')
<style>
    .faq {
        padding-top: 5rem;
    }

    .font-montserrat {
        font-family: 'Montserrat', sans-serif;
    }

    .font-prose {
        font-family: 'Merriweather', serif;
    }
</style>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Merriweather:wght@400&display=swap" rel="stylesheet">
@endpush

@php
$slides = [
            [
                'title' => 'Cliente 1',
                'subtitle' => 'Profissão ou Cargo',
                'text' => 'Este produto mudou minha vida! Recomendo a todos.',
                'link' => '#',
            ],
            [
                'title' => 'Cliente 2',
                'subtitle' => 'Profissão ou Cargo',
                'text' => 'Um atendimento excelente e um produto de qualidade.',
                'link' => '#',
            ],
            [
                'title' => 'Cliente 3',
                'subtitle' => 'Profissão ou Cargo',
                'text' => 'Fiquei extremamente satisfeito com o serviço prestado.',
                'link' => '#',
            ],
            [
                'title' => 'Cliente 4',
                'subtitle' => 'Profissão ou Cargo',
                'text' => 'Uma experiência incrível, definitivamente voltarei a usar!',
                'link' => '#',
            ],
            [
                'title' => 'Cliente 5',
                'subtitle' => 'Profissão ou Cargo',
                'text' => 'Recomendo a todos os meus amigos e familiares.',
                'link' => '#',
            ],
        ];
@endphp

<section id="faq" class="faq">
    <div class="flex flex-col items-center h-full gap-[50px] lg:gap-[100px] lg:flex-row lg:items-end">

        <!-- Testimonial image -->
        <div class="p-4 lg:w-1/2" style="max-width: 512px;">
            <img src="{{ $testimonials['image'] }}" alt="Pessoa no Computador" class="h-auto rounded-lg object-cover ">
        </div>

        <!-- Testimonial Slider -->
        <div class="flex flex-col justify-end lg:w-1/2" style="max-width: 730px;">
            <div >
                <!-- Header -->
                <x-tw.typo.heading1 class="lg:text-left text-center">
                    Serviços
                </x-tw.typo.heading1>
                <x-tw.typo.heading2 class="lg:text-left text-center">
                    Transformamos suas ideias em soluções digitais
                </x-tw.typo.heading2>

                <x-tw.data-display.carousel-swiperjs :slides="$slides" />
            </div>
        </div>
    </div>
</section>