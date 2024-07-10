<?php
require_once('funcs.php');

//２．データ取得SQL作成
$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM user;');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    sql_error($stmt);
    // $error = $stmt->errorInfo();
    // exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        $view .= '<a href="detail_short.php?id='. $result['id'] . '">';
        $view .= "【会社名】 ".$result['name'] . '   :   ' ;
        $view .= "【業  種】 ". $result['industry']. '      ' ;
        $view .= '</a>';
        $view .='</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>アカウント情報表示一覧</title>
<link href="css/styles.css" rel="stylesheet">
<style>
div{
  padding: 10px;
  font-size:18px;
  width: 900px; /* borderとpaddingをwidthに含める */
  box-sizing: border-box; /* CSS3, IE8~, Opera8~ */
  }
</style>
</head>

<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand">登録企業一覧</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="detail_short.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->

    <!-- Footer[Start] -->
<footer>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">アカウント登録画面に戻る</a>
      </div>
    </div>
  </nav>
</footer>
<!-- Footer[End] -->
</body>

</html>