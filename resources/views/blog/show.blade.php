@vite(['resources/css/blog.sass'])


@extends('__layouts.main')

@section('title', 'Blog page')
@section('description', 'Blog page')

<div class="blog-page">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/blog/">blog</a></li>
            <li>Впровадження та налаштування Content Delivery Network (CDN) для веб продуктів компанії</li>
        </ul>

        <div class="page-wrapper">
            <div class="post">
                <h1 class="h1">Впровадження та налаштування Content Delivery Network (CDN) для веб продуктів компанії
                </h1>
                <div class="post-info">
                    <p class="post-date">January 23, 2024</p>
                    <p class="post-tag">Lorem ipsum dolor sit amet</p>
                    <p class="post-tag">Lorem ipsum dolor sit amet</p>
                    <p class="post-tag">Lorem ipsum dolor sit amet</p>
                </div>

                <div class="post-img">
                    <picture>
                        <source srcset="/img/delete/blog-preview_1024.webp" type="image/webp"
                            media="(min-device-width: 768px)">
                        <source srcset="/img/delete/blog-preview_1024.jpg" type="image/jpeg"
                            media="(min-device-width: 768px)">

                        <source srcset="/img/delete/blog-preview.webp" type="image/webp">
                        <source srcset="/img/delete/blog-preview.jpg" type="image/jpeg">

                        <img src="/img/delete/blog-preview.jpg" loading="lazy" alt="" title="">
                    </picture>
                </div>

                <div class="post-text editor-blog">
                    <p>
                        У світі, де швидкість завантаження вебсайт визначає користувацький комфорт та впливає на
                        успішність онлайн-бізнесу,
                        важливо звертати увагу на ефективність та доступність контенту. Виходячи з цих міркувань, наші
                        партнери замислились
                        в розширенні можливостей і вирішили запровадити Content Delivery Network (CDN) для максимальної
                        оптимізації
                        роботи їх вебресурс, а наша команда реалізувала цей проєкт.
                    </p>
                    <h2>У нас стояли наступні задачі:</h2>
                    <ol>
                        <li>Створення віддаленого сервера для зберігання фотоматеріалів</li>
                        <li>Весь контент мав зберігатися в одному місці, мати легкий доступ і не дублювався на різних
                            ресурсах</li>
                        <li>Фото контент мав бути доступним для всіх ресурсів якими користується бізнес.</li>
                    </ol>
                    <h2>Що ми зробили</h2>
                    <p>
                        Ми проаналізували потреби користувачів та визначили основні вимоги до майбутньої CDN.
                        Запланували як буде розподілятися контент, і що для проєкту, будемо використовувати Amazon
                        сервера.
                        Розробили систему, яка кешує та оновлює контент на серверах в залежності від потреб проєкту.
                        Розподілили навантаження на сервери. Прописали скрипт який адаптує зображення для потреб під
                        різні проєкти.
                        Виконали ряд тестів для визначення швидкості та ефективності розробленої CDN.
                    </p>
                    <h2>Як це працює</h2>
                    <p>
                        Наш замовник має локальну ERP систему, до якої ми додали можливість завантаження файлів через
                        API в
                        новостворену систему CDN. Для керування CDN, ми розробили адміністративну панель з можливістю
                        створювати
                        проєкти якими користується бізнес (лендінги, B2B, допоміжні проєкти та інше). При завантаженні
                        контенту
                        ми обираємо, в який саме проєкт будуть завантажені файли. CDN, за допомогою скрипта, автоматично
                        адаптує
                        розміри файлів під вимоги кожного конкретного проєкту. Іншими словами, коли запит надходить з
                        основного сайту,
                        система адаптує розміри та кількість зображень для нього, а якщо запит приходить з іншого,
                        допоміжного проєкту,
                        система надає розміри фотографій, налаштовані саме для цього проєкту. Періодично основний сайт
                        через API
                        запитує систему, чи є нові фотографії для товарів, і ми записуємо посилання на файли в базу
                        даних, при цьому
                        не копіюючи самі файли. Таким чином оновлюється вся база зображень для всіх проєктів.
                    </p>
                    <h2>Функціональні можливості CDN:</h2>
                    <ul>
                        <li>створення проєктів</li>
                        <li>налаштування проєктів</li>
                        <li>можливість обирати теку для якого саме проєкту будуть використовуватись фото</li>
                        <li>завантаження зображень по API</li>
                        <li>створення зображень різного розміру за допомогою скрипта для кожного проєкту</li>
                        <li>генерація доступів по API</li>
                        <li>можливість додавання фото за типами, для подальшого розпізнавання системою</li>
                        <li>пошук зображень за назвою товару, за проєктом, за проміжком часу додавання, за типом фото,
                            за ID товару, за розміром</li>
                        <li>при видаленні фото з бази, остаточне видалення відбувається через 30 днів, це дає можливість
                            унеможливити випадкове або навмисне видалення контенту.</li>
                    </ul>
                    <h2>Адмін панель CDN:</h2>
                    <ul>
                        <li>Створення профілів користувачів</li>
                        <li>Можливість надання доступу різного рівня</li>
                        <li>Створення проєктів і їх налаштування</li>
                        <li>Довідники типів контенту</li>
                        <li>Створення тек для кожного проєкту чи товару</li>
                    </ul>
                    <h2>Висновок:</h2>
                    <p>Створення та використання CDM системи має значний вплив на онлайн інфраструктуру бізнесів. Це
                        спростило процес завантаження файлів, роблячи його більш ефективним та гнучким.</p>
                    <p>Однією з ключових переваг стало автоматизоване адаптування розмірів файлів під конкретні вимоги
                        кожного проєкту. Це сприяє оптимізації використання ресурсів та покращує загальний вигляд та
                        швидкість завантаження контенту для кінцевого користувача.</p>
                    <p>Крім того, система забезпечує зручний механізм оновлення фотографій товарів на основному сайті,
                        що полегшує підтримку актуальності та актуалізацію інформації.</p>
                    <p>Також CDM відзначається високим рівнем безпеки, забезпечуючи захист фото, що важливо для успішної
                        роботи бізнес-процесів.</p>
                    <p>Узагальнюючи, впровадження CDM системи позитивно позначилося на ефективності та управлінні
                        контентом, сприяючи покращенню користувацького досвіду та відповідно до індивідуальних потреб
                        різних бізнес-проєктів.</p>
                </div>
            </div>
            <div class="sidebar">
                <p class="h4 sidebar-title">Читай також</p>

                <div class="list">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                    <a href="/blog/1" class="blog-card">
                        <div class="img">
                            <picture>
                                <source srcset="/img/delete/blog-preview_1024.webp" type="image/webp"
                                    media="(min-device-width: 768px)">
                                <source srcset="/img/delete/blog-preview_1024.jpg" type="image/jpeg"
                                    media="(min-device-width: 768px)">

                                <source srcset="/img/delete/blog-preview.webp" type="image/webp">
                                <source srcset="/img/delete/blog-preview.jpg" type="image/jpeg">

                                <img src="/img/delete/blog-preview.jpg" loading="lazy" alt="" title="">
                            </picture>
                        </div>
                        <div class="info">
                            <p class="date">January 23, 2024</p>
                            <p class="tag">Lorem ipsum dolor sit amet</p>
                            <p class="title">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </a>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 
