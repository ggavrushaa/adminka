<div class="container">
    <div class="bg-ripples"></div>
    <div class="case-top">
        <div class="section-name">
            @if($page == false)
            <div class="section-name__subtitle subtitle-section">
                <p class="subtitle-section__number">03</p>
                <p class="subtitle-section__text">{{ $translations['golovna']['cases_title'] }}</p>
            </div>
            @endif
            <div class="section-name__title">
                <h2 class="h2 section-name__title-text">{{ $translations['golovna']['cases_subtitle'] }}</h2>
            </div>
            <div class="btn-wrapper">
                <a href="/cases" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">{{ $translations['golovna']['cases_btn'] }}</a>
            </div>
        </div>
        <div class="swiper-arrows">
            <button type="button" class="icon-arrow-left swiper-btn case-btn-prev"></button>
            <button type="button" class="icon-arrow-right swiper-btn case-btn-next"></button>
        </div>
    </div>
    <div class="swiper case-swiper">
        <div class="swiper-wrapper">
            @foreach ($works as $work)
            <div class="swiper-slide">
                <div class="video">
                    @if (trim($work->video !== '' && $work->video !== null))
                        <video autoplay="" playsinline="" loop="" muted="">
                            <source src="/storage/{{ $work->video }}" type="video/mp4">
                        </video>
                    @else
                    <picture>
                        <source srcset="storage/{{ $work->image }}" type="image/webp">
                        <source srcset="/storage/{{ $work->image }}" type="image/jpg">

                        <img src="/storage/{{ $work->image }}" loading="lazy" alt="" title="">
                    </picture>
                    @endif
                </div>
                <div class="info">
                    <p class="info-type">{{ $work->project_type }}</p>
                    <p class="info-name">{{ $work->localized_title }}</p>
                    <a href="{{ $work->link }}" class="btn btn-primary btn-icon icon-arrow-right-top btn-link"></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>