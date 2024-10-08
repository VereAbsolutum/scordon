@push('css')
<style>
    .faq {
        padding-top: 5rem;
    }
</style>
@endpush
<section id="faq" class="faq"">

    {{--
    @include('../components/texts/sections/header', [
    'title' => "Depoimentos",
    'subtitle' => "O que pensam sobre nós.",
    ])
    --}}

    <div class=" container flex flex-col lg:flex-row h-full" style="gap: 100px">
    <div class="p-4 lg:w-1/2" style="max-width: 512px;">
        <img src="https://media.istockphoto.com/id/882885718/pt/foto/portrait-of-female-operator-with-headset-on-answering-at-call-center.jpg?s=2048x2048&w=is&k=20&c=LfPRIM2Fd15dddEUUneeQK__-uGgpYC0sNP-I75sW90=" alt="Pessoa no Computador" class="w-full h-auto rounded-lg">
    </div>
    <div class="flex flex-col justify-end lg:w-1/2" style="max-width: 730px;">
        <div class="flex-grow">
            @include('../components/carousels/swiperjs/carousel-1')
        </div>
    </div>
    </div>


</section>