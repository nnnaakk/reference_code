<?php
//breakの定数を宣言する
define("BR", "<br>");


//連想配列
//方法1
$score["kokugo"] = 100;
$score["sugaku"] = 90;
$score["rika"] = 80;
$score["syakai"] = 70;
$score["eigo"] = 60;

// print_r($score);

// print(BR . BR);


$score2 = array(
    'kokugo' => 100,
    'sugaku' => 90,
    'rika' => 80,
    'syakai' => 70,
    'eigo' => 60,
);

// var_dump($score2);


print(BR . BR);

//foreach文　キーまでを指定する
//index配列を出力する
// foreach ($score as $key) {
//     print $key . BR;
// }
// print(BR . BR);

//値までを指定してindex配列を出力する
// foreach ($score as $key => $value) {
//     print $key . ":" . $value . BR;
// }
// print(BR . BR);


// foreach ($score as $key => $value) {
//     if ($key == "kokugo") {
//         print "国語:";
//     } elseif ($key == "sugaku") {
//         print "数学:";
//     } elseif ($key == "rika") {
//         print "理科:";
//     } elseif ($key == "syakai") {
//         print "社会:";
//     } elseif ($key == "eigo") {
//         print "英語:";
//     }
//     print  $value . BR;
// }

// print(BR . BR);

//個人情報の配列☆単体☆
//成績のところは多次元配列(scoreはindex、score1は連想配列)
// $student = array();
// $student["name"] = "山田　太郎";
// $student["gender"] = "男";
// $student["birthday"] = "1990-10-10";
// $student["tel"] = "088-768-1234";
// $student["height"] = "170";
// $student["weight"] = "65";
// $student["score"] = array(100, 90, 80, 70, 60);
// $student["score1"] = array(
//     'kokugo' => 100,
//     'sugaku' => 90,
//     'rika' => 80,
//     'syakai' => 70,
//     'eigo' => 60,
// );

// // print_r($student);

// echo "<p>", "名前：", $student["name"], "</p>";
// echo "<p>", "性別：", $student["gender"], "</p>";
// echo "<p>", "生年月日：", $student["birthday"], "</p>";
// echo "<p>", "電話番号：", $student["tel"], "</p>";
// echo "<p>", "身長：", $student["height"], "</p>";
// echo "<p>", "体重：", $student["weight"], "</p>";
// echo "<p>", "成績は以下の通りです。" . BR;
// //index ver.
// echo "<p>", "国語：", $student["score"][0], "</p>";
// echo "<p>", "数学：", $student["score"][1], "</p>";
// echo "<p>", "理科：", $student["score"][2], "</p>";
// echo "<p>", "社会：", $student["score"][3], "</p>";
// echo "<p>", "英語：", $student["score"][4], "</p>";
// //連想配列
// echo "<p>", "国語：", $student["score1"]["kokugo"], "</p>";
// echo "<p>", "数学：", $student["score1"]["sugaku"], "</p>";
// echo "<p>", "理科：", $student["score1"]["rika"], "</p>";
// echo "<p>", "社会：", $student["score1"]["syakai"], "</p>";
// echo "<p>", "英語：", $student["score1"]["eigo"], "</p>";

// print(BR . BR);


//個人情報の配列☆複数☆
$students = array();
$students[] = array(
    "name" => "山田　太郎",
    "gender" => "男",
    "birthday" => "1990-10-10",
    "tel" => "088-768-1234",
    "score" => array(
        "kokugo" => rand(30, 100),
        "sugaku" => rand(30, 100),
        "rika" => rand(30, 100),
        "syakai" => rand(30, 100),
        "eigo" => rand(30, 100),
    ),
);

$students = array();
$students[] = array(
    "name" => "山田　二郎",
    "gender" => "男",
    "birthday" => "1985-3-10",
    "tel" => "088-888-1234",
    "score" => array(
        "kokugo" => rand(30, 100),
        "sugaku" => rand(30, 100),
        "rika" => rand(30, 100),
        "syakai" => rand(30, 100),
        "eigo" => rand(30, 100),
    ),
);

$students = array();
$students[] = array(
    "name" => "山田　花子",
    "gender" => "女",
    "birthday" => "1975-8-10",
    "tel" => "088-333-1234",
    "score" => array(
        "kokugo" => rand(30, 100),
        "sugaku" => rand(30, 100),
        "rika" => rand(30, 100),
        "syakai" => rand(30, 100),
        "eigo" => rand(30, 100),
    ),
);

// print_r($students);




//複数の学生のデータの出力
foreach ($students as $key => $value) {
    // print $key . BR;

    echo "名前:" . $students[$key]["name"], BR;
    echo "性別:" . $students[$key]["gender"], BR;
    echo "生年月日:" . $students[$key]["birthday"], BR;
    echo "電話番号:" . $students[$key]["tel"], BR;
    echo "国語:" . $students[$key]["score"]["kokugo"], BR;
    echo "数学:" . $students[$key]["score"]["sugaku"], BR;
    echo "理科:" . $students[$key]["score"]["rika"], BR;
    echo "社会:" . $students[$key]["score"]["syakai"], BR;
    echo "英語:" . $students[$key]["score"]["eigo"], BR;
}

print(BR . BR);


foreach ($students as $key => $value) {
    // print $key . BR;
    echo $key + 1, "人目：", BR;
    echo "名前:" . $value["name"], BR;
    echo "性別:" . $value["gender"], BR;
    echo "生年月日:" . $value["birthday"], BR;
    echo "電話番号:" . $value["tel"], BR;
    echo "国語:" . $value["score"]["kokugo"], BR;
    echo "数学:" . $value["score"]["sugaku"], BR;
    echo "理科:" . $value["score"]["rika"], BR;
    echo "社会:" . $value["score"]["syakai"], BR;
    echo "英語:" . $value["score"]["eigo"], BR;
}
