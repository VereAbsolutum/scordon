@props(['slides' => [], 'uniqueId', 'title', 'subtitle', 'buttonText', 'testimonials'])

@push('css')
<style>
    .swiper-navigation {
        margin-top: 10px;
        position: relative;
        z-index: 10;
    }
</style>
@endpush

<div class="flex flex-col items-center h-full gap-[50px] lg:gap-[100px] lg:flex-row lg:items-end">
    <!-- Testimonial image -->
    <div class="p-4 lg:w-1/2" style="max-width: 512px;">
        <img src="{{ $testimonials['image'] }}" alt="Pessoa no Computador" class="h-auto rounded-lg object-cover ">
    </div>

    <!-- Testimonial Slider -->
    <div class="flex flex-col justify-end lg:w-1/2  relative lg:mx-0 container mx-auto px-4" style="max-width: 730px;">
        <div class="">

            <h1  class="lg:text-left text-heading3 px-4 font-bold mb-20">
                {{ $title }}
            </h1>

            <div id="swiper-{{ $uniqueId }}" class="swiper ">
                <div class="swiper-wrapper container mx-auto px-4">
                    <!-- Slides -->
                    @foreach($slides as $slide)
                    <div {{ $attributes->merge(['class' => 'swiper-slide  rounded-lg']) }}>
                        <x-organisms.card-testimonial
                            :title="$slide['title']"
                            :subtitle="$slide['subtitle']"
                            :testimonial="$slide['text']"
                            :buttonText="$buttonText"
                        />
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Carousel Navigation -->
            <nav class="swiper-navigation px-4">
                <x-atoms.button-nav class="swiper-prev" variant="left" />
                <x-atoms.button-nav class="swiper-next" variant="right" />
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
