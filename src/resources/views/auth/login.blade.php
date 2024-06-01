@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
    @if (session('message'))
    <div class="login-faild">
        {{ session('message') }}
    </div>
    @endif
    <div class="section-title">
        <h2>Login</h2>
    </div>
    <div class="login-form">
        <form action="/login" class="login-form__inner" method="post">
            @csrf
            <div class="login__item">
                <div class="login__item__inner">
                    <p class="login__item__label">メールアドレス</p>
                    <input type="text" class="login__item__input" name="email" value="{{ old('email') }}"
                        placeholder="例:test@example.com">
                </div>
                <div class="form__error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="login__item__inner">
                    <p class="login__item__label">パスワード</p>
                    <input type="text" class="login__item__input" name="password" value="{{ old('password') }}"
                        placeholder="例:coachtech1106">
                </div>
                <div class="form__error">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="login-button">
                    <button class="login-button-submit" type="submit">ログイン</button>
                </div>
                <div class="form__error">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection