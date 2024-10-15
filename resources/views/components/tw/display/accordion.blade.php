@props(['items' => []])

<div class="mx-auto" x-data="{ activeItem: null }">
    @foreach($items as $q)
    <div class="border-b border-gray-300 py-4 hover:bg-gray-200 transition-all duration-200 group"> <!-- Adicionando a classe group aqui -->
        <button class="w-full text-left" @click="activeItem === {{ $loop->index }} ? activeItem = null : activeItem = {{ $loop->index }}">
            <div class="flex justify-between items-center">
                <h3 class="text-title-md font-normal transition-all duration-200 group-hover:font-semibold"> <!-- Usando group-hover -->
                    {{ $q['title'] }}
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': activeItem === {{ $loop->index }}}" class="h-6 w-6 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
            </div>
        </button>
        <div x-show="activeItem === {{ $loop->index }}" x-transition class="mt-2 text-gray-700">
            <p>{{ $q['description'] }}</p>
        </div>
    </div>
    @endforeach
</div>