CaseBlockWidget::widget([
    'showSubtitleInTitle' => false,
])
--}}

<section class="section-bg-black video-case section-services section-services__slider" id="section-case">
    <div class="container">
        <div class="bg-ripples"></div>
        <div class="case-top">
            <div class="section-name">

                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">03</p>
                    <p class="subtitle-section__text">Сервіси на цю тему</p>
                </div>

                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">Сервіси на цю тему</h2>
                </div>
                <div class="btn-wrapper">
                    <a href="/" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">дивитись всі
                        сервіси</a>
                </div>
            </div>
            <div class="swiper-arrows">
                <button type="button" class="icon-arrow-left swiper-btn case-btn-prev"></button>
                <button type="button" class="icon-arrow-right swiper-btn case-btn-next"></button>
            </div>
        </div>
        <div class="swiper case-swiper services-cards">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
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

                                        <img src="/img/home/services/services-1_360.png" loading="lazy"
                                            alt="" title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> Mobile app <br> development </h3>
                                <div class="card__description">
                                    <p>We create mobile applications for iOS and Android platforms using React Native.
                                    </p>
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
                </div>
                <div class="swiper-slide">
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

                                        <img src="/img/home/services/services-1_360.png" loading="lazy"
                                            alt="" title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> Mobile app <br> development </h3>
                                <div class="card__description">
                                    <p>We create mobile applications for iOS and Android platforms using React Native.
                                    </p>
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
                </div>
                <div class="swiper-slide">
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

                                        <img src="/img/home/services/services-1_360.png" loading="lazy"
                                            alt="" title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> Mobile app <br> development </h3>
                                <div class="card__description">
                                    <p>We create mobile applications for iOS and Android platforms using React Native.
                                    </p>
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
                </div>
                <div class="swiper-slide">
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

                                        <img src="/img/home/services/services-1_360.png" loading="lazy"
                                            alt="" title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> Mobile app <br> development </h3>
                                <div class="card__description">
                                    <p>We create mobile applications for iOS and Android platforms using React Native.
                                    </p>
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
                </div>
                <div class="swiper-slide">
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

                                        <img src="/img/home/services/services-1_360.png" loading="lazy"
                                            alt="" title="">
                                    </picture>
                                </div>
                            </div>
                            <div class="card-flipper__back">
                                <h3 class="h4 card__title"> Mobile app <br> development </h3>
                                <div class="card__description">
                                    <p>We create mobile applications for iOS and Android platforms using React Native.
                                    </p>
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
                </div>

            </div>
        </div>
    </div>
</section>