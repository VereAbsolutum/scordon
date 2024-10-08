@push('css')
<style>
    .slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide {
        min-width: 100%;
        /* Cada slide ocupa 100% da largura */
        flex-shrink: 0;
    }
</style>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Merriweather:wght@400&display=swap" rel="stylesheet">
<style>
    .font-montserrat {
        font-family: 'Montserrat', sans-serif;
    }

    .font-prose {
        font-family: 'Merriweather', serif;
    }
</style>
@endpush

<div style="margin-bottom:5rem; margin-left:-2rem">
    @include('../components/texts/headings/heading', [
    'subtitle' => "O que pensam sobre nós.",
    'align' => 'lg:text-left text-center'
    ])
</div>

<!-- Carousel Container -->
<div id="testimonial-carousel" class="relative overflow-hidden mt-5">
    <div class="swiper">
        <div class="swiper-wrapper">
            <!-- Testimonial 1 -->
            <div class="swiper-slide p-8 rounded-lg">
                <h3 class="text-center lg:text-left text-xl font-semibold text-gray-800 font-montserrat">João Silva</h3>
                <h4 class="text-center lg:text-left text-md text-gray-600 mb-4 font-montserrat">CEO, Imobiliária XYZ</h4>
                <p class="text-center lg:text-left text-2xl prose max-w-md mx-auto mb-6 text-gray-700 italic">
                    "A plataforma de gestão imobiliária facilitou nossa rotina diária. Os relatórios são claros e fáceis de acessar, e o suporte é excelente!"
                </p>
                <footer class="text-center lg:text-left">
                    <a href="#" class="text-accent underline hover:text-blue-600">Saiba mais</a>
                </footer>
            </div>

            <!-- Testimonial 2 -->
            <div class="swiper-slide p-8 rounded-lg">
                <h3 class="text-center lg:text-left text-xl font-semibold text-gray-800 font-montserrat">Maria Oliveira</h3>
                <h4 class="text-center lg:text-left text-md text-gray-600 mb-4 font-montserrat">Gerente de Vendas, ABC Imóveis</h4>
                <p class="text-center lg:text-left text-2xl prose max-w-md mx-auto mb-6 text-gray-700 italic">
                    "Acompanhar contratos e clientes nunca foi tão fácil. Recomendo para qualquer imobiliária que quer crescer com eficiência!"
                    "Acompanhar contratos e clientes nunca foi tão fácil. Recomendo para qualquer imobiliária que quer crescer com eficiência!"
                    "Acompanhar contratos e clientes nunca foi tão fácil. Recomendo para qualquer imobiliária que quer crescer com eficiência!"
                </p>
                <footer class="text-center lg:text-left">
                    <a href="#" class="text-accent underline hover:text-blue-600">Saiba mais</a>
                </footer>
            </div>

            <!-- Testimonial 3 -->
            <div class="swiper-slide p-8 rounded-lg">
                <h3 class="text-center lg:text-left text-xl font-semibold text-gray-800 font-montserrat">Carlos Ferreira</h3>
                <h4 class="text-center lg:text-left text-md text-gray-600 mb-4 font-montserrat">Consultor, Propriedades AL</h4>
                <p class="text-center lg:text-left text-2xl prose max-w-md mx-auto mb-6 text-gray-700 italic">
                    "Ferramenta incrível! Nossa equipe melhorou o relacionamento com clientes e as operações ficaram mais ágeis."
                </p>
                <footer class="text-center lg:text-left">
                    <a href="#" class="text-accent underline hover:text-blue-600">Saiba mais</a>
                </footer>
            </div>
        </div>

        <!-- Carousel Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>


@push('scripts')
<!-- Swiper -->
<script>
    const swiper = new Swiper('.swiper', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
@endpush