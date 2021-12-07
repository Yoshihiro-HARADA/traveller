<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My投稿一覧</title>
</head>
<body>
    <div class="test2">
        @include('hobbys.sidebar')
    </div>
    <div class="content_wrapper">
        <form method="post" name="frmSearch" action="">
            @csrf      
            <div class="search__area">
                <table>
                    <tr>
                        <td>
                            {{$form['country']}}
                        </td>
                        <td>
                            {{-- <select name="" id=""></select> --}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{$form['municipalities']}}
                        </td>
                    </tr>
                    <tr>
                        <td class="search__btn">
                            <button name="btnSearch" type="submit" class="btn__search">検 索</button>
                        </td>
                        <td class="search__btn">
                            <button name="btnClearSearch" type="submit" class="btn__clear">クリア</button>
                        </td>
                    </tr>
                    <div id="star">
                        <star-rating v-model="rating"></star-rating>
                    </div>
                </table>
            </div>
        </form>
    </div>
</body>
</html>