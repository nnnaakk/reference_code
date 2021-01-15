<?php
//変数の宣言と初期化
$height = 160.0;
$weight = 100.0;
$bmi = 0.0;
$comment = "";

//身長と体重を受け取る
$height = 163;
$weight = 47;

//BMI値を演算する
$bmi = 10000 * $weight / ($height * $height);

//BMI値によって評価する
if ($bmi < 18.5) {
    $comment = "痩せ型";
} else if ($bmi < 25) {
    $comment = "普通体重";
} else if ($bmi < 30) {
    $comment = "少し肥満";
} else if ($bmi < 35) {
    $comment = "やや肥満";
} else if ($bmi < 40) {
    $comment = "おおよそ肥満";
} else if ($bmi > 40) {
    $comment = "ただの肥満";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI分析アプリ</title>
</head>

<body>
    <h1>BMI分析アプリ</h1>
    <div>
        <p>BMIの分析結果は以下の通りです</p>
        <p>身 長：<?= $height ?> cm</p>
        <p>体 重：<?= $weight ?> kg</p>
        <p>BMI 値：<?= $bmi ?></p>
        <p>評 価：「 <?= $comment ?> 」</p>
    </div>
</body>

</html>
