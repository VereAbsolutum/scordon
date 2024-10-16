@props(['variant' => 'left'])

<button
    {{ $attributes->merge(['class' => 'button-nav p-2 border-2 border-black rounded-full hover:bg-gray-200 transition-colors']) }}
    aria-label="{{ $variant === 'left' ? 'Previous slide' : 'Next slide' }}"
    role="button"
>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
        <path d="{{ $variant === 'left' ? 'M15 19l-7-7 7-7' : 'M9 5l7 7-7 7' }}" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</button>
