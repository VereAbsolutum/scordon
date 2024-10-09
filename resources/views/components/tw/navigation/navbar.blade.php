@props(['navItems' => []])

<nav class="bg-base-100 bg-primary">
    <div class="container mx-auto px-4">
        <div class="navbar">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl">SCordon</a>
            </div>
            <div class="flex-none lg:hidden">
                <button class="btn btn-square btn-ghost" id="menu-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex flex-none">
                @foreach($navItems as $items)
                <ul class="menu menu-horizontal px-1">
                    @foreach($items['links'] as $content)
                    <li><a href="{{ $content['url'] }}" class="link link-hover">{{ $content['text'] }}</a></li>
                    @endforeach
                </ul>
                @endforeach
            </div>
        </div>
        <div class="lg:hidden hidden" id="mobile-menu">
        @foreach($navItems as $items)
            <ul class="menu flex flex-col p-4 bg-base-100 rounded-lg mt-2">
            @foreach($items['links'] as $content)
                <li><a href="{{ $content['url'] }}" class="link link-hover">{{ $content['text'] }}</a></li>
            @endforeach
            </ul>
        @endforeach
        </div>
    </div>
</nav>


@push('scripts')
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
@endpush