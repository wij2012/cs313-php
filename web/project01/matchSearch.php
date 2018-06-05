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
    <h1>Search Match Records and Match Comments</h1>
    <?php
    $id = $_POST["matchID"];

    if(!empty($id)){
        $query = "SELECT match.id
        , p1.name AS p1N
        , p2.name AS p2N
        , p3.name AS p3N
        , match.date FROM players p1 INNER JOIN match 
        ON p1.id = match.player1
        INNER JOIN players p2 
        ON p2.id = match.player2
        INNER JOIN players p3
        ON p3.id = match.winner
        WHERE match.id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->execute();

        $match = $statement->fetch();

        
        echo "<tr><td>" . $row["id"];
                echo "<td>" . $row["p1n"];
                echo "<td>" . $row["p2n"];
                echo "<td>" . $row["p3n"];
                echo "<td>" . $row["date"];
        }
    ?>
    
    <form action="matchSearch.php">
    Enter the ID number of the match you would like to search
    <input type="text" name="matchID">
    <input type="submit">
    </form>
</body>
</html>