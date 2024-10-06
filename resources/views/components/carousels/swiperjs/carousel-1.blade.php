@push('css')
<style>
    .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%; /* Cada slide ocupa 100% da largura */
      flex-shrink: 0;
    }
  </style>

@endpush

<div class="container mx-auto px-6">
    <div class="text-center mb-10">
        <h2 class="text-4xl font-bold text-accent">Depoimentos</h2>
    </div>

    <!-- Carousel Container -->
    <div id="testimonial-carousel" class="relative overflow-hidden">
        <!-- Slider -->
        <div class="slider">
            <!-- Testimonial 1 -->
            <div class="slide p-8 bg-white rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">João Silva</h3>
                <h4 class="text-md text-gray-600 mb-4">CEO, Imobiliária XYZ</h4>
                <p class="prose max-w-md mx-auto mb-6 text-gray-700">
                    A plataforma de gestão imobiliária facilitou nossa rotina diária. Os relatórios são claros e
                    fáceis de acessar, e o suporte é excelente!
                </p>
                <footer>
                    <a href="#" class="btn btn-accent">Saiba mais</a>
                </footer>
            </div>

            <!-- Testimonial 2 -->
            <div class="slide p-8 bg-white rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Maria Oliveira</h3>
                <h4 class="text-md text-gray-600 mb-4">Gerente de Vendas, ABC Imóveis</h4>
                <p class="prose max-w-md mx-auto mb-6 text-gray-700">
                    Acompanhar contratos e clientes nunca foi tão fácil. Recomendo para qualquer imobiliária que quer
                    crescer com eficiência!
                </p>
                <footer>
                    <a href="#" class="btn btn-accent">Saiba mais</a>
                </footer>
            </div>

            <!-- Testimonial 3 -->
            <div class="slide p-8 bg-white rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Carlos Ferreira</h3>
                <h4 class="text-md text-gray-600 mb-4">Consultor, Propriedades AL</h4>
                <p class="prose max-w-md mx-auto mb-6 text-gray-700">
                    Ferramenta incrível! Nossa equipe melhorou o relacionamento com clientes e as operações ficaram
                    mais ágeis.
                </p>
                <footer>
                    <a href="#" class="btn btn-accent">Saiba mais</a>
                </footer>
            </div>
        </div>
    </div>

    <!-- Carousel Controls -->
    <div class="flex justify-center mt-8">
        <button id="prev-slide" class="btn btn-outline">Anterior</button>
        <button id="next-slide" class="btn btn-outline ml-4">Próximo</button>
    </div>
</div>

@push('scripts')
<script>

document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.slider');
    const slides = slider.children;
    let currentIndex = 0;

    function showSlide(index) {
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    document.getElementById('next-slide').addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

    document.getElementById('prev-slide').addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });
});

</script>

@endpush