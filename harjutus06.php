<?php
/*
01 PHP
Erik Teppan
27.01.2023
*/
?>
<?php

// Genereeri arvud 1-100 ja lisa iga arvu järele punkt
for ($i = 1; $i <= 100; $i++) {
    echo $i . ".";
    // Loo pärast iga 10 arvu reavahetus
    if ($i % 10 == 0) {
        echo "<br>";
    }
}

echo "<h1 class='text-center'>Horisontaalne rida</h1>";
echo "<div class='container'><div class='row'>";
// Rida - koosta tärnidest horisontaalne rida
echo "<div class='col-12'>" . str_repeat("*", 10) . "</div>";
echo "</div></div>";

echo "<h1 class='text-center'>Vertikaalne rida</h1>";
echo "<div class='container'><div class='row'>";
// Koosta tärnidest vertikaalne rida
for ($i = 0; $i < 10; $i++) {
    echo "<div class='col-12'>" . "*<br>" . "</div>";
}
echo "</div></div>";

// Ruut - loo tsükli abil tärnidest ruut, mille suuruse lisab kasutaja läbi veebivormi
echo "<h1 class='text-center'>Ruut</h1>";
if(isset($_POST['submit'])){
    $size = (int) $_POST['size'];
    for ($i = 0; $i < $size; $i++) {
        echo str_repeat("* ", $size) . "<br>";
    }
} else {
    echo '<form action="" method="post">
        <label for="size">Enter size of square:</label>
        <input type="number" name="size" id="size" required>
        <input type="submit" name="submit" value="Submit">
    </form>';
}

// Kahanev - väljasta paarisarvud 10-1
echo "<h1 class='text-center'>Kahanevad paarisarvud</h1>";
echo "<div class='container'><div class='row'>";
for ($i = 10; $i > 0; $i -= 2) {
    echo "<div class='col-12'>" . $i . "</div>";
}
echo "</div></div>";

// Tekita arvud 1-100, aga kuva kolmega jagunevad arvud
echo "<h1 class='text-center'>Kolmega jagunevad arvud</h1>";
echo "<div class='container'><div class='row'>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo "<div class='col-12'>" . $i . "</div>";
    }
}
echo "</div></div>";
echo "<h1 class='text-center'>Massiivid ja tsüklid</h1>";
$boys = array("John", "Michael", "Eric", "David");
$girls = array("Emily", "Jessica", "Sarah", "Ashley");

for ($i = 0; $i < count($boys); $i++) {
    echo $boys[$i] . " - " . $girls[$i] . "<br>";
}
echo "</div></div>";
echo "<h1 class='text-center'>Massiivid ja tsüklid (Bonus)</h1>";
$girls = array("Mary", "Jane", "Emily", "Sophie");
$boys = array("John", "Michael", "David", "Adam");

$girls_copy = array_values(array_unique($girls));
$boys_copy = array_values(array_unique($boys));

print_r($girls_copy);
print_r($boys_copy);
?>