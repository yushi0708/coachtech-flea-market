@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css')}}">
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
    <div class="main">
        <div class="mypage-profile-form__user-image-group">
            <label class="mypage-profile-form__label" for="user_image">
                <img class="mypage-profile-form__user-image" id="user_img">
            </label>
            <input type="file" id="user_image" class="user_image" name="user_image" multiple accept="image/*" style="display:none" />
            <button id="fileSelect" type="button" class="user-image__edit-button">画像を選択する</button>
            <p class="mypage-profile-form__error-message">
                @error('user_image')
                    {{ $message }}
                @enderror
            </p>
        </div>
        <div class="mypage__list">
            <a class="item__list--recommendation" href="{{ asset('/')}}">おすすめ</a>
            <a class="item__list--my-list" href="">マイリスト</a>
        </div>
        <div class="item__list--line"></div>
        <div class="product-contents">
            @foreach ($products as $product)
                <div class="product-content">
                    <a href="/product/{{$product->id}}" class="product-link"></a>
                    <img src="{{ asset($product->img) }}"  alt="商品画像" class="img-content"/>
                    <div class="detail-content">
                        <p class="name-content">{{$product->name}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection