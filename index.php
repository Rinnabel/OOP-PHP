<?php
require "animal.php";



$sheep = new animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false

$sungokong = new ape("kera sakti");
$sungokong->yell(); // "Auooo"

echo "<br>";

$kodok = new frog("buduk", 4);
$kodok->jump() ; // "hop hop"
echo "<br>";
echo $kodok->legs;

?>