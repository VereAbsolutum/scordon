@props(["variant" => '1'])

@php
    $classes = [
        '1' => 'font-title font-medium text-heading3 text-center text-secondary uppercase',
        '2' => 'font-title font-bold text-heading3 text-center text-secondary uppercase',
        '3' => 'font-title font-extrabold text-heading3 text-center text-secondary uppercase',
];

    $variantClasses = $classes[$variant];
@endphp

<h1 {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</h1>