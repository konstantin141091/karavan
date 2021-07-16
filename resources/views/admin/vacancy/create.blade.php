@extends('layouts.app_login')

@section('content')
    <div class="container">
        <form action="{{ route('admin.vacancy.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Название вакансии</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="address">Адрес вакансии</label>
                <input type="text" name="address" id="address">
            </div>
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select name="category_id" id="category_id">
                    <option value="1" selected>Магазин</option>
                    <option value="2">Производство</option>
                    <option value="3">Центральный офис</option>
                </select>
            </div>
            <div class="form-group">
                <label for="salary">Оклад</label>
                <input type="number" name="salary" id="salary">
            </div>
            <div class="form-group">
                <label for="experience">Опыт работы</label>
                <input type="text" name="experience" id="experience">
            </div>
            <div class="form-group">
                <label for="offer">Мы предлагаем</label>
                <input type="text" name="offer" id="offer">
                <p>Перечислять пункты через ;</p>
            </div>
            <div class="form-group">
                <label for="responsibilities">Обязаности</label>
                <input type="text" name="responsibilities" id="responsibilities">
                <p>Перечислять пункты через ;</p>
            </div>
            <div class="form-group">
                <label for="requirements">Требования</label>
                <input type="text" name="requirements" id="requirements">
                <p>Перечислять пункты через ;</p>
            </div>
            <div class="form-group">
                <label for="conditions">Условия</label>
                <input type="text" name="conditions" id="conditions">
                <p>Перечислять пункты через ;</p>
            </div>
            <div class="form-group">
                <label for="published">Опубликовать</label>
                <select name="published" id="published">
                    <option value="1" selected>Опубликовать</option>
                    <option value="0">Не публиковать</option>
                </select>
            </div>
            <button type="submit">Добавить вакансию</button>
        </form>
    </div>
@endsection
