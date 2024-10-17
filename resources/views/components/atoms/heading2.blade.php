@props(["variant" => '1'])

@php
    $classes = [
        '1' => 'font-title font-medium text-heading1 text-center uppercase leading-tight',
        '2' => 'font-title font-bold text-heading1 text-center uppercase leading-tight',
        '3' => 'font-title font-extrabold text-heading1 text-center uppercase leading-tight',
];

    $variantClasses = $classes[$variant];
@endphp

<h2 {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</h2>