@push('styles')
    @vite(['resources/css/services.sass'])
@endpush


@extends('__layouts.main')

@section('title', 'Web Development')
@section('description', 'Web Development is the skill of transforming your ideas and tasks into visually appealing and functional applications for your business')

@section('content')
<div class="section-bg-black services-header _webdev">
    <div class="bg-ripples"></div>
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="/">Main</a>
            </li>
            <li>
                Web Development
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
                            <span class="glitch" data-text="Web">Web</span>
                            Development
                        </h1>
                    </div>
                </div>
                <div class="header-description">
                    <p>
                        is the skill of transforming your ideas and tasks into visually appealing and functional
                        applications for your business
                    </p>
                </div>
            </div>
            <div class="services-header__img">
                <picture>
                    <source srcset="/img/services/services-header-4_540.webp" type="image/webp"
                        media="(min-device-width: 768px)">
                    <source srcset="/img/services/services-header-4_540.png" type="image/jpeg"
                        media="(min-device-width: 768px)">

                    <source srcset="/img/services/services-header-4_340.webp" type="image/webp">
                    <source srcset="/img/services/services-header-4_340.png" type="image/jpeg">

                    <img src="/img/services/services-header-4_340.png" loading="lazy" alt="Web Development - photo 1">
                </picture>
            </div>
        </div>
    </div>
</div>

