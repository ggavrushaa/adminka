<div class="blog-list">
    @foreach ($articles as $article)
    <a href="{{ route('blog.show', [app()->getLocale(), $article->id] ) }}" class="blog-card">
        <div class="img">
            <picture>
                <source srcset="{{ $article->image }}" type="image/webp"
                    media="(min-device-width: 768px)">
                <source srcset="{{ $article->image }}" type="image/jpeg"
                    media="(min-device-width: 768px)">

                <source srcset="{{ $article->image }}" type="image/webp">
                <source srcset="{{ $article->image }}" type="image/jpeg">

                <img src="{{ $article->seo_image }}" loading="lazy" alt="" title="">
            </picture>
        </div>
        <div class="info">
            <p class="date">{{$article->created_at}}</p>
            @foreach($article->tags as $tag)
                <p class="tag">
                    {{ $tag->name }}
                </p>
            @endforeach
            <p class="title">{{$article->localized_name}}</p>
        </div>
    </a>
    @endforeach
</div>
<div class="pagination">
        {{ $articles->links('vendor.pagination.custom') }}
</div>