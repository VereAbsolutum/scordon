@props(["variant" => '1'])

@php
    $classes = [
        '1' => 'font-title font-medium text-heading4',
        '2' => 'font-title font-bold text-heading4',
        '3' => 'font-extrabold text-heading4 uppercase',
    ];

    $variantClasses = $classes[$variant];
@endphp

<h1 {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</h1>