<section class="title-block">
    <div class="container">
        <div class="section-name section-name__blue">
            <div class="section-name__title">
                <h2 class="h2 section-name__title-text">
                    Expertise
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="tech-labels _webdev">
    <div class="container">
        <div class="tech-labels__text">
            <h2 class="title">Products:</h2>
            <div class="desc">
                <p>
                    Our team is well-versed in creating innovative and user-friendly products that cater to your
                    specific business needs.
                </p>
            </div>
        </div>
        <div class="tech-labels__items">
            <div class="items">
                <div class="item">
                    <p>E-commerce</p>
                </div>
                <div class="item">
                    <p>Promo</p>
                </div>
                <div class="item">
                    <p>WMS</p>
                </div>
                <div class="item">
                    <p>ERP</p>
                </div>
                <div class="item">
                    <p>LMS</p>
                </div>
                <div class="item">
                    <p>Portals</p>
                </div>
                <div class="item">
                    <p>PIM</p>
                </div>
                <div class="item">
                    <p>Corporate websites</p>
                </div>
                <div class="item">
                    <p>CRM</p>
                </div>
                <div class="item">
                    <p>Mobile app</p>
                </div>
                <div class="item">
                    <p>Landing page</p>
                </div>
                <div class="item _last">
                    <p>...</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tech-labels _webdev">
    <div class="container">
        <div class="tech-labels__text">
            <h2 class="title">Industries:</h2>
            <div class="desc">
                <p>
                    Our understanding of these industries allows us to create products that align with industry
                    trends and best practices, enabling you to stay ahead of the competition.
                </p>
            </div>
        </div>
        <div class="tech-labels__items">
            <div class="items">
                <div class="item">
                    <p>Retail</p>
                </div>
                <div class="item">
                    <p>Manufacturing</p>
                </div>
                <div class="item">
                    <p>Finance</p>
                </div>
                <div class="item">
                    <p>Education</p>
                </div>
                <div class="item">
                    <p>Insurance</p>
                </div>
                <div class="item">
                    <p>HoReCa</p>
                </div>
                <div class="item">
                    <p>Specialized services</p>
                </div>
                <div class="item">
                    <p>Industrial</p>
                </div>
                <div class="item">
                    <p>Real estate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tech-labels _webdev _without-border">
    <div class="container">
        <div class="tech-labels__text">
            <h2 class="title">Tech stack:</h2>
            <div class="desc">
                <p>
                    We provide custom software development services using the following proven technologies.
                </p>
            </div>
            <div class="btn-wrapper">
                <a href="" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">
                    view all technologies
                </a>
            </div>
        </div>
        <div class="tech-labels__items">
            <div class="items">
                <div class="item">
                    <img src="/img/tech-icons/php-icon.svg" alt="Web Development - photo 2">
                    <p>Php</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/js-icon.svg" alt="Web Development - photo 3">
                    <p>javascript</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/laravel-icon.svg" alt="Web Development - photo 4">
                    <p>Laravel</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/node-icon.svg" alt="Web Development - photo 5">
                    <p>Node.js</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/restapi-icon.svg" alt="Web Development - photo 6">
                    <p>rest api</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/docker-icon.svg" alt="Web Development - photo 7">
                    <p>Docker</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/mariadb-icon.svg" alt="Web Development - photo 8">
                    <p>MariaDB</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/jquery-icon.svg" alt="Web Development - photo 9">
                    <p>jQuery</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/css-icon.svg" alt="Web Development - photo 10">
                    <p>CSS3</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/html-icon.svg" alt="Web Development - photo 11">
                    <p>HTML5</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/amp-icon.svg" alt="Web Development - photo 12">
                    <p>AMP</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/figma-icon.svg" alt="Web Development - photo 13">
                    <p>Figma</p>
                </div>
                <div class="item">
                    <img src="/img/tech-icons/illustrator-icon.svg" alt="Web Development - photo 14">
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
                        <source srcset="/img/services/road-icon-6.webp" type="image/webp">
                        <img src="/img/services/road-icon-6.png" loading="lazy" alt="Web Development - photo 15">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">01</div>
                    <p class="info-title">Pre-project preparation:</p>
                    <div class="info-desc">
                        <p>
                            We aim to obtain maximum information about the project's purpose and how the future
                            service will be used, in order to make the most accurate estimate of timelines and
                            costs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-2.webp" type="image/webp">
                        <img src="/img/services/road-icon-2.png" loading="lazy" alt="Web Development - photo 16">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">02</div>
                    <p class="info-title">Contract:</p>
                    <div class="info-desc">
                        <p>
                            We develop and agree on all project documentation and sign it in analog or through
                            an electronic document exchange (EDO) service.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-1.webp" type="image/webp">
                        <img src="/img/services/road-icon-1.png" loading="lazy" alt="Web Development - photo 17">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">03</div>
                    <p class="info-title">Technical task:</p>
                    <div class="info-desc">
                        <p>
                            We conduct interviews with authorized persons and develop tasks for the design and
                            development departments. Additional research is conducted, and the result is a
                            project waterfall with milestone descriptions, technical specifications, and a final
                            estimate.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-7.webp" type="image/webp">
                        <img src="/img/services/road-icon-7.png" loading="lazy" alt="Web Development - photo 18">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">04</div>
                    <p class="info-title">Design:</p>
                    <div class="info-desc">
                        <p>
                            There are three stages.
                        </p>
                        <p>
                            2. Work on the project concept is carried out, typically with up to three concept
                            options for approval of the project's style.
                        </p>
                        <p>
                            3. Work on the design of internal project pages.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-8.webp" type="image/webp">
                        <img src="/img/services/road-icon-8.png" loading="lazy" alt="Web Development - photo 19">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">05</div>
                    <p class="info-title">CMS development:</p>
                    <div class="info-desc">
                        <p>
                            The process of creating an administrative panel for the project is launched in
                            parallel with the design. A stage server (testing environment) for the project is
                            created.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-3.webp" type="image/webp">
                        <img src="/img/services/road-icon-3.png" loading="lazy" alt="Web Development - photo 20">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">06</div>
                    <p class="info-title">Project layout:</p>
                    <div class="info-desc">
                        <p>
                            After receiving the design, employees begin to layout the browser version of the
                            project. Each page is tested and verified by designers responsible for the project's
                            design.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-10.webp" type="image/webp">
                        <img src="/img/services/road-icon-10.png" loading="lazy" alt="Web Development - photo 21">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">07</div>
                    <p class="info-title">Programming:</p>
                    <div class="info-desc">
                        <p>
                            Linking the browser version of the project with the CMS. Also, developing the
                            project's internal functionality.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-13.webp" type="image/webp">
                        <img src="/img/services/road-icon-13.png" loading="lazy" alt="Web Development - photo 22">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">08</div>
                    <p class="info-title">Integration:</p>
                    <div class="info-desc">
                        <p>
                            Using API, linking external services with the project. Setting up and testing
                            operability according to technical specifications.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-12.webp" type="image/webp">
                        <img src="/img/services/road-icon-12.png" loading="lazy" alt="Web Development - photo 23">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">09</div>
                    <p class="info-title">Project testing:</p>
                    <div class="info-desc">
                        <p>
                            Testing the project's functionality, testing the CMS. Approval of the project by the
                            client.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-14.webp" type="image/webp">
                        <img src="/img/services/road-icon-14.png" loading="lazy" alt="Web Development - photo 24">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">10</div>
                    <p class="info-title">Project documentatio:</p>
                    <div class="info-desc">
                        <p>
                            Development of a manual and technical documentation (API, server, external
                            services).
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-4.webp" type="image/webp">
                        <img src="/img/services/road-icon-4.png" loading="lazy" alt="Web Development - photo 25">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">11</div>
                    <p class="info-title">Project release:</p>
                    <div class="info-desc">
                        <p>
                            Transferring the project to the client's production server. Testing of main
                            functions on production. Completion of the project.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <picture>
                        <source srcset="/img/services/road-icon-5.webp" type="image/webp">
                        <img src="/img/services/road-icon-5.png" loading="lazy" alt="Web Development - photo 26">
                    </picture>
                </div>
                <div class="info">
                    <div class="info-number">12</div>
                    <p class="info-title">Warranty obligations:</p>
                    <div class="info-desc">
                        <p>
                            For 6 months, the company assumes warranty obligations for the project's operability
                            according to technical specifications. Therefore, all fixes identified and made
                            during this period are carried out at UAITLAB's expense.
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
                    Why is working with UAITLAB
                    the best solution for your business?
                </h2>
            </div>
        </div>

        <div class="items">
            <div class="item">
                <div class="item-number">01</div>
                <p class="item-title">Speed of work.</p>
                <div class="item-desc">
                    <p>
                        Our web developers quickly create high-quality products to meet the needs of our
                        clients.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">02</div>
                <p class="item-title">Efficient resource management.</p>
                <div class="item-desc">
                    <p>
                        We analyze your market and propose optimal solutions to maximize the efficiency of your
                        future product for your business and increase your profitability.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">03</div>
                <p class="item-title">Technical support for 6 months.</p>
                <div class="item-desc">
                    <p>
                        We provide technical support for our products for 6 months to ensure smooth operation of
                        your website.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">04</div>
                <p class="item-title">Experienced specialists and successful cases in various niches.</p>
                <div class="item-desc">
                    <p>
                        Our web developers have significant experience working in various fields, which allows
                        us to develop effective and innovative products for our clients. We have successful
                        cases in X niches, which allows us to understand the needs of our clients and provide
                        them with quality services.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">05</div>
                <p class="item-title">"Turnkey" approach.</p>
                <div class="item-desc">
                    <p>
                        We are responsible for the entire cycle of creating a web product, from analyzing
                        business needs to launching and supporting the project.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">06</div>
                <p class="item-title">Individual design.</p>
                <div class="item-desc">
                    <p>
                        We create a design based on the client's brand book and taking into account the
                        specifics of their business.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">07</div>
                <p class="item-title">Testing and quality control.</p>
                <div class="item-desc">
                    <p>
                        We conduct internal testing to ensure that the product meets requirements and quality
                        standards.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item-number">08</div>
                <p class="item-title">Transparency and accountability.</p>
                <div class="item-desc">
                    <p>
                        We regularly report to the client on the stages and results of our work, which allows
                        them to control the process of creating the web product
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