@vite(['resources/css/services.sass'])


@extends('__layouts.main')

@section('title', 'Technical Support')
@section('description', 'Technical Support is the process of providing assistance to users of technology products, such as mobile phones, computers, and software applications')

@section('content')
<div class="section-bg-black services-header">
    <div class="bg-ripples"></div>
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="/">Main</a>
            </li>
            <li>
                Technical support
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
                            <span class="glitch" data-text="Technical">Technical</span>
                            support
                        </h1>
                    </div>
                </div>
                <div class="header-description">
                    <p>
                        is not just about understanding technology, but also having a deep understanding of your
                        business needs
                    </p>
                </div>
            </div>
            <div class="services-header__img">
                <picture>


                    <source srcset="/img/services/services-header-3_540.webp" type="image/webp"
                        media="(min-device-width: 768px)">
                    <source srcset="/img/services/services-header-3_540.png" type="image/jpeg"
                        media="(min-device-width: 768px)">

                    <source srcset="/img/services/services-header-3_340.webp" type="image/webp">
                    <source srcset="/img/services/services-header-3_340.png" type="image/jpeg">

                    <img src="/img/services/services-header-3_340.png" loading="lazy" alt="Technical support - photo 1">
                </picture>
            </div>
        </div>
    </div>
</div>

<section class="text-block">
    <div class="container">
        <div class="col">
            <h2 class="h2">
                What are the <strong>benefits</strong> of our SLA?
            </h2>
        </div>
        <div class="col">
            <p>
                We work with you to understand your goals and requirements because technology should be aligned
                with your business, not the other way around. Our goal is to provide you with <strong>the
                    highest quality technical support</strong> that will help you <strong>succeed in your
                    business.</strong>
            </p>
            <p>
                Our SLA allows customers to receive high-quality technical support tailored to their needs and
                requirements. We offer an <strong>individual approach</strong> to each client and guarantee
                <strong>clear terms of performance.</strong>
                In addition, our SLA provides <strong>24/7 support,</strong> which allows our customers to be
                confident in the smooth operation of their business.
            </p>
        </div>
    </div>
</section>

