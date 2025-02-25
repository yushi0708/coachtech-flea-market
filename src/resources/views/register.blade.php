    @extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<main class="main">
<div class="register-form">
    <h2 class="register-form__heading-content__heading">会員登録</h2>
    <div class="register-form__inner">
        <form method="POST" class="register-form__form" action="{{ route('register') }}">
            @csrf
            <div class="register-form__group">
                <label class="register-form__label" for="name">ユーザー名</label>
                <input class="register-form__input" type="text" name="name" id="name" required autocomplete="name" autofocus>
                @error('name')
                    <p class="register-form__error-message" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </p>
                @enderror
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="email">メールアドレス</label>
                <input class="register-form__input" type="email" name="email" id="email" required autocomplete="email">
                @error('email')
                    <p class="register-form__error-message" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </p>
                @enderror
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="password">パスワード</label>
                <input class="register-form__input" type="password" name="password" id="password" required autocomplete="new-password">
                @error('password')
                    <p class="register-form__error-message" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </p>
                @enderror
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="check-password">確認用パスワード</label>
                <input class="register-form__input" type="password" name="check-password" id="check-password" required autocomplete="new-password">
                @error('check-password')
                    <p class="register-form__error-message">
                        <strong>
                            {{ $message }}
                        </strong>
                    </p>
                @enderror
            </div>
            <input class="register-form__btn btn" type="submit" value="登録する">
            <div class="login-area">
                <a href="{{ route('login') }}" class="link-login">ログインはこちら</a>
            </div>
        </form>
    </div>
</div>
</main>
@endsection('content')