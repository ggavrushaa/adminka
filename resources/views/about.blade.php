@vite(['resources/css/index.sass'])


@extends('__layouts.main')

@section('title', 'About Us')
@section('description', 'About Us')

<section class="section-bg-black anim-letter-header _about">
    <div class="bg-ripples"></div>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('home', app()->getLocale()) }}">Home</a></li>
            <li>About</li>
        </ul>

        <div class="case-header__content">
            <div class="case-header__info">
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number"></p>
                        <h1 class="subtitle-section__text">{{$translations['about']['header_subtitle'] ?? '-----'}}</h1>
                    </div>
                    <div class="section-name__title">
                        <div class="h1 section-name__title-text stop-motion-animation">
                            <div class="word">
                                <div class="word-letter">U</div>
                                <div class="word-letter">A</div>
                                <div class="word-anim__wrapper">
                                    <div class="word word-anim letter-i"></div>
                                </div>
                                <div class="word-letter">T</div>
                                <div class="word-letter">L</div>
                                <div class="word-letter">A</div>
                                <div class="word-letter">B</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <p>The company has projects implemented over the past 11 years in Ukraine, France, Тhe United Kingdom, Switzerland, Spain, USA.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-mission">
    <div class="container">

        <div class="mission-main">
            <div class="item">
                <p class="mission-title">OUR GOAL</p>
                <div class="mission-text">
                    <p>Our goal is to create conditions for the development of various business areas in the online environment and to build a quality infrastructure for the clients of these businesses.</p>
                </div>
            </div>
            <div class="item">
                <p class="mission-title">OUR MISSION</p>
                <div class="mission-text">
                    <p>is to help integrate business functions into the internet for the maximum realization of the potential of companies and people.</p>
                </div>
            </div>
            <div class="item _orange">
                <p class="mission-title">
                    "We speed up where a prompt reaction is necessary, save where the budget needs to be used rationally, optimize and improve processes and products where mistakes and losses are unacceptable."                </p>
                <div class="mission-author">CEO, Mykyta Zadneproskyi</div>
            </div>
        </div>
    </div>
</section>

<section class="section-bg-black about-partner">
    <div class="bg-ripples"></div>
    <div class="container">
        <div class="about-partner__title">
                                                                                                                                                    <p>For partnership, it is <span class="marker">important</span> and <span class="marker">valuable</span> to have:</p>
                                                                                                                                        </div>
        <ol class="about-partner__list">
            <li>
                <span>01</span>
                Clear understanding of the task.            </li>
            <li>
                <span>02</span>
                Full interaction in projects.            </li>
            <li>
                <span>03</span>
                Use of modern and appropriate technologies.            </li>
            <li>
                <span>04</span>
                Maximum automation.            </li>
            <li>
                <span>05</span>
                Usefulness for the business and its clients.            </li>
        </ol>
    </div>
</section>

<section class="about-stat">
    <div class="container">
        <div class="section-name">
            <div class="section-name__title">
                <h2 class="section-name__title-text">Recognition of quality and perseverance</h2>
            </div>
        </div>

        <div class="items">
            <div class="item">
                <div class="item-img">
                    <img src="/img/home/review-logo-1.svg" alt="">
                </div>
                <p class="item-title">It-rating</p>
                <div class="item-desc">
                    <p>
                        Top 10 IT companies of Ukraine, Top 5 IT companies with Yii2 framework, Laravel                    </p>
                </div>
                <a href="https://it-rating.ua/uaitlab" class="icon-arrow-right-top btn-link" target="_blank" rel="nofollow"></a>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="/img/home/review-logo-2.svg" alt="">
                </div>
                <p class="item-title">Clutch</p>
                <div class="item-desc">
                    <p>
                        Top B2B Companies Global and Ukraine since  2021.                    </p>
                </div>
                <a href="https://clutch.co/profile/uaitlab#reviews" class="icon-arrow-right-top btn-link" target="_blank" rel="nofollow"></a>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="/img/home/review-logo-3.svg" alt="">
                </div>
                <p class="item-title">tech behemoths</p>
                <div class="item-desc">
                    <p>
                        The best custom development and web design companies in Ukraine 2022-2023.                    </p>
                </div>
                <a href="https://techbehemoths.com/company/uaitlab" class="icon-arrow-right-top btn-link" target="_blank" rel="nofollow"></a>
            </div>
        </div>
    </div>
