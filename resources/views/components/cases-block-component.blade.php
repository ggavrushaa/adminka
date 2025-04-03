<div class="container">
    <div class="case-catalog__content">
        @foreach($works as $work)
        <div class="case-card">
            <div class="case-img">
                <video autoplay="" playsinline="" loop="" muted="">
                    <source src="/storage/{{ $work->video }}" type="video/mp4">
                </video>
            </div>
            <div class="case-info">
                <a href="/cases/varto" class="btn btn-primary btn-icon icon-arrow-right-top btn-link"></a>
                <div class="case-tag">{{$work->project_type}}</div>
                <p class="case-name">{{$work->localized_title}}</p>
                <div class="case-link"></div>
                <div class="case-desc">
                    <p>
                        {{ $work->localized_description }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
