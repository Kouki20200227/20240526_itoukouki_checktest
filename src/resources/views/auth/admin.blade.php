@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="section-title">
        <h2>Admin</h2>
    </div>
    <form action="/admin" class="search-from__inner" method="post">
        @csrf
        <div class="search-form">
            <div class="search-name__email">
                <input type="text" class="search--item" name="name-email" value="{{ old('name-email') }}"
                    placeholder="名前やメールアドレスを入力してください">
            </div>
            <div class="search-gender">
                <select class="search--item" name="gender">
                    <option value="" selected disabled>性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
            </div>
            <div class="search-category">
                <select class="search--item" name="category_id">
                    <option value="" selected disabled>お問い合わせの種類</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}" @if (old('category_id') == $category->id) selected @endif>
                            {{ $category['id'] }}．{{ $category['content'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="search-date">
                    <input type="date" class="search--item" name="date" value="2024-01-01">
            </div>
            <div class="search-button">
                <button class="search--item" type="submit">検索</button>
            </div>
            <div class="reset-button">
                <button class="search--item" type="submit" name="riset" value="riset">リセット</button>
            </div>
        </div>
    </form>
    <div class="admin__item">
        <form action="/admin/search" class="admin-form" method="get">
            <div class="export-button">
                <button class="export-button-submit">エクスポート</button>
            </div>
        </form>
        <div class="admin__page">
            {{ $contacts->links() }}
        </div>
    </div>
    <div class="admin__table">
        <form action="/modal" class="admin-form" method="post">
            @csrf
            <table class="admin__table__inner">
                <tr class="admin__table__row">
                    <th class="admin__table__name">
                        <div class="admin__table">
                            <p class="header__name">お名前</p>
                        </div>
                    </th>
                    <th class="admin__table__gender">
                        <div class="admin__table">
                            <p class="header__name">性別</p>
                        </div>
                    </th>
                    <th class="admin__table__email">
                        <div class="admin__table">
                            <p class="header__name">メールアドレス</p>
                        </div>
                    </th>
                    <th class="admin__table__category">
                        <div class="admin__table">
                            <p class="header__name">お問い合わせの種類</p>
                        </div>
                    </th>
                    <th class="admin__table__detail">
                        <div class="admin__table">
                        </div>
                    </th>
                </tr>
                @foreach ($contacts as $contact)
                    <tr class="admin__table__row">
                        <td class="table__name--item">
                            <div class="table__name">
                                {{ $contact['first_name'] }}{{ $contact['last_name'] }}
                            </div>
                        </td>
                        <td class="table__gender--item">
                            <div class="table__gender">
                                @if ($contact['gender'] == '1')
                                男性
                                @elseif($contact['gender'] == '2')
                                女性
                                @elseif($contact['gender'] == '3')
                                その他
                                @endif
                            </div>
                        </td>

                        <td class="table__email--item">
                            <div class="table__email">
                                {{ $contact['email'] }}
                            </div>
                        </td>
                        <td class="table__category--item">
                            <div class="table__category">
                                {{ $contact['category_id'] }}
                            </div>
                        </td>
                        <td class="table__detail--item">
                            <div class="table__detail">
                                <button class="detail__button--submit">詳細</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </form>
    </div>
</div>
@endsection