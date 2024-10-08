<div class="card bg-base-100 w-full shadow-xl border-l-4 border-blue-500">
    <div class="card-body">
        <div class="badge badge-secondary">{{ $badge }}</div>
        <h2 class="card-title text-3xl font-bold text-blue-700 mb-4">{{ $title }}</h2>
        <ul class="list-none">
            @foreach($itens as $content)
                <li class="flex items-center gap-2 mb-1">
                    <i class="far fa-circle fa-solid text-accent text-xs"></i>
                    <span class="text-lg text-gray-700">{{ $content }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
