@props(['badge', 'title', 'items'])

<div class="card w-full transition-transform duration-300 hover:scale-102" style="box-shadow: 0 10px 0 -5px #dedcb9; border:2px solid black">
    <div class="card-body">
        <div class="badge badge-secondary">{{ $badge }}</div>
        <h2 class="card-title text-3xl font-bold text-blue-700 mb-4">{{ $title }}</h2>
        <ul class="list-none">
            @foreach($items as $content)
            <li class="flex items-center gap-2 mb-1">
                <i class="far fa-circle fa-solid text-accent text-xs"></i>
                <span class="text-lg">{{ $content }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>
