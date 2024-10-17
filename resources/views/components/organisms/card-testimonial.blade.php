@props(['title' => '', 'subtitle' => '', 'testimonial' => '', 'buttonText' => 'Saiba mais.'])

<div class="card-testimonial">
    <h2 class="text-left text-heading4 font-bold mb-4">Logo</h2>
    

    <p class="text-left lg:mx-0 text-2xl prose lg:max-w-md mb-6 text-gray-700 max-w-full">
        {{ $testimonial }}
    </p>
    <h3 class="text-left text-lg font-semibold font-montserrat">{{ $title }}</h3>
    <h4 class="text-left text-sm mb-4 font-montserrat">{{ $subtitle }}</h4>
    <footer class="text-left">
        <x-molecules.button-link class="text-left">{{ $buttonText }}</x-molecules.button-link>
    </footer>
</div>
