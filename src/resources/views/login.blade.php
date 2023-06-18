<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    </head>

    <body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo" href="/">
            Atte
        </a>
        </div>
    </header>

    <main>
        <div class="authenticated__content">
            <div class="authenticated__heading">
                <h1>ログイン</h1>
            </div>
        <form class="form" action="/" method="post">
        @csrf
            <div class="form__group">
                <div class="form__input--text">
                <input type="email" name="email" placeholder="メールアドレス" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__group">
                <div class="form__input--text">
                <input type="password" name="password" placeholder="パスワード" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__button-login">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
            <p class="form__register--announce">アカウントをお持ちでない方はこちら</p>
            <div class="form__button--register">
                <button class="form__button--register-submit" type="submit">会員登録</button>
            </div>
        </form>
        </div>
    </main>
    <footer>
        <small>Atte, inc.</small>
    <footer>
</body>

</html>