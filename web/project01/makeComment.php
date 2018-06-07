<?php
    include 'navbar.php';
    try{
     $dbUrl = getenv('DATABASE_URL');

     $dbopts = parse_url($dbUrl);
     
     $dbHost = $dbopts["host"];
     $dbPort = $dbopts["port"];
     $dbUser = $dbopts["user"];
     $dbPassword = $dbopts["pass"];
     $dbName = ltrim($dbopts["path"],'/');
     
     $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
     
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $ex){
        echo 'Error!' . $ex->getMessage();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Comment on a match </h1>
    <?php
    
    ?>

    <form action="makeComment.php" method="post">
    <div>
    NOTICE: You must be a player listed on our website to make a comment on one of our chess matches
    <br> You can see if your name is listed in our database by clicling on the 'See all Records' link
    <br> at the top of the page and selecting Players.
    <br>
    </div>
    <div>Input the match ID Number (See all Records and select Match to check Match ID)</div>
    <input type="text">

    <div>Input your name</div>
    <input type="text">

    <div>Enter your comment here</div>
    <input type="text">
    <br>
    <input type="submit">
    </form>
</body>
</html>