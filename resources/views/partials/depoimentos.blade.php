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

<section id="faq" class="faq">
    <div class="flex flex-col items-center h-full gap-[50px] lg:gap-[100px] lg:flex-row lg:items-end">

        <!-- Testimonial image -->
        <div class="p-4 lg:w-1/2" style="max-width: 512px;">
            <img src="{{ $testimonials['image'] }}" alt="Pessoa no Computador" class="h-auto rounded-lg object-cover ">
        </div>

        <!-- Testimonial Slider -->
        <div class="flex flex-col justify-end lg:w-1/2" style="max-width: 730px;">
            <div class="">

                <!-- Header -->
                <x-tw.text-titles.heading1 class="lg:text-left text-center">
                    Serviços
                </x-tw.text-titles.heading1>
                <x-tw.text-titles.heading2 class="ltext-left text-center">
                    Transformamos suas ideias em soluções digitais
                </x-tw.text-titles.heading2>

                <x-tw.data-display.carousel-swiperjs>

                    <!-- Slides -->
                    @foreach($testimonials['slides'] as $slide)
                    <x-tw.data-display.carousel-swiperjs-item>
                        <h3 class="text-center lg:text-left text-xl font-semibold text-gray-800 font-montserrat">{{ $slide['name'] }}</h3>
                        <h4 class="text-center lg:text-left text-md text-gray-600 mb-4 font-montserrat">{{ $slide['company'] }}</h4>
                        <p class="text-center lg:text-left text-2xl prose max-w-md mx-auto mb-6 text-gray-700 italic">
                            "{{ $slide['testimonial'] }}"
                        </p>
                        <footer class="text-center lg:text-left">
                            <a href="{{ $slide['link'] }}" class="text-accent underline hover:text-blue-600">Saiba mais</a>
                        </footer>
                    </x-tw.data-display.carousel-swiperjs-item>
                    @endforeach

                </x-tw.data-display.carousel-swiperjs>
            </div>
        </div>
    </div>
</section>