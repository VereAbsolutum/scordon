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
                <ul class="menu menu-horizontal px-1">
                    <li><a>Nossa Página</a></li>
                    <li><a>Conheça Nossos Produtos</a></li>
                    <li><a>Contacte O Suporte</a></li>
                    <li><a>Saiba Mais Sobre a Empresa</a></li>
                </ul>
            </div>
        </div>
        <div class="lg:hidden hidden" id="mobile-menu">
            <ul class="menu flex flex-col p-4 bg-base-100 rounded-lg mt-2">
                <li><a>Nossa Página</a></li>
                <li><a>Conheça Nossos Produtos</a></li>
                <li><a>Contacte O Suporte</a></li>
                <li><a>Saiba Mais Sobre a Empresa</a></li>
            </ul>
        </div>
    </div>
</nav>


@push('scrips')
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
@endpush
