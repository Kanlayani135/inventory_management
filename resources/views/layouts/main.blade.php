<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>My DB - @yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>

<body>
  <header>
    <h1>@yield('title')</h1>
    @auth
    <nav>
      <ul>
        <li>{{ \Auth::user()->name }}</li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
      </ul>
    </nav>
    @endauth
    <nav>
      <ul>
        <li><a href="{{ route('product-list') }}">Products</a></li>
        <li><a href="{{ route('shop-list') }}">Shops</a></li>
        <li><a href="{{ route('category-list') }}">Categories</a></li>
      </ul>
    </nav>
  </header>
  @error('input')
    <div class="status">{{ $message }}</div>
  @enderror
  @yield('content')
  <footer>
    &#xA9; Copyright , 2020 Kittipoom's Database.
  </footer>
</body>

</html>