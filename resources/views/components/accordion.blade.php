<div class="mx-auto">
    @foreach($items as $item)
        <div class="collapse collapse-arrow border border-base-300 bg-base-100 rounded-box mt-4">
            <input type="checkbox" id="accordion-item-{{ $loop->index }}" />
            <label for="accordion-item-{{ $loop->index }}" class="collapse-title text-xl font-medium">
                {{ $item['question'] }}
            </label>
            <div class="collapse-content">
                <p>{{ $item['answer'] }}</p>
            </div>
        </div>
    @endforeach
</div>
