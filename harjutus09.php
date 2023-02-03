<?php

function greetUser($nimi)
{
  $name = strtolower($nimi);
  $name = ucfirst($nimi);
  return "Tere, " . $nimi . "!";
}

function addPeriods($tekst)
{
  $text = strtoupper($tekst);
  $result = "";
  for ($i = 0; $i < strlen($tekst); $i++) {
    $result .= $tekst[$i];
    $result .= ".";
  }
  return substr($result, 0, -1);
}

function pahadsonad($tekst)
{
  $pahasona = array("noob", "idiot");
  $text = strtolower($tekst);
  foreach ($pahasona as $sona) {
    $text = str_replace($sona, str_repeat("*", strlen($sona)), $tekst);
  }
  return $tekst;
}

function createEmail($enimi, $pnimi)
{
  $enimi = strtolower($enimi);
  $pnimi = strtolower($pnimi);
  $enimi = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), $enimi);
  $pnimi = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), $pnimi);
  return $enimi . "." . $pnimi . "@hkhk.edu.ee";
}

$nimi = "eRiK";
echo greetUser($nimi) . "\n";
echo "<br>";

$tekst = "stalker";
echo addPeriods($tekst) . "\n";
echo "<br>";

$message = "Sa oled täielik noob";
echo pahadsonad($message) . "\n";
echo "<br>";

$enimi = "Ülle";
$pnimi = "Doos";
echo createEmail($enimi, $pnimi) . "\n";

?>