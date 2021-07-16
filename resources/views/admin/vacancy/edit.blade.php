@extends('layouts.app_login')

@section('content')
    <div class="container">
        <h1>Редактирование вакансии</h1>
        <form action="{{ route('admin.vacancy.update', $vacancy) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Название вакансии</label>
                <input type="text" name="name" id="name" value="{{ $vacancy->name }}">
            </div>
            <div class="form-group">
                <label for="address">Адрес вакансии</label>
                <input type="text" name="address" id="address" value="{{ $vacancy->address }}">
            </div>
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select name="category_id" id="category_id">
                    <option value="1"
                            @if($vacancy->category_id === 1)
                            selected
                            @endif
                    >Магазин</option>

                    <option value="2"
                            @if($vacancy->category_id === 2)
                            selected
                            @endif
                    >Производство</option>

                    <option value="2"
                            @if($vacancy->category_id === 3)
                            selected
                            @endif
                    >Центральный офис</option>

                </select>
            </div>
            <div class="form-group">
                <label for="salary">Оклад</label>
                <input type="number" name="salary" id="salary" value="{{ $vacancy->salary }}">
            </div>
            <div class="form-group">
                <label for="experience">Опыт работы</label>
                <input type="text" name="experience" id="experience" value="{{ $vacancy->experience }}">
            </div>
            <div class="form-group">
                <label for="offer">Мы предлагаем</label>
                <textarea name="offer" id="offer" style="width: 300px; height: 200px">{{ $vacancy->offer }}</textarea>
{{--                <input type="text" name="offer" id="offer">--}}
                <p>Перечислять пункты через ;</p>
            </div>
            <div class="form-group">
                <label for="responsibilities">Обязаности</label>
                <textarea name="responsibilities" id="responsibilities" style="width: 300px; height: 200px">{{ $vacancy->responsibilities }}</textarea>
{{--                <input type="text" name="responsibilities" id="responsibilities">--}}
                <p>Перечислять пункты через ;</p>
            </div>
            <div class="form-group">
                <label for="requirements">Требования</label>
                <textarea name="requirements" id="requirements" style="width: 300px; height: 200px">{{ $vacancy->requirements }}</textarea>
{{--                <input type="text" name="requirements" id="requirements">--}}
                <p>Перечислять пункты через ;</p>
            </div>
            <div class="form-group">
                <label for="conditions">Условия</label>
                <textarea name="conditions" id="conditions" style="width: 300px; height: 200px">{{ $vacancy->conditions }}</textarea>
{{--                <input type="text" name="conditions" id="conditions">--}}
                <p>Перечислять пункты через ;</p>
            </div>
            <div class="form-group">
                <label for="published">Публикация</label>
                <select name="published" id="published">
                    <option value="1"
                    @if($vacancy->published)
                        selected
                    @endif
                    >Опубликовать</option>

                    <option value="0"
                            @if(!$vacancy->published)
                            selected
                            @endif
                    >Не публиковать</option>

                </select>
            </div>
            <button type="submit">Сохранить изменения</button>
        </form>
    </div>
@endsection
