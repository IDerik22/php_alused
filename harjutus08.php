<?php
/*
08 PHP
Erik Teppan
*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Kuupäev ja kellaaeg</title>
</head>
<meta charset="UTF-8">
<title>Aastaaja</title>
<link rel="stylesheet" href="https://maxcdn.

<body>
    <div class=" container">
<h1>Kuupäev ja kellaaeg</h1>
<p>
    <?php
    date_default_timezone_set("Europe/Tallinn");
    echo date("d.m.Y H:i");
    ?>
</p>
<p>
    <?php
    // Leia kui vana on või kasi vanaks saab kasutaja sellel aastal
    $birth_year = 2004;
    $current_year = 2023;
    $age = $current_year - $birth_year;
    $future_age = $age + 1;
    echo "Vanus sel aastal: " . $age . "<br>";
    echo "Järgmisel aastal saab: " . $future_age;
    ?>
</p>
<p>
    <?php
    // Mitu päeva on käesoleva kooliaasta lõpuni?
    $current_year_end = strtotime("31 December " . $current_year);
    $days_to_year_end = floor(($current_year_end - time()) / 60 / 60 / 24);
    echo $current_year . " kooliaasta lõpuni on jäänud " . $days_to_year_end . " päeva!";
    ?>
</p>
<p>
    <?php
    $month = date("n");
    $season = "";
    if ($month >= 3 && $month <= 5) {
        $season = "Kevad";
    } elseif ($month >= 6 && $month <= 8) {
        $season = "Suvi";
    } elseif ($month >= 9 && $month <= 11) {
        $season = "Sügis";
    } else {
        $season = "Talv";
    }
    echo "Aastaaja: " . $season;
    ?>
</p>
</div>
</body>

</html>