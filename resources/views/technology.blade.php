@push('styles')
    @vite(['resources/css/index.sass'])
@endpush

@extends('__layouts.main')

@section('title', 'Tech Stack')
@section('description',
    'We use the latest technologies to create high-quality products. Check out the technologies we
    use.')

@section('content')
    <div class="section-bg-black stack-header">
        <div class="bg-ripples"></div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home', app()->getLocale()) }}">Home</a></li>
                <li>Tech Stack</li>
            </ul>
            <div class="case-header__content">
                <div class="case-header__info">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number"></p>
                            <h1 class="subtitle-section__text">{{ $translations['tech-stack']['subtitle'] ?? '---' }}</h1>
                        </div>
                        <div class="section-name__title">
                            <div class="h1 section-name__title-text stop-motion-animation">
                                <div class="word">
                                    <div class="word-letter">T</div>
                                    <div class="word-letter">E</div>
                                    <div class="word-letter">C</div>
                                    <div class="word-letter">H</div>
                                </div>
                                <div class="word">
                                    <div class="word-letter">S</div>
                                    <div class="word-letter">T</div>
                                    <div class="word-anim__wrapper">
                                        <div class="word word-anim letter-a"></div>
                                    </div>
                                    <div class="word-letter">C</div>
                                    <div class="word-letter">K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $translations['tech-stack']['description'] ?? '---' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tech-stack__main">
        <x-technology-component />
    </div>

    <section class="create">
        <x-form-contact-component />
    </section>
@endsection
