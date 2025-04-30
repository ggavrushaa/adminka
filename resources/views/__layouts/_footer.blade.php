<footer class="section-bg-black footer">
    <div class="bg-ripples"></div>

    <div class="container">
        <div class="footer-top">
            <div class="footer-row">
                <div class="footer-col footer-col__logo">
                    <img href="/" src="/img/components/logo-white.svg" alt="IT company UAITLAB">
                    <div class="mash">
                        <a href="https://www.behance.net/uaitlab" class="btn btn-primary btn-icon icon-behance"
                            target="_blank" rel="nofollow"></a>
                        <a href="https://www.linkedin.com/company/uaitlab/"
                            class="btn btn-primary btn-icon icon-linkedin" target="_blank" rel="nofollow"></a>
                        <a href="https://www.facebook.com/uaitlab/" class="btn btn-primary btn-icon icon-facebook"
                            target="_blank" rel="nofollow"></a>
                    </div>
                    <p href="/" class="advisory">© 2025 UAITLAB</p>
                    <button class="btn btn-tertiary btn-icon btn-icon-right icon-arrow-top btn-scroll-top">go to
                        top</button>
                </div>
                <div class="footer-col footer-col__location">
                    <p class="footer-col__name footer-col__name_line">{{ $translations['pidval']['location'] }}</p>
                    <div class="footer-col__text">
                        <p>st. Academician Tupolev, 54 Ukraine, Kiev</p>
                    </div>
                </div>
                <div class="footer-col footer-col__email">
                    <p class="footer-col__name footer-col__name_line">E-mail</p>
                    <div class="footer-col__text">
                        <a href="mailto:hi@uaitlab.com">hi@uaitlab.com</a>
                    </div>
                </div>
            </div>
            <div class="footer-row">
                <div class="footer-col footer-col__nav">
                    <p class="footer-col__name">{{ $translations['pidval']['navigation'] }}:</p>
                    <div class="footer-col__text">
                        <ul>
                            <li>
                                <a href="{{ route('technology', app()->getLocale()) }}">{{ $translations['fiksovana-sapka']['tech_stack'] }}</a>
                            </li>
                            <li>
                                <a href="{{ route('cases', app()->getLocale()) }}">{{ $translations['fiksovana-sapka']['work'] }}</a>
                            </li>
                            <li>
                                <a href="{{ route('about', app()->getLocale()) }}">{{ $translations['fiksovana-sapka']['about_us'] }}</a>
                            </li>
                            <li>
                                <a href="{{ route('contacts', app()->getLocale()) }}">{{ $translations['fiksovana-sapka']['contacts'] }}</a>
                            </li>
                            <li>
                                <a href="{{ route('partners', app()->getLocale()) }}">{{ $translations['fiksovana-sapka']['partners'] }}</a>
                            </li>
                            <li>
                                <a href="{{ route('blog.index', app()->getLocale()) }}">{{ $translations['fiksovana-sapka']['blog'] }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-col footer-col__services">
                    <p class="footer-col__name">{{ $translations['pidval']['service'] }}</p>
                    <div class="footer-col__text">
                        <ul>
                            <li>
                                <a href="/services/web">{{ $translations['pidval']['web'] }}</a>
                            </li>
                            <li>
                                <a href="/services/automation">{{ $translations['pidval']['automation'] }}</a>
                            </li>
                            <li>
                                <a href="/services/mobile">{{ $translations['pidval']['mobile'] }}</a>
                            </li>
                            <li>
                                <a href="/services/support">{{ $translations['pidval']['support'] }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-col footer-col__products">
                    <p class="footer-col__name">{{ $translations['pidval']['cases'] }}</p>
                    <div class="footer-col__text">
                        <ul>
                            <li><a href="{{ route('works.varto', app()->getLocale()) }}" target="_blank">Varto</a></li>
                            <li><a href="https://ag.com.ua/" target="_blank">Active community</a></li>
                            <li><a href="https://ventilation-system.com/" target="_blank">VENTS</a></li>
                            <li><a href="{{ route('works.yozh', app()->getLocale()) }}" target="_blank">Yözh. Basic clothes</a></li>
                            <li><a href="https://www.agromat.ua/" target="_blank">Agromat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p href="/" class="advisory">© {{ date('Y') }} UAITLAB</p>
            <button class="btn btn-tertiary btn-icon btn-icon-right icon-arrow-top btn-scroll-top">{{ $translations['pidval']['btn_top'] }}</button>
            <ul>
                <li>
                    <a href="/">Cookies</a>
                </li>
                <li>
                    <a href="/">Privacy</a>
                </li>
            </ul>
        </div>
    </div>
</footer>