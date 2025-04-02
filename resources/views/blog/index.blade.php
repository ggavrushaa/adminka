@vite(['resources/css/blog.sass'])


@extends('__layouts.main')

@section('title', 'Blog')
@section('description', 'Blog')

<div class="section-bg-black anim-letter-header">
    <div class="bg-ripples"></div>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li>Blog</li>
        </ul>
        <div class="case-header__content">
            <div class="case-header__info">
                <div class="section-name">
                    <div class="section-name__subtitle subtitle-section">
                        <p class="subtitle-section__number"></p>
                        <h1 class="subtitle-section__text">Lorem ipsum dolor sit</h1>
                    </div>
                    <div class="section-name__title">
                        <div class="h1 section-name__title-text stop-motion-animation">
                            <div class="word">
                                <div class="word-letter">B</div>
                                <div class="word-letter">L</div>
                                <div class="word-anim__wrapper">
                                    <div class="word word-anim letter-o"></div>
                                </div>
                                <div class="word-letter">G</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet consectetur. Ultrices tortor dictum habitant ultrices ut sed. Sed arcu viverra ut ut. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-catalog">
    <div class="container">
        <div class="blog-filters">
            <p class="h2">Categories</p>
            <button type="button" class="btn btn-primary btn-icon btn-filter _js-btn-modal" data-modal="_js-modal-filters">
                <span class="icon-filter"></span>
                Filter
            </button>
            <div class="active-filters">
                <button class="btn btn-border active-filter">
                    Technologies (20)
                    <span class="icon-close"></span>
                </button>

                <button class="btn btn-border active-filter">
                    Lorem ipsum (2)
                    <span class="icon-close"></span>
                </button>

                <button class="btn btn-border active-filter hidden">
                    Technologies (20)
                    <span class="icon-close"></span>
                </button>
                <button class="btn btn-border active-filter hidden">
                    Technologies (20)
                    <span class="icon-close"></span>
                </button>
                <button class="btn btn-border active-filter hidden">
                    Technologies (20)
                    <span class="icon-close"></span>
                </button>
                <button class="btn btn-border active-filter hidden">
                    Technologies (20)
                    <span class="icon-close"></span>
                </button>

                <button class="btn btn-border active-filter show-more">+4</button>

                <button class="btn btn-border active-filter clear-all">Сlear all</button>
            </div>

            <div class="modal filters _js-modal _js-modal-filters">
                <div class="modal-content">
                    <div class="modal-top">
                        <p class="h3 modal-title">Filter</p>

                        <button type="button" class="btn btn-tertiary">Сlear all</button>
                    </div>

                    <button type="button" class="modal-close _js-close-modal"></button>

                    <div class="filters-content">
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-0" name="category[]" value="val-0">
                            <label for="category-0" class="form-label">All (30)</label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-1" name="category[]" value="val-1">
                            <label for="category-1" class="form-label">Design tools</label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-2" name="category[]" value="val-2">
                            <label for="category-2" class="form-label">News</label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-3" name="category[]" value="val-3">
                            <label for="category-3" class="form-label">Software</label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-4" name="category[]" value="val-4">
                            <label for="category-4" class="form-label">Innovations</label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-5" name="category[]" value="val-5">
                            <label for="category-5" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-6" name="category[]" value="val-6">
                            <label for="category-6" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-7" name="category[]" value="val-7">
                            <label for="category-7" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-8" name="category[]" value="val-8">
                            <label for="category-8" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-9" name="category[]" value="val-9">
                            <label for="category-9" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-10" name="category[]" value="val-10">
                            <label for="category-10" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-11" name="category[]" value="val-11">
                            <label for="category-11" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-12" name="category[]" value="val-11">
                            <label for="category-12" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-13" name="category[]" value="val-11">
                            <label for="category-13" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-14" name="category[]" value="val-11">
                            <label for="category-14" class="form-label">Lorem ipsum </label>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-control" type="checkbox" id="category-15" name="category[]" value="val-11">
                            <label for="category-15" class="form-label">Lorem ipsum </label>
                        </div>
                        <button class="btn btn-border active-filter show-more" data-768="+8" data-1024="+4" data-1280="+2"></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-list">

            <?php for ($i = 0; $i < 8; $i++) : ?>
                <a href="/blog/1" class="blog-card">
                    <div class="img">
                        <picture>
                            <source srcset="/img/delete/blog-preview_1024.webp" type="image/webp" media="(min-device-width: 768px)">
                            <source srcset="/img/delete/blog-preview_1024.jpg" type="image/jpeg" media="(min-device-width: 768px)">

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

        <div class="pagination">
            <button type="button" class="btn btn-border btn-more">
                Показати більше
                <span class="icon-arrow-bottom"></span>
            </button>
            <div class="pagin-list">
                <a href="" class="pagin-page icon-short-arrow-left prev">Назад</a>
                <a href="" class="pagin-page">1</a>
                <a href="" class="pagin-page pagin-dots">...</a>
                <a href="" class="pagin-page additional">n-1</a>
                <a href="" class="pagin-page active">n</a>
                <a href="" class="pagin-page additional">n+1</a>
                <a href="" class="pagin-page pagin-dots">...</a>
                <a href="" class="pagin-page">30</a>
                <a href="" class="pagin-page icon-short-arrow-right next">Вперед</a>
            </div>
        </div>
    </div>
</div>