@push('styles')
    @vite(['resources/css/case.sass'])
@endpush

@extends('__layouts.main')

@section('title', 'Cases')
@section('description',
    'Our cases are the best examples of our work. We are proud of each project and are happy to
    share them with you.')

@section('content')
    <div class="section-bg-black case-header">
        <div class="bg-ripples"></div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home', app()->getLocale()) }}">Main</a></li>
                <li><a href="{{ route('cases', app()->getLocale()) }}">Cases</a></li>
                <li>Varto</li>
            </ul>
            <div class="case-header__content">
                <div class="case-header__info">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number"></p>
                            <p class="subtitle-section__text">{{ $translations['cases']['varto_title'] ?? '-----' }}</p>
                        </div>
                        <div class="section-name__title">
                            <h1 class="h1 section-name__title-text">VARTO</h1>
                        </div>
                    </div>
                    <div class="header-description">
                        <p>
                            {{ $translations['cases']['varto_subtitle'] }}
                        </p>
                    </div>
                </div>
                <div class="case-header__img">
                    <picture>
                        <source srcset="/img/case/varto/case-1_768.webp" type="image/webp" media="(min-width: 768px)">
                        <source srcset="/img/case/varto/case-1_768.png" type="image/png" media="(min-width: 768px)">

                        <source srcset="/img/case/varto/case-1_320.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-1_320.png" type="image/png">

                        <img src="/img/case/varto/case-1_320.png" alt="" title="">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <section class="case-banner">
        <div class="container">
            <h2 class="h2 title">
                {{ $translations['cases']['varto_banner_title'] ?? '-----' }}
            </h2>
            <div class="img">
                <picture>
                    <source srcset="/img/case/varto/case-banner_1920.webp" type="image/webp" media="(min-width: 1440px)">
                    <source srcset="/img/case/varto/case-banner_1920.png" type="image/png" media="(min-width: 1440px)">

                    <source srcset="/img/case/varto/case-banner_768.webp" type="image/webp" media="(min-width: 768px)">
                    <source srcset="/img/case/varto/case-banner_768.png" type="image/png" media="(min-width: 768px)">

                    <source srcset="/img/case/varto/case-banner_320.webp" type="image/webp">
                    <source srcset="/img/case/varto/case-banner_320.png" type="image/png">

                    <img src="/img/case/varto/case-banner_320.png" loading="lazy" alt="" title="">
                </picture>
            </div>
        </div>

        <div class="marquees">
            <div class="marquee-text">
                <div class="marquee-group">
                    <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                </div>
                <div class="marquee-group">
                    <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                </div>
            </div>
            <div class="marquee-text">
                <div class="marquee-group reverse_scroll">
                    <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                </div>
                <div class="marquee-group reverse_scroll">
                    <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                </div>
            </div>
            <div class="marquee-text">
                <div class="marquee-group">
                    <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                </div>
                <div class="marquee-group">
                    <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                </div>
            </div>
        </div>
    </section>

    <section class="list-block">
        <div class="container">
            <div class="list-item">
                <p class="h2">{{ $translations['cases']['varto_list_title'] ?? '-----' }}</p>
                <ul>
                    <li>
                        <span>01</span>
                        {{ $translations['cases']['varto_list_subtitle'] ?? '-----' }}
                    </li>
                    <li>
                        <span>02</span>
                        {{ $translations['cases']['varto_list_subtitle_2'] ?? '-----' }}
                    </li>
                </ul>
            </div>

            <div class="list-item">
                <p class="h2">{{ $translations['cases']['varto_list_title_2'] ?? '-----' }}</p>
                <ul>
                    <li>
                        <span>01</span>
                        {{ $translations['cases']['varto_list_subtitle_3'] ?? '-----' }}
                    </li>
                    <li>
                        <span>02</span>
                        {{ $translations['cases']['varto_list_subtitle_4'] ?? '-----' }}
                    </li>
                    <li>
                        <span>03</span>
                        {{ $translations['cases']['varto_list_subtitle_5'] ?? '-----' }}
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="scroll-block _js-photo-scroll" data-animation="angle">
        <div class="scroll-block__wrapper">
            <div class="scroll-item">
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/varto/case-scroll-img-1_1920.webp" media="(min-width: 1440px)"
                            type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-1_1920.png" media="(min-width: 1440px)"
                            type="image/png">

                        <source srcset="/img/case/varto/case-scroll-img-1.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-1.png" type="image/png">

                        <img src="/img/case/varto/case-scroll-img-1.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/varto/case-scroll-img-2_1920.webp" media="(min-width: 1440px)"
                            type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-2_1920.png" media="(min-width: 1440px)"
                            type="image/png">

                        <source srcset="/img/case/varto/case-scroll-img-2.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-2.png" type="image/png">

                        <img src="/img/case/varto/case-scroll-img-2.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/varto/case-scroll-img-3_1920.webp" media="(min-width: 1440px)"
                            type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-3_1920.png" media="(min-width: 1440px)"
                            type="image/png">

                        <source srcset="/img/case/varto/case-scroll-img-3.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-3.png" type="image/png">

                        <img src="/img/case/varto/case-scroll-img-3.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/varto/case-scroll-img-4_1920.webp" media="(min-width: 1440px)"
                            type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-4_1920.png" media="(min-width: 1440px)"
                            type="image/png">

                        <source srcset="/img/case/varto/case-scroll-img-4.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-4.png" type="image/png">

                        <img src="/img/case/varto/case-scroll-img-4.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/varto/case-scroll-img-5_1920.webp" media="(min-width: 1440px)"
                            type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-5_1920.png" media="(min-width: 1440px)"
                            type="image/png">

                        <source srcset="/img/case/varto/case-scroll-img-5.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-5.png" type="image/png">

                        <img src="/img/case/varto/case-scroll-img-5.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/varto/case-scroll-img-6_1920.webp" media="(min-width: 1440px)"
                            type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-6_1920.png" media="(min-width: 1440px)"
                            type="image/png">

                        <source srcset="/img/case/varto/case-scroll-img-6.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-6.png" type="image/png">

                        <img src="/img/case/varto/case-scroll-img-6.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/varto/case-scroll-img-7_1920.webp" media="(min-width: 1440px)"
                            type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-7_1920.png" media="(min-width: 1440px)"
                            type="image/png">

                        <source srcset="/img/case/varto/case-scroll-img-7.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-7.png" type="image/png">

                        <img src="/img/case/varto/case-scroll-img-7.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/varto/case-scroll-img-8_1920.webp" media="(min-width: 1440px)"
                            type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-8_1920.png" media="(min-width: 1440px)"
                            type="image/png">

                        <source srcset="/img/case/varto/case-scroll-img-8.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-8.png" type="image/png">

                        <img src="/img/case/varto/case-scroll-img-8.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/varto/case-scroll-img-9_1920.webp" media="(min-width: 1440px)"
                            type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-9_1920.png" media="(min-width: 1440px)"
                            type="image/png">

                        <source srcset="/img/case/varto/case-scroll-img-9.webp" type="image/webp">
                        <source srcset="/img/case/varto/case-scroll-img-9.png" type="image/png">

                        <img src="/img/case/varto/case-scroll-img-9.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <section class="solution">
        <div class="container">
            <div class="solution-header">
                <h2 class="solution-header__title">{{ $translations['cases']['varto_solution_title'] ?? '---' }}</h2>
            </div>
            <ul class="solution-main">
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">01</span>
                            <p>
                                {{ $translations['cases']['varto_solution_subtitle'] ?? '-----' }}
                            </p>
                        </div>
                    </div>
                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/varto/solution-1_768.webp" type="image/webp"
                                media="(min-width: 768px)">
                            <source srcset="/img/case/varto/solution-1_768.png" type="image/png"
                                media="(min-width: 768px)">

                            <source srcset="/img/case/varto/solution-1_320.webp" type="image/webp">
                            <source srcset="/img/case/varto/solution-1_320.png" type="image/png">

                            <img src="/img/case/varto/solution-1_320.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">02</span>
                            <p>
                                {{ $translations['cases']['varto_solution_subtitle_2'] ?? '-----' }}
                            </p>
                        </div>
                    </div>
                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/varto/solution-2_768.webp" type="image/webp"
                                media="(min-width: 768px)">
                            <source srcset="/img/case/varto/solution-2_768.png" type="image/png"
                                media="(min-width: 768px)">

                            <source srcset="/img/case/varto/solution-2_320.webp" type="image/webp">
                            <source srcset="/img/case/varto/solution-2_320.png" type="image/png">

                            <img src="/img/case/varto/solution-2_320.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">03</span>
                            <p>
                                {{ $translations['cases']['varto_solution_subtitle_3'] ?? '-----' }}
                            </p>
                        </div>
                    </div>
                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/varto/solution-3_768.webp" type="image/webp"
                                media="(min-width: 768px)">
                            <source srcset="/img/case/varto/solution-3_768.png" type="image/png"
                                media="(min-width: 768px)">

                            <source srcset="/img/case/varto/solution-3_320.webp" type="image/webp">
                            <source srcset="/img/case/varto/solution-3_320.png" type="image/png">

                            <img src="/img/case/varto/solution-3_320.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">04</span>
                            <p>
                                {{ $translations['cases']['varto_solution_subtitle_4'] ?? '-----' }}
                            </p>
                        </div>
                    </div>
                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/varto/solution-4_768.webp" type="image/webp"
                                media="(min-width: 768px)">
                            <source srcset="/img/case/varto/solution-4_768.png" type="image/png"
                                media="(min-width: 768px)">

                            <source srcset="/img/case/varto/solution-4_320.webp" type="image/webp">
                            <source srcset="/img/case/varto/solution-4_320.png" type="image/png">

                            <img src="/img/case/varto/solution-4_320.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">05</span>
                            <p>
                                {{ $translations['cases']['varto_solution_subtitle_5'] ?? '-----' }}
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/varto/solution-5_768.webp" type="image/webp"
                                media="(min-width: 768px)">
                            <source srcset="/img/case/varto/solution-5_768.png" type="image/png"
                                media="(min-width: 768px)">

                            <source srcset="/img/case/varto/solution-5_320.webp" type="image/webp">
                            <source srcset="/img/case/varto/solution-5_320.png" type="image/png">

                            <img src="/img/case/varto/solution-5_320.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">06</span>
                            <p>
                                {{ $translations['cases']['varto_solution_subtitle_6'] ?? '-----' }}
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/varto/solution-6_768.webp" type="image/webp"
                                media="(min-width: 768px)">
                            <source srcset="/img/case/varto/solution-6_768.png" type="image/png"
                                media="(min-width: 768px)">

                            <source srcset="/img/case/varto/solution-6_320.webp" type="image/webp">
                            <source srcset="/img/case/varto/solution-6_320.png" type="image/png">

                            <img src="/img/case/varto/solution-6_320.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="section-bg-black additional">
        <div class="bg-ripples"></div>
        <div class="container">
            <h2 class="h2 additional-title">{{ $translations['cases']['varto_additional_title'] ?? '-----' }}</h2>
            <ul class="additional-list">
                <li class="w-100 w-46__1280 w-56__1440 count-gap-3__1440">
                    <span class="number">01</span>
                    <p>
                        {{ $translations['cases']['varto_additional_subtitle'] ?? '-----' }}
                    </p>
                </li>
                <li class="w-50 w-27__1280 w-22__1440 count-gap-3__1440">
                    <span class="number">02</span>
                    <p>
                        {{ $translations['cases']['varto_additional_subtitle_2'] ?? '-----' }}
                    </p>
                </li>
                <li class="w-50 w-27__1280 w-22__1440 count-gap-3__1440">
                    <span class="number">03</span>
                    <p>
                        {{ $translations['cases']['varto_additional_subtitle_3'] ?? '-----' }}
                    </p>
                </li>
                <li class="w-25 w-18__1280 w-14__1440 count-gap-3__1440">
                    <span class="number">04</span>
                    <p>
                        {{ $translations['cases']['varto_additional_subtitle_4'] ?? '-----' }}
                    </p>
                </li>
                <li class="w-25 w-28__1280 w-30__1440 count-gap-3__1440">
                    <span class="number">05</span>
                    <p>
                        {{ $translations['cases']['varto_additional_subtitle_5'] ?? '-----' }}
                    </p>
                </li>
                <li class="w-25 w-27__1280 w-28__1440 count-gap-3__1440">
                    <span class="number">06</span>
                    <p>
                        {{ $translations['cases']['varto_additional_subtitle_6'] ?? '-----' }}
                    </p>
                </li>
                <li class="w-25 w-27__1280 w-28__1440 count-gap-3__1440">
                    <span class="number">07</span>
                    <p>
                        {{ $translations['cases']['varto_additional_subtitle_7'] ?? '-----' }}
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="about-project">
        <div class="container">
            <div class="about-project__list">
                <div class="about-project__item stack">
                    <h2 class="project-title">Tech stack:</h2>
                    <ul class="list stack-list">
                        <li>
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3998_6470)">
                                    <path
                                        d="M22.0481 12.0017C22.0481 10.6064 20.2978 9.28413 17.6142 8.46413C18.2335 5.73366 17.9582 3.5613 16.7454 2.86581C16.4659 2.70266 16.1391 2.62539 15.7821 2.62539V3.58277C15.9799 3.58277 16.1391 3.62141 16.2724 3.69439C16.8573 4.02926 17.111 5.30434 16.9132 6.94434C16.8659 7.3479 16.7884 7.77292 16.6938 8.20654C15.8509 8.00046 14.9306 7.84161 13.9629 7.73858C13.3823 6.94434 12.7803 6.22308 12.1739 5.59198C13.5759 4.29115 14.8919 3.57848 15.7864 3.57848V2.62109C14.6037 2.62109 13.0555 3.46256 11.4901 4.92224C9.92464 3.47115 8.37641 2.63827 7.19374 2.63827V3.59565C8.08397 3.59565 9.40426 4.30403 10.8063 5.59628C10.2042 6.22738 9.60209 6.94434 9.03011 7.73858C8.05816 7.84161 7.13783 8.00046 6.2949 8.21083C6.19599 7.78151 6.12288 7.36507 6.07127 6.9658C5.86914 5.3258 6.11858 4.05073 6.69916 3.71156C6.82818 3.63429 6.99591 3.59994 7.19374 3.59994V2.64256C6.83248 2.64256 6.50564 2.71984 6.22179 2.88298C5.01332 3.57848 4.74238 5.74654 5.36597 8.46842C2.69097 9.29271 0.949219 10.6107 0.949219 12.0017C0.949219 13.397 2.69958 14.7193 5.38317 15.5393C4.76388 18.2698 5.03912 20.4421 6.2519 21.1376C6.53144 21.3008 6.85829 21.378 7.21954 21.378C8.40221 21.378 9.95044 20.5366 11.5159 19.0769C13.0813 20.528 14.6295 21.3609 15.8122 21.3609C16.1735 21.3609 16.5003 21.2836 16.7841 21.1205C17.9926 20.425 18.2636 18.2569 17.64 15.535C20.3064 14.715 22.0481 13.3927 22.0481 12.0017ZM16.4487 9.13816C16.2896 9.69198 16.0917 10.263 15.8681 10.834C15.6918 10.4905 15.5069 10.1471 15.3047 9.8036C15.1069 9.46015 14.8962 9.12528 14.6854 8.799C15.2961 8.88915 15.8853 9.00078 16.4487 9.13816ZM14.479 13.7104C14.1436 14.29 13.7995 14.8395 13.4426 15.3504C12.8018 15.4062 12.1524 15.4363 11.4987 15.4363C10.8493 15.4363 10.1999 15.4062 9.56339 15.3547C9.20643 14.8438 8.85808 14.2986 8.52263 13.7233C8.19578 13.1609 7.89904 12.5899 7.6281 12.0146C7.89474 11.4393 8.19579 10.864 8.51833 10.3016C8.85378 9.72203 9.19783 9.1725 9.55478 8.66161C10.1956 8.6058 10.845 8.57575 11.4987 8.57575C12.1481 8.57575 12.7975 8.6058 13.434 8.65732C13.7909 9.16821 14.1393 9.71345 14.4747 10.2887C14.8016 10.8511 15.0983 11.4221 15.3692 11.9974C15.0983 12.5727 14.8016 13.148 14.479 13.7104ZM15.8681 13.1523C16.1003 13.7276 16.2982 14.3029 16.4616 14.861C15.8982 14.9984 15.3047 15.1143 14.6897 15.2044C14.9005 14.8739 15.1112 14.5347 15.309 14.187C15.5069 13.8435 15.6918 13.4957 15.8681 13.1523ZM11.5073 17.7331C11.1073 17.321 10.7074 16.8616 10.3117 16.3593C10.6988 16.3765 11.0944 16.3894 11.4944 16.3894C11.8986 16.3894 12.2986 16.3808 12.6899 16.3593C12.3029 16.8616 11.9029 17.321 11.5073 17.7331ZM8.3076 15.2044C7.69691 15.1143 7.10772 15.0027 6.54434 14.8653C6.70346 14.3115 6.90129 13.7405 7.12493 13.1695C7.30125 13.5129 7.48618 13.8564 7.68831 14.1998C7.89044 14.5433 8.09687 14.8782 8.3076 15.2044ZM11.4858 6.27031C11.8857 6.68245 12.2857 7.14182 12.6813 7.64413C12.2943 7.62696 11.8986 7.61408 11.4987 7.61408C11.0944 7.61408 10.6945 7.62266 10.3031 7.64413C10.6902 7.14182 11.0901 6.68245 11.4858 6.27031ZM8.3033 8.799C8.09257 9.12957 7.88184 9.46873 7.68401 9.81648C7.48618 10.1599 7.30125 10.5034 7.12493 10.8468C6.89269 10.2716 6.69486 9.69627 6.53144 9.13816C7.09482 9.00507 7.68831 8.88915 8.3033 8.799ZM4.41123 14.1741C2.8888 13.5258 1.90396 12.6757 1.90396 12.0017C1.90396 11.3277 2.8888 10.4733 4.41123 9.82936C4.78108 9.67051 5.18534 9.52884 5.6025 9.39575C5.84764 10.2372 6.17019 11.113 6.57015 12.0103C6.17449 12.9033 5.85624 13.7748 5.61541 14.612C5.18964 14.4789 4.78538 14.3329 4.41123 14.1741ZM6.72497 20.309C6.14008 19.9742 5.88634 18.6991 6.08417 17.0591C6.13148 16.6555 6.20889 16.2305 6.30351 15.7969C7.14643 16.003 8.06677 16.1618 9.03441 16.2649C9.61499 17.0591 10.2171 17.7804 10.8235 18.4115C9.42146 19.7123 8.10547 20.425 7.21094 20.425C7.01741 20.4207 6.85399 20.382 6.72497 20.309ZM16.9261 17.0376C17.1282 18.6776 16.8788 19.9527 16.2982 20.2919C16.1692 20.3691 16.0014 20.4035 15.8036 20.4035C14.9134 20.4035 13.5931 19.6951 12.1911 18.4029C12.7932 17.7718 13.3952 17.0548 13.9672 16.2606C14.9392 16.1575 15.8595 15.9987 16.7024 15.7883C16.8013 16.2219 16.8788 16.6384 16.9261 17.0376ZM18.5818 14.1741C18.212 14.3329 17.8077 14.4746 17.3905 14.6077C17.1454 13.7662 16.8229 12.8904 16.4229 11.9931C16.8186 11.1001 17.1368 10.2286 17.3776 9.39146C17.8034 9.52455 18.2077 9.67051 18.5861 9.82936C20.1085 10.4776 21.0934 11.3277 21.0934 12.0017C21.0891 12.6757 20.1042 13.5301 18.5818 14.1741Z"
                                        fill="#61DAFB"></path>
                                    <path
                                        d="M11.4927 13.964C12.5782 13.964 13.4581 13.0856 13.4581 12.002C13.4581 10.9185 12.5782 10.04 11.4927 10.04C10.4073 10.04 9.52734 10.9185 9.52734 12.002C9.52734 13.0856 10.4073 13.964 11.4927 13.964Z"
                                        fill="#61DAFB"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3998_6470">
                                        <rect width="21.0989" height="24" fill="white"
                                            transform="translate(0.949219)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>ReactNative</p>
                        </li>
                        <li>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3998_5520)">
                                    <path
                                        d="M5.58203 0H6.66016V1.06875H7.65391V0H8.73203V3.23438H7.65391V2.15625H6.66953V3.23438H5.58203M10.157 1.07812H9.20547V0H12.1914V1.07812H11.2352V3.23438H10.157M12.6648 0H13.7945L14.4883 1.13906L15.182 0H16.3117V3.23438H15.2336V1.63125L14.4789 2.79375L13.7242 1.63125V3.23438H12.6648M16.8461 0H17.9242V2.16563H19.4523V3.23438H16.8461"
                                        fill="#373737"></path>
                                    <path d="M5.54297 22.0783L3.99609 4.71582H21.0023L19.4555 22.0689L12.4852 24.0002"
                                        fill="#E44D26"></path>
                                    <path d="M12.5 22.5234V6.14062H19.4516L18.125 20.9531" fill="#F16529"></path>
                                    <path
                                        d="M7.15625 8.26367H12.5V10.3918H9.49063L9.6875 12.5715H12.5V14.6949H7.7375M7.83125 15.7637H9.96875L10.1187 17.4652L12.5 18.1027V20.3246L8.13125 19.1059"
                                        fill="#EBEBEB"></path>
                                    <path
                                        d="M17.8266 8.26367H12.4922V10.3918H17.6297M17.4375 12.5715H12.4922V14.6996H15.1172L14.8688 17.4652L12.4922 18.1027V20.3152L16.8516 19.1059"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3998_5520">
                                        <rect width="24" height="24" fill="white" transform="translate(0.5)">
                                        </rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>HTML5</p>
                        </li>
                        <li>
                            <p>XML</p>
                        </li>

                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3998_8621)">
                                    <path d="M0 12V0H24V24H0" fill="#007ACC"></path>
                                    <path
                                        d="M5.26172 12.0423V13.0203H8.38172V21.9003H10.5957V13.0203H13.7157V12.0603C13.7157 11.5203 13.7157 11.0823 13.6917 11.0703C13.6917 11.0523 11.7897 11.0463 9.47972 11.0463L5.27972 11.0643V12.0483L5.26172 12.0423ZM19.2837 11.0403C19.8957 11.1843 20.3637 11.4603 20.7837 11.8983C21.0057 12.1383 21.3357 12.5583 21.3597 12.6663C21.3597 12.7023 20.3217 13.4043 19.6917 13.7943C19.6677 13.8123 19.5717 13.7103 19.4757 13.5543C19.1637 13.1103 18.8457 12.9183 18.3477 12.8823C17.6277 12.8343 17.1477 13.2123 17.1477 13.8423C17.1477 14.0343 17.1837 14.1423 17.2557 14.2983C17.4177 14.6283 17.7177 14.8263 18.6477 15.2343C20.3637 15.9723 21.1077 16.4583 21.5577 17.1543C22.0677 17.9343 22.1817 19.1583 21.8397 20.0763C21.4557 21.0783 20.5197 21.7563 19.1817 21.9783C18.7617 22.0503 17.8017 22.0383 17.3517 21.9603C16.3917 21.7803 15.4737 21.3003 14.9097 20.6823C14.6877 20.4423 14.2617 19.8003 14.2857 19.7583L14.5137 19.6143L15.4137 19.0923L16.0917 18.6963L16.2477 18.9063C16.4457 19.2183 16.8897 19.6383 17.1477 19.7823C17.9277 20.1843 18.9717 20.1303 19.4877 19.6623C19.7097 19.4583 19.8057 19.2423 19.8057 18.9423C19.8057 18.6663 19.7637 18.5403 19.6257 18.3303C19.4337 18.0663 19.0497 17.8503 17.9697 17.3703C16.7277 16.8423 16.1997 16.5063 15.7077 15.9903C15.4257 15.6783 15.1677 15.1923 15.0477 14.7903C14.9577 14.4423 14.9277 13.5903 15.0117 13.2483C15.2697 12.0483 16.1757 11.2083 17.4717 10.9683C17.8917 10.8843 18.8817 10.9203 19.2957 11.0283L19.2837 11.0403Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3998_8621">
                                        <rect width="24" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>TypeScript</p>
                        </li>

                        <li>
                            <svg width="40" height="20" viewBox="0 0 40 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3998_5328)">
                                    <mask id="mask0_3998_5328" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="-169" y="-45" width="380" height="377">
                                        <path d="M-168.09 331.122H210.657V-44.3722H-168.09V331.122Z" fill="white"></path>
                                    </mask>
                                    <g mask="url(#mask0_3998_5328)">
                                        <path
                                            d="M20.7559 17.0969C19.9828 17.0458 19.0914 16.9115 18.3884 16.7096C18.2567 16.6718 17.7114 16.4731 17.5727 16.41C15.125 15.2859 13.4199 12.8322 13.4199 9.9854C13.4199 6.08081 16.624 2.90036 20.565 2.90036C24.471 2.90036 27.6535 6.02656 27.7082 9.887H30.2895C30.2348 4.61611 25.8949 0.3444 20.565 0.3444C15.2033 0.3444 10.8392 4.66847 10.8392 9.9854C10.8392 13.6509 12.9185 16.8389 15.963 18.4676C16.5127 18.7559 17.3017 19.053 17.5695 19.1344C18.4374 19.3905 19.5025 19.5608 20.4505 19.6321C20.7724 19.656 21.8967 19.6687 22.2243 19.6699H40V17.1209H22.2542C22.0182 17.1209 20.9868 17.1121 20.7559 17.0969ZM22.2542 13.0946C22.0666 13.0946 21.0848 13.0883 20.9035 13.0731C20.5962 13.0473 20.1508 13.0018 19.8645 12.9369C19.5413 12.8511 19.2378 12.7375 19.101 12.6631C18.1421 12.149 17.4887 11.1435 17.4887 9.9854C17.4887 8.30056 18.8649 6.93427 20.565 6.93427C22.2294 6.93427 23.5827 8.24694 23.6368 9.887H26.1169C26.0648 6.89074 23.6012 4.47608 20.565 4.47608C17.4951 4.47608 15.0067 6.94247 15.0067 9.9854C15.0067 12.1313 16.2474 13.9846 18.0543 14.8923C18.3324 15.0538 18.8554 15.2229 19.0043 15.2613C19.5145 15.3944 20.1998 15.4853 20.7559 15.5256C20.9614 15.5427 21.9679 15.5502 22.1804 15.5515V15.5553H39.9994V13.0946H22.2542ZM9.24859 19.6605H6.65013V2.90604H2.85296V0.329262H9.24859V19.6605ZM0 4.19348V6.67123H2.85296V19.6605H5.34962V4.19348H0Z"
                                            fill="#D91920"></path>
                                        <path
                                            d="M35.4075 0.509449C34.4715 0.509449 33.6953 1.24937 33.6953 2.17789C33.6953 3.10641 34.4715 3.87598 35.4075 3.87598C36.372 3.87598 37.1184 3.10641 37.1184 2.17789C37.1184 1.24937 36.372 0.509449 35.4075 0.509449ZM35.4075 3.60221C34.6344 3.60221 33.9683 2.99981 33.9683 2.17789C33.9683 1.3976 34.6344 0.780058 35.4075 0.780058C36.1799 0.780058 36.8429 1.3976 36.8429 2.17789C36.8429 2.99981 36.1799 3.60221 35.4075 3.60221Z"
                                            fill="#D91920"></path>
                                        <path
                                            d="M36.0621 2.63514C36.0621 2.44779 36.0341 2.27369 35.8178 2.20494C36.0888 2.11158 36.1155 1.93559 36.1155 1.82899C36.1155 1.39816 35.7211 1.34328 35.5588 1.34328H34.8125V3.01172H35.1236V2.32731H35.3686C35.7211 2.32731 35.7503 2.48816 35.7503 2.63514C35.7503 2.91962 35.7503 2.97324 35.8178 3.01172H36.1295C36.0621 2.94422 36.0888 2.89187 36.0621 2.63514ZM35.4907 2.08383H35.1236V1.55838H35.4379C35.6555 1.55838 35.8031 1.6265 35.8031 1.82899C35.8031 1.93559 35.7503 2.08383 35.4907 2.08383Z"
                                            fill="#D91920"></path>
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3998_5328">
                                        <rect width="40" height="19.3407" fill="white"
                                            transform="translate(0 0.330078)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>1С</p>
                        </li>
                        <li>
                            <svg width="33" height="24" viewBox="0 0 33 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3998_5552)">
                                    <path
                                        d="M24.3557 17.9867H28.3778V8.49901L23.8463 4.04725L21.0022 6.84135L24.3557 10.1359V17.9865V17.9867ZM28.3885 19.9675H14.3588L11.0051 16.673L12.4273 15.276L15.1971 17.9971H20.896L15.282 12.4714L16.7147 11.064L22.3287 16.5793V10.9804L19.5695 8.26973L20.9809 6.883L14.0086 0.00195312H0L4.01153 3.94293V3.95338H12.3317L15.2714 6.84135L10.9733 11.0638L8.03368 8.17586V5.93431H4.01153V9.81275L10.9733 16.6522L8.13974 19.4358L12.6713 23.8877H32.4L28.3885 19.9675Z"
                                        fill="#231F20"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3998_5552">
                                        <rect width="32.4" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>Websocket</p>
                        </li>
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.54376 12.0173V6.2896C1.53814 6.18877 1.56259 6.08855 1.61399 6.00163C1.6654 5.91471 1.74145 5.845 1.83251 5.80135L11.7123 0.0953497C11.89 -0.0156503 12.0895 -0.0381508 12.2673 0.0728492L22.1913 5.8006C22.2763 5.84955 22.3462 5.92105 22.3932 6.00721C22.4402 6.09337 22.4624 6.19083 22.4575 6.28885V17.7226C22.4624 17.8206 22.4402 17.9181 22.3932 18.0042C22.3462 18.0904 22.2763 18.1619 22.1913 18.2108L13.666 23.1383C13.2193 23.4057 12.7678 23.6647 12.3115 23.9153C12.112 24.0264 11.9118 24.0264 11.7115 23.9153L1.81001 18.2093C1.63226 18.0983 1.54376 17.9648 1.54376 17.7428V12.0151V12.0173Z"
                                    fill="#009438"></path>
                                <path
                                    d="M8.53744 9.88561V16.5606C8.53744 17.3151 7.93744 17.9811 7.13869 17.9594C6.65119 17.9369 6.27319 17.7374 6.01369 17.3159C5.88019 17.1164 5.83594 16.8944 5.83594 16.6499V7.37761C5.83594 6.75511 6.21319 6.31261 6.70144 6.11236C7.18969 5.91211 7.67794 5.95711 8.16694 6.11236C8.63344 6.24586 8.98819 6.53386 9.29194 6.88936L15.1974 13.9716C15.2199 13.9941 15.2424 14.0391 15.2859 14.0826V7.33261C15.2859 6.62236 15.7734 6.06736 16.4634 6.00061C17.3289 5.88961 17.9064 6.51061 17.9949 7.15561V16.6056C17.9949 17.1306 17.7504 17.5161 17.3064 17.7606C16.9734 17.9384 16.6179 17.9826 16.2414 17.9601C15.6968 17.9239 15.1804 17.7048 14.7759 17.3384C14.5539 17.1389 14.3987 16.8944 14.1984 16.6724L8.58094 9.94486C8.58094 9.92236 8.55844 9.89986 8.53594 9.87736L8.53744 9.88561Z"
                                    fill="#FEFEFE"></path>
                            </svg>
                            <p>Nginx</p>
                        </li>
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.2167 0.113838C15.8405 0.336495 15.2151 0.964698 14.4688 1.87683L15.1547 3.17162C15.6363 2.4833 16.1258 1.86365 16.6187 1.33464C16.4569 1.51036 15.9751 2.07544 15.2445 3.19821C15.9478 3.16352 17.0294 3.01879 17.911 2.8685C18.1734 1.39868 17.6536 0.725856 17.6536 0.725856C17.6536 0.725856 16.9917 -0.343731 16.2167 0.113838Z"
                                    fill="url(#paint0_linear_3998_8597)"></path>
                                <path d="M13.9104 10.986L13.6406 11.0334L13.7793 11.0119L13.913 10.9854L13.9104 10.986Z"
                                    fill="#BE202E"></path>
                                <path opacity="0.35"
                                    d="M13.9104 10.986L13.6406 11.0334L13.7793 11.0119L13.913 10.9854L13.9104 10.986Z"
                                    fill="#BE202E"></path>
                                <path d="M14.1367 9.85409L14.1783 9.84716L14.3501 9.81641L14.1367 9.85294V9.85409Z"
                                    fill="#BE202E"></path>
                                <path opacity="0.35"
                                    d="M14.1367 9.85409L14.1783 9.84716L14.3501 9.81641L14.1367 9.85294V9.85409Z"
                                    fill="#BE202E"></path>
                                <path
                                    d="M13.1311 6.51669L13.7639 5.37565L14.4358 4.25705L14.4756 4.193L15.153 3.17243L14.467 1.87695L14.3109 2.06955L13.6973 2.86261L12.9683 3.87301L12.2747 4.90028L11.6602 5.87022L12.5526 7.63321L13.1306 6.51645L13.1311 6.51669Z"
                                    fill="url(#paint1_linear_3998_8597)"></path>
                                <path
                                    d="M9.06558 16.4511L8.65357 17.6021L8.34375 18.5006C8.60733 18.6208 8.81773 18.9367 9.01726 19.2946C8.99769 18.9163 8.8299 18.5609 8.55022 18.3055C9.8466 18.3633 10.9633 18.0363 11.5407 17.0881C11.5932 17.002 11.6403 16.9127 11.6819 16.8209C11.4195 17.1538 11.094 17.2948 10.4796 17.2611C10.478 17.2611 10.4773 17.2611 10.4755 17.2634C10.4771 17.2634 10.4778 17.2634 10.4796 17.2611C11.3814 16.8574 11.8341 16.4696 12.2336 15.8276C12.3343 15.6639 12.428 15.4959 12.5143 15.3242C11.7263 16.1339 10.8119 16.3647 9.84937 16.1896L9.12801 16.2683C9.10812 16.3288 9.08569 16.3894 9.06327 16.4532L9.06558 16.4511Z"
                                    fill="url(#paint2_linear_3998_8597)"></path>
                                <path
                                    d="M9.39835 14.8339L9.87996 13.6115L10.3655 12.4224L10.8737 11.2247L11.4124 10.0081L11.9654 8.81802L12.1698 8.39444L12.5277 7.67028L12.5476 7.63213L11.6552 5.86914L11.6089 5.9385L10.9937 6.98243L10.3925 8.07606L9.90585 9.02403L9.81198 9.21663L9.28298 10.3727L8.80554 11.5778L8.55584 12.3038L8.37734 12.9003L8.03516 14.298L8.93108 16.0702L9.29639 15.107L9.40113 14.8346L9.39835 14.8339Z"
                                    fill="url(#paint3_linear_3998_8597)"></path>
                                <path
                                    d="M8.02214 14.3624C7.90931 14.9289 7.82954 15.4935 7.78954 16.0549L7.78538 16.1138C7.50793 15.6653 6.75559 15.2269 6.75744 15.232C7.29384 16.01 7.70169 16.7825 7.76134 17.5407C7.47395 17.5996 7.08043 17.5141 6.62542 17.3471C7.09939 17.7832 7.45591 17.9034 7.59649 17.9358C7.15835 17.9631 6.70749 18.2595 6.25086 18.6068C6.92136 18.3344 7.45915 18.2264 7.84619 18.3136C7.23002 20.0468 6.61501 21.9658 6 24.0005C6.18843 23.945 6.30057 23.8185 6.36461 23.6467C6.47421 23.2779 7.20158 20.8597 8.34097 17.6826L8.46629 17.333L8.84084 16.3125L8.92963 16.075C8.93055 16.0727 8.93055 16.0718 8.93125 16.0699L8.03532 14.2988L8.02214 14.3619V14.3624Z"
                                    fill="url(#paint4_linear_3998_8597)"></path>
                                <path
                                    d="M12.6909 7.78091L12.6136 7.93952L12.3787 8.42784L12.1189 8.97998L11.9859 9.26737L11.5799 10.1691L11.065 11.3552L10.5594 12.5702L10.0669 13.8017L9.61835 14.9651L9.13281 16.2703L9.85418 16.1917L9.81117 16.1845C10.674 16.0766 11.8215 15.4322 12.5632 14.6359C12.9045 14.2687 13.2152 13.8359 13.5019 13.3295C13.7153 12.9527 13.9181 12.5342 14.1065 12.0717C14.2735 11.6671 14.4337 11.2297 14.5881 10.7548C14.3898 10.8595 14.1627 10.9358 13.9121 10.989L13.7785 11.0121C13.7327 11.0202 13.6867 11.0274 13.6407 11.0336C14.4471 10.7238 14.9544 10.1268 15.3232 9.392C15.1114 9.53651 14.7676 9.72494 14.3549 9.81627C14.298 9.82876 14.2407 9.83902 14.1831 9.84702L14.1398 9.85396H14.1415C14.4205 9.73673 14.6564 9.60656 14.8582 9.45211C14.9044 9.41882 14.9447 9.38275 14.9854 9.34992C15.0477 9.2962 15.1072 9.23941 15.1639 9.17974C15.2003 9.14162 15.2355 9.1023 15.2693 9.06183C15.3491 8.96634 15.4247 8.86345 15.4943 8.752C15.516 8.7175 15.537 8.68258 15.5574 8.64726L15.6346 8.49536C15.7336 8.29738 15.825 8.0957 15.9086 7.89074C15.9442 7.80288 15.9779 7.72057 16.0024 7.64403L16.0332 7.55617C16.0614 7.47155 16.0848 7.39594 16.103 7.32959C16.1308 7.23017 16.1493 7.15109 16.1562 7.09375C16.1285 7.11525 16.0972 7.13699 16.0623 7.1578C15.8191 7.303 15.4022 7.43525 15.0667 7.49652C15.0617 7.49652 15.0568 7.49883 15.0517 7.49883L14.9505 7.51548C14.9562 7.51317 14.962 7.5097 14.9678 7.50716L12.7008 7.75548C12.6976 7.76473 12.6934 7.77282 12.6892 7.7786L12.6909 7.78091Z"
                                    fill="url(#paint5_linear_3998_8597)"></path>
                                <path
                                    d="M15.2439 3.19885L14.5845 4.2578L14.547 4.32092L13.8968 5.45848L13.2795 6.61269L12.7031 7.75719L14.9701 7.50887C15.6302 7.20483 15.9259 6.93015 16.2124 6.53223L16.4408 6.18935L17.106 5.0275L17.61 3.91884L17.8103 3.31839L17.909 2.86914C17.0288 3.01943 15.9467 3.16394 15.2432 3.19885H15.2439Z"
                                    fill="url(#paint6_linear_3998_8597)"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_3998_8597" x1="15.05" y1="2.0359"
                                        x2="20.0748" y2="0.638742" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F69923"></stop>
                                        <stop offset="0.312" stop-color="#F79A23"></stop>
                                        <stop offset="0.838" stop-color="#E97826"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_3998_8597" x1="4.05043" y1="24.5887"
                                        x2="14.2711" y2="2.66994" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.323" stop-color="#9E2064"></stop>
                                        <stop offset="0.63" stop-color="#C92037"></stop>
                                        <stop offset="0.751" stop-color="#CD2335"></stop>
                                        <stop offset="1" stop-color="#E97826"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_3998_8597" x1="7.48273" y1="22.9681"
                                        x2="13.5734" y2="9.90678" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#282662"></stop>
                                        <stop offset="0.095" stop-color="#662E8D"></stop>
                                        <stop offset="0.788" stop-color="#9F2064"></stop>
                                        <stop offset="0.949" stop-color="#CD2032"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_3998_8597" x1="4.41861" y1="23.2621"
                                        x2="14.6395" y2="1.34332" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.323" stop-color="#9E2064"></stop>
                                        <stop offset="0.63" stop-color="#C92037"></stop>
                                        <stop offset="0.751" stop-color="#CD2335"></stop>
                                        <stop offset="1" stop-color="#E97826"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_3998_8597" x1="5.46106" y1="21.8026"
                                        x2="10.8324" y2="10.2837" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#282662"></stop>
                                        <stop offset="0.095" stop-color="#662E8D"></stop>
                                        <stop offset="0.788" stop-color="#9F2064"></stop>
                                        <stop offset="0.949" stop-color="#CD2032"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint5_linear_3998_8597" x1="6.68849" y1="24.3197"
                                        x2="16.9091" y2="2.401" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.323" stop-color="#9E2064"></stop>
                                        <stop offset="0.63" stop-color="#C92037"></stop>
                                        <stop offset="0.751" stop-color="#CD2335"></stop>
                                        <stop offset="1" stop-color="#E97826"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint6_linear_3998_8597" x1="5.94309" y1="25.6278"
                                        x2="16.1637" y2="3.70929" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.323" stop-color="#9E2064"></stop>
                                        <stop offset="0.63" stop-color="#C92037"></stop>
                                        <stop offset="0.751" stop-color="#CD2335"></stop>
                                        <stop offset="1" stop-color="#E97826"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <p>Apache</p>
                        </li>
                        <li>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3998_5544)">
                                    <path
                                        d="M13.1054 21.0772C13.6088 20.4577 14.1594 19.8805 14.6519 19.2476C15.2303 18.5046 15.8923 17.8257 16.5179 17.1203C16.5711 17.0598 16.6437 17.0138 16.6861 16.9484C17.0285 16.4233 17.4775 15.9864 17.8865 15.5181C18.0523 15.3281 18.2193 15.1466 18.3076 14.9058C18.3524 14.6469 18.6283 14.6565 18.7747 14.5089C19.5491 13.7272 19.7573 12.764 19.6278 11.7257C19.5382 11.0069 18.5883 9.97593 17.8768 9.70245C17.5706 9.78111 17.5053 9.51973 17.4738 9.34548C17.4266 9.07926 17.2609 8.90864 17.1338 8.69687C16.6195 7.83772 15.6648 7.61506 14.9665 7.52793C14.877 7.51704 14.7596 7.53035 14.6906 7.58118C14.4982 7.71913 14.3639 7.65257 14.2308 7.50252C13.8291 7.04753 13.3051 6.77889 12.769 6.51388C12.2269 6.24645 11.6594 6.28881 11.104 6.336C10.8026 6.36141 10.5038 6.53324 10.2279 6.6845C9.96164 6.83092 9.7172 7.02212 9.48365 7.21815C9.04681 7.58602 8.79028 8.07973 8.6366 8.61459C8.55915 8.88444 8.48291 9.04659 8.17918 9.14703C7.88513 9.24383 7.62133 9.47496 7.38053 9.68793C6.91223 10.0994 6.47781 10.5447 6.26483 11.1546C6.26241 11.1606 6.32896 11.3663 6.30839 11.3663C5.91633 11.6592 5.84735 12.0742 5.51095 12.4179C5.3246 12.6079 5.02086 12.8305 4.83935 13.0253C4.47149 13.421 4.34685 13.9135 3.86402 14.2028C2.93226 13.9208 1.80083 13.4961 0.870276 13.2093C0.734747 13.1669 0.63552 13.0834 0.63673 12.9116C0.64157 12.2666 0.64036 11.6204 0.63794 10.9755C0.63794 10.7806 0.772259 10.7383 0.919889 10.6633C1.33979 10.4479 3.40903 9.81862 3.48406 9.74723C3.55545 9.67946 3.9088 8.55287 3.91243 8.42824C3.91727 8.26608 3.84829 8.12934 3.74181 8.01197C3.45865 7.69855 2.5886 6.37956 2.32359 6.12303C2.19169 5.99597 2.16991 5.8798 2.26671 5.70555C2.60675 5.02064 3.09925 4.464 3.58086 3.86985C4.22221 4.08161 6.20312 4.72417 6.36527 4.74474C6.55041 4.76773 6.70046 4.61042 6.84204 4.51845C7.1131 4.34299 7.36238 4.13244 7.65038 3.91462V0.815597C8.34255 0.43079 9.13515 0.327933 9.90234 0C10.5255 0.782924 11.1451 1.58642 11.7393 2.43832H13.2591C13.5241 2.06077 15.2763 0 15.2763 0C15.2763 0 16.6945 0.43684 17.3371 0.644975C17.3371 1.59852 17.3395 2.52545 17.3347 3.45116C17.3347 3.66171 17.3613 3.79845 17.5985 3.90857C17.8901 4.0441 18.1309 4.28733 18.4092 4.49546C18.9622 4.5717 19.4632 4.30064 19.9872 4.13607C20.4869 3.97997 20.9855 3.82266 21.5034 3.6605C22.0746 4.11429 22.4013 4.78951 22.8551 5.3643C22.9483 5.48168 22.9204 5.60148 22.8248 5.73701C22.607 6.04437 22.4316 6.38198 22.2174 6.69298C21.9136 7.13466 21.5966 7.56666 21.2771 7.99745C21.1428 8.17896 21.2711 8.37136 21.3522 8.54319C21.4647 8.78158 21.5446 9.02844 21.6232 9.27892C21.6825 9.4677 21.8628 9.5403 22.0407 9.59113C22.5114 9.72545 22.9761 9.88276 23.442 10.034C23.7518 10.1357 24.5528 10.5144 24.5528 10.5144L24.6291 10.8375L24.4439 12.8487C24.4439 12.8487 23.6065 13.1706 23.1866 13.3146C22.6917 13.484 22.1944 13.6425 21.7648 13.8337C21.6196 14.2971 21.4853 14.7255 21.3473 15.1684C21.9415 15.9804 22.5526 16.8153 23.1673 17.6563C22.7171 18.3425 22.3081 19.037 21.7503 19.6312C21.0569 19.3964 18.788 18.7696 18.6815 18.8398C18.2955 19.0963 17.9373 19.3928 17.5767 19.6675V22.7193C16.9583 23.017 15.6151 23.38 15.6151 23.38"
                                        fill="#0283C6"></path>
                                    <path
                                        d="M7.91709 22.8304V19.8403C7.64966 19.6539 7.40038 19.5099 7.18741 19.3248C6.88973 19.0646 6.6223 18.9557 6.20603 19.1263C5.55138 19.395 4.85437 19.5632 4.17914 19.7822C3.77255 19.9141 3.69148 19.908 3.47487 19.6104C3.18324 19.2098 2.90371 18.7984 2.61692 18.393C2.40395 18.0905 2.40032 17.8957 2.59635 17.6089C3.02593 16.9809 3.43736 16.3395 3.88872 15.7272C4.03998 15.5215 4.04482 15.3702 3.97585 15.1415C3.86815 14.7821 3.80281 14.4675 3.66728 14.0585C4.02667 13.716 5.68933 11.4036 6.20845 11.1543C5.95555 12.4418 6.25807 13.5914 7.16926 14.6163C7.44516 14.9455 7.54075 15.1355 7.93524 15.3255C8.30674 15.5045 8.64072 15.7538 9.09208 15.6885C9.41638 15.9305 9.65961 15.7913 10.0033 15.8494C10.3433 15.5542 10.877 15.8821 11.0718 16.0902C11.3925 16.4327 11.6599 16.6856 12.0592 16.901C12.9813 17.3657 13.8284 17.0922 14.7311 16.6602C15.1691 16.4496 15.3543 16.0878 15.7064 15.7732C15.9266 15.5759 16.2243 15.3303 16.3139 15.0266C16.9564 15.0738 17.6631 15.1621 18.2488 14.908C18.2657 14.9007 18.2887 14.908 18.3093 14.908C18.221 15.1476 18.054 15.3291 17.8882 15.5203C17.4792 15.9898 17.0302 16.4254 16.6878 16.9506C16.6442 17.0172 16.5728 17.0631 16.5196 17.1224C15.8928 17.8279 15.232 18.5068 14.6536 19.2498C14.1611 19.8814 13.6105 20.4598 13.1071 21.0794H12.6836C12.0423 21.0794 12.0241 21.0673 11.6986 21.5889C11.2944 22.235 10.4074 23.473 10.4074 23.473"
                                        fill="#0376A6"></path>
                                    <path
                                        d="M18.3071 14.9049C18.3077 14.9054 18.3074 14.9063 18.3067 14.9065C18.2876 14.9104 18.2643 14.9002 18.2478 14.9061C17.7009 15.1433 17.183 15.2353 16.5936 15.2703C16.5392 15.274 16.4835 15.2776 16.4375 15.3054C16.3867 15.3369 16.3577 15.3926 16.3286 15.4458C15.5372 16.9197 13.537 17.8696 11.9554 17.071C11.5561 16.8556 11.1398 16.6571 10.8191 16.3159C10.3448 15.8088 9.54853 16.1767 8.85999 16.0073C6.57535 15.4482 5.78638 13.2858 6.20507 11.1536C6.21963 11.0943 6.24874 11.0398 6.27019 10.9827C6.49759 10.3766 6.86904 9.8403 7.37401 9.44742C7.77939 9.1328 8.48245 9.14006 8.63371 8.61246C8.97979 7.40601 10.0858 6.48393 11.3261 6.32419C11.9639 6.24191 12.6294 6.26853 13.2163 6.54322C14.3985 7.09623 14.0839 7.73273 14.5752 7.57784C14.6878 7.54275 14.9382 7.47135 15.0568 7.47619C15.7115 7.50645 16.4375 7.78114 16.9058 8.23613C17.356 8.67418 17.3499 9.36272 17.8775 9.70517C18.7113 10.2461 19.4022 10.7495 19.6201 11.7974C19.8234 12.7739 19.5765 13.8533 18.8807 14.5552C18.7345 14.7025 18.6209 14.833 18.3076 14.9033C18.3069 14.9035 18.3066 14.9044 18.3071 14.9049ZM15.6883 13.9183C15.6884 13.9186 15.6886 13.9187 15.6889 13.9188C16.128 14.0096 16.5175 14.2539 16.9772 14.1789C17.4613 14.0917 17.8848 13.8909 18.1861 13.4867C18.393 13.2096 18.3906 12.8502 18.5322 12.5416C18.5879 12.4206 18.4596 12.2209 18.4305 12.0552C18.2841 11.2008 17.7517 10.8112 16.9216 10.6757C16.5682 10.6188 16.4787 10.5897 16.498 10.2691C16.538 9.61199 16.1278 9.22477 15.6849 8.86295C15.5784 8.77583 15.4017 8.74436 15.2565 8.74073C14.8124 8.72863 14.355 8.66934 13.9629 8.97307C13.9254 9.00211 13.9278 9.07351 13.7838 8.9767C13.4559 8.75646 13.4172 8.23855 13.1255 7.99895C12.5604 7.53307 11.9251 7.21845 11.1265 7.51613C10.11 7.89488 9.90793 8.42611 9.78208 9.51761C9.73972 9.88426 9.63082 10.0113 9.25811 10.0997C8.61556 10.2521 8.35781 10.4349 7.96695 11.0036C7.62087 11.5058 7.12594 12.0031 7.17314 12.6045C7.21912 13.1926 7.3365 13.7469 7.81327 14.1546C7.87377 14.2067 7.93307 14.2636 7.98389 14.3253C8.47156 14.9182 9.68285 15.2328 10.4295 14.9122C10.8065 14.75 11.2187 15.0632 11.476 15.383C12.0892 16.1455 13.1669 16.458 14.1142 16.0993C14.5147 15.948 14.9298 15.7023 15.1536 15.2994C15.388 14.8777 15.5923 14.4331 15.6869 13.9186C15.687 13.9178 15.688 13.9177 15.6883 13.9183Z"
                                        fill="#F4FAFA"></path>
                                    <path
                                        d="M15.6695 14.03C15.6695 14.0301 15.6695 14.0301 15.6695 14.0302C15.4505 15.2209 14.6784 16.2627 13.3631 16.2567C11.9171 16.2494 11.7549 15.8053 11.1825 15.1543C10.7638 14.6787 10.5 15.1168 9.9664 15.1797C9.07457 15.285 8.11134 14.6593 7.60068 13.92C6.75363 12.693 7.21951 10.9468 8.48889 10.2208C8.92331 9.97269 9.54045 10.0586 9.60337 9.5056C9.71833 8.51091 10.3173 7.5985 11.3713 7.44361C12.9353 7.21449 13.1881 7.97651 13.6977 8.8132C13.7597 8.91495 13.8727 9.04488 13.9669 8.97195C14.5272 8.53632 15.5788 8.54237 16.0894 8.99736C16.7429 9.57941 16.4222 9.88677 16.6279 10.2655C16.9002 10.7677 17.2293 10.6588 17.6928 10.9468C18.4321 11.4091 18.8569 12.1387 18.3184 13.2423C17.7801 14.3455 16.659 14.2335 15.6706 14.0291C15.6701 14.029 15.6695 14.0294 15.6695 14.03Z"
                                        fill="#0283C6"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3998_5544">
                                        <rect width="24" height="24" fill="white" transform="translate(0.5)">
                                        </rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>REST API</p>
                        </li>
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 11.9463C0 15.2896 5.37269 18 12 18C18.6273 18 24 15.2896 24 11.9463C24 8.60293 18.6273 5.89251 12 5.89251C5.37269 5.89251 0 8.60293 0 11.9463Z"
                                    fill="url(#paint0_radial_3998_5489)"></path>
                                <path
                                    d="M12 17.5508C18.3684 17.5508 23.5312 15.0416 23.5312 11.9465C23.5312 8.85137 18.3684 6.3422 12 6.3422C5.63154 6.3422 0.46875 8.85137 0.46875 11.9465C0.46875 15.0416 5.63154 17.5508 12 17.5508Z"
                                    fill="#777BB3"></path>
                                <path
                                    d="M6.51571 12.6409C7.03937 12.6409 7.4303 12.5483 7.67765 12.3657C7.92235 12.185 8.09136 11.872 8.17995 11.4353C8.26254 11.0272 8.23108 10.7422 8.08646 10.5884C7.93859 10.4313 7.61888 10.3516 7.13624 10.3516H6.2994L5.83546 12.6409H6.51571ZM3.77861 15.4609C3.73976 15.4609 3.70287 15.4443 3.67818 15.4155C3.65344 15.3867 3.64341 15.3488 3.65083 15.3123L4.88034 9.24552C4.89224 9.18687 4.94584 9.1445 5.00817 9.1445H7.65807C8.49088 9.1445 9.11076 9.36136 9.50039 9.78913C9.8921 10.2191 10.0131 10.8202 9.85989 11.5757C9.79757 11.8834 9.69036 12.1693 9.54127 12.4252C9.39201 12.6814 9.19475 12.9184 8.95486 13.1299C8.66771 13.3876 8.34271 13.5745 7.98976 13.6845C7.64241 13.793 7.19631 13.848 6.66389 13.848H5.59089L5.28447 15.3599C5.27257 15.4186 5.21902 15.4609 5.15669 15.4609H3.77861Z"
                                    fill="black"></path>
                                <path
                                    d="M6.40804 10.4766H7.13755C7.72006 10.4766 7.9224 10.5992 7.99115 10.6722C8.10522 10.7935 8.12674 11.0493 8.05344 11.4118C7.97106 11.8176 7.81837 12.1053 7.59953 12.2669C7.37549 12.4323 7.01125 12.5162 6.51702 12.5162H5.99472L6.40804 10.4766ZM7.65938 9.01976H5.00943C4.88478 9.01976 4.77762 9.1045 4.75383 9.22184L3.52432 15.2886C3.50948 15.3618 3.52953 15.4375 3.57897 15.4951C3.62844 15.5526 3.70214 15.5859 3.77992 15.5859H5.15796C5.28265 15.5859 5.38981 15.5012 5.4136 15.3839L5.69953 13.973H6.6652C7.21129 13.973 7.67102 13.9159 8.03147 13.8033C8.40218 13.6878 8.74324 13.492 9.0451 13.2212C9.29475 13.001 9.5004 12.7537 9.65621 12.4863C9.81207 12.2188 9.92405 11.9204 9.98902 11.5996C10.1503 10.8044 10.0193 10.1677 9.59974 9.70714C9.18429 9.25102 8.53143 9.01976 7.65938 9.01976ZM5.67879 12.7659H6.51702C7.07262 12.7659 7.48647 12.6656 7.75839 12.4648C8.03035 12.264 8.21377 11.9289 8.30908 11.4593C8.40027 11.0084 8.35873 10.6903 8.18447 10.5049C8.00999 10.3195 7.66108 10.2269 7.13755 10.2269H6.19337L5.67879 12.7659ZM7.65938 9.2695C8.45656 9.2695 9.03811 9.47013 9.40365 9.87143C9.76915 10.2727 9.87921 10.8329 9.73338 11.552C9.67336 11.8482 9.57184 12.1191 9.42891 12.3645C9.28581 12.61 9.09896 12.8345 8.86806 13.0381C8.59289 13.285 8.2872 13.461 7.95083 13.5658C7.61446 13.6709 7.18603 13.7233 6.6652 13.7233H5.48482L5.15796 15.3362H3.77992L5.00943 9.2695H7.65938Z"
                                    fill="white"></path>
                                <path
                                    d="M13.0204 13.8477C12.9815 13.8477 12.9447 13.831 12.92 13.8022C12.8952 13.7734 12.8852 13.7356 12.8926 13.699L13.4365 11.0147C13.4882 10.7594 13.4754 10.5762 13.4006 10.4988C13.3547 10.4514 13.2171 10.3721 12.81 10.3721H11.8247L11.1408 13.7466C11.129 13.8053 11.0754 13.8477 11.013 13.8477H9.64584C9.60695 13.8477 9.5701 13.831 9.54536 13.8022C9.52062 13.7734 9.5106 13.7356 9.51802 13.699L10.7475 7.63224C10.7594 7.57359 10.813 7.53122 10.8754 7.53122H12.2425C12.2814 7.53122 12.3183 7.54787 12.343 7.57663C12.3678 7.60544 12.3778 7.64327 12.3704 7.6799L12.0737 9.14415H13.1336C13.9411 9.14415 14.4887 9.28068 14.8076 9.56155C15.1327 9.84809 15.2342 10.3062 15.1092 10.9234L14.5371 13.7466C14.5252 13.8053 14.4717 13.8477 14.4093 13.8477H13.0204Z"
                                    fill="black"></path>
                                <path
                                    d="M12.2438 7.40648H10.8767C10.752 7.40648 10.6448 7.49122 10.621 7.60856L9.39151 13.6753C9.37666 13.7485 9.39672 13.8242 9.4462 13.8818C9.49567 13.9394 9.56937 13.9727 9.64715 13.9727H11.0143C11.139 13.9727 11.2462 13.8879 11.27 13.7706L11.9333 10.4971H12.8113C13.2177 10.4971 13.303 10.5803 13.3064 10.5839C13.331 10.6093 13.3635 10.7271 13.3099 10.991L12.7661 13.6753C12.7512 13.7485 12.7713 13.8242 12.8208 13.8818C12.8702 13.9394 12.9439 13.9727 13.0217 13.9727H14.4106C14.5352 13.9727 14.6425 13.8879 14.6662 13.7706L15.2382 10.9474C15.3725 10.2847 15.2576 9.78762 14.8971 9.46978C14.553 9.16671 13.9766 9.0194 13.1349 9.0194H12.2329L12.4995 7.70388C12.5143 7.63066 12.4943 7.55491 12.4448 7.49738C12.3953 7.43982 12.3216 7.40648 12.2438 7.40648ZM12.2438 7.65622L11.917 9.26915H13.1349C13.9013 9.26915 14.4299 9.39743 14.7208 9.65367C15.0118 9.91007 15.0989 10.3255 14.9826 10.8998L14.4106 13.7229H13.0217L13.5656 11.0387C13.6275 10.7333 13.6047 10.525 13.4973 10.414C13.3898 10.3029 13.1611 10.2473 12.8113 10.2473H11.7186L11.0143 13.7229H9.64715L10.8767 7.65622H12.2438Z"
                                    fill="white"></path>
                                <path
                                    d="M17.2735 12.6409C17.7972 12.6409 18.1881 12.5483 18.4355 12.3657C18.6802 12.1851 18.8492 11.872 18.9378 11.4353C19.0204 11.0272 18.9889 10.7422 18.8443 10.5884C18.6964 10.4313 18.3767 10.3516 17.8941 10.3516H17.0572L16.5933 12.6409H17.2735ZM14.5365 15.4609C14.4976 15.4609 14.4607 15.4443 14.436 15.4155C14.4113 15.3867 14.4012 15.3488 14.4086 15.3123L15.6382 9.24552C15.6501 9.18687 15.7036 9.1445 15.766 9.1445H18.4159C19.2487 9.1445 19.8686 9.36136 20.2582 9.78913C20.6499 10.2191 20.7709 10.8202 20.6177 11.5757C20.5553 11.8834 20.4482 12.1693 20.2991 12.4252C20.1498 12.6814 19.9526 12.9184 19.7127 13.1299C19.4255 13.3876 19.1005 13.5745 18.7476 13.6845C18.4002 13.793 17.9541 13.848 17.4217 13.848H16.3487L16.0424 15.3599C16.0304 15.4186 15.9769 15.4609 15.9145 15.4609H14.5365Z"
                                    fill="black"></path>
                                <path
                                    d="M17.1658 10.4766H17.8953C18.4778 10.4766 18.6802 10.5992 18.7489 10.6722C18.863 10.7935 18.8846 11.0493 18.8112 11.4117C18.7288 11.8176 18.5761 12.1053 18.3573 12.2669C18.1333 12.4323 17.769 12.5162 17.2748 12.5162H16.7525L17.1658 10.4766ZM18.4172 9.01976H15.7672C15.6426 9.01976 15.5354 9.1045 15.5116 9.22184L14.2821 15.2886C14.2673 15.3618 14.2873 15.4375 14.3368 15.4951C14.3863 15.5526 14.46 15.5859 14.5377 15.5859H15.9158C16.0404 15.5859 16.1476 15.5012 16.1714 15.3839L16.4573 13.973H17.423C17.9691 13.973 18.4288 13.9159 18.7892 13.8033C19.1599 13.6878 19.5011 13.4919 19.803 13.2212C20.0526 13.0009 20.2582 12.7537 20.414 12.4863C20.5698 12.2188 20.6818 11.9204 20.7468 11.5996C20.908 10.8044 20.777 10.1676 20.3575 9.70709C19.9421 9.25102 19.2892 9.01976 18.4172 9.01976ZM16.4366 12.7659H17.2748C17.8304 12.7659 18.2442 12.6656 18.5162 12.4648C18.7882 12.264 18.9715 11.9289 19.0668 11.4593C19.1581 11.0084 19.1165 10.6903 18.9422 10.5049C18.7678 10.3195 18.4188 10.2269 17.8953 10.2269H16.9511L16.4366 12.7659ZM18.4172 9.2695C19.2143 9.2695 19.7959 9.47013 20.1614 9.87143C20.527 10.2727 20.637 10.8329 20.4912 11.552C20.4311 11.8482 20.3296 12.1191 20.1867 12.3645C20.0436 12.61 19.8567 12.8345 19.6258 13.0381C19.3507 13.285 19.045 13.461 18.7086 13.5658C18.3722 13.6709 17.9438 13.7233 17.423 13.7233H16.2426L15.9158 15.3362H14.5377L15.7672 9.2695H18.4172Z"
                                    fill="white"></path>
                                <defs>
                                    <radialGradient id="paint0_radial_3998_5489" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(7.20485 8.02082) scale(15.7577 15.1119)">
                                        <stop stop-color="#AEB2D5"></stop>
                                        <stop offset="0.3" stop-color="#AEB2D5"></stop>
                                        <stop offset="0.75" stop-color="#484C89"></stop>
                                        <stop offset="1" stop-color="#484C89"></stop>
                                    </radialGradient>
                                </defs>
                            </svg>
                            <p>Php</p>
                        </li>
                        <li>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.3457 5.47697C20.8267 5.49 20.5204 5.7162 20.4198 6.14782C20.5529 6.26369 20.7319 6.31414 20.9105 6.30638C21.3027 6.28975 21.6914 5.99092 21.5813 5.48445C21.4987 5.47752 21.42 5.47475 21.3457 5.47697ZM24.0186 4H23.9723C23.6022 4.01192 23.5449 4.21262 22.7456 4.40944C21.9384 4.6082 21.1586 4.4172 20.2895 4.78201C17.6939 5.87061 17.1409 9.6254 14.7818 10.9579C13.0187 11.954 11.3132 12.3961 9.71426 12.897C8.66306 13.2263 7.62072 13.6056 6.66821 14.4261C5.92887 15.0637 5.72567 15.5585 4.95584 16.3583C4.16993 17.1713 1.75316 15.7323 0.575826 16.7852C0.551612 16.8073 0.532341 16.8343 0.519277 16.8643C0.506212 16.8944 0.499648 16.9269 0.500015 16.9597C0.500381 16.9925 0.507669 17.0248 0.521403 17.0546C0.535136 17.0844 0.555005 17.1109 0.579707 17.1325C0.834746 17.3557 1.31987 17.8871 1.78172 18.0512C1.63535 18.3284 0.807856 19.145 0.976681 19.5536C1.1541 19.9833 3.2055 19.6914 5.10166 18.5465C5.98459 18.0132 6.68817 17.2448 8.06371 17.0615C9.84344 16.8245 11.894 17.214 13.9546 17.5106C13.6488 18.4215 13.0356 19.0278 12.5441 19.756C12.3916 19.9201 12.8499 19.9384 13.3718 19.8392C14.3144 19.6069 14.9886 19.4198 15.7005 19.0075C16.5718 18.5003 16.704 17.2001 17.7724 16.9191C18.2891 17.7133 19.5743 17.9808 20.5651 17.5566C20.6199 17.5333 20.6737 17.5076 20.7264 17.4804C20.8456 17.3764 20.7757 17.255 20.7026 17.1658C20.6677 17.1335 20.6342 17.0999 20.6022 17.0649C20.0444 16.4655 19.9169 15.0507 20.1642 14.3626C20.4461 13.5798 20.7247 12.3271 21.0086 11.2925C21.3135 10.1837 21.4261 8.78019 21.7951 8.21386C22.3501 7.36227 22.9635 7.06981 23.4961 6.58941C24.0286 6.10901 24.5162 5.64135 24.4996 4.5425C24.4918 4.20347 24.3252 4.00832 24.0186 4ZM24.0752 5.15402C23.9651 5.91191 23.4808 6.32856 22.9086 6.73051C22.4097 7.08257 21.8569 7.42159 21.5032 7.97157C21.1414 8.53431 20.9116 10.4623 20.3499 12.3659C19.8842 13.9454 19.1901 15.5081 18.0027 16.2607C17.9257 16.3095 17.8239 16.2648 17.8076 16.1775C17.7244 15.7362 17.7411 14.9301 17.6041 15.1907C17.4322 15.6813 17.2376 16.1492 17.01 16.5842C16.3115 17.9192 15.3007 18.9418 13.6676 19.3424C13.6387 19.349 13.6085 19.3466 13.581 19.3357C13.5534 19.3248 13.5298 19.3058 13.5133 19.2812C13.4967 19.2566 13.488 19.2276 13.4882 19.1979C13.4885 19.1683 13.4977 19.1394 13.5146 19.1151C14.2681 18.07 14.9423 16.9459 15.0246 15.2303C15.0315 15.0823 14.8455 15.0146 14.7521 15.1294C14.3962 15.5682 14.3086 16.6116 13.7882 16.9329C13.3796 16.9773 12.9657 16.9773 12.5491 16.9523C10.8386 16.8497 9.08331 16.3352 7.48322 16.8489C6.39376 17.1988 5.24969 18.1934 4.32684 18.5934C3.24237 19.0608 2.72841 19.5043 1.35896 19.4738C1.21897 19.2853 1.93058 18.4695 2.17231 18.1174C2.24938 18.0046 2.08444 17.886 1.93003 17.8125C1.55911 17.6423 1.18709 17.1805 0.7915 17.0003C0.842231 16.9069 1.02159 16.8134 1.12056 16.7563C2.01874 16.2352 4.40058 17.3451 5.04039 16.7167C5.43543 16.3292 5.70155 15.9887 5.9699 15.594C6.23048 15.2114 6.62635 14.8073 7.03635 14.4721C7.21044 14.3327 7.38984 14.2 7.57415 14.0743C8.27274 13.5964 8.65723 13.5609 9.56179 13.225C10.7128 12.797 12.138 12.4216 13.3727 11.9498C14.1356 11.6579 14.965 11.2984 15.6411 10.7938C15.8019 10.6741 15.9536 10.5463 16.0941 10.4096C18.0246 8.52461 18.4075 5.20752 21.4167 4.89816C21.7809 4.86073 22.0398 4.84493 22.3115 4.83634C22.6153 4.82802 22.9158 4.75318 23.2161 4.60958C23.3087 4.56911 23.8603 4.23535 24.0466 4.39669C24.1708 4.50424 24.0785 5.08749 24.0705 5.15069"
                                    fill="#444B5E"></path>
                            </svg>
                            <p>MariaDB</p>
                        </li>
                        <li>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3998_5556)">
                                    <path
                                        d="M15.0773 8.669L12.6772 10.9038L10.4492 6.40794L11.6002 3.82289C11.8911 3.30724 12.3668 3.30043 12.6577 3.82289L15.0773 8.669Z"
                                        fill="#FFA000"></path>
                                    <path d="M12.6771 10.9021L3.69922 19.2527L10.4492 6.40723L12.6771 10.9021Z"
                                        fill="#F57F17"></path>
                                    <path
                                        d="M17.708 5.2511C18.138 4.8415 18.5807 4.97965 18.6926 5.56146L21.0266 19.1405L13.2852 23.7881C13.0138 23.9399 12.2938 23.9993 12.2938 23.9993C12.2938 23.9993 11.6391 23.9195 11.388 23.7813L3.69922 19.2534L17.708 5.2511Z"
                                        fill="#FFCA28"></path>
                                    <path
                                        d="M10.4492 6.40814L3.69922 19.2536L6.70743 0.47819C6.82028 -0.103616 7.1501 -0.162964 7.4478 0.352684L10.4492 6.40814Z"
                                        fill="#FFA000"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3998_5556">
                                        <rect width="17.3274" height="24" fill="white"
                                            transform="translate(3.69922)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>FireBase</p>
                        </li>
                        <li>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.3607 1.33666C13.597 1.09571 12.7786 0.963867 11.933 0.963867C9.46438 0.963867 7.25489 2.07771 5.77734 3.83257L9.57349 7.02406L14.3607 1.33666Z"
                                    fill="#1A73E8"></path>
                                <path
                                    d="M5.77669 3.83301C4.55963 5.27855 3.89294 7.10791 3.89453 8.99758C3.89453 10.5069 4.19459 11.7344 4.69013 12.8301L9.57284 7.0245L5.77669 3.83301Z"
                                    fill="#EA4335"></path>
                                <path
                                    d="M11.9331 5.929C12.5191 5.92953 13.0928 6.09752 13.5866 6.41318C14.0804 6.72883 14.4736 7.179 14.7201 7.71069C14.9666 8.24237 15.0561 8.83341 14.9779 9.41422C14.8998 9.99502 14.6573 10.5414 14.279 10.989L19.0617 5.30161C18.08 3.41023 16.3875 1.98597 14.3563 1.3418L9.57812 7.0292C9.86603 6.68441 10.2262 6.40714 10.6332 6.21702C11.0401 6.02689 11.4839 5.92856 11.9331 5.929Z"
                                    fill="#4285F4"></path>
                                <path
                                    d="M11.9336 12.0747C10.2379 12.0747 8.86035 10.6972 8.86035 9.00141C8.85836 8.27936 9.11293 7.58009 9.57866 7.02832L4.69141 12.8339C5.52792 14.6843 6.91454 16.1709 8.34207 18.044L14.2795 10.9881C13.9911 11.329 13.6317 11.6028 13.2265 11.7904C12.8214 11.9781 12.3801 12.0751 11.9336 12.0747Z"
                                    fill="#FBBC04"></path>
                                <path
                                    d="M14.1584 19.9674C16.8408 15.7757 19.964 13.8708 19.964 8.99721C19.964 7.6606 19.6367 6.40129 19.0593 5.29199L8.34375 18.0443C8.79838 18.6399 9.25755 19.2718 9.70309 19.9719C11.3307 22.4906 10.8806 23.9999 11.9308 23.9999C12.981 23.9999 12.5309 22.486 14.1584 19.9674Z"
                                    fill="#34A853"></path>
                            </svg>
                            <p>GoogleMap</p>
                        </li>
                        <li>
                            <p>smsTurbo</p>
                        </li>
                    </ul>
                </div>
                <div class="about-project__item team">
                    <h2 class="project-title">Команда</h2>
                    <ul class="list">
                        <li class="full-width">Business Analyst</li>
                        <li class="full-width">Project Manager</li>
                        <li>Designer</li>
                        <li class="full-width">System Architect</li>
                        <li>2 Front-end Developers</li>
                        <li class="full-width">1C Developer</li>
                        <li class="full-width">2 Back-end Developers</li>
                        <li>QA</li>
                    </ul>
                </div>
                <div class="about-project__item timing">
                    <h2 class="project-title">{{ $translations['cases']['timing'] ?? '-----' }}</h2>
                    <ul class="list">
                        <li>526 {{ $translations['cases']['days'] ?? '-----' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="section-bg-black project-pagination">
        <div class="bg-ripples"></div>
        <div class="container">
            <div class="project-pagination__elem project-pagination__prev">
                <a href="" class="arrow"></a>
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number"></p>
                        <p class="subtitle-section__text">E-commerce</p>
                    </div>
                    <div class="section-name__title">
                        <p class="h1 section-name__title-text">Plytkar</p>
                    </div>
                </div>
            </div>
            <div class="project-pagination__elem project-pagination__current">
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number"></p>
                        <p class="subtitle-section__text">Mobile App</p>
                    </div>
                    <div class="section-name__title">
                        <p class="h1 section-name__title-text">VARTO</p>
                    </div>
                </div>
            </div>
            <div class="project-pagination__elem project-pagination__next">
                <a href="" class="arrow"></a>
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number"></p>
                        <p class="subtitle-section__text">portal</p>
                    </div>
                    <div class="section-name__title">
                        <p class="h1 section-name__title-text">Активна громада</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="create">
      <x-form-contact-component />
    </section>
@endsection
