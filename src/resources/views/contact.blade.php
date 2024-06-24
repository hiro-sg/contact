@extends('layouts.app_2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact__content">
    <div class="contact__heading">
        <h2 class="contact__logo">Contact</h2>
    </div>
    <div class="contact__main">
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--text">
                    <input class="form__input-first_name" type="text" name="first_name" placeholder="例: 山田" />
                    <input class="form__input-last_name" type="text" name="last_name" placeholder="例: 太郎" />
                </div>
                <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__input--check">
                    <input type="radio" name="gender" value="1" checked><span class="">男性</span>
                    <input type="radio" name="gender" value="2"><span class="btn">女性</span>
                    <input type="radio" name="gender" value="3"><span class="btn">その他</span>
                </div>
                <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__input--text">
                    <input class="form__input" type="email" name="email" placeholder="例: test@example.com" />
                </div>
                <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__input--text">
                    <input class="form__input-tel" type="tell" name="tell1" placeholder="080" />
                    <span>-</span>
                    <input class="form__input-tel" type="tell" name="tell2" placeholder="1234" />
                    <span>-</span>
                    <input class="form__input-tel" type="tell" name="tell3" placeholder="5678" />
                </div>
                <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__input--text">
                    <input class="form__input" type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" />
                </div>
                <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__input--text">
                    <input class="form__input" type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" />
                </div>
                <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__input--text">
                    <select class="form__label--select" name="category_id">
                        <option value="">選択してください</option>
                    </select>
                <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__input--textarea">
                    <textarea class="form__input-textarea" name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
                <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
</div>
@endsection
