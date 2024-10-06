<div x-data="carousel()" x-init="init()" class="relative overflow-hidden w-full h-48">
    <!-- Container de itens que rola horizontalmente -->
    <div class="flex transition-transform duration-500 ease-out" :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
        <!-- Slide 1 -->
        <div class="w-full flex-shrink-0 h-full">
            <div class="w-full h-full bg-blue-500 flex items-center justify-center text-white">
                <h2 class="text-2xl font-bold">Promoções Especiais de Feriado!</h2>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="w-full flex-shrink-0 h-full">
            <div class="w-full h-full bg-green-500 flex items-center justify-center text-white">
                <h2 class="text-2xl font-bold">Índices Econômicos Atualizados!</h2>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="w-full flex-shrink-0 h-full">
            <div class="w-full h-full bg-red-500 flex items-center justify-center text-white">
                <h2 class="text-2xl font-bold">Descontos Exclusivos!</h2>
            </div>
        </div>
    </div>

    <!-- Controles (botões de navegação) -->
    <div class="absolute top-1/2 left-0 transform -translate-y-1/2">
        <button @click="prev" class="btn btn-circle">❮</button>
    </div>
    <div class="absolute top-1/2 right-0 transform -translate-y-1/2">
        <button @click="next" class="btn btn-circle">❯</button>
    </div>
</div>

@push('scripts')
<!-- Script Alpine.js -->
<script>
    function carousel() {
        return {
            currentIndex: 0,
            slides: 3,
            next() {
                console.log("next");
                this.currentIndex = (this.currentIndex + 1) % this.slides;
            },
            prev() {
                console.log("prev");
                this.currentIndex = (this.currentIndex - 1 + this.slides) % this.slides;
            },
            autoplay() {
                setInterval(() => {
                    this.next();
                }, 3000);
            },
            init() {
                console.log("init");
                this.autoplay();
            }
        }
    }
</script>
@endpush
