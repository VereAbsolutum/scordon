@props(['variant' => 'normal'])

@php
    $classes = [
        'normal' => "flex items-center text-blue-500 hover:underline",
        'menu' => 'link link-hover hover:text-secondary hover:font-medium text-subheader',
    ];

    $varianteClass = $classes[$variant] ?? 'flex items-center'; // Classe padrão se não existir
@endphp

<a {{ $attributes->merge(["class" => $varianteClass]) }}>{{ $slot }}</a>
