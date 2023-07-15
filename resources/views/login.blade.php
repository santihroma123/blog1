<link href="{{ mix('css/app.css') }}" rel="stylesheet">

<x-header></x-header>
<form class="flex flex-col" enctype="multipart/form-data" method="post" action="/login/open">
  {{ csrf_field() }}
  <div class="form-group bg-blue-400 py-3 gap-2 flex flex-row justify-center items-center w-full">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" class="form-control" required>
  </div>
  <div class="form-group bg-orange-400 py-3 gap-2 flex flex-row justify-center items-center w-full">
    <label for="password">Password</label>
    <textarea name="password" id="password" class="form-control" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary bg-red-500 px-4 py-2">Submit</button>
</form>
