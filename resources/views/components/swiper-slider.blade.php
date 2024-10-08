<div id="{{ $id }}" class="swiper-container">
    <div class="swiper-wrapper">
        {{ $slot }}
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('#{{ $id }}', {
            loop: true,
            autoHeight: {{ $autoHeight }}
            pagination: {
                el: '#{{ $id }} .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#{{ $id }} .swiper-button-next',
                prevEl: '#{{ $id }} .swiper-button-prev',
            },
        });
    });
</script>
