<!DOCTYPE html>
<html lang="uk">

@include('__layouts._head')

<body>
    <div class="main" id="main">
        <div class="main-content">
            @include('__layouts._header')

            @yield('content')

            @include('__layouts._footer')
        </div>
    </div>

    <div class="modal-overlay"></div>
    
    {{-- Cookie alert !! --}}
    {{-- <div class="modal-cookies">
        <div class="container">
            <button type="button" class="btn-close"></button>
            <div class="cookies-text">
                <p>Ми використовуємо файли cookie, щоб забезпечити вам найкращий досвід роботи на нашому сайті. Ви
                    можете прочитати більше інформації про нашу політику щодо <a href="/ua/cookies">файлів cookie</a>.
                </p>

                <p>&nbsp;</p>
            </div>
            <div class="cookies-btns">
                <button type="button" class="btn btn-primary _circle-animation js-btn-accept-cookies">Прийняти
                    Cookies</button>
                <button class="btn btn-border js-btn-accept-cookies js-btn-reject-cookies"></button>
            </div>
        </div>
    </div> --}}
</body>

</html>
