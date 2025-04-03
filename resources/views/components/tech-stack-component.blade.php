<div class="container">
        <div class="tech-top">
            <div class="section-name">
                @if($page == false)
                <div class="section-name__subtitle subtitle-section">
                    <p class="subtitle-section__number">04</p>
                    <p class="subtitle-section__text">{{ $translations['golovna']['tech_title'] }}</p>
                </div>
                @endif
                <div class="section-name__title">
                    <h2 class="h2 section-name__title-text">{{ $translations['golovna']['tech_subtitle'] }}</h2>
                </div>
                <div class="btn-wrapper">
                    <a href="/tech-stack" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">{{ $translations['golovna']['tech_btn'] }}</a>
                </div>
            </div>
            <div class="tech-description">
                <p>{{ $translations['golovna']['tech_text'] }}</p>
                <div class="btn-wrapper">
                    <a href="{{ route('technology', App::getLocale()) }}" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">{{ $translations['golovna']['tech_btn'] }}</a>
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
                    @php
                        $categoryIndex = 0;
                    @endphp
                    @foreach ($categories as $category)
                        <button type="button" class="tab-top__item js-tab-btn {{ ($categoryIndex === 0) ? 'active' : '' }}" 
                        tabindex="{{ $categoryIndex }}" 
                        title="{{ $category->name }}"
                        data-index="{{ $categoryIndex }}">
                            {{ $category->name }}
                        </button>
                        @php
                            $categoryIndex+=1;
                        @endphp
                    @endforeach
                    <div class="scrollbar js-scrollbar">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="tab-bottom">
                <div class="tab-bottom__wrapper">
                    @php
                            $techIndex = 0;
                            @endphp
                        @foreach ($stacks as $stack )
                            <div class="tab-bottom__item _js-tab-{{$techIndex}} {{ ($techIndex === 0) ? 'active' : '' }}">
                                <div class="tech-item">
                                    <div class="img">
                                        <img src="/storage/{{ $stack->image }}" alt="">
                                        <img class="hover" src="/storage/{{ $stack->image_white }}" alt="Laravel">
                                    </div>
                                    {{ $stack->name }}
                                </div>
                            </div>
                            @php
                                $techIndex+=1;
                            @endphp
                        @endforeach
                </div>
            </div>
            <div class="btn-wrapper">
                <a href="/tech-stack" class="btn btn-tertiary btn-icon-right icon-arrow-right-top">view all
                    technologies</a>
            </div>
        </div>
</div>