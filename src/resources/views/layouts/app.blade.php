<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="header__heading">
                <img class="header__heading--img-Logo" src="/img/Vector-Logo.png" alt="LOGO">
                <div class="header__heading--text">
                    <img class="header__heading--img-C" src="/img/Vector-C.png" alt="C">
                    <img class="header__heading--img-O" src="/img/Vector-O.png" alt="O">
                    <img class="header__heading--img-A" src="/img/Vector-A.png" alt="A">
                    <img class="header__heading--img-C" src="/img/Vector-C.png" alt="C">
                    <img class="header__heading--img-H" src="/img/Vector-H.png" alt="H">
                    <img class="header__heading--img-T" src="/img/Vector-T.png" alt="T">
                    <img class="header__heading--img-E" src="/img/Vector-E.png" alt="E">
                    <img class="header__heading--img-C" src="/img/Vector-C.png" alt="C">
                    <img class="header__heading--img-H" src="/img/Vector-H.png" alt="H">
                </div>
            </div>
            @yield('link')
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>