<div class="container">
    <div class="list">
        @foreach ($categories as $category)
        <div class="list__item">
            <p class="list__item-title">{{ $category->name }}</p>
            <div class="list__item-labels">
                @foreach ($category->techStacks as $stack)
                <div class="label">
                    <img src="/storage/{{ $stack->image }}" alt="">
                    <p>{{ $stack->name }}</p>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>