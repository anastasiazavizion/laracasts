@props([
    'title'=>'Laracasts'
])
<!DOCTYPE html>
<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="max-w-xl mx-auto p-6 text-primary">

        <div class="navbar bg-base-100 shadow-sm rounded-box">
  <div class="navbar-start">
    <a href="/ideas" class="btn btn-ghost text-xl">Ideas</a>
  </div>

  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="/ideas">Home</a></li>
      @auth
      <li><a href="/ideas/create">New Ideas</a></li>
      @can('view-admin')
      <li><a href="/admin">Admin</a></li>
      @endcan   
      @endauth
    </ul>
  </div>

  <div class="navbar-end">
    @guest
        <a href="/login" class="btn btn-ghost">Login</a>
        <a href="/register" class="btn">Register</a>
    @endguest

    @auth
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn">Logout</button>
        </form>
    @endauth
  </div>

</div>

        <main class="max-width-3xl mx-auto pt-4">
        {{ $slot }}
        </main>

    </body>
</html>
