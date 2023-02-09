<?php
/*
05 PHP
Erik Teppan
24.01.2023
*/


/*KATKI!!!!!*/


?>




<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Tüdrukute nimed</h1>
        <?php
        $girl_names = array("Liis", "Kadri", "Mari", "Helen", "Jaanika", "Anneli", "Eve", "Kertu");
        sort($girl_names);

        //Väljasta esimesed 3 nime
        echo "Esimesed 3 nime:<br>";
        for ($i = 0; $i < 3; $i++) {
            echo $girl_names[$i] . "<br>";
        }

        //Väljasta viimane nimi
        echo "<br>Viimane nimi:<br>";
        echo $girl_names[count($girl_names) - 1];

        //Väljasta üks suvaline nimi
        echo "<br><br>Suvaline nimi:<br>";

        echo $girl_names[array_rand($girl_names)];


        echo "<h1>Autod</h1>";
        //Auto markide ja VIN koodide massiivid
        $car_brands = array(

            "Subaru",
            "BMW",
            "Acura",
            "Mercedes-Benz",
            "Lexus",
            "GMC",
            "Volvo",
            "Toyota",
            "Volkswagen",
            "Volkswagen",
            "GMC",
            "Jeep",

        );
        $vin_codes = array(
            "1GKS1GKC8FR966658",
            "1FTEW1C87AK375821",
            "1G4GF5E30DF760067",
            "1FTEW1CW9AF114701",
            "WAUGGAFC8CN433989",
            "3G5DA03E83S704506",
            "4JGDA2EB0DA207570",
            "1FTEW1E88AK070552",
            "SAJWA0F77F8732763",
            "JHMFA3F21BS660717",
            "JTHBP5C29C5750730",
            "WA1LFAFP9DA963060",
            "3D7TT2CT6BG521976",
        );

        //Leia autode arv
        echo "<br><br>Autode arv: " . count($car_brands);

        //Kontrolli, kas massiivid on ühepikkused
        if (count($car_brands) == count($vin_codes)) {
            echo "<br>Massiivid on ühepikkused";
        } else {
            echo "<br>Massiivid ei ole ühepikkused";
        }

        //Leia eraldi Toyotade ja Audide arv nimekirjas
        $toyota_count = 0;
        $audi_count = 0;
        foreach ($car_brands as $brand) {
            if ($brand == "Toyota") {
                $toyota_count++;
            } else if ($brand == "Audi") {
                $audi_count++;
            }
        }
        echo "<br>Toyota autode arv: " . $toyota_count;
        echo "<br>Audi autode arv: " . $audi_count;

        //Leia ja väljasta VIN koodid, mille märkide arv on väiksem kui 17
        echo "<br><br>VIN koodid, mille märkide arv on väiksem kui 17:<br>";
        foreach ($vin_codes as $code) {
            if (strlen($code) < 17) {
                echo $code . "<br>";
            }
        }
        echo "<h1>Palga keskmine</h1>";
        $salaries = array(1220, 1213, 1295, 1312, 1298, 1354, 1296, 1286, 1292, 1327, 1369, 1455);

        //Leia palkade keskmine
        $sum = array_sum($salaries);
        $average = $sum / count($salaries);
        echo "2018 palkade keskmine: " . $average;


        echo "<br><br>";
        $firmad = array("Kimia", "Mynte", "Voomm", "Twiyo", "Layo", "Talane", "Gigashots", "Tagchat", "Quaxo", "Voonyx", "Kwilith", "Edgepulse", "Eidel", "Eadel", "Jaloo", "Oyope", "Jamia");
        sort($firmad);
        ?>
        <div class="row">
            <div class="col-md-6">
                <h2>Firmade nimed</h2>
                <ul>
                    <?php
                    foreach ($firmad as $firma) {
                        echo "<li>$firma</li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-6">
                <h2s>Firma eemaldamine</h2>
                    <form action="" method="post" class="mt-4">
                        <div class="form-group">
                            <label for="firma_nimi">Sisesta firma nimi, mida soovid eemaldada:</label>
                            <input type="text" class="form-control" id="firma_nimi" name="firma_nimi">
                        </div>
                        <button type="submit" class="btn btn-primary">Eemalda firma</button>
                    </form>
                    <?php
                    if (isset($_POST['firma_nimi'])) {
                        $eemaldatav_firma = $_POST['firma_nimi'];
                        if (($key = array_search($eemaldatav_firma, $firmad)) !== false) {
                            unset($firmad[$key]);
                        }
                        echo "<h3>Firmade nimed pärast eemaldamist</h3>";
                        echo "<ul>";
                        foreach ($firmad as $firma) {
                            echo "<li>$firma</li>";
                        }
                        echo "</ul>";
                    }
                    ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVY"> 
    
</body>

</html>