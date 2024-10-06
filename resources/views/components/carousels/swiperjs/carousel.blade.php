@push('css')
<style>
    .swiper-container {
        width: 100%;
        height: 100px; /* Altura do seu swiper */
    }

    .swiper-slide {
        width: auto; /* Para que os slides possam ser ajustados */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        background: #007aff; /* Cor de fundo para visualização */
        color: white; /* Cor do texto */
    }
</style>
@endpush

<div class="swiper-container">
    <div class="swiper-wrapper justify-center">
        <!-- Slide 1 -->
        <div class="swiper-slide bg-blue-500 flex items-center justify-center h-48">
            <h2 class="text-2xl font-bold text-white">Promoções Especiais de Feriado!</h2>
        </div>
        <!-- Slide 2 -->
        <div class="swiper-slide bg-green-500 flex items-center justify-center h-48">
            <h2 class="text-2xl font-bold text-white">Índices Econômicos Atualizados!</h2>
        </div>
        <!-- Slide 3 -->
        <div class="swiper-slide bg-red-500 flex items-center justify-center h-48">
            <h2 class="text-2xl font-bold text-white">Descontos Exclusivos!</h2>
        </div>
    </div>
    <!-- Adicione botões de navegação, se necessário -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Adicione a paginação, se necessário -->
    <div class="swiper-pagination"></div>
</div>

@push('scripts')
<script>
    const swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 30, // Espaçamento entre os slides
            loop: true, // Habilitar loop infinito
            autoplay: {
                delay: 0, // Sem atraso para um movimento constante
                disableOnInteraction: false, // Não desabilitar autoplay após interação
            },
            speed: 10000, // Velocidade da rolagem
            on: {
                init: function () {
                    this.autoplay.stop(); // Para o autoplay padrão do swiper
                    this.autoplay.start(); // Inicia o autoplay personalizado
                },
            },
        });
</script>
@endpush