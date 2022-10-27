<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->

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
            <img src="/img/Logo.png" alt="">
            <nav>
                <ul class="nav__links">
                    <li><a href="/home">Beranda</a></li>
                    <li><a href="/keranjang">Keranjang</a></li>
                    <li>
                        @auth()
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Log
                                Out
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

        <footer>
            <div class="contact">
                <p>Rent<span>Me</span></p>
                <h5>Comfortable rooms, safe facilities, we are the solution
                </h5>
                <div class="socialMedia">
                    <img src="/img/Facebook.png" alt="">
                    <img src="/img/Instagram.png" alt="">
                    <img src="/img/Twitter.png" alt="">
                    <img src="/img/Linkedin.png" alt="">
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>
                            <h5>Company</h5>
                        </th>
                        <th>
                            <h5>Company Links</h5>
                        </th>
                        <th>
                            <h5>Legal</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h5>About</h5>
                        </td>
                        <td>
                            <h5>Share Location</h5>
                        </td>
                        <td>
                            <h5>Terms & Condition</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Contact Us</h5>
                        </td>
                        <td>
                            <h5>FAQs</h5>
                        </td>
                        <td>
                            <h5>Privacy Policy</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Support</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Careers</h5>
                        </td>
                    </tr>
                </tbody>
            </table>
        </footer>
    </div>
</body>

</html>
