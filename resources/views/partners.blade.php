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
                            <h1 class="subtitle-section__text">Ambassador</h1>
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
                            We are pleased to introduce our partners who participate in our projects and help develop our
                            community.
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
                    Our partners are professional and talented Ukrainian companies from various industries who share our
                    values and strive for success in the innovative sphere. They not only support our mission, but also
                    help us find new opportunities and perspectives for development.
                </p>
            </div>
            <ul>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-1.svg" alt="">
                    </div>
                    <p class="partner-name">Master</p>
                    <div class="partner-desc">
                        <p>A platform for accounting and management accounting. 100% Ukrainian solution.</p>
                    </div>
                </li>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-2.svg" alt="">
                    </div>
                    <p class="partner-name">Вчасно - EDO</p>
                    <div class="partner-desc">
                        <p> Instant document exchange service that allows you to sign, send, receive and store documents
                            online.</p>
                    </div>
                </li>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-3.svg" alt="">
                    </div>
                    <p class="partner-name">MiroHost</p>
                    <div class="partner-desc">
                        <p>Аn undisputed TOP hosting provider in the Ukrainian market.</p>
                    </div>
                </li>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-4.svg" alt="">
                    </div>
                    <p class="partner-name">UniTalk</p>
                    <div class="partner-desc">
                        <p>А platform for business communications. IP telephony and virtual PBX, call tracking, call
                            recording, call back buttons and widgets for the website, various types of phone calls and
                            routing</p>
                    </div>
                </li>
                <li>
                    <div class="partner-img">
                        <img src="/img/partners/partner-5.svg" alt="">
                    </div>
                    <p class="partner-name">Imena.ua</p>
                    <div class="partner-desc">
                        <p>А domain name registrar in any zone. A TOP domain name registrar in Ukraine.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <section class="create create-partners">
        <div class="container">
            <h2 class="title">

                Join us to <strong>become a part of our community</strong> and discover the world of innovation and
                technology with us!
            </h2>

            <form class="form" id="contacts-form" action="/contacts">
                <p class="h2 form-title">Get Lets work together</p>

                <div class="form-group required" data-valid="empty,maxlength-45">
                    <label class="form-label" for="name">My full name is</label>
                    <div class="form-control__wrapper">
                        <input class="form-control" type="text" name="name" id="name"
                            placeholder="Write your name">
                        <div class="help-block" data-empty="Required field"
                            data-maxlength="Maximum length of characters: 45"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="position">I’m</label>
                    <input class="form-control" type="text" id="position" placeholder="Owner, CEO, project, etc"
                        name="message">
                    <div class="help-block"></div>
                </div>

                <div class="form-group about-task">
                    <label for="user-task" class="form-label">I need</label>
                    <div class="form-control__wrapper">
                        <textarea name="message" id="user-task" class="form-control" rows="3" placeholder="Write your message.."></textarea>
                    </div>
                    <div class="help-block"></div>
                </div>

                <div class="form-group email required" data-valid="mask">
                    <label class="form-label" for="email">I will wait for your reply to this email:</label>
                    <div class="form-control__wrapper">
                        <input class="form-control _js-mask-email" type="text" id="email"
                            placeholder="your@company.com" name="email" inputmode="text">
                        <div class="help-block" data-empty="Required field"></div>
                    </div>
                </div>

                <input type="hidden" name="_csrf"
                    value="vbJs2eAZ1jmRJdGBGNEWCGRUtFVcD9GxCgbozoEXFdjVyzWpmFOkWPJouOwqu1hQIxnBZzF6tdxSTJuNy00m7g==">
                <input type="hidden" name="token" id="token"
                    value="HFNGc4Jx4eVjY-A3INGk0cGw4zdnRTQWFoZBdHZ2R5Njx6QBIsN1wkUSEfMj0YdRJpJQQLUBRLHVIAfTI9LHQ9FSFCOm1gJTQ-LkUNcXNzTAh0SiIrSkUcOD0dJUUNBgNLSnt6QRs8MUlrHmhpN3NdH3AbPDA6FmsBI2YYeAY-FyE-VzJLNhZcQG8">
                <input type="hidden" name="lang" value="en">

                <button type="submit" class="btn btn-primary btn-submit _circle-animation">Send Message</button>

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
