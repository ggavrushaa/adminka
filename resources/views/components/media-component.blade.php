<div class="container">
    <div class="section-name">
        <div class="section-name__subtitle subtitle-section">
            <p class="subtitle-section__number">08</p>
            <p class="subtitle-section__text">{{ $translations['golovna']['media_subtitle'] }} </p>
        </div>
        <div class="section-name__title">
            <h2 class="h2 section-name__title-text">{{ $translations['golovna']['media_title'] }}</h2>
        </div>
    </div>

    <div class="swiper clients-slider">
        <div class="swiper-wrapper">
            @foreach ($media as $media )
            <div class="swiper-slide">
                <div class="img">
                    <img src="/storage/{{ $media->image }}" alt="">
                    <img class="hover" src="/storage/{{ $media->image_white }}" alt="">
                </div>

                <div class="desc">
                    <p>{{ $media->name }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-scrollbar"></div>
    </div>
</div>