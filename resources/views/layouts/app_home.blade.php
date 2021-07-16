<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.min.css?v=1') }}" type=" text/css" media="all" />
</head>
<body class="homePage">
@if(isset(Auth::user()->is_admin))
    <button class="admin-save" id="admin-save">save</button>
@endif
<form action="" id="admin-csrf">
    @csrf
</form>
<div class="alert-msg" id="admin-msg">
    <p>Изменения сохранены</p>
</div>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__top">
                    <div class="logo">
                        <a href="{{ route('index') }}"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    <menu class="menu">
                        <ul class="menu__list">
                            <li class="menu__list-item"><a href="{{ route('index') }}" class="menu__list-link">Главная</a></li>
                            <li class="menu__list-item"><a href="{{ route('about') }}" class="menu__list-link">О сети</a></li>
                            <li class="menu__list-item"><a href="{{ route('vacancy') }}" class="menu__list-link">Вакансии</a></li>
                            <li class="menu__list-item"><a href="" class="menu__list-link">Практика</a></li>
                            <li class="menu__list-item"><a href="{{ route('contacts') }}" class="menu__list-link">Контакты</a></li>
                        </ul>
                    </menu>
                    <div class="header__contacts">
                        <a href="tel:+7 (495) 596-65-65" class="header__contacts-tel">+7 (495) 596-65-65</a>
                        <a href="#req-popup" class="popup header__contacts-request" data-effect="mfp-zoom-in">ПОДАТЬ ЗАЯВКУ</a>
                    </div>
                    <a href="tel:+7 (495) 596-65-65" class="header__contacts-mobile">
                        <img src="images/call.svg" alt="">
                    </a>
                </div>
                <div class="header__top-mobile">
                    <img src="images/logo.png" alt="" class="mobile-logo">
                    <div class="header__top-box">
                        <a href="tel:+7 (495) 596-65-65" class="header__contacts-mobile">
                            <svg version="1.1" fill="#b8020f" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24">
                                <title>phone-call</title>
                                <path
                                        d="M14.859 5.981c0.943 0.184 1.74 0.683 2.31 1.374 0.42 0.51 0.716 1.124 0.852 1.793 0.109 0.541 0.637 0.891 1.178 0.782s0.891-0.637 0.782-1.178c-0.2-0.992-0.64-1.907-1.269-2.669-0.854-1.036-2.057-1.789-3.47-2.064-0.542-0.106-1.067 0.248-1.173 0.79s0.248 1.067 0.79 1.173zM14.94 1.994c2 0.222 3.743 1.162 5.005 2.544 1.118 1.224 1.858 2.794 2.062 4.519 0.065 0.548 0.562 0.941 1.11 0.876s0.941-0.562 0.876-1.11c-0.253-2.147-1.176-4.106-2.571-5.634-1.578-1.728-3.762-2.906-6.261-3.183-0.549-0.061-1.043 0.335-1.104 0.883s0.335 1.043 0.883 1.104zM23 16.92c0.016-0.714-0.236-1.404-0.673-1.943-0.46-0.566-1.129-0.967-1.925-1.080-0.8-0.098-1.695-0.314-2.586-0.646-0.433-0.159-0.893-0.218-1.344-0.174-0.663 0.064-1.307 0.349-1.819 0.855l-0.72 0.72c-1.77-1.117-3.36-2.667-4.583-4.589l0.726-0.726c0.322-0.33 0.563-0.726 0.707-1.156 0.212-0.632 0.214-1.336-0.039-2.011-0.289-0.753-0.518-1.644-0.644-2.595-0.104-0.714-0.456-1.345-0.963-1.804-0.539-0.486-1.256-0.779-2.027-0.771h-2.996c-0.088 0-0.182 0.004-0.273 0.012-0.824 0.075-1.542 0.478-2.033 1.066s-0.758 1.367-0.683 2.199c0.3 3.076 1.365 6.243 3.216 9.102 1.502 2.413 3.648 4.623 6.298 6.306 2.568 1.697 5.684 2.862 9.086 3.231 0.092 0.009 0.191 0.013 0.288 0.013 0.828-0.003 1.578-0.343 2.118-0.887s0.873-1.297 0.87-2.121zM21 16.92v3c0.001 0.28-0.109 0.53-0.29 0.712s-0.429 0.295-0.706 0.296c-3.149-0.336-5.961-1.391-8.263-2.912-2.428-1.543-4.359-3.537-5.702-5.694-1.697-2.62-2.655-5.481-2.924-8.238-0.024-0.268 0.064-0.526 0.229-0.724s0.403-0.33 0.678-0.355l3.088-0.005c0.271-0.003 0.507 0.094 0.687 0.256 0.17 0.154 0.288 0.366 0.323 0.608 0.142 1.072 0.408 2.117 0.757 3.025 0.081 0.216 0.080 0.447 0.010 0.658-0.049 0.145-0.131 0.281-0.242 0.395l-1.262 1.261c-0.324 0.324-0.379 0.814-0.162 1.201 1.584 2.785 3.839 4.957 6.381 6.378 0.397 0.222 0.882 0.144 1.195-0.166l1.27-1.27c0.166-0.164 0.377-0.257 0.598-0.279 0.152-0.015 0.31 0.005 0.459 0.060 1.022 0.381 2.070 0.636 3.034 0.754 0.241 0.034 0.462 0.166 0.615 0.355 0.147 0.181 0.231 0.412 0.226 0.682z">
                                </path>
                            </svg>

                        </a>
                        <div class="header__btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="header__menu-mobile">
                            <div class="header__menu-list">
                                <div class="header__menu-item"><a href="{{ route('index') }}" class="header__menu-link">Главная</a></div>
                                <div class="header__menu-item"><a href="{{ route('about') }}" class="header__menu-link">О сети</a></div>
                                <div class="header__menu-item"><a href="{{ route('vacancy') }}" class="header__menu-link">Вакансии</a></div>
                                <div class="header__menu-item"><a href="" class="header__menu-link">Практика</a></div>
                                <div class="header__menu-item"><a href="{{ route('contacts') }}" class="header__menu-link">Контакты</a></div>
                            </div>
                            <div class="header__mobile-phone">
                                <a href="tel:+7 (495) 596-65-65" class="header__contacts-tel">+7 (495) 596-65-65</a>
                                <a href="#req-popup" class="popup header__mobile-request" data-effect="mfp-zoom-in">ПОДАТЬ ЗАЯВКУ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__main">
                    <div class="header__main-box">
                        <h1 class="header__main-title title ckeditor" id="layouts_app_home_editor1" data-dir="layouts_app_home"
                            @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.layouts_app_home.layouts_app_home_editor1')
                        </h1>
                        <p class="header__main-subtitle subtitle ckeditor" id="layouts_app_home_editor2" data-dir="layouts_app_home"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.layouts_app_home.layouts_app_home_editor2')
                        </p>
                        <a href="#req-popup" class="popup header__main-request" data-effect="mfp-zoom-in">
                            ПОДАТЬ ЗАЯВКУ
                        </a>
                    </div>
                </div>
                <div class="header__banner">
                    <ul class="header__banner-list">
                        <li class="header__banner-item">
                            <img src="images/banner-1.svg" alt="" class="header__banner-img">
                            <h6 class="header__banner-title ckeditor" id="layouts_app_home_editor3" data-dir="layouts_app_home"
                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.layouts_app_home.layouts_app_home_editor3')
                            </h6>
                        </li>
                        <li class="header__banner-item">
                            <img src="images/banner-2.svg" alt="" class="header__banner-img">
                            <h6 class="header__banner-title ckeditor" id="layouts_app_home_editor4" data-dir="layouts_app_home"
                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.layouts_app_home.layouts_app_home_editor4')
                            </h6>
                        </li>
                        <li class="header__banner-item">
                            <img src="images/banner-3.svg" alt="" class="header__banner-img">
                            <h6 class="header__banner-title ckeditor" id="layouts_app_home_editor5" data-dir="layouts_app_home"
                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.layouts_app_home.layouts_app_home_editor5')
                            </h6>
                        </li>
                        <li class="header__banner-item">
                            <img src="images/banner-4.svg" alt="" class="header__banner-img">
                            <h6 class="header__banner-title ckeditor" id="layouts_app_home_editor6" data-dir="layouts_app_home"
                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.layouts_app_home.layouts_app_home_editor6')
                            </h6>
                        </li>
                        <li class="header__banner-item">
                            <img src="images/banner-5.svg" alt="" class="header__banner-img">
                            <h6 class="header__banner-title ckeditor" id="layouts_app_home_editor7" data-dir="layouts_app_home"
                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.layouts_app_home.layouts_app_home_editor7')
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer__copy">
                © 2021 «караван» Все права защищены
            </div>
        </div>
    </footer>
