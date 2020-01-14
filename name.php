<?php
$a = "wat is jouw voornaam?";
$b = "wat is jouw achternaam?";

echo $a . PHP_EOL;
$voorNaam = readline("");
echo $b . PHP_EOL;
$achterNaam = readline("");
echo ("jouw naam is: " ). $voorNaam . $achterNaam;
?>