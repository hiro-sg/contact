@extends('layouts.app_2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm_heading">
        <h2 class="confirm__logo">Confirm</h2>
    </div>
    <from class="form">
        <div class="confirm-table" action="/contacts" method="post">
            @csrf
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="{{ $contact['first_name']}}" readonly/>
                        <input type="text" name="name" value="{{ $contact['last_name']}}" readonly/>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly/>
                        @if($contact['gender'] == '1') {
                            echo '男性';
                        }
                        @elseif($contact['gender']) == '2' {
                            echo '女性';
                        }
                        @else($contact['gender']) == '3' {
                            echo 'その他';
                        }
                        @endif
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly/>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="tell" name="tell" value="{{ $contact['tell'] }}" readonly/>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address']}}" readonly/>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building']}}" readonly/>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{ $contact['detail']}}" readonly/>
                    </td>
                </tr>
            </table>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
                <a class="form__link" href="">
        </div>
    </from>
</div>
@endsection
