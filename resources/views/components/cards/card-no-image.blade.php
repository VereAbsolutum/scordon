<div class="card bg-base-100 w-full shadow-xl">
    <div class="card-body">
        <div class="badge badge-secondary">#</div>
        <h2 class="card-title text-2xl font-bold text-gray-800 mb-4">{{$title}}</h2>
        <!-- Aqui, $servicos é o array passado -->
        @include('../components/lists/list-circle-fa', ['itens' => $servicos])
    </div>
</div>

{{--
<div class="card bg-base-100 w-full shadow-xl">
    <div class="card-body">
        <div class="badge badge-secondary">#</div>
        <h2 class="card-title text-2xl font-bold text-gray-800 mb-4">Desenvolvimento de Software</h2>
        @include('../components/lists/list-circle-fa')
    </div>
  </div>
--}}