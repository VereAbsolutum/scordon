@props(["variant" => '1'])

@php
    $classes = [
        '1' => 'font-title font-medium text-heading5 text-center text-secondary uppercase',
        '2' => 'font-title font-bold text-heading5 text-center text-secondary uppercase',
        '3' => ';font-extrabold text-heading5 text-center text-secondary uppercase',
];

    $variantClasses = $classes[$variant];



@endphp

<h1 {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</h1>