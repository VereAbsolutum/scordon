@props(['badge', 'title', 'items'])

<div class="card w-full bg-white transition-transform duration-300 hover:scale-102" style="box-shadow: 0 10px 0 -5px #dedcb9;">
    <div class="card-body">
        <h3 class="font-sans text-heading3 text-secondary font-medium  mb-4">{{ $title }}</h2>
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
