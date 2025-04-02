@push('styles')
    @vite(['resources/css/index.sass'])
@endpush


@extends('__layouts.main')

@section('title', 'UAITLAB')
@section('description', 'UAITLAB')

@section('content')
    <section class="section-bg-black home-header js_fixed_header-trigger _en">
        <div class="bg-ripples"></div>
        <div class="container">
            <div class="section-name">
                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">01</p>
                    <p class="subtitle-section__text">
                        {{ $translations['golovna']['header_subtitle'] }}
                    </p>
                </div>
                <div class="section-name__title">

                    <h1 class="h1 section-name__title-text">
                        <?= $translations['golovna']['title-part-1'] ?> <span class="glitch"
                            data-text="<?= $translations['golovna']['title-part-2'] ?>"><?= $translations['golovna']['title-part-2'] ?></span>
                        <?= $translations['golovna']['title-part-3'] ?> </h1>
                </div>
            </div>
            <div class="home-header__images">
                <a href="https://clutch.co/profile/uaitlab#reviews" target="_blank">
                    <img src="/img/home/header-image-1__new.svg" alt="">
                </a>
                <a href="https://it-rating.ua/uaitlab" target="_blank">
                    <img src="/img/home/header-image-2.svg" alt="">
                </a>
            </div>

            <!--        <div class="header-canvas"></div>-->
        </div>
    </section>

    <section class="section-bg-white section-who">
        <div class="container">
            <div class="section-name section-name__blue">
                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">02</p>
                    <p class="subtitle-section__text">{{ $translations['golovna']['who_we_subtitle'] }}</p>
                </div>
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">{{ $translations['golovna']['who_we_title'] }}</h2>
                </div>
            </div>
            <div class="who-statistics">
                <div class="who-statistics__item statistics-item">
                    <p class="statistics-item__title">{{ $translations['golovna']['who_we_stat1_text'] }}</p>
                    <p class="statistics-item__number">15+</p>
                </div>
                <div class="who-statistics__item statistics-item">
                    <p class="statistics-item__title">{{ $translations['golovna']['who_we_stat2_text'] }}</p>
                    <p class="statistics-item__number">30+</p>
                </div>
                <div class="who-statistics__item statistics-item">
                    <p class="statistics-item__title">{{ $translations['golovna']['who_we_stat3_text'] }}</p>
                    <p class="statistics-item__number">90+</p>
                </div>
                <div class="who-statistics__item statistics-item">
                    <p class="statistics-item__title">{{ $translations['golovna']['who_we_stat4_text'] }}</p>
                    <p class="statistics-item__number">Top 10</p>
                </div>
            </div>
            <div class="who-features">
                <p class="h3">{{ $translations['golovna']['features_title '] }}</p>
                <div class="who-feature__content content-feature">
                    <div class="content-feature__thumb feature-thumb">
                        <div class="feature-thumb__fraction">
                            <p class="thumb-number thumb-number__start">01</p>
                            <p class="thumb-separator">/</p>
                            <p class="thumb-number thumb-number__end">03</p>
                        </div>
                        <div class="feature-thumb__items">
                            <div class="feature-thumb__item active" data-index="1">
                                <p class="thumb-number">01</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">{{ $translations['golovna']['features_tab1_title'] }}</p>
                            </div>
                            <div class="feature-thumb__item" data-index="2">
                                <p class="thumb-number">02</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">{{ $translations['golovna']['features_tab2_title'] }}</p>
                            </div>
                            <div class="feature-thumb__item" data-index="3">
                                <p class="thumb-number">03</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">{{ $translations['golovna']['features_tab3_title'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper content-feature__main feature-main">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p class="feature-main__title">{{ $translations['golovna']['features_tab1_title'] }}</p>
                                <div class="feature-main__text">
                                    <p>{{ $translations['golovna']['features_tab1_text'] }}</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <p class="feature-main__title">{{ $translations['golovna']['features_tab2_title'] }}</p>
                                <div class="feature-main__text">
                                    <p>
                                        {{ $translations['golovna']['features_tab2_text'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <p class="feature-main__title">{{ $translations['golovna']['features_tab3_title'] }}</p>
                                <div class="feature-main__text">
                                    <p>{{ $translations['golovna']['features_tab3_text'] }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg-black video-case" id="section-case">
        <x-cases-slider-component />
    </section>

    <div class="common-background">
        <section class="section-bg-black section-tech" id="section-tech">
            <div class="bg-ripples"></div>
            <x-tech-stack-component />
        </section>

        <section class="section-bg-black section-marquee">
            <div class="bg-ripples"></div>
            <div class="marquee-text">
                <div class="marquee-group">
                    <span class="marquee-stroke">create for</span>
                    <span class="marquee-orange">success</span>
                    <span class="marquee-circle">●</span>
                    <span class="marquee-stroke">create for</span>
                    <span class="marquee-orange">success</span>
                    <span class="marquee-circle">●</span>
                    <span class="marquee-stroke">create for</span>
                    <span class="marquee-orange">success</span>
                    <span class="marquee-circle">●</span>
                </div>
                <div class="marquee-group">
                    <span class="marquee-stroke">create for</span>
                    <span class="marquee-orange">success</span>
                    <span class="marquee-circle">●</span>
                    <span class="marquee-stroke">create for</span>
                    <span class="marquee-orange">success</span>
                    <span class="marquee-circle">●</span>
                    <span class="marquee-stroke">create for</span>
                    <span class="marquee-orange">success</span>
                    <span class="marquee-circle">●</span>
                </div>
            </div>
        </section>

        <section class="section-bg-black section-services">
            <div class="bg-ripples"></div>

            <div class="container">
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number">05</p>
                        <p class="subtitle-section__text">{{ $translations['golovna']['service_subtitle'] }}</p>
                    </div>
                    <div class="section-name__title">
                        <h2 class="h2 section-name__title-text">{{ $translations['golovna']['service_title'] }}</h2>
                    </div>
                    <div class="section-name__description">
                        <p>{{ $translations['golovna']['service_desc'] }}</p>
                    </div>
                </div>
                <div class="services-cards">
                    <div class="card-flipper js-card-flipper">
                        <div class="card-flipper__content">
                            <div class="card-flipper__front card-front">
                                <h3 class="h4 card__title">{{ $translations['golovna']['card1_title'] }} </h3>
                                <div class="card-front__bg">
                                    <picture>
                                        <source srcset="/img/home/services/services-1_1920.png" type="image/webp"
                                            media="(min-device-width: 1440px)">
                                        <source srcset="/img/home/services/services-1_1920.png" type="image/jpeg"
                                            media="(min-device-width: 1440px)">

                                        <source srcset="/img/home/services/services-1_1024.png" type="image/webp"
                                            media="(min-device-width: 1024px)">
                                        <source srcset="/img/home/services/services-1_1024.png" type="image/jpeg"
                                            media="(min-device-width: 1024px)">

                                        <source srcset="/img/home/services/services-1_768.png" type="image/webp"
                                            media="(min-device-width: 768px)">
                                        <source srcset="/img/home/services/services-1_768.png" type="image/jpeg"
                                            media="(min-device-width: 768px)">

                                        <source srcset="/img/home/services/services-1_360.webp" type="image/webp">
                                        <source srcset="/img/home/services/services-1_360.png" type="image/jpeg">

                                        <img src="/img/home/services/services-1_360.png" loading="lazy" alt=""
                                            title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> {{ $translations['golovna']['card1_title'] }} </h3>
                                <div class="card__description">
                                    <p>{{ $translations['golovna']['card1_desc'] }}</p>
                                </div>
                                @if (count(explode('#', $translations['golovna']['card1_labels'])) > 0)
                                    <div class="tags">
                                        @foreach (explode('#', $translations['golovna']['card1_labels']) as $label)
                                            <p class="tag">{{ $label }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="btn-wrapper">
                                    <a href="{{ route('service.mobile', app()->getLocale()) }}"
                                        class="btn btn-tertiary btn-icon-right icon-arrow-right-top">{{ $translations['golovna']['btn_tech_card'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-flipper js-card-flipper">
                        <div class="card-flipper__content">
                            <div class="card-flipper__front card-front">
                                <h3 class="h4 card__title"> {{ $translations['golovna']['card2_title'] }} </h3>
                                <div class="card-front__bg">
                                    <picture>
                                        <source srcset="/img/home/services/services-2_1920.png" type="image/webp"
                                            media="(min-device-width: 1440px)">
                                        <source srcset="/img/home/services/services-2_1920.png" type="image/jpeg"
                                            media="(min-device-width: 1440px)">

                                        <source srcset="/img/home/services/services-2_1024.png" type="image/webp"
                                            media="(min-device-width: 1024px)">
                                        <source srcset="/img/home/services/services-2_1024.png" type="image/jpeg"
                                            media="(min-device-width: 1024px)">

                                        <source srcset="/img/home/services/services-2_768.png" type="image/webp"
                                            media="(min-device-width: 768px)">
                                        <source srcset="/img/home/services/services-2_768.png" type="image/jpeg"
                                            media="(min-device-width: 768px)">

                                        <source srcset="/img/home/services/services-2_360.webp" type="image/webp">
                                        <source srcset="/img/home/services/services-2_360.png" type="image/jpeg">

                                        <img src="/img/home/services/services-2_360.png" loading="lazy" alt=""
                                            title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> {{ $translations['golovna']['card2_title'] }} </h3>
                                <div class="card__description">
                                    <p>{{ $translations['golovna']['card2_desc'] }}</p>
                                </div>
                                @if (count(explode('#', $translations['golovna']['card2_labels'])) > 0)
                                    <div class="tags">
                                        @foreach (explode('#', $translations['golovna']['card2_labels']) as $label)
                                            <p class="tag">{{ $label }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="btn-wrapper">
                                    <a href="{{ route('service.web', app()->getLocale()) }}"
                                        class="btn btn-tertiary btn-icon-right icon-arrow-right-top">{{ $translations['golovna']['btn_tech_card'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-flipper js-card-flipper">
                        <div class="card-flipper__content">
                            <div class="card-flipper__front card-front">
                                <h3 class="h4 card__title"> {{ $translations['golovna']['card3_title'] }} </h3>
                                <div class="card-front__bg">
                                    <picture>
                                        <source srcset="/img/home/services/services-3_1920.png" type="image/webp"
                                            media="(min-device-width: 1440px)">
                                        <source srcset="/img/home/services/services-3_1920.png" type="image/jpeg"
                                            media="(min-device-width: 1440px)">

                                        <source srcset="/img/home/services/services-3_1024.png" type="image/webp"
                                            media="(min-device-width: 1024px)">
                                        <source srcset="/img/home/services/services-3_1024.png" type="image/jpeg"
                                            media="(min-device-width: 1024px)">

                                        <source srcset="/img/home/services/services-3_768.png" type="image/webp"
                                            media="(min-device-width: 768px)">
                                        <source srcset="/img/home/services/services-3_768.png" type="image/jpeg"
                                            media="(min-device-width: 768px)">

                                        <source srcset="/img/home/services/services-3_360.webp" type="image/webp">
                                        <source srcset="/img/home/services/services-3_360.png" type="image/jpeg">

                                        <img src="/img/home/services/services-3_360.png" loading="lazy" alt=""
                                            title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> {{ $translations['golovna']['card3_title'] }} </h3>
                                <div class="card__description">
                                    <p>{{ $translations['golovna']['card3_desc'] }}</p>
                                </div>
                                @if (count(explode('#', $translations['golovna']['card3_labels'])) > 0)
                                    <div class="tags">
                                        @foreach (explode('#', $translations['golovna']['card3_labels']) as $label)
                                            <p class="tag">{{ $label }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="btn-wrapper">
                                    <a href="{{ route('service.support', app()->getLocale()) }}"
                                        class="btn btn-tertiary btn-icon-right icon-arrow-right-top">{{ $translations['golovna']['btn_tech_card'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-flipper js-card-flipper">
                        <div class="card-flipper__content">
                            <div class="card-flipper__front card-front">
                                <h3 class="h4 card__title">{{ $translations['golovna']['card4_title'] }}</h3>
                                <div class="card-front__bg">
                                    <picture>
                                        <source srcset="/img/home/services/services-4_1920.png" type="image/webp"
                                            media="(min-device-width: 1440px)">
                                        <source srcset="/img/home/services/services-4_1920.png" type="image/jpeg"
                                            media="(min-device-width: 1440px)">

                                        <source srcset="/img/home/services/services-4_1024.png" type="image/webp"
                                            media="(min-device-width: 1024px)">
                                        <source srcset="/img/home/services/services-4_1024.png" type="image/jpeg"
                                            media="(min-device-width: 1024px)">

                                        <source srcset="/img/home/services/services-4_768.png" type="image/webp"
                                            media="(min-device-width: 768px)">
                                        <source srcset="/img/home/services/services-4_768.png" type="image/jpeg"
                                            media="(min-device-width: 768px)">

                                        <source srcset="/img/home/services/services-4_360.webp" type="image/webp">
                                        <source srcset="/img/home/services/services-4_360.png" type="image/jpeg">

                                        <img src="/img/home/services/services-4_360.png" loading="lazy" alt=""
                                            title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> {{ $translations['golovna']['card4_title'] }} </h3>
                                <div class="card__description">
                                    <p>{{ $translations['golovna']['card4_desc'] }}</p>
                                </div>
                                @if (count(explode('#', $translations['golovna']['card4_labels'])) > 0)
                                    <div class="tags">
                                        @foreach (explode('#', $translations['golovna']['card4_labels']) as $label)
                                            <p class="tag">{{ $label }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="btn-wrapper">
                                    <a href="{{ route('service.automation', app()->getLocale()) }}"
                                        class="btn btn-tertiary btn-icon-right icon-arrow-right-top">{{ $translations['golovna']['btn_tech_card'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-bg-black section-clients">
            <div class="bg-ripples"></div>

            <div class="container">
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number">06</p>
                        <p class="subtitle-section__text">{{ $translations['golovna']['clients_subtitle'] }}</p>
                    </div>
                    <div class="section-name__title">
                        <h2 class="h2 section-name__title-text">{{ $translations['golovna']['clients_title'] }}</h2>
                    </div>
                </div>

                <div class="swiper clients-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-1.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-1__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-7.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-7__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-6.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-6__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-13.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-13__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-14.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-14__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-15.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-15__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-8.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-8__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-10.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-10__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-9.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-9__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-5.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-5__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-3.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-3__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-12.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-12__white.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </section>
    </div>

    <section class="section-reviews">
        <x-reviews-component />
    </section>

    <section class="section-bg-black section-clients section-media">
        <div class="bg-ripples"></div>

        <div class="container">
            <div class="section-name">
                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">08</p>
                    <p class="subtitle-section__text">we are proud of </p>
                </div>
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">Media</h2>
                </div>
            </div>

            <div class="swiper clients-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img">
                            <img src="/img/home/media-img-1.svg" alt="">
                            <img class="hover" src="/img/home/media-img_hover-1.svg" alt="">
                        </div>

                        <div class="desc">
                            <p>Незалежний всеукраїнський портал новин</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img">
                            <img src="/img/home/media-img-2.svg" alt="">
                            <img class="hover" src="/img/home/media-img_hover-2.svg" alt="">
                        </div>
                        <div class="desc">
                            <p>Портал про гаджети, технології і програмне забезпечення</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img">
                            <img src="/img/home/media-img-3.svg" alt="">
                            <img class="hover" src="/img/home/media-img_hover-3.svg" alt="">
                        </div>
                        <div class="desc">
                            <p>Асоціація ритейлерів України</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img">
                            <img src="/img/home/media-img-4.svg" alt="">
                            <img class="hover" src="/img/home/media-img_hover-4.png" alt="">
                        </div>
                        <div class="desc">
                            <p>Інформаційний ресурс про український ринок роздрібної торгівлі</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>

    <section class="section-form">
        <div class="container">
            <div class="section-name">
                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">09</p>
                    <p class="subtitle-section__text">{{ $translations['golovna']['form_subtitle'] }}</p>
                </div>
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">{{ $translations['golovna']['form_title'] }}</h2>
                </div>

                <div class="btn-wrapper">
                    <a href="/form"
                        class="btn btn-primary btn-bg-orange">{{ $translations['golovna']['btn_form_link'] }}</a>
                </div>

                <div class="marquee-text">
                    <div class="marquee-group">
                        <span class="marquee-grey">high-tech web-products for business.</span>
                    </div>
                    <div class="marquee-group">
                        <span class="marquee-grey">high-tech web-products for business.</span>
                    </div>
                </div>
            </div>
            <div class="form-download">
                <a href="/uploads/files/65e19842f0e72.docx" class="form-download__item" download="">
                    <button class="btn btn-border btn-bg-orange btn-icon icon-download"></button>
                    <span>{{ $translations['golovna']['btn_form_brief'] }}</span>
                </a>

                <a href="/uploads/files/65e17e71a6676.pdf" class="form-download__item" target="_blank">
                    <button class="btn btn-border btn-bg-orange btn-icon icon-download"></button>
                    <span>{{ $translations['golovna']['btn_form_presentation'] }}</span>
                </a>
            </div>
        </div>
    </section>
@endsection
