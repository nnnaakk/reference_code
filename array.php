<?php
//順番に作成していく方法
$iro[] = 'red';
$iro[] = 'blue';
$iro[] = 'yellow';
$iro[] = 'green';
$iro[] = 'gray';
$iro[] = 'purple';

echo $iro[0], "<br>";
echo $iro[4], "<br>";
echo $iro[5], "<br>";


print "<br>";

//array関数を使って配列を宣言していく
$color = array(
    "red",
    "blue",
    "yellow",
    "green",
    "gray",
    "purple"
);

for ($i = 0; $i < 6; $i++) {
    echo $color[$i], "<br>";
}

print "<br>";

//色をつける
print "<table>";
for ($i = 0; $i < count($color); $i++) {
    print "<tr>";
    print "<td bgcolor=$color[$i]>  $color[$i]  </td>";
    print "</tr>";
}

print "</table>";

print "<br>";

//動的に成績配列を作成する
$num = 14; //生徒の人数
for ($i = 0; $i < $num; $i++) {
    $score[] = rand(40, 100);
}

//全員の成績を出力
print "<p>{$num}人の成績は以下のようになります</p>";
for ($i = 0; $i < $num; $i++) {
    echo $i + 1, "人目：", $score[$i], "<br>";
}

//平均点を求める
$sum = 0;
$avg = 0;

for ($i = 0; $i < $num; $i++) {
    $sum += $score[$i];
}
$avg = round($sum / $num, 1);


//最高点と最低点を求める

// ①考え方の基本
$max = $score[0];
for ($i = 0; $i < $num; $i++) {
    if ($score[$i] > $max) {
        $max = $score[$i];
    }
}

$min = $score[0];
for ($i = 0; $i < $num; $i++) {
    if ($score[$i] < $min) {
        $min = $score[$i];
    }
}


//②sort関数を使って、昇順に並べて出す。
// sort($score);
// $max = $score[$num - 1];
// $min = $score[0];


echo "平均点 ： {$avg}<br>";
echo "最高点 ： {$max}<br>";
echo "最低点 ： {$min}<br>";



print "<br>";
print "<br>";
print "<br>";

//↓デベロッパー
// print_r($score);
// print "<br>";
// print "<br>";

// var_dump($score); //型まで分かる
