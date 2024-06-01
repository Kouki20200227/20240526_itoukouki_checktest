<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header-form">
            <div class="header__inner">
                <h1 class="header-title">FashionablyLate</h1>
            </div>
            <div class="header-button">
                @if (Request::is('register'))
                    <a href="/login" class="change__inner">login</a>
                @elseif(Request::is('login'))
                    <a href="/register" class="change__inner">register</a>
                @elseif(Request::is('admin'))
                    <a href="/register" class="change__inner">logout</a>
                @endif
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>