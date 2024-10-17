@props(['variant' => '1'])

@php
    $classes = [
        '1' => 'font-normal text-paragraph3',
        '2' => 'font-medium text-paragraph3',
        '3' => 'font-normal underline text-paragraph3',
];

    $variantClasses = $classes[$variant];
@endphp

<p {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</p>