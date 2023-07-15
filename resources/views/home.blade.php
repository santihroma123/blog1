@php
  use App\Http\Controllers\PostController;
  use Illuminate\Support\Facades\Session;
  $Post = new PostController();
  $todosLosPosts = $Post->listarPosts();
  $usuario = Session::get('id');
@endphp

<!doctype html>

<html>

<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <x-header></x-header>
  <h1>{{ $usuario }}</h1>
  <section class="fixed bottom-1/2 flex flex-col items-center justify-center">
    <a href="/post" id="createPost"
      class="text-xl transition-all bg-purple-900 rounded-r-xl pl-4 pr-2 py-2 hover:pl-6 flex flex-row gap-2 items-center justify-center">
      <h4 class="text-white">Create Post</h4>
      <svg xmlns="http://www.w3.org/2000/svg" class="transition-all" fill='none' width="44" height="44"
        viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M0 0h24v24H0z" />
        <path class="fill-purple-200" d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        <path class="stroke-purple-900" d="M9 12l6 0" />
        <path class="stroke-purple-900" d="M12 9l0 6" />
      </svg>
    </a>
  </section>
  <section class="flex flex-col gap-7 py-6 px-6">
    <h1 class="font-semibold text-center text-4xl py-5">Todos los posts</h1>
    <section class="flex flex-col items-center gap-8">
      @foreach ($todosLosPosts as $post)
        <x-post :post="$post"></x-post>
      @endforeach
    </section>
  </section>
  <span>{{ $todosLosPosts->links() }}</span>
</body>

</html>
