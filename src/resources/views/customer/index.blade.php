@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact__content">
    <div class="section-title">
        <h2>Contact</h2>
    </div>
    <div class="contact-table">
        <form action="/" class="check-form" method="post">
            @csrf
            <table class="check-table__inner">
                <tr class="check-table__row">
                    <th class="check-table__header">
                        <div class="check-form__header">
                            <p class="check__header__item">お名前<span class="check__header--red">※</span></p>
                        </div>
                    </th>
                    <td class="check-table__item">
                        <div class="check-form__item">
                            <div class="check-form__name__item">
                                <input class="check-form--input" type="text" name="first_name"
                                    value="{{ old('first_name') }}" placeholder="例:山田">
                                <div class="check-form--warning">
                                    @if ($errors->has('first_name'))
                                        <li>{{ $errors->first('first_name') }}</li>
                                    @endif
                                </div>
                            </div>
                            <div class="check-form__name__item">
                                <input class="check-form--input" type="text" name="last_name"
                                    value="{{ old('last_name') }}" placeholder="例:太郎">
                                <div class="check-form--warning">
                                    @if ($errors->has('last_name'))
                                        <li>{{ $errors->first('last_name') }}</li>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="check-table__row">
                    <th class="check-table__header">
                        <div class="check-form__header">
                            <p class="check__header__item">性別<span class="check__header--red">※</span></p>
                        </div>
                    </th>
                    <td class="check-table__item">
                        <div class="check-form__gender">
                            <div class="gender__item">
                                <input type="radio" class="check-form__gender--radio" name="gender" value="1" 
                                    checked>
                                <label class="gender__text">男性</label>
                            </div>
                            <div class="gender__item">
                                <input type="radio" class="check-form__gender--radio" name="gender" value="2">
                                <label class="gender__text">女性</label>
                            </div>
                            <div class="gender__item">
                                <input type="radio" class="check-form__gender--radio" name="gender" value="3">
                                <label class="gender__text">その他</label>
                            </div>
                        </div>
                        <div class="check-form--warning">
                            @if ($errors->has('gender'))
                                <li>{{ $errors->first('gender') }}</li>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr class="check-table__row">
                    <th class="check-table__header">
                        <div class="check-form__header">
                            <p class="check__header__item">メールアドレス<span class="check__header--red">※</span></p>
                        </div>
                    </th>
                    <td class="check-table__item">
                        <div class="check-form__item">
                            <input type="text" class="check-form--input" name="email" value="{{ old('email') }}"
                                placeholder="例:test@example.com">
                        </div>
                        <div class="check-form--warning">
                            @if ($errors->has('email'))
                                <li>{{ $errors->first('email') }}</li>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr class="check-table__row">
                    <th class="check-table__header">
                        <div class="check-form__header">
                            <p class="check__header__item">電話番号<span class="check__header--red">※</span></p>
                        </div>
                    </th>
                    <td class="check-table__item">
                        <div class="check-form__item">
                            <div class="check-form__tell__item">
                                <input type="tel" name="tell1" class="check-form--input" value="{{ old('tell1') }}"
                                    placeholder="080">
                                <div class="check-form--warning">
                                    @if ($errors->has('tell1'))
                                        <li>{{ $errors->first('tell1') }}</li>
                                    @endif
                                </div>
                            </div>
                            <div class="tell__bar">
                                -
                            </div>
                            <div class="check-form__tell__item">
                                <input type="tel" name="tell2" class="check-form--input" value="{{ old('tell2') }}"
                                    placeholder="1234">
                                <div class="check-form--warning">
                                    @if ($errors->has('tell2'))
                                        <li>{{ $errors->first('tell2') }}</li>
                                    @endif
                                </div>
                            </div>
                            <div class="tell__bar">
                                -
                            </div>
                            <div class="check-form__tell__item">
                                <input type="tel" name="tell3" class="check-form--input" value="{{ old('tell3') }}"
                                    placeholder="5678">
                                <div class="check-form--warning">
                                    @if ($errors->has('tell3'))
                                        <li>{{ $errors->first('tell3') }}</li>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="check-table__row">
                    <th class="check-table__header">
                        <div class="form__header">
                            <p class="check__header__item">住所<span class="check__header--red">※</span></p>
                        </div>
                    </th>
                    <td class="check-table__item">
                        <div class="check-form__item">
                            <input type="text" class="check-form--input" name="address" value="{{ old('address') }}"
                                placeholder="例:千駄ヶ谷マンション1-2-3">
                        </div>
                        <div class="check-form--warning">
                            @if ($errors->has('address'))
                                <li>{{ $errors->first('address') }}</li>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr class="check-table__row">
                    <th class="check-table__header">
                        <div class="form__header">
                            <p class="check__header__item">建物名</p>
                        </div>
                    </th>
                    <td class="check-table__item">
                        <div class="check-from__item">
                            <input type="text" class="check-form--input" name="building" value="{{ old('building') }}"
                                placeholder="例:千駄ヶ谷マンション101">
                        </div>
                    </td>
                </tr>
                <tr class="check-table__row">
                    <th class="check-table__header">
                        <div class="form__header">
                            <p class="check__header__item">お問い合わせの種類<span class="check__header--red">※</span></p>
                        </div>
                    </th>
                    <td class="check-table__item">
                        <div class="check-from__item">
                            <div class="check-form__content__item">
                                <select name="category_id" class="check-form--input">
                                    <option value="" selected disabled>選択してください</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}" @if (old('category_id') == $category->id) selected @endif>
                                        {{ $category['id']}}．{{ $category['content'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="check-form--warning">
                            @if ($errors->has('category_id'))
                                <li>{{ $errors->first('category_id') }}</li>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr class="check-table__row">
                    <th class="check-table__header">
                        <div class="form__header">
                            <p class="check__header__item">お問い合わせ内容<span class="check__header--red">※</span></p>
                        </div>
                    </th>
                    <td class="check-table__item">
                        <div class="check-form__item">
                            <textarea name="detail" class="check-form--input" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                        </div>
                        <div class="check-form--warning">
                            @if ($errors->has('detail'))
                                <li>{{ $errors->first('detail') }}</li>
                            @endif
                        </div>
                    </td>
                </tr>
            </table>
            <div class="check-form__button">
                <button class="check__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
</div>

@endsection