@if (isset($title))
    <h1 class="text-center text-accent mb-4 mx-auto max-w-[550px]">
        <span class="font-bold">
            {{ $title }}
        </span>
    </h1>
@endif
@if (isset($subtitle))
<h2 class="text-center mb-4 mx-auto max-w-[550px] text-4xl ">
    <span class="font-bold">
        {{ $subtitle }}
    </span>
</h2>
@endif
@if (isset($description))
<p class="text-center mb-4 mx-auto max-w-[550px] ">
    {{ $description }}
</p>
@endif