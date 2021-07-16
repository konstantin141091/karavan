@extends('layouts.app')
@section('title', 'Караван | Контакты')
@section('description', 'Караван предлагает работу.')

@section('content')
    <main class="main">
        <section class="contacts-page">
            <div class="container">
                <h1 class="contacts-page__title title ckeditor" id="pages_contacts_editor1" data-dir="pages_contacts"
                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                    @include('content.pages_contacts.pages_contacts_editor1')
                </h1>
                <div class="contacts-page__map" style="background-image: url('../images/contacts-map.jpg');">
                    <div class="contacts__box">
                        <div class="contacts__img">
                            <img src="images/logo.png" alt="">
                        </div>
                        <div class="contacts__address">
                            <h6 class="contacts__address-city ckeditor" id="pages_contacts_editor2" data-dir="pages_contacts"
                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.pages_contacts.pages_contacts_editor2')
                            </h6>
                            <p class="contacts__address-street ckeditor" id="pages_contacts_editor3" data-dir="pages_contacts"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.pages_contacts.pages_contacts_editor3')
                            </p>
                        </div>
                        <div class="contacts__phone">
                            <a href="tel:+7 (3002) 32-85-05" class="contacts__address-tel ckeditor"
                               id="pages_contacts_editor4" data-dir="pages_contacts"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" onclick="return false;" @endif>
                                @include('content.pages_contacts.pages_contacts_editor4')
                            </a>
                            <a href="tel:+7 (3002) 32-10-05" class="contacts__address-tel ckeditor"
                               id="pages_contacts_editor5" data-dir="pages_contacts"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" onclick="return false;" @endif>
                                @include('content.pages_contacts.pages_contacts_editor5')
                            </a>
                        </div>
                        <div class="contacts__email">
                            <a href="mailto:resume@karavan.ru" class="contacts__address-mail ckeditor"
                               id="pages_contacts_editor6" data-dir="pages_contacts"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" onclick="return false;" @endif>
                                @include('content.pages_contacts.pages_contacts_editor6')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
