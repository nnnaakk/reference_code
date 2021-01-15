<?php



define("BR", "<br>");
define("PAI", "3.14159");
//関数の引き出し(定義)
/**
 * greeting
 *
 * @return void
 */
function greeting()
{
    print "こんにちは";
    print BR;
}
/**
 * output(画面に指定メッセージを出力)
 *
 * @param [string] $str
 * @param [boolean] $break
 * @return void
 */
function output($str, $break)
{
    print $str;
    if ($break == true) {
        print BR;
    }
}

/**
 * circleArea(円形の面積を求める関数)
 *
 * @param [float] $radius
 * @return void
 */
function circleArea(float $radius)
{
    $ret = $radius * $radius * PAI;
    return $ret;
}
/**
 * triangleArea
 *
 * @param float $width
 * @param float $height
 * @return void
 */
function triangleArea(float $width, float $height)
{
    $result = ($width * $height) / 2;
    return $result;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>関数の演習</title>
</head>

<body>
    <h1>1.関数の演習</h1>
    <h2>1.1 引数なし・戻り値なし</h2>
    <?php
    greeting(); //関数を呼び出して表示
    // print BR;
    print "こんにちは"; //関数を使わず表示

    ?>

    <h2>1.2 引数あり・戻り値なし</h2>
    <?php
    $str = "引数あり・戻り値なしの関数で、改行あり";
    output($str, true);

    $str = "引数あり・戻り値なしの関数で、改行なし";
    output($str, false);
    ?>

    <h2>1.3 引数あり・戻り値あり</h2>
    <?php

    //円形の面積を求めて出力
    $radius = 10;
    $area = circleArea($radius);
    $str = "半径{$radius}の面積は{$area}です。";
    output($str, true);

    //三角形の面積を求めて出力
    $width = 5;
    $height = 4;
    $area = triangleArea($width, $height);
    $str = "底辺{$width}、高さ{$height}の三角形の面積は{$area}です。";
    output($str, true);


    ?>
    <h1>2.組み込み関数の演習</h1>
    <h2>2.1 文字列を得る</h2>
    <?php
    output("1文字列の長さを調査するstrlen()", true);
    $str = "abcde";
    $length = strlen($str);
    $msg = "「{$str}文字列の長さは{$length}バイトです」";
    output($msg, true);

    $str = "あいうえお";
    $length = strlen($str);
    $msg = "「{$str}文字列の長さは{$length}バイトです」";
    output($msg, true);

    $str = "あいうえお";
    $length = mb_strlen($str);
    $msg = "「{$str}文字列の長さは{$length}文字です」";
    output($msg, true);

    $str = "abcd12345";
    $length = mb_strlen($str);
    $msg = "「{$str}文字列の長さは{$length}文字です」";
    output($msg, true);

    ?>

    <h2>2.2　文字列を分割</h2>
    <?php
    output("文字列を分割するsubstr()", true);
    $str = "1234567";
    $ret = substr($str, 0, 3);
    // $ret = substr($str, 4);
    output($ret, true);
    ?>

    <h2>2.3 文字列を置換</h2>
    <?php
    output("文字列を置換するstr_replace()", true);
    $str = "Good morning!";
    $str1 = "morning!";
    $str2 = "evening!";
    $ret = str_replace($str1, $str2, $str);
    output($ret, true);

    ?>

    <h2>2.4 スペースを除去する</h2>
    <?php
    output("スペースを除去するtrim()", true);
    $str = " abcdefg ";
    $ret = trim($str);
    output($ret, true);

    ?>

    <h2>2.5 HTMLタグを無効にする</h2>
    <?php
    output("HTMLタグを無効にするhtmlspecialchars()", true);
    $str = "<p>Hello World!!</p>";
    $ret = htmlspecialchars($str, ENT_QUOTES);
    output($ret, true);

    ?>

    <h2>2. 文字列検索strstr()</h2>
    <?php
    $email = 'name@hotmail.com';
    output($email, true);

    $email1 = strstr($email, '@'); //検索
    output($email1, true);

    $email2 = strstr($email, '@', true); //分割
    output($email2, true);

    // 方法２
    $apos = strpos($email, '@');
    output($apos, true);
    $email1 = substr($email, 0, $apos);
    output($email1, true);
    $email2 = substr($email, $apos + 1);
    output($email2, true);

    ?>

</body>

</html>
