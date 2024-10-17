@props(["variant" => "1", "title"=> '', "subtitle" => "", "subheader" => ""])

@php
    $classes = [
        "1" =>  "section-header max-w-xl mx-auto" 
    ];

    $variantClasses = $classes[$variant] ?? '';
@endphp

<div {{ $attributes->merge([ "class" => $variantClasses ]) }}>
    <x-atoms.heading1 class="text-center">
        {{ $title }}
    </x-atoms.heading1>
    <x-atoms.heading2 class="text-center">
        {{ $subtitle }}
    </x-atoms.heading2>
    <x-atoms.sub-header class="text-center">
        {{ $subheader }}
    </x-atoms.sub-header>
</div>