</section>

<section class="section-bg-black section-clients">
    <div class="bg-ripples"></div>

    <div class="container">
        <div class="section-name">
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
                        <button type="button" class="tab-top__item js-tab-btn active" tabindex="1" title="All" data-index="0">
                            All
                        </button>
                                                                                                            <button type="button" class="tab-top__item js-tab-btn" tabindex="1" title="Clutch.co" data-index="1">
                                    Clutch.co                                </button>
                                                                                                                                                <button type="button" class="tab-top__item js-tab-btn" tabindex="2" title="IT-rating.ua" data-index="2">
                                    IT-rating.ua                                </button>
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
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                <p>Інтернет-магазин aliso.com.ua - це вже другий успішно завершений проєкт. Команда UAITLAB завжди враховує побажання клієнта. Вони пропонують оптимальні рішення з урахуванням внутрішніх процесів компанії та потреб аудиторії. Сайт вийшов дуже красивим і user friendly. Запуск сайту пройшов успішно і тепер ми разом розвиваємо проєкт. Дякую за співпрацю! Рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                    <blockquote>Розробив з командою UAITLAB новий e-commerce проект. Маю дуже приємні враження від співпраці. </blockquote>
                                                                                <p> Вони – команда професіоналів, які реалізують рішення для бізнесу. У всіх пропозиціях простежувалася користь для бізнесу та майбутніх користувачів інтернет-магазину. Завдяки злагодженій роботі команди розробки та управління проектом, ми легко реалізували весь функціонал сайту, який був виконаний з урахуванням специфіки нашого бізнесу та внутрішніх процесів. Дизайнер точно вловила нашу ідею і розробила дизайн. Команда співпрацювала з нашими SEO фахівцями, щоб зробити проект максимально ефективним інструментом для нашого бізнесу. Всі завдання приймались в роботу та реалізовувались дуже швидко! Дякую команді за чудову роботу!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">МОРОЗОВ СЕРГІЙ СЕРГІЙОВИЧ</p>
                                                                                <p>plytkar.com.ua</p>
                                    </div>
                                </div>
                                                            <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                    <blockquote>Благодарю команду UAITLAB за разработку портала, системы краудфандинга и мессенджера.</blockquote>
                                                                                <p>Розробка соціальної мережі для музикантів www.mashamusic.org, допомогла зробити прорив у розвитку музичної культури країни і розкрити таланти великої кількості молодих артистів. Під час розробки ресурсу, команда оперативно втілювала всі наші побажання. У роботі, UAITLAB проявили відповідальність, старанність, точність, креативність. З поставленими нами завданнями вони успішно впоралися. Сміливо рекомендую співпрацю.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                <p>Хлопці допомогли врятувати розробку сайту після втрати підрядника. Нам потрібно було оперативно доробити його до старту сезону. Допомогли розібратися у всіх аспектах підготовки контенту, написали технічне завдання, запропонували рішення, врахували всі мої побажання. Проєкт реалізовано точно в строк - за 1 місяць. Сайт вийшов дуже привабливим, сучасним, технологічним. Ми продовжуємо співпрацю. Зараз команда UAITLAB створює для нас ще один сайт для нового бренду. Однозначно рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                <p>Створення порталу - важливий крок для розвитку нашої організації. UAITLAB знайшли підхід до складного проекту, передбачили і допомогли у вирішенні проблем, про які ми навіть не підозрювали. Команда змогла зрозуміти нашу ідею, потреби і створити дійсно якісний інструмент. Продуктивність, технологічність, креатив, легкість в спілкуванні - це все про них. Високий рівень професіоналізму і правильний підхід до клієнта. Завжди на зв'язку, кожен момент затверджується. Задоволені співпрацею. Рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                <p>У нас великий проєкт і ми підходили до вибору команди для реалізації дуже серйозно. Вибрали UAITLAB, тому що вони детально розписали проєкт і запропонували оптимальне рішення для наших завдань, врахували специфіку аудиторії та бізнесу, вибудували архітектуру з урахуванням наших планів розвитку в майбутньому. Так само, вони розробили для нас фірмовий стиль та інструкції для використання сайту. Крім автоматизації бізнес-процесів, у нас був редизайн сайту і дуже важливо було під час релізу не втратити наявні параметри SEO. UAITLAB впоралися з усіма завданнями на 100%. Вони чітко планували процес і завжди повідомляли про хід проєкту. Зараз, якщо виникають питання або доповнення, команда підтримує проєкт! Продовжую співпрацю. Рекомендую!</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                    <blockquote>"We highly value the accuracy in meeting our business objectives, as well as the achieved results."</blockquote>
                                                                                <p>Within three months, UAITLAB delivered a complete website that matched the client's specifications and approved prototypes. The client lauded the service provider's accuracy in meeting their business goals, adherence to deadlines, prompt responses, and ability to stay within the budget.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-2161099" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Katerina Zolotaryova</p>
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
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                    <blockquote>“They went the extra mile, and we trust them. Their team did everything brilliantly.”</blockquote>
                                                                                <p>The website met expectations and is easy to use. UAITLAB remained engaged even after the launch, addressing questions and handling minor tweaks. The engagement process and objectives were clearly defined and successfully executed. Their design skill is a hallmark of their high-quality work.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1734372" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Dmitri Bezruchko</p>
                                                                                    <p class="reviewer-info__text_grey">Head of Communications</p>
                                                                                <p>4H Agency</p>
                                    </div>
                                </div>
                                                            <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                    <blockquote>“My team is proud to have such a high-quality platform. Everything is perfect.”</blockquote>
                                                                                <p>UAITLAB completed the initial development quickly without sacrificing quality. As a result, the website has attracted international recognition. As they’ve continued their partnership with the client, they’ve demonstrated their dedication by extending their hours to meet tight deadlines.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1696169" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Arthur Ponomarenko</p>
                                                                                    <p class="reviewer-info__text_grey">CEO</p>
                                                                                <p>Yözh Inс</p>
                                    </div>
                                </div>
                                                            <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                    <blockquote>"When we present our desire for new features or ideas, their team advises us from a technical and sales perspective."</blockquote>
                                                                                <p>Customer feedback on their web design and development work has been positive. Their team communicates regularly, assisting with any task asked of them. Customers can expect a trustworthy and skilled team of problem-solvers.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1289138" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Alex Khomenko</p>
                                                                                    <p class="reviewer-info__text_grey">Owner</p>
                                                                                <p>Dom4M</p>
                                    </div>
                                </div>
                                                            <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                    <blockquote>"Not only are we pleased with the website, but our clients are too."</blockquote>
                                                                                <p>Users and internal stakeholders alike are pleased with the new website, and find it both easy to navigate and visually appealing. UAITLAB. Online Business Solutions’ team is communicative, dedicated, and talented.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-1284726" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Ksenia Pogasyi</p>
                                                                                    <p class="reviewer-info__text_grey">Owner</p>
                                                                                <p> I Gift You</p>
                                    </div>
                                </div>
                                                            <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                    <blockquote>"There was a clear implementation of agreements."</blockquote>
                                                                                <p>Thanks to UAITLAB, the client saw positive results in terms of customer satisfaction, reviews, and cost savings. The team took all the client's needs into account and offered several solutions. They communicated effectively through daily meetings and provided excellent availability throughout.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab#review-2177787" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Head of Sales Department</p>
                                                                                    <p class="reviewer-info__text_grey">Inna Chaika</p>
                                                                                <p>INSURANCE COMPANY VARTO</p>
                                    </div>
                                </div>
                                                            <div class="review-card">
                                    <div class="review-star">
                                        <div class="review-star__number">5.0</div>
                                        <div class="review-star__grey">
                                            <span class="review-star__count"
                                                style="width: calc(100% * 5 / 5)"></span>
                                        </div>
                                    </div>
                                    <div class="editor">
                                                                                    <blockquote>"Everything was perfectly managed."</blockquote>
                                                                                <p>The website received positive feedback from end customers for its upload speed, design, and stylish interface. Moreover, the client saw increased order volume and brand awareness thanks to UAITLAB's work. The team was engaged, timely in delivery, and responsive even outside working hours.</p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="https://clutch.co/profile/uaitlab?project_cost=10000#review-275068" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                    </div>
                                    <div class="reviewer-info">
                                        <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Arthur Ponomarenko</p>
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
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                            <blockquote>"We highly value the accuracy in meeting our business objectives, as well as the achieved results."</blockquote>
                                                                                                        <p>Within three months, UAITLAB delivered a complete website that matched the client's specifications and approved prototypes. The client lauded the service provider's accuracy in meeting their business goals, adherence to deadlines, prompt responses, and ability to stay within the budget.</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://clutch.co/profile/uaitlab#review-2161099" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                                </div>
                                                <div class="reviewer-info">
                                                    <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Katerina Zolotaryova</p>
                                                                                                            <p class="reviewer-info__text_grey">$review->position</p>
                                                                                                        <p>Site24</p>
                                                </div>
                                            </div>
                                                                                    <div class="review-card">
                                                <div class="review-star">
                                                    <div class="review-star__number">5.0</div>
                                                    <div class="review-star__grey">
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                            <blockquote>“They went the extra mile, and we trust them. Their team did everything brilliantly.”</blockquote>
                                                                                                        <p>The website met expectations and is easy to use. UAITLAB remained engaged even after the launch, addressing questions and handling minor tweaks. The engagement process and objectives were clearly defined and successfully executed. Their design skill is a hallmark of their high-quality work.</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://clutch.co/profile/uaitlab#review-1734372" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                                </div>
                                                <div class="reviewer-info">
                                                    <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Dmitri Bezruchko</p>
                                                                                                            <p class="reviewer-info__text_grey">$review->position</p>
                                                                                                        <p>4H Agency</p>
                                                </div>
                                            </div>
                                                                                    <div class="review-card">
                                                <div class="review-star">
                                                    <div class="review-star__number">5.0</div>
                                                    <div class="review-star__grey">
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                            <blockquote>“My team is proud to have such a high-quality platform. Everything is perfect.”</blockquote>
                                                                                                        <p>UAITLAB completed the initial development quickly without sacrificing quality. As a result, the website has attracted international recognition. As they’ve continued their partnership with the client, they’ve demonstrated their dedication by extending their hours to meet tight deadlines.</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://clutch.co/profile/uaitlab#review-1696169" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                                </div>
                                                <div class="reviewer-info">
                                                    <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Arthur Ponomarenko</p>
                                                                                                            <p class="reviewer-info__text_grey">$review->position</p>
                                                                                                        <p>Yözh Inс</p>
                                                </div>
                                            </div>
                                                                                    <div class="review-card">
                                                <div class="review-star">
                                                    <div class="review-star__number">5.0</div>
                                                    <div class="review-star__grey">
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                            <blockquote>"When we present our desire for new features or ideas, their team advises us from a technical and sales perspective."</blockquote>
                                                                                                        <p>Customer feedback on their web design and development work has been positive. Their team communicates regularly, assisting with any task asked of them. Customers can expect a trustworthy and skilled team of problem-solvers.</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://clutch.co/profile/uaitlab#review-1289138" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                                </div>
                                                <div class="reviewer-info">
                                                    <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Alex Khomenko</p>
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
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                            <blockquote>"Not only are we pleased with the website, but our clients are too."</blockquote>
                                                                                                        <p>Users and internal stakeholders alike are pleased with the new website, and find it both easy to navigate and visually appealing. UAITLAB. Online Business Solutions’ team is communicative, dedicated, and talented.</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://clutch.co/profile/uaitlab#review-1284726" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                                </div>
                                                <div class="reviewer-info">
                                                    <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Ksenia Pogasyi</p>
                                                                                                            <p class="reviewer-info__text_grey">Owner</p>
                                                                                                        <p> I Gift You</p>
                                                </div>
                                            </div>
                                                                                    <div class="review-card">
                                                <div class="review-star">
                                                    <div class="review-star__number">5.0</div>
                                                    <div class="review-star__grey">
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                            <blockquote>"There was a clear implementation of agreements."</blockquote>
                                                                                                        <p>Thanks to UAITLAB, the client saw positive results in terms of customer satisfaction, reviews, and cost savings. The team took all the client's needs into account and offered several solutions. They communicated effectively through daily meetings and provided excellent availability throughout.</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://clutch.co/profile/uaitlab#review-2177787" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                                </div>
                                                <div class="reviewer-info">
                                                    <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Head of Sales Department</p>
                                                                                                            <p class="reviewer-info__text_grey">Inna Chaika</p>
                                                                                                        <p>INSURANCE COMPANY VARTO</p>
                                                </div>
                                            </div>
                                                                                    <div class="review-card">
                                                <div class="review-star">
                                                    <div class="review-star__number">5.0</div>
                                                    <div class="review-star__grey">
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                            <blockquote>"Everything was perfectly managed."</blockquote>
                                                                                                        <p>The website received positive feedback from end customers for its upload speed, design, and stylish interface. Moreover, the client saw increased order volume and brand awareness thanks to UAITLAB's work. The team was engaged, timely in delivery, and responsive even outside working hours.</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://clutch.co/profile/uaitlab?project_cost=10000#review-275068" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                                </div>
                                                <div class="reviewer-info">
                                                    <p class="reviewer-info__text_bold reviewer-info__text_uppercase">Arthur Ponomarenko</p>
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
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                        <p>Інтернет-магазин aliso.com.ua - це вже другий успішно завершений проєкт. Команда UAITLAB завжди враховує побажання клієнта. Вони пропонують оптимальні рішення з урахуванням внутрішніх процесів компанії та потреб аудиторії. Сайт вийшов дуже красивим і user friendly. Запуск сайту пройшов успішно і тепер ми разом розвиваємо проєкт. Дякую за співпрацю! Рекомендую!</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                            <blockquote>Розробив з командою UAITLAB новий e-commerce проект. Маю дуже приємні враження від співпраці. </blockquote>
                                                                                                        <p> Вони – команда професіоналів, які реалізують рішення для бізнесу. У всіх пропозиціях простежувалася користь для бізнесу та майбутніх користувачів інтернет-магазину. Завдяки злагодженій роботі команди розробки та управління проектом, ми легко реалізували весь функціонал сайту, який був виконаний з урахуванням специфіки нашого бізнесу та внутрішніх процесів. Дизайнер точно вловила нашу ідею і розробила дизайн. Команда співпрацювала з нашими SEO фахівцями, щоб зробити проект максимально ефективним інструментом для нашого бізнесу. Всі завдання приймались в роботу та реалізовувались дуже швидко! Дякую команді за чудову роботу!</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
                                                </div>
                                                <div class="reviewer-info">
                                                    <p class="reviewer-info__text_bold reviewer-info__text_uppercase">МОРОЗОВ СЕРГІЙ СЕРГІЙОВИЧ</p>
                                                                                                        <p>plytkar.com.ua</p>
                                                </div>
                                            </div>
                                                                                    <div class="review-card">
                                                <div class="review-star">
                                                    <div class="review-star__number">5.0</div>
                                                    <div class="review-star__grey">
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                            <blockquote>Благодарю команду UAITLAB за разработку портала, системы краудфандинга и мессенджера.</blockquote>
                                                                                                        <p>Розробка соціальної мережі для музикантів www.mashamusic.org, допомогла зробити прорив у розвитку музичної культури країни і розкрити таланти великої кількості молодих артистів. Під час розробки ресурсу, команда оперативно втілювала всі наші побажання. У роботі, UAITLAB проявили відповідальність, старанність, точність, креативність. З поставленими нами завданнями вони успішно впоралися. Сміливо рекомендую співпрацю.</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                        <p>Хлопці допомогли врятувати розробку сайту після втрати підрядника. Нам потрібно було оперативно доробити його до старту сезону. Допомогли розібратися у всіх аспектах підготовки контенту, написали технічне завдання, запропонували рішення, врахували всі мої побажання. Проєкт реалізовано точно в строк - за 1 місяць. Сайт вийшов дуже привабливим, сучасним, технологічним. Ми продовжуємо співпрацю. Зараз команда UAITLAB створює для нас ще один сайт для нового бренду. Однозначно рекомендую!</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                        <p>Створення порталу - важливий крок для розвитку нашої організації. UAITLAB знайшли підхід до складного проекту, передбачили і допомогли у вирішенні проблем, про які ми навіть не підозрювали. Команда змогла зрозуміти нашу ідею, потреби і створити дійсно якісний інструмент. Продуктивність, технологічність, креатив, легкість в спілкуванні - це все про них. Високий рівень професіоналізму і правильний підхід до клієнта. Завжди на зв'язку, кожен момент затверджується. Задоволені співпрацею. Рекомендую!</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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
                                                        <span class="review-star__count"
                                                            style="width: calc(100% * 5 / 5)"></span>
                                                    </div>
                                                </div>
                                                <div class="editor">
                                                                                                        <p>У нас великий проєкт і ми підходили до вибору команди для реалізації дуже серйозно. Вибрали UAITLAB, тому що вони детально розписали проєкт і запропонували оптимальне рішення для наших завдань, врахували специфіку аудиторії та бізнесу, вибудували архітектуру з урахуванням наших планів розвитку в майбутньому. Так само, вони розробили для нас фірмовий стиль та інструкції для використання сайту. Крім автоматизації бізнес-процесів, у нас був редизайн сайту і дуже важливо було під час релізу не втратити наявні параметри SEO. UAITLAB впоралися з усіма завданнями на 100%. Вони чітко планували процес і завжди повідомляли про хід проєкту. Зараз, якщо виникають питання або доповнення, команда підтримує проєкт! Продовжую співпрацю. Рекомендую!</p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="https://it-rating.ua/uaitlab" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">Read full review</a>
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

