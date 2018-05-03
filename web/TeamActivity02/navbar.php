<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="navbar"> 
        <?php
        echo $page;
        ?>
        
        <ul> 
        <li class="<?php if($page == 'login') {echo 'active';}?>"> <a href="login.php"> Login </a> </li>
        <li class="<?php if($page == 'home') {echo 'active';}?>"> <a href="home.php"> Home </a> </li> 
        <li class="<?php if($page == 'about') {echo 'active';}?>"> <a href="about-us.php"> About Us </a> </li> 
        </ul> 
    </div>
</body>
</html>

