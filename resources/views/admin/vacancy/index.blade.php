@extends('layouts.app_login')

@section('content')
    <div class="container">
        <ul>
            @foreach($vacancies as $vacancy)
                <li>
                    <p>{{ $vacancy->name }}: {{ $vacancy->salary }}</p>
                    <a href="{{ route('admin.vacancy.show', $vacancy) }}">подробнее</a> <br>
                    <a href="{{ route('admin.vacancy.edit', $vacancy) }}">редактировать</a> <br>
                    <a href="{{ route('admin.vacancy.destroy', $vacancy->id) }}">удалить</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
