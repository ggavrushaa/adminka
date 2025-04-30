<div class="blog-filters">
    <p class="h2">Categories</p>

    <div class="modal filters _js-modal _js-modal-filters">
        <div class="modal-content">
            <div class="filters-content">
                @foreach($tags as $tag)
                <div class="form-group checkbox">
                    <input class="form-control" type="checkbox" id="category-0" name="category[]"
                        value="val-0">
                    <label for="category-0" class="form-label">{{$tag->name}}</label>
                </div>
                @endforeach
                <button class="btn btn-border active-filter show-more" data-768="+8" data-1024="+4"
                    data-1280="+2"></button>
            </div>
        </div>
    </div>
</div>