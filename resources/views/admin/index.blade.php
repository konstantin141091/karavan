@extends('layouts.app_login')

@section('content')
    <div class="container">
        <h1>Админ панель сайта</h1>
        <ul>
            <li><a href="{{ route('admin.vacancy.index') }}">Просмотр вакансий</a></li>
            <li><a href="{{ route('admin.vacancy.create') }}">Добавить новую вакансию</a></li>
            <li><a href="{{ route('admin.offer.index') }}">Просмотр откликов</a></li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">выйти</button>
            </form>
        </ul>
    </div>
@endsection
