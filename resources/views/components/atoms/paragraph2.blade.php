@props(['variant' => '1'])

@php
    $classes = [
        '1' => 'font-normal text-paragraph2',
        '2' => 'font-medium text-paragraph2',
        '3' => 'font-normal underline text-paragraph2',
];

    $variantClasses = $classes[$variant];
@endphp

<p {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</p>