<section class="section-bg-black section-tech" id="section-tech">
    <div class="bg-ripples"></div>
    <div class="container">
        <div class="tech-top">
            <div class="section-name">
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">Tech stack</h2>
                </div>
                <div class="btn-wrapper">
                    <a href="/tech-stack" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">view all technologies</a>
                </div>
            </div>
            <div class="tech-description">
                <p>We provide custom software development services using the following proven technologies.</p>
                <div class="btn-wrapper">
                    <a href="/tech-stack" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">view all technologies</a>
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
                                                                                            <button type="button" class="tab-top__item js-tab-btn active"
                                tabindex="0"
                                title="Frameworks"
                                data-index="0">
                                Frameworks                            </button>
                                                                                                                            <button type="button" class="tab-top__item js-tab-btn active"
                                tabindex="1"
                                title="Languages"
                                data-index="1">
                                Languages                            </button>
                                                                                                                                                                        <button type="button" class="tab-top__item js-tab-btn active"
                                tabindex="2"
                                title="Tools"
                                data-index="2">
                                Tools                            </button>
                                                                                                                            <button type="button" class="tab-top__item js-tab-btn active"
                                tabindex="3"
                                title="Technologies"
                                data-index="3">
                                Technologies                            </button>
                                                                                                                            <button type="button" class="tab-top__item js-tab-btn active"
                                tabindex="4"
                                title="Applications and bases"
                                data-index="4">
                                Applications and bases                            </button>
                                                                                                                            <button type="button" class="tab-top__item js-tab-btn active"
                                tabindex="5"
                                title="Integration"
                                data-index="5">
                                Integration                            </button>
                                                                                                                            <button type="button" class="tab-top__item js-tab-btn active"
                                tabindex="6"
                                title="Design"
                                data-index="6">
                                Design                            </button>
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
                                        Laravel                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d48051bd8a1.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d48051bd57a.svg" alt="Yii2">
                                        </div>
                                        Yii2                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35bc362297.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35bc36215c.svg" alt="Vue.js">
                                        </div>
                                        Vue.js                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35bdc1fb03.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35bdc1ef68.svg" alt="Bootstrap">
                                        </div>
                                        Bootstrap                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d354692ab49.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d354692a63c.svg" alt="Reactnative">
                                        </div>
                                        Reactnative                                    </div>
                                                            </div>
                                                                                                                            <div class="tab-bottom__item _js-tab-1 ">
                                                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35bfb2407c.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4806164fea.svg" alt="PHP">
                                        </div>
                                        PHP                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35c0fd86b3.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35c0fd842a.svg" alt="JavaScript">
                                        </div>
                                        JavaScript                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d49d588c0ba.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d49d588bf05.svg" alt="Typescript">
                                        </div>
                                        Typescript                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4a917e5822.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4a917e56ab.svg" alt="Solidity">
                                        </div>
                                        Solidity                                    </div>
                                                            </div>
                                                                                                                                                                        <div class="tab-bottom__item _js-tab-2 ">
                                                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4985ddf721.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d345d5c2f4d.svg" alt="jQuery">
                                        </div>
                                        jQuery                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d34612a8a0c.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d34612a80ae.svg" alt="CSS3">
                                        </div>
                                        CSS3                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d346690784e.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d346690778a.svg" alt="SASS">
                                        </div>
                                        SASS                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d346a2dacbe.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d346a2dabb5.svg" alt="LESS">
                                        </div>
                                        LESS                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d34783001f6.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d34782f4094.svg" alt="Gulp">
                                        </div>
                                        Gulp                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d347cfab8c4.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d347cfab65f.svg" alt="GitHub">
                                        </div>
                                        GitHub                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d3480bb44a5.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d3480bb438d.svg" alt="Composer">
                                        </div>
                                        Composer                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d3484575b4a.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d34845759fd.svg" alt="Blender">
                                        </div>
                                        Blender                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d348aac7a8f.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d348aac797c.svg" alt="HTML5">
                                        </div>
                                        HTML5                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d348ead2dd5.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d348ead2a69.svg" alt="Three.js">
                                        </div>
                                        Three.js                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d34bbc8bd20.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d34bbc8b29e.svg" alt="LottieFiles">
                                        </div>
                                        LottieFiles                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d3559b0fbac.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d3559b0f5f0.svg" alt="Firebase">
                                        </div>
                                        Firebase                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35612cf329.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35612ce93a.svg" alt="WebSocket">
                                        </div>
                                        WebSocket                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4a9f27f896.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4a9f27f70d.svg" alt="Plesk">
                                        </div>
                                        Plesk                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4aa4cd0855.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4aa4cd067d.svg" alt="AWS">
                                        </div>
                                        AWS                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4acca65494.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4acca65353.svg" alt="Git">
                                        </div>
                                        Git                                    </div>
                                                            </div>
                                                                                                                            <div class="tab-bottom__item _js-tab-3 ">
                                                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d34c3d8d4f6.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d34c3d8d2eb.svg" alt="AMP">
                                        </div>
                                        AMP                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d34ce097084.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d34ce096f86.svg" alt="PWA">
                                        </div>
                                        PWA                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4a987dfc11.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4a987dfadb.svg" alt="WebRTC">
                                        </div>
                                        WebRTC                                    </div>
                                                            </div>
                                                                                                                            <div class="tab-bottom__item _js-tab-4 ">
                                                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d34d73cd352.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d34d73ccef2.svg" alt="Redis">
                                        </div>
                                        Redis                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d34dc4c07ab.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d34dc4bfed9.svg" alt="Docker">
                                        </div>
                                        Docker                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d34e089c9a4.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d34edf7ea2d.svg" alt="MariaDB">
                                        </div>
                                        MariaDB                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d356edcee11.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d356edcea4b.svg" alt="MySQL">
                                        </div>
                                        MySQL                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d3574b3b3f8.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d3574b3afbc.svg" alt="MongoDB">
                                        </div>
                                        MongoDB                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35c20efe5a.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35c20ef86d.svg" alt="Memcach">
                                        </div>
                                        Memcach                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35c550b0b3.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35c550ab3e.svg" alt="Apache">
                                        </div>
                                        Apache                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35c8a1d717.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35c8a1cdcd.svg" alt="Node.js">
                                        </div>
                                        Node.js                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35ccda8ebf.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35ccda8cbd.svg" alt="WebGL">
                                        </div>
                                        WebGL                                    </div>
                                                            </div>
                                                                                                                            <div class="tab-bottom__item _js-tab-5 ">
                                                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35d1190721.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35d1190162.svg" alt="laximo">
                                        </div>
                                        laximo                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35d8ce4ed9.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35d8ce497b.svg" alt="1С">
                                        </div>
                                        1С                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35de60c0c6.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35de60ba42.svg" alt="Wayforpay">
                                        </div>
                                        Wayforpay                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35e3410775.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35e340fe81.svg" alt="LiqPay">
                                        </div>
                                        LiqPay                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35e898b6d2.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35e898af86.svg" alt="NovaPoshta">
                                        </div>
                                        NovaPoshta                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35eebef6cb.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35eebef243.svg" alt="REST API">
                                        </div>
                                        REST API                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35f2d9cd92.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35f2d9c5f7.svg" alt="Opendatabot">
                                        </div>
                                        Opendatabot                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35f72a63e5.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35f72a5b25.svg" alt="TecDoc">
                                        </div>
                                        TecDoc                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d35fe0e9591.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d35fe0e9159.svg" alt="GoogleMap">
                                        </div>
                                        GoogleMap                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d36044121f5.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d36044120ad.svg" alt="Zoom">
                                        </div>
                                        Zoom                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d3609b69db2.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d3609b683a8.svg" alt="TurboSMS">
                                        </div>
                                        TurboSMS                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d360d753359.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d360d752f53.svg" alt="Portmone">
                                        </div>
                                        Portmone                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d49e27b0a5a.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d49e27b089d.svg" alt="Amazon">
                                        </div>
                                        Amazon                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d49e9e96f1f.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d49e9e967b8.svg" alt="PayPal">
                                        </div>
                                        PayPal                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d49f3e3e239.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d49f3e3dd3b.svg" alt="MicrosoftDynamics">
                                        </div>
                                        MicrosoftDynamics                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d49fbe1d197.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d49fbe1c58e.svg" alt="masterbuh">
                                        </div>
                                        masterbuh                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4a03ad2f60.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4a03ad2c0b.svg" alt="R2">
                                        </div>
                                        R2                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4a0a313168.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4a0a313037.svg" alt="YouControl">
                                        </div>
                                        YouControl                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4a7a2db965.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4a7a2db7c1.svg" alt="Przelewy24">
                                        </div>
                                        Przelewy24                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4a833e6aef.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4a833e6a35.svg" alt="Вчасно">
                                        </div>
                                        Вчасно                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4a8b5425bb.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4a8b542232.svg" alt="Вчасно.Каса">
                                        </div>
                                        Вчасно.Каса                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d4abb7d0c82.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d4abb7d0ae6.svg" alt="Укр Пошта">
                                        </div>
                                        Укр Пошта                                    </div>
                                                            </div>
                                                                                                                            <div class="tab-bottom__item _js-tab-6 ">
                                                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d3620f2155c.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d3620f211eb.svg" alt="Illustrator">
                                        </div>
                                        Illustrator                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d3626a78c24.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d3626a784c4.svg" alt="Photoshop">
                                        </div>
                                        Photoshop                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d362da3c1de.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d362da3bbbf.svg" alt="Adobe XD ">
                                        </div>
                                        Adobe XD                                     </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d363951cf14.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d363951c5db.svg" alt="InVision">
                                        </div>
                                        InVision                                    </div>
                                                                    <div class="tech-item">
                                        <div class="img">
                                            <img src="/uploads/tech/65d363cfe0bcc.svg" alt="">
                                            <img class="hover" src="/uploads/tech/65d363cfe0398.svg" alt="Figma">
                                        </div>
                                        Figma                                    </div>
                                                            </div>
                                                                                        </div>
            </div>
            <div class="btn-wrapper">
                <a href="/tech-stack" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">view all technologies</a>
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

            <div class="screen-size"
                style="display: none; position: fixed; bottom: 10px; right: 10px; background-color: #2B2B2B; padding: 5px 20px; font-size: 12px; color: white">
                <p class="ss-w"></p>
                <p class="ss-h"></p>
            </div>