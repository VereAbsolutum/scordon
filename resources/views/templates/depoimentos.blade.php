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
                'text' => '“Vocês (time da DB1) foram - e são - o fator crítico de sucesso desse projeto. Vocês conseguiram pegar toda essa essência do nosso desejo, do nosso sonho, e transformar em um produto!”',
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
    <x-organisms.testimonial
        :slides="$slides"
        uniqueId="1"
        title="Nas palavras de nossos clientes."
        subtitle="Transformamos suas ideias em soluções digitais."
        buttonText="Saiba mais"
        :testimonials="$testimonials"
    />
</section>