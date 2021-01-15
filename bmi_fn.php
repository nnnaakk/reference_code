<?php

//自定義関数を読み込み
// include("myfuncs.php");

define("BR", "<br>");
/**
 * Undocumented function
 *
 * @param [string] $str
 * @param [type] $break
 * @return void
 */
function output($str, $break)
{
    print $str;
    if ($break == true) {
        print BR;
    }
}

//関数の定義
/**
 * bmi値を求める
 *
 * @param float $height
 * @param float $weight
 * @return void
 */
function bmiValue(float $height, float $weight)
{
    $result = 10000 * $weight / ($height * $height);
    return $result;
}

/**
 *bmiEvaluation
 *
 * @param [float] $bmi
 * @return void
 */
function bmiEvaluation($bmi)
{
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
    return $comment;
};

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI値を求める関数</title>
</head>

<body>
    <h1>BMI値を求める</h1>
    <?php
    $height = 160.0;
    $weight = 100.0;
    $value = bmiValue($height, $weight);
    print "BMI値は、{$value}";

    ?>
    <h1>BMI値の評価</h1>
    <?php
    $bmi

    ?>


</body>

</html>
