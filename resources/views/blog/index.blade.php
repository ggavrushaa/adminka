@push('styles')
    @vite(['resources/css/blog.sass'])
@endpush

@extends('__layouts.main')

@section('title', 'Blog')
@section('description', 'Blog')

@section('content')
    <div class="section-bg-black anim-letter-header">
        <div class="bg-ripples"></div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Blog</li>
            </ul>
            <div class="case-header__content">
                <div class="case-header__info">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number"></p>
                            <h1 class="subtitle-section__text">{{ $translations['blog']['blog_title'] }}</h1>
                        </div>
                        <div class="section-name__title">
                            <div class="h1 section-name__title-text stop-motion-animation">
                                <div class="word">
                                    <div class="word-letter">B</div>
                                    <div class="word-letter">L</div>
                                    <div class="word-anim__wrapper">
                                        <div class="word word-anim letter-o"></div>
                                    </div>
                                    <div class="word-letter">G</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $translations['blog']['blog_description'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-catalog">
        <div class="container">
            <x-blog-filter-component />
            <x-blog-articles-component />
        </div>
    </div>
@endsection
