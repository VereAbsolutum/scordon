@props(["variant" => "1", "title"=> '', "subtitle" => "", "subheader" => ""])

@php
    $classes = [
        "1" =>  "section-header max-w-xl text-center mx-auto", 
        "2" =>  "section-header max-w-xl" 
    ];

    $variantClasses = $classes[$variant] ?? '2';
@endphp

<div {{ $attributes->merge([ "class" => $variantClasses ]) }}>
    <h1 class="font-title font-medium text-heading5 text-secondary uppercase">
        {{ $title }}
    </h1>
    <h2 class="font-title font-medium text-heading1 uppercase leading-tight">
        {{ $subtitle }}
    </h2>
    <p class="font-normal text-subheader ">
        {{ $subheader }}
    </p>
</div>
