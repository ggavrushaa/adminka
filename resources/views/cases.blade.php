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
                <li><a href="/">Home</a></li>
                <li>Cases</li>
            </ul>
            <div class="case-header__content">
                <div class="case-header__info">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number"></p>
                            <h1 class="subtitle-section__text">what we do</h1>
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
                        <p>We provide custom software development services using the following proven technologies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="case-catalog">
        <x-cases-block-component />
    </div>

    <section class="create">
        <div class="container">
            <h2 class="title">Let’s create your next project</h2>


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
