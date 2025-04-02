@push('styles')
    @vite(['resources/css/services.sass'])
@endpush


@extends('__layouts.main')

@section('title', 'Mobile Development')
@section('description', 'Mobile Development is the process of creating applications that can be accessed and used on
    mobile devices, such as smartphones and tablets')

@section('content')
    <div class="section-bg-black services-header _mobiledev">
        <div class="bg-ripples"></div>
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="/">Main</a>
                </li>
                <li>
                    Mobile app development
                </li>
            </ul>
            <div class="services-header__content">
                <div class="services-header__info">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number"></p>
                            <p class="subtitle-section__text">Service </p>
                        </div>
                        <div class="section-name__title">
                            <h1 class="h1 section-name__title-text">
                                <span class="glitch" data-text="Mobile app">Mobile app</span>
                                development
                            </h1>
                        </div>
                    </div>
                    <div class="header-description">
                        <p>
                            - the bridge between the future and the present
                        </p>
                    </div>
                </div>
                <div class="services-header__img">
                    <picture>


                        <source srcset="/img/services/services-header-2_540.webp" type="image/webp"
                            media="(min-device-width: 768px)">
                        <source srcset="/img/services/services-header-2_540.png" type="image/jpeg"
                            media="(min-device-width: 768px)">

                        <source srcset="/img/services/services-header-2_340.webp" type="image/webp">
                        <source srcset="/img/services/services-header-2_340.png" type="image/jpeg">

                        <img src="/img/services/services-header-2_340.png" loading="lazy"
                            alt="Mobile app development - photo 1">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <section class="tools">
        <div class="container">
            <div class="section-name section-name__blue">
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">
                        Mobile expertise: technologies and tools for app development
                    </h2>
                </div>
            </div>
            <div class="tools-banner">
                <div class="banner-img">
                    <img src="/img/services/react-logo.svg" alt="Mobile app development - photo 2">
                </div>
                <div class="banner-text">
                    <p>
                        We use React Native, a powerful and popular framework for mobile app development that allows for
                        high performance and quality of work for both iOS and Android platforms.
                    </p>
                    <br>
                    <p>
                        In addition, we use the following technologies and tools:
                    </p>
                </div>
            </div>

            <div class="tools-items">
                <div class="tools-item">
                    <div class="tool-img">
                        <img src="/img/services/redux-logo.svg" alt="Mobile app development - photo 3">
                    </div>
                    <div class="tool-title">
                        <p>Redux</p>
                    </div>
                    <div class="tool-text">
                        <p>
                            for managing the app state and event handling
                        </p>
                    </div>

                </div>
                <div class="tools-item">
                    <div class="tool-img">
                        <img src="/img/services/firebase-logo.svg" alt="Mobile app development - photo 4">
                    </div>
                    <div class="tool-title">
                        <p>Firebase</p>
                    </div>
                    <div class="tool-text">
                        <p>
                            for data storage and processing
                        </p>
                    </div>

                </div>
                <div class="tools-item">
                    <div class="tool-img">
                        <img src="/img/services/firebase-logo.svg" alt="Mobile app development - photo 5">
                    </div>
                    <div class="tool-title">
                        <p>Firebase Cloud Messaging </p>
                    </div>
                    <div class="tool-text">
                        <p>
                            for push notifications
                        </p>
                    </div>

                </div>
                <div class="tools-item">
                    <div class="tool-img">
                        <img src="/img/services/figma-logo.svg" alt="Mobile app development - photo 6">
                    </div>
                    <div class="tool-title">
                        <p>Figma</p>
                    </div>
                    <div class="tool-text">
                        <p>
                            for designing and prototyping interfaces
                        </p>
                    </div>

                </div>
                <div class="tools-item _pair">
                    <div class="tool-img">
                        <img src="/img/services/github-logo.svg" alt="Mobile app development - photo 7">
                        <img src="/img/services/gitlab-logo.svg" alt="Mobile app development - photo 8">
                    </div>
                    <div class="tool-title">
                        <p>GitHub</p>
                        <p>and</p>
                        <p>Git</p>
                    </div>
                    <div class="tool-text">
                        <p>
                            for version control and collaboration on the project
                        </p>
                    </div>

                </div>
            </div>

            <div class="tools-description">
                <p>
                    We always keep up with the latest trends in mobile development and use the best practices and
                    tools to ensure the quality and efficiency of our work.
                </p>
            </div>
        </div>
    </section>


    <section class="section-bg-black road">
        <div class="bg-ripples"></div>
        <div class="container">
            <div class="section-name">
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">
                        Work process
                    </h2>
                </div>
            </div>

            <div class="road-items">
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-6.webp" type="image/webp">
                            <img src="/img/services/road-icon-6.png" loading="lazy" alt="Mobile app development - photo 9">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">01</div>
                        <p class="info-title">Pre-project analysis and planning:</p>
                        <div class="info-desc">
                            <p>
                                We start with a thorough analysis of your project and detailed planning. We identify
                                the requirements and goals of your application, as well as examine competitors and
                                the market. Based on the information obtained, we create a detailed development
                                plan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-2.webp" type="image/webp">
                            <img src="/img/services/road-icon-2.png" loading="lazy" alt="Mobile app development - photo 10">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">02</div>
                        <p class="info-title">Contract:</p>
                        <div class="info-desc">
                            <p>
                                We develop and coordinate all project documentation and sign it in analog form or
                                using an EDI service.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-1.webp" type="image/webp">
                            <img src="/img/services/road-icon-1.png" loading="lazy"
                                alt="Mobile app development - photo 11">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">03</div>
                        <p class="info-title">Technical task:</p>
                        <div class="info-desc">
                            <p>
                                Interviews are conducted with authorized persons, tasks are developed for design and
                                development departments. Additional research is conducted. The result is a project
                                waterfall with milestone descriptions, technical specifications, and a final
                                estimate
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-7.webp" type="image/webp">
                            <img src="/img/services/road-icon-7.png" loading="lazy"
                                alt="Mobile app development - photo 12">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">04</div>
                        <p class="info-title">Design and interface development:</p>
                        <div class="info-desc">
                            <p>
                                Our designers create an efficient and attractive interface that reflects your needs
                                and user requirements. We ensure that the design corresponds to your brand and the
                                latest design trends.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-8.webp" type="image/webp">
                            <img src="/img/services/road-icon-8.png" loading="lazy"
                                alt="Mobile app development - photo 13">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">05</div>
                        <p class="info-title">Server-side development:</p>
                        <div class="info-desc">
                            <p>
                                The first stage is the development of the application's server-side. At this stage,
                                infrastructure is developed that provides communication between the mobile
                                application and the server, as well as a database where data used by the application
                                will be stored.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-9.webp" type="image/webp">
                            <img src="/img/services/road-icon-9.png" loading="lazy"
                                alt="Mobile app development - photo 14">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">06</div>
                        <p class="info-title">Application development:</p>
                        <div class="info-desc">
                            <p>
                                The second stage is the development of a mobile application for platforms such as
                                Android and/or iOS. At this stage, the user interface, application logic, and
                                communication between the mobile application and the server are developed
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-10.webp" type="image/webp">
                            <img src="/img/services/road-icon-10.png" loading="lazy"
                                alt="Mobile app development - photo 15">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">07</div>
                        <p class="info-title">Testing:</p>
                        <div class="info-desc">
                            <p>
                                The final stage involves testing the application. Testing includes checking the
                                functionality, stability, and security of the application. After successfully
                                passing the tests, the application is ready for release and publication in
                                application stores.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-11.webp" type="image/webp">
                            <img src="/img/services/road-icon-11.png" loading="lazy"
                                alt="Mobile app development - photo 16">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">08</div>
                        <p class="info-title">Post-release support:</p>
                        <div class="info-desc">
                            <p>
                                Our work does not end with the release of the application in the App Store and/or
                                Google Play. We provide ongoing technical support and ensure the uninterrupted
                                operation of the application. We also offer updates and modifications to the
                                application to ensure its maximum efficiency and user satisfaction.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-12.webp" type="image/webp">
                            <img src="/img/services/road-icon-12.png" loading="lazy"
                                alt="Mobile app development - photo 17">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">09</div>
                        <p class="info-title">Warranty obligations:</p>
                        <div class="info-desc">
                            <p>
                                For 6 months, the company assumes warranty obligations for the operability according
                                to the technical specifications of the project. Therefore, all fixes that are
                                identified and made during this period are free of charge.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item _circle">
                    <a href="/form" class="circle-text">
                        <svg viewBox="0 0 100 100" class="circle-svg">
                            <defs>
                                <path id="circle" d="M 50, 50m -37, 0a 37,37 0 1,1 74,0a 37,37 0 1,1 -74,0"></path>
                            </defs>
                            <circle class="circle-bg" cx="50%" cy="50%" r="30%" fill="red"></circle>
                            <text>
                                <textPath xlink:href="#circle">
                                    Estimate the project - Estimate the project -
                                </textPath>
                            </text>
                        </svg>
                        <div class="circle-arrow"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="text-block">
        <div class="container">
            <div class="col">
                <h2 class="h2">
                    <strong>Don't Panic</strong> - We'll Help You Publish Your App!
                </h2>
            </div>
            <div class="col">
                <p>
                    We understand that publishing an app on a marketplace is not always easy, especially for those
                    without prior experience. <strong>We can take care</strong> of the entire process of publishing your app
                    on the
                    App Store or Google Play and ensure that it is available to your users <strong>in the shortest possible
                        time.</strong>
                </p>
                <p>
                    In addition, <strong>we can help you create a user account</strong> that will allow you to manage your
                    app, track
                    its success, and receive feedback from users. Our team can develop features such as user
                    registration system, integration with social media, creation of user profiles, and more.
                </p>
                <p>
                    With our experience and knowledge, <strong>we can ensure the successful implementation</strong> and
                    publication
                    of your mobile app. Don't hesitate to reach out to us for help, and we'll be happy to assist
                    you!
                </p>
            </div>
        </div>
    </section>

    <section class="section-bg-black video-case" id="section-case">
        <div class="container">
            <div class="bg-ripples"></div>
            <div class="case-top">
                <div class="section-name">
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
