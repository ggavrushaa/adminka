@push('styles')
    @vite(['resources/css/form.sass'])
@endpush

@vite('resources/js/custom-select.js')

@extends('__layouts.main')

@section('title', 'UAITLAB')
@section('description', 'UAITLAB')

@section('content')
    <div class="form form-talk">
        <div class="container">
            <div class="section-name section-name__blue">
                <div class="section-name__title">
                    <h1 class="h2 section-name__title-text">Feedback form</h1>
                </div>
            </div>

            <div class="form-pagination">
                <div class="pagination-item _process">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle class="circle" cx="16" cy="16" r="15" stroke="#2C00FF" stroke-width="2" />
                        <circle class="dot" cx="16" cy="16" r="5" />
                        <path d="M10.168 16.833L13.5013 20.1663L21.8346 11.833" class="check" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="pagination-separator "></div>
                <div class="pagination-item">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle class="circle" cx="16" cy="16" r="15" stroke="#2C00FF" stroke-width="2" />
                        <circle class="dot" cx="16" cy="16" r="5" />
                        <path d="M10.168 16.833L13.5013 20.1663L21.8346 11.833" class="check" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="pagination-separator"></div>
                <div class="pagination-item">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle class="circle" cx="16" cy="16" r="15" stroke="#2C00FF" stroke-width="2" />
                        <circle class="dot" cx="16" cy="16" r="5" />
                        <path d="M10.168 16.833L13.5013 20.1663L21.8346 11.833" class="check" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <form class="form-content" action="{{ route('form.store', app()->getLocale()) }}" method="post">
                @csrf
                <div class="form-content__wrapper">
                    <div class="form-item active contact">
                        <h2 class="h2 form-title">Let’s talk</h2>
                        <div class="form-group required" data-valid="empty,maxlength-45">
                            <label for="user-name" class="form-label">Write your name</label>
                            <div class="form-control__wrapper">
                                <input type="text" id="user-name" name="name" class="form-control"
                                    placeholder="Write your name">

                                <div class="help-block" data-empty="Required field"
                                    data-maxlength="Maximum length of characters: 45"></div>
                            </div>
                        </div>
                        <div class="form-group required" data-valid="empty,maxlength-255">
                            <label for="user-position" class="form-label">I’m</label>
                            <div class="form-control__wrapper">
                                <input type="text" id="user-position" name="position" class="form-control"
                                    placeholder="Owner, CEO, project, etc">

                                <div class="help-block" data-empty="Required field"
                                    data-maxlength="Maximum length of characters: 255"></div>
                            </div>
                        </div>
                        <div class="form-group _mb0 required" data-valid="empty,maxlength-255">
                            <label for="user-company" class="form-label">From company</label>
                            <div class="form-control__wrapper">
                                <input type="text" id="user-company" name="company" class="form-control"
                                    placeholder="Link of your company">

                                <div class="help-block" data-empty="Required field"
                                    data-maxlength="Maximum length of characters: 255"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-item hide help">
                        <h2 class="h2 form-title">How can we help?</h2>
                        <div class="form-group solution" data-valid="empty,maxlength-255">
                            <label for="user-solution" class="form-label">Project name</label>
                            <div class="form-control__wrapper">
                                <input type="text" class="form-control" name="solution" id="user-solution"
                                    placeholder="What problems do you want to solve?" />
                            </div>
                            <div class="help-block" data-empty="Required field"
                                data-maxlength="Maximum length of characters: 255"></div>
                        </div>
                        <div class="select-wrapper">
                            <p class="label-title">in direction</p>
                            <div class="select _js-custom-select required" id="direction-contacts" data-required
                                data-valid="select" data-i18-error="Required field">
                                <div class="select__toggle">
                                    <label>Choose a direction</label>
                                    <button type="button" name="direction-btn" data-type="button" data-select="toggle"
                                        data-index="-1" onblur="selectHandlerBlur(this)">
                                    </button>
                                    <input type="hidden" class="select-hidden" id="direction" name="direction">
                                </div>
                                <div class="select__dropdown">
                                    <ul class="select__options js-sorting-select">
                                        @foreach($directions as $key => $direction)
                                        <li class="select__option" data-select="option" data-value="{{ $direction->value }}"
                                            data-index="{{ $key }}">
                                            {{ $direction->name_en }} 
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="help-block icon-error-warning">Required field</div>
                            </div>
                        </div>
                        <div class="form-group about-task" data-valid="empty,maxlength-255">
                            <label for="user-task" class="form-label">About my task / project</label>
                            <div class="form-control__wrapper">
                                <textarea name="task" id="user-task" class="form-control" rows="3"
                                    placeholder="Technology, implementation timeline, availability of technical specifications"></textarea>

                                <div class="help-block" data-empty="Required field"
                                    data-maxlength="Maximum length of characters: 255"></div>
                            </div>
                        </div>
                        <div class="radios">
                            <p class="label">My budget is</p>
                            <div class="form-group checkbox">
                                <input class="form-control" type="radio" id="budget-1" name="budget"
                                    value="5.000 - 10.000" checked>
                                <label for="budget-1" class="form-label">5.000 - 10.000 $</label>
                            </div>
                            <div class="form-group checkbox">
                                <input class="form-control" type="radio" id="budget-2" name="budget"
                                    value="10.000 - 20.000">
                                <label for="budget-2" class="form-label">10.000 - 20.000 $</label>
                            </div>
                            <div class="form-group checkbox">
                                <input class="form-control" type="radio" id="budget-3" name="budget"
                                    value="30.000 - 40.000">
                                <label for="budget-3" class="form-label">30.000 - 40.000 $</label>
                            </div>
                            <div class="form-group checkbox">
                                <input class="form-control" type="radio" id="budget-4" name="budget"
                                    value="50.000+">
                                <label for="budget-4" class="form-label">50.000 $ - more</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-item hide">
                        <h2 class="h2 form-title">Do you have a business task or idea?</h2>
                        <div class="files">
                            <p class="files-title">I have brief and other materials</p>
                            <div class="files-group">
                                <div class="form-group file">
                                    <label for="file" class="form-label"
                                        data-text-default="Add file (pdf, jpg, png, doc, xls)"
                                        data-text-uploaded="Files downloaded">
                                        Add file (pdf, jpg, png, doc, xls) </label>
                                    <input type="file" id="file" name="file[]" class="form-control"
                                        accept=".pdf, .jpg, .png, .doc, .xls, .xlsx, .docx" multiple>

                                    <button type="button"
                                        class="btn btn-primary btn-bg-black btn-icon icon-plus btn-link load-more"></button>
                                </div>

                                <div class="help-block" data-error-size="Maximum file size 5 MB"
                                    data-error-format="Invalid file format"
                                    data-error-max-count="Maximum number of files: 10"></div>
                            </div>
                        </div>

                        <div class="radios contact-in">
                            <p class="label">I want to contact me via</p>

                            <div class="radio-input">
                                <div class="form-group checkbox">
                                    <input class="form-control" type="checkbox" id="e-mail" name="contact_in[]"
                                        value="e-mail">
                                    <label for="e-mail" class="form-label"> E-mail</label>
                                </div>

                                <div class="form-group email required" data-required data-valid="mask">
                                    <div class="form-control__wrapper">
                                        <input class="form-control _js-mask-email" type="text" id="email"
                                            placeholder="your@company.com" name="email">
                                    </div>
                                    <div class="help-block" data-empty="Required field"></div>
                                </div>
                            </div>

                            <div class="radio-input">
                                <div class="form-group checkbox ">
                                    <input class="form-control" type="checkbox" id="whats-app" name="contact_in[]"
                                        value="whats-app">
                                    <label for="whats-app" class="form-label">WhatsApp </label>
                                </div>

                                <div class="form-group phone" data-required data-valid="mask">
                                    <div class="form-control__wrapper">
                                        <input class="form-control _js-mask-phone" type="text" id="phone"
                                            placeholder="Phone number" name="phone">
                                    </div>
                                    <div class="help-block" data-empty="Required field"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group checkbox policy _mb0 required" data-valid="checkbox">
                            <input class="form-control" type="checkbox" id="policy-1" name="policy-1" checked>
                            <label for="policy-1" class="form-label">I have read and agree to the Privacy Policy</label>

                            <div class="help-block" data-empty="Required field"></div>
                        </div>

                    </div>
                    <div class="form-item hide last-step">
                        <h2 class="h2 form-title">Thank you!</h2>

                        <div class="last-step__description">
                            <p>The request is accepted. You can text us anytime via <a href="/contacts">contacts</a></p>

                            <div id="gtx-trans" style="position: absolute; left: 338px; top: -6px;">
                                <div class="gtx-trans-icon"> </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <input type="hidden" name="_csrf"
                    value="o6gcNrMVBbW0jJMQSWYaoyhBhyBlKXgGy-eMYUbk8NOX5FBO2CE34tjDwSQhLWDgfgfyZlMQCTGggegDLIfdgQ=="> --}}
                <input type="hidden" name="token" id="token">
                <input type="hidden" name="lang" value="{{ app()->getLocale() }}">
                <input type="hidden" name="form" value="feedback">
            </form>
            <div class="form-navigation">
                <a href="/" class="btn btn-border _hide js-btn-home">To the main page</a>
                <button type="submit" class="btn btn-primary _hide js-btn-start _circle-animation">Let’s get
                    started</button>
                <button type="button" class="btn btn-primary js-btn-next _circle-animation">Next</button>
                <button type="button" class="btn btn-border _hide js-btn-prev">Back</button>
            </div>
        </div>
    </div>
@endsection
