<div class="container">
    <div class="section-name">
        @if($page === false)
        <div class="section-name__subtitle subtitle-section">
            <p class="subtitle-section__number">06</p>
            <p class="subtitle-section__text">{{ $translations['golovna']['clients_subtitle'] }}</p>
        </div>
        @endif
        <div class="section-name__title">
            <h2 class="h2 section-name__title-text">{{ $translations['golovna']['clients_title'] }}</h2>
        </div>
    </div>
    <div class="swiper clients-slider">
        <div class="swiper-wrapper">
            @foreach($customers as $customer)
            <div class="swiper-slide">
                <div class="img">
                    <img src="/storage/{{ $customer->image }}" alt="">
                    <img class="hover" src="/storage/{{ $customer->image_white }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-scrollbar"></div>
    </div>
</div>