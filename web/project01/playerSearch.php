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
    <h1>Search Players' games and comments </h1>

    <?php
        $table = $_POST["table"];
        $name = $_POST["playerName"];

        if($table == 'matches'){
            /*foreach($db->query('SELECT * FROM players') as $row){
                //echo "id = " . $row['id'];
                echo "" . $row['name'];
            }*/
            
            $query = "SELECT * FROM players 
            WHERE name = :name";
            $statement = $db->prepare($query);
            $statement->bindValue(":name", $name, PDO::PARAM_STR);
            $statement->execute();

            $player = $statement->fetch();
            echo "Player name " . $player["name"]; 
            $id = $player["id"];

            //search for matches with the given player id in the game (win or lose)
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
            WHERE p1.id = :id OR p2.id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(":id", $id, PDO::PARAM_INT);
            $statement->execute();

            echo "<table><tr><th>Match ID #</th> <th> Player 1 </th> <th> Player 2 </th> <th> Winner </th> <th> Date Played </th></tr>";
            foreach($statement->fetch() as $match){
                echo "<tr><td>" . $match["id"] . "</td>";
                echo "<td>" . $match["p1n"] . "</td>";
                echo "<td>" . $match["p2n"] . "</td>";
                echo "<td>" . $match["p3n"] . "</td>";
                echo "<td>" . $match["date"] . "</td></tr>";
            }
            echo "</table> </div>";

        }

        else if($table == 'comments'){

        }
    //need a drop menu to say what table i'm seraching


    // need an input box to type who is being searched
    ?>

    <form action="playerSearch.php" method="post">
        <div> Are you searching for a player's games or comments on games? </div>
        <select name="table">
            <option value="matches"> Matches </option>
            <option value="comments"> Comments </option>
        </select>
        <br> <br>
        
        <div> Enter the name of the player who you are searching </div>
        <input type="text" name="playerName">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>