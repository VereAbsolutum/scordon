@props(['variant' => 'primary'])

@php
    $classes = [
        'primary' => 'btn btn-primary bg-blue-500 text-white hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50',
        'secondary' => 'btn btn-secondary text-white hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50',
    ];

    $buttonClasses = $classes[$variant]
@endphp

<button class="{{ $buttonClasses }}">{{ $slot }}</button>