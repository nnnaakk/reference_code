<?php

require("myfuncs.php");

$sever = "localhost";
$user = "root";
$password = "";
$dbname = "web8";
$tablename = "products";


//DBへ接続
$db = mysqli_connect($sever, $user, $password);
output("接続成功", true);

//使うデータベースを指定する
mysqli_select_db($db, $dbname,);

//テーブルにレコードを挿入する
$sql = "";
$sql .= "INSERT INTO ";
$sql .= $tablename . " ";
$sql .= "(code,name,price) ";
$sql .= "VALUES ";
$sql .= "('SH007','マーカー',98) ";
// output($sql);

//SQL文を発行する
mysqli_query($db, $sql);

//DBの接続を切断する
mysqli_close($db) or die("切断失敗");
output("切断成功", true);
