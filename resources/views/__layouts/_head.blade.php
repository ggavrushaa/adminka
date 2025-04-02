<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="widdiv=device-widdiv, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="alternate" hreflang="en" href="/en" />
    <link rel="alternate" hreflang="uk" href="/uk" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <title>@yield('title')</title>
    <meta property="og:title" content="@yield('title')">

    <meta name="description" content="@yield('description')">
    <meta property="og:description" content="@yield('description')">

    @vite(['resources/js/app.js', 'resources/css/app.sass'])
    @stack('styles')
</head>
