<?php
/*
01 PHP
Erik Teppan
24.01.2023
*/
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>03 - PHP - vormid</title>
</head>

<body>
    <?php
    //lisab vormist saadud andmed muutujasse
    $toode1 = intval($_GET['t1']);
    $toode2 = intval($_GET['t2']);
    $toode3 = intval($_GET['t3']);
    $tehe1 = $toode1 + $toode2;
    $tehe1 = $tehe1 / 2;
    $tehe1 = $tehe1 * $toode3;
    $tehe2 = $toode1 * $toode3;


    echo "Trapetsi Pindala: ($toode1 + $toode2) / 2 * $toode3 = $tehe1<br>";
    echo "Rombi Pindala: ($toode2 * $toode3) = $tehe2<br>";
    ?>
</body>

</html>