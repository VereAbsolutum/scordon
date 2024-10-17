@props(['title' => '', 'subtitle' => '', 'testimonial' => '', 'buttonText' => 'Saiba mais.'])

<div class="card-testimonial">
    <h3 class="text-left text-heading4 font-bold mb-4">Logo</h3>

    <h4 class="font-normal text-subheader font-title text-left prose mb-6 text-gray-700 max-w-full lg:max-w-md lg:mx-0">
        {{ $testimonial }}
    </h4>

    <h3 class="text-left text-lg font-semibold font-montserrat">{{ $title }}</h3>
    <h4 class="text-left text-sm mb-4 font-montserrat">{{ $subtitle }}</h4>
    <footer class="text-left">
        <x-molecules.button-link class="text-left">
            {{ $buttonText }}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12h6m0 0l-3-3m3 3l-3 3" />
            </svg>
        </x-molecules.button-link>
    </footer>
</div>
