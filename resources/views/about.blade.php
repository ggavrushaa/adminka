@push('styles')
    @vite(['resources/css/index.sass'])
@endpush

@extends('__layouts.main')

@section('title', 'About Us')
@section('description', 'About Us')

@section('content')
    <section class="section-bg-black anim-letter-header _about">
        <div class="bg-ripples"></div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home', app()->getLocale()) }}">Home</a></li>
                <li>About</li>
            </ul>

            <div class="case-header__content">
                <div class="case-header__info">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number"></p>
                            <h1 class="subtitle-section__text">{{ $translations['about']['header_subtitle'] ?? '-----' }}
                            </h1>
                        </div>
                        <div class="section-name__title">
                            <div class="h1 section-name__title-text stop-motion-animation">
                                <div class="word">
                                    <div class="word-letter">U</div>
                                    <div class="word-letter">A</div>
                                    <div class="word-anim__wrapper">
                                        <div class="word word-anim letter-i"></div>
                                    </div>
                                    <div class="word-letter">T</div>
                                    <div class="word-letter">L</div>
                                    <div class="word-letter">A</div>
                                    <div class="word-letter">B</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>{{ $translations['about']['header_description'] ?? '-----' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-mission">
        <div class="container">

            <div class="mission-main">
                <div class="item">
                    <p class="mission-title">{{ $translations['about']['mission_title'] ?? '-----' }}</p>
                    <div class="mission-text">
                        <p>
                            {{ $translations['about']['mission_text'] ?? '-----' }}</p>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <p class="mission-title">{{ $translations['about']['vision_title'] ?? '-----' }}</p>
                    <div class="mission-text">
                        <p>
                            {{ $translations['about']['vision_text'] ?? '-----' }}</p>
                        </p>
                    </div>
                </div>
                <div class="item _orange">
                    <p class="mission-title">
                        {{ $translations['about']['quote'] ?? '-----' }}</p>
                    </p>
                    <div class="mission-author">CEO, Mykyta Zadneproskyi</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg-black about-partner">
        <div class="bg-ripples"></div>
        <div class="container">
            <div class="about-partner__title">
                <p>
                    {{ $translations['about']['partner_title1'] ?? '-----' }} 
                    <span class="marker">{{ $translations['about']['partner_title2'] ?? '-----' }}</span>
                     {{ $translations['about']['partner_title3'] ?? '-----' }} 
                     <span class="marker">{{ $translations['about']['partner_title4'] ?? '-----' }}</span> 
                     {{ $translations['about']['partner_title5'] ?? '-----' }}
                </p>
            </div>
            <ol class="about-partner__list">
                <li>
                    <span>01</span>
                    {{ $translations['about']['partner_list1'] ?? '-----' }}
                </li>
                <li>
                    <span>02</span>
                    {{ $translations['about']['partner_list2'] ?? '-----' }}
                </li>
                <li>
                    <span>03</span>
                    {{ $translations['about']['partner_list3'] ?? '-----' }}
                </li>
                <li>
                    <span>04</span>
                    {{ $translations['about']['partner_list4'] ?? '-----' }}
                </li>
                <li>
                    <span>05</span>
                    {{ $translations['about']['partner_list5'] ?? '-----' }}
                </li>
            </ol>
        </div>
    </section>

    <section class="about-stat">
        <div class="container">
            <div class="section-name">
                <div class="section-name__title">
                    <h2 class="section-name__title-text">{{ $translations['about']['stat_title'] ?? '-----' }}</h2>
                </div>
            </div>

            <div class="items">
                <div class="item">
                    <div class="item-img">
                        <img src="/img/home/review-logo-1.svg" alt="">
                    </div>
                    <p class="item-title">It-rating</p>
                    <div class="item-desc">
                        <p>
                            {{ $translations['about']['stat_text1'] ?? '-----' }}</p>    
                        </p>
                    </div>
                    <a href="https://it-rating.ua/uaitlab" class="icon-arrow-right-top btn-link" target="_blank"
                        rel="nofollow"></a>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="/img/home/review-logo-2.svg" alt="">
                    </div>
                    <p class="item-title">Clutch</p>
                    <div class="item-desc">
                        <p>
                            {{ $translations['about']['stat_text2'] ?? '-----' }}</p>
                        </p>
                    </div>
                    <a href="https://clutch.co/profile/uaitlab#reviews" class="icon-arrow-right-top btn-link"
                        target="_blank" rel="nofollow"></a>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="/img/home/review-logo-3.svg" alt="">
                    </div>
                    <p class="item-title">tech behemoths</p>
                    <div class="item-desc">
                        <p>
                            {{ $translations['about']['stat_text3'] ?? '-----' }}</p>
                        </p>
                    </div>
                    <a href="https://techbehemoths.com/company/uaitlab" class="icon-arrow-right-top btn-link"
                        target="_blank" rel="nofollow"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg-black section-clients">
        <div class="bg-ripples"></div>

        <x-customer-component :page="true"/>
    </section>

    <section class="section-reviews">
        <x-reviews-component />
    </section>

    <section class="section-bg-black section-tech" id="section-tech">
        <div class="bg-ripples"></div>
        <x-tech-stack-component :page="true" />
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

    <section class="section-bg-black video-case" id="section-case">
        <x-cases-slider-component :page="true"/>
    </section>

    <section class="create">
        <x-form-partner-component />
    </section>

@endsection
