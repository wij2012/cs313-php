<?php

session_start();

$key_ironman1 = "ironman1";

if(!isset($_SESSION[$key_ironman1])) {
    $_SESSION[$key_ironman1] = $_GET["ironman1"];
}
else {
    $_SESSION[$key_ironman1] += $_GET["ironman1"];
}
/*if(!isset($_SESSION[$cart])){
$_SESSION[$cart] = array("ironman1" => "0",
"ironman1" => "0",
"ironman2" => "0",
"ironman3" => "0",
"cap1" => "0",
"cap2" => "0",
"cap3" => "0",
"thor1" => "0",
"thor2" => "0",
"thor3" => "0",
"avengers1" => "0",
"avengers2" => "0",
"spider-man" => "0",
"guardians1" => "0",
"guardians2" => "0",
"panther" => "0",
"hulk" => "0",
"ant-man" => "0",);
}

else{
    $_SESSION[$cart["ironman1"]] += $_GET["ironman1"];
    $cart["ironman2"] += $_GET["ironman2"];
    $cart["ironman3"] += $_GET["ironman3"];
    $cart["cap1"] += $_GET["cap1"];
    $cart["cap2"] += $_GET["cap2"];
    $cart["cap3"] += $_GET["cap3"];
    $cart["thor1"] += $_GET["thor1"];
    $cart["thor2"] += $_GET["thor2"];
    $cart["thor3"] += $_GET["thor3"];
    $cart["avengers1"] += $_GET["avengers1"];
    $cart["avenger2"] += $_GET["avengers2"];
    $cart["spider-man"] += $_GET["spider-man"];
    $cart["guardians1"] += $_GET["guardians1"];
    $cart["guardians2"] += $_GET["guardians2"];
    $cart["panther"] += $_GET["panther"];
    $cart["hulk"] += $_GET["hulk"];
    $cart["ant-man"] += $_GET["ant-man"];
}*/

echo "<h1> Your shopping cart </h1>";
echo "Iron Man: $ironman1";
//echo "<table> <tr> <th> Item </th> <th> Number in cart </th> </tr>";
//echo "<tr> <td> Iron Man </td> <td>" . $cart['ironman'] . "</td></tr>";

//echo "</table>"
?>