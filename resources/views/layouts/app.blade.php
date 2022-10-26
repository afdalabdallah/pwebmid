<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('stylesheet')
</head>
<body>
    <div id="app">
        <header>
            <img src="img/Logo.png" alt="">
            <nav>
                <ul class="nav__links">
                    <li><a href="/home">Beranda</a></li>
                    <li><a href="">Keranjang</a></li>
                    <li>
                        @auth()
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}">Sign In</a>
                        @endguest
                        
                    </li>
                </ul>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>