@props(['navItems' => []])

<nav class="text-navbar bg-primary text-gray-500 absolute w-full">
    <div class="container mx-auto">
        <div class="navbar px-0">
            <div class="flex-1">
                <a class="btn btn-ghost text-subheader">SCordon</a>
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
                    <li>
                        <x-molecules.button-link variant="menu" class="text-black">{{ $content['text'] }}</x-molecules.button-link>
                    </li>
                    @endforeach
                </ul>
                @endforeach
            </div>
        </div>
        <div class="lg:hidden hidden" id="mobile-menu">
        @foreach($navItems as $items)
            <ul class="menu flex flex-col p-4 bg-base-100 rounded-lg mt-2">
            @foreach($items['links'] as $content)
                <li><a href="{{ $content['url'] }}" class="link link-hover text-navbar">{{ $content['text'] }}</a></li>
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