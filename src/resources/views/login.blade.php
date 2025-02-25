@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('content')
<main class="main">
    <div class="login-form">
        <h2 class="login-form__heading content__heading">ログイン</h2>
        <div class="login-form__inner">
            <form class="login-form__form" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="login-form__group">
                    <label class="login-form__label" for="email">ユーザー名 / メールアドレス</label>
                    <input class="login-form__input" type="email" name="email" id="email"required autocomplete="email" autofocus>
                    @error('email')
                        <p class="register-form__error-message" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </p>
                    @enderror
                </div>
                <div class="login-form__group">
                    <label class="login-form__label" for="password">パスワード</label>
                    <input class="login-form__input" type="password" name="password" id="password" required autocomplete="current-password">
                    @error('password')
                        <p class="register-form__error-message" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </p>
                    @enderror
                </div>
                <input class="login-form__btn btn" type="submit" value="ログインする">
                <div class="register-area">
                    <a href="/register" class="link-register">会員登録はこちら</a>
                </div>
            </form>
        </div>
    </div>
</main>
<script>
    document.getElementById('login-form').addEventListener('submit', function() {
        document.getElementById('login-button').setAttribute('disabled', 'disabled');
    });
</script>
@endsection('content')