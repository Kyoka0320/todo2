<?php

require_once('dbconnect.php');
require_once('function.php');

$title = $_POST['title'];
$contents = $_POST['contents'];
$id = $_POST['id'];

// データの更新するのがupdate
// SET は 更新するカラム名
$stmt = $dbh->prepare('UPDATE tasks SET title = ? , contents = ?  WHERE id = ?');
$stmt->execute([$title,$contents,$id]);

// 
header("location: index.php");