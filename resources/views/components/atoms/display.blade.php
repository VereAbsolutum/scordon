@props(["variant" => '1'])

@php
    $classes = [
        '1' => 'font-title font-medium text-display font-display',
        '2' => 'font-title font-bold text-display font-display',
        '3' => 'font-title font-extrabold text-display font-display',
];

    $variantClasses = $classes[$variant];
@endphp

<h1 {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</h1>