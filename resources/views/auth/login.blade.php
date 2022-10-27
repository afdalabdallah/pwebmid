<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
    <div class="container">
        <header>
            <img src="./img/Logo.png" alt="" />
        </header>
        <div class="row-1">
            <div class="col-1">
                <h1>Leave it to us!</h1>
                <h2>We are ready to provide any building you need</h2>
            </div>
            <div class="col-2">
                <h3>LOGIN</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form">
                        <div>
                            <p>
                                <label for="email">Email</label>
                            </p>

                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p>
                            <label for="password">{{ __('Password') }}</label>
                        </p>

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="centered-login-form">
                            <button type="submit">Login</button>
                            <p>belum punya akun? <a href="/register">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
