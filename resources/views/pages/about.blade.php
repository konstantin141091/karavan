@extends('layouts.app')
@section('title', 'Караван | О нас')
@section('description', 'Караван предлагает работу.')

@section('content')
    <main class="main">
        <section class="about">
            <div class="container">
                <div class="about__inner">
                    <div class="about__content">
{{--                        <h1 class="about__title title slim">--}}
{{--                            --}}
{{--                        </h1>--}}
                        <h1 class="about__title title slim ckeditor"
                            id="pages_about_editor1" data-dir="pages_about"
                            @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.pages_about.pages_about_editor1')
                        </h1>
                        <img src="images/about.jpg" alt="" class="about__image">
                        <p class="about__content-text ckeditor"
                           id="pages_about_editor2" data-dir="pages_about"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.pages_about.pages_about_editor2')
                        </p>
                        <div class="about__column description__column">
                            <h3 class="description__column-title ckeditor"
                                id="pages_about_editor3" data-dir="pages_about"
                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.pages_about.pages_about_editor3')
                            </h3>
                            <ul class="description__column-list">
                                <li class="description__column-item ckeditor"
                                    id="pages_about_editor4" data-dir="pages_about"
                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.pages_about.pages_about_editor4')
                                </li>
                                <li class="description__column-item ckeditor"
                                    id="pages_about_editor5" data-dir="pages_about"
                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.pages_about.pages_about_editor5')
                                </li>
                                <li class="description__column-item ckeditor"
                                    id="pages_about_editor6" data-dir="pages_about"
                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.pages_about.pages_about_editor6')
                                </li>
                            </ul>
                        </div>
                        <div class="about__column description__column last-column">
                            <h3 class="description__column-title ckeditor"
                                id="pages_about_editor7" data-dir="pages_about"
                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.pages_about.pages_about_editor7')
                            </h3>
                            <ol class="about__column-list">
                                <li class="description__column-item num ckeditor"
                                    id="pages_about_editor8" data-dir="pages_about"
                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.pages_about.pages_about_editor8')
                                </li>
                                <li class="description__column-item num ckeditor"
                                    id="pages_about_editor9" data-dir="pages_about"
                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.pages_about.pages_about_editor9')
                                </li>
                                <li class="description__column-item num ckeditor"
                                    id="pages_about_editor10" data-dir="pages_about"
                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.pages_about.pages_about_editor10')
                                </li>
                            </ol>
                            <blockquote class="about__blockquote ckeditor" id="pages_about_editor11" data-dir="pages_about"
                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.pages_about.pages_about_editor11')
                            </blockquote>
                        </div>
                        <div class="about__gallery">
                            <div class="about__gallery-title">
                                Фотогалерея
                            </div>
                            <div class="about__gallery-inner">
                                <a href="#image-popup-1" class="gallery-image" data-effect="mfp-zoom-in"
                                   style="background-image: url('images/about.jpg');"></a>
                                <a href="#image-popup-1" class="gallery-image" data-effect="mfp-zoom-in"
                                   style="background-image: url('images/about.jpg');"></a>
                                <a href="#image-popup-1" class="gallery-image" data-effect="mfp-zoom-in"
                                   style="background-image: url('images/about.jpg');"></a>
                                <a href="#image-popup-1" class="gallery-image" data-effect="mfp-zoom-in"
                                   style="background-image: url('images/about.jpg');"></a>
                                <a href="#image-popup-1" class="gallery-image" data-effect="mfp-zoom-in"
                                   style="background-image: url('images/about.jpg');"></a>
                                <a href="#image-popup-1" class="gallery-image" data-effect="mfp-zoom-in"
                                   style="background-image: url('images/about.jpg');"></a>
                            </div>
                        </div>
                        <div class="about__table">
                            <div class="about__table-text">Пример таблицы</div>
                            <div class="about__table-box">
                                <div class="about__table-item head">
                                    <div class="about__table-title">Lorem ipsum dolor sit amet.</div>
                                    <div class="about__table-price">Стоимость</div>
                                </div>
                                <div class="about__table-item">
                                    <div class="about__table-title">Lorem ipsum dolor sit amet.</div>
                                    <div class="about__table-price">10 500 руб.</div>
                                </div>
                                <div class="about__table-item">
                                    <div class="about__table-title">Lorem ipsum dolor sit amet.</div>
                                    <div class="about__table-price">10 500 руб.</div>
                                </div>
                                <div class="about__table-item">
                                    <div class="about__table-title">Lorem ipsum dolor sit amet.</div>
                                    <div class="about__table-price">10 500 руб.</div>
                                </div>
                                <div class="about__table-item">
                                    <div class="about__table-title">Lorem ipsum dolor sit amet.</div>
                                    <div class="about__table-price">10 500 руб.</div>
                                </div>
                                <div class="about__table-item">
                                    <div class="about__table-title">Lorem ipsum dolor sit amet.</div>
                                    <div class="about__table-price">10 500 руб.</div>
                                </div>
                                <div class="about__table-item">
                                    <div class="about__table-title">Lorem ipsum dolor sit amet.</div>
                                    <div class="about__table-price">10 500 руб.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="about__aside">
                        <nav class="about__nav">
                            <ul class="about__nav-list">
                                <li class="about__nav-item">
                                    <a href="#" class="about__nav-link">
                                        О компании
                                    </a>
                                </li>
                                <li class="about__nav-item">
                                    <a href="#" class="about__nav-link">
                                        Наши приимущества
                                    </a>
                                </li>
                                <li class="about__nav-item">
                                    <a href="#" class="about__nav-link">
                                        Поставщикам
                                    </a>
                                </li>
                                <li class="about__nav-item">
                                    <a href="#" class="about__nav-link">
                                        Сертификаты
                                    </a>
                                </li>
                                <li class="about__nav-item">
                                    <a href="#" class="about__nav-link">
                                        Документы
                                    </a>
                                </li>
                                <li class="about__nav-item">
                                    <a href="#" class="about__nav-link">
                                        Наша команда
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="about__aside-gallery">
                            <img src="images/about.jpg" alt="">
                            <img src="images/about.jpg" alt="">
                            <img src="images/about.jpg" alt="">
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>
@endsection
