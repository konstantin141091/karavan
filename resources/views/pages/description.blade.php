@extends('layouts.app')

@section('content')
    <main class="main">
        <section class="description">
            <div class="container">
                <div class="description__inner">
                    <div class="description__head">
                        <h1 class="description__title title slim">

                        </h1>
                        <a href="#req-popup" class="popup description__link">
                            Откликнуться на вакансию
                        </a>
                    </div>
                    <div class="description__address">
                        {{ $vacancy->address }}
                    </div>
                    <div class="description__text">
                        <p class="description__text-block ckeditor"
                           id="pages_description_editor1" data-dir="pages_description"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.pages_description.pages_description_editor1')
                        </p>
                        <p class="description__text-block ckeditor"
                           id="pages_description_editor2" data-dir="pages_description"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.pages_description.pages_description_editor2')
                        </p>
                    </div>
                    <div class="description__box">
                        <div class="description__column first">
                            <h3 class="description__column-title">
                                Мы предлагаем Вам
                            </h3>
                            <ul class="description__column-list">
                                @foreach($vacancy->offer as $item)
                                    <li class="description__column-item">{{ $item }}</li>
                                @endforeach

                            </ul>

                            <h3 class="description__column-title">
                                Условия
                            </h3>
                            <ul class="description__column-list">
                                @foreach($vacancy->conditions as $item)
                                    <li class="description__column-item">{{ $item }}</li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="description__column-box">
                            <div class="description__column">
                                <h3 class="description__column-title">
                                    Обязаности
                                </h3>
                                <ul class="description__column-list">
                                    @foreach($vacancy->responsibilities as $item)
                                        <li class="description__column-item">{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="description__column">
                                <h3 class="description__column-title">
                                    Требования
                                </h3>
                                <ul class="description__column-list">
                                    @foreach($vacancy->requirements as $item)
                                        <li class="description__column-item">{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="description__banner">
                        <p class="description__banner-text ckeditor"
                           id="pages_description_editor3" data-dir="pages_description"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.pages_description.pages_description_editor3')
                        </p>
                        <a href="#req-popup" class="popup description__banner-link">Откликнуться на вакансию</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
