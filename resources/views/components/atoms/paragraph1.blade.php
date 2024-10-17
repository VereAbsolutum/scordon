@props(['variant' => '1'])

@php
    $classes = [
        '1' => 'font-normal text-paragraph1',
        '2' => 'font-medium text-paragraph1',
        '3' => 'font-normal underline text-paragraph1',
];

    $variantClasses = $classes[$variant];
@endphp

<p {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</p>