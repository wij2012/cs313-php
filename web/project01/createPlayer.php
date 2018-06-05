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
    <h1>Create a new Player </h1>
    <?php
    $player = htmlspecialchars($_POST["playerName"]);
    echo $player;
    var_dump($_POST);
    echo "player: ";
    var_dump($player);

    if(!empty($player)){
    $query = "INSERT INTO players(name) VALUES (:name)";
    $statement = $db->prepare($query);
    $statement->bindValue(":name", $player, PDO::PARAM_STR);
    $statement->execute();
    die();
    }
    
    echo '<div><strong>Players</strong> <br>';
    foreach ($db->query('SELECT * FROM players') as $row)
    {
        echo $row['name'] . ' <br>';
    }
    echo '</div>';
    ?>

    <form action="createPlayer.php" action="post">
    <div>Input the new Player's name</div>
    <input type="text" name="playerName">
    <br>
    <input type="submit">
    </form>
</body>
</html>