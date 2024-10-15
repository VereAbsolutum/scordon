@props(['slides' => [], 'uniqueId', 'title', 'subtitle', 'buttonText', 'testimonials'])

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

<div class="flex flex-col items-center h-full gap-[50px] lg:gap-[100px] lg:flex-row lg:items-end">
    <!-- Testimonial image -->
    <div class="p-4 lg:w-1/2" style="max-width: 512px;">
        <img src="{{ $testimonials['image'] }}" alt="Pessoa no Computador" class="h-auto rounded-lg object-cover ">
    </div>

    <!-- Testimonial Slider -->
    <div class="flex flex-col justify-end lg:w-1/2 relative" style="max-width: 730px;">
        <div >

            <h1  class="lg:text-left text-center">
                {{ $title }}
            </h1>
            <h2 class="lg:text-left text-center">
                {{ $subtitle }}
            </h2>

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
                            <a href="{{ $slide['link'] }}" class="text-accent underline hover:text-blue-600">{{ $buttonText }}</a>
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
        </div>
    </div>
</div>

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
