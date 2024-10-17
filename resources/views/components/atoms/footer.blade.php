@props(['variant' => '1'])

@php
    $classes = [
        '1' => 'font-normal text-footer',
        '2' => 'font-medium text-footer',
        '3' => 'font-normal uppercase text-footer',
];

    $variantClasses = $classes[$variant];
@endphp

<p {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</p>