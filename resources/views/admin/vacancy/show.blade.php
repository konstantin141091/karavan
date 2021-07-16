@extends('layouts.app_login')

@section('content')
    <div class="container">
        <p>{{ $vacancy->name }}</p>
        <p>{{ $vacancy->address }}</p>
        <p>{{ $category }}</p>
        <p>{{ $vacancy->salary }}</p>
        <p>{{ $vacancy->experience }}</p>
        <p>{{ $vacancy->offer }}</p>
        <p>{{ $vacancy->responsibilities }}</p>
        <p>{{ $vacancy->requirements }}</p>
        <p>{{ $vacancy->conditions }}</p>
        <p>{{ $vacancy->published }}</p>

        <a href="{{ route('admin.vacancy.edit', $vacancy) }}">редактировать</a> <br>
        <a href="{{ route('admin.vacancy.destroy', $vacancy->id) }}">удалить</a>
    </div>
@endsection
