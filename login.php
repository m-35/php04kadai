
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <style>
        div {
            padding: 70px;
            font-size: 18px;
        }
                /* フォーム全体のスタイル */
form {
    max-width: 400px;
    margin: 50px auto;
    padding: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box; /* 追加: paddingとborderを含める */
}

/* ラベルのスタイル */
label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

/* 入力フィールドのスタイル */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box; /* 追加: paddingとborderを含める */
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
    font-size: 25px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center; /* テキストを中央揃え */
    margin-top: 70px; /* 上部の余白を調整 */
}
</style>

</head>
<body>
<form name="form1" action="login_act.php" method="POST">
    <div class="login">
    <fieldset>
    <legend>起業広告動画配信BOOST</legend>
        <label>Email <input type="text" name="email"></label><br>
        <label>パスワード <input type="password" name="password"><br> <label>
            <input type="submit" value="ログイン">
    </fieldset>
    </div>           
</form>
</body>
</html>
