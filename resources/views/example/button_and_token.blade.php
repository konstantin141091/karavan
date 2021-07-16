@if(isset(Auth::user()->is_admin))
    <button class="admin-save" id="admin-save">save</button>
@endif
<form action="" id="admin-csrf">
    @csrf
</form>
