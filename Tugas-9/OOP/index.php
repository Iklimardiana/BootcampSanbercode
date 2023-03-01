<?php
require_once('animal.php');
require('Frog.php');
require('Ape.php');

$sheep = new animal("shaun");
echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>";
echo "Cold blooded : " . $sheep->cold_blooded . "<br><br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>";
echo "Cold blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : ".$kodok->jump()."<br><br>";

$sungokong = new Ape("Kera Sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";
echo "Cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : ".$sungokong->yell();
?>