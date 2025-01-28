@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css')}}">
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
    <div class="all-contents">
        <div class="top-contents">
            <div class="left-content">
                <img src="{{ asset($product->img) }}"  alt="商品画像" class="img-content"/>
            </div>
            <div class="right-content">
                <div class="right-content-upper">
                    <ul class="detail-list-upper">
                        <li>
                            <h3 class="product-name">{{$product->name}}</h3>
                        </li>
                        <li class="product-brand">ブランド名</li>
                        <li class="product-price">
                            ¥<span class="product-price-text">{{$product->price}}</span>（税抜）
                        </li>
                        <li class="product-sub-function">
                            <div class="favorite-comment">
                                <div class="favorite">
                                    <img class="favorite-img" src="{{asset('img/星アイコン8.png')}}" alt="">
                                    @foreach($favorite_counts as $favorite_count)
                                        @if($product->id == $favorite_count->id
                                        )
                                            <p class="favorite-total">{{$favorite_count->count}}</p>
                                            @break
                                        @elseif ($product->id != $favorite_count->id)
                                            @continue
                                        @endif
                                    @endforeach
                                </div>
                                <div class="comment">
                                    <img class="comment-img" src="{{asset('img/ふきだしのアイコン.png')}}" alt="">
                                    @foreach($comment_counts as $comment_count)
                                        @if($product->id == $comment_count->id
                                        )
                                            <p class="comment-total">{{$comment_count->count}}</p>
                                            @break
                                        @elseif ($product->id != $comment_count->id)
                                            @continue
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="purchase-area">
                    <form action="/purchase/{{$product->id}}" method = "GET">
                        @csrf
                        <button type="submit" class="purchase-button">購入手続きへ</button>
                    </form>
                </div>
                <div class="middle-content">
                    <ul class="detail-list-middle">
                        <li class="description-area">
                            <h4 class="description-title">商品説明</h4>
                            <p class="product-description">{{$product->description}}</p>
                        </li>
                        <li class="information-area">
                            <h4 class="information-title">商品の情報</h4>
                            <div class="category-area">
                                <span class="category-title">カテゴリー</span>
                                <div class="category-content">
                                    @foreach ($categories as $category)
                                        @if($product->checkCategory($category,$product) == "no")
                                            @continue
                                        @elseif($product->checkCategory($category,$product) == "yes")
                                            <span>{{$category->name}}</span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="condition-area">
                                <span class="condition-title">商品の状態</span>
                                <span class="condition-text">{{$product->condition->name}}</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="under-content">
                    <ul class="detail-list-under">
                        <li class="comment-area">
                            <h4 class="comment-area-title">コメント(
                                @foreach($comment_counts as $comment_count)
                                    @if($product->id == $comment_count->id            )
                                        <span class="comment-area-total">{{$comment_count->count}}</span>
                                        @break
                                    @elseif($product->id != $comment_count->id)
                                        @continue
                                    @endif
                                @endforeach
                            )</h4>
                        </li>
                        @foreach ($comments as $comment)
                            <li class="commented">
                                <div class="commented-account">
                                    <img src="{{ asset($comment->user->img) }}" alt="プロフィール画像">
                                    <span class="commented-account-name">{{ $comment->user->name }}</span>
                                </div>
                                <p class="commented-text">{{ $comment->comment }}</p>
                            </li>
                        @endforeach
                        <li class="my-comment">
                            <p class="my-comment-title">商品へのコメント</p>
                            <form action="/product/{{$product->id}}" method ="POST">
                                @csrf
                                <input type="textarea" class="my-comment-textarea">
                                <button class="my-comment-button">コメントを送信する</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection