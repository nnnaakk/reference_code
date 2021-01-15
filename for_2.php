<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for文練習</title>
    <style>
        .row {
            width: 600px;
            margin: auto;
        }

        .cell {
            display: inline-block;
            width: 40px;
            border: 1px blue solid;
            padding: 4px;
            text-align: right;
        }
    </style>
</head>

<body>
    <h1>for文練習2</h1>
    <h2>9×9表</h2>
    <?php
    //div要素を使って表す
    for ($i = 1; $i <= 9; $i++) {
        echo "<div class='row'>";
        for ($j = 1; $j <= 9; $j++) {
            echo "<span class='cell'>", $i * $j, "</span>";
        }
        echo "</div>";
    }

    print "<br><br>";


    //table要素を使って表す
    echo "<table border='0' id='test'>\n";

    for ($i = 1; $i <= 9; $i++) {
        echo "<tr class='row'>";
        for ($j = 1; $j <= 9; $j++) {
            echo "<td class='cell'>", $i * $j, "</td>";
        }
        echo "</tr>";
    }
    echo "<table>\n";

    print "<br><br>";
    print "<br><br>";

    print "<table>";
    for ($r = 16; $r <= 250; $r += 10) {
        print "<tr>";
        for ($g = 16; $g <= 250; $g += 10) {
            $rh = dechex($r);
            $gh = dechex($g);
            print "<td bgcolor=#{$rh}{$gh}ff>色</td>>";
        }
        print "</tr>";
    }
    print "</table>";

    print "<br><br>";
    print "<br><br>";

    ?>
</body>

</html>
