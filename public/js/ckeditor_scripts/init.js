// инициализируем CKEDITOR. Для этого на нужный элемент вешаем класс ckeditor.
CKEDITOR.disableAutoInline = true;
CKEDITOR.dtd.$editable.span = 1;
CKEDITOR.dtd.$editable.a = 1;
let elements = document.querySelectorAll('.ckeditor');
elements.forEach(el => {
  CKEDITOR.inline(el.id);
});
