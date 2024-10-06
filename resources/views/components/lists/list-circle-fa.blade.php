<ul class="list-none">
    @foreach($itens as $content)
        <li class="flex items-center gap-2 mb-1">
            <i class="far fa-circle fa-solid text-accent text-xs"></i>
            <span class="text-lg text-gray-700">{{ $content }}</span>
        </li>
    @endforeach
</ul>
