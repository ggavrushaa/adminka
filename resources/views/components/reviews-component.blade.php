<div class="container">
    <div class="section-name section-name__blue">
        <div class="section-name__subtitle subtitle-section">
            <p class="subtitle-section__number">07</p>
            <p class="subtitle-section__text">{{ $translations['golovna']['reviews_subtitle'] }}</p>
        </div>
        <div class="section-name__title">
            <h2 class="h2 section-name__title-text">{{ $translations['golovna']['reviews_title'] }}</h2>
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
                    @php $index = 1; @endphp
                    @foreach ($sources as $source)
                        @if (count($source->reviews) > 0)
                        <button type="button" class="tab-top__item js-tab-btn" tabindex="{{ $index }}" title="{{ $source->name }}"
                            data-index="{{ $index }}">
                            {{ $source->name }}
                        </button>
                        @php $index+=1; @endphp
                        @endif
                    @endforeach
                    <div class="scrollbar js-scrollbar">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-bottom">
            <div class="tab-bottom__wrapper">
                <div class="tab-bottom__item _js-tab-0 active">
                    @foreach ($reviews as $review)
                    <div class="col">
                        <div class="review-card">
                            <div class="review-star">
                                <div class="review-star__number">{{ $review->rating }}</div>
                                <div class="review-star__grey">
                                    <span class="review-star__count" style="width: calc(100% * {{ $review->rating }} / 5)"></span>
                                </div>
                            </div>
                            <div class="editor">
                                <blockquote>“{{ $review->localizedQuote }}”</blockquote>
                                <p>{{ $review->localizedText }}</p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{ $review->link }}" target="_blank"
                                    class="btn btn-tertiary btn-icon-right icon-arrow-right-top">{{ $translations['golovna']['btn_review'] }}</a>
                            </div>
                            <div class="reviewer-info">
                                <p class="reviewer-info__text_bold reviewer-info__text_uppercase">{{ $review->author }}</p>
                                <p class="reviewer-info__text_grey">{{ $review->position }}</p>
                                <p>{{ $review->project_name }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @php $index = 1; @endphp
                @foreach ($sources as $source)
                @if (count($source->reviews) > 0)
                <div class="tab-bottom__item _js-tab-{{ $index }}">
                    @foreach ($source->reviews as $review)
                    <div class="col">
                        <div class="review-card">
                            <div class="review-star">
                                <div class="review-star__number">{{ $review->rating }}</div>
                                <div class="review-star__grey">
                                    <span class="review-star__count" style="width: calc(100% * {{ $review->rating }} / 5)"></span>
                                </div>
                            </div>
                            <div class="editor">
                                <blockquote>"{{ $review->locilezedQuote }}"</blockquote>
                                <p>{{ $review->localizedText }}</p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{ $review->link }}" target="_blank"
                                    class="btn btn-tertiary btn-icon-right icon-arrow-right-top">{{ $translations['golovna']['btn_review'] }}</a>
                            </div>
                            <div class="reviewer-info">
                                <p class="reviewer-info__text_bold reviewer-info__text_uppercase">{{ $review->author }}</p>
                                <p class="reviewer-info__text_grey">{{ $review->position }}</p>
                                <p>{{ $review->project_name }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @php $index+=1; @endphp
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>