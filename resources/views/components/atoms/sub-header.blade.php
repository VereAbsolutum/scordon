@props(['variant' => '1'])

@php
    $classes = [
        '1' => 'font-normal text-subheader',
        '2' => 'font-bold text-subheader',
        '3' => 'font-medium underline text-subheader',
];

    $variantClasses = $classes[$variant];
@endphp

<p {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</p>