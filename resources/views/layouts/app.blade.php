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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    @yield('stylesheet')
</head>

<body>
    <div id="app">
        <header>
            <img src="/img/Logo.png" alt="">
            <nav>
                <ul class="nav__links">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/keranjang">Cart</a></li>
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
