@push('styles')
    @vite(['resources/css/index.sass'])
@endpush


@extends('__layouts.main')

@section('title', 'Contact Us')
@section('description', 'Contact us for any questions or inquiries. We are always happy to help you.')

@section('content')

    <div class="section-bg-black partners-header">
        <div class="bg-ripples"></div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home', app()->getLocale()) }}">Home</a></li>
                <li>Ambassador</li>
            </ul>
            <div class="case-header__content">
                <div class="case-header__info">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number"></p>
                            <h1 class="subtitle-section__text">{{ $translations['partneram']['subtitle'] ?? '---' }}</h1>
                        </div>
                        <div class="section-name__title">
                            <div class="h1 section-name__title-text stop-motion-animation">
                                <div class="word">
                                    <div class="word-letter">P</div>
                                    <div class="word-anim__wrapper">
                                        <div class="word word-anim letter-a"></div>
                                    </div>
                                    <div class="word-letter">R</div>
                                    <div class="word-letter">T</div>
                                    <div class="word-letter">N</div>
                                    <div class="word-letter">E</div>
                                    <div class="word-letter">R</div>
                                    <div class="word-letter">S</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $translations['partneram']['description'] ?? '---' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="partners-main">
        <div class="container">
            <div class="desc">
                <p>
                    {{ $translations['partneram']['desc'] ?? '---' }}
                </p>
            </div>
            <ul>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-1.svg" alt="">
                    </div>
                    <p class="partner-name">Master</p>
                    <div class="partner-desc">
                        <p>
                            {{ $translations['partneram']['desc_1'] ?? '---' }}
                        </p>
                    </div>
                </li>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-2.svg" alt="">
                    </div>
                    <p class="partner-name">Вчасно - EDO</p>
                    <div class="partner-desc">
                        <p> 
                            {{ $translations['partneram']['desc_2'] ?? '---' }}
                        </p>
                    </div>
                </li>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-3.svg" alt="">
                    </div>
                    <p class="partner-name">MiroHost</p>
                    <div class="partner-desc">
                        <p>
                            {{ $translations['partneram']['desc_3'] ?? '---' }}
                        </p>
                    </div>
                </li>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-4.svg" alt="">
                    </div>
                    <p class="partner-name">UniTalk</p>
                    <div class="partner-desc">
                        <p>
                            {{ $translations['partneram']['desc_4'] ?? '---' }}
                        </p>
                    </div>
                </li>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-5.svg" alt="">
                    </div>
                    <p class="partner-name">Imena.ua</p>
                    <div class="partner-desc">
                        <p>
                            {{ $translations['partneram']['desc_5'] ?? '---' }}
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <section class="create create-partners">
        <div class="container">
            <h2 class="title">

                {{ $translations['partneram']['title'] ?? '---' }} <strong>{{ $translations['partneram']['title_strong'] ?? '---' }}</strong> 
                {{ $translations['partneram']['title2'] ?? '---' }}
            </h2>

            <form class="form" id="contacts-form" action="{{ route('contacts.store', app()->getLocale()) }}" method="POST">
                @csrf
                <p class="h2 form-title">{{ $translations['partneram']['form_title'] ?? '---' }}</p>

                <div class="form-group required" data-valid="empty,maxlength-45">
                    <label class="form-label" for="name">{{$translations['contacts']['name'] ?? '---'}}</label>
                    <div class="form-control__wrapper">
                        <input class="form-control" type="text" name="name" id="name"
                            placeholder="{{$translations['contacts']['name_placeholder'] ?? '---'}}">
                        <div class="help-block" data-empty="Required field"
                            data-maxlength="Maximum length of characters: 45"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="position">{{$translations['contacts']['position'] ?? '---'}}</label>
                    <input class="form-control" type="text" id="position" placeholder="{{$translations['contacts']['position_placeholder'] ?? '---'}}"
                        name="position">
                    <div class="help-block"></div>
                </div>

                <div class="form-group about-task">
                    <label for="user-task" class="form-label">{{$translations['contacts']['message'] ?? '---'}}</label>
                    <div class="form-control__wrapper">
                        <textarea name="message" id="user-task" class="form-control" rows="3" placeholder="{{$translations['contacts']['message_placeholder'] ?? '---'}}"></textarea>
                    </div>
                    <div class="help-block"></div>
                </div>

                <div class="form-group email required" data-valid="mask">
                    <label class="form-label" for="email">{{$translations['contacts']['email'] ?? '---'}}</label>
                    <div class="form-control__wrapper">
                        <input class="form-control _js-mask-email" type="text" id="email"
                            placeholder="your@company.com" name="email" inputmode="text">
                        <div class="help-block" data-empty="Required field"></div>
                    </div>
                </div>

                <input type="hidden" name="lang" value="{{ app()->getLocale() }}">
                <input type="hidden" name="form_type" value="partners">

                <button type="submit" class="btn btn-primary btn-submit _circle-animation">{{$translations['partneram']['btn'] ?? '---'}}</button>

            </form>

            <div class="mash">
                <a href="https://www.behance.net/uaitlab" class="btn btn-primary btn-icon icon-behance" target="_blank"
                    rel="nofollow"></a>
                <a href="https://www.linkedin.com/company/uaitlab/" class="btn btn-primary btn-icon icon-linkedin"
                    target="_blank" rel="nofollow"></a>
                <a href="https://www.facebook.com/uaitlab/" class="btn btn-primary btn-icon icon-facebook"
                    target="_blank" rel="nofollow"></a>
            </div>

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
