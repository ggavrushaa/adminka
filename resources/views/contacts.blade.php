@vite(['resources/css/form.sass'])


@extends('__layouts.main')

@section('title', 'Contact Us')
@section('description', 'Contact us for any questions or inquiries. We are always happy to help you.')

<div class="contact">
    <div class="contact__content">
        <div class="contact__info">
            <h1 class="h2 info-title">Contact Information</h1>
            <ul class="info-list">
                <li>
                    <div class="list-title">Phone</div>
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
                    <div class="list-title">Location</div>
                    <div class="list-text">
                        <p>st. Academician Tupolev, 54 Ukraine, Kiev</p>
                    </div>
                </li>
            </ul>

            <div class="mash">
                <a href="https://www.behance.net/uaitlab" class="btn btn-primary btn-icon icon-behance" target="_blank" rel="nofollow"></a>
                <a href="https://www.linkedin.com/company/uaitlab/" class="btn btn-primary btn-icon icon-linkedin" target="_blank" rel="nofollow"></a>
                <a href="https://www.facebook.com/uaitlab/" class="btn btn-primary btn-icon icon-facebook" target="_blank" rel="nofollow"></a>
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
        <form class="contact__form" id="contacts-form" action="/contacts">
            <p class="h2 form-title">Get in touch</p>
            <div class="form-desc">
                <p>Email us if you have any questions</p>
            </div>

            <div class="form-group required" data-valid="empty,maxlength-45">
                <label class="form-label" for="name">My full name is</label>
                <div class="form-control__wrapper">
                    <input class="form-control" type="text" name="name" id="name" placeholder="Write your name">
                    <div class="help-block"
                         data-empty="Required field"
                         data-maxlength="Maximum length of characters: 45"
                    ></div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="position">I’m</label>
                <input class="form-control" type="text" id="position"
                       placeholder="Owner, CEO, project, etc" name="message">
                <div class="help-block"></div>
            </div>

            <div class="form-group about-task">
                <label for="user-task" class="form-label">I need</label>
                <div class="form-control__wrapper">
                    <textarea name="message" id="user-task" class="form-control" rows="3" placeholder="Write your message.."></textarea>
                </div>
                <div class="help-block"></div>
            </div>

            <div class="form-group email required" data-valid="mask">
                <label class="form-label" for="email">I will wait for your reply to this email:</label>
                <div class="form-control__wrapper">
                    <input class="form-control _js-mask-email" type="text" id="email" placeholder="your@company.com" name="email">
                    <div class="help-block"
                         data-empty="Required field"
                    ></div>
                </div>
            </div>

            <input type="hidden" name="_csrf" value="kp-HRYuNoI6TH1-CEEo6BIrC4saoTSRaD8YSb4jDQULZyvQQ4sj269ZKDLtCDUJV1fqymd0ObzhKj0gl0K40JQ==">
            <input type="hidden" name="token" id="token">
            <input type="hidden" name="lang" value="en">

            <button type="submit" class="btn btn-primary btn-submit _circle-animation">Send Message</button>

        </form>
    </div>
</div>