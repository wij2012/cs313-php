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
    <link rel="stylesheet" href="chessStyle.css">
    <title>Document</title>
</head>
<body>
    <h1>Create a new Player </h1>
    <div class="data">
    <?php
    $player = htmlspecialchars($_POST["playerName"]);

    //insert new player into player table
    if(!empty($player)){
    $query = "INSERT INTO players(name) VALUES (:name)";
    $statement = $db->prepare($query);
    $statement->bindValue(":name", $player, PDO::PARAM_STR);
    $statement->execute();
    }
    
    //display all player names in players table
    echo '<div><strong>Players</strong> <br>';
    foreach ($db->query('SELECT * FROM players') as $row)
    {
        echo $row['name'] . ' <br>';
    }
    echo '</div>';
    ?>

    <form action="createPlayer.php" method="post">
    <div>Input the new Player's name</div>
    <input type="text" name="playerName">
    <br>
    <input type="submit">
    </form>
    </div>
</body>
</html>