@props(['variant' => '1'])

@php
    $classes = [
        '1' => 'font-normal text-subheader font-title',
        '2' => 'font-bold text-subheader font-title',
        '3' => 'font-medium underline text-subheader font-title',
];

    $variantClasses = $classes[$variant];
@endphp

<p {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</p>