</div>

<div class="popups">
    <div class="request-popup mfp-with-anim mfp-hide" id="req-popup">
      <span id="close">
        <img src="images/clear.svg" alt="">
      </span>
        <div class="request-popup__title">
            Расскажите нам о себе
        </div>
        <div class="request-popup__subtitle">
            Пожалуйста, заполните анкету и прикрепите свое резюме
        </div>
        <form class="request-popup__form" method="post" enctype="multipart/form-data" action="{{ route('offer') }}">
            @csrf
            <input type="text" name="name" placeholder="Имя" id="form-name" />
            <input type="tel" name="phone" placeholder="Телефон" id="form-phone" />
            <input type="email" name="email" placeholder="E-mail" id="form-email" />
            <input type="text" name="vacancy" placeholder="Должность" id="form-vacancy" />

            <div class="input__wrapper">
                <input name="file" type="file" id="input__file" class="input input__file" multiple>
                <label for="input__file" class="input__file-button">
                    <span class="input__file-button-text">Прикрепить резюме</span>
                </label>
            </div>
            <a href="#done-popup" class="popup" data-effect="mfp-zoom-in" id="send-vacancy">
                отправить
            </a>
            <p class="request-popup__warn">
                Отправляя данные вы даете согласие на обработку перслнальных данных
            </p>
        </form>

        <script>
            let send = document.getElementById('send-vacancy');
            send.addEventListener('click', (event) => {
              let name = document.getElementById('form-name').value;
              let phone = document.getElementById('form-phone').value;
              let email = document.getElementById('form-email').value;
              let vacancy = document.getElementById('form-vacancy').value;
              let file = document.getElementById('input__file').files[0];

              const csrf = document.getElementById('admin-csrf')[0].value;

              const data = new FormData();
              data.append('_token', csrf);
              data.append('file', file);
              data.append('name', name);
              data.append('phone', phone);
              data.append('email', email);
              data.append('vacancy', vacancy);

              console.log(data);

              fetch('/offer', {
                method: 'post',
                body: data
              })

            })
        </script>

    </div>
    <div class="done-popup mfp-with-anim mfp-hide" id="done-popup">
      <span id="close-done">
        <img src="images/clear-done.svg" alt="">
      </span>
        <div class="done-popup__image">
            <img src="images/done.svg" alt="">
        </div>
        <div class="done-popup__title">Заявка отправлена</div>
        <div class="done-popup__text">
            Наш специалист свяжется с вами в ближайшее время
        </div>
    </div>
</div>

@if(isset(Auth::user()->is_admin))
<script src="{{ asset('/js/ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8" ></script>
<script src="{{ asset('js/ckeditor_scripts/init.js') }}"></script>
@endif

@if(isset(Auth::user()->is_admin))
    <script src="{{ asset('js/ckeditor_scripts/save_content.js') }}"></script>
@endif

<script src="{{ asset('js/scripts/offer_loader.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popup.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
