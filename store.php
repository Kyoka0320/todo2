<?php





// データの受け取り

// titleの受け取り
$title = $_POST['title'];
// var_dump($title);
// die;

// contentsの受け取り
$contents = $_POST['contents'];
//var_dump($contents);
//die;



//DBに保存

// DBに接続
 require_once('dbconnect.php');

$stmt = $dbh->prepare('INSERT INTO tasks (title, contents) VALUES (?, ?)');
$stmt->execute([$title, $contents]);



// 一覧ページにリダイレクト
// 一覧に戻る処理

header('Location: index.php');

