@push('styles')
    @vite(['resources/css/case.sass'])
@endpush

@extends('__layouts.main')

@section('title', 'Cases')
@section('description',
    'Our cases are the best examples of our work. We are proud of each project we have done. Check
    out our cases and see for yourself.')

@section('content')
    <div class="section-bg-black anim-letter-header">
        <div class="bg-ripples"></div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home', app()->getLocale()) }}">Home</a></li>
                <li>Cases</li>
            </ul>
            <div class="case-header__content">
                <div class="case-header__info">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number"></p>
                            <h1 class="subtitle-section__text">{{ $translations['cases']['subtitle'] ?? '---' }}</h1>
                        </div>
                        <div class="section-name__title">
                            <div class="h1 section-name__title-text stop-motion-animation">
                                <div class="word">
                                    <div class="word-anim__wrapper">
                                        <div class="word word-anim letter-c"></div>
                                    </div>
                                    <div class="word-letter">A</div>
                                    <div class="word-letter">S</div>
                                    <div class="word-letter">E</div>
                                    <div class="word-letter">S</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $translations['cases']['description'] ?? '---' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="case-catalog">
        <x-cases-block-component />
    </div>

    <section class="create">
        <x-form-contact-component />
    </section>
@endsection
