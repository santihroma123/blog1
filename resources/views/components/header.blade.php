@php
  use App\Http\Controllers\PostController;
  use Illuminate\Support\Facades\Session;
  $usuario = Session::get('id');
@endphp

@if ($usuario)
  <header class="flex flex-row justify-between items-center py-4 px-4 bg-purple-600">
    <a class="text-lg font-semibold text-white" href="/">Blogcito</a>
    <section class="flex flex-row justify-center items-center gap-5">
      <a class="transition-all bg-purple-400 hover:bg-purple-700 hover:text-white rounded-md px-3 py-2"
        href="/logout">Cerrar sesión</a>
    </section>
  </header>
@else
  <header class="flex flex-row justify-between items-center py-4 px-4 bg-purple-600">
    <a class="text-lg font-semibold text-white" href="/">Blogcito</a>
    <section class="flex flex-row justify-center items-center gap-5">
      <a class="transition-all text-purple-100 font-semibold hover:bg-purple-700 hover:text-white rounded-md px-3 py-2"
        href="/register">Registrarse</a>
      <a class="transition-all bg-purple-400 hover:bg-purple-700 hover:text-white rounded-md px-3 py-2"
        href="/login">Iniciar Sesión</a>
    </section>
  </header>
@endif
