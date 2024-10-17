@props(['variant' => '1'])

@php
    $classes = [
        '1' => 'font-title font-normal text-caption',
        '2' => 'font-title font-medium text-caption',
        '3' => 'font-title font-normal uppercase text-caption',
];

    $variantClasses = $classes[$variant];
@endphp

<p {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</p>