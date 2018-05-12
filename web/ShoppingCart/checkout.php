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
include 'printCart.php';
?>

<form action="confirmation.php" method="get">
<textarea name="address" rows="20" cols="5" placeholder="Enter the address for your delivery here."></textarea>
<input type="submit">
</form>
</body>
</html>

