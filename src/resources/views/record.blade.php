<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/record.css') }}" />
    </head>

    <body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Atte
            </a>
            <div class="header__inner-nav">
                <nav>
                    <ul>
                        <li><a class="header__nav-link" href="#">ホーム</a></li>
                        <li><a class="header__nav-link" href="#">日付一覧</a></li>
                        <li><a class="header__nav-link" href="#">ログアウト</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="record__content">
            <div class="record__heading">
                <h1>○○さんお疲れ様です！</h1>
            </div>
        <form class="form">
            <div class="form__button">
                <button class="form__button-submit--gray" type="submit">勤怠開始</button>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">勤怠終了</button>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">休憩開始</button>
            </div>
            <div class="form__button">
                <button class="form__button-submit--gray" type="submit">休憩終了</button>
            </div>
        </form>
        </div>
    </main>
    <footer>
        <small>Atte, inc.</small>
    <footer>
</body>

</html>