@extends('layouts.app')

@section('content')
    <!-- resources/views/auth/login.blade.php -->

    <main>
        <div class="login-container">
            <div class="login-div">
                <div class="login-title">Увійти</div>
                <form method="POST" action="/login">
                    @csrf
                    <div class="row-4">
                        <div class="col-25">
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="Email або ім’я користувача*">
                        </div>
                    </div>
                    <div class="row-4">
                        <div class="col-25">
                            <input type="password" name="password" id="password" placeholder="Пароль*">
                        </div>
                    </div>
                    <div class="row-4">
                        <button class="btn btn-login" type="submit">Увійти</button>
                    </div>
                </form>
                <div class="login-social-media-wrap">
                    <a href="#" class="btn login">
                        <div class="login-social-media">
                            <img src="img/icons/facebook.svg">
                            <h3>Facebook</h3>
                        </div>
                    </a>
                    <a href="#" class="btn login">
                        <div class="login-social-media">
                            <img src="img/icons/instagram.svg">
                            <h3>Instagram</h3>
                        </div>
                    </a>
                </div>
                <p class="login-p">Виконуючи вхід в акаунт, ви погоджуєтеся з нашими Умовами та Політикою конфіденційності.</p>
                <div class="register">Немає акаунту?<a class="register-btn" href="#"><strong>ЗАРЕЄСТРУВАТИСЯ</strong></a></div>
            </div>
        </div>
    </main>

    <!--<form method="POST" action="/login">


        <div>
            Email
            <input type="email" name="email">
        </div>

        <div>
            Password
            <input type="password" name="password" id="password">
        </div>

        <div>
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>-->
@endsection
