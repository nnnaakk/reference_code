<?php
//データの受信処理

// print_r($_GET);

//身長を受信する
$height = ""; //初期値は空っぽに
if (isset($_GET["height"]) == true) {
    $_GET["height"];
}
$height = (float)$_GET["height"];

//体重を受信する
$weight = "";
if (isset($_GET["weight"]) == true) {
    $_GET["weight"];
}
$weight = (float)$_GET["weight"];


function bmiValue(float $height, float $weight)
{
    $result = 10000 * $weight / ($height * $height);
    return $result;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI値を求める</title>
</head>

<body>
    <h1>BMI値を求める(受信)</h1>
    <p>受信結果は以下の通りになります。</p>
    <div>身長：<?= $height ?>cm</div>
    <div>体重：<?= $weight ?>kg</div>
    <br>
    <div>
        <?php
        $value = bmiValue($height, $weight);
        $value = round($value);
        print "BMI値は、「 {$value} 」 ";

        ?>

        です。</div>

</body>

</html>
