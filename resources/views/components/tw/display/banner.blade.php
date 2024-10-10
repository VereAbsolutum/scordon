@props(['text', 'textHightlight', 'buttonText', 'imgSrc'])

<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 bg-accent rounded-lg">
    <div class="p-4 text-center lg:text-left flex items-center">
        <div>
            <p class="text-3xl font-bold text-gray-800 mb-6">
                {{ $text }}
                <span class="text-blue-500 font-bold">{{ $textHightlight }}</span>
            </p>
            <div class="flex justify-center lg:justify-start mt-4">
                <a href="link_do_app" class="btn btn-primary w-full lg:w-auto">{{ $buttonText }}</a>
            </div>
        </div>
    </div>
    <div class="p-4 ">
        <img src="{{ $imgSrc }}" alt="Imagem de Suporte" class="w-full h-auto rounded-lg" />
    </div>
</div>