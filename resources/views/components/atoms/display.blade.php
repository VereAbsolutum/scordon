@props(["variant" => '1'])

@php
    $classes = [
        '1' => 'font-medium lg:text-display-lg text-display-sm',
        '2' => ' font-bold lg:text-display-lg text-display-sm',
        '3' => 'font-extrabold lg:text-display-lg text-display-sm',
];

    $variantClasses = $classes[$variant];
@endphp

<h1 {{ $attributes->merge(['class' => $variantClasses]) }} >{{ $slot }}</h1>