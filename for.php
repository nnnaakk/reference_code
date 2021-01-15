<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for文練習</title>
</head>

<body>
    <h1>for文練習</h1>
    <h2>1～100の累計と平均を求める</h2>

    <?php
    $sum = 0;
    $avg = 0;
    $num = 1000;
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    }
    $avg = $sum / $num;

    echo "1～1000までの累計：{$sum}<br>";
    echo "1～1000までの平均：{$avg}<br>";

    ?>

    <h2>1~100までの偶数の出力</h2>
    <?php
    $num_even = 100;
    for ($i = 1; $i <= $num_even; $i++) {
        if ($i % 2 === 0) {
            echo $i, " ";
        }
    }

    ?>
</body>

</html>
