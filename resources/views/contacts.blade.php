@push('styles')
    @vite(['resources/css/form.sass'])
@endpush


@extends('__layouts.main')

@section('title', 'Contact Us')
@section('description', 'Contact us for any questions or inquiries. We are always happy to help you.')

@section('content')
    <div class="contact">
        <div class="contact__content">
            <div class="contact__info">
                <h1 class="h2 info-title">{{$translations['contacts']['info_title'] ?? '---'}}</h1>
                <ul class="info-list">
                    <li>
                        <div class="list-title">{{$translations['contacts']['phone'] ?? '---'}}</div>
                        <div class="list-text">
                            <a href="tel:+380 (44) 232-94-55">+380 (44) 232-94-55</a>
                            <a href="tel:+380 (93) 170-57-13">+380 (93) 170-57-13</a>
                        </div>
                    </li>

                    <li>
                        <div class="list-title">Email</div>
                        <div class="list-text">
                            <a href="mailto:hi@uaitlab.com">hi@uaitlab.com</a>
                        </div>
                    </li>

                    <li>
                        <div class="list-title">{{$translations['contacts']['address'] ?? '---'}}</div>
                        <div class="list-text">
                            <p>st. Academician Tupolev, 54 Ukraine, Kiev</p>
                        </div>
                    </li>
                </ul>

                <div class="mash">
                    <a href="https://www.behance.net/uaitlab" class="btn btn-primary btn-icon icon-behance" target="_blank"
                        rel="nofollow"></a>
                    <a href="https://www.linkedin.com/company/uaitlab/" class="btn btn-primary btn-icon icon-linkedin"
                        target="_blank" rel="nofollow"></a>
                    <a href="https://www.facebook.com/uaitlab/" class="btn btn-primary btn-icon icon-facebook"
                        target="_blank" rel="nofollow"></a>
                </div>

                <div class="marquees">
                    <div class="marquee-text">
                        <div class="marquee-group">
                            <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                        </div>
                        <div class="marquee-group">
                            <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                        </div>
                    </div>
                    <div class="marquee-text">
                        <div class="marquee-group reverse_scroll">
                            <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                        </div>
                        <div class="marquee-group reverse_scroll">
                            <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                        </div>
                    </div>
                    <div class="marquee-text">
                        <div class="marquee-group">
                            <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                        </div>
                        <div class="marquee-group">
                            <span class="marquee-grey">Mobile App Mobile App Mobile App Mobile App</span>
                        </div>
                    </div>
                </div>
            </div>
            <form class="contact__form" id="contacts-form" action="{{ route('contacts.store', app()->getLocale()) }}" method="POST">
                @csrf
                <p class="h2 form-title">{{$translations['contacts']['form_title'] ?? '---'}}</p>
                <div class="form-desc">
                    <p>{{$translations['contacts']['form_desc'] ?? '---'}}</p>
                </div>

                <div class="form-group required" data-valid="empty,maxlength-45">
                    <label class="form-label" for="name">{{$translations['contacts']['name'] ?? '---'}}</label>
                    <div class="form-control__wrapper">
                        <input class="form-control" type="text" name="name" id="name"
                            placeholder="{{$translations['contacts']['name_placeholder'] ?? '---'}}">
                        <div class="help-block" data-empty="Required field"
                            data-maxlength="Maximum length of characters: 45"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="position">{{$translations['contacts']['position'] ?? '---'}}</label>
                    <input class="form-control" type="text" id="position" placeholder="{{$translations['contacts']['position_placeholder'] ?? '---'}}"
                        name="position">
                    <div class="help-block"></div>
                </div>

                <div class="form-group about-task">
                    <label for="user-task" class="form-label">{{$translations['contacts']['message'] ?? '---'}}</label>
                    <div class="form-control__wrapper">
                        <textarea name="message" id="user-task" class="form-control" rows="3" placeholder="{{$translations['contacts']['message_placeholder'] ?? '---'}}"></textarea>
                    </div>
                    <div class="help-block"></div>
                </div>

                <div class="form-group email required" data-valid="mask">
                    <label class="form-label" for="email">{{$translations['contacts']['email'] ?? '---'}}</label>
                    <div class="form-control__wrapper">
                        <input class="form-control _js-mask-email" type="text" id="email"
                            placeholder="your@company.com" name="email">
                        <div class="help-block" data-empty="Required field"></div>
                    </div>
                </div>

                {{-- <input type="hidden" name="_csrf"
                    value="kp-HRYuNoI6TH1-CEEo6BIrC4saoTSRaD8YSb4jDQULZyvQQ4sj269ZKDLtCDUJV1fqymd0ObzhKj0gl0K40JQ==">
                <input type="hidden" name="token" id="token"> --}}
                <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                <input type="hidden" name="form_type" value="contacts">

                <button type="submit" class="btn btn-primary btn-submit _circle-animation">{{$translations['contacts']['submit'] ?? '---'}}</button>

            </form>
        </div>
    </div>
@endsection
