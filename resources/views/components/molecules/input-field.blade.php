<label class="input input-bordered input-secondary  w-full form-control gap-2">
    @if(View::exists($getIconContent()))
        @include($getIconContent())
    @endif
    <input type="{{ $type }}" class="grow " placeholder="{{ $placeholder }}" />
</label>