<section class="tech-labels">
    <div class="container">
        <div class="tech-labels__text">
            <h2 class="title">Tech stack:</h2>
            <div class="desc">
                <p>
                    We provide custom software development services using the following proven technologies.
                </p>
            </div>
            <div class="btn-wrapper">
                <a href="/tech-stack" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">
                    view all technologies
                </a>
            </div>
        </div>
        <div class="tech-labels__items">
            <div class="items">
                <div class="item">
                    <img src="/img/tech-icons/php-icon.svg" alt="Technical support - photo 2">
                    <p>Php</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/js-icon.svg" alt="Technical support - photo 3">
                    <p>javascript</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/laravel-icon.svg" alt="Technical support - photo 4">
                    <p>Laravel</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/node-icon.svg" alt="Technical support - photo 5">
                    <p>Node.js</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/restapi-icon.svg" alt="Technical support - photo 6">
                    <p>rest api</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/docker-icon.svg" alt="Technical support - photo 7">
                    <p>Docker</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/mariadb-icon.svg" alt="Technical support - photo 8">
                    <p>MariaDB</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/jquery-icon.svg" alt="Technical support - photo 9">
                    <p>jQuery</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/css-icon.svg" alt="Technical support - photo 10">
                    <p>CSS3</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/html-icon.svg" alt="Technical support - photo 11">
                    <p>HTML5</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/amp-icon.svg" alt="Technical support - photo 12">
                    <p>AMP</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/figma-icon.svg" alt="Technical support - photo 13">
                    <p>Figma</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/illustrator-icon.svg" alt="Technical support - photo 14">
                    <p>illustrator</p>
                </div>
                <div class="item _last">
                    <p>...</p>
                </div>
            </div>


            <div class="btn-wrapper">
                <a href="" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">
                    view all technologies
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section-bg-black section-who section-who__services">
    <div class="bg-ripples"></div>
    <div class="container">
        <div class="section-name section-name__blue">
            <div class="section-name__title">
                <h2 class="h2 section-name__title-text">
                    How does it work? SLA Parameters
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
                            <p class="thumb-title">Сreating a task</p>
                        </div>
                        <div class="feature-thumb__item" data-index="2">
                            <p class="thumb-number">02</p>
                            <div class="thumb-separator"></div>
                            <p class="thumb-title">Tasks assigned</p>
                        </div>
                        <div class="feature-thumb__item" data-index="3">
                            <p class="thumb-number">03</p>
                            <div class="thumb-separator"></div>
                            <p class="thumb-title">The Kanban board</p>
                        </div>
                        <div class="feature-thumb__item" data-index="4">
                            <p class="thumb-number">04</p>
                            <div class="thumb-separator"></div>
                            <p class="thumb-title">Working hours</p>
                        </div>
                        <div class="feature-thumb__item" data-index="5">
                            <p class="thumb-number">05</p>
                            <div class="thumb-separator"></div>
                            <p class="thumb-title">Response time</p>
                        </div>
                    </div>
                </div>
                <div class="swiper content-feature__main feature-main">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p class="feature-main__title">Сreating a task</p>
                            <div class="feature-main__text">
                                <p>
                                    Tasks must be created in the <span class="fake-link">https://trello.com/system</span>.
                                    If a task is not
                                    logged in the <span class="fake-link">https://trello.com/system</span>, it is
                                    considered not properly
                                    assigned.
                                </p>
                            </div>

                            <picture>
                                <source srcset="/img/services/tech-support-feature-1.webp" type="image/webp">
                                <img src="/img/services/tech-support-feature-1.png" loading="lazy" alt="Technical support - photo 15">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <p class="feature-main__title">Tasks assigned</p>
                            <div class="feature-main__text">
                                <p>
                                    Tasks can be assigned by contact persons. If a task is assigned by a
                                    non-contact person, it is also considered not properly assigned.
                                </p>
                            </div>

                            <picture>
                                <source srcset="/img/services/tech-support-feature-2.webp" type="image/webp">
                                <img src="/img/services/tech-support-feature-2.png" loading="lazy" alt="Technical support - photo 16">
                            </picture>

                        </div>
                        <div class="swiper-slide">
                            <p class="feature-main__title">The Kanban board</p>
                            <div class="feature-main__text">
                                <p>
                                    The Kanban board for orders has the following structure: Simple task -
                                    Urgent task - Time estimate - In progress - Testing - Completed (month, year
                                    of completed tasks).
                                </p>
                            </div>

                            <picture>
                                <source srcset="/img/services/tech-support-feature-3.webp" type="image/webp">
                                <img src="/img/services/tech-support-feature-3.png" loading="lazy" alt="Technical support - photo 17">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <p class="feature-main__title">Working hours</p>
                            <div class="feature-main__text">
                                <p>
                                    Working hours (excluding holidays): Monday to Friday from 9:00 a.m. to 7:00
                                    p.m.
                                </p>
                            </div>

                            <picture>
                                <source srcset="/img/services/tech-support-feature-4.webp" type="image/webp">
                                <img class="_lil" src="/img/services/tech-support-feature-4.png" loading="lazy"
                                    alt="Technical support - photo 18">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <p class="feature-main__title">Response time</p>
                            <div class="feature-main__text">
                                <p>
                                    Response time of the Executor to a task properly assigned by the Customer:
                                </p>
                                <ul>
                                    <li>
                                        Simple task during working hours - response within 3 hours of task
                                        registration in the system.
                                    </li>
                                    <li>
                                        Urgent task during working hours - response within 1 hour of task
                                        registration in the system.
                                    </li>
                                    <li>
                                        Urgent task during non-working hours - response within 1 hour of
                                        task registration in the system.
                                    </li>
                                    <li>
                                        Urgent task - emergency situation that the Executor must resolve at
                                        any time, including holidays. In this case, it is a task related to
                                        a complete failure of the website's performance.
                                    </li>
                                </ul>

                                <button type="button" class="btn btn-primary">Get a project estimate</button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="zebra">
    <div class="container">
        <div class="section-name section-name__blue">
            <div class="section-name__title">
                <h2 class="h2 section-name__title-text">
                    Why is working with UAITLAB
                    the best solution for your business?
                </h2>
            </div>
        </div>

        <div class="items _three" style="--item-count: 6">
            <div class="item">
                <div class="item-number">01</div>
                <p class="item-title">Flexible pricing packages</p>
                <div class="item-desc">
                    <p>
                        We tailor the technological stack, team (even down to individual employees), timeframe,
                        work format, and payment to fit your needs.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">02</div>
                <p class="item-title">Speed of work</p>
                <div class="item-desc">
                    <p>
                        Our web developers quickly create high-quality products to meet the needs of our
                        clients.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">03</div>
                <p class="item-title">Efficient resource management</p>
                <div class="item-desc">
                    <p>
                        We analyze your market and propose optimal solutions to maximize the efficiency of your
                        business decisions.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">04</div>
                <p class="item-title">Experienced specialists and successful cases in various niches</p>
                <div class="item-desc">
                    <p>
                        We have successful cases in many industries, which allows us to understand the needs of
                        our clients and provide them with quality services.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">05</div>
                <p class="item-title">Testing and quality control</p>
                <div class="item-desc">
                    <p>
                        We conduct internal testing to ensure that the product meets requirements and quality
                        standards.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">06</div>
                <p class="item-title">Transparency and accountability</p>
                <div class="item-desc">
                    <p>
                        We regularly report to the client on the stages and results of the work, allowing them
                        to monitor the process of creating the web product.
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


                                                                    <a href="https://www.agromat.ua/" class="btn btn-primary btn-icon icon-link-blank btn-link" target="_blank"></a>
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


                                                                    <a href="https://ventilation-system.com/" class="btn btn-primary btn-icon icon-link-blank btn-link" target="_blank"></a>
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


                                                                    <a href="https://yozh.com.ua/" class="btn btn-primary btn-icon icon-link-blank btn-link" target="_blank"></a>
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


                                                                    <a href="https://ag.com.ua/" class="btn btn-primary btn-icon icon-link-blank btn-link" target="_blank"></a>
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


                                                                    <a href="https://allazadneprovska.com/" class="btn btn-primary btn-icon icon-link-blank btn-link" target="_blank"></a>
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