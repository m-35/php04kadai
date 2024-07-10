<?php session_start(); 

// unset($_SESSION['user']);←自分の前のコード

//POST値を受け取る
$email = $_POST['email'];
$password = $_POST['password'];

//1.  DB接続します
require_once('funcs.php');
$pdo = db_conn();

//2. データ登録SQL作成
// user(gs_user_table）に、email(ID)とPWがあるか確認する。
$stmt = $pdo->prepare('SELECT*FROM user WHERE email = :email AND password = :password');
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if($status === false){
    sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();
//if(password_verify($lpw, $val['lpw'])){ //* PasswordがHash化の場合はこっちのIFを使う
if( $val['id'] != ''){
    //Login成功時 該当レコードがあればSESSIONに値を代入
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['kanri'] = $val['kanri_flg'];
    header('Location: script.php');
}else{
    //Login失敗時(Logout経由)上のif文のidが存在しない場合
    header('Location: login.php');
}

exit();


// } else {
// 	echo 'ログイン名またはパスワードが違います。';
// }
// ↑授業

//2. DBからPHPに接続します←自分の前のコード
// try {
//     //ID:'root', Password: xamppは 空白 ''
//     $pdo = new PDO('mysql:dbname=php04kadai;charset=utf8;host=localhost','root','');
// } catch (PDOException $e) {
//   exit('DBConnectError:'.$e->getMessage());
// }

// $sql=$pdo->prepare('select * from user where email=? and password=?');
// $sql->execute([$_REQUEST['email'], $_REQUEST['password']]);
// foreach ($sql as $row) {
// 	$_SESSION['user']=[
// 		'id'=>$row['id'], 
//         'name'=>$row['name'],
// 		'capital'=>$row['capital'], 
//         'industry'=>$row['industry'], 
//         'email'=>$row['email'],
// 		'password'=>$row['password']
//         ];
//        }
// if (isset($_SESSION['user'])) {
//     echo 'ようこそ、', $_SESSION['user']['name'], 'さん。';
//     header('Location:script.php');
//     exit;
// } else {
// 	echo 'ログイン名またはパスワードが違います。';
// }

?>
