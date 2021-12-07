<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link rel="icon" href="../views/img"-->
    <!--link rel="stylesheet" href="../views/css/style.css"-->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>会員登録画面/Traveller</title>
    <meta name="description" content="会員登録画面です">

    <style type="text/css">
    body.signup {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        height: 100%;
    }
    
    .signup {
        background-color: #11578B;
        color: #0B365D;
    }
    
    .signup .form-signup {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }
    
    .signup .logo-white {
        margin-bottom: 30px;
        width: 150px;
    }
    
    .signup h1 {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: bold;
    }
    
    .signup input {
        margin-bottom: 10px;
        background-color: #fff;
        border-color: #1E48B1;
    }
    
    .signup input:focus {
        background-color: #fff;
        border-color: #022950;
    }

    .name_mail {
        margin: 25px 0px 25px 0px;
    }

    .text {
        top: -4px;
        text-align: left;
        font-size: 12px;
        padding-bottom: 5px;
        padding-top: -5px;
    }
    
    .btn {
        background-color: #0B365D;
        color: #fff;
        font-size: 15px;
        margin-top: 10px;
    }
    </style>
</head>
<body class="signup text-center">
    <main class="form-signup">
        <form action="{{url('signup/post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <img src="logo4_2.png" alt="" class="logo-white">
            <h1>会員登録画面</h1>
            <input type="text" class="form-control name_mail" name="nickname" placeholder="ニックネーム" maxlength="50" required autofocus>
            <input type="email" class="form-control name_mail" name="mail" placeholder="メールアドレス" maxlength="50" required>
            <input type="password" class="form-control" name="password" placeholder="パスワード" minlength="8" maxlength="16" required>
            <p class="text mt-1 mb-3 text-muted">※ パスワードは8-16英数字(a-z,A-Z,0-9)で設定してください。</p>
            <!--- <div class="mb-0 select"> --->
                <input type="file" name="profile_img_path" class="form-control form-control-sm">
                <p class="text mt-1 mb-3 text-muted">※ プロフィール画像を選択してください。</p>
            <!--- </div> --->
            <button class="w-100 btn btn-lg" type="submit">登録する</button>
            <p class="mt-3 mb-2"><a href="login">ログインする</a></p>
            <p class="mt-2 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>
</body>
</html>