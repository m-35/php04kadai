<?php
//1. POSTデータ取得
$name = $_POST['name'];
$capital = $_POST['capital'];
$industry = $_POST['industry'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE user
SET name =:name,capital=:capital,industry=:industry,email=:email,password= :password WHERE id =:id;');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':capital', $capital, PDO::PARAM_INT);
$stmt->bindValue(':industry', $industry, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: selectall.php');
    exit();
}

?>

