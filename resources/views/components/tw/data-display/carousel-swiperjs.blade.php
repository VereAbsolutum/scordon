<style>
    .swiper-navigation {
        display: flex;
        justify-content: center;
        /* Centraliza os botões */
        margin-top: 10px;
        /* Espaço entre o slider e os botões */
    }

    .swiper-navigation button {
        background-color: #007bff;
        /* Cor de fundo */
        color: white;
        /* Cor do texto */
        border: none;
        /* Remove bordas */
        padding: 10px 20px;
        /* Espaçamento interno */
        border-radius: 5px;
        /* Bordas arredondadas */
        cursor: pointer;
        /* Muda o cursor para pointer */
        margin: 0 5px;
        /* Espaço entre os botões */
    }

    .swiper-navigation button:hover {
        background-color: #0056b3;
        /* Cor ao passar o mouse */
    }
</style>
<div class="swiper">
    <div class="swiper-wrapper">

        {{ $slot }}

    </div>

    <!-- Carousel Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Navigation Buttons -->
<div class="swiper-navigation">
    <button class="swiper-button-prev">Anterior</button>
    <button class="swiper-button-next">Próximo</button>
</div>

@push('scripts')
<!-- Swiper -->
<script>
    const swiper = new Swiper('.swiper', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoHeight: true
    });
</script>
@endpush