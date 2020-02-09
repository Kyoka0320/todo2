<?php

// dbconnectにリンクを繋げる
require_once('dbconnect.php');

// 変数のidに選んだidを代入する
// $_POST('id')を代入
$id = $_POST['id'];
// prepareはセキュリティー対策。
// prepareの他にqueryメソッドと
// ここを？にしているのは隠して、
$stmt = $dbh->prepare('DELETE FROM tasks WHERE id = ?');

//選んだidをexecuteで実行する
// id = ? に 選んだidが入って、DELETE FROM tasks　tasksの中でdeleteを実行する
$stmt->execute([$id]);

// リダイレクトとはindex.phpに飛ばす
// 削除したらindex.phpに戻る処理をしている
header("location: index.php");