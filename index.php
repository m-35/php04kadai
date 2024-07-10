<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アカウント登録</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css" >
    <link rel="stylesheet" href="css/reset.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            width:1400px ;
        }

        div {
            padding: 5px;
            font-size: 17px;
        }
        div[class=container-fluid] {
            padding-top: 30px;
            display: flex;
            justify-content: right;
        }

        a[class=navbar-brand]{
            font-size: 18px;
            padding:50px 15px;
            margin-bottom: 300px;
        }
        /* フォーム全体のスタイル */
        form {
            max-width: 400px;
            margin: 10px auto;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* ラベルのスタイル */
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 17px;
        }

        /* 入力フィールドのスタイル */
        input[type="text"]{
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="password"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* 送信ボタンのスタイル */
        input[type="submit"] {
            width: 50%;
            font-size: 20px;
            display: block; /* ボタンをブロック要素に変更 */
            margin: 0 auto; /* 水平方向に中央揃え */
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        /* レジェンド（フォームのタイトル）のスタイル */
        legend {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center; /* テキストを中央揃え */
            margin-top: 70px; /* 上部の余白を調整 */
        }

</style>

</head>

<body>
  <!-- Head[Start] -->
        <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select_short.php">登録企業一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->
    <!-- Main[Start] -->
    <form method="POST" action="insert.php">
       <div class="account">
          <fieldset>
              <legend>アカウント登録</legend>
              <label>会社名<input type="text" name="name"></label><br>
              <label>資本金（単位:万円）<input type="text" name="capital"></label><br>
              <label>業   種<input type="text" name="industry"></label><br>
              <label>Email<input type="text" name="email"></label><br>
              <label>パスワード(数字４桁)<input type="password" name="password" minlength="4" maxlength="4"></label><br>
              <input type="submit" value="登録">  
          </fieldset>
       </div>
    </form>
    <!-- Main[End] -->

</body>

</html>
