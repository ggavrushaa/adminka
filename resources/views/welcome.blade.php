@vite(['resources/css/index.sass'])


@extends('__layouts.main')

@section('title', 'UAITLAB')
@section('description', 'UAITLAB')

@section('content')
    <section class="section-bg-black home-header js_fixed_header-trigger _en">
        <div class="bg-ripples"></div>
        <div class="container">
            <div class="section-name">
                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">01</p>
                    <p class="subtitle-section__text">Hello</p>
                </div>
                <div class="section-name__title">
                    <h1 class="h1 section-name__title-text">
                        We Create <span class="glitch" data-text="High-tech">High-tech</span>
                        Web- Products </h1>
                </div>
            </div>
            <div class="home-header__images">
                <a href="https://clutch.co/profile/uaitlab#reviews" target="_blank">
                    <img src="/img/home/header-image-1__new.svg" alt="">
                </a>
                <a href="https://it-rating.ua/uaitlab" target="_blank">
                    <img src="/img/home/header-image-2.svg" alt="">
                </a>
            </div>

            <!--        <div class="header-canvas"></div>-->
        </div>
    </section>

    <section class="section-bg-white section-who">
        <div class="container">
            <div class="section-name section-name__blue">
                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">02</p>
                    <p class="subtitle-section__text">Who we are</p>
                </div>
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">IT-partner of top companies in Ukraine and the world since 2013.
                        We're good at automation and building web apps.</h2>
                </div>
            </div>
            <div class="who-statistics">
                <div class="who-statistics__item statistics-item">
                    <p class="statistics-item__title">team members</p>
                    <p class="statistics-item__number">15+</p>
                </div>
                <div class="who-statistics__item statistics-item">
                    <p class="statistics-item__title">clients worldwide</p>
                    <p class="statistics-item__number">30+</p>
                </div>
                <div class="who-statistics__item statistics-item">
                    <p class="statistics-item__title">projects completed</p>
                    <p class="statistics-item__number">90+</p>
                </div>
                <div class="who-statistics__item statistics-item">
                    <p class="statistics-item__title">ua rating</p>
                    <p class="statistics-item__number">Top 10</p>
                </div>
            </div>
            <div class="who-features">
                <p class="h3">Features</p>
                <div class="who-feature__content content-feature">
                    <div class="content-feature__thumb feature-thumb">
                        <div class="feature-thumb__fraction">
                            <p class="thumb-number thumb-number__start">01</p>
                            <p class="thumb-separator">/</p>
                            <p class="thumb-number thumb-number__end">03</p>
                        </div>
                        <div class="feature-thumb__items">
                            <div class="feature-thumb__item active" data-index="1">
                                <p class="thumb-number">01</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">Maximum immersion</p>
                            </div>
                            <div class="feature-thumb__item" data-index="2">
                                <p class="thumb-number">02</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">Experience in various industries</p>
                            </div>
                            <div class="feature-thumb__item" data-index="3">
                                <p class="thumb-number">03</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">Long-term IT partnership</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper content-feature__main feature-main">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p class="feature-main__title">Maximum immersion</p>
                                <div class="feature-main__text">
                                    <p>We are the most meticulous of all our competitors, so be prepared for questions.</p>

                                    <p> </p>

                                    <p>The superpower of the team - we immerse ourselves in business processes, sometimes in
                                        the business model, we understand the problems and give solutions, how to automate /
                                        scale / solve the client's request with web technologies.</p>

                                    <p> </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <p class="feature-main__title">Experience in various industries</p>
                                <div class="feature-main__text">
                                    <p>Industry knowledge and experience allow us to effectively solve the problems of
                                        companies, bringing maximum benefit.<br />
                                    </p>

                                    <p>Over the years, we have implemented projects in various business areas: consulting,
                                        retail, real estate, telecom, finance, insurance, business services, education,
                                        automotive, booking&tickets, beauty, music&entertainment, rent service,
                                        architecture&design construction, hotel industry.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <p class="feature-main__title">Long-term IT partnership</p>
                                <div class="feature-main__text">
                                    <p>As they say - No man is an island. In our opinion - with partners you will win faster
                                        and grander. We work together with you for your business, not just winning your
                                        tasks. We are involved in the process as much as possible, we argue with you, show
                                        our thoughts, together with you we will find the best solution and the best
                                        technologies. This type of cooperation is the most effective, and it is thanks to
                                        this that our customers stay with us for a long time.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg-black video-case" id="section-case">
        <div class="container">
            <div class="bg-ripples"></div>
            <div class="case-top">
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number">03</p>
                        <p class="subtitle-section__text">what we do</p>
                    </div>
                    <div class="section-name__title">
                        <h2 class="h2 section-name__title-text">Cases</h2>
                    </div>
                    <div class="btn-wrapper">
                        <a href="/cases" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">view all Cases</a>
                    </div>
                </div>
                <div class="swiper-arrows">
                    <button type="button" class="icon-arrow-left swiper-btn case-btn-prev"></button>
                    <button type="button" class="icon-arrow-right swiper-btn case-btn-next"></button>
                </div>
            </div>
            <div class="swiper case-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="video">
                            <video autoplay="" playsinline="" loop="" muted="">
                                <source src="/uploads/cases/65d4c5b9008d5.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="info">
                            <p class="info-type">Mobile App</p>
                            <p class="info-name">Varto</p>


                            <a href="/cases/varto" class="btn btn-primary btn-icon icon-arrow-right-top btn-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video">
                            <video autoplay="" playsinline="" loop="" muted="">
                                <source src="/uploads/cases/6757094ddeb9e.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="info">
                            <p class="info-type">E-commerce</p>
                            <p class="info-name">Agromat</p>


                            <a href="https://www.agromat.ua/" class="btn btn-primary btn-icon icon-link-blank btn-link"
                                target="_blank"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video">
                            <video autoplay="" playsinline="" loop="" muted="">
                                <source src="/uploads/cases/65d4c6d9c8e42.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="info">
                            <p class="info-type">E-commerce</p>
                            <p class="info-name">VENTS</p>


                            <a href="https://ventilation-system.com/"
                                class="btn btn-primary btn-icon icon-link-blank btn-link" target="_blank"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video">
                            <video autoplay="" playsinline="" loop="" muted="">
                                <source src="/uploads/cases/65d4c9a4a9d96.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="info">
                            <p class="info-type">E-commerce</p>
                            <p class="info-name">Yözh. Basic clothes</p>


                            <a href="https://yozh.com.ua/" class="btn btn-primary btn-icon icon-link-blank btn-link"
                                target="_blank"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video">
                            <video autoplay="" playsinline="" loop="" muted="">
                                <source src="/uploads/cases/65ccdbee489af.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="info">
                            <p class="info-type">Portal</p>
                            <p class="info-name">Active community</p>


                            <a href="https://ag.com.ua/" class="btn btn-primary btn-icon icon-link-blank btn-link"
                                target="_blank"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video">
                            <video autoplay="" playsinline="" loop="" muted="">
                                <source src="/uploads/cases/660ff7ca146f1.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="info">
                            <p class="info-type">Corporate website</p>
                            <p class="info-name">Brand. Alla Zadneprovska</p>


                            <a href="https://allazadneprovska.com/"
                                class="btn btn-primary btn-icon icon-link-blank btn-link" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="common-background">
        <section class="section-bg-black section-tech" id="section-tech">
            <div class="bg-ripples"></div>
            <div class="container">
                <div class="tech-top">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number">04</p>
                            <p class="subtitle-section__text">what we use</p>
                        </div>
                        <div class="section-name__title">
                            <h2 class="h2 section-name__title-text">Tech stack</h2>
                        </div>
                        <div class="btn-wrapper">
                            <a href="/tech-stack" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">view all
                                technologies</a>
                        </div>
                    </div>
                    <div class="tech-description">
                        <p>We provide custom software development services using the following proven technologies.</p>
                        <div class="btn-wrapper">
                            <a href="/tech-stack" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">view all
                                technologies</a>
                        </div>
                    </div>
                </div>
                <div class="tab-block js-tab">
                    <div class="tab-block__navigation">
                        <button type="button" class="icon-arrow-left js-btn-prev"></button>
                        <button type="button" class="icon-arrow-right js-btn-next"></button>
                    </div>
                    <div class="tab-top">
                        <div class="tab-top__wrapper">
                            <button type="button" class="tab-top__item js-tab-btn active" tabindex="0"
                                title="Frameworks" data-index="0">
                                Frameworks </button>
                            <button type="button" class="tab-top__item js-tab-btn active" tabindex="1"
                                title="Languages" data-index="1">
                                Languages </button>
                            <button type="button" class="tab-top__item js-tab-btn active" tabindex="2" title="Tools"
                                data-index="2">
                                Tools </button>
                            <button type="button" class="tab-top__item js-tab-btn active" tabindex="3"
                                title="Technologies" data-index="3">
                                Technologies </button>
                            <button type="button" class="tab-top__item js-tab-btn active" tabindex="4"
                                title="Applications and bases" data-index="4">
                                Applications and bases </button>
                            <button type="button" class="tab-top__item js-tab-btn active" tabindex="5"
                                title="Integration" data-index="5">
                                Integration </button>
                            <button type="button" class="tab-top__item js-tab-btn active" tabindex="6" title="Design"
                                data-index="6">
                                Design </button>
                            <div class="scrollbar js-scrollbar">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-bottom">
                        <div class="tab-bottom__wrapper">
                            <div class="tab-bottom__item _js-tab-0 active">
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4803cd4e9f.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4803cd4d6b.svg" alt="Laravel">
                                    </div>
                                    Laravel
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d48051bd8a1.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d48051bd57a.svg" alt="Yii2">
                                    </div>
                                    Yii2
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35bc362297.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35bc36215c.svg" alt="Vue.js">
                                    </div>
                                    Vue.js
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35bdc1fb03.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35bdc1ef68.svg" alt="Bootstrap">
                                    </div>
                                    Bootstrap
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d354692ab49.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d354692a63c.svg" alt="Reactnative">
                                    </div>
                                    Reactnative
                                </div>
                            </div>
                            <div class="tab-bottom__item _js-tab-1 ">
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35bfb2407c.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4806164fea.svg" alt="PHP">
                                    </div>
                                    PHP
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35c0fd86b3.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35c0fd842a.svg" alt="JavaScript">
                                    </div>
                                    JavaScript
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d49d588c0ba.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d49d588bf05.svg" alt="Typescript">
                                    </div>
                                    Typescript
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4a917e5822.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4a917e56ab.svg" alt="Solidity">
                                    </div>
                                    Solidity
                                </div>
                            </div>
                            <div class="tab-bottom__item _js-tab-2 ">
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4985ddf721.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d345d5c2f4d.svg" alt="jQuery">
                                    </div>
                                    jQuery
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d34612a8a0c.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d34612a80ae.svg" alt="CSS3">
                                    </div>
                                    CSS3
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d346690784e.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d346690778a.svg" alt="SASS">
                                    </div>
                                    SASS
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d346a2dacbe.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d346a2dabb5.svg" alt="LESS">
                                    </div>
                                    LESS
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d34783001f6.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d34782f4094.svg" alt="Gulp">
                                    </div>
                                    Gulp
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d347cfab8c4.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d347cfab65f.svg" alt="GitHub">
                                    </div>
                                    GitHub
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d3480bb44a5.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d3480bb438d.svg" alt="Composer">
                                    </div>
                                    Composer
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d3484575b4a.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d34845759fd.svg" alt="Blender">
                                    </div>
                                    Blender
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d348aac7a8f.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d348aac797c.svg" alt="HTML5">
                                    </div>
                                    HTML5
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d348ead2dd5.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d348ead2a69.svg" alt="Three.js">
                                    </div>
                                    Three.js
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d34bbc8bd20.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d34bbc8b29e.svg" alt="LottieFiles">
                                    </div>
                                    LottieFiles
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d3559b0fbac.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d3559b0f5f0.svg" alt="Firebase">
                                    </div>
                                    Firebase
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35612cf329.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35612ce93a.svg" alt="WebSocket">
                                    </div>
                                    WebSocket
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4a9f27f896.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4a9f27f70d.svg" alt="Plesk">
                                    </div>
                                    Plesk
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4aa4cd0855.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4aa4cd067d.svg" alt="AWS">
                                    </div>
                                    AWS
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4acca65494.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4acca65353.svg" alt="Git">
                                    </div>
                                    Git
                                </div>
                            </div>
                            <div class="tab-bottom__item _js-tab-3 ">
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d34c3d8d4f6.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d34c3d8d2eb.svg" alt="AMP">
                                    </div>
                                    AMP
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d34ce097084.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d34ce096f86.svg" alt="PWA">
                                    </div>
                                    PWA
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4a987dfc11.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4a987dfadb.svg" alt="WebRTC">
                                    </div>
                                    WebRTC
                                </div>
                            </div>
                            <div class="tab-bottom__item _js-tab-4 ">
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d34d73cd352.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d34d73ccef2.svg" alt="Redis">
                                    </div>
                                    Redis
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d34dc4c07ab.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d34dc4bfed9.svg" alt="Docker">
                                    </div>
                                    Docker
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d34e089c9a4.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d34edf7ea2d.svg" alt="MariaDB">
                                    </div>
                                    MariaDB
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d356edcee11.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d356edcea4b.svg" alt="MySQL">
                                    </div>
                                    MySQL
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d3574b3b3f8.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d3574b3afbc.svg" alt="MongoDB">
                                    </div>
                                    MongoDB
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35c20efe5a.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35c20ef86d.svg" alt="Memcach">
                                    </div>
                                    Memcach
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35c550b0b3.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35c550ab3e.svg" alt="Apache">
                                    </div>
                                    Apache
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35c8a1d717.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35c8a1cdcd.svg" alt="Node.js">
                                    </div>
                                    Node.js
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35ccda8ebf.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35ccda8cbd.svg" alt="WebGL">
                                    </div>
                                    WebGL
                                </div>
                            </div>
                            <div class="tab-bottom__item _js-tab-5 ">
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35d1190721.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35d1190162.svg" alt="laximo">
                                    </div>
                                    laximo
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35d8ce4ed9.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35d8ce497b.svg" alt="1С">
                                    </div>
                                    1С
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35de60c0c6.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35de60ba42.svg" alt="Wayforpay">
                                    </div>
                                    Wayforpay
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35e3410775.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35e340fe81.svg" alt="LiqPay">
                                    </div>
                                    LiqPay
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35e898b6d2.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35e898af86.svg" alt="NovaPoshta">
                                    </div>
                                    NovaPoshta
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35eebef6cb.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35eebef243.svg" alt="REST API">
                                    </div>
                                    REST API
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35f2d9cd92.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35f2d9c5f7.svg" alt="Opendatabot">
                                    </div>
                                    Opendatabot
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35f72a63e5.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35f72a5b25.svg" alt="TecDoc">
                                    </div>
                                    TecDoc
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d35fe0e9591.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d35fe0e9159.svg" alt="GoogleMap">
                                    </div>
                                    GoogleMap
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d36044121f5.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d36044120ad.svg" alt="Zoom">
                                    </div>
                                    Zoom
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d3609b69db2.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d3609b683a8.svg" alt="TurboSMS">
                                    </div>
                                    TurboSMS
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d360d753359.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d360d752f53.svg" alt="Portmone">
                                    </div>
                                    Portmone
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d49e27b0a5a.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d49e27b089d.svg" alt="Amazon">
                                    </div>
                                    Amazon
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d49e9e96f1f.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d49e9e967b8.svg" alt="PayPal">
                                    </div>
                                    PayPal
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d49f3e3e239.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d49f3e3dd3b.svg"
                                            alt="MicrosoftDynamics">
                                    </div>
                                    MicrosoftDynamics
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d49fbe1d197.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d49fbe1c58e.svg" alt="masterbuh">
                                    </div>
                                    masterbuh
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4a03ad2f60.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4a03ad2c0b.svg" alt="R2">
                                    </div>
                                    R2
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4a0a313168.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4a0a313037.svg" alt="YouControl">
                                    </div>
                                    YouControl
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4a7a2db965.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4a7a2db7c1.svg" alt="Przelewy24">
                                    </div>
                                    Przelewy24
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4a833e6aef.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4a833e6a35.svg" alt="Вчасно">
                                    </div>
                                    Вчасно
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4a8b5425bb.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4a8b542232.svg" alt="Вчасно.Каса">
                                    </div>
                                    Вчасно.Каса
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d4abb7d0c82.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d4abb7d0ae6.svg" alt="Укр Пошта">
                                    </div>
                                    Укр Пошта
                                </div>
                            </div>
                            <div class="tab-bottom__item _js-tab-6 ">
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d3620f2155c.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d3620f211eb.svg" alt="Illustrator">
                                    </div>
                                    Illustrator
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d3626a78c24.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d3626a784c4.svg" alt="Photoshop">
                                    </div>
                                    Photoshop
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d362da3c1de.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d362da3bbbf.svg" alt="Adobe XD ">
                                    </div>
                                    Adobe XD
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d363951cf14.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d363951c5db.svg" alt="InVision">
                                    </div>
                                    InVision
                                </div>
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/uploads/tech/65d363cfe0bcc.svg" alt="">
                                        <img class="hover" src="/uploads/tech/65d363cfe0398.svg" alt="Figma">
                                    </div>
                                    Figma
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <a href="/tech-stack" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">view all
                            technologies</a>
                    </div>
                </div>
            </div>
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

        <section class="section-bg-black section-services">
            <div class="bg-ripples"></div>

            <div class="container">
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number">05</p>
                        <p class="subtitle-section__text">what we can do</p>
                    </div>
                    <div class="section-name__title">
                        <h2 class="h2 section-name__title-text">Services</h2>
                    </div>
                    <div class="section-name__description">
                        <p>We create business solutions based on best business practices, years of experience, analytics and
                            business performance.</p>
                    </div>
                </div>
                <div class="services-cards">
                    <div class="card-flipper js-card-flipper">
                        <div class="card-flipper__content">
                            <div class="card-flipper__front card-front">
                                <h3 class="h4 card__title"> Mobile app <br> development </h3>
                                <div class="card-front__bg">
                                    <picture>
                                        <source srcset="/img/home/services/services-1_1920.png" type="image/webp"
                                            media="(min-device-width: 1440px)">
                                        <source srcset="/img/home/services/services-1_1920.png" type="image/jpeg"
                                            media="(min-device-width: 1440px)">

                                        <source srcset="/img/home/services/services-1_1024.png" type="image/webp"
                                            media="(min-device-width: 1024px)">
                                        <source srcset="/img/home/services/services-1_1024.png" type="image/jpeg"
                                            media="(min-device-width: 1024px)">

                                        <source srcset="/img/home/services/services-1_768.png" type="image/webp"
                                            media="(min-device-width: 768px)">
                                        <source srcset="/img/home/services/services-1_768.png" type="image/jpeg"
                                            media="(min-device-width: 768px)">

                                        <source srcset="/img/home/services/services-1_360.webp" type="image/webp">
                                        <source srcset="/img/home/services/services-1_360.png" type="image/jpeg">

                                        <img src="/img/home/services/services-1_360.png" loading="lazy" alt=""
                                            title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> Mobile app <br> development </h3>
                                <div class="card__description">
                                    <p>We create mobile applications for iOS and Android platforms using React Native.</p>
                                </div>
                                <div class="tags">
                                    <p class="tag">Push message</p>
                                    <p class="tag">Business app</p>
                                    <p class="tag">React native</p>
                                    <p class="tag">Android</p>
                                    <p class="tag">iоs</p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="/services/mobile"
                                        class="btn btn-tertiary btn-icon-right icon-arrow-right-top">find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-flipper js-card-flipper">
                        <div class="card-flipper__content">
                            <div class="card-flipper__front card-front">
                                <h3 class="h4 card__title"> Web- <br> Development </h3>
                                <div class="card-front__bg">
                                    <picture>
                                        <source srcset="/img/home/services/services-2_1920.png" type="image/webp"
                                            media="(min-device-width: 1440px)">
                                        <source srcset="/img/home/services/services-2_1920.png" type="image/jpeg"
                                            media="(min-device-width: 1440px)">

                                        <source srcset="/img/home/services/services-2_1024.png" type="image/webp"
                                            media="(min-device-width: 1024px)">
                                        <source srcset="/img/home/services/services-2_1024.png" type="image/jpeg"
                                            media="(min-device-width: 1024px)">

                                        <source srcset="/img/home/services/services-2_768.png" type="image/webp"
                                            media="(min-device-width: 768px)">
                                        <source srcset="/img/home/services/services-2_768.png" type="image/jpeg"
                                            media="(min-device-width: 768px)">

                                        <source srcset="/img/home/services/services-2_360.webp" type="image/webp">
                                        <source srcset="/img/home/services/services-2_360.png" type="image/jpeg">

                                        <img src="/img/home/services/services-2_360.png" loading="lazy" alt=""
                                            title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> Web- <br> Development </h3>
                                <div class="card__description">
                                    <p>We develop portals, CRM, LMS, ERP and PIM systems, PWA programs, e-commerce projects
                                        and corporate websites to solve business problems.</p>
                                </div>
                                <div class="tags">
                                    <p class="tag">Business Sites</p>
                                    <p class="tag">Web-services</p>
                                    <p class="tag">Web applications</p>
                                    <p class="tag">B2B | B2C</p>
                                    <p class="tag">LMS, ERP, PIM systems</p>
                                    <p class="tag">E-commerce</p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="/services/web"
                                        class="btn btn-tertiary btn-icon-right icon-arrow-right-top">find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-flipper js-card-flipper">
                        <div class="card-flipper__content">
                            <div class="card-flipper__front card-front">
                                <h3 class="h4 card__title"> Technical <br> support (SLA) </h3>
                                <div class="card-front__bg">
                                    <picture>
                                        <source srcset="/img/home/services/services-3_1920.png" type="image/webp"
                                            media="(min-device-width: 1440px)">
                                        <source srcset="/img/home/services/services-3_1920.png" type="image/jpeg"
                                            media="(min-device-width: 1440px)">

                                        <source srcset="/img/home/services/services-3_1024.png" type="image/webp"
                                            media="(min-device-width: 1024px)">
                                        <source srcset="/img/home/services/services-3_1024.png" type="image/jpeg"
                                            media="(min-device-width: 1024px)">

                                        <source srcset="/img/home/services/services-3_768.png" type="image/webp"
                                            media="(min-device-width: 768px)">
                                        <source srcset="/img/home/services/services-3_768.png" type="image/jpeg"
                                            media="(min-device-width: 768px)">

                                        <source srcset="/img/home/services/services-3_360.webp" type="image/webp">
                                        <source srcset="/img/home/services/services-3_360.png" type="image/jpeg">

                                        <img src="/img/home/services/services-3_360.png" loading="lazy" alt=""
                                            title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> Technical <br> support (SLA) </h3>
                                <div class="card__description">
                                    <p>We monitor, improve and control all IT processes. We have developed the most
                                        convenient SLA options for you.</p>
                                </div>
                                <div class="tags">
                                    <p class="tag">Management of processes and results</p>
                                    <p class="tag">Architecture</p>
                                    <p class="tag">IT infrastructure</p>
                                    <p class="tag">Devops</p>
                                    <p class="tag">Fix</p>
                                    <p class="tag">SLA</p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="/services/tech-support"
                                        class="btn btn-tertiary btn-icon-right icon-arrow-right-top">find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-flipper js-card-flipper">
                        <div class="card-flipper__content">
                            <div class="card-flipper__front card-front">
                                <h3 class="h4 card__title"> AUTOMATION </h3>
                                <div class="card-front__bg">
                                    <picture>
                                        <source srcset="/img/home/services/services-4_1920.png" type="image/webp"
                                            media="(min-device-width: 1440px)">
                                        <source srcset="/img/home/services/services-4_1920.png" type="image/jpeg"
                                            media="(min-device-width: 1440px)">

                                        <source srcset="/img/home/services/services-4_1024.png" type="image/webp"
                                            media="(min-device-width: 1024px)">
                                        <source srcset="/img/home/services/services-4_1024.png" type="image/jpeg"
                                            media="(min-device-width: 1024px)">

                                        <source srcset="/img/home/services/services-4_768.png" type="image/webp"
                                            media="(min-device-width: 768px)">
                                        <source srcset="/img/home/services/services-4_768.png" type="image/jpeg"
                                            media="(min-device-width: 768px)">

                                        <source srcset="/img/home/services/services-4_360.webp" type="image/webp">
                                        <source srcset="/img/home/services/services-4_360.png" type="image/jpeg">

                                        <img src="/img/home/services/services-4_360.png" loading="lazy" alt=""
                                            title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> AUTOMATION </h3>
                                <div class="card__description">
                                    <p>We study your business processes for automation, develop solution architecture,
                                        improve the efficiency of web projects and the interaction of products with clients
                                        or consumers.</p>
                                </div>
                                <div class="tags">
                                    <p class="tag">Development and integration of REST API</p>
                                    <p class="tag">IT soursing</p>
                                    <p class="tag">Solution architecture development</p>
                                    <p class="tag">Implementation of ERP</p>
                                    <p class="tag">Components & servuces integration</p>
                                    <p class="tag">Implementation of CRM</p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="/services/automation"
                                        class="btn btn-tertiary btn-icon-right icon-arrow-right-top">find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-bg-black section-clients">
            <div class="bg-ripples"></div>

            <div class="container">
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number">06</p>
                        <p class="subtitle-section__text">our clients</p>
                    </div>
                    <div class="section-name__title">
                        <h2 class="h2 section-name__title-text">Trusted by our Clients</h2>
                    </div>
                </div>

                <div class="swiper clients-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-1.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-1__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-7.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-7__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-6.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-6__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-13.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-13__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-14.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-14__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-15.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-15__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-8.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-8__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-10.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-10__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-9.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-9__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-5.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-5__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-3.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-3__white.svg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="/img/home/clients/client-12.svg" alt="">
                                <img class="hover" src="/img/home/clients/client-12__white.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </section>
    </div>

    <section class="section-reviews">
        <div class="container">
            <div class="section-name section-name__blue">
                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">07</p>
                    <p class="subtitle-section__text">clients say</p>
                </div>
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">Reviews</h2>
                </div>

                <div class="marquee-text _number-1">
                    <div class="marquee-group">
                        <span class="marquee-grey">Retail</span>
                        <span class="marquee-grey marquee-circle">●</span>
                        <span class="marquee-grey">Production</span>
                        <span class="marquee-grey marquee-circle">●</span>
                        <span class="marquee-grey">Finance</span>
                        <span class="marquee-grey marquee-circle">●</span>
                        <span class="marquee-grey">Training</span>
                        <span class="marquee-grey marquee-circle">●</span>
                    </div>
                    <div class="marquee-group">
                        <span class="marquee-grey">Retail</span>
                        <span class="marquee-grey marquee-circle">●</span>
                        <span class="marquee-grey">Production</span>
                        <span class="marquee-grey marquee-circle">●</span>
                        <span class="marquee-grey">Finance</span>
                        <span class="marquee-grey marquee-circle">●</span>
                        <span class="marquee-grey">Training</span>
                        <span class="marquee-grey marquee-circle">●</span>
                    </div>
                </div>
            </div>


            <div class="tab-block js-tab">
                <div class="tab-top-padding">
                    <div class="tab-top">
                        <div class="tab-top__wrapper">
                            <button type="button" class="tab-top__item js-tab-btn active" tabindex="1"
                                title="All" data-index="0">
                                All
                            </button>
                            <button type="button" class="tab-top__item js-tab-btn" tabindex="1" title="Clutch.co"
                                data-index="1">
                                Clutch.co </button>
                            <button type="button" class="tab-top__item js-tab-btn" tabindex="2"
                                title="IT-rating.ua" data-index="2">
                                IT-rating.ua </button>
                            <div class="scrollbar js-scrollbar">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-bottom">
                    <div class="tab-bottom__wrapper">
                        <div class="tab-bottom__item _js-tab-0 active">
                            <div class="col">
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <p>Інтернет-магазин aliso.com.ua - це вже другий успішно завершений проєкт. Команда
                                            UAITLAB завжди враховує побажання клієнта. Вони пропонують оптимальні рішення з
                                            урахуванням внутрішніх процесів компанії та потреб аудиторії. Сайт вийшов дуже
                                            красивим і user friendly. Запуск сайту пройшов успішно і тепер ми разом
                                            розвиваємо проєкт. Дякую за співпрацю! Рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">АРТУР</p>
                                        <p>aliso.com.ua</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>Розробив з командою UAITLAB новий e-commerce проект. Маю дуже приємні
                                            враження від співпраці. </blockquote>
                                        <p> Вони – команда професіоналів, які реалізують рішення для бізнесу. У всіх
                                            пропозиціях простежувалася користь для бізнесу та майбутніх користувачів
                                            інтернет-магазину. Завдяки злагодженій роботі команди розробки та управління
                                            проектом, ми легко реалізували весь функціонал сайту, який був виконаний з
                                            урахуванням специфіки нашого бізнесу та внутрішніх процесів. Дизайнер точно
                                            вловила нашу ідею і розробила дизайн. Команда співпрацювала з нашими SEO
                                            фахівцями, щоб зробити проект максимально ефективним інструментом для нашого
                                            бізнесу. Всі завдання приймались в роботу та реалізовувались дуже швидко! Дякую
                                            команді за чудову роботу!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">МОРОЗОВ СЕРГІЙ
                                            СЕРГІЙОВИЧ</p>
                                        <p>plytkar.com.ua</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>Благодарю команду UAITLAB за разработку портала, системы краудфандинга и
                                            мессенджера.</blockquote>
                                        <p>Розробка соціальної мережі для музикантів www.mashamusic.org, допомогла зробити
                                            прорив у розвитку музичної культури країни і розкрити таланти великої кількості
                                            молодих артистів. Під час розробки ресурсу, команда оперативно втілювала всі
                                            наші побажання. У роботі, UAITLAB проявили відповідальність, старанність,
                                            точність, креативність. З поставленими нами завданнями вони успішно впоралися.
                                            Сміливо рекомендую співпрацю.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Мария</p>
                                        <p>mashamusic.org</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <p>Хлопці допомогли врятувати розробку сайту після втрати підрядника. Нам потрібно
                                            було оперативно доробити його до старту сезону. Допомогли розібратися у всіх
                                            аспектах підготовки контенту, написали технічне завдання, запропонували рішення,
                                            врахували всі мої побажання. Проєкт реалізовано точно в строк - за 1 місяць.
                                            Сайт вийшов дуже привабливим, сучасним, технологічним. Ми продовжуємо співпрацю.
                                            Зараз команда UAITLAB створює для нас ще один сайт для нового бренду. Однозначно
                                            рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">АРТУР</p>
                                        <p>yozh.com.ua</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <p>Створення порталу - важливий крок для розвитку нашої організації. UAITLAB знайшли
                                            підхід до складного проекту, передбачили і допомогли у вирішенні проблем, про
                                            які ми навіть не підозрювали. Команда змогла зрозуміти нашу ідею, потреби і
                                            створити дійсно якісний інструмент. Продуктивність, технологічність, креатив,
                                            легкість в спілкуванні - це все про них. Високий рівень професіоналізму і
                                            правильний підхід до клієнта. Завжди на зв'язку, кожен момент затверджується.
                                            Задоволені співпрацею. Рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">ОЛЕКСАНДРА</p>
                                        <p>ag.com.ua</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <p>У нас великий проєкт і ми підходили до вибору команди для реалізації дуже
                                            серйозно. Вибрали UAITLAB, тому що вони детально розписали проєкт і
                                            запропонували оптимальне рішення для наших завдань, врахували специфіку
                                            аудиторії та бізнесу, вибудували архітектуру з урахуванням наших планів розвитку
                                            в майбутньому. Так само, вони розробили для нас фірмовий стиль та інструкції для
                                            використання сайту. Крім автоматизації бізнес-процесів, у нас був редизайн сайту
                                            і дуже важливо було під час релізу не втратити наявні параметри SEO. UAITLAB
                                            впоралися з усіма завданнями на 100%. Вони чітко планували процес і завжди
                                            повідомляли про хід проєкту. Зараз, якщо виникають питання або доповнення,
                                            команда підтримує проєкт! Продовжую співпрацю. Рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">ЮРИЙ КОШЕВОЙ</p>
                                        <p>rental-power.com.ua</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"We highly value the accuracy in meeting our business objectives, as
                                            well as the achieved results."</blockquote>
                                        <p>Within three months, UAITLAB delivered a complete website that matched the
                                            client's specifications and approved prototypes. The client lauded the service
                                            provider's accuracy in meeting their business goals, adherence to deadlines,
                                            prompt responses, and ability to stay within the budget.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-2161099"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Katerina
                                            Zolotaryova</p>
                                        <p class="reviewer-info__text_grey">$review->position</p>
                                        <p>Site24</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>“They went the extra mile, and we trust them. Their team did everything
                                            brilliantly.”</blockquote>
                                        <p>The website met expectations and is easy to use. UAITLAB remained engaged even
                                            after the launch, addressing questions and handling minor tweaks. The engagement
                                            process and objectives were clearly defined and successfully executed. Their
                                            design skill is a hallmark of their high-quality work.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1734372"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Dmitri Bezruchko
                                        </p>
                                        <p class="reviewer-info__text_grey">Head of Communications</p>
                                        <p>4H Agency</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>“My team is proud to have such a high-quality platform. Everything is
                                            perfect.”</blockquote>
                                        <p>UAITLAB completed the initial development quickly without sacrificing quality. As
                                            a result, the website has attracted international recognition. As they’ve
                                            continued their partnership with the client, they’ve demonstrated their
                                            dedication by extending their hours to meet tight deadlines.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1696169"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Arthur
                                            Ponomarenko</p>
                                        <p class="reviewer-info__text_grey">CEO</p>
                                        <p>Yözh Inс</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"When we present our desire for new features or ideas, their team
                                            advises us from a technical and sales perspective."</blockquote>
                                        <p>Customer feedback on their web design and development work has been positive.
                                            Their team communicates regularly, assisting with any task asked of them.
                                            Customers can expect a trustworthy and skilled team of problem-solvers.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1289138"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Alex Khomenko
                                        </p>
                                        <p class="reviewer-info__text_grey">Owner</p>
                                        <p>Dom4M</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"Not only are we pleased with the website, but our clients are too."
                                        </blockquote>
                                        <p>Users and internal stakeholders alike are pleased with the new website, and find
                                            it both easy to navigate and visually appealing. UAITLAB. Online Business
                                            Solutions’ team is communicative, dedicated, and talented.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1284726"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Ksenia Pogasyi
                                        </p>
                                        <p class="reviewer-info__text_grey">Owner</p>
                                        <p> I Gift You</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"There was a clear implementation of agreements."</blockquote>
                                        <p>Thanks to UAITLAB, the client saw positive results in terms of customer
                                            satisfaction, reviews, and cost savings. The team took all the client's needs
                                            into account and offered several solutions. They communicated effectively
                                            through daily meetings and provided excellent availability throughout.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-2177787"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Head of Sales
                                            Department</p>
                                        <p class="reviewer-info__text_grey">Inna Chaika</p>
                                        <p>INSURANCE COMPANY VARTO</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"Everything was perfectly managed."</blockquote>
                                        <p>The website received positive feedback from end customers for its upload speed,
                                            design, and stylish interface. Moreover, the client saw increased order volume
                                            and brand awareness thanks to UAITLAB's work. The team was engaged, timely in
                                            delivery, and responsive even outside working hours.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab?project_cost=10000#review-275068"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Arthur
                                            Ponomarenko</p>
                                        <p class="reviewer-info__text_grey">CEO</p>
                                        <p>aliso.com.ua</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-bottom__item _js-tab-1">
                            <div class="col">
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"We highly value the accuracy in meeting our business objectives, as
                                            well as the achieved results."</blockquote>
                                        <p>Within three months, UAITLAB delivered a complete website that matched the
                                            client's specifications and approved prototypes. The client lauded the service
                                            provider's accuracy in meeting their business goals, adherence to deadlines,
                                            prompt responses, and ability to stay within the budget.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-2161099"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Katerina
                                            Zolotaryova</p>
                                        <p class="reviewer-info__text_grey">$review->position</p>
                                        <p>Site24</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>“They went the extra mile, and we trust them. Their team did everything
                                            brilliantly.”</blockquote>
                                        <p>The website met expectations and is easy to use. UAITLAB remained engaged even
                                            after the launch, addressing questions and handling minor tweaks. The engagement
                                            process and objectives were clearly defined and successfully executed. Their
                                            design skill is a hallmark of their high-quality work.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1734372"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Dmitri Bezruchko
                                        </p>
                                        <p class="reviewer-info__text_grey">$review->position</p>
                                        <p>4H Agency</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>“My team is proud to have such a high-quality platform. Everything is
                                            perfect.”</blockquote>
                                        <p>UAITLAB completed the initial development quickly without sacrificing quality. As
                                            a result, the website has attracted international recognition. As they’ve
                                            continued their partnership with the client, they’ve demonstrated their
                                            dedication by extending their hours to meet tight deadlines.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1696169"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Arthur
                                            Ponomarenko</p>
                                        <p class="reviewer-info__text_grey">$review->position</p>
                                        <p>Yözh Inс</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"When we present our desire for new features or ideas, their team
                                            advises us from a technical and sales perspective."</blockquote>
                                        <p>Customer feedback on their web design and development work has been positive.
                                            Their team communicates regularly, assisting with any task asked of them.
                                            Customers can expect a trustworthy and skilled team of problem-solvers.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1289138"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Alex Khomenko
                                        </p>
                                        <p class="reviewer-info__text_grey">$review->position</p>
                                        <p>Dom4M</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"Not only are we pleased with the website, but our clients are too."
                                        </blockquote>
                                        <p>Users and internal stakeholders alike are pleased with the new website, and find
                                            it both easy to navigate and visually appealing. UAITLAB. Online Business
                                            Solutions’ team is communicative, dedicated, and talented.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1284726"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Ksenia Pogasyi
                                        </p>
                                        <p class="reviewer-info__text_grey">Owner</p>
                                        <p> I Gift You</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"There was a clear implementation of agreements."</blockquote>
                                        <p>Thanks to UAITLAB, the client saw positive results in terms of customer
                                            satisfaction, reviews, and cost savings. The team took all the client's needs
                                            into account and offered several solutions. They communicated effectively
                                            through daily meetings and provided excellent availability throughout.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-2177787"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Head of Sales
                                            Department</p>
                                        <p class="reviewer-info__text_grey">Inna Chaika</p>
                                        <p>INSURANCE COMPANY VARTO</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>"Everything was perfectly managed."</blockquote>
                                        <p>The website received positive feedback from end customers for its upload speed,
                                            design, and stylish interface. Moreover, the client saw increased order volume
                                            and brand awareness thanks to UAITLAB's work. The team was engaged, timely in
                                            delivery, and responsive even outside working hours.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab?project_cost=10000#review-275068"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Arthur
                                            Ponomarenko</p>
                                        <p class="reviewer-info__text_grey">CEO</p>
                                        <p>aliso.com.ua</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-bottom__item _js-tab-2">
                            <div class="col">
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <p>Інтернет-магазин aliso.com.ua - це вже другий успішно завершений проєкт. Команда
                                            UAITLAB завжди враховує побажання клієнта. Вони пропонують оптимальні рішення з
                                            урахуванням внутрішніх процесів компанії та потреб аудиторії. Сайт вийшов дуже
                                            красивим і user friendly. Запуск сайту пройшов успішно і тепер ми разом
                                            розвиваємо проєкт. Дякую за співпрацю! Рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">АРТУР</p>
                                        <p>aliso.com.ua</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>Розробив з командою UAITLAB новий e-commerce проект. Маю дуже приємні
                                            враження від співпраці. </blockquote>
                                        <p> Вони – команда професіоналів, які реалізують рішення для бізнесу. У всіх
                                            пропозиціях простежувалася користь для бізнесу та майбутніх користувачів
                                            інтернет-магазину. Завдяки злагодженій роботі команди розробки та управління
                                            проектом, ми легко реалізували весь функціонал сайту, який був виконаний з
                                            урахуванням специфіки нашого бізнесу та внутрішніх процесів. Дизайнер точно
                                            вловила нашу ідею і розробила дизайн. Команда співпрацювала з нашими SEO
                                            фахівцями, щоб зробити проект максимально ефективним інструментом для нашого
                                            бізнесу. Всі завдання приймались в роботу та реалізовувались дуже швидко! Дякую
                                            команді за чудову роботу!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">МОРОЗОВ СЕРГІЙ
                                            СЕРГІЙОВИЧ</p>
                                        <p>plytkar.com.ua</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <blockquote>Благодарю команду UAITLAB за разработку портала, системы краудфандинга и
                                            мессенджера.</blockquote>
                                        <p>Розробка соціальної мережі для музикантів www.mashamusic.org, допомогла зробити
                                            прорив у розвитку музичної культури країни і розкрити таланти великої кількості
                                            молодих артистів. Під час розробки ресурсу, команда оперативно втілювала всі
                                            наші побажання. У роботі, UAITLAB проявили відповідальність, старанність,
                                            точність, креативність. З поставленими нами завданнями вони успішно впоралися.
                                            Сміливо рекомендую співпрацю.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Мария</p>
                                        <p>mashamusic.org</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <p>Хлопці допомогли врятувати розробку сайту після втрати підрядника. Нам потрібно
                                            було оперативно доробити його до старту сезону. Допомогли розібратися у всіх
                                            аспектах підготовки контенту, написали технічне завдання, запропонували рішення,
                                            врахували всі мої побажання. Проєкт реалізовано точно в строк - за 1 місяць.
                                            Сайт вийшов дуже привабливим, сучасним, технологічним. Ми продовжуємо співпрацю.
                                            Зараз команда UAITLAB створює для нас ще один сайт для нового бренду. Однозначно
                                            рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">АРТУР</p>
                                        <p>yozh.com.ua</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <p>Створення порталу - важливий крок для розвитку нашої організації. UAITLAB знайшли
                                            підхід до складного проекту, передбачили і допомогли у вирішенні проблем, про
                                            які ми навіть не підозрювали. Команда змогла зрозуміти нашу ідею, потреби і
                                            створити дійсно якісний інструмент. Продуктивність, технологічність, креатив,
                                            легкість в спілкуванні - це все про них. Високий рівень професіоналізму і
                                            правильний підхід до клієнта. Завжди на зв'язку, кожен момент затверджується.
                                            Задоволені співпрацею. Рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">ОЛЕКСАНДРА</p>
                                        <p>ag.com.ua</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count" style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                        <p>У нас великий проєкт і ми підходили до вибору команди для реалізації дуже
                                            серйозно. Вибрали UAITLAB, тому що вони детально розписали проєкт і
                                            запропонували оптимальне рішення для наших завдань, врахували специфіку
                                            аудиторії та бізнесу, вибудували архітектуру з урахуванням наших планів розвитку
                                            в майбутньому. Так само, вони розробили для нас фірмовий стиль та інструкції для
                                            використання сайту. Крім автоматизації бізнес-процесів, у нас був редизайн сайту
                                            і дуже важливо було під час релізу не втратити наявні параметри SEO. UAITLAB
                                            впоралися з усіма завданнями на 100%. Вони чітко планували процес і завжди
                                            повідомляли про хід проєкту. Зараз, якщо виникають питання або доповнення,
                                            команда підтримує проєкт! Продовжую співпрацю. Рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab"
                                            class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full
                                            review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">ЮРИЙ КОШЕВОЙ</p>
                                        <p>rental-power.com.ua</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-form">
        <div class="container">
            <div class="section-name">
                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">08</p>
                    <p class="subtitle-section__text">form</p>
                </div>
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">Let’s create your next project</h2>
                </div>

                <div class="btn-wrapper">
                    <a href="/form" class="btn btn-primary btn-bg-orange">Lets get work together</a>
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
            <div class="form-download">
                <a href="/uploads/files/65e19842f0e72.docx" class="form-download__item" download="">
                    <button class="btn btn-border btn-bg-orange btn-icon icon-download"></button>
                    <span>Download Brif</span>
                </a>

                <a href="/uploads/files/65e17e71a6676.pdf" class="form-download__item" target="_blank">
                    <button class="btn btn-border btn-bg-orange btn-icon icon-download"></button>
                    <span>uaitlab presentation</span>
                </a>
            </div>
        </div>
    </section>
@endsection
