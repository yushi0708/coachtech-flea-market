    @extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage-profile.css')}}">
@endsection

@section('link')
    <form class="header__link--form" action="">
        <input class="header__link--search" type="text" value="なにをお探しですか？">
    </form>
    <div class="header__link-group">
        @csrf
        <a class="header__link--logout" href="/login" >ログアウト</a>
        <a class="header__link--mypage" href="/mypage">マイページ</a>
        <button class="header__link--sell">出品</button>
    </div>
@endsection

@section('content')
<main class="main">
<div class="mypage-profile-form">
    <h1 class="mypage-profile-form__heading-content__heading">プロフィール設定</h1>
    <div class="mypage-profile-form__inner">
        <form class="mypage-profile-form__form" action="/" method="post">
            @csrf
            <div class="mypage-profile-form__user-image-group">
                <label class="mypage-profile-form__label" for="user_image">
                    <img class="mypage-profile-form__user-image" id="user_img">
                </label>
                <input type="file" id="user_image" class="user_image" name="user_image" multiple accept="image/*" style="display:none" />
                <button id="fileSelect" type="button" class="user-image__select-button">画像を選択する</button>
                <p class="mypage-profile-form__error-message">
                    @error('user_image')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="mypage-profile-form__group">
                <label class="mypage-profile-form__label" for="name">ユーザー名</label>
                <input class="mypage-profile-form__input" type="text" name="name" id="name">
                <p class="mypage-profile-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="mypage-profile-form__group">
                <label class="mypage-profile-form__label" for="post">郵便番号</label>
                <input class="mypage-profile-form__input" type="number" name="post" id="post">
                <p class="mypage-profile-form__error-message">
                    @error('post')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="mypage-profile-form__group">
                <label class="mypage-profile-form__label" for="address">住所</label>
                <input class="mypage-profile-form__input" type="text" name="address" id="address">
                <p class="mypage-profile-form__error-message">
                    @error('address')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="mypage-profile-form__group">
                <label class="mypage-profile-form__label" for="building_name">建物名</label>
                <input class="mypage-profile-form__input" type="text" name="building_name" id="building_name">
                <p class="mypage-profile-form__error-message">
                    @error('building_name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <input class="mypage-profile-form__btn btn" type="submit" value="更新する">
        </form>
    </div>
</div>
</main>
<script>
    const fileSelect = document.getElementById("fileSelect");
    const user_image = document.getElementById("user_image");

    fileSelect.addEventListener("click", (e) => {
        if (user_image) {
            user_image.click();
        }
    }, false);

    document.querySelector('#user_image').addEventListener('change', (event) => {
        const file = event.target.files[0]

        // fileがundefinedの時にreader.readAsDataURL(file)がエラーになるため、
        // !fileがfalseの場合にreturnする。
        if (!file) return

        const reader = new FileReader()

        reader.onload = (event) => {
            document.querySelector('#user_img').src = event.target.result
        }

        reader.readAsDataURL(file)
    })
</script>
@endsection('content')