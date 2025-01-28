    @extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<main class="main">
<div class="register-form">
    <h2 class="register-form__heading-content__heading">会員登録</h2>
    <div class="register-form__inner">
        <form class="register-form__form" action="/register" method="post">
            @csrf
            <div class="register-form__group">
                <label class="register-form__label" for="name">ユーザー名</label>
                <input class="register-form__input" type="text" name="name" id="name">
                <p class="register-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="email">メールアドレス</label>
                <input class="register-form__input" type="mail" name="email" id="email">
                <p class="register-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="password">パスワード</label>
                <input class="register-form__input" type="password" name="password" id="password">
                <p class="register-form__error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="check-password">確認用パスワード</label>
                <input class="register-form__input" type="password" name="check-password" id="check-password">
                <p class="register-form__error-message">
                    @error('check-password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <input class="register-form__btn btn" type="submit" value="登録する">
            <div class="login-area">
                <a href="/login" class="link-login">ログインはこちら</a>
            </div>
        </form>
    </div>
</div>
</main>
@endsection('content')