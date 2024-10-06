<ul class="list-none">
    @foreach($itens as $content)
        <li class="flex items-center gap-2 mb-1">
            <i class="far fa-circle fa-solid text-accent text-xs"></i>
            <span class="text-lg text-gray-700">{{ $content }}</span>
        </li>
    @endforeach
</ul>

{{--
<ul class="list-none">
    <li class="flex items-center gap-2 mb-1">
        <i class="far fa-circle fa-solid text-accent text-xs"></i>
        <span class="text-lg text-gray-700">Desenvolvimento de MVP</span>
    </li>
    <li class="flex items-center gap-2 mb-1">
        <i class="far fa-circle fa-solid text-accent text-xs"></i>
        <span class="text-lg text-gray-700">Atualização de Software Legado</span>
    </li>
    <li class="flex items-center gap-2 mb-1">
        <i class="far fa-circle fa-solid text-accent text-xs"></i>
        <span class="text-lg text-gray-700">Evolução e manutenção de software</span>
    </li>
    <li class="flex items-center gap-2 mb-1">
        <i class="far fa-circle fa-solid text-accent text-xs"></i>
        <span class="text-lg text-gray-700">Migração de software para nuvem</span>
    </li>
    <li class="flex items-center gap-2 mb-1">
        <i class="far fa-circle fa-solid text-accent text-xs"></i>
        <span class="text-lg text-gray-700">Atualização de arquitetura de aplicação</span>
    </li>
    <li class="flex items-center gap-2 mb-1">
        <i class="far fa-circle fa-solid text-accent text-xs"></i>
        <span class="text-lg text-gray-700">Melhoria de performance de software</span>
    </li>
    <li class="flex items-center gap-2 mb-1">
        <i class="far fa-circle fa-solid text-accent text-xs"></i>
        <span class="text-lg text-gray-700">Profissionais de TI para complementar sua equipe</span>
    </li>
</ul>

--}}
