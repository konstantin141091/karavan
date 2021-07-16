## Разворачивание проекта ##
* скопировать .env.example в .env, указать соответствующие настройки БД
* в .env указать почту админа ADMIN_EMAIL=вашапочта
* в .env указать пароль админа ADMIN_PASSWORD=вашпароль
* настроить web-сервер, php7.2
* composer install
* npm install
* php artisan migrate
* php artisan db:seed (если ошибка composer dump-autoload)
* npm run production (каждый раз после выгрузки последней версии из репозитория)

###Если проблемы с composer-lock
 * composer update --lock

## Описание работы с текстовым редактором ##
 * чтобы поключить ckeditor на страницу необхожимо добавить следующий код
 * код файла /resources/views/example/button_and_token.blade.php
 * здесь мы создаем доступную админу кнопку сохранения изменений и csrf токен
 * этот код необходимо поключить сразу после открывающегося тега body
 * далее подключаем скрипты для работы ckeditor
 * скрипт /resources/views/example/init.js
 * и скрипт /resources/views/example/save_content.js
 * первый скрипт инициализирует ckeditor для html тегов у которых есть класс ckeditor
 * второй скрипт сохраняет введеные изменения
 * по адресу /resources/views есть директория content, в ней каждая папка соответствует blade шаблону
 * к примеру папка layouts_app_home соответствует шаблону /resources/views/layouts_app_home/app_home.blade.php
 * у каждого элемента который мы хотим редактировать, нужно прописать атрибут data-dir, который должен быть как название папки в /resources/views/content
 * у каждого элемента который мы хотим редактировать, нужно прописать id, который будет как название blade файла в соответствующей папке
 * также редактируемому элементу нужно добавить @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif
 * этот код в режиме админа разрешит редактирование элемента
 * и вместо контента нужно подключить include нужного шаблона
 * Пример с комментариями по адресу /resources/views/example/example_html.blade.php
 * Контролер обрабатывающий сохранение измененного контента(с коментариями) app/Http/Controllers/Admin/AdminController метод editContent

## Описание базы данных ##
 * описание базы данных в миграциях
 * в сидах дефолтные данные для бд
 * таблицы бд реализованы через eloquent модели

