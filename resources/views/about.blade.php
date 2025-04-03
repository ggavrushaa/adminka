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
                        <p>The company has projects implemented over the past 11 years in Ukraine, France, Тhe United
                            Kingdom, Switzerland, Spain, USA.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-mission">
        <div class="container">

            <div class="mission-main">
                <div class="item">
                    <p class="mission-title">OUR GOAL</p>
                    <div class="mission-text">
                        <p>Our goal is to create conditions for the development of various business areas in the online
                            environment and to build a quality infrastructure for the clients of these businesses.</p>
                    </div>
                </div>
                <div class="item">
                    <p class="mission-title">OUR MISSION</p>
                    <div class="mission-text">
                        <p>is to help integrate business functions into the internet for the maximum realization of the
                            potential of companies and people.</p>
                    </div>
                </div>
                <div class="item _orange">
                    <p class="mission-title">
                        "We speed up where a prompt reaction is necessary, save where the budget needs to be used
                        rationally, optimize and improve processes and products where mistakes and losses are unacceptable."
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
                <p>For partnership, it is <span class="marker">important</span> and <span class="marker">valuable</span> to
                    have:</p>
            </div>
            <ol class="about-partner__list">
                <li>
                    <span>01</span>
                    Clear understanding of the task.
                </li>
                <li>
                    <span>02</span>
                    Full interaction in projects.
                </li>
                <li>
                    <span>03</span>
                    Use of modern and appropriate technologies.
                </li>
                <li>
                    <span>04</span>
                    Maximum automation.
                </li>
                <li>
                    <span>05</span>
                    Usefulness for the business and its clients.
                </li>
            </ol>
        </div>
    </section>

    <section class="about-stat">
        <div class="container">
            <div class="section-name">
                <div class="section-name__title">
                    <h2 class="section-name__title-text">Recognition of quality and perseverance</h2>
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
                            Top 10 IT companies of Ukraine, Top 5 IT companies with Yii2 framework, Laravel </p>
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
                            Top B2B Companies Global and Ukraine since 2021. </p>
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
                            The best custom development and web design companies in Ukraine 2022-2023. </p>
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
        <div class="container">
            <h2 class="title">How about becoming partners?</h2>


            <a href="/uploads/files/65e17e71a6676.pdf" class="form-download__item" target="_blank">
                <button class="btn btn-border btn-bg-orange btn-icon icon-download"></button>
                <span>uaitlab presentation</span>
            </a>
            <a href="/form" class="circle-text">
                <svg viewBox="0 0 100 100" class="circle-svg">
                    <defs>
                        <path id="circle" d="M 50, 50m -37, 0a 37,37 0 1,1 74,0a 37,37 0 1,1 -74,0"></path>
                    </defs>
                    <circle class="circle-bg" cx="50%" cy="50%" r="30%" fill="red"></circle>
                    <text>
                        <textPath xlink:href="#circle">
                            Lets get work together - Lets get work together -
                        </textPath>
                    </text>
                </svg>
                <div class="circle-arrow"></div>
            </a>
        </div>

        <div class="marquees">
            <div class="marquee-text">
                <div class="marquee-group">
                    <span class="marquee-grey">high-tech web-products for business.</span>
                </div>
                <div class="marquee-group">
                    <span class="marquee-grey">high-tech web-products for business.</span>
                </div>
            </div>
            <div class="marquee-text">
                <div class="marquee-group reverse_scroll">
                    <span class="marquee-grey">high-tech web-products for business.</span>
                </div>
                <div class="marquee-group reverse_scroll">
                    <span class="marquee-grey">high-tech web-products for business.</span>
                </div>
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
    </section>

@endsection
