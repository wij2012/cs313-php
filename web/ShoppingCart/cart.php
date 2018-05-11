<?php

session_start();

$key_ironman1 = "ironman1";

if(!isset($_SESSION[$key_ironman1])) {
    $_SESSION[$key_ironman1] = $_POST["ironman1"];
}
else {
    $_SESSION[$key_ironman1] += $_POST["ironman1"];
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
    $_SESSION[$cart["ironman1"]] += $_POST["ironman1"];
    $cart["ironman2"] += $_POST["ironman2"];
    $cart["ironman3"] += $_POST["ironman3"];
    $cart["cap1"] += $_POST["cap1"];
    $cart["cap2"] += $_POST["cap2"];
    $cart["cap3"] += $_POST["cap3"];
    $cart["thor1"] += $_POST["thor1"];
    $cart["thor2"] += $_POST["thor2"];
    $cart["thor3"] += $_POST["thor3"];
    $cart["avengers1"] += $_POST["avengers1"];
    $cart["avenger2"] += $_POST["avengers2"];
    $cart["spider-man"] += $_POST["spider-man"];
    $cart["guardians1"] += $_POST["guardians1"];
    $cart["guardians2"] += $_POST["guardians2"];
    $cart["panther"] += $_POST["panther"];
    $cart["hulk"] += $_POST["hulk"];
    $cart["ant-man"] += $_POST["ant-man"];
}*/

echo "<h1> Your shopping cart </h1>";
echo "Iron Man: $ironman1";
//echo "<table> <tr> <th> Item </th> <th> Number in cart </th> </tr>";
//echo "<tr> <td> Iron Man </td> <td>" . $cart['ironman'] . "</td></tr>";

//echo "</table>"
?>