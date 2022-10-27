<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Rent</title>
    <link rel="stylesheet" href={{ asset('css/homepage.css') }}>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <ul class="nav__links">
                    <li><img src="img/Logo.png" alt=""></a></li>
                    <li>
                        <a href="/login">Sign In</a>
                        <a href="/register">Register</a>
                    </li>

                </ul>
            </nav>
        </header>

        <div class="row-1">
            <div class="col-1">
                <h1>Welcome to <span>Rent</span>Me</h1>
                <h2>Comfortable rooms, safe facilities, we are the solution
                </h2>
            </div>
        </div>
    </div>
</body>

</html>
