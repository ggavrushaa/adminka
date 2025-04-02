@push('styles')
    @vite(['resources/css/services.sass'])
@endpush


@extends('__layouts.main')

@section('title', 'Automation')
@section('description', 'Automation is the process of creating applications that can perform tasks automatically without
    human intervention')

@section('content')
    <div class="section-bg-black services-header">
        <div class="bg-ripples"></div>
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="/">Main</a>
                </li>
                <li>
                    reliable automation provider
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
                                reliable
                                <span class="glitch" data-text="automation">automation</span>
                                provider
                            </h1>
                        </div>
                    </div>
                    <div class="header-description">
                        <p>
                            Business process automation is an effective way to increase productivity and save time
                            and
                            resources.
                        </p>
                    </div>
                </div>
                <div class="services-header__img">
                    <picture>


                        <source srcset="/img/services/services-header-1_540.webp" type="image/webp"
                            media="(min-device-width: 768px)">
                        <source srcset="/img/services/services-header-1_540.png" type="image/jpeg"
                            media="(min-device-width: 768px)">

                        <source srcset="/img/services/services-header-1_340.webp" type="image/webp">
                        <source srcset="/img/services/services-header-1_340.png" type="image/jpeg">

                        <img src="/img/services/services-header-1_340.png" loading="lazy"
                            alt="Reliable automation provider - photo 1">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <section class="section-bg-white section-who section-who__services">
        <div class="container">
            <div class="section-name section-name__blue">
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">
                        Benefits of automation with UAITLAB
                    </h2>
                </div>
            </div>
            <div class="who-features">
                <div class="who-feature__content content-feature">
                    <div class="content-feature__thumb feature-thumb">
                        <div class="feature-thumb__fraction">
                            <p class="thumb-number thumb-number__start">01</p>
                            <p class="thumb-separator">/</p>
                            <p class="thumb-number thumb-number__end">05</p>
                        </div>
                        <div class="feature-thumb__items">
                            <div class="feature-thumb__item active" data-index="1">
                                <p class="thumb-number">01</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">Efficiency and speed</p>
                            </div>
                            <div class="feature-thumb__item" data-index="2">
                                <p class="thumb-number">02</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">Individual approach</p>
                            </div>
                            <div class="feature-thumb__item" data-index="3">
                                <p class="thumb-number">03</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">Effective resource management</p>
                            </div>
                            <div class="feature-thumb__item" data-index="4">
                                <p class="thumb-number">04</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">Technical support</p>
                            </div>
                            <div class="feature-thumb__item" data-index="5">
                                <p class="thumb-number">05</p>
                                <div class="thumb-separator"></div>
                                <p class="thumb-title">Expertise of the team</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper content-feature__main feature-main">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p class="feature-main__title">Efficiency and speed</p>
                                <div class="feature-main__text">
                                    <p>
                                        We offer solutions that automate business processes and ensure fast and
                                        efficient work. We analyze your needs and offer optimal solutions that help
                                        increase your company's productivity.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <p class="feature-main__title">Individual approach</p>
                                <div class="feature-main__text">
                                    <p>
                                        We understand that each company is unique and has its own specific features.
                                        Therefore, our experts work with each client individually and develop
                                        solutions that meet the specifics of your business and satisfy your needs.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <p class="feature-main__title">Effective resource management</p>
                                <div class="feature-main__text">
                                    <p>
                                        We help save resources and reduce operating costs. We analyze your business
                                        and offer solutions that allow you to efficiently manage resources and
                                        reduce costs.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <p class="feature-main__title">Technical support</p>
                                <div class="feature-main__text">
                                    <p>
                                        We provide technical support for 6 months after the implementation of the
                                        automation solution. We guarantee the smooth operation of your system and
                                        provide assistance in resolving any technical issues.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <p class="feature-main__title">Expertise of the team</p>
                                <div class="feature-main__text">
                                    <p>
                                        We have a team of experts with years of experience in web development. We
                                        use modern technologies and methodologies to ensure the highest quality of
                                        our services.
                                    </p>
                                    <p>
                                        Our specialists are ready to solve any tasks and challenges that arise
                                        during the development of web applications. We are always looking for new
                                        ideas and solutions to make your projects unique and effective.
                                    </p>
                                    <p>
                                        Our experts are ready to work with you at any stage of development and
                                        provide qualified support after the project launch.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg-black road">
        <div class="bg-ripples"></div>
        <div class="container">
            <div class="section-name">
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">
                        Our transparent working process
                    </h2>
                </div>
            </div>

            <div class="road-items">
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-1.webp" type="image/webp">
                            <img src="/img/services/road-icon-1.png" loading="lazy"
                                alt="Reliable automation provider - photo 2">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">01</div>
                        <p class="info-title">Consultation:</p>
                        <div class="info-desc">
                            <p>
                                The first stage is a consultation with our experts, which will help determine the
                                needs of your business and select the optimal path for automation. We take into
                                account your business processes and help identify the scope and types of work
                                required for automation. At this stage, we aim to obtain the maximum amount of
                                information.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-2.webp" type="image/webp">
                            <img src="/img/services/road-icon-2.png" loading="lazy"
                                alt="Reliable automation provider - photo 3">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">02</div>
                        <p class="info-title">Technical task:</p>
                        <div class="info-desc">
                            <p>
                                After the consultation, our specialists develop a technical task based on your
                                requirements and needs. It includes a list of functional and technical requirements
                                for the system, as well as design layouts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-3.webp" type="image/webp">
                            <img src="/img/services/road-icon-3.png" loading="lazy"
                                alt="Reliable automation provider - photo 4">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">03</div>
                        <p class="info-title">Development and testing:</p>
                        <div class="info-desc">
                            <p>
                                After the technical task is approved, we begin developing the software and testing
                                it. We use modern technologies and best practices to ensure the high quality of our
                                solutions. Our team of experts ensures that the project is completed on time and in
                                accordance with the customer's requirements.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-4.webp" type="image/webp">
                            <img src="/img/services/road-icon-4.png" loading="lazy"
                                alt="Reliable automation provider - photo 5">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">04</div>
                        <p class="info-title">Implementation and support:</p>
                        <div class="info-desc">
                            <p>
                                After successful completion of development and testing, we implement the solution on
                                your production server. After implementation, we provide technical support and
                                after-sales service to ensure the stable and reliable operation of the system. We
                                are always ready to provide advice and assistance with all questions related to our
                                solutions. You can read about technical support here.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <picture>
                            <source srcset="/img/services/road-icon-5.webp" type="image/webp">
                            <img src="/img/services/road-icon-5.png" loading="lazy"
                                alt="Reliable automation provider - photo 6">
                        </picture>
                    </div>
                    <div class="info">
                        <div class="info-number">05</div>
                        <p class="info-title">Warranty obligations:</p>
                        <div class="info-desc">
                            <p>
                                The company provides a warranty for the project's compliance with the technical task
                                for a period of 6 months. Therefore, all fixes identified and made during this
                                period are carried out at the expense of UAITLAB.
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

    <section class="zebra">
        <div class="container">
            <div class="section-name section-name__blue">
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">
                        Why work with UAITLAB?
                    </h2>
                </div>
            </div>

            <div class="items" style="--item-count: 4">
                <div class="item">
                    <div class="item-number">01</div>
                    <p class="item-title">Experienced professionals</p>
                    <div class="item-desc">
                        <p>
                            Our team consists of experienced professionals with deep knowledge in automation and
                            extensive practical experience in various industries and business areas. We know how to
                            help you achieve maximum efficiency for your business through automation.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-number">02</div>
                    <p class="item-title">Individual approach</p>
                    <div class="item-desc">
                        <p>
                            We understand that every business is unique, so we offer an individual approach to each
                            project. Our experts focus on studying your needs and business processes to develop an
                            optimal automation solution that meets your requirements.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-number">03</div>
                    <p class="item-title">Reliability and security</p>
                    <div class="item-desc">
                        <p>
                            UAITLAB ensures the reliability and security of your project. We use the best practices
                            and tools to ensure the security and protection of your confidential information.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-number">04</div>
                    <p class="item-title">Technical support and training</p>
                    <div class="item-desc">
                        <p>
                            We provide high-quality technical support for your project and training for your team.
                            We are always ready to help you with any questions related to automation and
                            digitalization of your processes.
                        </p>
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
