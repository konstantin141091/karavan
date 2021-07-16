@extends('layouts.app_home')

@section('content')
    <main class="main">
        <section class="actual">
            <div class="container">
                <div class="actual__inner">
                    <div class="actual__column left">
                        <h1 class="actual__title title">
                            Актуальные
                            вакансии
                        </h1>
                        <p class="actual__subtitle subtitle">
                            Lorem ipsum dolor sit amet, anim
                            consectetur adipiscing elit

                        </p>
                        <h6 class="actual__question">
                            Не нашли подходящих
                            вариантов?
                        </h6>
                        <a href="#req-popup" class="popup actual__button" data-effect="mfp-zoom-in">ПОДАТЬ ЗАЯВКУ</a>
                    </div>
                    <div class="actual__column right">
                        <div class="actual__column-inner">

                            <div class="actual__item">
                                <img src="images/banner-3.svg" alt="" class="actual__image">
                                <h6 class="actual__text">
                                    Магазины
                                </h6>
                            </div>
                            <div class="actual__item">
                                <img src="images/adv-1.svg" alt="" class="actual__image">
                                <h6 class="actual__text">
                                    Производство
                                </h6>
                            </div>
                            <div class="actual__item">
                                <img src="images/adv-2.svg" alt="" class="actual__image">
                                <h6 class="actual__text">
                                    Центральный офис
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <img class="middle-img" src="images/middle-bg.jpg" alt="">
        <section class="signup">
            <div class="container">
                <div class="signup__inner">
                    <div class="signup__box">
                        <h2 class="signup__title title ckeditor" id="index_editor1" data-dir="index"
                            @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.index.index_editor1')
{{--                            Записаться на собеседование--}}
                        </h2>
                        <p class="signup__subtitle subtitle ckeditor" id="index_editor2" data-dir="index"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.index.index_editor2')
{{--                            Lorem ipsum dolor sit amet, anim--}}
{{--                            consectetur adipiscing elit--}}
                        </p>
                        <a href="#req-popup" class="popup signup__button" data-effect="mfp-zoom-in">ПОДАТЬ ЗАЯВКУ</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="adventage">
            <div class="container">
                <div class="adventage__inner">
                    <h2 class="adventage__title title slim ckeditor" id="index_editor3" data-dir="index"
                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.index.index_editor3')
{{--                        5000 сотрудников уже сделали--}}
{{--                        свой выбор в пользу:--}}
                    </h2>
                    <div class="adventage__box">
                        <div class="adventage__item">
                            <img src="images/client-1.svg" alt="" class="adventage__item-img">
                            <p class="adventage__item-text">
                                <span class="span__bold ckeditor" id="index_editor4" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
{{--                                    Официального трудоустройства,--}}
                                    @include('content.index.index_editor4')
                                </span>
                                <span class="ckeditor" id="index_editor5" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor5')
                                    {{--                                стабильной заработной платы 2 раза в месяц--}}
                                </span>
                            </p>
                        </div>
                        <div class="adventage__item">
                            <img src="images/client-2.svg" alt="" class="adventage__item-img">
                            <p class="adventage__item-text">
                                <span class="span__bold ckeditor" id="index_editor6" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor6')
                                    </span>

                                <span class="ckeditor" id="index_editor7" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor7')
                                </span>
                            </p>
                        </div>
                        <div class="adventage__item">
                            <img src="images/client-3.svg" alt="" class="adventage__item-img">
                            <p class="adventage__item-text">
                                <span class="span__bold ckeditor" id="index_editor8" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor8')
                                </span>
                                <span class="ckeditor" id="index_editor9" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor9')
                                </span>
                            </p>
                        </div>
                        <div class="adventage__item">
                            <img src="images/client-4.svg" alt="" class="adventage__item-img">
                            <p class="adventage__item-text">
                                <span class="span__bold ckeditor" id="index_editor10" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor10')
                                </span>
                                <span class="ckeditor" id="index_editor11" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor11')
                                </span>
                            </p>
                        </div>
                        <div class="adventage__item">
                            <img src="images/client-5.svg" alt="" class="adventage__item-img">
                            <p class="adventage__item-text">
                            <span class="span__bold ckeditor" id="index_editor12" data-dir="index"
                                  @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.index.index_editor12')
                            </span>
                                <span class="ckeditor" id="index_editor13" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor13')
                                </span>
                            </p>
                        </div>
                        <div class="adventage__item">
                            <img src="images/client-6.svg" alt="" class="adventage__item-img">
                            <p class="adventage__item-text">
                                <span class="span__bold ckeditor" id="index_editor14" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor14')
                                </span>
                                <span class="ckeditor" id="index_editor15" data-dir="index"
                                      @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.index.index_editor15')
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="adventage__btn-box">
                        <a href="#req-popup" class="popup adventage__button" data-effect="mfp-zoom-in">ПОДАТЬ ЗАЯВКУ</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container">
                <div class="features__inner">
                    <div class="features__column">
                        <h2 class="features__title title slim ckeditor" id="index_editor16" data-dir="index"
                            @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.index.index_editor16')
                        </h2>
                        <p class="features__subtitle subtitle ckeditor" id="index_editor17" data-dir="index"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.index.index_editor17')
                        </p>
                        <h4 class="features__text ckeditor" id="index_editor18" data-dir="index"
                            @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.index.index_editor18')
                        </h4>
                        <a href="#req-popup" class="popup features__link" data-effect="mfp-zoom-in">ПОДАТЬ ЗАЯВКУ</a>
                    </div>
                    <div class="features__column">
                        <div class="features__box">
                            <div class="features__item">
                                <img src="images/man-1.svg" alt="" class="features__item-img">
                                <p class="features__item-text">
                                    <span class="span__bold ckeditor" id="index_editor19" data-dir="index"
                                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.index.index_editor19')
                                    </span>
                                    <span class="ckeditor" id="index_editor20" data-dir="index"
                                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.index.index_editor20')
                                    </span>
                                </p>
                            </div>
                            <div class="features__item">
                                <img src="images/man-2.svg" alt="" class="features__item-img">
                                <p class="features__item-text">
                                    <span class="span__bold ckeditor" id="index_editor21" data-dir="index"
                                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.index.index_editor21')
                                    </span>
                                    <span class="ckeditor" id="index_editor22" data-dir="index"
                                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.index.index_editor22')
                                    </span>
                                </p>
                            </div>
                            <div class="features__item">
                                <img src="images/man-3.svg" alt="" class="features__item-img">
                                <p class="features__item-text">
                                    <span class="span__bold ckeditor" id="index_editor23" data-dir="index"
                                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.index.index_editor23')
                                    </span>
                                    <span class="ckeditor" id="index_editor24" data-dir="index"
                                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.index.index_editor24')
                                    </span>
                                </p>
                            </div>
                            <div class="features__item">
                                <img src="images/man-4.svg" alt="" class="features__item-img">
                                <p class="features__item-text">

                                    <span class="ckeditor" id="index_editor25" data-dir="index"
                                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.index.index_editor25')
                                    </span>
                                    <span class="span__bold ckeditor" id="index_editor26" data-dir="index"
                                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.index.index_editor26')
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="enter">
            <div class="container">
                <div class="enter__inner">
                    <div class="enter__box">
                        <h2 class="enter__title title ckeditor" id="index_editor27" data-dir="index"
                            @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.index.index_editor27')
                        </h2>
                        <p class="enter__subtitle subtitle ckeditor" id="index_editor28" data-dir="index"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.index.index_editor28')
                        </p>
                        <a href="#req-popup" class="popup enter__link" data-effect="mfp-zoom-in">ПОДАТЬ ЗАЯВКУ</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts">
            <div class="container">
                <div class="contacts__inner">
                    <div class="contacts__box">
                        <div class="contacts__img">
                            <img src="images/logo.png" alt="">
                        </div>
                        <div class="contacts__address">
                            <h6 class="contacts__address-city ckeditor" id="index_editor29" data-dir="index"
                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.index.index_editor29')
                            </h6>
                            <p class="contacts__address-street ckeditor" id="index_editor30" data-dir="index"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.index.index_editor30')
                            </p>
                        </div>
                        <div class="contacts__phone">
                            <a href="tel:+7 (3002) 32-85-05" class="contacts__address-tel ckeditor"
                               id="index_editor31" data-dir="index"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" onclick="return false;" @endif>
                                @include('content.index.index_editor31')
                            </a>
                            <a href="tel:+7 (3002) 32-10-05" class="contacts__address-tel ckeditor"
                               id="index_editor32" data-dir="index"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" onclick="return false;" @endif>
                                @include('content.index.index_editor32')
                            </a>
{{--                            <a href="tel:+7 (3002) 32-10-05" class="contacts__address-tel"></a>--}}
                        </div>
                        <div class="contacts__email">
                            <a href="mailto:resume@karavan.ru" class="contacts__address-mail"
                               id="index_editor33" data-dir="index"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" onclick="return false;" @endif>
                                @include('content.index.index_editor33')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
