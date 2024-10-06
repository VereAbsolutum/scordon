<div class=" mx-auto" x-data="{ activeQuestion: null }">
    <!-- Pergunta 1 -->
    <div class="border-b border-gray-300 py-3">
      <button class="w-full text-left" @click="activeQuestion === 1 ? activeQuestion = null : activeQuestion = 1">
        <div class="flex justify-between items-center">
          <h3 class="text-lg font-bold">Pergunta 1: O que é Alpine.js?</h3>
          <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': activeQuestion === 1}" class="h-6 w-6 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
          </svg>
        </div>
      </button>
      <div x-show="activeQuestion === 1" x-transition class="mt-2 text-gray-600">
        <p>Alpine.js é uma biblioteca leve para manipulação de dados reativos em JavaScript, ideal para sites interativos e simples.</p>
      </div>
    </div>

    <!-- Pergunta 2 -->
    <div class="border-b border-gray-300 py-3">
      <button class="w-full text-left" @click="activeQuestion === 2 ? activeQuestion = null : activeQuestion = 2">
        <div class="flex justify-between items-center">
          <h3 class="text-lg font-bold">Pergunta 2: Como funciona o DaisyUI?</h3>
          <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': activeQuestion === 2}" class="h-6 w-6 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
          </svg>
        </div>
      </button>
      <div x-show="activeQuestion === 2" x-transition class="mt-2 text-gray-600">
        <p>DaisyUI é um plugin de componentes UI para Tailwind CSS, oferecendo uma variedade de componentes prontos para uso.</p>
      </div>
    </div>

    <!-- Pergunta 3 -->
    <div class="border-b border-gray-300 py-3">
      <button class="w-full text-left" @click="activeQuestion === 3 ? activeQuestion = null : activeQuestion = 3">
        <div class="flex justify-between items-center">
          <h3 class="text-lg font-bold">Pergunta 3: O que é Tailwind CSS?</h3>
          <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': activeQuestion === 3}" class="h-6 w-6 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
          </svg>
        </div>
      </button>
      <div x-show="activeQuestion === 3" x-transition class="mt-2 text-gray-600">
        <p>Tailwind CSS é uma estrutura de design utilitária que permite criar designs customizados sem sair do HTML.</p>
      </div>
    </div>
  </div>
