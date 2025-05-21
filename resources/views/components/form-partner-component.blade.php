        <div class="container">
            <h2 class="title">{{ $translations['about']['create_title'] ?? '-----' }}</h2>


            <a href="/uploads/files/65e17e71a6676.pdf" class="form-download__item" target="_blank">
                <button class="btn btn-border btn-bg-orange btn-icon icon-download"></button>
                <span>{{ $translations['about']['create_text'] ?? '-----' }}</span>
            </a>
            <a href="{{ route('form', app()->getLocale()) }}" class="circle-text">
                <svg viewBox="0 0 100 100" class="circle-svg">
                    <defs>
                        <path id="circle" d="M 50, 50m -37, 0a 37,37 0 1,1 74,0a 37,37 0 1,1 -74,0"></path>
                    </defs>
                    <circle class="circle-bg" cx="50%" cy="50%" r="30%" fill="red"></circle>
                    <text>
                        <textPath xlink:href="#circle">
                            {{ $translations['about']['btn_text'] ?? '-----' }}
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