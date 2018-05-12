<?php

session_start();

$key_ironman1 = "ironman1";
$key_ironman2 = "ironman2";
$key_ironman3 = "ironman3";
$key_cap1 = "cap1";
$key_cap2 = "cap2";
$key_cap3 = "cap3";
$key_thor1 = "thor1";
$key_thor2 = "thor2";
$key_thor3 = "thor3";
$key_avengers1 = "avengers1";
$key_avengers2 = "avengers2";
$key_spider = "spider-man";
$key_guardians1 = "guardians1";
$key_guardians2 = "guardians2";
$key_panther = "panther";
$key_hulk = "hulk";
$key_ant = "ant-man";

//ironman1
if(!isset($_SESSION[$key_ironman1])) {
    $_SESSION[$key_ironman1] = $_GET["ironman1"];
}
else {
    $_SESSION[$key_ironman1] += $_GET["ironman1"];
}

//ironman2
if(!isset($_SESSION[$key_ironman2])) {
    $_SESSION[$key_ironman2] = $_GET["ironman2"];
}
else {
    $_SESSION[$key_ironman2] += $_GET["ironman2"];
}

//ironman3
if(!isset($_SESSION[$key_ironman3])) {
    $_SESSION[$key_ironman3] = $_GET["ironman3"];
}
else {
    $_SESSION[$key_ironman3] += $_GET["ironman3"];
}

//cap1
if(!isset($_SESSION[$key_cap1])) {
    $_SESSION[$key_cap1] = $_GET["cap1"];
}
else {
    $_SESSION[$key_cap1] += $_GET["cap1"];
}

//cap2
if(!isset($_SESSION[$key_cap2])) {
    $_SESSION[$key_cap2] = $_GET["cap2"];
}
else {
    $_SESSION[$key_cap2] += $_GET["cap2"];
}

//cap3
if(!isset($_SESSION[$key_cap3])) {
    $_SESSION[$key_cap3] = $_GET["cap3"];
}
else {
    $_SESSION[$key_cap3] += $_GET["cap3"];
}

//thor1
if(!isset($_SESSION[$key_thor1])) {
    $_SESSION[$key_thor1] = $_GET["thor1"];
}
else {
    $_SESSION[$key_thor1] += $_GET["thor1"];
}

//thor2
if(!isset($_SESSION[$key_thor2])) {
    $_SESSION[$key_thor2] = $_GET["thor2"];
}
else {
    $_SESSION[$key_thor2] += $_GET["thor2"];
}

//thor3
if(!isset($_SESSION[$key_thor3])) {
    $_SESSION[$key_thor3] = $_GET["thor3"];
}
else {
    $_SESSION[$key_thor3] += $_GET["thor3"];
}

//avengers1
if(!isset($_SESSION[$key_avengers1])) {
    $_SESSION[$key_avengers1] = $_GET["avengers1"];
}
else {
    $_SESSION[$key_avengers1] += $_GET["avengers1"];
}

//avengers2
if(!isset($_SESSION[$key_avengers2])) {
    $_SESSION[$key_avengers2] = $_GET["avengers2"];
}
else {
    $_SESSION[$key_avengers2] += $_GET["avengers2"];
}

//spider
if(!isset($_SESSION[$key_spider])) {
    $_SESSION[$key_spider] = $_GET["spider-man"];
}
else {
    $_SESSION[$key_spider] += $_GET["spider-man"];
}

//guardians1
if(!isset($_SESSION[$key_guardians1])) {
    $_SESSION[$key_guardians1] = $_GET["guardians1"];
}
else {
    $_SESSION[$key_guardians1] += $_GET["guardians1"];
}

//guardians2
if(!isset($_SESSION[$key_guardians2])) {
    $_SESSION[$key_guardians2] = $_GET["guardians2"];
}
else {
    $_SESSION[$key_guardians2] += $_GET["guardians2"];
}

//panther
if(!isset($_SESSION[$key_panther])) {
    $_SESSION[$key_panther] = $_GET["panther"];
}
else {
    $_SESSION[$key_panther] += $_GET["panther"];
}

//hulk
if(!isset($_SESSION[$key_hulk])) {
    $_SESSION[$key_hulk] = $_GET["hulk"];
}
else {
    $_SESSION[$key_hulk] += $_GET["hulk"];
}

//ant-man
if(!isset($_SESSION[$key_ant])) {
    $_SESSION[$key_ant] = $_GET["ant-man"];
}
else {
    $_SESSION[$key_ant] += $_GET["ant-man"];
}


echo "<h1> Your shopping cart </h1>";
echo "Iron Man: $ironman1 <br>";
echo "Iron Man 2: $ironman2 <br>";
echo "Iron Man 3: $ironman3 <br>";
echo "Captain America: The First Avenger: $cap1 <br>";
echo "Captain America: The Winter Soldier: $cap2 <br>";
echo "Captain America: Civil War: $cap3 <br>";
echo "Thor: $thor1 <br>";
echo "Thor: The Dark World: $thor2 <br>";
echo "Thor: Ragnarok: $thor3 <br>";
echo "Avengers: $Avengers1 <br>";
echo "Avengers: Age of Ultron: $Avengers2 <br>";
echo "Spider-Man: Homecoming: $spider <br>";
echo "Guardians of the Galaxy: $guardians1 <br>";
echo "Guardians of the Galaxy: Volume 2: $guardians2 <br>";
echo "Black Panther: $panther <br>";
echo "THe Incredible Hulk: $hulk <br>";
echo "Ant-Man: $ant <br>";

//echo "<table> <tr> <th> Item </th> <th> Number in cart </th> </tr>";
//echo "<tr> <td> Iron Man </td> <td>" . $cart['ironman'] . "</td></tr>";

//echo "</table>"
?>