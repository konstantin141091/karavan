@extends('layouts.app')
@section('title', 'Караван | Вкансии')
@section('description', 'Караван предлагает работу.')

@section('content')
    <main class="main">
        <section class="vacancy">
            <div class="container">
                <div class="vacancy__inner">
                    <h1 class="vacancy__title title ckeditor" id="pages_vacancy_editor1" data-dir="pages_vacancy"
                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.pages_vacancy.pages_vacancy_editor1')
                    </h1>
                    <div class="vacancy__box">
                        <div class="vacancy__toolbar">
                            <div class="vacancy__toolbar-item" data-filter=".shops">
                                <div class="vacancy__toolbar-iteminner">
                                    <img src="images/banner-3.svg" alt="">
                                    <span>Магазины</span>
                                </div>
                            </div>
                            <div class="vacancy__toolbar-item" data-filter=".factory">
                                <div class="vacancy__toolbar-iteminner active">
                                    <img src="images/adv-1.svg" alt="">
                                    <span>Производство</span>
                                </div>
                            </div>
                            <div class="vacancy__toolbar-item" data-filter=".office">
                                <div class="vacancy__toolbar-iteminner">
                                    <img src="images/adv-2.svg" alt="">
                                    <span>Центральный офис</span>
                                </div>
                            </div>
                        </div>

                        <div class="vacancy__list mix shops">
                            @forelse($vacancies as $item)
                                @if($item->category_id === 1)
                                    <div class="vacancy__item">
                                        <h3 class="vacancy__item-title">
                                            {{ $item->name }}
                                        </h3>
                                        <p class="vacancy__item-address">
                                            {{ $item->address }}
                                        </p>
                                        <a href="{{ route('description', $item) }}" class="vacancy__item-more">
                                            ПОДРОБНЕЕ
                                        </a>
                                    </div>
                                @endif
                            @empty
                                <p>ничего нет</p>
                            @endforelse
                        </div>

                        <div class="vacancy__list mix factory">
                            @forelse($vacancies as $item)
                                @if($item->category_id === 2)
                                    <div class="vacancy__item">
                                        <h3 class="vacancy__item-title">
                                            {{ $item->name }}
                                        </h3>
                                        <p class="vacancy__item-address">
                                            {{ $item->address }}
                                        </p>
                                        <a href="{{ route('description', $item) }}" class="vacancy__item-more">
                                            ПОДРОБНЕЕ
                                        </a>
                                    </div>
                                @endif
                            @empty
                                <p>ничего нет</p>
                            @endforelse
                        </div>

                        <div class="vacancy__list mix office">
                            @forelse($vacancies as $item)
                                @if($item->category_id === 3)
                                    <div class="vacancy__item">
                                        <h3 class="vacancy__item-title">
                                            {{ $item->name }}
                                        </h3>
                                        <p class="vacancy__item-address">
                                            {{ $item->address }}
                                        </p>
                                        <a href="{{ route('description', $item) }}" class="vacancy__item-more">
                                            ПОДРОБНЕЕ
                                        </a>
                                    </div>
                                @endif
                            @empty
                                <p>ничего нет</p>
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
