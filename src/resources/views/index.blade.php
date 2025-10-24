<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h1>システムへのご意見をお聞かせください
                </h1>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form-group-title">
                        <span class="form__label--item">氏名</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="入力してください"/>
                        </div>
                        <div class="form__error">
                            <!-- 機能実装後記述する -->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <input type="radio" name="gender" value="男性">男性
                            <input type="radio" name="gender" value="女性">女性
                        </div>
                        <div class="form__error">
                            <!-- 機能実装後記述する -->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form-group-title">
                        <span class="form__label--item">年代</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <form action="ages.html" method="get">
                                <select name="select">
                                    <option value="選択してください">選択してください</option>
                                    <option value="10代以下">10代以下</option>
                                    <option value="20代">20代</option>
                                    <option value="30代">30代</option>
                                    <option value="40代">40代</option>
                                    <option value="50代">50代</option>
                                    <option value="50代以上">50代以上</option>
                                </select>
                        </div>
                        <div class="form__error">
                            <!-- 機能実装後記述する -->
                        </div>
                    </div>
                <div class="form__group">
                    <div class="form-group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="入力してください"/>
                        </div>
                        <div class="form__error">
                            <!-- 機能実装後記述する -->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form-group-title">
                        <span class="form__label--item">メール送信可否</span>
                    </div>
                </div>
                    <div class="form__group-content">
                        <div class="form__input--checkbox">
                            <span class="form__input-text">登録したメールアドレスにメールマガジンを配信してもよろしいですか？</span>
                            <input type="checkbox">
                            <span class="form__input-text">送信を許可します</span>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form-group-title">
                        <span class="form__label--item">ご意見</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="入力してください"></textarea>
                        </div>
                    </div>
                    <div class="form__button-submit" type="submit">確認</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
