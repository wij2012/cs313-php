<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping cart</title>
</head>
<body>
    <h1>Your Shopping Cart</h1>
<?php

include 'makeCart.php';

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
echo "Avengers: $avengers1 <br>";
echo "Avengers: Age of Ultron: $avengers2 <br>";
echo "Spider-Man: Homecoming: $spider <br>";
echo "Guardians of the Galaxy: $guardians1 <br>";
echo "Guardians of the Galaxy: Volume 2: $guardians2 <br>";
echo "Black Panther: $panther <br>";
echo "The Incredible Hulk: $hulk <br>";
echo "Ant-Man: $ant <br>";

?> 

<form action="">
    <input type="text">
</form>
</body>
</html>

