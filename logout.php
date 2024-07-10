<?php
//必ずsession_startは最初に記述　
session_start();

//SESSIONを初期化（空っぽにする）
// $_SESSION = array();も同じ
$_SESSION = [];

//Cookieに保存してある"SessionIDの保存期間を過去にして破棄
// -42000秒経ったら消える＝すぐ消えるの意味
if (isset($_COOKIE[session_name()])) { //session_name()は、セッションID名を返す関数
    setcookie(session_name(), '', time() - 42000, '/');
}

//サーバ側での、セッションIDの破棄 器も消す
session_destroy();

//処理後、index.phpへリダイレクト
header("Location: login.php");
exit();
