@push('styles')
    @vite(['resources/css/case.sass'])
@endpush

@extends('__layouts.main')

@section('title', 'Cases')
@section('description',
    'Our cases are the best examples of our work. We are proud of each project and are happy to
    share them with you.')

@section('content')
    <div class="section-bg-black case-header">
        <div class="bg-ripples"></div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home', app()->getLocale()) }}">Main</a></li>
                <li><a href="{{ route('cases', app()->getLocale()) }}">Cases</a></li>
                <li>Yözh</li>
            </ul>
            <div class="case-header__content">
                <div class="case-header__info">
                    <div class="section-name">
                        <div class="section-name__subtitle subtitle-section">
                            <p class="subtitle-section__number"></p>
                            <p class="subtitle-section__text">e-commerce</p>
                        </div>
                        <div class="section-name__title">
                            <h1 class="h1 section-name__title-text">Yözh Outfits </h1>
                        </div>
                    </div>
                    <div class="header-description">
                        <p>
                            Yözh - визнаний український бренд одягу, спеціалізується на створенні текстильних виробів.
                            Завдяки високій якості та власному виробництву він визначається як один з провідних виробників
                            одягу в Україні. Унікальний дизайн та увага до деталей роблять Yözh відомим серед шанувальників
                            стильного та комфортного одягу.
                        </p>
                    </div>
                </div>
                <div class="case-header__img">
                    <picture>
                        <img src="/img/case/yozh/header.svg" alt="" title="">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <section class="case-banner">
        <div class="container">
            <div class="text">
                <h2 class="h2 title">
                    Yözh розробляє одяг, який тепло огортає та створює атмосферу дому, незалежно від твого місцеперебування
                </h2>
            </div>

            <div class="img">
                <picture>
                    <source srcset="/img/case/yozh/case-banner_1920.webp" type="image/webp" media="(min-width: 768px)">
                    <source srcset="/img/case/yozh/case-banner_1920.png" type="image/png" media="(min-width: 768px)">

                    <source srcset="/img/case/yozh/case-banner_320.webp" type="image/webp">
                    <source srcset="/img/case/yozh/case-banner_320.png" type="image/png">

                    <img src="/img/case/yozh/case-banner_320.png" loading="lazy" alt="" title="">
                </picture>
            </div>
        </div>

        <div class="marquees">
            <div class="marquee-text">
                <div class="marquee-group">
                    <span class="marquee-grey">E-commerce E-commerce E-commerc E-commerce E-commerce E-commerc</span>
                </div>
                <div class="marquee-group">
                    <span class="marquee-grey">E-commerce E-commerce E-commerc E-commerce E-commerce E-commerc</span>
                </div>
            </div>
            <div class="marquee-text">
                <div class="marquee-group reverse_scroll">
                    <span class="marquee-grey">E-commerce E-commerce E-commerc E-commerce E-commerce E-commerc</span>
                </div>
                <div class="marquee-group reverse_scroll">
                    <span class="marquee-grey">E-commerce E-commerce E-commerc E-commerce E-commerce E-commerc</span>
                </div>
            </div>
            <div class="marquee-text">
                <div class="marquee-group">
                    <span class="marquee-grey">E-commerce E-commerce E-commerc E-commerce E-commerce E-commerc</span>
                </div>
                <div class="marquee-group">
                    <span class="marquee-grey">E-commerce E-commerce E-commerc E-commerce E-commerce E-commerc</span>
                </div>
            </div>
        </div>
    </section>

    <section class="list-block">
        <div class="container">
            <div class="list-item">
                <p class="h2">Цілі:</p>
                <ul>
                    <li>
                        <span>01</span>
                        Створити сайт, спрямований на глобальний ринок, з метою залучення аудиторії з усіх куточків світу.
                    </li>
                    <li>
                        <span>02</span>
                        Забезпечити легкий доступ до продукції інтернет-магазину з будь-якого пристрою і точки світу.
                    </li>
                    <li>
                        <span>03</span>
                        Впровадження високого рівня кібербезпеки для захисту конфіденційної інформації користувачів.
                    </li>
                    <li>
                        <span>04</span>
                        Оптимізація системи логістики та вибір ефективних методів доставлення для забезпечення швидкого та
                        надійного обслуговування клієнтів у різних куточках світу.
                    </li>
                </ul>
            </div>

            <div class="list-item">
                <p class="h2">Задачі:</p>
                <ul>
                    <li>
                        <span>01</span>
                        Розробка гнучкої архітектури сайту для легкої модифікації та розширення.
                    </li>
                    <li>
                        <span>02</span>
                        Оптимізація коду та зображень для зменшення часу завантаження сторінок.
                    </li>
                    <li>
                        <span>03</span>
                        Створення системи відстеження замовлень для користувачів та покращення спілкування зі службами
                        доставлення.
                    </li>
                    <li>
                        <span>04</span>
                        Розробка особистого кабінету користувача з інтуїтивним інтерфейсом та зручними налаштуваннями.
                    </li>
                    <li>
                        <span>05</span>
                        Впровадження інтуїтивного інтерфейсу для користувачів для зручної онлайн-оплати та інтеграція
                        безпечних платіжних систем для забезпечення надійності та конфіденційності операцій.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="scroll-block _js-photo-scroll _horizontal" data-animation="horizontal">
        <div class="scroll-block__wrapper">
            <div class="scroll-item">
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/yozh/case-scroll-img-1.webp" type="image/webp">
                        <source srcset="/img/case/yozh/case-scroll-img-1.png" type="image/png">

                        <img src="/img/case/yozh/case-scroll-img-1.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/yozh/case-scroll-img-2.webp" type="image/webp">
                        <source srcset="/img/case/yozh/case-scroll-img-2.png" type="image/png">

                        <img src="/img/case/yozh/case-scroll-img-2.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/yozh/case-scroll-img-3.webp" type="image/webp">
                        <source srcset="/img/case/yozh/case-scroll-img-3.png" type="image/png">

                        <img src="/img/case/yozh/case-scroll-img-3.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/yozh/case-scroll-img-4.webp" type="image/webp">
                        <source srcset="/img/case/yozh/case-scroll-img-4.png" type="image/png">

                        <img src="/img/case/yozh/case-scroll-img-4.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/yozh/case-scroll-img-5.webp" type="image/webp">
                        <source srcset="/img/case/yozh/case-scroll-img-5.png" type="image/png">

                        <img src="/img/case/yozh/case-scroll-img-5.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/yozh/case-scroll-img-6.webp" type="image/webp">
                        <source srcset="/img/case/yozh/case-scroll-img-6.png" type="image/png">

                        <img src="/img/case/yozh/case-scroll-img-6.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/yozh/case-scroll-img-7.webp" type="image/webp">
                        <source srcset="/img/case/yozh/case-scroll-img-7.png" type="image/png">

                        <img src="/img/case/yozh/case-scroll-img-7.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/yozh/case-scroll-img-8.webp" type="image/webp">
                        <source srcset="/img/case/yozh/case-scroll-img-8.png" type="image/png">

                        <img src="/img/case/yozh/case-scroll-img-8.png" loading="lazy" alt="" title="">
                    </picture>
                </div>
                <div class="scroll-image">
                    <picture>
                        <source srcset="/img/case/yozh/case-scroll-img-9.webp" type="image/webp">
                        <source srcset="/img/case/yozh/case-scroll-img-9.png" type="image/png">

                        <img src="/img/case/yozh/case-scroll-img-9.png" loading="lazy" alt="" title="">
                    </picture>
                </div>

            </div>
        </div>
    </div>

    <section class="solution">
        <div class="container">
            <div class="solution-header">
                <h2 class="solution-header__title">Рішення</h2>
            </div>
            <ul class="solution-main">
                <li class="solution-item _js-solution-swipers">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">01</span>
                            <p>
                                Зручний та легкий у використанні вебресурс із логічно структурованою архітектурою, для
                                комфортного орієнтувалися серед великої кількості цікавого контенту
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/yozh/solution-1.webp" type="image/webp">
                            <source srcset="/img/case/yozh/solution-1.png" type="image/png">

                            <img src="/img/case/yozh/solution-1.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">02</span>
                            <p>
                                Розділи "Жіночі моделі" та "Чоловічі моделі" розроблені враховуючи принципи інтуїтивного
                                дизайну та відображені у формі лукбуку. Кожна модель представлена з детальним описом,
                                включаючи інформацію про склад, особливості догляду та розмірну сітку, що забезпечує
                                користувачам зручність та повноту інформації, що робить покупки приємними та осмисленими.
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/yozh/solution-2.webp" type="image/webp">
                            <source srcset="/img/case/yozh/solution-2.png" type="image/png">

                            <img src="/img/case/yozh/solution-2.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">03</span>
                            <p>
                                Відображення аксесуарів у загальному стилі сайту допомагає користувачам візуально оцінити їх
                                у контексті. Детальний опис кожного аксесуара і вся колірна палітра виробів надає
                                користувачам повний обсяг інформації перед покупкою. (картинка)
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/yozh/solution-3.webp" type="image/webp">
                            <source srcset="/img/case/yozh/solution-3.png" type="image/png">

                            <img src="/img/case/yozh/solution-3.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">04</span>
                            <p>
                                Однією з родзинок є розділ #МЕНІ ПОЩАСТИТЬ який поєднав інтерактив з грою і став цікавою
                                фішкою для користувачів
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/yozh/solution-4.webp" type="image/webp">
                            <source srcset="/img/case/yozh/solution-4.png" type="image/png">

                            <img src="/img/case/yozh/solution-4.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">05</span>
                            <p>
                                СВІТ YÖZH - інформаційний розділ, де відвідувачі сайту можуть долучитися до деталей
                                виробництва, отримати інформацію про використані матеріали та ознайомитися з новинами
                                бренду.
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/yozh/solution-5.webp" type="image/webp">
                            <source srcset="/img/case/yozh/solution-5.png" type="image/png">

                            <img src="/img/case/yozh/solution-5.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">06</span>
                            <p>
                                Інтегровані послуги доставлення та онлайн-оплати роблять товарів покупку зручною та
                                дозволяють здійснити замовлення у будь-який куточок світу
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/yozh/solution-6.webp" type="image/webp">
                            <source srcset="/img/case/yozh/solution-6.png" type="image/png">

                            <img src="/img/case/yozh/solution-6.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">07</span>
                            <p>
                                Завдяки адаптивному дизайну архітектура сайту миттєво адаптується під пристрій забезпечуючи
                                оптимальне відображення та легкість використання
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/yozh/solution-7.webp" type="image/webp">
                            <source srcset="/img/case/yozh/solution-7.png" type="image/png">

                            <img src="/img/case/yozh/solution-7.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">08</span>
                            <p>
                                Зручний особистий кабінет користувача, що містить інформацію про статуси всіх замовлень, та
                                опція "Список бажань", яка дозволяє зберігати у кабінеті товари, що сподобались, роблять
                                процес покупки максимально зручним.
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/yozh/solution-8.webp" type="image/webp">
                            <source srcset="/img/case/yozh/solution-8.png" type="image/png">

                            <img src="/img/case/yozh/solution-8.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
                <li class="solution-item">
                    <div class="solution-item__info">
                        <div class="solution-item__text">
                            <span class="solution-item__text_number">09</span>
                            <p>
                                что-то про апсейл в корзине
                            </p>
                        </div>
                    </div>

                    <div class="solution-item__img">
                        <picture>
                            <source srcset="/img/case/yozh/solution-9.webp" type="image/webp">
                            <source srcset="/img/case/yozh/solution-9.png" type="image/png">

                            <img src="/img/case/yozh/solution-9.png" loading="lazy" alt="" title="">
                        </picture>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="section-bg-black additional">
        <div class="bg-ripples"></div>
        <div class="container">
            <h2 class="h2 additional-title">Додатково:</h2>
            <ul class="additional-list">
                <li class="w-100 w-46__1280 w-56__1440 count-gap-3__1440">
                    <span class="number">01</span>
                    <p>
                        Розроблена адміністративна панель управління, яка дозволяє керувати всією інформацією на сайті,
                        надаючи можливість ефективного редагування та налаштування різних елементів.
                    </p>
                </li>
                <li class="w-50 w-27__1280 w-22__1440 count-gap-3__1440">
                    <span class="number">02</span>
                    <p>
                        Інтеграція нової пошти
                    </p>
                </li>
                <li class="w-50 w-27__1280 w-22__1440 count-gap-3__1440">
                    <span class="number">03</span>
                    <p>
                        Автоматизована система управління замовленнями
                    </p>
                </li>
                <li class="w-33 w-40__1280 count-gap-3__1440">
                    <span class="number">04</span>
                    <p>
                        Матчінг і структурування замовлень
                    </p>
                </li>
                <li class="w-33 w-30__1280 count-gap-3__1440">
                    <span class="number">05</span>
                    <p>
                        Формування реєстру відправок
                    </p>
                </li>
                <li class="w-33 w-30__1280 count-gap-3__1440">
                    <span class="number">06</span>
                    <p>
                        Автоматизація обрання пакування та друку наліпок
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="about-project">
        <div class="container">
            <div class="about-project__list">
                <div class="about-project__item stack">
                    <h2 class="project-title">Tech stack:</h2>
                    <ul class="list stack-list">
                        <li>
                            <img src="/img/tech-icons/php-icon.svg" alt="">
                            <p>PHP</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/yii2.svg" alt="">
                            <p>YII2</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/html-icon.svg" alt="">
                            <p>HTML5</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/xml.svg" alt="">
                            <p>XML</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/js-icon.svg" alt="">
                            <p>javascript</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/sql.svg" alt="">
                            <p>MySQL</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/mariadb-icon.svg" alt="">
                            <p>MariaDB</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/ng.svg" alt="">
                            <p>Nginx</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/composer.svg" alt="">
                            <p>Composer</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/apache.svg" alt="">
                            <p>Apache</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/restapi-icon.svg" alt="">
                            <p>rest api</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/np.svg" alt="">
                            <p>Нова Пошта</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/ukrposta.svg" alt="">
                            <p>Укр Пошта</p>
                        </li>
                        <li>
                            <img src="/img/tech-icons/liqpay.svg" alt="">
                            <p>liqpay</p>
                        </li>
                    </ul>
                </div>
                <div class="about-project__item team">
                    <h2 class="project-title">Команда</h2>
                    <ul class="list">
                        <li class="full-width">Бізнес-аналітик</li>
                        <li class="full-width">проектний менеджер</li>
                        <li>дизайнер</li>
                        <li>архітектор</li>
                        <li class="full-width">фронт розробник</li>
                        <li class="full-width">2 бек розробника</li>
                        <li>тестувальник</li>
                    </ul>
                </div>
                <div class="about-project__item timing">
                    <h2 class="project-title">Таймінг</h2>
                    <ul class="list">
                        <li>947 годин</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="section-bg-black project-pagination">
        <div class="bg-ripples"></div>
        <div class="container">
            <div class="project-pagination__elem project-pagination__prev">
                <a href="" class="arrow"></a>
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number"></p>
                        <p class="subtitle-section__text">Mobile App</p>
                    </div>
                    <div class="section-name__title">
                        <p class="h1 section-name__title-text">Varto</p>
                    </div>
                </div>
            </div>
            <div class="project-pagination__elem project-pagination__current">
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number"></p>
                        <p class="subtitle-section__text">E-commerce</p>
                    </div>
                    <div class="section-name__title">
                        <p class="h1 section-name__title-text">Plytkar</p>
                    </div>
                </div>
            </div>
            <div class="project-pagination__elem project-pagination__next">
                <a href="" class="arrow"></a>
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number"></p>
                        <p class="subtitle-section__text">portal</p>
                    </div>
                    <div class="section-name__title">
                        <p class="h1 section-name__title-text">Активна громада</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
