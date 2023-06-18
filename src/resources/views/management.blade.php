<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/management.css') }}" />
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
        <div class="management__content">
            <div class="management__heading">
                <h1>2021-11-01</h1>
            </div>
        <form class="form">
            <div class="management-table">
                <table class="management-table__inner">
                    <tr class="management-table__row">
                        <th class="management-table__header">名前</th>
                        <th class="management-table__header">勤怠開始</th>
                        <th class="management-table__header">勤務終了</th>
                        <th class="management-table__header">休憩時間</th>
                        <th class="management-table__header">勤務時間</th>
                    </tr>
                    <tr class="management-table__row">
                        <td class="management-table__data">
                            <input type="text" class="record-data" name="name" value="テスト太郎" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-start" value="10:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-done" value="20:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="rest-time" value="00:30:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="working-hours" value="09:30:00" step="1" />
                        </td>
                    </tr>
                    <tr class="management-table__row">
                        <td class="management-table__data">
                            <input type="text" class="record-data" name="name" value="テスト太郎" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-start" value="10:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-done" value="20:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="rest-time" value="00:30:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="working-hours" value="09:30:00" step="1" />
                        </td>
                    </tr>
                    <tr class="management-table__row">
                        <td class="management-table__data">
                            <input type="text" class="record-data" name="name" value="テスト太郎" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-start" value="10:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-done" value="20:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="rest-time" value="00:30:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="working-hours" value="09:30:00" step="1" />
                        </td>
                    </tr>
                    <tr class="management-table__row">
                        <td class="management-table__data">
                            <input type="text" class="record-data" name="name" value="テスト太郎" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-start" value="10:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-done" value="20:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="rest-time" value="00:30:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="working-hours" value="09:30:00" step="1" />
                        </td>
                    </tr>
                    <tr class="management-table__row">
                        <td class="management-table__data">
                            <input type="text" class="record-data" name="name" value="テスト太郎" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-start" value="10:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="work-done" value="20:00:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="rest-time" value="00:30:00" step="1" />
                        </td>
                        <td class="management-table__data">
                            <input type="time" class="record-data" name="working-hours" value="09:30:00" step="1" />
                        </td>
                    </tr>
                </table>
            </div>
            <!--{{-- {{ $management->links() }}--}}-->
        </form>
        </div>
    </main>
    <footer>
        <small>Atte, inc.</small>
    <footer>
</body>

</html>