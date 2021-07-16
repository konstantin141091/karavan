<h6
        class="header__banner-title ckeditor"
        id="layouts_app_home_editor6"
        data-dir="layouts_app_home"
        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>

        @include('content.layouts_app_home.layouts_app_home_editor6')

</h6>

// элементу добавлен класс ckeditor, для его инициализации редактором
// элементу добавлен дата атрибут data-dir="layouts_app_home" , это название папки в /resources/views/content
// элементу добавлен id, это название файла, в котором контент для вставки
// @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif в режиме админа добавляем возможность редактирования
// @include('content.layouts_app_home.layouts_app_home_editor6') подключаем текстовый контент, который содержиться в файле
