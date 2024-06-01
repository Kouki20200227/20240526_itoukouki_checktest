@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="section-title">
        <h2>Register</h2>
    </div>
    <div class="register-form">
        <form class="form" action="/register" method="post">
            @csrf
            <div class="register-item">
                <div class="register-item__inner">
                    <p class="register-item__label">お名前</p>
                    <input type="text" class="register-item__input" name="name" value="{{ old('name')}}" placeholder="例:山田　太郎">
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
                <div class="register-item__inner">
                    <p class="register-item__label">メールアドレス</p>
                    <input type="text" class="register-item__input" name="email" value="{{ old('email') }}" placeholder="例:test@example.com">
                </div>
                <div class="form__error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="register-item__inner">
                    <p class="register-item__label">パスワード</p>
                    <input type="text" class="register-item__input" name="password" value="{{ old('password') }}" placeholder="例:coachtech1106">
                </div>
                <div class="form__error">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="register-button">
                    <button class="register-button-submit" type="submit">登録</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection