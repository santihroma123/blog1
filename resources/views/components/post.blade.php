@php
  use App\Http\Controllers\UserController;
  $User = new UserController();
  $authorUser = $User->listOneUser($post->id_user);
@endphp

<article class="transition-all flex flex-col rounded-lg bg-purple-200 px-5 py-5 w-[500px] gap-5">
  <h2 class="text-center text-2xl font-semibold">{{ $post->titulo }}</h2>
  <div class="h-[250px] bg-purple-400 w-full rounded-lg transition-all flex justify-center items-center">
    <span
      class="cursor-pointer opacity-0 w-full h-full transition-all hover:opacity-100 font-bold text-4xl flex justify-center items-center">Gonza:
      🤡</span>
  </div>
  <p class="text-center">{{ $post->cuerpo }}</p>
  <footer class="pt-6 w-full flex flex-row justify-between">
    <p>Autor: {{ $authorUser->name }}</p>
    <p>
      Publicado el: {{ $post->created_at }}
    </p>
  </footer>
</article>
