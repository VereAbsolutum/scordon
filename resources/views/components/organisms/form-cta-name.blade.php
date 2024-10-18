<form action="" {{ $attributes->merge(['class' => '']) }}>
    <div class="flex input-group w-full">
        {{ $slot }}
        <button class="btn btn-secondary">Começar!</button>
    </div>
</form>
