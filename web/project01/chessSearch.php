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
    <title>Document</title>
</head>
<body>
    <h1>Search for Chess games, players, or comments</h1>

    <?php
    //need a drop menu to say what table i'm seraching


    // need an input box to type wht is being searched
    ?>

    <form action="chessSearch.php" method="post">
        <div> Are you searching for a player's games or comments on games? </div>
        <select name="table">
            <option value="matches"> Matches </option>
            <option value="comments"> Comments </option>
        </select>
        <br> <br>
        
        <?php $table = $_POST["table"];
        echo "<div>Enter the player whose $table you are searching.</div>"; 
        ?>
        <input type="text">
    </form>
</body>
</html>