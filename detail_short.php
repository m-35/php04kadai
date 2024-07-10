<?php
session_start();
require_once('funcs.php');
loginCheck();

$id= $_GET['id'];
require_once('funcs.php');
$pdo = db_conn();


$stmt = $pdo->prepare('SELECT * FROM user WHERE id = :id;');
$stmt ->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute();

$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録企業の詳細（ログイン無）</title>
    <link ref="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <style>
        div {
            padding: 40px;
            font-size: 20px;
        }
        div[class=container-fluid] {
            padding-top: 30px;
        }
        a[class=navbar-brand]{
            font-size: 18px;
            padding:20px 15px;
            margin-bottom: 300px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        input[type="text"]{
            width: 20%;
            padding: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        legend {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center; /* テキストを中央揃え */
            margin-top: 50px; /* 上部の余白を調整 */
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand">登録企業の詳細情報</a></div>
            </div>
        </nav>
    </header>
    <form method="POST" >
       <div class="account">
          <fieldset>
              <legend></legend>
              <label>会社名<input type="text" name="name" value="<?= $result['name'] ?>"></label><br>
              <label>資本金（単位:万円）<input type="text" name="capital" value="<?= $result['capital'] ?>"></label><br>
              <label>業   種<input type="text" name="industry" value="<?= $result['industry'] ?>"></label><br>
              <input type="hidden" name="id" value="<?= $result['id'] ?>">
          </fieldset>
       </div>
    </form>

    <footer>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select_short.php">戻る</a></div>
            </div>
        </nav>
    </footer>
</body>
</html>

