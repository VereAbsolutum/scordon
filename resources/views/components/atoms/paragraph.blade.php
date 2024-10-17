@props(['variant' => '1'])

@php
    $classes = [
        '1' => 'font-medium text-heading1',
        '2' => 'font-bold text-heading1',
        '3' => 'font-extrabold text-heading1',
];

    $variantClasses = $classes[$variant];
@endphp

<p {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</p>