<?php
/*
10 PHP
Erik Teppan
*/
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div class="container">
    <?php
    $pages = array("harjutus07", "harjutus01", "harjutus04", "harjutus06");
    $page = isset($_GET['page']) ? $_GET['page'] : "harjutus07";

    if (!in_array($page, $pages)) {
        die("Lehte ei eksisteeri.");
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: harjutus10.php");
        exit();
    }

    if (!isset($_SESSION['logged_in'])) {
        $_SESSION['logged_in'] = false;
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == "admin" && $_POST['password'] == "parool") {
            $_SESSION['logged_in'] = true;
        } else {
            echo "<script>alert('Sisestasid kas vale kasutajanime või parooli');</script>";
        }
    }

    if (!$_SESSION['logged_in']) {
        ?>
        <form class="container bg-primary bg-opacity-25 mt-4 text-black" action="" method="post">
            Kasutajanimi: <input class="m-1" type="text" name='username'><br>
            Parool: <input class="m-1" type="password" name="password"><br>
            <input type="submit" class="m-2 bg-success text-white" value="Logi sisse">
        </form>
        <?php
        exit();
    }
    ?>

    <div>
        <a href="harjutus10.php?page=harjutus07">Leht 1</a> |
        <a href="harjutus10.php?page=harjutus01">Leht 2</a> |
        <a href="harjutus10.php?page=harjutus04">Leht 3</a> |
        <a href="harjutus10.php?page=harjutus06">Leht 4</a>
        <br><br>
    </div>

    <?php
    switch ($page) {
        case "harjutus07":
            include "harjutus07.php";
            break;
        case "harjutus01":
            include "harjutus01.php";
            break;
        case "harjutus04":
            include "harjutus04.php";
            break;
        case "harjutus05":
            include "harjutus05.php";
            break;
    }
    ?>
    <br><br>
    <a href="harjutus10.php?logout=true">Logi välja</a>
</div>