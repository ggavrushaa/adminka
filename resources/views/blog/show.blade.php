@push('styles')
    @vite(['resources/css/blog.sass'])
@endpush

@extends('__layouts.main')

@section('title', 'Blog page')
@section('description', 'Blog page')

@section('content')
    <div class="blog-page">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home', app()->getLocale()) }}">Home</a></li>
                <li><a href="/blog/">blog</a></li>
                <li>{{ $article->localized_name }}</li>
            </ul>

            <div class="page-wrapper">
                <div class="post">
                    <h1 class="h1">
                        {{ $article->localized_name }}
                    </h1>
                    <div class="post-info">
                        <p class="post-date">{{$article->created_at}}</p>
                        @foreach($article->tags as $tag)
                            <p class="post-tag">{{$tag->name}}</p>
                        @endforeach
                    </div>

                    <div class="post-img">
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

                    <div class="post-text editor-blog">
                       {{ trim($article->localized_text, "</p>") }}
                    </div>
                </div>
                <div class="sidebar">
                    <p class="h4 sidebar-title">Читай також</p>

                    <div class="list">
                        @foreach($articles as $a)
                        <a href="{{ route('blog.show', [app()->getLocale(), $a->id]) }}" class="blog-card">
                            <div class="img">
                                <picture>
                                    <source srcset="{{ $a->image }}" type="image/webp"
                                        media="(min-device-width: 768px)">
                                    <source srcset="{{ $a->image }}" type="image/jpeg"
                                        media="(min-device-width: 768px)">

                                    <source srcset="{{ $a->image }}" type="image/webp">
                                    <source srcset="{{ $a->image }}" type="image/jpeg">

                                    <img src="{{ $a->image }}" loading="lazy" alt="" title="">
                                </picture>
                            </div>
                            <div class="info">
                                <p class="date">{{$a->created_at}}</p>
                                @foreach ($a->tags as $tag )
                                    <p class="tag">
                                        {{ $tag->name }}
                                    </p>
                                @endforeach
                                <p class="title">{{$article->localized_name}}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-bg-black video-case" id="section-case">
        <x-cases-slider-component />
    </section>

    <section class="section-bg-black video-case section-services section-services__slider" id="section-case">
        <div class="container">
            <div class="bg-ripples"></div>
            <div class="case-top">
                <div class="section-name">

                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number">03</p>
                        <p class="subtitle-section__text">Сервіси на цю тему</p>
                    </div>

                    <div class="section-name__title">
                        <h2 class="h2 section-name__title-text">Сервіси на цю тему</h2>
                    </div>
                    <div class="btn-wrapper">
                        <a href="/" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">дивитись всі
                            сервіси</a>
                    </div>
                </div>
                <div class="swiper-arrows">
                    <button type="button" class="icon-arrow-left swiper-btn case-btn-prev"></button>
                    <button type="button" class="icon-arrow-right swiper-btn case-btn-next"></button>
                </div>
            </div>
            <div class="swiper case-swiper services-cards">
                <div class="swiper-wrapper">

                    @foreach ($article->services as $service )
                    <div class="swiper-slide">
                        <div class="card-flipper js-card-flipper">
                            <div class="card-flipper__content">
                                <div class="card-flipper__front card-front">
                                    <h3 class="h4 card__title"> {{ $service->localized_name }} </h3>
                                    <div class="card-front__bg">
                                        <picture>
                                            <source srcset="{{ $service->seo_image }}" type="image/webp"
                                                media="(min-device-width: 1440px)">
                                            <source srcset="{{ $service->seo_image }}" type="image/jpeg"
                                                media="(min-device-width: 1440px)">

                                            <source srcset="{{ $service->seo_image }}" type="image/webp"
                                                media="(min-device-width: 1024px)">
                                            <source srcset="{{ $service->seo_image }}" type="image/jpeg"
                                                media="(min-device-width: 1024px)">

                                            <source srcset="{{ $service->seo_image }}" type="image/webp"
                                                media="(min-device-width: 768px)">
                                            <source srcset="{{ $service->seo_image }}" type="image/jpeg"
                                                media="(min-device-width: 768px)">

                                            <source srcset="{{ $service->seo_image }}" type="image/webp">
                                            <source srcset="{{ $service->seo_image }}" type="image/jpeg">

                                            <img src="{{ $service->seo_image }}" loading="lazy"
                                                alt="" title="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="card-flipper__back">
                                    <h3 class="h4 card__title"> {{ $service->localized_name }} </h3>
                                    <div class="card__description">
                                        <p>
                                            {{ $service->localized_seo_desc }}
                                        </p>
                                    </div>
                                    @foreach($service->category as $name)
                                    <div class="tags">
                                        <p class="tag">{{$name}}</p>
                                    </div>
                                    @endforeach
                                    <div class="btn-wrapper">
                                        <a href="/services/mobile"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">find out more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="create">
        <x-form-partner-component />
    </section>

@endsection
