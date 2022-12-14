
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

    <div class="header">
      <div class="logo col">
      <img src="img/logo.png">
      </div>
      <div class="menu col">
        <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">  
  <a class="navbar-brand" href="#">Панель навигации</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/public/#">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/public/about">О Нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/public/page">Каталог</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/public/map">Где нас найти?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/public/login">ВЫЙТИ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
