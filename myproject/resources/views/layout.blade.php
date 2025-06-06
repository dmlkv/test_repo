<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="header @yield('body__class')">
        <div class="container">
            <div class="header__top">
                <nav class="menu menu--open">
                    <button class="menu__btn">
                        <span> </span>
                        <span> </span>
                        <span> </span>
                    </button>
                    <ul class="menu__list">
                        <li class="menu__item"><a href="/" class="menu__link">home</a></li>
                        <li class="menu__item"><a href="/activities" class="menu__link">activities</a></li>
                        <li class="menu__item"><a href="/price" class="menu__link">pricing plan</a></li>
                        <li class="menu__item"><a href="/contacs" class="menu__link">contact us</a></li>
                        <li class="menu__item"><a href="/blog" class="menu__link">blog</a></li>
                        <li class="menu__item"><a href="/about" class="menu__link">about us</a></li>
                    </ul>
                </nav>
                <a href="tel:+351912568342" class="header__phone">
                    <img src="/images/phone-ico.svg" alt="">
                    +351912568342
                </a>
            </div>
            @yield('main_content')

        </div>
        @yield('under_main_content')
    </header>
    @yield('mainsection')

    <script src="/js/main.js"></script>
</body>
</html>
