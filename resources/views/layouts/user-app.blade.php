<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<header class="header">
    <div class="header__top">
        <div class="wrapper">
            <div class="header__top-inner">
                <div class="header__top-left">
                    <div class="header-map">Ваш город:<strong>Москва</strong></div>
                </div>
                <div class="header__top-right">
                    <nav class="header__top-menu">
                        <ul class="header__top-menu__inner">
                            <li class="header__top-menu__item"><a href="#" class="header__top-menu__link">Доставка</a>
                            </li>
                            <li class="header__top-menu__item"><a href="#" class="header__top-menu__link">Оплата</a>
                            </li>
                            <li class="header__top-menu__item"><a href="#" class="header__top-menu__link">Гарантия</a>
                            </li>
                            <li class="header__top-menu__item"><a href="#" class="header__top-menu__link">Новости</a>
                            </li>
                            <li class="header__top-menu__item"><a href="#" class="header__top-menu__link">Журнал</a>
                            </li>
                            <li class="header__top-menu__item"><a href="#" class="header__top-menu__link">О магазине</a>
                            </li>
                            <li class="header__top-menu__item"><a href="#" class="header__top-menu__link">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="header__content">
        <div class="wrapper">
            <div class="header__content-inner">
                <a href="#" class="logo header__logo"><img src="{{ asset('assets/images/logo_1.png') }}" alt=""></a>
                <div class="header__time">
                    Мы работаем: будни - 9:00-21:00
                    <span>сб. - 10:00-15:00</span>
                </div>
                <div class="header__map">
                    Невский пр-т, д. 45
                </div>
                <button class="header__whatsApp"> Напишите нам в WhatsApp</button>
                <div class="header__phone">
                    <a href="#">+7 383 291 92 86</a>
                    <a href="#">форма обратной связи</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="wrapper">
            <div class="header__bottom-inner">
                <div class="categories">
                    <div class="categories">
                        <button class="catalog category-close">Каталог</button>
                        <ul>
                            @foreach($categories as $category)
                                <li>{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <form action="#" class="header__search search">
                    <input type="text" placeholder="Поиск по наименованию или артикулу" class="input">
                    <button type="submit">Найти</button>
                </form>
                <ul class="header__icons">
                    @guest
                        <a class="header__icons-item login" href="{{ route('login') }}">Войти</a>
                    @else
                        <a class="header__icons-item login" href="#">{{ Auth::user()->fname }}</a>
                    @endguest
                    <li class="header__icons-item like"><a class="header__icons-link" href="#">Избранное</a></li>
                    <li class="header__icons-item bag"><a class="header__icons-link" href="#">В корзине <span>нет товаров</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</header>
@yield('content')
<footer class="footer">
    <div class="footer__info">
        <div class="wrapper">

            <div class="info">2017 © ООО «АВТ-ЗАП» - запчасти для акпп</div>
        </div>
    </div>
</footer>
<div class="modal" id="login">
    <div class="modal__container modal__form">
        <form action="{{ route('login') }}">
            @csrf
            <h2 class="title">Login</h2>
            <div class="group bg-grey group-py-5">
                <input type="email" name="email" placeholder="E-mail">
            </div>
            <div class="group bg-grey group-py-5">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="group bg-grey group-py-5">
                <button class="loginSubmit" type="submit">Отправить</button>
            </div>

            <div class="border-text">
                <p class="text">
                    OR
                </p>
                <div></div>
            </div>
            <a href="#" class="open__modal" data-modal="register"> Registration</a>
        </form>
    </div>
</div>
<div class="modal" id="register">
    <div class="modal__container modal__form">
        <form action="">
            <h2 class="title">Registration</h2>
            <div class="group bg-grey group-py-5">
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="group bg-grey group-py-5">
                <input type="text" name="surname" placeholder="Surname">
            </div>
            <div class="group bg-grey group-py-5">
                <input type="email" name="email" placeholder="E-mail">
            </div>
            <div class="group bg-grey group-py-5">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="group bg-grey group-py-5">
                <input type="password" name="password_confirmation" placeholder="Confirm Password">
            </div>
            <div class="group bg-grey group-py-5">
                <button type="submit">Отправить</button>
            </div>

            <div class="border-text">
                <p class="text">
                    OR
                </p>
                <div></div>
            </div>
            <a href="#" class="open__modal" data-modal="login"> Login</a>
        </form>
    </div>
</div>

<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
