@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/check.css') }}">
@endsection

@section('content')

<div class="confirm__content">
    <div class="section-title">
        <h2>Contact</h2>
    </div>
    <div class="confirm-table">
        <form action="/confirm" class="confirm-form" method="post">
            @csrf
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        <p class="confirm-header__item">お名前</p>
                    </th>
                    <td class="confirm-table__data">
                        <p class="confirm-data__item">
                            {{ $input['first_name'] }} {{ $input['last_name'] }}
                        </p>
                        <input type="hidden" name="first_name" value="{{ $input['first_name'] }}">
                        <input type="hidden" name="last_name" value="{{ $input['last_name'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        <p class="confirm-header__item">性別</p>
                    </th>
                    <td class="confirm-table__data">
                        <p class="confirm-data__item">
                            @if ($input['gender'] == 1)
                                男性
                            @endif
                            @if ($input['gender'] == 2)
                                女性
                            @endif
                            @if ($input['gender'] == 3)
                                その他
                            @endif
                        </p>
                        <input type="hidden" name="gender" value="{{ $input['gender'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        <p class="confirm-header__item">メールアドレス</p>
                    </th>
                    <td class="confirm-table__data">
                        <p class="confirm-data__item">{{ $input['email'] }}</p>
                        <input type="hidden" name="email" value="{{ $input['email'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        <p class="confirm-header__item">電話番号</p>
                    </th>
                    <td class="confirm-table__data">
                        <p class="confirm-data__item">{{ $input['tell1'] }}{{ $input['tell2'] }}{{ $input['tell3'] }}
                        </p>
                        <input type="hidden" name="tell"
                            value="{{ $input['tell1'] }}{{ $input['tell2'] }}{{ $input['tell3'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        <p class="confirm-header__item">住所</p>
                    </th>
                    <td class="confirm-table__data">
                        <p class="confirm-data__item">{{ $input['address'] }}</p>
                        <input type="hidden" name="address" value="{{ $input['address'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        <p class="confirm-header__item">建物名</p>
                    </th>
                    <td class="confirm-table__data">
                        <p class="confirm-data__item">{{ $input['building'] }}</p>
                        <input type="hidden" name="building" value="{{ $input['building'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        <p class="confirm-header__item">お問い合わせの種類</p>
                    </th>
                    <td class="confirm-table__data">
                        <p class="confirm-data__item">{{ $category['content'] }}</p>
                        <input type="hidden" name="category_id" value="{{ $input['category_id'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        <p class="confirm-header__item">お問い合わせ内容</p>
                    </th>
                    <td class="confirm-table__data">
                        <p class="confirm-data__item">{{ $input['detail'] }}</p>
                        <input type="hidden" name="detail" value="{{ $input['detail'] }}">
                    </td>
                </tr>
            </table>
            <div class="confirm-button">
                <div class="confirm-button__inner">
                    <button class="send__button-submit" type="submit">送信</button>
                </div>
                <div class="confirm-button__inner">
                    <button class="back__button-submit" type="submit" name="back" value="back">修正</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection