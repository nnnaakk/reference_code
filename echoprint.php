<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echoとprintの使い方</title>
    <style>
        .name {
            color: red;
            font-weight: bold;
        }
    </style>


</head>

<body>
    <h1>Echoとprintの使い方</h1>
    <h2>Echoの使い方</h2>
    <?php
    echo 'こんにちは。';
    echo "<br>";

    $name = '福島';
    echo $name;
    echo "<br>";

    echo '<p>', 'こんにちは。', '<span class="name">', $name,  '</span>', 'さん。', '</p> ';
    echo '<br>';
    ?>

    <h2>printの使い方</h2>
    <?php
    print 'こんにちは。';
    print "<br>";

    $name = '福島';
    print $name;
    print "<br>";

    print '<p>' . 'こんにちは。' . '<span class="name">' . $name .  '</span>' . 'さん。' . '</p> ';
    print '<br>';
    ?>




</body>

</html>
