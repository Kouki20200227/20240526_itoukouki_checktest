<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanks</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/complete.css') }}">
</head>

<body>
    <div class="complete__content">
        <div class="backStr">Thank you</div>
        <div class="complete__inner">
            <div class="comment__inner">
                <p class="comment">お問い合わせありがとうございました</p>
            </div>
            <form action="/thanks" class="complete-form" method="post">
                @csrf
                <div class="home-button">
                    <button class="home-button-submit" type="submit">HOME</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>