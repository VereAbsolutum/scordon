@props(['slides' => [], 'uniqueId'])

@push('css')
<style>
    .swiper-navigation {
        margin-top: 10px; 
        position: relative; 
        z-index: 10; 
    }

    .swiper-navigation button {
        background-color: #007bff;
        color: white; 
        border: none; 
        padding: 10px 20px; 
        border-radius: 5px;
        cursor: pointer; 
        margin: 0 5px; 
        position: relative; 
        z-index: 1; 
    }

    .swiper-navigation button:hover {
        background-color: #0056b3; 
    }
</style>
@endpush

<div id="swiper-{{ $uniqueId }}" class="swiper">
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($slides as $slide)
        <div {{ $attributes->merge(['class' => 'swiper-slide p-8 rounded-lg']) }}>
            <h3 class="text-center lg:text-left text-xl font-semibold text-gray-800 font-montserrat">{{ $slide['title'] }}</h3>
            <h4 class="text-center lg:text-left text-md text-gray-600 mb-4 font-montserrat">{{ $slide['subtitle'] }}</h4>
            <p class="text-center lg:text-left text-2xl prose max-w-md mx-auto mb-6 text-gray-700 italic">
                "{{ $slide['text'] }}"
            </p>
            <footer class="text-center lg:text-left">
                <a href="{{ $slide['link'] }}" class="text-accent underline hover:text-blue-600">Saiba mais</a>
            </footer>
        </div>
        @endforeach
    </div>
</div>

<!-- Carousel Navigation -->
<nav class="swiper-navigation">
    <button class="swiper-prev">Anterior</button>
    <button class="swiper-next">Próximo</button>
</nav>

@push('scripts')
<!-- Swiper -->
<script>
    const swiper = new Swiper('#swiper-{{ $uniqueId }}', {
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
        autoHeight: true
    });
</script>
@endpush
